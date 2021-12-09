<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>

    <h4>Sportcenter HealthOne registreren</h4>

    <form>
        <div class="form-group">
            <label for="userName">Naam</label>
            <input type="email" class="form-control" id="userName" aria-describedby="emailHelp" placeholder="Enter name">
            <small id="emailHelp" class="form-text text-muted">Voer uw volledige naam in.</small>
        </div>
        <div class="form-group">
            <label for="password">Wachtwoord</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord">
            <small id="emailHelp" class="form-text text-muted">Maak een sterk wachtwoord van tenmiste 8 tekens en 1 hoofdletter.</small>
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>