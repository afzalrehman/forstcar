<?php
include './config/config.php';
require './function/function.inc.php';
session_start();
if (!isset($_SESSION['user_fullname'])) {
    echo "You are logged out";
    header('location:login.php');
}




include "./includes/header.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item ">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-primary h-100 py-2">
                <div class="card-body ">
                    <div class="row no-gutters  align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bolder  text-primary text-uppercase mb-1">
                                Total User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">29</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card  border-primary h-100 py-2">
                <div class="card-body ">
                    <div class="row no-gutters  align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bolder  text-primary text-uppercase mb-1">
                                Total Company</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">29</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-truck fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card  border-primary h-100 py-2">
                <div class="card-body ">
                    <div class="row no-gutters  align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bolder  text-primary text-uppercase mb-1">
                                Total Body Details</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">29</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bo fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>

    </div>
</div>
<?php
include "./includes/footer.php";
?>