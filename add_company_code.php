<?php
session_start();
require './function/function.inc.php';
include "./config/config.php";




// Check if the form is submitted




if (isset($_POST['add_company_btn'])) {
    $model = $_POST['model'];
    $company_name = $_POST['company_name'];
    $company_contact = $_POST['company_contact'];
    $company_address = $_POST['company_address'];
    $company_city = $_POST['company_city'];
    $company_state = $_POST['company_state'];
    $company_zipcode = $_POST['company_zipcode'];
    $company_telephone = $_POST['company_telephone'];
    $company_email = $_POST['company_email'];
    $company_direct = $_POST['company_direct'];
    $company_port = $_POST['company_port'];
    $company_vessel = $_POST['company_vessel'];
    $company_trucking = $_POST['company_trucking'];
    $company_misc = $_POST['company_misc'];
    $total_cost = $_POST['total_cost'];
    $custom_freight = $_POST['custom_frieght'];

    
    $_SESSION['company_name']= $company_name;
    if (
        empty($model)
        //  ||  empty($company_name) || empty($company_contact) || empty($company_address) || empty($company_city) || empty($company_state)
        // || empty($company_zipcode) || empty($company_telephone) || empty($company_email) || empty($company_direct) || empty($company_port) || empty($company_vessel) || empty($company_trucking)
        // || empty($company_misc) || empty($total_cost) || empty($custom_freight)
    ) {
        if (empty($model)) {
            $_SESSION['empty_model'] = "Please fill in the Company Name.";
        }
        // if (empty($company_name)) {
        //     $_SESSION['empty_company_name'] = "Please fill in the Company Name.";
        // }
        // if (empty($company_contact)) {
        //     $_SESSION['empty_company_contact'] = "Please fill in the Company Contact.";
        // }
        // if (empty($company_address)) {
        //     $_SESSION['empty_company_address'] = "Please fill in the Company Address.";
        // }
        // if (empty($company_city)) {
        //     $_SESSION['empty_company_city'] = "Please fill in the Company City.";
        // }
        // if (empty($company_state)) {
        //     $_SESSION['empty_company_state'] = "Please fill in the Company State.";
        // }
        // if (empty($company_zipcode)) {
        //     $_SESSION['empty_company_zipcode'] = "Please fill in the Company Zipcode.";
        // }
        // if (empty($company_telephone)) {
        //     $_SESSION['empty_company_telephone'] = "Please fill in the Company Telephone.";
        // }
        // if (empty($company_email)) {
        //     $_SESSION['empty_company_email'] = "Please fill in the Company Email.";
        // }
        // if (empty($company_direct)) {
        //     $_SESSION['empty_company_direct'] = "Please fill in the Company Direct.";
        // }
        // if (empty($company_port)) {
        //     $_SESSION['empty_company_port'] = "Please fill in the Company Port.";
        // }
        // if (empty($company_vessel)) {
        //     $_SESSION['empty_company_vessel'] = "Please fill in the Company Vessel.";
        // }
        // if (empty($company_trucking)) {
        //     $_SESSION['empty_company_trucking'] = "Please fill in the Company Trucking.";
        // }
        // if (empty($company_misc)) {
        //     $_SESSION['empty_company_misc'] = "Please fill in the Company Misc.";
        // }
        // if (empty($total_cost)) {
        //     $_SESSION['empty_total_cost'] = "Please fill in the Total Cost.";
        // }
        // if (empty($custom_freight)) {
        //     $_SESSION['empty_custom_freight'] = "Please fill in the Custom Freight.";
        // }

        header("location:company.php");
        exit();
    } else {
        $res_model = mysqli_query($conn, "SELECT * FROM importer_details WHERE `model` = '$model'");
        $check_model = mysqli_num_rows($res_model);
        if ($check_model > 0) {
            redirectdelete("company.php", "Model Already Exit");
            exit();
        } else {
            $sql = "INSERT INTO importer_details (model, company_name, company_contact, company_address, company_city, company_state, company_zipcode, 
        company_telephone, company_email, company_direct, company_port_of_entry, company_vessel_detail, company_trucking, company_misc, total_cost, 
        custom_frieght , added_on ,added_by) VALUES ('$model' , '$company_name', '$company_contact', '$company_address', '$company_city', '$company_state', '$company_zipcode', 
        '$company_telephone', '$company_email', '$company_direct', '$company_port', '$company_vessel', '$company_trucking', '$company_misc',
         '$total_cost', '$custom_freight' , NOW() , '{$_SESSION['user_fullname']}')";

            $inset_qury_run = mysqli_query($conn, $sql);

            if ($inset_qury_run) {
                redirect("company.php", "Data Insert Successfully!");
                exit();
                // header("location:company.php");
            } else {
                echo "error ";
            }
        }
    }
}



