<?php
require "includes/header.php";
require "includes/navbar.php";
require "includes/sidebar.php"; ?>
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
                                    <input type="text" name="company_name" id="name" class=" w-100 py-2 mt-3" placeholder="Company Name">

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
                                                <td>
                                                    <a href="#"><i class="fa-regular fa-trash-can text-danger fs-6 me-1"></i></a>
                                                    <a href="#"><i class="fa-solid fa-pen-to-square text-primary fs-6"></i></a>
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
    </main>
    <?php require "includes/footer.php"; ?>
</div>