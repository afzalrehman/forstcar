<?php

session_start();
require 'config.php';
global $conn;
if (!isset($_SESSION['user_fullname'])) {
    echo "You are logged out";
    header('location:login.php');
}
$succses = array();
$warning = array();
$emty = array();


if (isset($_POST['submit'])) {
    $model_no = mysqli_real_escape_string($conn, $_POST['model_no']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $fc_body = mysqli_real_escape_string($conn, $_POST['fc_body']);
    $body_length = mysqli_real_escape_string($conn, $_POST['body_length']);
    $body_dimension = mysqli_real_escape_string($conn, $_POST['body_dimension']);
    $body_side_door = mysqli_real_escape_string($conn, $_POST['body_side_door']);
    $body_rear_door = mysqli_real_escape_string($conn, $_POST['body_rear_door']);
    $body_weight = mysqli_real_escape_string($conn, $_POST['body_weight']);
    $body_volume = mysqli_real_escape_string($conn, $_POST['body_volume']);
    $body_temp = mysqli_real_escape_string($conn, $_POST['body_temp']);
    $floor = mysqli_real_escape_string($conn, $_POST['floor']);
    $e_track = mysqli_real_escape_string($conn, $_POST['e_track']);
    $e_plate = mysqli_real_escape_string($conn, $_POST['e_plate']);
    $body_accessories = mysqli_real_escape_string($conn, $_POST['body_accessories']);
    $gvwr = mysqli_real_escape_string($conn, $_POST['gvwr']);
    $wbl = mysqli_real_escape_string($conn, $_POST['wbl']);
    $cal = mysqli_real_escape_string($conn, $_POST['cal']);
    $no_of_units = mysqli_real_escape_string($conn, $_POST['no_of_units']);
    $chassis_frame = mysqli_real_escape_string($conn, $_POST['chassis_frame']);
    $cost_quoted = mysqli_real_escape_string($conn, $_POST['cost_quoted']);
    $misc = mysqli_real_escape_string($conn, $_POST['misc']);
    $eutectic_plates = mysqli_real_escape_string($conn, $_POST['eutectic_plates']);
    $refrigeration = mysqli_real_escape_string($conn, $_POST['refrigeration']);
    $additional_details = mysqli_real_escape_string($conn, $_POST['additional_details']);
    $special_requirements = mysqli_real_escape_string($conn, $_POST['special_requirements']);
    $fuel_Type = mysqli_real_escape_string($conn, $_POST['fuel_Type']);
    $unit_Custom = mysqli_real_escape_string($conn, $_POST['unit_Custom']);

    $condensor = mysqli_real_escape_string($conn, $_POST['condensor']);
    $condensor_unit = mysqli_real_escape_string($conn, $_POST['condensor_unit']);
    $power = mysqli_real_escape_string($conn, $_POST['power']);
    $refrigerant = mysqli_real_escape_string($conn, $_POST['refrigerant']);
    $compressor = mysqli_real_escape_string($conn, $_POST['compressor']);
    $volt = mysqli_real_escape_string($conn, $_POST['volt']);
    $co2_eq = mysqli_real_escape_string($conn, $_POST['co2_eq']);
    $press_max = mysqli_real_escape_string($conn, $_POST['press_max']);
    $decible = mysqli_real_escape_string($conn, $_POST['decible']);
    $GWP = mysqli_real_escape_string($conn, $_POST['GWP']);
    $KG_LB = mysqli_real_escape_string($conn, $_POST['KG/LB']);
    $oil = mysqli_real_escape_string($conn, $_POST['oil']);
    $pressmen = mysqli_real_escape_string($conn, $_POST['pressmen']);
    $export = mysqli_real_escape_string($conn, $_POST['export']);
    $disp_m3_h = mysqli_real_escape_string($conn, $_POST['disp_m3/h']);
    $moA_Amp = mysqli_real_escape_string($conn, $_POST['moA/Amp']);
    $Mcc_Amp = mysqli_real_escape_string($conn, $_POST['Mcc/Amp']);
    $LRA_Amp = mysqli_real_escape_string($conn, $_POST['LRA/Amp']);
    $MRA_Amp = mysqli_real_escape_string($conn, $_POST['MRA/Amp']);
    $RLAA_Amp = mysqli_real_escape_string($conn, $_POST['RLAA/Amp']);

    // if (empty($name)) {
    //     $emty['model_no'] = 'Please Fill The Model No';
    // } else {

    $query = "SELECT * FROM `body_details` WHERE `model_no` = '$model_no'";
    $sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($sql);
    if ($row > 0) {
        // Duplicate data found
        $warning['warning'] = "Model No already exists in Body Details.";
    } else {

        $query = "SELECT * FROM `eutectic_details` WHERE `model_no` = '$model_no'";
        $sql = mysqli_query($conn, $query);
        $row = mysqli_fetch_row($sql);
        if ($row > 0) {
            // Duplicate data found
            $warning['warning'] = "Model No already exists in Eutectic Details.";
        } else {
            $insertBody = "INSERT INTO `body_details`(`model_no`, `year`, `fc_body`, `body_length`, `body_dimension`, `body_side_door`, `body_rear_door`, `body_weight`, 
            `body_volume`, `body_temp`, `floor`, `e_track`, `e_plate`, `body_accessories`, `gvwr`, `wbl`, `cal`, `no_of_units`, `manufactured_on`, `chassis_frame`, 
            `cost_quoted`, `misc`, `eutectic_plates`, `refrigeration`, `additional_details`, `special_requirements`, `fuel_Type`, `unit_Custom`, `added_on`, `added_by`) 
            VALUES ('$model_no', '$year',  '$fc_body', '$body_length', '$body_dimension', '$body_side_door', '$body_rear_door', '$body_weight', '$body_volume', 
            '$body_temp', '$floor', '$e_track', '$e_plate', '$body_accessories', '$gvwr', '$wbl', '$cal', '$no_of_units', NOW(), '$chassis_frame', '$cost_quoted', '$misc',
            '$eutectic_plates', '$refrigeration', '$additional_details', '$special_requirements', '$fuel_Type', '$unit_Custom', NOW(), 'admin')";

            $bodyInsert = mysqli_query($conn, $insertBody);

            if ($bodyInsert) {
                $insertEutectic = "INSERT INTO `eutectic_details`(`condensor`, `condensor_unit`, `power`, `refrigerant`, `compressor`, `volt`, `co2_eq`, `press_max`, 
                `decible`, `production_date`, `model_no`, `GWP`, `KG/LB`, `oil`, `pressmen`, `export`, `disp_m3/h`, `moA/Amp`, `Mcc/Amp`, `LRA/Amp`, `MRA/Amp`, `RLAA/Amp`) 
                VALUES ('$condensor', '$condensor_unit', '$power', '$refrigerant', '$compressor', '$volt', '$co2_eq', '$press_max', '$decible', NOW(), '$model_no', '$GWP',
                '$KG_LB', '$oil', '$pressmen', '$export', '$disp_m3_h', '$moA_Amp', '$Mcc_Amp', '$LRA_Amp', '$MRA_Amp', '$RLAA_Amp')";

                $eutecticInsert = mysqli_query($conn, $insertEutectic);

                if ($eutecticInsert) {
                    $succses['succses'] = "Data Inserted Successfully.";
                }
            } else {
                $warning['warning'] = "Data Not Inserted Successfully.";
            }
        }
    }
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Eutectic Details</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- --------------google font----------- -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
</head>

