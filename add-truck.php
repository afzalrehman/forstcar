<?php
include './config/config.php';
require './function/function.inc.php';
session_start();
if (!isset($_SESSION['user_fullname'])) {
    echo "You are logged out";
    header('location:login.php');
}





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

                        <form>
                            <div class="row text-dark">
                                <div class="row my-5">
                                    <h5 class="card-title fw-semibold">2. Wakl-in/Rear-door Body
                                    </h5>
                                    <hr class="p-0">


                                    <div class="col-lg-6">

                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Year</label>
                                            <input type="text" class="form-control " id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Make</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Wheelbase</label>
                                            <input type="text" class="form-control " id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Vin #</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Contact Name</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Contact #</label>
                                            <input type="text" class="form-control " id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Frost Car unit Cost</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">FC Body</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Body Weight</label>
                                            <input type="text" class="form-control " id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">FC Model</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Exterior Dimension</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Compressor</label>
                                            <input type="text" class="form-control " id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Comp.Serial</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Voltage</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Sound Decibel</label>
                                            <input type="text" class="form-control " id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Current FLA</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Refrigerant</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Condenser</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Solenoid</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Condenser Fan</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Interior Lights</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Control Panel</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Circuit Breaker</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Electric Contactor</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Part #</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Eutectic Plate</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Expansion Valve</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Recovery Tank</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Pressure Control</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Sight Glass</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Filter Drier</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Thermostat</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                                        </div>
                                        <div class="my-2">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Misc</label>
                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                        </div>

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