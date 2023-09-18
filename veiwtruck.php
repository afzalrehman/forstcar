<?php
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
                        <p class="font student"> Forcars usa body details</p>
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
                                    <td>
                                        <a href="#"><i class="fa-regular fa-trash-can text-danger me-1 fs-6"></i></a>
                                        <a href="#"><i class="fa-solid fa-pen-to-square text-success  fs-6"></i></a>
                                    </td>
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
<?php
include "./includes/footer.php";
?>