<body class="sb-nav-fixed">
    <!-- navbar -->
    <?php
    require 'navbar.php';
    ?>
    <!-- navbar End -->
    <div id="layoutSidenav">
        <!-- Sidebar -->
        <?php
        require 'sidebar.php';
        ?>
        <!-- Sidebar End -->

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid my-5 pb-5">

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

                    <div class="tab-content" id="pills-tabContent">
                        <div class="row">
                            <div class="col-12">
                                <div class="card my-5 w-100 position-relative overflow-hidden mb-0">
                                    <div class="card-body p-4">

                                        <form action="" method="POST">
                                            <div class="row text-dark">

                                                <h3 class="font-inter my-5">Eutectic Details</h3>
                                                <div class="row mb-5">

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="model_no" class="form-label fw-semibold">Model No</label>
                                                            <input type="text" class="w-100" name="model_no" placeholder="Model No">
                                                            <span class="text-danger fs-6 "><?php if (isset($emty['model_no'])) echo $emty['model_no'] ?></span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_length" class="form-label fw-semibold">Body Size</label>
                                                            <input type="text" class="w-100" name="body_length" placeholder="Body Size">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="unit_Custom" class="form-label fw-semibold">Unit: Custom</label>
                                                            <input type="text" class="w-100" name="unit_Custom" placeholder="Unit: Custom">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="additional_details" class="form-label fw-semibold">Add'l Details</label>
                                                            <input type="text" class="w-100" name="additional_details" placeholder="Add'l Details">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="chassis_frame" class="form-label fw-semibold">Chassis Frame</label>
                                                            <input type="text" class="w-100" name="chassis_frame" placeholder="Chassis Frame">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="compressor" class="form-label fw-semibold">Compressor</label>
                                                            <input type="text" class="w-100" name="compressor" placeholder="Compressor">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="refrigerant" class="form-label fw-semibold">refrigerant</label>
                                                            <input type="text" class="w-100" name="refrigerant" placeholder="Refrigerant">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="power" class="form-label fw-semibold">Power</label>
                                                            <input type="text" class="w-100" name="power" placeholder="Power">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="condensor" class="form-label fw-semibold">Condenser</label>
                                                            <input type="text" class="w-100" name="condensor" placeholder="Condenser">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="eutectic_plates" class="form-label fw-semibold">Eutectic Plates</label>
                                                            <input type="text" class="w-100" name="eutectic_plates" placeholder="Eutectic Plates">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="misc" class="form-label fw-semibold">MISC</label>
                                                            <input type="text" class="w-100" name="misc" placeholder="MISC">
                                                        </div>
                                                    </div>


                                                    <!-- 2. Wakl-in/Rear-door Body -->
                                                    <div class="row my-5">
                                                        <h5 class="card-title fw-semibold">2. Wakl-in/Rear-door Body</h5>
                                                        <hr class="p-0">

                                                        <!-- <div class="col-lg-4 mt-3">
                                                            <p>Body Length in Feet</p>
                                                            <input class="form-check-input bodyFeetCheck" type="checkbox" name="body_length" value="14">
                                                            <label class="form-check-label" for="bodyFeetCheck">
                                                                14
                                                            </label>
                                                            <input class="form-check-input bodyFeetCheck ms-3" type="checkbox" name="body_length" value="16">
                                                            <label class="form-check-label" for="bodyFeetCheck">
                                                                16
                                                            </label>
                                                            <input class="form-check-input bodyFeetCheck ms-3" type="checkbox" name="body_length" value="18">
                                                            <label class="form-check-label" for="bodyFeetCheck">
                                                                18
                                                            </label>
                                                            <input class="form-check-input bodyFeetCheck ms-3" type="checkbox" name="body_length" value="20">
                                                            <label class="form-check-label" for="bodyFeetCheck">
                                                                20
                                                            </label>
                                                        </div> -->

                                                        <div class="col-lg-4 mt-3">
                                                            <p>Refrigeration</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input refriCheck" type="checkbox" name="refrigeration" checked value="Low Temp - IceCream/Frozen">
                                                                <label class="form-check-label" for="refriCheck">
                                                                    Low Temp - IceCream/Frozen
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input refriCheck" type="checkbox" name="refrigeration" value="Mid Temp - Fresh/Cold">
                                                                <label class="form-check-label" for="refriCheck">
                                                                    Mid Temp - Fresh/Cold
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mt-3">
                                                            <p>Rear Door</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input rearCheck" type="checkbox" name="body_rear_door" checked value="Center Door">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Center Door
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rearCheck" type="checkbox" name="body_rear_door" value="Double Door">
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                    Double Door
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rearCheck" type="checkbox" name="body_rear_door" value="Tri-fold Door">
                                                                <label class="form-check-label" for="rearCheck">
                                                                    Tri-fold Door
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mt-5">
                                                            <p>Side Door</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input sideCheck" type="radio" name="body_side_door" checked value="Yes">
                                                                <label class="form-check-label" for="sideCheck">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input sideCheck" type="radio" name="body_side_door" value="No">
                                                                <label class="form-check-label" for="sideCheck">
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mt-5">
                                                            <p>E-Track (Tall Body Cargo Control)</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input eTrackCheck" type="radio" name="e_track" checked value="Yes">
                                                                <label class="form-check-label" for="e_track">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input eTrackCheck" type="radio" name="e_track" value="No">
                                                                <label class="form-check-label" for="e_track">
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mt-5">
                                                            <p>Floor</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input floorCheck" type="checkbox" name="floor" checked value="Non-Slip Textured">
                                                                <label class="form-check-label" for="floor">
                                                                    Non-Slip Textured
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input floorCheck" type="checkbox" name="floor" value="Taised Channel">
                                                                <label class="form-check-label" for="floor">
                                                                    Taised Channel
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input floorCheck" type="checkbox" name="floor" value="Steel Reinforced Diamond Palte">
                                                                <label class="form-check-label" for="floor">
                                                                    Steel Reinforced Diamond Palte
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- End 2. Wakl-in/Rear-door Body -->


                                                    <div class="row my-5">
                                                        <h5 class="card-title fw-semibold">3. Multi- Temp Body</h5>
                                                        <hr class="p-0">

                                                        <div class="col-lg-4 mt-3">
                                                            <p>Temperature</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input temperaCheck" type="checkbox" checked name="body_temp" value="Low & Mid Temp">
                                                                <label class="form-check-label" for="body_temp">
                                                                    Low & Mid Temp
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input temperaCheck" type="checkbox" name="body_temp" value="Low & Mid Temp & Dry">
                                                                <label class="form-check-label" for="body_temp">
                                                                    Low & Mid Temp & Dry
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mt-3 text-muted">
                                                            <h4 class="text-muted  fw-bold">All Bodies</h4>
                                                            <p class="m-0">Interior Light - LED Standard</p>
                                                            <p class="m-0">Exterior Light - DOT Standard</p>

                                                        </div>

                                                        <div class="col-lg-4 mt-5">
                                                            <p>Accessories</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="radio" checked name="body_accessories" value="Shelving">
                                                                <label class="form-check-label" for="flexRadioDefault5">
                                                                    Shelving
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="radio" name="body_accessories" value="Grab Handles">
                                                                <label class="form-check-label" for="flexRadioDefault6">
                                                                    Grab Handles
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="radio" name="body_accessories" value="Roll Carts">
                                                                <label class="form-check-label" for="flexRadioDefault6">
                                                                    Roll Carts
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="radio" name="body_accessories" value="Steps">
                                                                <label class="form-check-label" for="accessorCheck">
                                                                    Steps
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="radio" name="body_accessories" value="Dolly Rack">
                                                                <label class="form-check-label" for="body_accessories">
                                                                    Dolly Rack
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="radio" name="body_accessories" value="Remote Compressor">
                                                                <label class="form-check-label" for="body_accessories">
                                                                    Remote Compressor
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--******  *********-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="fc_body" class="form-label fw-semibold">FC Body</label>
                                                            <input type="text" class="w-100" name="fc_body" placeholder="FC Body">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_dimension" class="form-label fw-semibold">Dimension</label>
                                                            <input type="text" class="w-100" name="body_dimension" placeholder="Dimension">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_weight" class="form-label fw-semibold">Body Weight</label>
                                                            <input type="text" class="w-100" name="body_weight" placeholder="Body Weight">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="body_volume" class="form-label fw-semibold">Body Volume</label>
                                                            <input type="text" class="w-100" name="body_volume" placeholder="Body Volume">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="e_plate" class="form-label fw-semibold">E Plate</label>
                                                            <input type="text" class="w-100" name="e_plate" placeholder="E Plate">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="cost_quoted" class="form-label fw-semibold">Cost Quoted</label>
                                                            <input type="text" class="w-100" name="cost_quoted" placeholder="Cost Quoted">
                                                        </div>
                                                    </div>


                                                    <!-- Chassis information (if Known) -->
                                                    <div class="row mt-3">
                                                        <h5 class="card-title fw-semibold">Chassis information (if Known)</h5>
                                                        <hr>

                                                        <div class="col-lg-6">
                                                            <!-- <div class="mb-3">
                                                                <label for="model_no" class="form-label fw-semibold">Make & Model</label>
                                                                <input type="text" class="w-100" name="model_no" placeholder="Make & Model">
                                                            </div> -->
                                                            <div class="mb-3">
                                                                <label for="year" class="form-label fw-semibold">Year</label>
                                                                <input type="text" class="w-100" name="year" placeholder="Year">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="gvwr" class="form-label fw-semibold">Gross Vehicle Wieght(GVWR) in Pounds
                                                                    <span>JazzCash</span></label>
                                                                <input type="text" class="w-100" name="gvwr" placeholder="Gross Vehicle Wieght(GVWR) in Pounds JazzCash">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_of_units" class="form-label fw-semibold">Number of units in this quote
                                                                </label>
                                                                <input type="text" class="w-100" name="no_of_units" placeholder="Number of units in this quote">
                                                            </div>
                                                            <div class="mb-3">
                                                                <p>Fuel Type</p>
                                                                <input class="form-check-input fuelCheck" type="checkbox" checked name="fuel_Type" value="Gas">
                                                                <label class="form-check-label" for="fuelCheck">
                                                                    Gas
                                                                </label>
                                                                <input class="form-check-input fuelCheck ms-3" type="checkbox" name="fuel_Type" value="Diesel">
                                                                <label class="form-check-label" for="fuelCheck">
                                                                    Diesel
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="wbl" class="form-label fw-semibold">Wheelbase Length in Inches</label>
                                                                <input type="text" class="w-100" name="wbl" placeholder="Wheelbase Length in Inches">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="cal" class="form-label fw-semibold">Cab to Axie Length in Lanches</label>
                                                                <input type="text" class="w-100" name="cal" placeholder="Cab to Axie Length in Lanches">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label fw-semibold">Special Requirements</label>
                                                                <input type="text" class="w-100" name="special_requirements" placeholder="Special Requirements">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Eutectic Details -->
                                                    <h3 class=" font-inter">Eutectic Details</h3>
                                                    <div class="row mb-5">
                                                        <div class="col-lg-6 mt-3">
                                                            <!-- <div class="in py-3">
                                                            <input type="date" class=" input w-100 py-2 mt-3" placeholder="Date">
                                                        </div> -->

                                                            <div class="in">
                                                                <label class="form-label fw-semibold">Condensor Unit</label>
                                                                <input type="text" class="w-100 py-2" name="condensor_unit" placeholder="Condensor Unit">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Volt</label>
                                                                <input type="text" class="w-100 py-2" name="volt" placeholder="Volt">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Co2 Eq</label>
                                                                <input type="text" class="w-100 py-2" name="co2_eq" placeholder="Co2 Eq">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Press Max</label>
                                                                <input type="text" class="w-100 py-2" name="press_max" placeholder="Press Max">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Decible</label>
                                                                <input type="text" class="w-100 py-2" name="decible" placeholder="Decible">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">GWP</label>
                                                                <input type="text" class="w-100 py-2" name="GWP" placeholder="GWP">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">KG/LB</label>
                                                                <input type="text" class="w-100 py-2" name="KG/LB" placeholder="KG/LB">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Oil</label>
                                                                <input type="text" class="w-100 py-2" name="oil" placeholder="Oil">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Pressmen</label>
                                                                <input type="text" class="w-100 py-2" name="pressmen" placeholder="Pressmen">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Export</label>
                                                                <input type="text" class="w-100 py-2" name="export" placeholder="Export">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Disp m3/4</label>
                                                                <input type="text" class="w-100 py-2" name="disp_m3/h" placeholder="Disp m3/4">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">MoA / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="moA/Amp" placeholder="MoA/Amp">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Mcc / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="Mcc/Amp" placeholder="Mcc/Amp">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">LRA / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="LRA/Amp" placeholder="LRA/Amp">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">MRA / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="MRA/Amp" placeholder="MRA/Amp">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">RLAA / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="RLAA/Amp" placeholder="RLAA/Amp">
                                                            </div>

                                                            <button type="submit" name="submit" class="save py-2 ">Save</button>
                                                        </div>
                                                    </div>


                                                </div>
                                        </form>
                                    </div>
                                </div>
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