$delete = [''];
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $delete_query = "DELETE FROM importer_details WHERE importer_id=$id ";
    $sql = mysqli_query($conn, $delete_query);

    if ($sql) {
        // Assuming your redirect function sets the session message correctly
        redirectdelete("company.php", "Data Delete Successfully!");

        exit(); // Add this line to stop executing the script after the redirect
    } else {
        echo 'Data not Delete Successfully!';
    }
}

if (isset($_POST['update_company_btn'])) {
    $id = $_POST['edit'];
    $model = $_POST['model'];
    $company_name = $_POST['company_name'];
    $company_contact = $_POST['company_contact'];
    $company_address = $_POST['company_address'];
    $company_city = $_POST['company_city'];
    $company_state = $_POST['company_state'];
    $company_zipcode = $_POST['company_zipcode'];
    $company_telephone = $_POST['company_telephone'];
    $company_email = $_POST['company_email'];
    $company_direct = $_POST['company_direct'];
    $company_port = $_POST['company_port'];
    $company_vessel = $_POST['company_vessel'];
    $company_trucking = $_POST['company_trucking'];
    $company_misc = $_POST['company_misc'];
    $total_cost = $_POST['total_cost'];
    $custom_freight = $_POST['custom_frieght'];

    if (
        empty($model)
        // ||  empty($company_name) || empty($company_contact) || empty($company_address) || empty($company_city) || empty($company_state)
        // || empty($company_zipcode) || empty($company_telephone) || empty($company_email) || empty($company_direct) || empty($company_port) || empty($company_vessel) || empty($company_trucking)
        // || empty($company_misc) || empty($total_cost) || empty($custom_freight)
    ) {
        if (empty($model)) {
            $_SESSION['empty_model'] = "Please fill in the Company Name.";
        }
        // if (empty($company_name)) {
        //     $_SESSION['empty_company_name'] = "Please fill in the Company Name.";
        // }
        // if (empty($company_contact)) {
        //     $_SESSION['empty_company_contact'] = "Please fill in the Company Contact.";
        // }
        // if (empty($company_address)) {
        //     $_SESSION['empty_company_address'] = "Please fill in the Company Address.";
        // }
        // if (empty($company_city)) {
        //     $_SESSION['empty_company_city'] = "Please fill in the Company City.";
        // }
        // if (empty($company_state)) {
        //     $_SESSION['empty_company_state'] = "Please fill in the Company State.";
        // }
        // if (empty($company_zipcode)) {
        //     $_SESSION['empty_company_zipcode'] = "Please fill in the Company Zipcode.";
        // }
        // if (empty($company_telephone)) {
        //     $_SESSION['empty_company_telephone'] = "Please fill in the Company Telephone.";
        // }
        // if (empty($company_email)) {
        //     $_SESSION['empty_company_email'] = "Please fill in the Company Email.";
        // }
        // if (empty($company_direct)) {
        //     $_SESSION['empty_company_direct'] = "Please fill in the Company Direct.";
        // }
        // if (empty($company_port)) {
        //     $_SESSION['empty_company_port'] = "Please fill in the Company Port.";
        // }
        // if (empty($company_vessel)) {
        //     $_SESSION['empty_company_vessel'] = "Please fill in the Company Vessel.";
        // }
        // if (empty($company_trucking)) {
        //     $_SESSION['empty_company_trucking'] = "Please fill in the Company Trucking.";
        // }
        // if (empty($company_misc)) {
        //     $_SESSION['empty_company_misc'] = "Please fill in the Company Misc.";
        // }
        // if (empty($total_cost)) {
        //     $_SESSION['empty_total_cost'] = "Please fill in the Total Cost.";
        // }
        // if (empty($custom_freight)) {
        //     $_SESSION['empty_custom_freight'] = "Please fill in the Custom Freight.";
        // }

        header("location:company.php");
        exit();
    }
     else {
        $res_model = mysqli_query($conn, "SELECT * FROM importer_details WHERE `model` = '$model' AND importer_id <> '$id'");
        $check_model = mysqli_num_rows($res_model);
        if ($check_model > 0) {
            redirectdelete("company.php", "Model Already Exit");
            exit();
        } else {

            $update = "UPDATE importer_details SET model='$model',company_name='$company_name',
        `company_contact`='$company_contact',`company_address`='$company_address',`company_city`='$company_city',
        `company_state`='$company_state',`company_zipcode`='$company_zipcode',`company_telephone`='$company_telephone',
        `company_email`='$company_email',`company_direct`='$company_direct',`company_port_of_entry`='$company_port',
        `company_vessel_detail`='$company_vessel',`company_trucking`='$company_trucking',`company_misc`='$company_misc',
        `total_cost`='$total_cost',`custom_frieght`='$custom_freight',updated_on=NOW() , updated_by='{$_SESSION['user_fullname']}'
         WHERE importer_id='$id' ";

            $qury = mysqli_query($conn, $update);
            if ($qury) {
                redirect("company.php", "Data Update Successfully!");
                exit();
            } else {
                redirectdelete("company.php", "Data error!");
            }
        }
    }
}
