<?php


session_start();
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'db.php';
$updatedPass = false;
$noUpdated = false;
$passNoMatch = false;
$noFoundToken = false;

if (isset($_POST['submit'])) {

    if (isset($_GET['token'])) {
        $token = $_GET['token'];


        $newPassword = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

        $pass = password_hash($newPassword, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        if ($newPassword === $cpassword) {

            $updatequery = " UPDATE `registrationemail` SET `password` = '$pass' 
            WHERE `token` = '$token' ";


            $iquery = mysqli_query($conn, $updatequery);
            if ($iquery) {

                // $updatedPass = true;
                $_SESSION['msg'] = "Your password has been updated";
                header('location:login.php');


            } else {
                $noUpdated = true;
                header('location:reset_password.php');
            }
        }else{
            $passNoMatch = true;
        }
    }else{
        $noFoundToken = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- costume css -->
    <link rel="stylesheet" href="./assets/css/allstyle.css">
</head>

<body>

    <div class="container my-5">
        <h1 class="text-center">Reset Password</h1>
        <!-- <h5 class="text-center">Get started with your free acount</h5> -->

        <div class="row">
            <div class="col-lg-4">

                <!-- reset_password -->
                <form action="" method="POST">

                    <?php

                    if ($updatedPass == true) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Error!</strong> Your password is not updated
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                    if ($noUpdated == true) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Error!</strong> Your password is not updated
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                    if ($passNoMatch == true) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Error!</strong> Your password is not match
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                    if ($noFoundToken == true) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Error!</strong> No token found 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }

                    ?>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" class="form-control form-control-lg"
                            placeholder="New Password" minlength="8" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg"
                            placeholder="Confirm Password" minlength="8" required>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary btn-lg w-100" value="Update Password">

                    <p class="text-center my-3">Have an acount? <a href="./login.php"
                            style="text-decoration: none;">Login In</a>
                    </p>

                </form>
            </div>
        </div>

    </div>











    <!-- Bootstrap SJ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>


</body>

</html>