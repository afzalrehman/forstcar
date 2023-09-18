<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Forst Car Usa</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- --------------google font----------- -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="sb-nav-fixed">
    <?php require "navbar.php"; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php require "sidebar.php"; ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <form action="" method="post">
                        <div class="  mein-card mb-5">
                            <div class="container-fluid card my-5 pb-5">
                                <h3 class=" font-inter text-center">Add New Company</h3>
                                <div class="row mt-5 ">
                                    <div class="col-lg-6  ">
                                        <div class="in">
                                            <input type="text" name="company_name" id="name" class=" w-100 py-2 mt-3" placeholder="Company Name" value=">
                                            <span class=" text-danger fs-6 "></span>
                                        </div>

                                        <div class=" in">
                                            <input type="text" name="address" id="address" class=" w-100 py-2 mt-3" placeholder="Address" value="">

                                        </div>
                                        <div class="in">
                                            <input type="number" name="phone" id="phone" class=" w-100 py-2 mt-3" placeholder="Telephone " value="">

                                        </div>

                                        <div class="in">
                                            <input type="number" name="contact" id="contact" class="w-100 py-2 mt-3" placeholder="Contact Number" value="">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="company_city" id="company_city" class="put w-100 py-2 mt-3" placeholder="Company City " value="">
                                        </div>

                                        <div class="in">
                                            <input type="text" name="company_state" id="company_state" class=" w-100 py-2 mt-3" placeholder="Company State" value="">
                                        </div>

                                        <div class="in">
                                            <input type="text" name="direct" id="direct" class=" w-100 py-2 mt-3" placeholder="Direct ">
                                        </div>

                                        <div class="in">
                                            <input type="email" name="email" id="email" class=" w-100 py-2 mt-3" placeholder="Email ">
                                        </div>


                                    </div>
                                    <div class="col-lg-6">
                                        <div class="in">
                                            <input type="number" name="company_zipcode" id="company_zipcode" class=" w-100 py-2 mt-3" placeholder="Company ZipCode ">
                                        </div>

                                        <div class="in">
                                            <input type="text" name="port" id="port" class=" w-100 py-2 mt-3" placeholder="Port Of Entry ">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="vessel" id="vessel" class=" w-100 py-2 mt-3" placeholder="Vessel Details">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="trucking" id="trucking" class=" w-100 py-2 mt-3" placeholder="Trucking">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="misc" id="misc" class=" w-100 py-2 mt-3" placeholder="Misc">
                                        </div>
                                        <div class="in">
                                            <input type="number" name="total_cost" id="total_cost" class=" w-100 py-2 mt-3" placeholder="Total Cost">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="custom" id="custom" class=" w-100 py-2 mt-3" placeholder="Custom Freiht">
                                        </div>




                                        <button type="submit" name="" class="save py-2">
                                        </button>
                                    </div>
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
                                                    <span class="fa-regular fa-trash-can "></span>
                                                </button>
                                                <button type="submit" class="edit export-btn" name="edit">
                                                    <span class="fa-solid fa-pen-to-square"></span>
                                                </button>
                                                <a href="exportViewTruckDetails.php">
                                                    <span class="fa-solid fa-cloud-arrow-down export export-btn "> </span>
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


                                                        </th>
                                                        <th>S/no<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Date<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Company Name <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Address <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Tele phone <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Contact Name <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th> City <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>State<i class="fa-solid fa-arrow-down px-2"></i>
                                                        <th>Direct<i class="fa-solid fa-arrow-down px-2"></i>
                                                        </th>
                                                        </th>
                                                        <th>Email <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Zip Code <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Port Of Entry <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Vessel Details <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Trucking <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Misc <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Total Cost <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Custom Freiht <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>added by <i class="fa-solid fa-arrow-down px-2"></i></th>


                                                    </tr>
                                                </thead>

                                                <tbody>


                                                    <tr>
                                                        <?php
                                                        // Assuming you have fetched data from both tables into $row1 and $row2

                                                        ?>
                                                        <td>

                                                        </td>

                                                        <td class="font"></td>
                                                        <td class="font"></td>
                                                        <td>company_name'</td>
                                                        <td>company_address'</td>
                                                        <td>company_telephone'</td>
                                                        <td>company_contact'</td>
                                                        <td>company_city'</td>
                                                        <td>company_state'</td>
                                                        <td>company_direct'</td>
                                                        <td>company_email'</td>
                                                        <td>company_zipcode'</td>
                                                        <td>company_port_of_entry'</td>
                                                        <td>company_vessel_detail'</td>
                                                        <td>company_trucking'</td>
                                                        <td>company_misc'</td>
                                                        <td>total_cost'</td>
                                                        <td>custom_frieght'</td>
                                                        <td>added_by'</td>


                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var toggleIcons = document.querySelectorAll(".toggle-checkbox");

            toggleIcons.forEach(function(icon) {
                icon.addEventListener("click", function() {
                    var checkboxId = this.getAttribute("data-checkbox-id");
                    var checkbox = document.querySelector('input[type="checkbox"][value="' + checkboxId + '"]');
                    if (checkbox) {
                        checkbox.checked = !checkbox.checked;
                    }
                });
            });
        });


        let user_phonenumber = document.getElementById('contact');
        let company_zipcode = document.getElementById('company_zipcode');
        let phone = document.getElementById('phone');
        let total_cost = document.getElementById('total_cost');

        user_phonenumber.addEventListener("input", function() {
            if (user_phonenumber.value.length > 11) {
                user_phonenumber.value = user_phonenumber.value.slice(0, 11);
            }
        });
        company_zipcode.addEventListener("input", function() {
            if (company_zipcode.value.length > 11) {
                company_zipcode.value = company_zipcode.value.slice(0, 11);
            }
        });
        phone.addEventListener("input", function() {
            if (phone.value.length > 11) {
                phone.value = phone.value.slice(0, 11);
            }
        });
        total_cost.addEventListener("input", function() {
            if (total_cost.value.length > 11) {
                total_cost.value = total_cost.value.slice(0, 11);
            }
        });
    </script>

</body>

</html>