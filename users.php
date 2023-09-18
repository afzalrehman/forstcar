<?php
session_start();
if (!isset($_SESSION['user_fullname'])) {
    echo "You are logged out";
    header('location:login.php');
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require './config/config.php';
$error = array();
$succses = array();
$warning = array();

if (isset($_POST['submit'])) {
    $user_fullname = mysqli_real_escape_string($conn, $_POST['user_fullname']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
    $user_contact = mysqli_real_escape_string($conn, $_POST['user_contact']);
    // $user_image = $_FILES['user_image'];

    $pass = password_hash($user_password, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    // if (empty($user_fullname)) {
    //     $error['user_fullname'] = "Please Fill Name";
    // }
    // if (empty($user_email)) {
    //     $error['user_email'] = "Please Fill Email";
    // }
    // if (empty($user_password)) {
    //     $error['user_password'] = "Please Fill Passwrod";
    // }
    // if (empty($user_type)) {
    //     $error['user_type'] = "Please Fill User Type";
    // }
    // if (empty($user_contact)) {
    //     $error['user_contact'] = "Please Fill Contact";
    // }
    // if (empty($user_image)) {
    //     $error['user_image'] = "Please Fill image";
    // } else {

    // $imagefilename = $user_image['name'];

    // $imagefileerror = $user_image['error'];

    // $imagefiletemp = $user_image['tmp_name'];

    // $filename_separate = explode('.', $imagefilename);

    // $file_extension = strtolower(end($filename_separate));

    // $extension = array('jpeg', 'jpg', 'png');

    // if (in_array($file_extension, $extension)) {

    //     $upload_image = 'upload_image/' . $imagefilename;
    //     move_uploaded_file($imagefiletemp, $upload_image);


    $emailquery = "SELECT * FROM admin_users WHERE `user_email` = '$user_email' ";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        $warning['warning'] = 'Email already exists';
    } else {

        $contactquery = "SELECT * FROM admin_users WHERE `user_contact` = '$user_contact' ";
        $query = mysqli_query($conn, $contactquery);

        $contactcount = mysqli_num_rows($query);
        if ($contactcount > 0) {
            $warning['warning'] = 'Contact Number already exists';
        } else {

            $insertquery = "INSERT INTO admin_users (`user_fullname`, `user_email`, `user_password`, `user_type`, `user_contact`, `registered_on`,`token`, `is_verified`) 
            VALUES ('$user_fullname', '$user_email', '$pass', '$user_type', '$user_contact',  NOW(),'$token', 'inactive')";

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
                    $mail->addAddress($user_email, $user_fullname);

                    $mail->Subject = 'Email Activation';
                    $mail->Body = "Hi, $user_fullname. Click here too activate your account 
                    http://localhost/forstcar/activate.php?token=$token ";
                    $send_email = "From: hammadking427@gmail.com";

                    $mail->send();
                    $succses['succses'] = 'Please Check The Gmail And Activated';
                    $user_fullname = '';
                    $user_email = '';
                    $user_password = '';
                    $user_contact = '';
                    $user_image = '';
                    $_SESSION['msg'] = "Check you mail to activate your account 
                    $user_email";
                } catch (Exception $e) {
                    echo "Failed to send email. Error: {$mail->ErrorInfo}";
                }
            } else {
                $warning['warning'] = 'No Inserted';
            }
        }
    }
}
// }
// }
?>

<?php
require "includes/header.php";
require "includes/navbar.php";
require "includes/sidebar.php"; ?>
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

<main>
    <div class="container-fluid my-3">


        <?php

        if (isset($succses['succses']))
            echo '
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>@succsesfully!</strong> ' . $succses['succses'] . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';

        if (isset($warning['warning']))
            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Error!</strong> ' . $warning['warning'] . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';

        ?>


        <div class="card  my-5 mein-card mb-5">
            <h3 class=" font-inter text-center">Add New User</h3>
            <div class="container-fluid course-card">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="row my-5 ">
                        <div class="col-lg-6">

                            <div class="in">
                                <input type="text" name="user_fullname" class="inputDesign w-100 py-2 mt-3" placeholder="User FullName" value="<?php if (isset($_POST['submit'])) {
                                                                                                                                                    echo $user_fullname;
                                                                                                                                                } ?>">
                                <span class='fw-bold text-danger '><?php if (isset($error['user_fullname'])) {
                                                                        echo $error['user_fullname'];
                                                                    } ?></span>
                            </div>

                            <div class="in">
                                <input type="email" name="user_email" class="inputDesign w-100 py-2 mt-3" placeholder="User Email" value="<?php if (isset($_POST['submit'])) {
                                                                                                                                                echo $user_email;
                                                                                                                                            } ?>">
                                <span class='fw-bold text-danger '><?php if (isset($error['user_email'])) {
                                                                        echo $error['user_email'];
                                                                    } ?></span>
                            </div>
                            <div class="in">
                                <input type="password" name="user_password" class="inputDesign w-100 py-2 mt-3" placeholder="Passwrod" minlength="8" value="<?php if (isset($_POST['submit'])) {
                                                                                                                                                                echo $user_password;
                                                                                                                                                            } ?>">
                                <span class='fw-bold text-danger '><?php if (isset($error['user_password'])) {
                                                                        echo $error['user_password'];
                                                                    } ?></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <select name="user_type" class="inputDesign py-2 mt-3 w-100">
                                <option value="" selected> User Type</option>
                                <option value="Admin"> Admin</option>
                                <!-- <option value="Course type w-100 ">Admin</option>
                                        <option value="Course type w-100 "> Admin</option> -->
                            </select>
                            <span class='fw-bold text-danger '><?php if (isset($error['user_type'])) {
                                                                    echo $error['user_type'];
                                                                } ?></span>

                            <div class="in">
                                <input type="text" name="user_contact" class="inputDesign w-100 py-2 mt-3" placeholder="Contact " value="<?php if (isset($_POST['submit'])) {
                                                                                                                                                echo $user_contact;
                                                                                                                                            } ?>">
                                <span class='fw-bold text-danger '><?php if (isset($error['user_contact'])) {
                                                                        echo $error['user_contact'];
                                                                    } ?></span>
                            </div>
                            <!-- <div class="in">
                                            <input type="file" name="user_image" class="inputDesign w-100 py-2 mt-3" placeholder="Image" value="<?php if (isset($_POST['submit'])) {
                                                                                                                                                    echo $user_image;
                                                                                                                                                } ?>">
                                           

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