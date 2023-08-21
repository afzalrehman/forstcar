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
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- costume css -->
    <link rel="stylesheet" href="./assets/css/allstyle.css">
</head>

<body>

    <div class="container my-5">
        <h1 class="text-center create-acount-h1">Create Acount</h1>
        <!-- <h5 class="text-center create-acount-h1">Get started with your free acount</h5> -->

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

                <!-- registration -->
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

                    <?php

                    if ($insertSuccess == true) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Error!</strong> Inserted Successfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                    if ($emailAlready == true) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Error!</strong> Email Already Exists
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                    if ($noInserted == true) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Error!</strong> No Inserted
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                    if ($passNoMatch == true) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Error!</strong> Password are not matching
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }

                    ?>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" id="username" name="username" class="form-control form-control-lg " placeholder="User Name" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email Address" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <input type="number" id="mobile" name="mobile" class="form-control form-control-lg" placeholder="Phune Number" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" minlength="8" required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg" placeholder="Confirm Password" minlength="8" required>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary btn-lg w-100" value="Create Acount">

                    <p class="text-center my-3">Have an acount? <a href="./login.php" style="text-decoration: none;">Login In</a>
                    </p>

                </form>
            </div>
        </div>

    </div>











    <!-- Bootstrap SJ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


</body>

</html>