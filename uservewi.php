<?php
session_start();
include "config.php";
// if (!isset($_SESSION['user_fullname'])) {
//     echo "You are logged out";
//     header('location:login.php');
// }

global $conn;
$succses = array();
$warning = array();

//  ===============DElete qurey=============== 
if (isset($_POST['delete_btn'])) {
    if (!isset($_POST['chack_btn_delete']) || empty($_POST['chack_btn_delete'])) {
        $warning['warning'] = "Please check the checkboxes to delete";

        // You might want to redirect back to the previous page or handle this case accordingly.
    } else {
        $all_id = $_POST['chack_btn_delete'];
        $extrext_id = implode(',', $all_id);

        $delete_query = "DELETE FROM `admin_users` WHERE user_id IN ($extrext_id)";
        $sql = mysqli_query($conn, $delete_query);

        if ($sql) {
            $succses['succses'] = 'Data Delete Successfully!';
        } else {
            $warning['warning'] = 'Failed to delete data!';
        }
    }
}



//  ===============Edit qurey=============== 
if (isset($_POST['edit'])) {
    if (!isset($_POST['chack_btn_delete']) || empty($_POST['chack_btn_delete'])) {
        $warning['warning'] = "Please check the checkboxes to delete";
        // You might want to redirect back to the previous page or handle this case accordingly.
    } else {
        if (count($_POST['chack_btn_delete']) == 1 && is_array($_POST['chack_btn_delete'])) {

            echo '<script>alert("Edit success");</script>';

        } else {
            $warning['warning'] = "Please check only one checkbox!";
            // echo '<script>alert("Please check only one checkbox!");</script>';
        }
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

    <!-- Edit Modal -->
    <!-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="../crud-application/application.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="form-group">
                            <label for="title">Note Title</label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="desc">Note Description</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->


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
                <div class="container-fluid my-3">

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
                                            <p class="font student"> User Vewi Details</p>
                                        </div>
                                        <div class="col-lg-9 col-md-9 py-3 ">
                                            <div class="btn-edit-delete1 text-end px-1">
                                                <button type="submit" class="export-btn delete" name="delete_btn">
                                                    <span class="fa-regular fa-trash-can "></span>
                                                </button>
                                                <button type="submit" class="edit export-btn" name="edit">
                                                    <span class="fa-solid fa-pen-to-square"></span>
                                                </button>
                                                <a href="./exportuservewi.php" type="submit" class="export export-btn" name="">
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
                                                        <th>User Id<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>User Fullname<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>User Email<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>User Type<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>User Contact<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>User Image<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Registered On<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Updated On<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Email Verfied_at<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <th>Reset Password<i class="fa-solid fa-arrow-down px-2"></i></th>
                                                        <!-- <th>Reset Token<i class="fa-solid fa-arrow-down px-2"></i></th> -->
                                                        <th>Is Verified<i class="fa-solid fa-arrow-down px-2"></i></th>


                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <!-- ==============select qurey============ -->
                                                    <?php
                                                    $select = "SELECT * FROM `admin_users`";
                                                    $result = mysqli_query($conn, $select);
                                                    $res_num = mysqli_num_rows($result);

                                                    $no = 1;
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                        <tr>
                                                            <td><input type="checkbox" name="chack_btn_delete[]" class="text-input" value="<?php echo $row['user_id']; ?>"></td>
                                                            <td class="font"><?php echo  $no ?></td>
                                                            <td><?php echo  $row['user_fullname']; ?></td>
                                                            <td><?php echo  $row['user_email']; ?></td>
                                                            <td><?php echo  $row['user_type']; ?></td>
                                                            <td><?php echo $row['user_contact']; ?></td>
                                                            <td><?php echo $row['user_image']; ?></td>
                                                            <td><?php echo $row['registered_on']; ?></td>
                                                            <td><?php echo $row['updated_on']; ?></td>
                                                            <td><?php echo $row['email_verfied_at']; ?></td>
                                                            <td><?php echo $row['reset_expiration']; ?></td>
                                                            <td><?php echo $row['is_verified']; ?></td>
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
                        </div>
                    </form>
                </div>
            </main>
        </div>

    </div>
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