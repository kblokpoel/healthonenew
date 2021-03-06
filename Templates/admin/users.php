<!DOCTYPE html>
<html>
<?php
include_once('../Templates\defaults\head.php');
?>

<body>
    <div class="container" style="background:gray">
        <?php
        include_once('../Templates/defaults/header.php');
        include_once('../Templates/defaults/adminNav.php');
        include_once('../Templates/defaults/pictures.php');
        global $users;
        ?>

        <h3 class="text-warning">Sportcenter HealthOne Admin Panel voor Gebruikers</h3>
        <div class="row gy-4" style="width: 95%; margin: auto;">
            <?php foreach ($users as $user) : ?>
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-auto" style="width: 10rem"><br>
                        <img src="<?=$user->image;?>" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col">
                        <div class="card-block px-2">
                            <h4 class="card-title"><?=$user->first_name;?> <?=$user->last_name;?></h4>
                            <p class="card-text"><?=$user->email;?></p>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-footer w-100 text-muted">
                    <?=$user->id;?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <hr>
        <?php
        include_once('../Templates/defaults/footer.php');
        ?>
    </div>
</body>

</html>