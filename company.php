<?php
include "config.php";


$emty =array();
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $direct = mysqli_real_escape_string($conn, $_POST['direct']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $port = mysqli_real_escape_string($conn, $_POST['port']);
    $vessel = mysqli_real_escape_string($conn, $_POST['vessel']);
    $trucking = mysqli_real_escape_string($conn, $_POST['trucking']);
    $misc = mysqli_real_escape_string($conn, $_POST['misc']);
    $total_cost = mysqli_real_escape_string($conn, $_POST['total_cost']);
    $custom = mysqli_real_escape_string($conn, $_POST['custom']);

    if (empty($name)) {
        $emty['name'] = 'Please Fill The Company Name';
    }
    if (empty($address)) {
        $emty['address'] = 'Please Fill The Company address';
    }
    if (empty($phone)) {
        $emty['phone'] = 'Please Fill The Company phone';
    }
    if (empty($contact)) {
        $emty['contact'] = 'Please Fill The Company contact';
    }
    if (empty($direct)) {
        $emty['direct'] = 'Please Fill The Company direct';
    }
    if (empty($email)) {
        $emty['email'] = 'Please Fill The Company email';
    }
    if (empty($port)) {
        $emty['port'] = 'Please Fill The Company port';
    }
    if (empty($vessel)) {
        $emty['vessel'] = 'Please Fill The Company vessel';
    }
    if (empty($trucking)) {
        $emty['trucking'] = 'Please Fill The Company trucking';
    }
    if (empty($misc)) {
        $emty['misc'] = 'Please Fill The Company misc';
    }
    if (empty($total_cost)) {
        $emty['total_cost'] = 'Please Fill The Company total cost';
    }
    if (empty($custom)) {
        $emty['custom'] = 'Please Fill The Company cuctom';
    }
}
?>

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
                <div class="container-fluid">
                    <div class="  mein-card mb-5">
                        <div class="container-fluid card my-5 pb-5">
                            <h3 class=" font-inter text-center">Add New Company</h3>
                            <form action="" method="post">
                                <div class="row mt-5 ">
                                    <div class="col-lg-6  ">
                                        <!-- <div class="in py-3">
                                            <input type="date" class=" input w-100 py-2 mt-3" placeholder="Date">
                                        </div> -->

                                        <div class="in">
                                            <input type="text" name="name" id="name" class=" input w-100 py-2 mt-3" placeholder="Company Name">
                                            <span class= "text-danger fs-6 "><?php if(isset($emty['name'])) echo $emty['name']?></span>
                                        </div>

                                        <div class="in">
                                            <input type="text" name="address" id="address" class=" input w-100 py-2 mt-3" placeholder="Address">
                                            <span class= "text-danger fs-6 "><?php if(isset($emty['address'])) echo $emty['address']?></span>
                                        </div>
                                        <div class="in">
                                            <input type="text" name="phone" id="phone" class=" input w-100 py-2 mt-3" placeholder="Telephone ">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>
                                        </div>

                                        <div class="in">
                                            <input type="text" name="contact" id="contact" class=" input w-100 py-2 mt-3" placeholder="Contact Name ">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>

                                        </div>

                                        <div class="in">
                                            <input type="text" name="direct" id="direct" class=" input w-100 py-2 mt-3" placeholder="Direct ">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>
                                        </div>
                                        <div class="in">
                                            <input type="email" name="email" id="email" class=" input w-100 py-2 mt-3" placeholder="Email ">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="in">
                                            <input type="text" name="port" id="port" class=" input w-100 py-2 mt-3" placeholder="Port Of Entry ">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>
                                        </div>
                                        <div class="in">
                                            <input type="text" name="vessel" id="vessel" class=" input w-100 py-2 mt-3" placeholder="Vessel Details">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>
                                        </div>
                                        <div class="in">
                                            <input type="text" name="trucking" id="trucking" class=" input w-100 py-2 mt-3" placeholder="Trucking">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>
                                        </div>
                                        <div class="in">
                                            <input type="text" name="misc" id="misc" class=" input w-100 py-2 mt-3" placeholder="Misc">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>
                                        </div>
                                        <div class="in">
                                            <input type="text" name="total_cost" id="total_cost" class=" input w-100 py-2 mt-3" placeholder="Total Cost">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>
                                        </div>
                                        <div class="in">
                                            <input type="text" name="custom" id="custom" class=" input w-100 py-2 mt-3" placeholder="Custom Freiht">
                                            <span class="text-danger fs-6"><?php if(isset($emty['phone'])) echo $emty['phone']?></span>
                                        </div>




                                        <button type="submit" name="submit" class="save py-2">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="col-lg-12 mt-5 ">
                            <div class="card ">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 text-start py-3 px-4">
                                        <p class="font student"> USA IMPORTANT Details</p>
                                    </div>
                                    <div class="col-lg-9 col-md-9 py-3 ">
                                        <div class="btn-edit-delete1 text-end px-1">
                                            <a href="">
                                                <span class="fa-regular fa-trash-can export-btn delete">
                                                </span></a>
                                            <a href=""> <span class="fa-solid fa-pen-to-square edit export-btn"></span></a>
                                            <a href="">
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
                                                        <!-- <input class="chack" type="checkbox"> -->
                                                        <i class="fa-solid fa-plus "></i>
                                                    </th>
                                                    <th>Date<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>Company Name <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>Contact Name <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>Address <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>FEE PER MONTH <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>City<i class="fa-solid fa-arrow-down px-2"></i>
                                                    </th>
                                                    <th>State<i class="fa-solid fa-arrow-down px-2"></i>
                                                    </th>
                                                    <th>Zip Code <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>Telephone <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                    <th>Email <i class="fa-solid fa-arrow-down px-2"></i></th>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" class="text-input"></td>
                                                    <td class="font">Bold text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>
                                                    <td>Regular text column</td>

                                                </tr>
                                            </tbody>
                                        </table>

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