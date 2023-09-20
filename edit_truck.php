<?php
include './config/config.php';
require './function/function.inc.php';
session_start();
$make = '';
$model = '';
$wheelbase = '';
$vin = '';
$contact_Name = '';
$contact_Num = '';
$fc_Unit_Cost = '';
$fc_Body = '';
$body_Weight = '';
$fc_Model = '';
$exterior_Dimension = '';
$compressor = '';
$comp_Serial = '';
$voltage = '';
$sound_Decibel = '';
$current_FLA = '';
$refrigerant = '';
$condenser = '';
$solenoid = '';
$condenser_Fan = '';
$interior_Lights = '';
$control_Panel = '';
$circuit_Breaker = '';
$electric_Contactor = '';
$part = '';
$eutectic_Plate = '';
$expansion_Valve = '';
$recovery_Tank = '';
$pressure_Control = '';
$sight_Glass = '';
$filter_Drier = '';
$thermostat = '';
$misc = '';


if (isset($_GET['editid']) && $_GET['editid'] != '') {
    $id = get_safe_value($conn, $_GET['editid']); // Use $_GET to get 'id' parameter
    $res = mysqli_query($conn, "SELECT * FROM `unit_details` WHERE id = '$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);

        $make = $row['make'];
        $model = $row['model'];
        $wheelbase = $row['wheelbase'];
        $vin = $row['vin'];
        $contact_Name = $row['contact_Name'];
        $contact_Num = $row['contact_Num'];
        $fc_Unit_Cost = $row['fc_Unit_Cost'];
        $fc_Body = $row['fc_Body'];
        $body_Weight = $row['body_Weight'];
        $fc_Model = $row['fc_Model'];
        $exterior_Dimension = $row['exterior_Dimension'];
        $compressor = $row['compressor'];
        $comp_Serial = $row['comp_Serial'];
        $voltage = $row['voltage'];
        $sound_Decibel = $row['sound_Decibel'];
        $current_FLA = $row['current_FLA'];
        $refrigerant = $row['refrigerant'];
        $condenser = $row['condenser'];
        $solenoid = $row['solenoid'];
        $condenser_Fan = $row['condenser_Fan'];
        $interior_Lights = $row['interior_Lights'];
        $control_Panel = $row['control_Panel'];
        $circuit_Breaker = $row['circuit_Breaker'];
        $electric_Contactor = $row['electric_Contactor'];
        $part = $row['part'];
        $eutectic_Plate = $row['eutectic_Plate'];
        $expansion_Valve = $row['expansion_Valve'];
        $recovery_Tank = $row['recovery_Tank'];
        $pressure_Control = $row['pressure_Control'];
        $sight_Glass = $row['sight_Glass'];
        $filter_Drier = $row['filter_Drier'];
        $thermostat = $row['thermostat'];
        $misc = $row['misc'];
    } else {
        redirect("veiwtruck.php", "Please Don't Change The URL!");
        // header('location:veiwtruck.php');
        // die();
    }
    // Check if a row was found before accessing its data
    // if ($row) {
    // } else {
    //     // Handle the case where no category was found with the given id
    //     // You can show an error message or perform other actions here
    //     echo "no categories find";
    // }
}




