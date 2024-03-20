
<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Features & Facilities</title>
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
            <h3 class="mb-4">FEATURES & FACILITIES</h3>



            <!-- Feature section -->

            <div class="card border-0 shadown-sm mb-4">
                <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Features</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                        <i class="bi bi-plus-square"></i>Add
                        </button>
                    </div>

                    <div class="table-responsive-md" style="height: 350px; overflow-y : scroll;">
                     <table class="table table-hover border">
                        <thead>
                            <tr class="bg-dark text-light">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="features-data">
                            
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>

            <!-- Facilities section -->

            <div class="card border-0 shadown-sm mb-4">
                <div class="card-body">

                <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Facilities</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s">
                        <i class="bi bi-plus-square"></i>Add
                        </button>
                    </div>

                    <div class="table-responsive-md" style="height: 550px; overflow-y : scroll;">
                     <table class="table table-hover border">
                        <thead>
                            <tr class="bg-dark text-light">
                            <th scope="col">#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Name</th>
                            <th scope="col" width="40%">Description</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="facilities-data">
                            
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>



            
        </div>
    </div>
</div>


                <!-- Feature modal -->

                <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true">
                                <div class="modal-dialog">
                                    <form id="feature_s_form">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Feature</h5>
                                        </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Name</label>
                                                    <input type="text" name="feature_name" class="form-control shadow-none" required>
                                                </div>
                                                
                                            </div>
                                        <div class="modal-footer">
                                            <button type="reset"  class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                            <button type="submit" class="btn custom-bg text-white shadow-none" data-bs-dismiss="modal">SUBMIT</button>
                                        </div>
                                        </div>
                                    </form>                    
                                </div>
                                        </div>

                <!-- Facility modal -->
                <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true">
                <div class="modal-dialog">
                    <form id="facility_s_form">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Facilityr</h5>
                        </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Name</label>
                                    <input type="text" name="facility_name" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Icon</label>
                                    <input type="file" name="facility_icon" accept=".svg" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label ">Description</label>
                                    <textarea name="facility_desc" class="form-control shadow-none" rows="3"></textarea>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="reset"  class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn custom-bg text-white shadow-none" data-bs-dismiss="modal">SUBMIT</button>
                        </div>
                        </div>
                    </form>                    
                </div>
                        </div>



<?php require('inc/scripts.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="scripts/features_facilities.js"></script>
</body>
</html>