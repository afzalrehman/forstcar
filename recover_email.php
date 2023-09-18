<?php


session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require './config/config.php';
$emailNoFound = false;

if (isset($_POST['submit'])) {
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);


    $emailquery = "SELECT * FROM `admin_users` WHERE `user_email` = '$user_email' ";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount) {

        $userdata = mysqli_fetch_array($query);

        $user_fullname = $userdata['user_fullname'];
        $token = $userdata['token'];

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

            $mail->setFrom('hammadking427@gmail.com', 'ABu_Hammad');
            $mail->addAddress($user_email, $user_fullname);

            $mail->Subject = 'Password Reset';
            $mail->Body = "Hi, $user_fullname. Click here too activate your account 
                    http://localhost/forstcar/reset_password.php?token=$token ";
            $send_email = "From: muhammadafzal1903@gmail.com";

            $mail->send();
            $_SESSION['msg'] = "Check you mail to reset your password 
                    $email";
            header('location:login.php');
        } catch (Exception $e) {
            echo "Failed to send email. Error: {$mail->ErrorInfo}";
        }
    } else {
        $emailNoFound = true;
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover Account</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- costume css -->
    <link rel="stylesheet" href="./assets/css/allstyle.css">
</head>

<body>

    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-6">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="index.html" class="text-nowrap logo-img text-center d-block mb-3 mt-3 w-100">
                                    <img src="./assets/img/cropped-frostcar_logo-2-1.png" width="50%" alt="">
                                </a>
                                <div class="position-relative text-center my-4">
                                    <p class="fw-bolder mt-3 fs-3 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">
                                        Login</p>
                                    <span class="border-bottom w-100 position-absolute start-50 z-index-5 translate-middle"></span>
                                </div>
                                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

                                    <?php

                                    if ($emailNoFound == true) {
                                        echo '
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>@Error!</strong> No Email Found Please Fill Properly Email.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
                                    }

                                    ?>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="" name="user_email" placeholder="User Email">
                                    </div>
                                    <input type="submit" name="submit" value="Send Email" class="btn btn-primary w-100 py-8 mb-4 rounded-2">
                                    <p class="text-center my-3">Have an acount? <a href="./login.php" style="text-decoration: none;">Login In</a>
                                    </p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <!-- Bootstrap SJ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


</body>

</html>