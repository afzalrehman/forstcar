<?php
session_start();
include "config.php";
if (!isset($_SESSION['user_fullname'])) {
    echo "You are logged out";
    header('location:login.php');
}

$succses = array();
$warning = array();

//  ===============DElete qurey=============== 
// if (isset($_POST['delete_btn'])) {
//     if (!isset($_POST['chack_btn_delete']) || empty($_POST['chack_btn_delete'])) {
//         $warning['warning'] = "Please check the checkboxes to delete";

//         // You might want to redirect back to the previous page or handle this case accordingly.
//     } else {
//         $all_id = $_POST['chack_btn_delete'];
//         $extrext_id = implode(',', $all_id);

//         // Delete from the first table
//         $delete_query_body = "DELETE FROM `body_details` WHERE body_id IN ($extrext_id)";
//         $sql_body = mysqli_query($conn, $delete_query_body);

//         // Delete from the second table
//         $delete_query_eutectic = "DELETE FROM `eutectic_details` WHERE eutectic_id IN ($extrext_id)";
//         $sql_eutectic = mysqli_query($conn, $delete_query_eutectic);

//         if ($sql_body && $sql_eutectic) {
//             $success['success'] = 'Data Delete Successfully!';
//         } else {
//             $warning['warning'] = 'Failed to delete data!';
//         }
//     }
// }


