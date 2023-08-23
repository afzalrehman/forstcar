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

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
</head>
<style>
    /* .designInput {
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 7px;
        font-size: 16px;
        outline: none;
    }

    .designInput:focus {
        border-color: #0055b8;
        animation: inputFocusAnimation 0.3s;
    }

    @keyframes inputFocusAnimation {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    } */
</style>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-white shadow">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html"><img width="200px" src="assets/img/cropped-frostcar_logo-2-1.png"
                alt=""></a>

        <!-- Sidebar Toggle-->
        <button class="btn text-black btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="text-dark fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav    ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark " id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="text-black fs-5 fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav side-bg bg-nav shadow" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link hover " href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link collapsed hover" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon "><i class="fa-solid fa-truck"></i></div>
                            Truck
                            <div class="sb-sidenav-collapse-arrow "><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link hover active " href="company.html">Company</a>
                                <a class="nav-link hover " href="add-truck.html">Add Truck Details</a>
                                <a class="nav-link hover " href="tables.html">View Truck Details</a>
                            </nav>
                        </div>


                        <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->


                        <a class="nav-link collapsed hover" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                            <div class="sb-nav-link-icon "><i class="fa-solid fa-user"></i></div>
                            Users
                            <div class="sb-sidenav-collapse-arrow "><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse " id="collapseLayouts1" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link hover  " href="user.html">User Add</a>
                                <a class="nav-link hover " href="uservewi.html">User Vewi</a>

                            </nav>
                        </div>
                        <!-- <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer  bg-side-foter text-light">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid my-5 pb-5">

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
                                                        <input class="form-check-input bodyFeetCheck" type="checkbox"
                                                            name="bodyFeetCheck">
                                                        <label class="form-check-label" for="bodyFeetCheck">
                                                            14
                                                        </label>
                                                        <input class="form-check-input bodyFeetCheck ms-3"
                                                            type="checkbox" name="bodyFeetCheck">
                                                        <label class="form-check-label" for="bodyFeetCheck">
                                                            15
                                                        </label>
                                                        <input class="form-check-input bodyFeetCheck ms-3"
                                                            type="checkbox" name="bodyFeetCheck">
                                                        <label class="form-check-label" for="bodyFeetCheck">
                                                            14
                                                        </label>
                                                        <input class="form-check-input bodyFeetCheck ms-3"
                                                            type="checkbox" name="bodyFeetCheck">
                                                        <label class="form-check-label" for="bodyFeetCheck">
                                                            15
                                                        </label>
                                                    </div>

                                                    <div class="col-lg-4 mt-3">
                                                        <p>Refrigeration</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input refriCheck" type="checkbox"
                                                                name="refriCheck">
                                                            <label class="form-check-label" for="refriCheck">
                                                                Low Temp - IceCream/Frozen
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input refriCheck" type="checkbox"
                                                                name="refriCheck">
                                                            <label class="form-check-label" for="refriCheck">
                                                                Mid Temp - Fresh/Cold
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-3">
                                                        <p>Rear Door</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input rearCheck" type="checkbox"
                                                                name="rearCheck">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Center Door
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input rearCheck" type="checkbox"
                                                                name="rearCheck">
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                Double Door
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input rearCheck" type="checkbox"
                                                                name="rearCheck">
                                                            <label class="form-check-label" for="rearCheck">
                                                                Tri-fold Door
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-5">
                                                        <p>Side Door</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input sideCheck" type="radio"
                                                                name="sideCheck">
                                                            <label class="form-check-label" for="sideCheck">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input sideCheck" type="radio"
                                                                name="sideCheck">
                                                            <label class="form-check-label" for="sideCheck">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-5">
                                                        <p>E-Track (Tall Body Cargo Control)</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input eTrackCheck" type="radio"
                                                                name="eTrackCheck">
                                                            <label class="form-check-label" for="eTrackCheck">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input eTrackCheck" type="radio"
                                                                name="eTrackCheck">
                                                            <label class="form-check-label" for="eTrackCheck">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 mt-5">
                                                        <p>Floor</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input floorCheck" type="checkbox"
                                                                name="floorCheck">
                                                            <label class="form-check-label" for="floorCheck">
                                                                Non-Slip Textured
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input floorCheck" type="checkbox"
                                                                name="floorCheck">
                                                            <label class="form-check-label" for="floorCheck">
                                                                Taised Channel
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input floorCheck" type="checkbox"
                                                                name="floorCheck">
                                                            <label class="form-check-label" for="floorCheck">
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
                                                            <input class="form-check-input temperaCheck" type="checkbox"
                                                                name="temperaCheck">
                                                            <label class="form-check-label" for="temperaCheck">
                                                                Low & Mid Temp
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input temperaCheck" type="checkbox"
                                                                name="temperaCheck">
                                                            <label class="form-check-label" for="temperaCheck">
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
                                                            <input class="form-check-input accessorCheck" type="radio"
                                                                name="accessorCheck">
                                                            <label class="form-check-label" for="flexRadioDefault5">
                                                                Shelving
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input accessorCheck" type="radio"
                                                                name="accessorCheck">
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                Grab Handles
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input accessorCheck" type="radio"
                                                                name="accessorCheck">
                                                            <label class="form-check-label" for="flexRadioDefault6">
                                                                Roll Carts
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input accessorCheck" type="radio"
                                                                name="accessorCheck">
                                                            <label class="form-check-label" for="accessorCheck">
                                                                Steps
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input accessorCheck" type="radio"
                                                                name="accessorCheck">
                                                            <label class="form-check-label" for="accessorCheck">
                                                                Dolly Rack
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input accessorCheck" type="radio"
                                                                name="accessorCheck">
                                                            <label class="form-check-label" for="accessorCheck">
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
                                                            <label for="exampleInputPassword1"
                                                                class="form-label fw-semibold">Make &
                                                                Model</label>
                                                            <input type="text" class="w-100"
                                                                placeholder="Condensor">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1"
                                                                class="form-label fw-semibold">Year</label>
                                                            <input type="text" class="w-100"
                                                                placeholder="Condensor">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1"
                                                                class="form-label fw-semibold">Gross Vehicle Wieght
                                                                (GVWR) in Pounds
                                                                <span>JazzCash</span></label>
                                                            <input type="text" class="w-100"
                                                                placeholder="Condensor">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1"
                                                                class="form-label fw-semibold">Wheelbase Length
                                                                in
                                                                Inches</label>
                                                            <input type="text" class="w-100"
                                                                placeholder="Condensor">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1"
                                                                class="form-label fw-semibold">Cab to Axie
                                                                Length in
                                                                Lanches</label>
                                                            <input type="text" class="w-100"
                                                                placeholder="Condensor">
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Fuel Type</p>

                                                            <input class="form-check-input fuelCheck" type="checkbox"
                                                                name="fuelCheck">
                                                            <label class="form-check-label" for="fuelCheck">
                                                                Gas
                                                            </label>


                                                            <input class="form-check-input fuelCheck ms-3"
                                                                type="checkbox" name="fuelCheck">
                                                            <label class="form-check-label" for="fuelCheck">
                                                                Diesel
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--  -->
                                                <h3 class=" font-inter">Eutectic Details</h3>
                                                <div class="row mb-5 ">
                                                    <div class="col-lg-6  ">
                                                        <!-- <div class="in py-3">
                                                            <input type="date" class=" input w-100 py-2 mt-3" placeholder="Date">
                                                        </div> -->

                                                        <div class="">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Condensor">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Condensor Unit">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Power">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Refrigerant">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Compressor">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Volt">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Co2 Eq">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Press Max">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Decible">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Model No">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="GWP">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="KG/LB">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Oil">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Pressmen">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Export">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Disp m3/4">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="MoA/Amp">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="Mcc/Amp">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="LRA/Amp">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="MRA/Amp">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3"
                                                                placeholder="RLAA/Amp">
                                                        </div>

                                                        <button type="submit" name="submit"
                                                            class="save py-2 ">Save</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>