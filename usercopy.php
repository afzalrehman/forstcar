<?php


session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'db.php';
$insertSuccess = false;
$emailAlready = false;
$noInserted = false;
$passNoMatch = false;

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $emailquery = "SELECT * FROM registrationemail WHERE email='$email' ";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        $emailAlready = true;
    } else {
        if ($password === $cpassword) {

            $insertquery = "INSERT INTO `registrationemail`(`username`, `email`, `mobile`, `password`, `cpassword`, `token`, `status`) 
            VALUES ('$username','$email','$mobile','$pass','$cpass', '$token', 'inactive')";

            $iquery = mysqli_query($conn, $insertquery);
            if ($iquery) {

                $mail = new PHPMailer(true);
                try {
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'hammadking427@gmail.com';
                    $mail->Password = 'gtohfmaaanqufdbn';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    $mail->setFrom('hammadking427@gmail.com', 'Abu_Hammad');
                    $mail->addAddress($email, $username);

                    $mail->Subject = 'Email Activation';
                    $mail->Body = "Hi, $username. Click here too activate your account 
                    http://localhost/cleint-1/activate.php?token=$token ";
                    $send_email = "From: hammadking427@gmail.com";

                    $mail->send();
                    $_SESSION['msg'] = "Check you mail to activate your account 
                    $email";
                    header('location:login.php');
                } catch (Exception $e) {
                    echo "Failed to send email. Error: {$mail->ErrorInfo}";
                }
            } else {
                $noInserted = true;
            }
        } else {
            $passNoMatch = true;
        }
    }
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

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-white shadow">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html"><img width="200px" src="assets/img/cropped-frostcar_logo-2-1.png" alt=""></a>

        <!-- Sidebar Toggle-->
        <button class="btn text-black btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="text-dark fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav    ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="text-black fs-5 fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav side-bg bg-nav shadow" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link hover " href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link collapsed hover" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon "><i class="fa-solid fa-truck"></i></div>
                            Truck
                            <div class="sb-sidenav-collapse-arrow "><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link hover active " href="company.html">Company</a>
                                <a class="nav-link hover " href="add-truck.html">Add Truck Details</a>
                                <a class="nav-link hover " href="tables.html">View Truck Details</a>
                            </nav>
                        </div>


                        <a class="nav-link collapsed hover" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                            <div class="sb-nav-link-icon "><i class="fa-solid fa-user"></i></div>
                            Users
                            <div class="sb-sidenav-collapse-arrow "><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse " id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link hover  " href="user.html">User Add</a>
                                <a class="nav-link hover " href="uservewi.html">User Vewi</a>

                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer  bg-side-foter text-light">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php if (isset($succses['succses'])) echo $succses['succses']; ?>
                    <?php if (isset($warning['warning'])) echo $warning['warning']; ?>
                    <div class="card  my-5 mein-card mb-5">
                        <h3 class=" font-inter text-center">Add New User</h3>
                        <div class="container-fluid course-card">
                            <div class="row my-5 ">
                                <div class="col-lg-6">
                                    <form action="" method="post">
                                        <!-- <div class="in py-3">
                                            <input type="date" class=" input w-100 py-2 mt-3" placeholder="Date">
                                        </div> -->

                                        <div class="in">
                                            <input type="text" name="name" class=" input w-100 py-2 mt-3" placeholder="User Name">
                                            <span class='fw-bold text-danger '><?php if (isset($error['$name'])) {
                                                                                    echo $error['$name'];
                                                                                } ?></span>
                                        </div>

                                        <div class="in">
                                            <input type="email" name="email" class=" input w-100 py-2 mt-3" placeholder="User Email">
                                            <span class='fw-bold text-danger '><?php if (isset($error['$email'])) {
                                                                                    echo $error['$email'];
                                                                                } ?></span>
                                        </div>
                                        <div class="in">
                                            <input type="password" name="password" class=" input w-100 py-2 mt-3" placeholder="Passwrod ">
                                            <span class='fw-bold text-danger '><?php if (isset($error['$password'])) {
                                                                                    echo $error['$password'];
                                                                                } ?></span>
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                    <select name="user_type" class="input  py-2 mt-3 w-100">
                                        <option value="" selected> User Type</option>
                                        <option value="Admin"> Admin</option>
                                        <!-- <option value="Course type w-100 ">Admin</option>
                                        <option value="Course type w-100 "> Admin</option> -->
                                        <span class='fw-bold text-danger '><?php if (isset($error['$user_type'])) {
                                                                                echo $error['$user_type'];
                                                                            } ?></span>
                                    </select>

                                    <div class="in">
                                        <input type="text" name="contact" class=" input w-100 py-2 mt-3" placeholder="Contact ">
                                        <span class='fw-bold text-danger '><?php if (isset($error['$contact'])) {
                                                                                echo $error['$contact'];
                                                                            } ?></span>
                                    </div>
                                    <!-- <div class="in">
                                        <input type="file" name="image" class=" input w-100 py-2 mt-3" placeholder="Image ">
                                        
                                    </div> -->
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