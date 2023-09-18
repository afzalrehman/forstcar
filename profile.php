<?php
session_start();
include "./config/config.php";
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
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- --------------google font----------- -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
</head>
<style>
    .inputDesign {
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 7px;
        font-size: 16px;
        outline: none;
    }

    .inputDesign:focus {
        border-color: #0055b8;
        animation: inputFocusAnimation 0.3s;
    }

    @keyframes inputFocusAnimation {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }
</style>

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
                <div class="container-fluid my-3">


                    <div class="card  my-5 mein-card mb-5">
                        <h3 class=" font-inter text-center">PROFILE</h3>
                        <div class="container-fluid course-card">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row my-5 ">
                                    <div class="col-lg-6">

                                        <div class="in">
                                            <label for="user_fullname">You Full Name</label>
                                            <input type="text" name="user_fullname" id="user_fullname" class="inputDesign w-100 py-2  mb-3" placeholder="User FullName">

                                        </div>
                                        <div class="in">
                                            <label for="user_image">Image</label>
                                            <input type="file" id="user_image" name="user_image" class="inputDesign w-100 py-2 " placeholder="Image">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="in">
                                            <label for="user_contact">Enter Your Contact Number</label>
                                            <input type="text" id="user_contact" name="user_contact" class="inputDesign w-100  " placeholder="Contact">
                                        </div>

                                    </div>

                                    <button type="submit" name="submit" class="save py-2">Save</button>
                            </form>

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