<?php
session_start();
global $conn;
include './config/config.php';
require './function/function.inc.php';

include "./includes/header.php";
include "./includes/searchbar.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";



?>
<div class="container-fluid">
    <div class="row my-5">



        <div class="col-lg-12 ">
            <div class="card">
                <div class="row">
                    <div class="col-lg-3 col-md-3 text-start py-3 px-4">
                        <p class="font student"> User Vewi Details</p>
                    </div>
                    <div class="col-lg-9 col-md-9 py-3 ">
                        <div class="btn-edit-delete1 text-end px-1">
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
                                    <th>Action<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>#<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Full Name<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Email<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>User Type<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Contact Number<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Image<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Registered On<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Added By<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Added On<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Updated By<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Updated On<i class="fa-solid fa-arrow-down px-2"></i></th>
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
                                    // $_SESSION['user_image'] = $row['user_image'];
                                ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo "<a href='user_code.php?deleteid=" . $row['user_id'] . "'><i class='fa-regular fa-trash-can text-danger me-1 fs-6'></i></a>";

                                            ?>
                                            <a href="edit_user.php?editid=<?= $row['user_id'] ?>" name="edit"><i class="fa-solid fa-pen-to-square text-success  fs-6"></i></a>

                                        </td>
                                        <td class="font"><?php echo $no; ?></td>
                                        <td><?php echo $row['user_fullname']; ?></td>
                                        <td><?php echo $row['user_email']; ?></td>
                                        <td><?php echo $row['user_type']; ?></td>
                                        <td><?php echo $row['user_contact']; ?></td>
                                        <td><img height="50" width="50" src="media/user_images/<?php echo  $row['user_image']; ?>" alt="<?php echo  $row['user_fullname']; ?>"> </td>
                                        <td><?php echo $row['registered_on']; ?></td>
                                        <td><?php echo $row['added_by']; ?></td>
                                        <td><?php echo $row['added_on']; ?></td>
                                        <td><?php echo $row['updated_by']; ?></td>
                                        <td><?php echo $row['updated_on']; ?></td>
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
</div>
<?php
include "./includes/footer.php";
?>