<?php


session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'db.php';
$emailNoFound = false;

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);


    $emailquery = "SELECT * FROM registrationemail WHERE email='$email' ";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount) {

        $userdata = mysqli_fetch_array($query);

        $username = $userdata['username'];
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

                    $mail->setFrom('hammadking427@gmail.com', 'Abu_Hammad');
                    $mail->addAddress($email, $username);

                    $mail->Subject = 'Password Reset';
                    $mail->Body = "Hi, $username. Click here too activate your account 
                    http://localhost/cleint-1/reset_password.php?token=$token ";
                    $send_email = "From: hammadking427@gmail.com";

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
        <h1 class="text-center">Recover Account</h1>
        <h5 class="text-center my-3">Please fill email id properly</h5>

        <div class="row">
            <div class="col-lg-4">


                <!-- registration -->
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


                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email Address"
                            required>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary btn-lg w-100" value="Send Email">

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