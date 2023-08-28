<?php

session_start();
include "config.php";

if (!isset($_SESSION['user_fullname'])) {
    echo "You are logged out";
    header('location:login.php');
}
$emty = array();
$warning = array();
$succses = array();
$delete = array();
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $company_city = mysqli_real_escape_string($conn, $_POST['company_city']);
    $company_state = mysqli_real_escape_string($conn, $_POST['company_state']);
    $direct = mysqli_real_escape_string($conn, $_POST['direct']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $company_zipcode = mysqli_real_escape_string($conn, $_POST['company_zipcode']);
    $port = mysqli_real_escape_string($conn, $_POST['port']);
    $vessel = mysqli_real_escape_string($conn, $_POST['vessel']);
    $trucking = mysqli_real_escape_string($conn, $_POST['trucking']);
    $misc = mysqli_real_escape_string($conn, $_POST['misc']);
    $total_cost = mysqli_real_escape_string($conn, $_POST['total_cost']);
    $custom = mysqli_real_escape_string($conn, $_POST['custom']);

    if (empty($name)) {
        $emty['name'] = 'Please Fill The Company Name';
    }
    // if (empty($address)) {
    //     $emty['address'] = 'Please Fill The Company address';
    // }
    // if (empty($phone)) {
    //     $emty['phone'] = 'Please Fill The Company phone';
    // }
    // if (empty($contact)) {
    //     $emty['contact'] = 'Please Fill The Company contact';
    // }
    // if (empty($company_city)) {
    //     $emty['company_city'] = 'Please Fill The Company city';
    // }
    // if (empty($company_state)) {
    //     $emty['company_state'] = 'Please Fill The Company stat';
    // }
    // if (empty($direct)) {
    //     $emty['direct'] = 'Please Fill The Company direct';
    // }
    // if (empty($email)) {
    //     $emty['email'] = 'Please Fill The Company email';
    // }
    // if (empty($company_zipcode)) {
    //     $emty['company_zipcode'] = 'Please Fill The Company ZipCode';
    // }
    // if (empty($port)) {
    //     $emty['port'] = 'Please Fill The Company port';
    // }
    // if (empty($vessel)) {
    //     $emty['vessel'] = 'Please Fill The Company vessel';
    // }
    // if (empty($trucking)) {
    //     $emty['trucking'] = 'Please Fill The Company trucking';
    // }
    // if (empty($misc)) {
    //     $emty['misc'] = 'Please Fill The Company misc';
    // }
    // if (empty($total_cost)) {
    //     $emty['total_cost'] = 'Please Fill The Company total cost';
    // }
    // if (empty($custom)) {
    //     $emty['custom'] = 'Please Fill The Company cuctom';
    // }
    else {
        // $query = "SELECT * FROM importer_details WHERE company_name= '$name'";
        // $sql = mysqli_query($conn, $query);
        // $row = mysqli_fetch_row($sql);
        // if ($row > 0) {
        //     // Duplicate data found
        //     $warning['WARNING'] = "Data already exists.";

        $insert = " INSERT INTO importer_details(`company_name`, `company_contact`,`company_address`, `company_city`, `company_state`,  `company_zipcode`,`company_telephone`, `company_email`, `company_direct`, 
            `company_port_of_entry`,`company_vessel_detail`,`company_trucking`,`company_misc`,`total_cost`, `custom_frieght` ,`added_on`)
            VALUES('$name', '$contact', '$address', '$company_city', '$company_state', '$company_zipcode','$phone', '$email', '$direct','$port','$vessel','$trucking','$misc','$total_cost','$custom', NOW())";
        $insert_sql = mysqli_query($conn, $insert);

        if ($insert_sql) {
            $succses['succses'] = 'insert data sucsses';
        }
    }
}

?>

