<?php
session_start();

include 'db.php';

if (isset($_GET['token'])) {

    $token = $_GET['token'];

    $updatequery = "UPDATE `registrationemail` SET status = 'active' WHERE token = '$token' ";
    // $updatequery = "Update `registrationemail` set status 'active' where token = '$token' ";

    $query = mysqli_query($conn, $updatequery);

    if ($query) {
        if (isset($_SESSION['msg'])) {
            $_SESSION['msg'] = "Account updated successfully";
            header('location:login.php');
        } else {
            $_SESSION['msg'] = "You are logged out.";
            header('location:login.php');
        }
    }else{
        $_SESSION['msg'] = "Account not updated";
            header('location:registemail.php');
    }

}

?>