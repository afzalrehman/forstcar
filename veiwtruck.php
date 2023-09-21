<?php
session_start();
include './config/config.php';
require './function/function.inc.php';
global $conn;




include "./includes/header.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";
?>
<div class="container-fluid px-4">
    <div class="row my-5">
        <div class="col-lg-12 ">
            <div class="card">
                <div class="row">
                    <div class="col-lg-3 col-md-3 text-start py-3 px-4">
                        <p class="font student">Forcars usa body details</p>
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
                                    <th>S/NO<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Year<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Make<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Model<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <!-- <th>front_S_Image<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>back_S_Image<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>left_S_Image<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>right_S_Image<i class="fa-solid fa-arrow-down px-2"></i></th> -->
                                    <th>Wheelbase<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Vin #<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Contact Name<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Contact #<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <!-- <th>Frost Car unit Cost<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>FC Body<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Body Weight<i class="fa-solid fa-arrow-down px-2"></i></th> -->
                                    <!-- <th>FC Model<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Exterior Dimension<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Compressor<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Comp.Serial<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Voltage<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Sound Decibel<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Current FLA<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Refrigerant<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Condenser<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Solenoid<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Condenser Fan<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Interior Lights<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Control Panel<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Circuit Breaker<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Electric Contactor<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Part #<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Eutectic Plate<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Expansion Valve<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Recovery Tank<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Pressure Control<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Sight Glass<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Filter Drier<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Thermostat<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Misc<i class="fa-solid fa-arrow-down px-2"></i></th> -->
                                    <th>Vewimore</th>
                                    <th>Added ON<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Added BY<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Updated ON<i class="fa-solid fa-arrow-down px-2"></i></th>
                                    <th>Updated BY<i class="fa-solid fa-arrow-down px-2"></i></th>


                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $category = getAll("unit_details");

                                if (mysqli_num_rows($category) > 0) {
                                    $no = 1;
                                    // facth mysqli_fetch
                                    foreach ($category as $item) {
                                ?>
                                        <tr>
                                            <td>
                                                <a href="add_truck_code.php?deleteid=<?= $item['id'] ?>" name="delete"><i class="fa-regular fa-trash-can text-danger me-1 fs-6"></i></a>
                                                <a href="edit_truck.php?editid=<?= $item['id'] ?>" name="edit"><i class="fa-solid fa-pen-to-square text-success  fs-6"></i></a>
                                            </td>
                                            <td class="font"><?= $no++; ?></td>
                                            <td><?= $item['year'] ?></td>
                                            <td><?= $item['make'] ?></td>
                                            <td><?= $item['model'] ?></td>
                                            <!-- <td><img height="50" width="50" src="./media/car_images/ echo  $item['front_S_Image']; ?>"></td>
                                            <td><img height="50" width="50" src="./media/car_images/ echo  $item['back_S_Image']; ?>"></td>
                                            <td><img height="50" width="50" src="./media/car_images/ echo  $item['left_S_Image']; ?>"></td>
                                            <td><img height="50" width="50" src="./media/car_images/ echo  $item['right_S_Image']; ?>"></td> -->
                                            <td><?= $item['wheelbase'] ?></td>
                                            <td><?= $item['vin'] ?></td>
                                            <td><?= $item['contact_Name'] ?></td>
                                            <td><?= $item['contact_Num'] ?></td>
                                            <!-- <td> $item['fc_Unit_Cost'] ?></td>
                                            <td> $item['fc_Body'] ?></td>
                                            <td> $item['body_Weight'] ?></td> -->
                                            <!-- <td> $item['fc_Model'] ?></td>
                                            <td> $item['exterior_Dimension'] ?></td>
                                            <td> $item['compressor'] ?></td>
                                            <td> $item['comp_Serial'] ?></td>
                                            <td> $item['voltage'] ?></td>
                                            <td> $item['sound_Decibel'] ?></td>
                                            <td> $item['current_FLA'] ?></td>
                                            <td> $item['refrigerant'] ?></td>
                                            <td> $item['condenser'] ?></td>
                                            <td> $item['solenoid'] ?></td>
                                            <td> $item['condenser_Fan'] ?></td>
                                            <td> $item['interior_Lights'] ?></td>
                                            <td> $item['control_Panel'] ?></td>
                                            <td> $item['circuit_Breaker'] ?></td>
                                            <td> $item['electric_Contactor'] ?></td>
                                            <td> $item['part'] ?></td>
                                            <td> $item['eutectic_Plate'] ?></td>
                                            <td> $item['expansion_Valve'] ?></td>
                                            <td> $item['recovery_Tank'] ?></td>
                                            <td> $item['pressure_Control'] ?></td>
                                            <td> $item['sight_Glass'] ?></td>
                                            <td> $item['filter_Drier'] ?></td>
                                            <td> $item['thermostat'] ?></td>
                                            <td> $item['misc'] ?></td> -->
                                            <td>
                                                <a href="vewimore.php?model=<?= $item['model']?>">Vewimore</a>
                                            </td>
                                            <td><?= $item['added_on'] ?></td>
                                            <td><?= $item['added_by'] ?></td>
                                            <td><?= $item['updated_on'] ?></td>
                                            <td><?= $item['updated_by'] ?></td>
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