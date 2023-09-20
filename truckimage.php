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
<div class="container-fluid ">
    <div class="card mt-5 py-5">
        <div class="row px-5 ">

            <div class="col-lg-6">
                <label for="contact" class="form-label fw-semibold mt-3">Front Side Image</label>
                <input type="file" class="w-100 inputDesign" id="contact" name="make" placeholder="make">

                <label for="contact" class="form-label fw-semibold mt-3">Back Side Image</label>
                <input type="file" class="w-100 inputDesign" id="contact" name="make" placeholder="make">
            </div>

            <div class="col-lg-6">
                <label for="contact" class="form-label fw-semibold mt-3">Left Side Image</label>
                <input type="file" class="w-100 inputDesign" id="contact" name="make" placeholder="make">

                <label for="contact" class="form-label fw-semibold mt-3">Right Side Image</label>
                <input type="file" class="w-100 inputDesign" id="contact" name="make" placeholder="make">
            </div>

        </div>
    </div>


    <div class="card mt-5">
        <div class="row">
            
        </div>
        <div class="row mx-3">
            <div class="col-lg-3 my-3 ">
                <div class="card">
                    <img src="truck_image/truck.png" class="img-fluid" alt="">
                    <div class="card-footer bg-primary text-center ">
                        <p class="text-light fw-bold">Truck Front Side Image</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3 ">
                <div class="card">
                    <img src="truck_image/truck.png" class="img-fluid" alt="">
                    <div class="card-footer bg-primary text-center ">
                        <p class="text-light fw-bold">Truck Back  Side Image</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3 ">
                <div class="card">
                    <img src="truck_image/truck.png" class="img-fluid" alt="">
                    <div class="card-footer bg-primary text-center ">
                        <p class="text-light fw-bold"> Truck Left Side Image</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3 ">
                <div class="card">
                    <img src="truck_image/truck.png" class="img-fluid" alt="">
                    <div class="card-footer bg-primary text-center ">
                        <p class="text-light fw-bold">Truck Right Side Image</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "./includes/footer.php";
?>