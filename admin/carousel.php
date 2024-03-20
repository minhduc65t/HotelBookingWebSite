
<?php
    require('inc/essentials.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Carousel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
        <?php require('css/common.css'); ?>
    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">CAROUSEL</h3>



            <!-- Carousel section -->

            <div class="card border-0 shadown-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Images</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#carousel-s">
                        <i class="bi bi-plus-square"></i>Add
                        </button>
                    </div>
                    
                    <div class="row" id="carousel-data">
                    </div>

                </div>
            </div>

                        <!-- Carousel modal -->

                        <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true">
                <div class="modal-dialog">
                    <form id="carousel_s_form">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Image</h5>
                        </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Picture</label>
                                    <input type="file" name="carousel_picture" id="carousel_picture_inp" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none" required>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" onclick="carousel_picture_inp.value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn custom-bg text-white shadow-none" data-bs-dismiss="modal">SUBMIT</button>
                        </div>
                        </div>
                    </form>                    
                </div>
                        </div>

            
        </div>
    </div>
</div>




<?php require('inc/scripts.php'); ?>
<script src="scripts/carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>