<?php

session_start();
require './config/config.php';
global $conn;
if (!isset($_SESSION['user_fullname'])) {
    echo "You are logged out";
    header('location:login.php');
}







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Eutectic Details</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- --------------google font----------- -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
</head>

<body class="sb-nav-fixed">
    <!-- navbar -->
    <?php
    require 'navbar.php';
    ?>
    <!-- navbar End -->
    <div id="layoutSidenav">
        <!-- Sidebar -->
        <?php
        require 'sidebar.php';
        ?>
        <!-- Sidebar End -->

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid my-5 pb-5">

                    <div class="tab-content" id="pills-tabContent">
                        <div class="row">
                            <div class="col-12">
                                <div class="card my-5 w-100 position-relative overflow-hidden mb-0">
                                    <div class="card-body p-4">

                                        <form action="" method="POST">
                                            <div class="row text-dark">

                                                <h3 class="font-inter my-5">Eutectic Details</h3>
                                                <div class="row mb-5">

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="model_no" class="form-label fw-semibold">Model No</label>
                                                            <input type="text" class="w-100" name="model_no" placeholder="Model No">
                                                            <span class="text-danger fs-6 "></span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_length" class="form-label fw-semibold">Body Size</label>
                                                            <input type="text" class="w-100" name="body_length" placeholder="Body Size">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="unit_Custom" class="form-label fw-semibold">Unit Custom</label>
                                                            <input type="text" class="w-100" name="unit_Custom" placeholder="Unit: Custom">
                                                        </div>
                                                        <div class=" mb-3">
                                                            <label for="additional_details" class="form-label fw-semibold">Additional Details</label>
                                                            <input type="text" class="w-100" name="additional_details" placeholder="Additional Details">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="chassis_frame" class="form-label fw-semibold">Chassis Frame</label>
                                                            <input type="text" class="w-100" name="chassis_frame" placeholder="Chassis Frame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="compressor" class="form-label fw-semibold">Compressor</label>
                                                            <input type="text" class="w-100" name="compressor" placeholder="Compressor">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="refrigerant" class="form-label fw-semibold">refrigerant</label>
                                                            <input type="text" class="w-100" name="refrigerant" placeholder="Refrigerant">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="power" class="form-label fw-semibold">Power</label>
                                                            <input type="text" class="w-100" name="power" placeholder="Power">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="condensor" class="form-label fw-semibold">Condenser</label>
                                                            <input type="text" class="w-100" name="condensor" placeholder="Condenser">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="eutectic_plates" class="form-label fw-semibold">Eutectic Plates</label>
                                                            <input type="text" class="w-100" name="eutectic_plates" placeholder="Eutectic Plates">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="misc" class="form-label fw-semibold">MISC</label>
                                                            <input type="text" class="w-100" name="misc" placeholder="MISC">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>