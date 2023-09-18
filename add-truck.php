<?php





?>
<?php
require "includes/header.php";
require "includes/navbar.php";
require "includes/sidebar.php";
?>

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
                                                    <input type="text" class="w-100" name="model_no" placeholder="Model No">
                                                    <span class="text-danger fs-6 "></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="body_length" class="form-label fw-semibold">Body Size</label>
                                                    <input type="text" class="w-100" name="body_length" placeholder="Body Size">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="unit_Custom" class="form-label fw-semibold">Unit Custom</label>
                                                    <input type="text" class="w-100" name="unit_Custom" placeholder="Unit: Custom">
                                                </div>
                                                <div class=" mb-3">
                                                    <label for="additional_details" class="form-label fw-semibold">Additional Details</label>
                                                    <input type="text" class="w-100" name="additional_details" placeholder="Additional Details">
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


<?php require "includes/footer.php"; ?>