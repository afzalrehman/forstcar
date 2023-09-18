<?php
session_start();
include "./config/config.php";
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
    <title>View Truck Details</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
                <div class="container-fluid px-4 my-5">



                    <form action="" method="POST">
                        <div class="row my-5">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 text-start py-3 px-4">
                                            <p class="font student"> Forcars usa body details</p>
                                        </div>
                                        <div class="col-lg-9 col-md-9 py-3 ">
                                            <div class="btn-edit-delete1 text-end px-1">
                                                <button type="submit" class="export-btn delete" name="delete_btn">
                                                    <span class="fa-regular fa-trash-can "></span>
                                                </button>
                                                <!-- <button type="submit" class="edit export-btn" name="edit">
                                                    <span class="fa-solid fa-pen-to-square "></span>
                                                </button> -->
                                                <a href="./exportViewTruckDetails.php">
                                                    <span class="fa-solid fa-cloud-arrow-down export export-btn" style="padding-top: 10px;"> </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="m-0 ">

                                    <div class="dov ">
                                        <div class="table-wrapper">
                                            <table class="contain-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <!-- <input class="chack" type="checkbox"> -->
                                                            <i class="fa-solid fa-plus "></i>
                                                        </th>
                                                        <th>Date<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Company Name <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Contact Name <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Address <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>FEE PER MONTH <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>City<i class="fa-solid fa-arrow-down px-2"></i>
                                                        </th>
                                                        <th>State<i class="fa-solid fa-arrow-down px-2"></i>
                                                        </th>
                                                        <th>Zip Code <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Telephone <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Email <i class="fa-solid fa-arrow-down px-2"></i></th>


                                                    </tr>
                                                </thead>

                                                <tbody>


                                                    <tr>
                                                        <td><input type="checkbox" class="text-input"></td>
                                                        <td class="font">Bold text column</td>
                                                        <td>Regular text column</td>
                                                        <td>Regular text column</td>
                                                        <td>Regular text column</td>
                                                        <td>Regular text column</td>
                                                        <td>Regular text column</td>
                                                        <td>Regular text column</td>
                                                        <td>Regular text column</td>
                                                        <td>Regular text column</td>
                                                        <td>Regular text column</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>