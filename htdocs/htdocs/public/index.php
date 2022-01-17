<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Contact.php';
require '../Modules/Users.php';
session_start();


$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categories.php";
        break;

    case 'category';
        $titleSuffix = '| Category';
        if (isset($_GET['id'])) {
            $categoryId = $_GET['id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);
            include_once "../Templates/product.php";

        } else {
            $titleSuffix = ' | Home';
            include_once "../Templates/home.php";
        }

        break;

    case 'product':
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = getProduct($productId);
            $name = getCategoryName($product->category_id);
            $titleSuffix = ' | ' . $product->name;
            // $reviews = getReviews($productId);
            include_once "../Templates/sportapparaat_detail.php";
        } else {
            $titleSuffix = '| Home';
            include_once "../Templates/home.php";
        }
        break;

    case 'contact';
        $times = getTime();
        include_once '../Templates/contact.php';

        break;

    case 'login':
        $titleSuffix = ' | Login';
        if(isset($_POST['login'])){
            $result = checkLogin();
            switch ($result){
                case 'ADMIN':
                    header("location: /admin/home");
                    break;
                case 'MEMBER':
                case 'FAILURE':
                    $message = "E-mail en/of wachtwoord niet correct ingevuld.";
                    include_once "../Templates/login.php";
                    break;
                case 'INCOMPLETE':
                    $message = "Check of u alle velden heeft ingevuld";
                    include_once "../Templates/login.php";
                    break;
            }
        }
        else {
            include_once "../Templates/login.php";
        }
        break;
    case 'admin';
        include_once ('admin.php');
        break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}


function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}

