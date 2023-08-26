<?php

require 'config.php';
global $conn;




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
                                                            <label for="fc_body" class="form-label fw-semibold">MODEL #</label>
                                                            <input type="text" class="w-100" name="fc_body" placeholder="Make & Model">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_dimension" class="form-label fw-semibold">Dody Dimension</label>
                                                            <input type="text" class="w-100" name="body_dimension" placeholder="Year">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_weight" class="form-label fw-semibold">body_weight</label>
                                                            <input type="text" class="w-100" name="body_weight" placeholder="Gross Vehicle Wieght(GVWR) in Pounds JazzCash">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="body_volume" class="form-label fw-semibold">body_volume</label>
                                                            <input type="text" class="w-100" name="body_volume" placeholder="Number of units in this quote">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="e_plate" class="form-label fw-semibold">e_plate</label>
                                                            <input type="text" class="w-100" name="e_plate" placeholder="Number of units in this quote">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="chassis_frame" class="form-label fw-semibold">chassis_frame</label>
                                                            <input type="text" class="w-100" name="chassis_frame" placeholder="Make & Model">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="cost_quoted" class="form-label fw-semibold">cost_quoted</label>
                                                            <input type="text" class="w-100" name="cost_quoted" placeholder="Year">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="misc" class="form-label fw-semibold">misc</label>
                                                            <input type="text" class="w-100" name="misc" placeholder="Gross Vehicle Wieght(GVWR) in Pounds JazzCash">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="eutectic_plates" class="form-label fw-semibold">eutectic_plates</label>
                                                            <input type="text" class="w-100" name="eutectic_plates" placeholder="Number of units in this quote">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="additional_details" class="form-label fw-semibold">additional_details</label>
                                                            <input type="text" class="w-100" name="additional_details" placeholder="Number of units in this quote">
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
                                                                <input class="form-check-input refriCheck" type="checkbox" name="refrigeration" value="Low Temp - IceCream/Frozen">
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
                                                                <input class="form-check-input rearCheck" type="checkbox" name="body_rear_door" value="Center Door">
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
                                                                <input class="form-check-input sideCheck" type="radio" name="body_side_door" value="Yes">
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
                                                                <input class="form-check-input eTrackCheck" type="radio" name="e_track" value="Yes">
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
                                                                <input class="form-check-input floorCheck" type="checkbox" name="floor" value="Non-Slip Textured">
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
                                                                <input class="form-check-input temperaCheck" type="checkbox" name="body_temp" value="Low & Mid Temp">
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
                                                                <input class="form-check-input accessorCheck" type="radio" name="body_accessories" value="Shelving">
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
                                                    <!--  -->

                                                    <div class="row">
                                                        <h5 class="card-title fw-semibold">Chassis information (if
                                                            Known)</h5>
                                                        <hr>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="model_no" class="form-label fw-semibold">Make & Model</label>
                                                                <input type="text" class="w-100" name="model_no" placeholder="Make & Model">
                                                            </div>
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
                                                                <label for="special_requirements" class="form-label fw-semibold">Special Requirements</label>
                                                                <input type="text" class="w-100" name="special_requirements" placeholder="Special Requirements">
                                                            </div>
                                                            <div class="mb-3">
                                                                <p>Fuel Type</p>
                                                                <input class="form-check-input fuelCheck" type="checkbox" name="fuelCheck">
                                                                <label class="form-check-label" for="fuelCheck">
                                                                    Gas
                                                                </label>
                                                                <input class="form-check-input fuelCheck ms-3" type="checkbox" name="fuelCheck">
                                                                <label class="form-check-label" for="fuelCheck">
                                                                    Diesel
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Eutectic Details -->
                                                    <h3 class=" font-inter">Eutectic Details</h3>
                                                    <div class="row mb-5 ">
                                                        <div class="col-lg-6  ">
                                                            <!-- <div class="in py-3">
                                                            <input type="date" class=" input w-100 py-2 mt-3" placeholder="Date">
                                                        </div> -->

                                                            <div class="">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Condensor">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Condensor Unit">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Power">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Refrigerant">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Compressor">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Volt">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Co2 Eq">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Press Max">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Decible">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Model No">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="GWP">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="KG/LB">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Oil">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Pressmen">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Export">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Disp m3/4">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="MoA/Amp">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="Mcc/Amp">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="LRA/Amp">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="MRA/Amp">
                                                            </div>
                                                            <div class="in">
                                                                <input type="text" class="w-100 py-2 mt-3" placeholder="RLAA/Amp">
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