// ===================   Update Querry   =====================
if (isset($_POST['submit'])) {
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


    $res_model = mysqli_query($conn, "SELECT * FROM `unit_details` WHERE `model` = '$model'");
    $check_model = mysqli_num_rows($res_model);
    if ($check_model > 0) {

        if (isset($_GET['editid']) && $_GET['editid'] != '') {
            $getData = mysqli_fetch_assoc($res_model);
            if ($id == $getData['id']) {
            } else {
                redirect("edit_truck.php", "Model is already exist!");
                exit();
            }
        } else {
            redirect("edit_truck.php", "Model is already exist!");
            exit();
        }
    }

    if ($id == $id) {


        if (isset($_GET['editid']) && $_GET['editid'] != '') {
            mysqli_query($conn,  "UPDATE `unit_details` SET `year` = NOW(), `make` = '$make',`model` = '$model',`wheelbase` = '$wheelbase',`vin` = '$vin',`contact_Name` = '$contact_Name',
            `contact_Num` = '$contact_Num',`fc_Unit_Cost` = '$fc_Unit_Cost',`fc_Body` = '$fc_Body',`body_Weight` = '$body_Weight',`fc_Model` = '$fc_Model',
            `exterior_Dimension` = '$exterior_Dimension',`compressor` = '$compressor',`comp_Serial` = '$comp_Serial',`voltage` = '$voltage',
            `sound_Decibel` = '$sound_Decibel',`current_FLA` = '$current_FLA',`refrigerant` = '$refrigerant',`condenser` = '$condenser',`solenoid` = '$solenoid',
            `condenser_Fan` = '$condenser_Fan',`interior_Lights` = '$interior_Lights',`control_Panel` = '$control_Panel',`circuit_Breaker` = '$circuit_Breaker',
            `electric_Contactor` = '$electric_Contactor',`part` = '$part',`eutectic_Plate` = '$eutectic_Plate',`expansion_Valve` = '$expansion_Valve',
            `recovery_Tank` = '$recovery_Tank',`pressure_Control` = '$pressure_Control',`sight_Glass` = '$sight_Glass',`filter_Drier` = '$filter_Drier',
            `thermostat` = '$thermostat',`misc` = '$misc',`updated_on`= NOW(), `updated_by`='Admin' WHERE `id` = '$id'");
        }
        // else {
        //     mysqli_query($conn, "INSERT INTO `unit_details` (`make`,`model`,`wheelbase`,`vin`,`contact_Name`,`contact_Num`,`fc_Unit_Cost`,`fc_Body`,
        //     `body_Weight`,`fc_Model`,`exterior_Dimension`,`compressor`,`comp_Serial`,`voltage`,`sound_Decibel`,`current_FLA`,`refrigerant`,
        //     `condenser`,`solenoid`,`condenser_Fan`,`interior_Lights`,`control_Panel`,`circuit_Breaker`,`electric_Contactor`,`part`,`eutectic_Plate`,
        //     `expansion_Valve`,`recovery_Tank`,`pressure_Control`,`sight_Glass`,`filter_Drier`,`thermostat`,`misc`
        //     ) VALUES ('$make','$model','$wheelbase','$vin','$contact_Name','$contact_Num','$fc_Unit_Cost','$fc_Body','$body_Weight','$fc_Model',
        //     '$exterior_Dimension','$compressor','$comp_Serial','$voltage','$sound_Decibel','$current_FLA','$refrigerant','$condenser','$solenoid',
        //     '$condenser_Fan','$interior_Lights','$control_Panel','$circuit_Breaker','$electric_Contactor','$part','$eutectic_Plate',
        //     '$expansion_Valve','$recovery_Tank','$pressure_Control','$sight_Glass','$filter_Drier','$thermostat','$misc')");
        // }
        redirect("veiwtruck.php", "Updated Successfully!");
        // header('location:veiwtruck.php');
        die();
    }
}

// ================================================================================================================





// if (isset($_POST['submit'])) {
//     $make = get_safe_value($conn, $_POST['make']);
//     $model = get_safe_value($conn, $_POST['model']);
//     $wheelbase = get_safe_value($conn, $_POST['wheelbase']);
//     $vin = get_safe_value($conn, $_POST['vin']);
//     $contact_Name = get_safe_value($conn, $_POST['contact_Name']);
//     $contact_Num = get_safe_value($conn, $_POST['contact_Num']);
//     $fc_Unit_Cost = get_safe_value($conn, $_POST['fc_Unit_Cost']);
//     $fc_Body = get_safe_value($conn, $_POST['fc_Body']);
//     $body_Weight = get_safe_value($conn, $_POST['body_Weight']);
//     $fc_Model = get_safe_value($conn, $_POST['fc_Model']);
//     $exterior_Dimension = get_safe_value($conn, $_POST['exterior_Dimension']);
//     $compressor = get_safe_value($conn, $_POST['compressor']);
//     $comp_Serial = get_safe_value($conn, $_POST['comp_Serial']);
//     $voltage = get_safe_value($conn, $_POST['voltage']);
//     $sound_Decibel = get_safe_value($conn, $_POST['sound_Decibel']);
//     $current_FLA = get_safe_value($conn, $_POST['current_FLA']);
//     $refrigerant = get_safe_value($conn, $_POST['refrigerant']);
//     $condenser = get_safe_value($conn, $_POST['condenser']);
//     $solenoid = get_safe_value($conn, $_POST['solenoid']);
//     $condenser_Fan = get_safe_value($conn, $_POST['condenser_Fan']);
//     $interior_Lights = get_safe_value($conn, $_POST['interior_Lights']);
//     $control_Panel = get_safe_value($conn, $_POST['control_Panel']);
//     $circuit_Breaker = get_safe_value($conn, $_POST['circuit_Breaker']);
//     $electric_Contactor = get_safe_value($conn, $_POST['electric_Contactor']);
//     $part = get_safe_value($conn, $_POST['part']);
//     $eutectic_Plate = get_safe_value($conn, $_POST['eutectic_Plate']);
//     $expansion_Valve = get_safe_value($conn, $_POST['expansion_Valve']);
//     $recovery_Tank = get_safe_value($conn, $_POST['recovery_Tank']);
//     $pressure_Control = get_safe_value($conn, $_POST['pressure_Control']);
//     $sight_Glass = get_safe_value($conn, $_POST['sight_Glass']);
//     $filter_Drier = get_safe_value($conn, $_POST['filter_Drier']);
//     $thermostat = get_safe_value($conn, $_POST['thermostat']);
//     $misc = get_safe_value($conn, $_POST['misc']);


//     $res_categories = mysqli_query($conn, "SELECT * FROM `unit_details` WHERE `model` = '$model'");
//     $check_categories = mysqli_num_rows($res_categories);

//     if ($check_categories > 0) {
//         // Assuming you have a unique identifier for the record you want to update (e.g., an ID column)
//         redirect("veiwtruck.php", "Data Insert Successfully!");
//         if (isset($_GET['editid']) && $_GET['editid'] != '') {
//             $row = mysqli_fetch_assoc($res_categories);
//             $recordId = $row['id']; // Replace 'id' with your actual unique identifier column name

//         } else {
//             redirect("veiwtruck.php", "Data Insert Successfully!");
//         }
//     }

//     if (isset($_GET['editid']) && $_GET['editid'] != '') {
//         // Assuming you have retrieved the $id from somewhere
//         if ($id == $recordId) {
//             // Update the record
//             mysqli_query($conn, "UPDATE `unit_details` SET `make` = '$make',`model` = '$model',`wheelbase` = '$wheelbase',`vin` = '$vin',`contact_Name` = '$contact_Name',
//                 `contact_Num` = '$contact_Num',`fc_Unit_Cost` = '$fc_Unit_Cost',`fc_Body` = '$fc_Body',`body_Weight` = '$body_Weight',`fc_Model` = '$fc_Model',
//                 `exterior_Dimension` = '$exterior_Dimension',`compressor` = '$compressor',`comp_Serial` = '$comp_Serial',`voltage` = '$voltage',
//                 `sound_Decibel` = '$sound_Decibel',`current_FLA` = '$current_FLA',`refrigerant` = '$refrigerant',`condenser` = '$condenser',`solenoid` = '$solenoid',
//                 `condenser_Fan` = '$condenser_Fan',`interior_Lights` = '$interior_Lights',`control_Panel` = '$control_Panel',`circuit_Breaker` = '$circuit_Breaker',
//                 `electric_Contactor` = '$electric_Contactor',`part` = '$part',`eutectic_Plate` = '$eutectic_Plate',`expansion_Valve` = '$expansion_Valve',
//                 `recovery_Tank` = '$recovery_Tank',`pressure_Control` = '$pressure_Control',`sight_Glass` = '$sight_Glass',`filter_Drier` = '$filter_Drier',
//                 `thermostat` = '$thermostat',`misc` = '$misc' WHERE `id` = '$recordId'");
//         }
//         redirect("veiwtruck.php", "Data Insert Successfully!");
//     }
// }













include "./includes/header.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";
?>
<div class="container-fluid">


    <div class="tab-content" id="pills-tabContent">
        <div class="row">
            <div class="col-12">
                <div class="card my-5 w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">

                        <form action="" method="POST">
                            <div class="row text-dark">
                                <div class="row my-5">
                                    <h5 class="card-title fw-semibold">Frost Car Unit Details (SQL)</h5>
                                    <hr class="p-0">


                                    <div class="col-lg-6">

                                        <div class="mb-2">
                                            <label for="make" class="form-label fw-semibold">Make</label>
                                            <input type="text" class="form-control" id="make" name="make" placeholder="Make" value="<?php echo $make; ?>">
                                            <?php if (isset($_SESSION['empty_make'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_make'] . '</p>';
                                                unset($_SESSION['empty_make']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="model" class="form-label fw-semibold">Model</label>
                                            <input type="text" class="form-control" id="model" name="model" placeholder="Model" value="<?php echo $model; ?>">
                                            <?php if (isset($_SESSION['empty_model'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_model'] . '</p>';
                                                unset($_SESSION['empty_model']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="wheelbase" class="form-label fw-semibold">Wheelbase</label>
                                            <input type="text" class="form-control " id="wheelbase" name="wheelbase" placeholder="Wheelbase" value="<?php echo $wheelbase; ?>">
                                            <?php if (isset($_SESSION['empty_wheelbase'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_wheelbase'] . '</p>';
                                                unset($_SESSION['empty_wheelbase']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="vin" class="form-label fw-semibold">Vin #</label>
                                            <input type="text" class="form-control" id="vin" name="vin" placeholder="Vin #" value="<?php echo $vin; ?>">
                                            <?php if (isset($_SESSION['empty_vin'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_vin'] . '</p>';
                                                unset($_SESSION['empty_vin']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="contact_Name" class="form-label fw-semibold">Contact Name</label>
                                            <input type="text" class="form-control" id="contact_Name" name="contact_Name" placeholder="Contact Name" value="<?php echo $contact_Name; ?>">
                                            <?php if (isset($_SESSION['empty_contact_Name'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_contact_Name'] . '</p>';
                                                unset($_SESSION['empty_contact_Name']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="contact_Num" class="form-label fw-semibold">Contact #</label>
                                            <input type="text" class="form-control " id="contact_Num" name="contact_Num" placeholder="Contact #" value="<?php echo $contact_Num; ?>">
                                            <?php if (isset($_SESSION['empty_contact_Num'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_contact_Num'] . '</p>';
                                                unset($_SESSION['empty_contact_Num']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="fc_Unit_Cost" class="form-label fw-semibold">Frost Car unit Cost</label>
                                            <input type="text" class="form-control" id="fc_Unit_Cost" name="fc_Unit_Cost" placeholder="Frost Car unit Cost" value="<?php echo $fc_Unit_Cost; ?>">
                                            <?php if (isset($_SESSION['empty_fc_Unit_Cost'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_fc_Unit_Cost'] . '</p>';
                                                unset($_SESSION['empty_fc_Unit_Cost']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="fc_Body" class="form-label fw-semibold">FC Body</label>
                                            <input type="text" class="form-control" id="fc_Body" name="fc_Body" placeholder="FC Body" value="<?php echo $fc_Body; ?>">
                                            <?php if (isset($_SESSION['empty_fc_Body'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_fc_Body'] . '</p>';
                                                unset($_SESSION['empty_fc_Body']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="body_Weight" class="form-label fw-semibold">Body Weight</label>
                                            <input type="text" class="form-control " id="body_Weight" name="body_Weight" placeholder="Body Weight" value="<?php echo $body_Weight; ?>">
                                            <?php if (isset($_SESSION['empty_body_Weight'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_body_Weight'] . '</p>';
                                                unset($_SESSION['empty_body_Weight']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="fc_Model" class="form-label fw-semibold">FC Model</label>
                                            <input type="text" class="form-control" id="fc_Model" name="fc_Model" placeholder="FC Model" value="<?php echo $fc_Model; ?>">
                                            <?php if (isset($_SESSION['empty_fc_Model'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_fc_Model'] . '</p>';
                                                unset($_SESSION['empty_fc_Model']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="exterior_Dimension" class="form-label fw-semibold">Exterior Dimension</label>
                                            <input type="text" class="form-control" id="exterior_Dimension" name="exterior_Dimension" placeholder="Exterior Dimension" value="<?php echo $exterior_Dimension; ?>">
                                            <?php if (isset($_SESSION['empty_exterior_Dimension'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_exterior_Dimension'] . '</p>';
                                                unset($_SESSION['empty_exterior_Dimension']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="compressor" class="form-label fw-semibold">Compressor</label>
                                            <input type="text" class="form-control " id="compressor" name="compressor" placeholder="Compressor" value="<?php echo $compressor; ?>">
                                            <?php if (isset($_SESSION['empty_compressor'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_compressor'] . '</p>';
                                                unset($_SESSION['empty_compressor']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="comp_Serial" class="form-label fw-semibold">Comp.Serial</label>
                                            <input type="text" class="form-control" id="comp_Serial" name="comp_Serial" placeholder="Comp.Serial" value="<?php echo $comp_Serial; ?>">
                                            <?php if (isset($_SESSION['empty_comp_Serial'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_comp_Serial'] . '</p>';
                                                unset($_SESSION['empty_comp_Serial']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="voltage" class="form-label fw-semibold">Voltage</label>
                                            <input type="text" class="form-control" id="voltage" name="voltage" placeholder="Voltage" value="<?php echo $voltage; ?>">
                                            <?php if (isset($_SESSION['empty_voltage'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_voltage'] . '</p>';
                                                unset($_SESSION['empty_voltage']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="sound_Decibel" class="form-label fw-semibold">Sound Decibel</label>
                                            <input type="text" class="form-control " id="sound_Decibel" name="sound_Decibel" placeholder="Sound Decibel" value="<?php echo $sound_Decibel; ?>">
                                            <?php if (isset($_SESSION['empty_sound_Decibel'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_sound_Decibel'] . '</p>';
                                                unset($_SESSION['empty_sound_Decibel']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="current_FLA" class="form-label fw-semibold">Current FLA</label>
                                            <input type="text" class="form-control" id="current_FLA" name="current_FLA" placeholder="Current FLA" value="<?php echo $current_FLA; ?>">
                                            <?php if (isset($_SESSION['empty_current_FLA'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_current_FLA'] . '</p>';
                                                unset($_SESSION['empty_current_FLA']);
                                            }
                                            ?>
                                        </div>

                                        <div class="mb-2">
                                            <label for="refrigerant" class="form-label fw-semibold">Refrigerant</label>
                                            <input type="text" class="form-control" id="refrigerant" name="refrigerant" placeholder="Refrigerant" value="<?php echo $refrigerant; ?>">
                                            <?php if (isset($_SESSION['empty_refrigerant'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_refrigerant'] . '</p>';
                                                unset($_SESSION['empty_refrigerant']);
                                            }
                                            ?>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">


                                        <div class="mb-2">
                                            <label for="condenser" class="form-label fw-semibold">Condenser</label>
                                            <input type="text" class="form-control" id="condenser" name="condenser" placeholder="Condenser" value="<?php echo $condenser; ?>">
                                            <?php if (isset($_SESSION['empty_condenser'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_condenser'] . '</p>';
                                                unset($_SESSION['empty_condenser']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="solenoid" class="form-label fw-semibold">Solenoid</label>
                                            <input type="text" class="form-control" id="solenoid" name="solenoid" placeholder="Solenoid" value="<?php echo $solenoid; ?>">
                                            <?php if (isset($_SESSION['empty_solenoid'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_solenoid'] . '</p>';
                                                unset($_SESSION['empty_solenoid']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="condenser_Fan" class="form-label fw-semibold">Condenser Fan</label>
                                            <input type="text" class="form-control" id="condenser_Fan" name="condenser_Fan" placeholder="Condenser Fan" value="<?php echo $condenser_Fan; ?>">
                                            <?php if (isset($_SESSION['empty_condenser_Fan'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_condenser_Fan'] . '</p>';
                                                unset($_SESSION['empty_condenser_Fan']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="interior_Lights" class="form-label fw-semibold">Interior Lights</label>
                                            <input type="text" class="form-control" id="interior_Lights" name="interior_Lights" placeholder="Interior Lights" value="<?php echo $interior_Lights; ?>">
                                            <?php if (isset($_SESSION['empty_interior_Lights'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_interior_Lights'] . '</p>';
                                                unset($_SESSION['empty_interior_Lights']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="control_Panel" class="form-label fw-semibold">Control Panel</label>
                                            <input type="text" class="form-control" id="control_Panel" name="control_Panel" placeholder="Control Panel" value="<?php echo $control_Panel; ?>">
                                            <?php if (isset($_SESSION['empty_control_Panel'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_control_Panel'] . '</p>';
                                                unset($_SESSION['empty_control_Panel']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="circuit_Breaker" class="form-label fw-semibold">Circuit Breaker</label>
                                            <input type="text" class="form-control" id="circuit_Breaker" name="circuit_Breaker" placeholder="Circuit Breaker" value="<?php echo $circuit_Breaker; ?>">
                                            <?php if (isset($_SESSION['empty_circuit_Breaker'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_circuit_Breaker'] . '</p>';
                                                unset($_SESSION['empty_circuit_Breaker']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="electric_Contactor" class="form-label fw-semibold">Electric Contactor</label>
                                            <input type="text" class="form-control" id="electric_Contactor" name="electric_Contactor" placeholder="Electric Contactor" value="<?php echo $electric_Contactor; ?>">
                                            <?php if (isset($_SESSION['empty_electric_Contactor'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_electric_Contactor'] . '</p>';
                                                unset($_SESSION['empty_electric_Contactor']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="part" class="form-label fw-semibold">Part #</label>
                                            <input type="text" class="form-control" id="part" name="part" placeholder="Part #" value="<?php echo $part; ?>">
                                            <?php if (isset($_SESSION['empty_part'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_part'] . '</p>';
                                                unset($_SESSION['empty_part']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="eutectic_Plate" class="form-label fw-semibold">Eutectic Plate</label>
                                            <input type="text" class="form-control" id="eutectic_Plate" name="eutectic_Plate" placeholder="Eutectic Plate" value="<?php echo $eutectic_Plate; ?>">
                                            <?php if (isset($_SESSION['empty_eutectic_Plate'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_eutectic_Plate'] . '</p>';
                                                unset($_SESSION['empty_eutectic_Plate']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="expansion_Valve" class="form-label fw-semibold">Expansion Valve</label>
                                            <input type="text" class="form-control" id="expansion_Valve" name="expansion_Valve" placeholder="Expansion Valve" value="<?php echo $expansion_Valve; ?>">
                                            <?php if (isset($_SESSION['empty_expansion_Valve'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_expansion_Valve'] . '</p>';
                                                unset($_SESSION['empty_expansion_Valve']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="recovery_Tank" class="form-label fw-semibold">Recovery Tank</label>
                                            <input type="text" class="form-control" id="recovery_Tank" name="recovery_Tank" placeholder="Recovery Tank" value="<?php echo $recovery_Tank; ?>">
                                            <?php if (isset($_SESSION['empty_recovery_Tank'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_recovery_Tank'] . '</p>';
                                                unset($_SESSION['empty_recovery_Tank']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="pressure_Control" class="form-label fw-semibold">Pressure Control</label>
                                            <input type="text" class="form-control" id="pressure_Control" name="pressure_Control" placeholder="Pressure Control" value="<?php echo $pressure_Control; ?>">
                                            <?php if (isset($_SESSION['empty_pressure_Control'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_pressure_Control'] . '</p>';
                                                unset($_SESSION['empty_pressure_Control']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="sight_Glass" class="form-label fw-semibold">Sight Glass</label>
                                            <input type="text" class="form-control" id="sight_Glass" name="sight_Glass" placeholder="Sight Glass" value="<?php echo $sight_Glass; ?>">
                                            <?php if (isset($_SESSION['empty_sight_Glass'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_sight_Glass'] . '</p>';
                                                unset($_SESSION['empty_sight_Glass']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="filter_Drier" class="form-label fw-semibold">Filter Drier</label>
                                            <input type="text" class="form-control" id="filter_Drier" name="filter_Drier" placeholder="Filter Drier" value="<?php echo $filter_Drier; ?>">
                                            <?php if (isset($_SESSION['empty_filter_Drier'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_filter_Drier'] . '</p>';
                                                unset($_SESSION['empty_filter_Drier']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="thermostat" class="form-label fw-semibold">Thermostat</label>
                                            <input type="text" class="form-control" id="thermostat" name="thermostat" placeholder="Thermostat" value="<?php echo $thermostat; ?>">
                                            <?php if (isset($_SESSION['empty_thermostat'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_thermostat'] . '</p>';
                                                unset($_SESSION['empty_thermostat']);
                                            }
                                            ?>
                                        </div>
                                        <div class="my-2">
                                            <label for="misc" class="form-label fw-semibold">Misc</label>
                                            <input type="text" class="form-control" id="misc" name="misc" placeholder="Misc" value="<?php echo $misc; ?>">
                                            <?php if (isset($_SESSION['empty_misc'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_misc'] . '</p>';
                                                unset($_SESSION['empty_misc']);
                                            }
                                            ?>
                                        </div>

                                        <button type="submit" name="submit" class="save py-2">Update</button>

                                    </div>



                                </div>
                                <!-- End 2. Wakl-in/Rear-door Body -->



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
<?php
include "./includes/footer.php";
?>