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
    <div class="card border-0 shadow mt-5 py-5">
        <div class="row px-5">
            <div class="col-9">
                <h3 class="mb-5">COMPANY DETAILS</h3>
            </div>
            <div class="col-3 text-end">

                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
        <div class="row px-5" >
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow mt-5 py-5">
    <div class="row px-5">
            <div class="col-9">
                <h3 class="mb-5">TRUCK DETAILS</h3>
            </div>
            <div class="col-3 text-end">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
        <div class="row px-5">
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow mt-5 py-5">
        <div class="row px-5 ">
            <h3 class="mb-3">IMAGE TRUCK</h3>
            <div class="row">
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
                            <p class="text-light fw-bold">Truck Back Side Image</p>
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
</div>
<?php
include "./includes/footer.php";
?>