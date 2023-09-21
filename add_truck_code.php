<?php
session_start();
require './function/function.inc.php';
include "./config/config.php";

if (isset($_POST['add_truck_btn'])) {
    $make = get_safe_value($conn, $_POST['make']);
    $model = get_safe_value($conn, $_POST['model']);
    $wheelbase = get_safe_value($conn, $_POST['wheelbase']);
    $vin = get_safe_value($conn, $_POST['vin']);
    $contact_Name = get_safe_value($conn, $_POST['contact_Name']);
    $contact_Num = get_safe_value($conn, $_POST['contact_Num']);
    $fc_Unit_Cost = get_safe_value($conn, $_POST['fc_Unit_Cost']);
    $fc_Body = get_safe_value($conn, $_POST['fc_Body']);
    $body_Weight = get_safe_value($conn, $_POST['body_Weight']);
    $fc_Model = get_safe_value($conn, $_POST['fc_Model']);
    $exterior_Dimension = get_safe_value($conn, $_POST['exterior_Dimension']);
    $compressor = get_safe_value($conn, $_POST['compressor']);
    $comp_Serial = get_safe_value($conn, $_POST['comp_Serial']);
    $voltage = get_safe_value($conn, $_POST['voltage']);
    $sound_Decibel = get_safe_value($conn, $_POST['sound_Decibel']);
    $current_FLA = get_safe_value($conn, $_POST['current_FLA']);
    $refrigerant = get_safe_value($conn, $_POST['refrigerant']);
    $condenser = get_safe_value($conn, $_POST['condenser']);
    $solenoid = get_safe_value($conn, $_POST['solenoid']);
    $condenser_Fan = get_safe_value($conn, $_POST['condenser_Fan']);
    $interior_Lights = get_safe_value($conn, $_POST['interior_Lights']);
    $control_Panel = get_safe_value($conn, $_POST['control_Panel']);
    $circuit_Breaker = get_safe_value($conn, $_POST['circuit_Breaker']);
    $electric_Contactor = get_safe_value($conn, $_POST['electric_Contactor']);
    $part = get_safe_value($conn, $_POST['part']);
    $eutectic_Plate = get_safe_value($conn, $_POST['eutectic_Plate']);
    $expansion_Valve = get_safe_value($conn, $_POST['expansion_Valve']);
    $recovery_Tank = get_safe_value($conn, $_POST['recovery_Tank']);
    $pressure_Control = get_safe_value($conn, $_POST['pressure_Control']);
    $sight_Glass = get_safe_value($conn, $_POST['sight_Glass']);
    $filter_Drier = get_safe_value($conn, $_POST['filter_Drier']);
    $thermostat = get_safe_value($conn, $_POST['thermostat']);
    $misc = get_safe_value($conn, $_POST['misc']);

    if (
        // empty($make) || 
        empty($model)
        // || empty($wheelbase) || empty($vin) || empty($contact_Name) ||
        // empty($contact_Num) || empty($fc_Unit_Cost) || empty($fc_Body) || empty($body_Weight) || empty($fc_Model) ||
        // empty($exterior_Dimension) || empty($compressor) || empty($comp_Serial) || empty($voltage) || empty($sound_Decibel) ||
        // empty($current_FLA) || empty($refrigerant) || empty($condenser) || empty($solenoid) || empty($condenser_Fan) ||
        // empty($interior_Lights) || empty($control_Panel) || empty($circuit_Breaker) || empty($electric_Contactor) || empty($part) ||
        // empty($eutectic_Plate) || empty($expansion_Valve) || empty($recovery_Tank) || empty($pressure_Control) || empty($sight_Glass) ||
        // empty($filter_Drier) || empty($thermostat) || empty($misc)
    ) {
        // if (empty($make)) {
        //     $_SESSION['empty_make'] = "Please fill in the make.";
        // }
        if (empty($model)) {
            $_SESSION['empty_model'] = "Please fill in the model.";
        }
        // if (empty($wheelbase)) {
        //     $_SESSION['empty_wheelbase'] = "Please fill in the wheelbase.";
        // }
        // if (empty($vin)) {
        //     $_SESSION['empty_vin'] = "Please fill in the vin.";
        // }
        // if (empty($contact_Name)) {
        //     $_SESSION['empty_contact_Name'] = "Please fill in the contact_Name.";
        // }
        // if (empty($contact_Num)) {
        //     $_SESSION['empty_contact_Num'] = "Please fill in the contact_Num.";
        // }
        // if (empty($fc_Unit_Cost)) {
        //     $_SESSION['empty_fc_Unit_Cost'] = "Please fill in the fc_Unit_Cost.";
        // }
        // if (empty($fc_Body)) {
        //     $_SESSION['empty_fc_Body'] = "Please fill in the fc_Body.";
        // }
        // if (empty($body_Weight)) {
        //     $_SESSION['empty_body_Weight'] = "Please fill in the body_Weight.";
        // }
        // if (empty($fc_Model)) {
        //     $_SESSION['empty_fc_Model'] = "Please fill in the fc_Model.";
        // }
        // if (empty($exterior_Dimension)) {
        //     $_SESSION['empty_exterior_Dimension'] = "Please fill in the exterior_Dimension.";
        // }
        // if (empty($compressor)) {
        //     $_SESSION['empty_compressor'] = "Please fill in the compressor.";
        // }
        // if (empty($comp_Serial)) {
        //     $_SESSION['empty_comp_Serial'] = "Please fill in the comp_Serial.";
        // }
        // if (empty($voltage)) {
        //     $_SESSION['empty_voltage'] = "Please fill in the voltage.";
        // }
        // if (empty($sound_Decibel)) {
        //     $_SESSION['empty_sound_Decibel'] = "Please fill in the sound_Decibel.";
        // }
        // if (empty($current_FLA)) {
        //     $_SESSION['empty_current_FLA'] = "Please fill in the current_FLA.";
        // }
        // if (empty($refrigerant)) {
        //     $_SESSION['empty_refrigerant'] = "Please fill in the refrigerant.";
        // }
        // if (empty($condenser)) {
        //     $_SESSION['empty_condenser'] = "Please fill in the condenser.";
        // }
        // if (empty($solenoid)) {
        //     $_SESSION['empty_solenoid'] = "Please fill in the solenoid.";
        // }
        // if (empty($condenser_Fan)) {
        //     $_SESSION['empty_condenser_Fan'] = "Please fill in the condenser_Fan.";
        // }
        // if (empty($interior_Lights)) {
        //     $_SESSION['empty_interior_Lights'] = "Please fill in the interior_Lights.";
        // }
        // if (empty($control_Panel)) {
        //     $_SESSION['empty_control_Panel'] = "Please fill in the control_Panel.";
        // }
        // if (empty($circuit_Breaker)) {
        //     $_SESSION['empty_circuit_Breaker'] = "Please fill in the circuit_Breaker.";
        // }
        // if (empty($electric_Contactor)) {
        //     $_SESSION['empty_electric_Contactor'] = "Please fill in the electric_Contactor.";
        // }
        // if (empty($part)) {
        //     $_SESSION['empty_part'] = "Please fill in the part.";
        // }
        // if (empty($eutectic_Plate)) {
        //     $_SESSION['empty_eutectic_Plate'] = "Please fill in the eutectic_Plate.";
        // }
        // if (empty($expansion_Valve)) {
        //     $_SESSION['empty_expansion_Valve'] = "Please fill in the expansion_Valve.";
        // }
        // if (empty($recovery_Tank)) {
        //     $_SESSION['empty_recovery_Tank'] = "Please fill in the recovery_Tank.";
        // }
        // if (empty($pressure_Control)) {
        //     $_SESSION['empty_pressure_Control'] = "Please fill in the pressure_Control.";
        // }
        // if (empty($sight_Glass)) {
        //     $_SESSION['empty_sight_Glass'] = "Please fill in the sight_Glass.";
        // }
        // if (empty($filter_Drier)) {
        //     $_SESSION['empty_filter_Drier'] = "Please fill in the filter_Drier.";
        // }
        // if (empty($thermostat)) {
        //     $_SESSION['empty_thermostat'] = "Please fill in the thermostat.";
        // }
        // if (empty($misc)) {
        //     $_SESSION['empty_misc'] = "Please fill in the misc.";
        // }

        header("location:add-truck.php");
        exit();
    } else {

        $res_model = mysqli_query($conn, "SELECT * FROM `unit_details` WHERE `model` = '$model'");
        $check_model = mysqli_num_rows($res_model);
        if ($check_model > 0) {
            redirect("add-truck.php", "Model Already Exit");
            exit();
        } else {
            $front_S_Image = rand(111111111, 999999999) . '_' . $_FILES['front_S_Image']['name'];
            move_uploaded_file($_FILES['front_S_Image']['tmp_name'], 'media/car_images/' . $front_S_Image);

            $back_S_Image = rand(111111111, 999999999) . '_' . $_FILES['back_S_Image']['name'];
            move_uploaded_file($_FILES['back_S_Image']['tmp_name'], 'media/car_images/' . $back_S_Image);

            $left_S_Image = rand(111111111, 999999999) . '_' . $_FILES['left_S_Image']['name'];
            move_uploaded_file($_FILES['left_S_Image']['tmp_name'], 'media/car_images/' . $left_S_Image);

            $right_S_Image = rand(111111111, 999999999) . '_' . $_FILES['right_S_Image']['name'];
            move_uploaded_file($_FILES['right_S_Image']['tmp_name'], 'media/car_images/' . $right_S_Image);

            $sql = "INSERT INTO unit_details(`year`, `make`, `model`, `wheelbase`, `vin`, `contact_Name`, `contact_Num`, `fc_Unit_Cost`, 
        `fc_Body`, `body_Weight`, `fc_Model`, `exterior_Dimension`, `compressor`, `comp_Serial`, `voltage`, `sound_Decibel`, `current_FLA`, 
        `refrigerant`, `condenser`, `solenoid`, `condenser_Fan`, `interior_Lights`, `control_Panel`, `circuit_Breaker`, `electric_Contactor`, 
        `part`, `eutectic_Plate`, `expansion_Valve`, `recovery_Tank`, `pressure_Control`, `sight_Glass`, `filter_Drier`, `thermostat`, `misc`, `front_S_Image`, 
        `back_S_Image`, `left_S_Image`, `right_S_Image`, `added_on`, `added_by`)
        VALUES (NOW(), '$make', '$model', '$wheelbase', '$vin', '$contact_Name', '$contact_Num', 
        '$fc_Unit_Cost', '$fc_Body', '$body_Weight', '$fc_Model', '$exterior_Dimension', '$compressor', '$comp_Serial',
        '$voltage', '$sound_Decibel', '$current_FLA', '$refrigerant', '$condenser', '$solenoid', '$condenser_Fan', '$interior_Lights', 
        '$control_Panel', '$circuit_Breaker', '$electric_Contactor', '$part', '$eutectic_Plate', '$expansion_Valve', '$recovery_Tank',
        '$pressure_Control', '$sight_Glass', '$filter_Drier', '$thermostat', '$misc', '$front_S_Image', '$back_S_Image','$left_S_Image', 
        '$right_S_Image', NOW(), '{$_SESSION['user_fullname']}')";

            $inset_qury_run = mysqli_query($conn, $sql);

            if ($inset_qury_run) {
                redirect("veiwtruck.php", "Data Insert Successfully!");
                $make = '';
                exit();
                // header("location:company.php");
            } else {
                echo "error ";
            }
        }
    }
}

// $delete = [''];
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $delete_query = "DELETE FROM `unit_details` WHERE id=$id ";
    $sql = mysqli_query($conn, $delete_query);

    if ($sql) {
        // Assuming your redirect function sets the session message correctly
        redirectdelete("veiwtruck.php", "Data Delete Successfully!");

        exit(); // Add this line to stop executing the script after the redirect
    } else {
        redirectdelete("veiwtruck.php", "Data Not Delete Successfully!");
    }
}