if (isset($_POST['delete_btn'])) {
    if (isset($_POST['chack_btn_delete']) || !empty($_POST['chack_btn_delete'])) {
        $model_nos = $_POST['chack_btn_delete'];
        $escaped_model_nos = array_map([$conn, 'real_escape_string'], $model_nos);
        $model_no_list = "'" . implode("', '", $escaped_model_nos) . "'";

        $delete_query_table1 = "DELETE FROM `body_details` WHERE body_id IN ($model_no_list)";
        $delete_query_table2 = "DELETE FROM `eutectic_details` WHERE eutectic_id IN ($model_no_list)";

        if ($conn->query($delete_query_table1) && $conn->query($delete_query_table2)) {
            $succses['succses'] = 'Data Deleted Successfully!';
        } else {
            $warning['warning'] = 'Failed to delete data.';
        }
    } else {
        $warning['warning'] = "Please check the checkboxes to delete.";
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
    <title>View Truck Details</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!-- navbar -->
    <?php
    require 'navbar.php';
    ?>
    <!-- navbar End -->
    <div id="layoutSidenav">
        <!-- Sidebar -->
        <?php
        require 'sidebar.php';
        ?>
        <!-- Sidebar End -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 my-5">

                    <?php
                    if (isset($succses['succses']))
                        echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>@succsesfully!</strong> ' . $succses['succses'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';

                    if (isset($warning['warning']))
                        echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>@Error!</strong> ' . $warning['warning'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    ?>

                    <form action="" method="POST">
                        <div class="row my-5">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 text-start py-3 px-4">
                                            <p class="font student"> Forcars usa body details</p>
                                        </div>
                                        <div class="col-lg-9 col-md-9 py-3 ">
                                            <div class="btn-edit-delete1 text-end px-1">
                                                <button type="submit" class="export-btn delete" name="delete_btn">
                                                    <span class="fa-regular fa-trash-can "></span>
                                                </button>
                                                <button type="submit" class="edit export-btn" name="edit">
                                                    <span class="fa-solid fa-pen-to-square"></span>
                                                </button>
                                                <a href="./exportViewTruckDetails.php" type="submit" class="export export-btn " name="">
                                                    <span class="fa-solid fa-cloud-arrow-down"> </span>
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
                                                        <th>body_id<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>model_no <i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>year<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>fc_body<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_length<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_dimension<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_side_door<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_rear_door<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_weight<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_volume<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_temp<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>floor<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>e_track<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>e_plate<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>body_accessories<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>gvwr<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>wbl<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>cal<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>no_of_units<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>manufactured_on<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>chassis_frame<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>cost_quoted<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>misc<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>eutectic_plates<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>refrigeration<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>additional_details<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>special_requirements<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>fuel_Type<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>unit_Custom<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>added_on<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>added_by<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>updated_on<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>updated_by<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <!-- Eutectic Details table -->
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
                                                        <th>model_no <i class="fa-solid fa-arrow-down px-2"></i></th>
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

                                                    <?php

                                                    $sql = "SELECT * FROM `body_details`
                                                            INNER JOIN `eutectic_details` ON body_details.model_no = eutectic_details.model_no";

                                                    $result = $conn->query($sql);
                                                    $no = 1;
                                                    if ($result->num_rows > 0) {
                                                        // Output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                            <tr>
                                                                <?php
                                                                // Assuming you have fetched data from both tables into $row1 and $row2
                                                                $value = $row['body_id'] . '-' . $row['eutectic_id'];
                                                                ?>
                                                                <td><input type="checkbox" name="chack_btn_delete[]" class="text-input" value="<?php echo $value; ?>"></td>
                                                                <td class="font"><?php echo $no ?></td>
                                                                <td><?php echo $row['model_no']; ?></td>
                                                                <td><?php echo $row['year']; ?></td>
                                                                <td><?php echo $row['fc_body']; ?></td>
                                                                <td><?php echo $row['body_length']; ?></td>
                                                                <td><?php echo $row['body_dimension']; ?></td>
                                                                <td><?php echo $row['body_side_door']; ?></td>
                                                                <td><?php echo $row['body_rear_door']; ?></td>
                                                                <td><?php echo $row['body_weight']; ?></td>
                                                                <td><?php echo $row['body_volume']; ?></td>
                                                                <td><?php echo $row['body_temp']; ?></td>
                                                                <td><?php echo $row['floor']; ?></td>
                                                                <td><?php echo $row['e_track']; ?></td>
                                                                <td><?php echo $row['e_plate']; ?></td>
                                                                <td><?php echo $row['body_accessories']; ?></td>
                                                                <td><?php echo $row['gvwr']; ?></td>
                                                                <td><?php echo $row['wbl']; ?></td>
                                                                <td><?php echo $row['cal']; ?></td>
                                                                <td><?php echo $row['no_of_units']; ?></td>
                                                                <td><?php echo $row['manufactured_on']; ?></td>
                                                                <td><?php echo $row['chassis_frame']; ?></td>
                                                                <td><?php echo $row['cost_quoted']; ?></td>
                                                                <td><?php echo $row['misc']; ?></td>
                                                                <td><?php echo $row['eutectic_plates']; ?></td>
                                                                <td><?php echo $row['refrigeration']; ?></td>
                                                                <td><?php echo $row['additional_details']; ?></td>
                                                                <td><?php echo $row['special_requirements']; ?></td>
                                                                <td><?php echo $row['fuel_Type']; ?></td>
                                                                <td><?php echo $row['unit_Custom']; ?></td>
                                                                <td><?php echo $row['added_on']; ?></td>
                                                                <td><?php echo $row['added_by']; ?></td>
                                                                <td><?php echo $row['updated_on']; ?></td>
                                                                <td><?php echo $row['updated_by']; ?></td>

                                                                <!-- Eutectic Details table -->
                                                                <td><?php echo $row['condensor']; ?></td>
                                                                <td><?php echo $row['condensor_unit']; ?></td>
                                                                <td><?php echo $row['power']; ?></td>
                                                                <td><?php echo $row['refrigerant']; ?></td>
                                                                <td><?php echo $row['compressor']; ?></td>
                                                                <td><?php echo $row['volt']; ?></td>
                                                                <td><?php echo $row['co2_eq']; ?></td>
                                                                <td><?php echo $row['press_max']; ?></td>
                                                                <td><?php echo $row['decible']; ?></td>
                                                                <td><?php echo $row['production_date']; ?></td>
                                                                <td><?php echo $row['model_no']; ?></td>
                                                                <td><?php echo $row['GWP']; ?></td>
                                                                <td><?php echo $row['KG/LB']; ?></td>
                                                                <td><?php echo $row['oil']; ?></td>
                                                                <td><?php echo $row['pressmen']; ?></td>
                                                                <td><?php echo $row['export']; ?></td>
                                                                <td><?php echo $row['disp_m3/h']; ?></td>
                                                                <td><?php echo $row['moA/Amp']; ?></td>
                                                                <td><?php echo $row['Mcc/Amp']; ?></td>
                                                                <td><?php echo $row['LRA/Amp']; ?></td>
                                                                <td><?php echo $row['MRA/Amp']; ?></td>
                                                                <td><?php echo $row['RLAA/Amp']; ?></td>

                                                            </tr>
                                                    <?php
                                                            $no = $no + 1;
                                                        }
                                                    }
                                                    else {
                                                        echo "<tr><td class='text-start text-danger' colspan='40'>No Insert Data Please <a href='./add-truck.php'>Add Truck Details</a>.</td></tr>";
                                                    }

                                                    $conn->close();
                                                    ?>
                                                </tbody>
                                            </table>

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
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>