<?php
if (isset($_POST['delete_btn'])) {
    if (!isset($_POST['edit_delete']) || empty($_POST['edit_delete'])) {
        $warning['chackbox'] = "Please check the checkboxes to delete";

        // You might want to redirect back to the previous page or handle this case accordingly.
    } else {
        $all_id = $_POST['edit_delete'];
        $extrext_id = implode(',', $all_id);

        $delete_query = "DELETE FROM importer_details WHERE importer_id  IN ($extrext_id)";
        $sql = mysqli_query($conn, $delete_query);

        if ($sql) {
            $delete['Delete'] = "Data Delete Successfully!";
        } else {
            $_SESSION['Delete'] = "Failed to delete data!";
        }
    }
}
// Initialize variables
$edit = array();
// Check if the edit button is clicked
if (isset($_POST['edit'])) {
    // Check if at least one checkbox is checked
    if (isset($_POST['edit_delete']) && !empty($_POST['edit_delete']) && count($_POST['edit_delete']) == 1) {
        // Get the selected ID
        $selectedId = $_POST['edit_delete'][0];

        // Establish a database connection (replace with your database connection code)


        // Prepare and execute SQL query
        $sql = "SELECT * FROM importer_details WHERE importer_id = $selectedId";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Fetch the data
            $row = mysqli_fetch_assoc($result);
            $edit['edit_company_name'] = $row['company_name'];
            $edit['company_contact'] = $row['company_contact'];
            $edit['company_address'] = $row['company_address'];
            $edit['company_city'] = $row['company_city'];
            $edit['company_state'] = $row['company_state'];
            $edit['company_zipcode'] = $row['company_zipcode'];
            $edit['company_telephone'] = $row['company_telephone'];
            $edit['company_email'] = $row['company_email'];
            $edit['company_direct'] = $row['company_direct'];
            $edit['company_port_of_entry'] = $row['company_port_of_entry'];
            $edit['company_vessel_detail'] = $row['company_vessel_detail'];
            $edit['company_trucking'] = $row['company_trucking'];
            $edit['company_misc'] = $row['company_misc'];
            $edit['total_cost'] = $row['total_cost'];
            $edit['custom_frieght'] = $row['custom_frieght'];
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        echo '<script>alert("Please check exactly one checkbox!");</script>';
    }
}
?>


