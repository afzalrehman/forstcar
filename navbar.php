<nav class="sb-topnav navbar navbar-expand navbar-dark bg-white shadow">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html"><img width="200px" src="assets/img/cropped-frostcar_logo-2-1.png" alt=""></a>

    <!-- Sidebar Toggle-->
    <button class="btn text-black btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="text-dark fas fa-bars"></i></button> <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class=" fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="text-dark fs-5 fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <!-- <li><a class="dropdown-item" href="#!">Settings</a></li> -->
                <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                <li class="dropdown-item">
                    <h6 class="mt-0 mb-0"><b>Name</b></h6>
                    <p><?php echo $_SESSION['user_fullname']; ?></p>
                    <h6 class="mt-0 mb-0"><b>Email</b></h6>
                    <p><?php echo $_SESSION['user_email']; ?></p>
                </li>
                <li>
                    <hr class="dropdown-divider mt-0 mb-0" />
                </li>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </ul>
        </li>
    </ul>
</nav>








<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="./logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>