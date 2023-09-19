<?php
session_start();
require './function/function.inc.php';
include "./includes/header.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";
?>


<div class="container-fluid">
    <div class="row my-5">
        <div class="col-lg-12 course-card pb-5">
            <div class="card mein-card mb-5">
                <h3 class=" font-inter text-center  my-3">Add New Company</h3>
                <div class="container-fluid">
                    
                    <form action="add_company_code.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="in">
                                    <input type="text" name="company_name" class=" input w-100 py-2 mt-3" placeholder="Company Name">
                                    <?php if (isset($_SESSION['empty_company_name'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_name'] . '</p>';
                                        unset($_SESSION['empty_company_name']);
                                    }
                                    ?>
                                </div>


                                <div class="in">
                                    <input type="text" name="company_contact" class=" input w-100 py-2 mt-3" placeholder="Contact Name ">
                                    <?php if (isset($_SESSION['empty_company_contact'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_contact'] . '</p>';
                                        unset($_SESSION['empty_company_contact']);
                                    }
                                    ?>
                                </div>

                                <div class="in">
                                    <input type="text" name="company_address" class=" input w-100 py-2 mt-3" placeholder="Address">
                                    <?php if (isset($_SESSION['empty_company_address'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_address'] . '</p>';
                                        unset($_SESSION['empty_company_address']);
                                    }
                                    ?>
                                </div>
                                <div class="in">
                                    <input type="text" name="company_city" class=" input w-100 py-2 mt-3" placeholder="City">
                                    <?php if (isset($_SESSION['empty_company_city'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_city'] . '</p>';
                                        unset($_SESSION['empty_company_city']);
                                    }
                                    ?>
                                </div>

                                <div class="in">
                                    <input type="text" name="company_state" class=" input w-100 py-2 mt-3" placeholder="State ">
                                    <?php if (isset($_SESSION['empty_company_state'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_state'] . '</p>';
                                        unset($_SESSION['empty_company_state']);
                                    }
                                    ?>
                                </div>
                                <div class="in">
                                    <input type="number" name="company_zipcode" class=" input w-100 py-2 mt-3" placeholder="Zip Code ">
                                    <?php if (isset($_SESSION['empty_company_zipcode'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_zipcode'] . '</p>';
                                        unset($_SESSION['empty_company_zipcode']);
                                    }
                                    ?>
                                </div>

                                <div class="in">
                                    <input type="number" name="company_telephone" class=" input w-100 py-2 mt-3" placeholder="Telephone ">
                                    <?php if (isset($_SESSION['empty_company_telephone'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_telephone'] . '</p>';
                                        unset($_SESSION['empty_company_telephone']);
                                    }
                                    ?>
                                </div>

                                <div class="in">
                                    <input type="email" name="company_email" class=" input w-100 py-2 mt-3" placeholder="Email ">
                                    <?php if (isset($_SESSION['empty_company_email'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_email'] . '</p>';
                                        unset($_SESSION['empty_company_email']);
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="in">
                                    <input type="text" name="company_direct" class=" input w-100 py-2 mt-3" placeholder="Direct ">
                                    <?php if (isset($_SESSION['empty_company_direct'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_direct'] . '</p>';
                                        unset($_SESSION['empty_company_direct']);
                                    }
                                    ?>
                                </div>
                                <div class="in">
                                    <input type="text" name="company_port" class=" input w-100 py-2 mt-3" placeholder="Port Of Entry ">
                                    <?php if (isset($_SESSION['empty_company_port'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_port'] . '</p>';
                                        unset($_SESSION['empty_company_port']);
                                    }
                                    ?>
                                </div>
                                <div class="in">
                                    <input type="text" name="company_vessel" class=" input w-100 py-2 mt-3" placeholder="Vessel Details">
                                    <?php if (isset($_SESSION['empty_company_vessel'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_vessel'] . '</p>';
                                        unset($_SESSION['empty_company_vessel']);
                                    }
                                    ?>
                                </div>
                                <div class="in">
                                    <input type="text" name="company_trucking" class=" input w-100 py-2 mt-3" placeholder="Trucking">
                                    <?php if (isset($_SESSION['empty_company_trucking'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_trucking'] . '</p>';
                                        unset($_SESSION['empty_company_trucking']);
                                    }
                                    ?>
                                </div>
                                <div class="in">
                                    <input type="text" name="company_misc" class=" input w-100 py-2 mt-3" placeholder="Misc">
                                    <?php if (isset($_SESSION['empty_company_misc'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_company_misc'] . '</p>';
                                        unset($_SESSION['empty_company_misc']);
                                    }
                                    ?>
                                </div>
                                <div class="in">
                                    <input type="number" name="total_cost" class=" input w-100 py-2 mt-3" placeholder="Total Cost">
                                    <?php if (isset($_SESSION['empty_total_cost'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_total_cost'] . '</p>';
                                        unset($_SESSION['empty_total_cost']);
                                    }
                                    ?>
                                </div>
                                <div class="in">
                                    <input type="text" name="custom_frieght" class=" input w-100 py-2 mt-3" placeholder="Custom Frieght">
                                    <?php if (isset($_SESSION['empty_custom_freight'])) {
                                        echo '
                                        <p class="text-danger">' . $_SESSION['empty_custom_freight'] . '</p>';
                                        unset($_SESSION['empty_custom_freight']);
                                    }
                                    ?>
                                </div>

                                <button name="add_company_btn" class="save py-2">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-12 ">
            <div class="card">
                <div class="row">
                    <div class="col-lg-3 col-md-3 text-start py-3 px-4">
                        <p class="font student"> USA IMPORTANT Details</p>
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
                                    <th>S/no<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Company Name<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Contact number<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Address <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>City <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>State <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Zipe Code<i class="fa-solid fa-arrow-down px-2"></i>
                                    </th>
                                    <th>Tele Phone<i class="fa-solid fa-arrow-down px-2"></i>
                                    </th>
                                    <th>Email<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Direct <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Port Of Entry <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Vessel Details <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Trucking <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Misc <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Total Cost <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Custom Frieght <i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Added On<i class="fa-solid fa-arrow-down px-2"></i></th>


                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $category = getAll("importer_details");

                                if (mysqli_num_rows($category) > 0) {
                                    $no = 1;
                                    // while ($facth = mysqli_fetch_assoc($category))
                                    foreach ($category as $item) {
                                        // $no = 1;
                                ?>
                                        <tr>
                                            <td>
                                                <a href="add_company_code.php?deleteid=<?= $item['importer_id'] ?>" name="delete"><i class="fa-regular fa-trash-can text-danger me-1 fs-6"></i></a>
                                                <a href="#"><i class="fa-solid fa-pen-to-square text-success  fs-6"></i></a>
                                            </td>
                                            <td class="font"><?= $no++; ?></td>
                                            <td><?= $item['company_name'] ?></td>
                                            <td><?= $item['company_contact'] ?></td>
                                            <td><?= $item['company_address'] ?></td>
                                            <td><?= $item['company_city'] ?></td>
                                            <td><?= $item['company_state'] ?></td>
                                            <td><?= $item['company_zipcode'] ?></td>
                                            <td><?= $item['company_telephone'] ?></td>
                                            <td><?= $item['company_email'] ?></td>
                                            <td><?= $item['company_direct'] ?></td>
                                            <td><?= $item['company_port_of_entry'] ?></td>
                                            <td><?= $item['company_vessel_detail'] ?></td>
                                            <td><?= $item['company_trucking'] ?></td>
                                            <td><?= $item['company_misc'] ?></td>
                                            <td><?= $item['total_cost'] ?></td>
                                            <td><?= $item['custom_frieght'] ?></td>
                                            <td><?= $item['added_on'] ?></td>


                                        </tr>

                                <?php  }
                                } else {
                                    echo '
                                <tr>
                                <td class="text-danger">Data not found</td></tr>
                            ';
                                } ?>
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