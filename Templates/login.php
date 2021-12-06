<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Contact.php';
?>

<form method="post">
    <div class="mb-3">
        <label for="example1" class="form-label">Email Address</label>
        <input type="text" class="form-control" name="email" id="example1">
    </div>
    <div class="mb-3">
        <label for="example2" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="example2">
    </div>

    <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>
