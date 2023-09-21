<?php
session_start();
require './function/function.inc.php';
include "./config/config.php";

// <!-- =============================== User Page Delete Query  ==================================== -->
// $delete = [''];
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $delete_query = "DELETE FROM `admin_users` WHERE user_id=$id ";
    $sql = mysqli_query($conn, $delete_query);

    if ($sql) {
        // Assuming your redirect function sets the session message correctly
        redirectdelete("uservewi.php", "Data Delete Successfully!");

        exit(); // Add this line to stop executing the script after the redirect
    } else {
        redirectdelete("uservewi.php", "Data Not Delete Successfully!");
    }
}
