<?php

session_start();
ob_start();

require 'config.php';
$emailError = false;
$passError = false;

if (isset($_POST['submit'])) {
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);

    $email_search = "SELECT * FROM `admin_users` WHERE `user_email` = '$user_email' AND `is_verified` = 'active' ";
    $query = mysqli_query($conn, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['user_password'];

        $_SESSION['user_fullname'] = $email_pass['user_fullname'];
        $_SESSION['user_email'] = $email_pass['user_email'];

        $pass_decode = password_verify($user_password, $db_pass);

        if ($pass_decode) {

            if (isset($_POST['rememberme'])) {

                setcookie('emailcookie', $user_email, time() + 86400);
                setcookie('passwordcookie', $user_password, time() + 86400);

                header('location:index.php');
            } else {
                header('location:index.php');
            }
        } else {
            $passError = true;
        }
    } else {
        $emailError = true;
    }
}



// define("MAX_LOGIN_ATTEMPTS", 3);
// define("LOCKOUT_DURATION", 30); // 30 seconds

// function checkLogin($email, $password) {
//     // Yahan actual login logic aayega

//     if (loginFailed) { // Jab login fail ho
//         if (!isset($_SESSION['login_attempts'])) {
//             $_SESSION['login_attempts'] = 1;
//         } else {
//             $_SESSION['login_attempts']++;
//             if ($_SESSION['login_attempts'] >= MAX_LOGIN_ATTEMPTS) {
//                 $_SESSION['login_locked'] = time() + LOCKOUT_DURATION;
//                 echo "Login disabled for 30 seconds due to multiple failed attempts.";
//                 exit;
//             }
//         }
//     } else { // Agar login successful ho
//         unset($_SESSION['login_attempts']);
//         unset($_SESSION['login_locked']);
//     }
// }

// function isLoginLocked() {
//     return isset($_SESSION['login_locked']) && $_SESSION['login_locked'] > time();
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     if (isLoginLocked()) {
//         echo "Login is currently disabled. Please wait and try again later.";
//         exit;
//     }

//     checkLogin($email, $password);
// }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    .msg {
        height: 50px;
        border-radius: 10px;
        justify-content: center;
        text-align: center;
        padding-top: 10px;
    }
</style>


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

                                <div>
                                    <p class="msg pb-5 bg-success text-white px-5">
                                        <?php
                                        if (isset($_SESSION['msg'])) {
                                            echo $_SESSION['msg'];
                                        } else {
                                            echo $_SESSION['msg'] = "You are logged Out. PLease login again.";
                                        }
                                        ?>
                                    </p>
                                </div>

                                <?php
                                if ($passError == true) {
                                    echo '
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>@Error!</strong> Incrorropt Password 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                                }

                                if ($emailError == true) {
                                    echo '
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>@Error!</strong> Envelid Email
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                }
                                ?>


                                <form action="" method="POST">

                                    <div class="mb-3">
                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="" name="user_email" placeholder="User Email" value="<?php
                                                                                                                                    if (isset($_COOKIE['emailcookie'])) {
                                                                                                                                        echo $_COOKIE['emailcookie'];
                                                                                                                                    }
                                                                                                                                    ?>">
                                    </div>
                                    <div class="mb-4">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="" name="user_password" placeholder="User Password" value="<?php
                                                                                                                                                if (isset($_COOKIE['passwordcookie'])) {
                                                                                                                                                    echo $_COOKIE['passwordcookie'];
                                                                                                                                                }
                                                                                                                                                ?>">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" id="rememberme" name="rememberme">
                                            <label class="form-check-label text-dark" for="rememberme">
                                                Remeber me
                                            </label>
                                        </div>
                                        <a class="text-primary fw-medium" href="./recover_email.php">Forgot Password?</a>
                                    </div>
                                    <button name="submit" href="index.html" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>