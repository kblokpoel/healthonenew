<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM products WHERE category_id = :id");
    $query->bindParam("id", $categoryId);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Product");
    return $result;
}

function getProduct(int $productId)
{
    global $pdo;
    try
    {
        $query = $pdo->prepare("SELECT * FROM products WHERE id = :id");
        $query->bindParam("id", $productId);
        $query->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $query->execute();
    }catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $query->fetch();
}

function getAllProducts()
{
    global $pdo;
    try {
        $query = $pdo->prepare("SELECT * FROM products p join categories c ON (p.category_id = c.id)");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS,"Product");
    }
    catch(PDOException $e){
        $e->error_message;
    }
    return $result;
}

function deleteProduct(int $productId)
{
    global $pdo;
    try {
        $pdo->prepare("DELETE FROM products WHERE id=$productId;");
    }
    catch(PDOException $e){
        $e->error_message;
    }
}