<!-- =========================update====================== -->
<?php
$edit_company_name = "";
$edit_company_contact = "";
if (isset($_POST['update'])) {
    // Assuming you have already retrieved the data you want to update
    $edit_company_name = $_POST['name'];
    $edit_company_contact = $_POST['contact'];
    // Add other fields as needed

    // Get the selected ID
    $selectedId = $_POST['edit_id']; // Add this input field to your HTML form

    // Establish a database connection (replace with your database connection code)
    $conn = mysqli_connect("localhost", "root", "", "forstcarusa");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute an UPDATE query
    $update_query = "UPDATE importer_details SET 
        company_name = '$edit_company_name',
        company_contact = '$edit_company_contact'
        -- Add other fields here
        WHERE importer_id = $selectedId";

    if (mysqli_query($conn, $update_query)) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
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
    <title>Forst Car Usa</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- --------------google font----------- -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none !important;
            /* margin: 0; */
        }
    </style>
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

                    <?php
                    if (isset($succses['succses']))
                        echo '
                            <div class="mt-5 alert alert-success alert-dismissible fade show" role="alert">
                        <strong>@INSERT</strong> ' . $succses['succses'] . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    ?>
                    <?php
                    if (isset($warning['checkboxcheck']))
                        echo '
                            <div class="mt-5 alert alert-success alert-dismissible fade show" role="alert">
                        <strong>@INSERT</strong> ' . $warning['checkboxcheck'] . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    ?>

                    <?php
                    if (isset($warning['chackbox']))
                        echo '
                            <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Warning</strong> ' . $warning['chackbox'] . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    ?>
                    <?php
                    if (isset($delete['Delete']))
                        echo '
                            <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>@Warning</strong> ' . $delete['Delete'] . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    ?>

                    <form action="" method="post">
                        <div class="  mein-card mb-5">
                            <div class="container-fluid card my-5 pb-5">
                                <h3 class=" font-inter text-center">Add New Company</h3>
                                <div class="row mt-5 ">
                                    <div class="col-lg-6  ">
                                        <!-- <div class="in py-3">
                                            <input type="date" class=" input w-100 py-2 mt-3" placeholder="Date">
                                        </div> -->

                                        <div class="in">
                                            <input type="text" name="name" id="name" class=" w-100 py-2 mt-3" placeholder="Company Name" value="<?php
                                                                                                                                                if (isset($edit['edit_company_name'])) {
                                                                                                                                                    echo $edit['edit_company_name'];
                                                                                                                                                } elseif (isset($emty['name'])) {
                                                                                                                                                    echo $name;
                                                                                                                                                } ?>">
                                            <span class="text-danger fs-6 "><?php if (isset($emty['name'])) echo $emty['name'] ?></span>
                                        </div>

                                        <div class="in">
                                            <input type="text" name="address" id="address" class=" w-100 py-2 mt-3" placeholder="Address">

                                        </div>
                                        <div class="in">
                                            <input type="number" name="phone" id="phone" class=" w-100 py-2 mt-3" placeholder="Telephone " value="<?php if (isset($edit['company_telephone'])) {
                                                                                                                                                        echo $edit['company_telephone'];
                                                                                                                                                    } ?>">

                                        </div>

                                        <div class="in">
                                            <input type="number" name="contact" id="contact" class="w-100 py-2 mt-3" placeholder="Contact Number" value="<?php if (isset($edit['company_contact'])) {
                                                                                                                                                                echo $edit['company_contact'];
                                                                                                                                                            } ?>">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="company_city" id="company_city" class="put w-100 py-2 mt-3" placeholder="Company City " value="<?php if (isset($edit['company_city'])) {
                                                                                                                                                                        echo $edit['company_city'];
                                                                                                                                                                    } ?>">
                                        </div>

                                        <div class="in">
                                            <input type="text" name="company_state" id="company_state" class=" w-100 py-2 mt-3" placeholder="Company State" value="<?php if (isset($edit['company_state'])) {
                                                                                                                                                                        echo $edit['company_state'];
                                                                                                                                                                    } ?>">
                                        </div>

                                        <div class="in">
                                            <input type="text" name="direct" id="direct" class=" w-100 py-2 mt-3" placeholder="Direct " value="<?php if (isset($edit['company_direct'])) {
                                                                                                                                                    echo $edit['company_direct'];
                                                                                                                                                } ?>">
                                        </div>

                                        <div class="in">
                                            <input type="email" name="email" id="email" class=" w-100 py-2 mt-3" placeholder="Email " value="<?php if (isset($edit['company_email'])) {
                                                                                                                                                    echo $edit['company_email'];
                                                                                                                                                } ?>">
                                        </div>


                                    </div>
                                    <div class="col-lg-6">
                                        <div class="in">
                                            <input type="number" name="company_zipcode" id="company_zipcode" class=" w-100 py-2 mt-3" placeholder="Company ZipCode " value="<?php if (isset($edit['company_zipcode'])) {
                                                                                                                                                                                echo $edit['company_zipcode'];
                                                                                                                                                                            } ?>">
                                        </div>

                                        <div class="in">
                                            <input type="text" name="port" id="port" class=" w-100 py-2 mt-3" placeholder="Port Of Entry " value="<?php if (isset($edit['company_port_of_entry'])) {
                                                                                                                                                        echo $edit['company_port_of_entry'];
                                                                                                                                                    } ?>">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="vessel" id="vessel" class=" w-100 py-2 mt-3" placeholder="Vessel Details" value="<?php if (isset($edit['company_vessel_detail'])) {
                                                                                                                                                            echo $edit['company_vessel_detail'];
                                                                                                                                                        } ?>">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="trucking" id="trucking" class=" w-100 py-2 mt-3" placeholder="Trucking" value="<?php if (isset($edit['company_trucking'])) {
                                                                                                                                                        echo $edit['company_trucking'];
                                                                                                                                                    } ?>">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="misc" id="misc" class=" w-100 py-2 mt-3" placeholder="Misc" value="<?php if (isset($edit['company_misc'])) {
                                                                                                                                            echo $edit['company_misc'];
                                                                                                                                        } ?>">
                                        </div>
                                        <div class="in">
                                            <input type="number" name="total_cost" id="total_cost" class=" w-100 py-2 mt-3" placeholder="Total Cost" value="<?php if (isset($edit['total_cost'])) {
                                                                                                                                                                echo $edit['total_cost'];
                                                                                                                                                            } ?>">
                                        </div>
                                        <div class="in">
                                            <input type="text" name="custom" id="custom" class=" w-100 py-2 mt-3" placeholder="Custom Freiht" value="<?php if (isset($edit['custom_frieght'])) {
                                                                                                                                                            echo $edit['custom_frieght'];
                                                                                                                                                        } ?>">
                                        </div>




                                        <button type="submit" name="<?php if (isset($_POST['edit_delete']) && !empty($_POST['edit_delete']) && count($_POST['edit_delete']) == 1) {
                                                                        echo "update";
                                                                    } else {
                                                                        echo 'submit';
                                                                    }
                                                                    ?>" class="save py-2"><?php if (isset($_POST['edit_delete']) && !empty($_POST['edit_delete']) && count($_POST['edit_delete']) == 1) {
                                                                                                echo "update";
                                                                                            } else {
                                                                                                echo 'save';
                                                                                            } ?></button>
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
                                                <button type="submit" name="delete_btn">
                                                    <span class="fa-regular fa-trash-can export-btn delete">
                                                    </span></button>
                                                <button type="submit" name="edit"><span class="fa-solid fa-pen-to-square edit export-btn"></span></button>
                                                <a href="">
                                                    <span class="fa-solid fa-cloud-arrow-down export export-btn"> </span>
                                                </a>
                                                <a href="excel.php">Download</a>
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

                                                    <?php
                                                    // Establish a database connection (replace with your database connection code)
                                                    $conn = mysqli_connect("localhost", "root", "", "forstcarusa");

                                                    if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    $select = "SELECT * FROM importer_details";
                                                    $sel_sql = mysqli_query($conn, $select);

                                                    if (!$sel_sql) {
                                                        die("Query failed: " . mysqli_error($conn));
                                                    }

                                                    $sel_num = mysqli_num_rows($sel_sql);
                                                    $no = 1;

                                                    while ($row = mysqli_fetch_assoc($sel_sql)) {
                                                        // Process your query results here

                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <input type="checkbox" name="edit_delete[] " class="text-input" value="<?php echo $row['importer_id'] ?>">
                                                            </td>

                                                            <td class="font"><?php echo $no ?></td>
                                                            <td class="font"><?php echo $row['added_on'] ?></td>
                                                            <td><?php echo $row['company_name'] ?></td>
                                                            <td><?php echo $row['company_address'] ?></td>
                                                            <td><?php echo $row['company_telephone'] ?></td>
                                                            <td><?php echo $row['company_contact'] ?></td>
                                                            <td><?php echo $row['company_city'] ?></td>
                                                            <td><?php echo $row['company_state'] ?></td>
                                                            <td><?php echo $row['company_direct'] ?></td>
                                                            <td><?php echo $row['company_email'] ?></td>
                                                            <td><?php echo $row['company_zipcode'] ?></td>
                                                            <td><?php echo $row['company_port_of_entry'] ?></td>
                                                            <td><?php echo $row['company_vessel_detail'] ?></td>
                                                            <td><?php echo $row['company_trucking'] ?></td>
                                                            <td><?php echo $row['company_misc'] ?></td>
                                                            <td><?php echo $row['total_cost'] ?></td>
                                                            <td><?php echo $row['custom_frieght'] ?></td>
                                                            <td><?php echo $row['added_by'] ?></td>


                                                        </tr>
                                                    <?php
                                                        $no = $no + 1;
                                                    }

                                                    ?>
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