<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
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
    include 'navbar.php';
    ?>
    <!-- navbar End -->
    <div id="layoutSidenav">
        <!-- Sidebar -->
        <?php
        include 'sidebar.php';
        ?>
        <!-- Sidebar End -->
        <div id="layoutSidenav_content">
            <main>
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

                                                    <div class="col-lg-4 mt-3">
                                                        <p>Body Length in Feet</p>
                                                        <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            14
                                                        </label>
                                                        <input class="form-check-input ms-3" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            15
                                                        </label>
                                                        <input class="form-check-input ms-3" type="checkbox" name="flexRadioDefault" id="flexRadioDefault3">
                                                        <label class="form-check-label" for="flexRadioDefault3">
                                                            14
                                                        </label>
                                                        <input class="form-check-input ms-3" type="checkbox" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                                        <label class="form-check-label" for="flexRadioDefault4">
                                                            15
                                                        </label>
                                                    </div>

                                                    <div class="col-lg-4 mt-3">
                                                        <p>Refrigeration</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Low Temp - IceCream/Frozen
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                Mid Temp - Fresh/Cold
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-3">
                                                        <p>Rear Door</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Center Door
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                Double Door
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                Tri-fold Door
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-5">
                                                        <p>Side Door</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                                            <label class="form-check-label" for="flexRadioDefault5">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-5">
                                                        <p>E-Track (Tall Body Cargo Control)</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                                            <label class="form-check-label" for="flexRadioDefault7">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8" checked>
                                                            <label class="form-check-label" for="flexRadioDefault8">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-5">
                                                        <p>Floor</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Non-Slip Textured
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                Taised Channel
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                            <label class="form-check-label" for="flexCheckChecked">
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
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Low & Mid Temp
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                            <label class="form-check-label" for="flexCheckChecked">
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
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                                            <label class="form-check-label" for="flexRadioDefault5">
                                                                Shelving
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                Grab Handles
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                Roll Carts
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                Steps
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                Dolly Rack
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                                                            <label class="form-check-label" for="flexRadioDefault6">
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
                                                        <div class="mb-5">
                                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Make &
                                                                Model</label>
                                                            <input type="text" class="form-control " id="zipCode" name="zipCode" placeholder="Zip Code">
                                                        </div>
                                                        <div class="mb-5">
                                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Year</label>
                                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                                        </div>
                                                        <div class="mb-5">
                                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Gross Vehicle
                                                                Wieght
                                                                (GVWR) in Pounds
                                                                <span>JazzCash</span></label>
                                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-5">
                                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Wheelbase Length
                                                                in
                                                                Inches</label>
                                                            <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                                                        </div>
                                                        <div class="mb-5">
                                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Cab to Axie
                                                                Length in
                                                                Lanches</label>
                                                            <input type="text" class="form-control" id="telePhone" name="telePhone" placeholder="Tele Phone">
                                                        </div>
                                                        <div class="mb-5">
                                                            <p>Fuel Type</p>

                                                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Gas
                                                            </label>


                                                            <input class="form-check-input ms-3" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Diesel
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--  -->


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