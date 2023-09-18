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
                                                            <input type="text" class="w-100" name="model_no" placeholder="Model No" >
                                                            <span class="text-danger fs-6 "></span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_length" class="form-label fw-semibold">Body Size</label>
                                                            <input type="text" class="w-100" name="body_length" placeholder="Body Size">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="unit_Custom" class="form-label fw-semibold">Unit Custom</label>
                                                            <input type="text" class="w-100" name="unit_Custom" placeholder="Unit: Custom" >
                                                        </div>
                                                        <div class=" mb-3">
                                                            <label for="additional_details" class="form-label fw-semibold">Additional Details</label>
                                                            <input type="text" class="w-100" name="additional_details" placeholder="Additional Details" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="chassis_frame" class="form-label fw-semibold">Chassis Frame</label>
                                                            <input type="text" class="w-100" name="chassis_frame" placeholder="Chassis Frame" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="compressor" class="form-label fw-semibold">Compressor</label>
                                                            <input type="text" class="w-100" name="compressor" placeholder="Compressor" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="refrigerant" class="form-label fw-semibold">refrigerant</label>
                                                            <input type="text" class="w-100" name="refrigerant" placeholder="Refrigerant" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="power" class="form-label fw-semibold">Power</label>
                                                            <input type="text" class="w-100" name="power" placeholder="Power">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="condensor" class="form-label fw-semibold">Condenser</label>
                                                            <input type="text" class="w-100" name="condensor" placeholder="Condenser" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="eutectic_plates" class="form-label fw-semibold">Eutectic Plates</label>
                                                            <input type="text" class="w-100" name="eutectic_plates" placeholder="Eutectic Plates" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="misc" class="form-label fw-semibold">MISC</label>
                                                            <input type="text" class="w-100" name="misc" placeholder="MISC" >
                                                        </div>
                                                    </div>


                                                    2. Wakl-in/Rear-door Body
                                                    <div class="row my-5">
                                                        <h5 class="card-title fw-semibold">2. Wakl-in/Rear-door Body</h5>
                                                        <hr class="p-0">

                                                        <div class="col-lg-4 mt-3">
                                                            <p>Body Length in Feet</p>
                                                            <input class="form-check-input bodyFeetCheck" type="checkbox" name="body_length" >
                                                            <label class="form-check-label" for="bodyFeetCheck">
                                                                14
                                                            </label>
                                                            <input class="form-check-input bodyFeetCheck ms-3" type="checkbox" checked name="body_length" >
                                                            <label class="form-check-label" for="bodyFeetCheck">
                                                                16
                                                            </label>
                                                            <input class="form-check-input bodyFeetCheck ms-3" type="checkbox" name="body_length" >
                                                            <label class="form-check-label" for="bodyFeetCheck">
                                                                18
                                                            </label>
                                                            <input class="form-check-input bodyFeetCheck ms-3" type="checkbox" name="body_length" >
                                                            <label class="form-check-label" for="bodyFeetCheck">
                                                                20
                                                            </label>
                                                        </div>

                                                        <div class="col-lg-4 mt-3">
                                                            <p>Refrigeration</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input refriCheck" type="checkbox" checked name="refrigeration" >
                                                                <label class="form-check-label" for="refriCheck">
                                                                    Low Temp - IceCream/Frozen
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input refriCheck" type="checkbox" name="refrigeration" >
                                                                <label class="form-check-label" for="refriCheck">
                                                                    Mid Temp - Fresh/Cold
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mt-3">
                                                            <p>Rear Door</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input rearCheck" type="checkbox" checked name="body_rear_door" >
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Center Door
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rearCheck" type="checkbox" name="body_rear_door" >
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                    Double Door
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input rearCheck" type="checkbox" name="body_rear_door" >
                                                                <label class="form-check-label" for="rearCheck">
                                                                    Tri-fold Door
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mt-5">
                                                            <p>Side Door</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input sideCheck" type="checkbox" checked name="body_side_door" >
                                                                <label class="form-check-label" for="sideCheck">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input sideCheck" type="checkbox" name="body_side_door" >
                                                                <label class="form-check-label" for="sideCheck">
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mt-5">
                                                            <p>E-Track (Tall Body Cargo Control)</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input eTrackCheck" type="checkbox" checked name="e_track" >
                                                                <label class="form-check-label" for="e_track">
                                                                    Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input eTrackCheck" type="checkbox" name="e_track" >
                                                                <label class="form-check-label" for="e_track">
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 mt-5">
                                                            <p>Floor</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input floorCheck" type="checkbox" checked name="floor" >
                                                                <label class="form-check-label" for="floor">
                                                                    Non-Slip Textured
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input floorCheck" type="checkbox" name="floor" >
                                                                <label class="form-check-label" for="floor">
                                                                    Taised Channel
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input floorCheck" type="checkbox" name="floor" >
                                                                <label class="form-check-label" for="floor">
                                                                    Steel Reinforced Diamond Palte
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- End 2. Wakl-in/Rear-door Body -->

                                                    <!-- 3. Multi- Temp Body -->
                                                    <div class="row my-5">
                                                        <h5 class="card-title fw-semibold">3. Multi- Temp Body</h5>
                                                        <hr class="p-0">

                                                        <!-- Temperature Start -->
                                                        <div class="col-lg-4 mt-3">
                                                            <p>Temperature</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input temperaCheck" type="checkbox" checked name="body_temp" >
                                                                <label class="form-check-label" for="body_temp">
                                                                    Low & Mid Temp
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input temperaCheck" type="checkbox" name="body_temp" >
                                                                <label class="form-check-label" for="body_temp">
                                                                    Low & Mid Temp & Dry
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- Temperature End -->

                                                        <div class="col-lg-4 mt-3 text-muted">
                                                            <h4 class="text-muted  fw-bold">All Bodies</h4>
                                                            <p class="m-0">Interior Light - LED Standard</p>
                                                            <p class="m-0">Exterior Light - DOT Standard</p>
                                                        </div>

                                                        <!-- Accessories -->
                                                        <div class="col-lg-4 mt-5">
                                                            <p>Accessories</p>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="checkbox" checked name="body_accessories" value="<?php
                                                                                                                                                                        if (isset($edit['body_accessories'])) {
                                                                                                                                                                            echo $edit['body_accessories'];
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'Shelving';
                                                                                                                                                                        } ?>">
                                                                <label class="form-check-label" for="flexRadioDefault5">
                                                                    Shelving
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="checkbox" name="body_accessories" value="<?php
                                                                                                                                                                if (isset($edit['body_accessories'])) {
                                                                                                                                                                    echo $edit['body_accessories'];
                                                                                                                                                                } else {
                                                                                                                                                                    echo 'Grab Handles';
                                                                                                                                                                } ?>">
                                                                <label class="form-check-label" for="flexRadioDefault6">
                                                                    Grab Handles
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="checkbox" name="body_accessories" value="<?php
                                                                                                                                                                if (isset($edit['body_accessories'])) {
                                                                                                                                                                    echo $edit['body_accessories'];
                                                                                                                                                                } else {
                                                                                                                                                                    echo 'Roll Carts';
                                                                                                                                                                } ?>">
                                                                <label class="form-check-label" for="flexRadioDefault6">
                                                                    Roll Carts
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="checkbox" name="body_accessories" value="<?php
                                                                                                                                                                if (isset($edit['body_accessories'])) {
                                                                                                                                                                    echo $edit['body_accessories'];
                                                                                                                                                                } else {
                                                                                                                                                                    echo 'Steps';
                                                                                                                                                                } ?>">
                                                                <label class="form-check-label" for="accessorCheck">
                                                                    Steps
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="checkbox" name="body_accessories" value="<?php
                                                                                                                                                                if (isset($edit['unit_Custom'])) {
                                                                                                                                                                    echo $edit['unit_Custom'];
                                                                                                                                                                } else {
                                                                                                                                                                    echo 'Dolly Rack';
                                                                                                                                                                } ?>">
                                                                <label class="form-check-label" for="body_accessories">
                                                                    Dolly Rack
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input accessorCheck" type="checkbox" name="body_accessories" value="<?php
                                                                                                                                                                if (isset($edit['body_accessories'])) {
                                                                                                                                                                    echo $edit['body_accessories'];
                                                                                                                                                                } else {
                                                                                                                                                                    echo 'Remote Compressor';
                                                                                                                                                                } ?>">
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
                                                            <input type="text" class="w-100" name="fc_body" placeholder="FC Body" value="<?php
                                                                                                                                            if (isset($edit['fc_body'])) {
                                                                                                                                                echo $edit['fc_body'];
                                                                                                                                            } ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_dimension" class="form-label fw-semibold">Dimension</label>
                                                            <input type="text" class="w-100" name="body_dimension" placeholder="Dimension" value="<?php
                                                                                                                                                    if (isset($edit['body_dimension'])) {
                                                                                                                                                        echo $edit['body_dimension'];
                                                                                                                                                    } ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_weight" class="form-label fw-semibold">Body Weight</label>
                                                            <input type="text" class="w-100" name="body_weight" placeholder="Body Weight" value="<?php
                                                                                                                                                    if (isset($edit['body_weight'])) {
                                                                                                                                                        echo $edit['body_weight'];
                                                                                                                                                    } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="body_volume" class="form-label fw-semibold">Body Volume</label>
                                                            <input type="text" class="w-100" name="body_volume" placeholder="Body Volume" value="<?php
                                                                                                                                                    if (isset($edit['body_volume'])) {
                                                                                                                                                        echo $edit['body_volume'];
                                                                                                                                                    } ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="e_plate" class="form-label fw-semibold">E Plate</label>
                                                            <input type="text" class="w-100" name="e_plate" placeholder="E Plate" value="<?php
                                                                                                                                            if (isset($edit['e_plate'])) {
                                                                                                                                                echo $edit['e_plate'];
                                                                                                                                            } ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="cost_quoted" class="form-label fw-semibold">Cost Quoted</label>
                                                            <input type="text" class="w-100" name="cost_quoted" placeholder="Cost Quoted" value="<?php
                                                                                                                                                    if (isset($edit['cost_quoted'])) {
                                                                                                                                                        echo $edit['cost_quoted'];
                                                                                                                                                    } ?>">
                                                        </div>
                                                    </div>


                                                    <!-- Chassis information (if Known) -->
                                                    <div class="row mt-3">
                                                        <h5 class="card-title fw-semibold">Chassis information (if Known)</h5>
                                                        <hr>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="year" class="form-label fw-semibold">Year</label>
                                                                <input type="date" class="w-100" name="year" placeholder="Year" value="<?php
                                                                                                                                        if (isset($edit['year'])) {
                                                                                                                                            echo $edit['year'];
                                                                                                                                        } ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="gvwr" class="form-label fw-semibold">Gross Vehicle Wieght(GVWR) in Pounds
                                                                    <span>JazzCash</span></label>
                                                                <input type="text" class="w-100" name="gvwr" placeholder="Gross Vehicle Wieght(GVWR) in Pounds JazzCash" value="<?php
                                                                                                                                                                                if (isset($edit['gvwr'])) {
                                                                                                                                                                                    echo $edit['gvwr'];
                                                                                                                                                                                } ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="no_of_units" class="form-label fw-semibold">Number of units in this quote
                                                                </label>
                                                                <input type="text" class="w-100" name="no_of_units" placeholder="Number of units in this quote" value="<?php
                                                                                                                                                                        if (isset($edit['no_of_units'])) {
                                                                                                                                                                            echo $edit['no_of_units'];
                                                                                                                                                                        } ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <p>Fuel Type</p>
                                                                <input class="form-check-input fuelCheck" type="checkbox" checked name="fuel_Type" value="<?php
                                                                                                                                                            if (isset($edit['fuel_Type'])) {
                                                                                                                                                                echo $edit['fuel_Type'];
                                                                                                                                                            } else {
                                                                                                                                                                echo 'Gas';
                                                                                                                                                            } ?>">
                                                                <label class="form-check-label" for="fuelCheck">
                                                                    Gas
                                                                </label>
                                                                <input class="form-check-input fuelCheck ms-3" type="checkbox" name="fuel_Type" value="<?php
                                                                                                                                                        if (isset($edit['fuel_Type'])) {
                                                                                                                                                            echo $edit['fuel_Type'];
                                                                                                                                                        } else {
                                                                                                                                                            echo 'Diesel';
                                                                                                                                                        } ?>">
                                                                <label class="form-check-label" for="fuelCheck">
                                                                    Diesel
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="wbl" class="form-label fw-semibold">Wheelbase Length in Inches</label>
                                                                <input type="text" class="w-100" name="wbl" placeholder="Wheelbase Length in Inches" value="<?php
                                                                                                                                                            if (isset($edit['wbl'])) {
                                                                                                                                                                echo $edit['wbl'];
                                                                                                                                                            } ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="cal" class="form-label fw-semibold">Cab to Axie Length in Lanches</label>
                                                                <input type="text" class="w-100" name="cal" placeholder="Cab to Axie Length in Lanches" value="<?php
                                                                                                                                                                if (isset($edit['cal'])) {
                                                                                                                                                                    echo $edit['cal'];
                                                                                                                                                                } ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label fw-semibold">Special Requirements</label>
                                                                <input type="text" class="w-100" name="special_requirements" placeholder="Special Requirements" value="<?php
                                                                                                                                                                        if (isset($edit['special_requirements'])) {
                                                                                                                                                                            echo $edit['special_requirements'];
                                                                                                                                                                        } ?>">
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
                                                                <input type="text" class="w-100 py-2" name="condensor_unit" placeholder="Condensor Unit" value="<?php
                                                                                                                                                                if (isset($edit['condensor_unit'])) {
                                                                                                                                                                    echo $edit['condensor_unit'];
                                                                                                                                                                } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Volt</label>
                                                                <input type="text" class="w-100 py-2" name="volt" placeholder="Volt" value="<?php
                                                                                                                                            if (isset($edit['volt'])) {
                                                                                                                                                echo $edit['volt'];
                                                                                                                                            } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Co2 Eq</label>
                                                                <input type="text" class="w-100 py-2" name="co2_eq" placeholder="Co2 Eq" value="<?php
                                                                                                                                                if (isset($edit['co2_eq'])) {
                                                                                                                                                    echo $edit['co2_eq'];
                                                                                                                                                } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Press Max</label>
                                                                <input type="text" class="w-100 py-2" name="press_max" placeholder="Press Max" value="<?php
                                                                                                                                                        if (isset($edit['press_max'])) {
                                                                                                                                                            echo $edit['press_max'];
                                                                                                                                                        } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Decible</label>
                                                                <input type="text" class="w-100 py-2" name="decible" placeholder="Decible" value="<?php
                                                                                                                                                    if (isset($edit['decible'])) {
                                                                                                                                                        echo $edit['decible'];
                                                                                                                                                    } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">GWP</label>
                                                                <input type="text" class="w-100 py-2" name="GWP" placeholder="GWP" value="<?php
                                                                                                                                            if (isset($edit['GWP'])) {
                                                                                                                                                echo $edit['GWP'];
                                                                                                                                            } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">KG/LB</label>
                                                                <input type="text" class="w-100 py-2" name="KG/LB" placeholder="KG/LB" value="<?php
                                                                                                                                                if (isset($edit['KG/LB'])) {
                                                                                                                                                    echo $edit['KG/LB'];
                                                                                                                                                } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Oil</label>
                                                                <input type="text" class="w-100 py-2" name="oil" placeholder="Oil" value="<?php
                                                                                                                                            if (isset($edit['oil'])) {
                                                                                                                                                echo $edit['oil'];
                                                                                                                                            } ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Pressmen</label>
                                                                <input type="text" class="w-100 py-2" name="pressmen" placeholder="Pressmen" value="<?php
                                                                                                                                                    if (isset($edit['pressmen'])) {
                                                                                                                                                        echo $edit['pressmen'];
                                                                                                                                                    } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Export</label>
                                                                <input type="text" class="w-100 py-2" name="export" placeholder="Export" value="<?php
                                                                                                                                                if (isset($edit['export'])) {
                                                                                                                                                    echo $edit['export'];
                                                                                                                                                } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Disp m3/4</label>
                                                                <input type="text" class="w-100 py-2" name="disp_m3/h" placeholder="Disp m3/4" value="<?php
                                                                                                                                                        if (isset($edit['disp_m3/h'])) {
                                                                                                                                                            echo $edit['disp_m3/h'];
                                                                                                                                                        } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">MoA / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="moA/Amp" placeholder="MoA/Amp" value="<?php
                                                                                                                                                    if (isset($edit['moA/Amp'])) {
                                                                                                                                                        echo $edit['moA/Amp'];
                                                                                                                                                    } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">Mcc / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="Mcc/Amp" placeholder="Mcc/Amp" value="<?php
                                                                                                                                                    if (isset($edit['Mcc/Amp'])) {
                                                                                                                                                        echo $edit['Mcc/Amp'];
                                                                                                                                                    } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">LRA / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="LRA/Amp" placeholder="LRA/Amp" value="<?php
                                                                                                                                                    if (isset($edit['LRA/Amp'])) {
                                                                                                                                                        echo $edit['LRA/Amp'];
                                                                                                                                                    } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">MRA / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="MRA/Amp" placeholder="MRA/Amp" value="<?php
                                                                                                                                                    if (isset($edit['MRA/Amp'])) {
                                                                                                                                                        echo $edit['MRA/Amp'];
                                                                                                                                                    } ?>">
                                                            </div>
                                                            <div class="in">
                                                                <label class="form-label fw-semibold mt-3">RLAA / Amp</label>
                                                                <input type="text" class="w-100 py-2" name="RLAA/Amp" placeholder="RLAA/Amp" value="<?php
                                                                                                                                                    if (isset($edit['RLAA/Amp'])) {
                                                                                                                                                        echo $edit['RLAA/Amp'];
                                                                                                                                                    } ?>">
                                                            </div>

                                                            <button type="submit" name="<?php if (isset($_POST['edit_delete']) && !empty($_POST['edit_delete']) && count($_POST['edit_delete']) == 1) {
                                                                                            echo "update";
                                                                                        } else {
                                                                                            echo 'submit';
                                                                                        }
                                                                                        ?>" class="save py-2"><?php if (isset($_POST['edit_delete']) && !empty($_POST['edit_delete']) && count($_POST['edit_delete']) == 1) {
                                                                                                                    echo "update";
                                                                                                                } else {
                                                                                                                    echo 'save';
                                                                                                                } ?>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--******************  ******************-->
                    <form action="" method="POST">
                        <div class="row my-5">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 text-start py-3 px-4">
                                            <p class="font student"> Forcars usa body details</p>
                                        </div>
                                        <div class="col-lg-9 col-md-9 py-3 ">
                                            <div class="btn-edit-delete1 text-end px-1">
                                                <button type="submit" class="export-btn delete" name="delete_btn">
                                                    <span class="fa-regular fa-trash-can "></span>
                                                </button>
                                                <button type="submit" class="edit export-btn" name="edit">
                                                    <span class="fa-solid fa-pen-to-square "></span>
                                                </button>
                                                <a href="./exportViewTruckDetails.php">
                                                    <span class="fa-solid fa-cloud-arrow-down export export-btn"> </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="m-0 ">

                                    <div class="dov ">
                                        <div class="table-wrapper">
                                            <table class="contain-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <i class="fa-solid fa-plus "></i>
                                                        </th>
                                                        <th>body_id<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>model_no <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>year<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>fc_body<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_length<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_dimension<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_side_door<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_rear_door<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_weight<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_volume<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_temp<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>floor<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>e_track<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>e_plate<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_accessories<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>gvwr<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>wbl<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>cal<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>no_of_units<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>manufactured_on<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>chassis_frame<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>cost_quoted<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>misc<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>eutectic_plates<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>refrigeration<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>additional_details<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>special_requirements<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>fuel_Type<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>unit_Custom<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>added_on<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>added_by<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>updated_on<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>updated_by<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <!-- Eutectic Details table -->
                                                        <th>condensor<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>condensor_unit<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>power<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>refrigerant<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>compressor<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>volt<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>co2_eq<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>press_max<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>decible<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>production_date<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <!-- <th>model_no <i class="fa-solid fa-arrow-down px-2"></i></th> -->
                                                        <th>GWP<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>KG/LB<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>oil<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>pressmen<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>export<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>disp_m3/h<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>moA/Amp<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Mcc/Amp<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>LRA/Amp<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>MRA/Amp<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>RLAA/Amp<i class="fa-solid fa-arrow-down px-2"></i></th>


                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    <?php
                                                    // Establish a database connection (replace with your database connection code)
                                                    $conn = mysqli_connect("localhost", "root", "", "forstcarusa");

                                                    if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    $sql = "SELECT * FROM `body_details`
                                                            INNER JOIN `eutectic_details` ON body_details.model_no = eutectic_details.model_no";

                                                    // $result = $conn->query($sql);
                                                    $result = mysqli_query($conn, $sql);

                                                    if (!$result) {
                                                        die("Query failed: " . mysqli_error($conn));
                                                    }

                                                    $no = 1;
                                                    if ($result->num_rows > 0) {
                                                        // Output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                            <tr>
                                                                <?php
                                                                // Assuming you have fetched data from both tables into $row1 and $row2
                                                                $value = $row['body_id'] . '-' . $row['eutectic_id'];
                                                                ?>
                                                                <td><input type="checkbox" name="edit_delete[]" class="text-input" value="<?php echo $value; ?>"></td>
                                                                <td class="font"><?php echo $no ?></td>
                                                                <td><?php echo $row['model_no']; ?></td>
                                                                <td><?php echo $row['year']; ?></td>
                                                                <td><?php echo $row['fc_body']; ?></td>
                                                                <td><?php echo $row['body_length']; ?></td>
                                                                <td><?php echo $row['body_dimension']; ?></td>
                                                                <td><?php echo $row['body_side_door']; ?></td>
                                                                <td><?php echo $row['body_rear_door']; ?></td>
                                                                <td><?php echo $row['body_weight']; ?></td>
                                                                <td><?php echo $row['body_volume']; ?></td>
                                                                <td><?php echo $row['body_temp']; ?></td>
                                                                <td><?php echo $row['floor']; ?></td>
                                                                <td><?php echo $row['e_track']; ?></td>
                                                                <td><?php echo $row['e_plate']; ?></td>
                                                                <td><?php echo $row['body_accessories']; ?></td>
                                                                <td><?php echo $row['gvwr']; ?></td>
                                                                <td><?php echo $row['wbl']; ?></td>
                                                                <td><?php echo $row['cal']; ?></td>
                                                                <td><?php echo $row['no_of_units']; ?></td>
                                                                <td><?php echo $row['manufactured_on']; ?></td>
                                                                <td><?php echo $row['chassis_frame']; ?></td>
                                                                <td><?php echo $row['cost_quoted']; ?></td>
                                                                <td><?php echo $row['misc']; ?></td>
                                                                <td><?php echo $row['eutectic_plates']; ?></td>
                                                                <td><?php echo $row['refrigeration']; ?></td>
                                                                <td><?php echo $row['additional_details']; ?></td>
                                                                <td><?php echo $row['special_requirements']; ?></td>
                                                                <td><?php echo $row['fuel_Type']; ?></td>
                                                                <td><?php echo $row['unit_Custom']; ?></td>
                                                                <td><?php echo $row['added_on']; ?></td>
                                                                <td><?php echo $row['added_by']; ?></td>
                                                                <td><?php echo $row['updated_on']; ?></td>
                                                                <td><?php echo $row['updated_by']; ?></td>

                                                                <!-- Eutectic Details table -->
                                                                <td><?php echo $row['condensor']; ?></td>
                                                                <td><?php echo $row['condensor_unit']; ?></td>
                                                                <td><?php echo $row['power']; ?></td>
                                                                <td><?php echo $row['refrigerant']; ?></td>
                                                                <td><?php echo $row['compressor']; ?></td>
                                                                <td><?php echo $row['volt']; ?></td>
                                                                <td><?php echo $row['co2_eq']; ?></td>
                                                                <td><?php echo $row['press_max']; ?></td>
                                                                <td><?php echo $row['decible']; ?></td>
                                                                <td><?php echo $row['production_date']; ?></td>
                                                                <!-- <td><?php echo $row['model_no']; ?></td> -->
                                                                <td><?php echo $row['GWP']; ?></td>
                                                                <td><?php echo $row['KG/LB']; ?></td>
                                                                <td><?php echo $row['oil']; ?></td>
                                                                <td><?php echo $row['pressmen']; ?></td>
                                                                <td><?php echo $row['export']; ?></td>
                                                                <td><?php echo $row['disp_m3/h']; ?></td>
                                                                <td><?php echo $row['moA/Amp']; ?></td>
                                                                <td><?php echo $row['Mcc/Amp']; ?></td>
                                                                <td><?php echo $row['LRA/Amp']; ?></td>
                                                                <td><?php echo $row['MRA/Amp']; ?></td>
                                                                <td><?php echo $row['RLAA/Amp']; ?></td>

                                                            </tr>
                                                    <?php
                                                            $no = $no + 1;
                                                        }
                                                    } else {
                                                        echo "<tr><td class='text-start text-danger' colspan='40'>No Insert Data Please <a href='./add-truck.php'>Add Truck Details</a>.</td></tr>";
                                                    }

                                                    // $conn->close();
                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


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