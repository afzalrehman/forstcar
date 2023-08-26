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
        <a class="navbar-brand ps-3" href="index.html"><img width="200px" src="assets/img/cropped-frostcar_logo-2-1.png" alt=""></a>

        <!-- Sidebar Toggle-->
        <button class="btn text-black btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="text-dark fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav    ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="text-black fs-5 fas fa-user fa-fw"></i></a>
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

                        <a class="nav-link collapsed hover" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon "><i class="fa-solid fa-truck"></i></div>
                            Truck
                            <div class="sb-sidenav-collapse-arrow "><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link hover active " href="company.html">Company</a>
                                <a class="nav-link hover " href="add-truck.html">Add Truck Details</a>
                                <a class="nav-link hover " href="tables.html">View Truck Details</a>
                            </nav>
                        </div>


                        <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->


                        <a class="nav-link collapsed hover" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                            <div class="sb-nav-link-icon "><i class="fa-solid fa-user"></i></div>
                            Users
                            <div class="sb-sidenav-collapse-arrow "><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse " id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
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
                    <form action="" method="POST">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card my-5 w-100 position-relative overflow-hidden mb-0">
                                        <div class="card-body p-4">

                                            <div class="row text-dark">

                                                <!-- Eutectic Details -->
                                                <h3 class=" font-inter">Eutectic Details</h3>
                                                <div class="row mb-5 ">
                                                    <div class="col-lg-6  ">
                                                        <!-- <div class="in py-3">
                                                            <input type="date" class=" input w-100 py-2 mt-3" placeholder="Date">
                                                        </div> -->

                                                        <div class="">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Condensor" name="">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Condensor Unit" name="">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Power" name="">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Refrigerant" name="">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Compressor" name="">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Volt" name="">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Co2 Eq" name="">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Press Max" name="">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Decible" name="Decible">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Model No" name="Model No">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="GWP" name="GWP">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="KG/LB" name="KG/LB">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Oil" name="oil">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Pressmen" name="pressmen">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Export" name="export">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Disp m3/4" name="disp_m3/4">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="MoA/Amp" name="moA/Amp">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="Mcc/Amp" name="Mcc/Amp">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="LRA/Amp" name="LRA/Amp">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="MRA/Amp" name="MRA/Amp">
                                                        </div>
                                                        <div class="in">
                                                            <input type="text" class="w-100 py-2 mt-3" placeholder="RLAA/Amp" name="RLAA/Amp">
                                                        </div>

                                                        <button type="submit" name="" class="save py-2 ">Save</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--  -->



                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-5 ">
                                        <div class="card ">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 text-start py-3 px-4">
                                                    <p class="font student"> USA IMPORTANT Details</p>
                                                </div>
                                                <div class="col-lg-9 col-md-9 py-3 ">
                                                    <div class="btn-edit-delete1 text-end px-1">
                                                        <button type="submit" class="export-btn delete" name="delete_btn">
                                                            <span class="fa-regular fa-trash-can ">
                                                            </span></button>
                                                        <button type="submit" class="edit export-btn" name="edit">
                                                            <span class="fa-solid fa-pen-to-square "></span>
                                                        </button>
                                                        <a href="" type="submit" class="export export-btn">
                                                            <span class="fa-solid fa-cloud-arrow-down "> </span>
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
                                                                    <!-- <input class="chack" type="checkbox"> -->
                                                                    <i class="fa-solid fa-plus toggle-checkbox "></i>
                                                                </th>
                                                                <th>eutectic_id<i class="fa-solid fa-arrow-down px-2"></i></th>
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
                                                                <th>model_no<i class="fa-solid fa-arrow-down px-2"></i></th>
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
                                                            <tr>
                                                                <td><input type="checkbox" name="edit_delete[]" class="text-input" value=""></td>
                                                                <td class="font"></td>
                                                                <td><?php echo $row['condensor']?></td>
                                                                <td><?php echo $row['condensor_unit']?></td>
                                                                <td><?php echo $row['power']?></td>
                                                                <td><?php echo $row['refrigerant']?></td>
                                                                <td><?php echo $row['compressor']?></td>
                                                                <td><?php echo $row['volt']?></td>
                                                                <td><?php echo $row['co2_eq']?></td>
                                                                <td><?php echo $row['press_max']?></td>
                                                                <td><?php echo $row['decible']?></td>
                                                                <td><?php echo $row['production_date']?></td>
                                                                <td><?php echo $row['model_no']?></td>
                                                                <td><?php echo $row['GWP']?></td>
                                                                <td><?php echo $row['KG/LB']?></td>
                                                                <td><?php echo $row['oil']?></td>
                                                                <td><?php echo $row['pressmen']?></td>
                                                                <td><?php echo $row['export']?></td>
                                                                <td><?php echo $row['disp_m3/h']?></td>
                                                                <td><?php echo $row['moA/Amp']?></td>
                                                                <td><?php echo $row['Mcc/Amp']?></td>
                                                                <td><?php echo $row['LRA/Amp']?></td>
                                                                <td><?php echo $row['MRA/Amp']?></td>
                                                                <td><?php echo $row['RLAA/Amp']?></td>


                                                            </tr>

                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
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