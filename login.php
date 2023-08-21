<?php

session_start();
ob_start();

require 'db.php';
$emailError = false;
$passError = false;

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "SELECT * FROM registrationemail WHERE email = '$email' AND status = 'active' ";
    $query = mysqli_query($conn, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if ($pass_decode) {

            if (isset($_POST['rememberme'])) {

                setcookie('emailcookie', $email, time() + 86400);
                setcookie('passwordcookie', $password, time() + 86400);

                header('location:home.php');
            } else {
                header('location:home.php');
            }


        } else {
            $passError = true;
        }
    } else {
        $emailError = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <div class="container my-5">
        <h1 class="text-center">Login Acount</h1>
        <!-- <h5 class="text-center">Get started with your free acount</h5> -->

        <div class="row">
            <div class="col-lg-4">

                <button type="button" class="btn btn-danger btn-lg w-100 my-3">
                    <i class="fa-solid fa-g"></i>
                    Login Gmail
                </button>

                <button type="button" class="btn btn-primary btn-lg w-100">
                    <i class="fa-brands fa-facebook"></i>
                    Login Facebook
                </button>

                <h6 class="text-center my-3">OR</h6>

                <div>
                    <p class="msg bg-success text-white px-5">
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                        } else {
                            echo $_SESSION['msg'] = "You are logged Out. PLease login again.";
                        }
                        ?>
                    </p>
                </div>

                <!-- login -->
                <form action="" method="POST">

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

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email Address"
                            required value="<?php
                            if (isset($_COOKIE['emailcookie'])) {
                                echo $_COOKIE['emailcookie'];
                            }
                            ?>">
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password"
                            required value="<?php
                            if (isset($_COOKIE['passwordcookie'])) {
                                echo $_COOKIE['passwordcookie'];
                            }
                            ?>">
                    </div>

                    <div class=" mb-3">
                        <input type="checkbox" name="rememberme">
                        <span>Remember Me</span>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary btn-lg w-100" value="Login Now">

                    <p class="text-center my-3">Forgot Your Password No Worry? <a href="./recover_email.php"
                            style="text-decoration: none;">Click Here</a>
                    <p class="text-center my-3">Don't Have an acount? <a href="./registemail.php"
                            style="text-decoration: none;">Sign Up Here</a>
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