<?php
session_start();
<<<<<<< HEAD

include 'db.php';

if (isset($_GET['token'])) {

    $token = $_GET['token'];

    $updatequery = "UPDATE `registrationemail` SET status = 'active' WHERE token = '$token' ";
    // $updatequery = "Update `registrationemail` set status 'active' where token = '$token' ";

    $query = mysqli_query($conn, $updatequery);

    if ($query) {
=======
include 'config.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Prepare the update query using a prepared statement
    $updatequery = "UPDATE `registrationemail` SET status = 'active' WHERE token = ?";
    $stmt = mysqli_prepare($conn, $updatequery);
    mysqli_stmt_bind_param($stmt, "s", $token);
    
    if (mysqli_stmt_execute($stmt)) {
>>>>>>> 526eec4f27354a96f174aba105c148b25dd1a789
        if (isset($_SESSION['msg'])) {
            $_SESSION['msg'] = "Account updated successfully";
            header('location:login.php');
        } else {
            $_SESSION['msg'] = "You are logged out.";
            header('location:login.php');
        }
<<<<<<< HEAD
    }else{
        $_SESSION['msg'] = "Account not updated";
            header('location:registemail.php');
    }

}

?>
=======
    } else {
        $_SESSION['msg'] = "Account not updated";
        header('location:registemail.php');
    }

    mysqli_stmt_close($stmt);
} else {
    $_SESSION['msg'] = "Token not provided";
    header('location:registemail.php');
}

?>
>>>>>>> 526eec4f27354a96f174aba105c148b25dd1a789
