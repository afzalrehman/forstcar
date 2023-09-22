<?php
include './config/config.php';
require './function/function.inc.php';
session_start();
global $conn;

include "./includes/header.php";
include "./includes/serchform.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";
?>
<div class="container-fluid">
    <div class="tab-content" id="pills-tabContent">
        <div class="row">
            <div class="col-12">
                <div class="card my-5 w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">

                        <form action="add_truck_code.php" method="POST" enctype="multipart/form-data">
                            <div class="row text-dark">
                                <div class="row my-5">
                                    <h5 class="card-title fw-semibold">Frost Car Unit Details (SQL)</h5>
                                    <hr class="p-0">

                                    <div class="col-lg-6">

                                        <div class="mb-2">
                                            <label for="make" class="form-label fw-semibold">Make</label>
                                            <input type="text" class="w-100 inputDesign" id="make" name="make" placeholder="make" value="<?php
                                                                                                                                            if (isset($_POST['add_truck_btn'])) {
                                                                                                                                                echo $make;
                                                                                                                                            }
                                                                                                                                            unset($make); ?>">
                                            <?php if (isset($_SESSION['empty_make'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_make'] . '</p>';
                                                unset($_SESSION['empty_make']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="model" class="form-label fw-semibold">Model</label>
                                            <input type="text" class="w-100 inputDesign" id="model" name="model" placeholder="model">
                                            <?php if (isset($_SESSION['empty_model'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_model'] . '</p>';
                                                unset($_SESSION['empty_model']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="wheelbase" class="form-label fw-semibold">Wheelbase</label>
                                            <input type="text" class="w-100 inputDesign" id="wheelbase" name="wheelbase" placeholder="wheelbase">
                                            <?php if (isset($_SESSION['empty_wheelbase'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_wheelbase'] . '</p>';
                                                unset($_SESSION['empty_wheelbase']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="vin" class="form-label fw-semibold">Vin #</label>
                                            <input type="text" class="w-100 inputDesign" id="vin" name="vin" placeholder="vin">
                                            <?php if (isset($_SESSION['empty_vin'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_vin'] . '</p>';
                                                unset($_SESSION['empty_vin']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="contact_Name" class="form-label fw-semibold">Contact Name</label>
                                            <input type="text" class="w-100 inputDesign" id="contact_Name" name="contact_Name" placeholder="contact_Name">
                                            <?php if (isset($_SESSION['empty_contact_Name'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_contact_Name'] . '</p>';
                                                unset($_SESSION['empty_contact_Name']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="contact_Num" class="form-label fw-semibold">Contact #</label>
                                            <input type="text" class="w-100 inputDesign" id="contact_Num" name="contact_Num" placeholder="contact_Num">
                                            <?php if (isset($_SESSION['empty_contact_Num'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_contact_Num'] . '</p>';
                                                unset($_SESSION['empty_contact_Num']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="fc_Unit_Cost" class="form-label fw-semibold">Frost Car unit Cost</label>
                                            <input type="text" class="w-100 inputDesign" id="fc_Unit_Cost" name="fc_Unit_Cost" placeholder="fc_Unit_Cost">
                                            <?php if (isset($_SESSION['empty_fc_Unit_Cost'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_fc_Unit_Cost'] . '</p>';
                                                unset($_SESSION['empty_fc_Unit_Cost']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="fc_Body" class="form-label fw-semibold">FC Body</label>
                                            <input type="text" class="w-100 inputDesign" id="fc_Body" name="fc_Body" placeholder="fc_Body">
                                            <?php if (isset($_SESSION['empty_fc_Body'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_fc_Body'] . '</p>';
                                                unset($_SESSION['empty_fc_Body']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="body_Weight" class="form-label fw-semibold">Body Weight</label>
                                            <input type="text" class="w-100 inputDesign" id="body_Weight" name="body_Weight" placeholder="body_Weight">
                                            <?php if (isset($_SESSION['empty_body_Weight'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_body_Weight'] . '</p>';
                                                unset($_SESSION['empty_body_Weight']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="fc_Model" class="form-label fw-semibold">FC Model</label>
                                            <input type="text" class="w-100 inputDesign" id="fc_Model" name="fc_Model" placeholder="fc_Model">
                                            <?php if (isset($_SESSION['empty_fc_Model'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_fc_Model'] . '</p>';
                                                unset($_SESSION['empty_fc_Model']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="exterior_Dimension" class="form-label fw-semibold">Exterior Dimension</label>
                                            <input type="text" class="w-100 inputDesign" id="exterior_Dimension" name="exterior_Dimension" placeholder="exterior_Dimension">
                                            <?php if (isset($_SESSION['empty_exterior_Dimension'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_exterior_Dimension'] . '</p>';
                                                unset($_SESSION['empty_exterior_Dimension']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="compressor" class="form-label fw-semibold">Compressor</label>
                                            <input type="text" class="w-100 inputDesign" id="compressor" name="compressor" placeholder="compressor">
                                            <?php if (isset($_SESSION['empty_compressor'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_compressor'] . '</p>';
                                                unset($_SESSION['empty_compressor']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="comp_Serial" class="form-label fw-semibold">Comp.Serial</label>
                                            <input type="text" class="w-100 inputDesign" id="comp_Serial" name="comp_Serial" placeholder="comp_Serial">
                                            <?php if (isset($_SESSION['empty_comp_Serial'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_comp_Serial'] . '</p>';
                                                unset($_SESSION['empty_comp_Serial']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="voltage" class="form-label fw-semibold">Voltage</label>
                                            <input type="text" class="w-100 inputDesign" id="voltage" name="voltage" placeholder="voltage">
                                            <?php if (isset($_SESSION['empty_voltage'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_voltage'] . '</p>';
                                                unset($_SESSION['empty_voltage']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="sound_Decibel" class="form-label fw-semibold">Sound Decibel</label>
                                            <input type="text" class="w-100 inputDesign" id="sound_Decibel" name="sound_Decibel" placeholder="sound_Decibel">
                                            <?php if (isset($_SESSION['empty_sound_Decibel'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_sound_Decibel'] . '</p>';
                                                unset($_SESSION['empty_sound_Decibel']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="current_FLA" class="form-label fw-semibold">Current FLA</label>
                                            <input type="text" class="w-100 inputDesign" id="current_FLA" name="current_FLA" placeholder="current_FLA">
                                            <?php if (isset($_SESSION['empty_current_FLA'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_current_FLA'] . '</p>';
                                                unset($_SESSION['empty_current_FLA']);
                                            }
                                            ?>
                                        </div>

                                        <div class="mb-2">
                                            <label for="refrigerant" class="form-label fw-semibold">Refrigerant</label>
                                            <input type="text" class="w-100 inputDesign" id="refrigerant" name="refrigerant" placeholder="refrigerant">
                                            <?php if (isset($_SESSION['empty_refrigerant'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_refrigerant'] . '</p>';
                                                unset($_SESSION['empty_refrigerant']);
                                            }
                                            ?>
                                        </div>

                                        <div class="mb-2">
                                            <label for="front_S_Image" class="form-label fw-semibold">Front Side Image</label>
                                            <input type="file" class="w-100 inputDesign" id="front_S_Image" name="front_S_Image">
                                            <?php if (isset($_SESSION['empty_sight_Glass'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_sight_Glass'] . '</p>';
                                                unset($_SESSION['empty_sight_Glass']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="back_S_Image" class="form-label fw-semibold">Back Side Image</label>
                                            <input type="file" class="w-100 inputDesign" id="back_S_Image" name="back_S_Image">
                                            <?php if (isset($_SESSION['empty_filter_Drier'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_filter_Drier'] . '</p>';
                                                unset($_SESSION['empty_filter_Drier']);
                                            }
                                            ?>
                                        </div>


                                    </div>

                                    <div class="col-lg-6">

                                    <div class="mb-2">
                                            <label for="condenser" class="form-label fw-semibold">Condenser</label>
                                            <input type="text" class="w-100 inputDesign" id="condenser" name="condenser" placeholder="condenser">
                                            <?php if (isset($_SESSION['empty_condenser'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_condenser'] . '</p>';
                                                unset($_SESSION['empty_condenser']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="solenoid" class="form-label fw-semibold">Solenoid</label>
                                            <input type="text" class="w-100 inputDesign" id="solenoid" name="solenoid" placeholder="solenoid">
                                            <?php if (isset($_SESSION['empty_solenoid'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_solenoid'] . '</p>';
                                                unset($_SESSION['empty_solenoid']);
                                            }
                                            ?>
                                        </div>
                                        

                                    <div class="mb-2">
                                            <label for="condenser_Fan" class="form-label fw-semibold">Condenser Fan</label>
                                            <input type="text" class="w-100 inputDesign" id="condenser_Fan" name="condenser_Fan" placeholder="condenser_Fan">
                                            <?php if (isset($_SESSION['empty_condenser_Fan'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_condenser_Fan'] . '</p>';
                                                unset($_SESSION['empty_condenser_Fan']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="interior_Lights" class="form-label fw-semibold">Interior Lights</label>
                                            <input type="text" class="w-100 inputDesign" id="interior_Lights" name="interior_Lights" placeholder="interior_Lights">
                                            <?php if (isset($_SESSION['empty_interior_Lights'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_interior_Lights'] . '</p>';
                                                unset($_SESSION['empty_interior_Lights']);
                                            }
                                            ?>
                                        </div>

                                        <div class="mb-2">
                                            <label for="control_Panel" class="form-label fw-semibold">Control Panel</label>
                                            <input type="text" class="w-100 inputDesign" id="control_Panel" name="control_Panel" placeholder="control_Panel">
                                            <?php if (isset($_SESSION['empty_control_Panel'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_control_Panel'] . '</p>';
                                                unset($_SESSION['empty_control_Panel']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="circuit_Breaker" class="form-label fw-semibold">Circuit Breaker</label>
                                            <input type="text" class="w-100 inputDesign" id="circuit_Breaker" name="circuit_Breaker" placeholder="circuit_Breaker">
                                            <?php if (isset($_SESSION['empty_circuit_Breaker'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_circuit_Breaker'] . '</p>';
                                                unset($_SESSION['empty_circuit_Breaker']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="electric_Contactor" class="form-label fw-semibold">Electric Contactor</label>
                                            <input type="text" class="w-100 inputDesign" id="electric_Contactor" name="electric_Contactor" placeholder="electric_Contactor">
                                            <?php if (isset($_SESSION['empty_electric_Contactor'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_electric_Contactor'] . '</p>';
                                                unset($_SESSION['empty_electric_Contactor']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="part" class="form-label fw-semibold">Part #</label>
                                            <input type="text" class="w-100 inputDesign" id="part" name="part" placeholder="part">
                                            <?php if (isset($_SESSION['empty_part'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_part'] . '</p>';
                                                unset($_SESSION['empty_part']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="eutectic_Plate" class="form-label fw-semibold">Eutectic Plate</label>
                                            <input type="text" class="w-100 inputDesign" id="eutectic_Plate" name="eutectic_Plate" placeholder="eutectic_Plate">
                                            <?php if (isset($_SESSION['empty_eutectic_Plate'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_eutectic_Plate'] . '</p>';
                                                unset($_SESSION['empty_eutectic_Plate']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="expansion_Valve" class="form-label fw-semibold">Expansion Valve</label>
                                            <input type="text" class="w-100 inputDesign" id="expansion_Valve" name="expansion_Valve" placeholder="expansion_Valve">
                                            <?php if (isset($_SESSION['empty_expansion_Valve'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_expansion_Valve'] . '</p>';
                                                unset($_SESSION['empty_expansion_Valve']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="recovery_Tank" class="form-label fw-semibold">Recovery Tank</label>
                                            <input type="text" class="w-100 inputDesign" id="recovery_Tank" name="recovery_Tank" placeholder="recovery_Tank">
                                            <?php if (isset($_SESSION['empty_recovery_Tank'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_recovery_Tank'] . '</p>';
                                                unset($_SESSION['empty_recovery_Tank']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="pressure_Control" class="form-label fw-semibold">Pressure Control</label>
                                            <input type="text" class="w-100 inputDesign" id="pressure_Control" name="pressure_Control" placeholder="pressure_Control">
                                            <?php if (isset($_SESSION['empty_pressure_Control'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_pressure_Control'] . '</p>';
                                                unset($_SESSION['empty_pressure_Control']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="sight_Glass" class="form-label fw-semibold">Sight Glass</label>
                                            <input type="text" class="w-100 inputDesign" id="sight_Glass" name="sight_Glass" placeholder="sight_Glass">
                                            <?php if (isset($_SESSION['empty_sight_Glass'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_sight_Glass'] . '</p>';
                                                unset($_SESSION['empty_sight_Glass']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="filter_Drier" class="form-label fw-semibold">Filter Drier</label>
                                            <input type="text" class="w-100 inputDesign" id="filter_Drier" name="filter_Drier" placeholder="filter_Drier">
                                            <?php if (isset($_SESSION['empty_filter_Drier'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_filter_Drier'] . '</p>';
                                                unset($_SESSION['empty_filter_Drier']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="thermostat" class="form-label fw-semibold">Thermostat</label>
                                            <input type="text" class="w-100 inputDesign" id="thermostat" name="thermostat" placeholder="thermostat">
                                            <?php if (isset($_SESSION['empty_thermostat'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_thermostat'] . '</p>';
                                                unset($_SESSION['empty_thermostat']);
                                            }
                                            ?>
                                        </div>
                                        <div class="mb-2">
                                            <label for="misc" class="form-label fw-semibold">Misc</label>
                                            <input type="text" class="w-100 inputDesign" id="misc" name="misc" placeholder="misc">
                                            <?php if (isset($_SESSION['empty_misc'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_misc'] . '</p>';
                                                unset($_SESSION['empty_misc']);
                                            }
                                            ?>
                                        </div>


                                     
                                        <div class="mb-2">
                                            <label for="left_S_Image" class="form-label fw-semibold">Left Side Image</label>
                                            <input type="file" class="w-100 inputDesign" id="left_S_Image" name="left_S_Image">
                                            <?php if (isset($_SESSION['empty_thermostat'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_thermostat'] . '</p>';
                                                unset($_SESSION['empty_thermostat']);
                                            }
                                            ?>
                                        </div>
                                        <div class="my-2">
                                            <label for="right_S_Image" class="form-label fw-semibold">Right Side Image</label>
                                            <input type="file" class="w-100 inputDesign" id="right_S_Image" name="right_S_Image">
                                            <?php if (isset($_SESSION['empty_misc'])) {
                                                echo '
                                        <p class="text-danger">' . $_SESSION['empty_misc'] . '</p>';
                                                unset($_SESSION['empty_misc']);
                                            }
                                            ?>
                                        </div>


                                        <button type="submit" name="add_truck_btn" class="save py-2">Save</button>

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
<?php
include "./includes/footer.php";
?>