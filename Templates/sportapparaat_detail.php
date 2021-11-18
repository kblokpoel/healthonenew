<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $product;
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <div class="col-md-7 order-md2">
        <img style="text-align: center;" class="img-fluid" src="<?= $product->picture; ?>" alt="image">
    </div>
    <hr>
    <div class="col-md-5 order-md-1">
        <p style="text-align: center" class="lead">
            <?= $product->description?>
        </p>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Plaats review
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Post review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleTextArea" class="form-label">Naam</label>
                                <input class="form-control" id="exampleTextArea">
                            </div>
                            <div class="mb-3">
                                <label for="exampleTextArea" class="form-label">Review</label>
                                <textarea class="form-control" id="exampleTextArea"></textarea>
                            </div>
                            <p style="text-align: center">Hoeveel sterren geeft u dit product?</p>
                            <div class="rate" id="stars">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="5 sterren">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="4 sterren">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="3 sterren">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="2 sterren">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="1 sterren">1 star</label>
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
