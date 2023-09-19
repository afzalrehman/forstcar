<?php
session_start();
require './config/config.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Prepare the update query using a prepared statement
    $updatequery = "UPDATE `admin_users` SET is_verified = 'active' WHERE token = ?";
    $stmt = mysqli_prepare($conn, $updatequery);
    mysqli_stmt_bind_param($stmt, "s", $token);
    
    if (mysqli_stmt_execute($stmt)) {
        if (isset($_SESSION['msg'])) {
            $_SESSION['msg'] = "Account updated successfully";
            header('location:login.php');
        } else {
            $_SESSION['msg'] = "You are logged out.";
            header('location:login.php');
        }
    } else {
        $_SESSION['msg'] = "Account not updated";
        header('location:registermail.php');
    }

    mysqli_stmt_close($stmt);
} else {
    $_SESSION['msg'] = "Token not provided";
    header('location:registermail.php');
}

?>
