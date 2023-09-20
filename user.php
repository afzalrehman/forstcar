<?php
include 'config/config.php';
require './function/function.inc.php';
session_start();
global $conn;

if (!isset($_SESSION['user_fullname'])) {
    echo "You are logged out";
    header('location:login.php');
}



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$error = array();
$success = array();
$warning = array();

if (isset($_POST['submit'])) {
    $user_fullname = mysqli_real_escape_string($conn, $_POST['user_fullname']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
    $user_contact = mysqli_real_escape_string($conn, $_POST['user_contact']);
    $user_image = $_FILES['user_image']['name'];
    $image_temp_name = $_FILES['user_image']['tmp_name'];
    $image_folder = 'images/' . $user_image;

    $pass = password_hash($user_password, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    if (
        empty($_POST['user_fullname']) || empty($_POST['user_email']) || empty($_POST['user_password']) || empty($_POST['user_type']) ||
        empty($_POST['user_contact']) || empty($_FILES['user_image'])
    ) {
        if (empty($user_fullname)) {
            $error['user_fullname'] = "** Please Fill Fullname";
        }
        if (empty($user_email)) {
            $error['user_email'] = "** Please Fill Email";
        }
        if (empty($user_password)) {
            $error['user_password'] = "** Please Fill Password";
        }
        if (empty($user_type)) {
            $error['user_type'] = "** Please Fill User Type";
        }
        if (empty($user_contact)) {
            $error['user_contact'] = "** Please Fill User Contact";
        }
        if (empty($user_image)) {
            $error['user_image'] = "** Please Fill Image";
        }
    } else {

        $emailquery = "SELECT * FROM `admin_users` WHERE `user_email` = '$user_email'";
        $query = mysqli_query($conn, $emailquery);
        $emailcount = mysqli_num_rows($query);
        
        if ($emailcount > 0) {
            $warning['warning'] = 'Email already exists';
        } else {

            $contactquery = "SELECT * FROM `admin_users` WHERE `user_contact` = '$user_contact'";
            $query = mysqli_query($conn, $contactquery);
            $contactcount = mysqli_num_rows($query);

            if ($contactcount > 0) {
                $warning['warning'] = 'Contact Number already exists';
            } else {

                $insertquery = "INSERT INTO `admin_users` (`user_fullname`, `user_email`, `user_password`, `user_type`, `user_contact`, `user_image`, `registered_on`, `token`, `is_verified`) 
                        VALUES ('$user_fullname', '$user_email', '$pass', '$user_type', '$user_contact', '$user_image', NOW(), '$token', 'Inactive')";

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

                        // Include the email content from email.php
                        include('email.php');
                        
                        // Replace placeholders with actual values
                        $emailContent = str_replace('$user_fullname', $user_fullname, $emailContent);
                        $emailContent = str_replace('$token', $token, $emailContent);

                        // Set the email content as HTML
                        $mail->isHTML(true);
                        $mail->Body = $emailContent;

                        $mail->send();
                        move_uploaded_file($image_temp_name, $image_folder);
                        $succses['succses'] = 'Please Check The Gmail And Activate';
                        $_SESSION['msg'] = "Check your mail to activate your account $user_email";
                    } catch (Exception $e) {
                        echo "Failed to send email. Error: {$mail->ErrorInfo}";
                    }
                } else {
                    $warning['warning'] = 'Not Inserted';
                }
            }
        }
    }
}




?>

<?php
include "./includes/header.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";
?>
<div class="container-fluid mt-3">


    <?php
    if (isset($succses['succses'])) {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $succses['succses'] . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if (isset($warning['warning'])) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $warning['warning'] . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }


    if (isset($_SESSION['update'])) {
        echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Succses</strong> ' . $_SESSION['update'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        unset($_SESSION['update']);
    }
    if (isset($_SESSION['notUpdate'])) {
        echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>!Error</strong> ' . $_SESSION['notUpdate'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        unset($_SESSION['notUpdate']);
    }
    ?>
    <div class="card  my-5 mein-card mb-5">
        <h3 class=" font-inter text-center">Add New User</h3>
        <div class="container-fluid course-card">
            <div class="row my-5 ">
                <div class="col-lg-6">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="in mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" name="user_fullname" id="name" class=" inputDesign w-100 py-2" placeholder="Enter Your Full Name">
                            <span class='text-danger  py-0'><?php if (isset($error['user_fullname'])) {
                                                                echo $error['user_fullname'];
                                                            } ?>
                            </span>
                        </div>

                        <div class="in mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="user_email" id="name" class=" inputDesign w-100 py-2" placeholder="Enter Your Email">
                            <span class='text-danger  py-0'><?php if (isset($error['user_email'])) {
                                                                echo $error['user_email'];
                                                            } ?>
                            </span>
                        </div>

                        <div class="in mb-3">
                            <label class="form-label fw-semibold">Password</label>
                            <input type="password" name="user_password" id="name" class=" inputDesign w-100 py-2" placeholder="Enter Your Password">
                            <span class='text-danger  py-0'><?php if (isset($error['user_password'])) {
                                                                echo $error['user_password'];
                                                            } ?>
                            </span>
                        </div>
                </div>
                <div class="col-lg-6">
                    <div class="in mb-3">
                        <label class="form-label fw-semibold">User Type</label>
                        <select name="user_type" class="inputDesign py-2 w-100">
                            <option selected>User Type</option>

                            <option value="Admin">Admin</option>
                            <option value="User"> User</option>
                            <span class='text-danger py-0'><?php if (isset($error['user_type'])) {
                                                                echo $error['user_type'];
                                                            } ?></span>
                        </select>
                    </div>

                    <div class="in mb-3">
                        <label class="form-label fw-semibold">Contact Number</label>
                        <input type="text" name="user_contact" id="name" class=" inputDesign w-100 py-2" placeholder="Enter Your Contact Number">
                        <span class='text-danger  py-0'><?php if (isset($error['user_contact'])) {
                                                            echo $error['user_contact'];
                                                        } ?>
                        </span>
                    </div>
                    <div class="in">
                        <label class="form-label fw-semibold">Image</label>
                        <input type="file" name="user_image" id="image" class="inputDesign w-100 py-2">
                        <span class='text-danger py-0'><?php if (isset($error['user_image'])) {
                                                            echo $error['user_image'];
                                                        } ?></span>
                    </div>

                </div>


                <button type="submit" name="submit" class="save py-2">Save</button>
                </form>

            </div>
        </div>



    </div>
</div>

<?php
include "./includes/footer.php";

?>