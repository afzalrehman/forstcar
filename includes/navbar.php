<?php
include './config/config.php';
global $conn;
// session_start();
?>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-white shadow">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php"><img width="200px" src="assets/img/forscar_logo.png" alt=""></a>

    <!-- Sidebar Toggle-->
    <button class="btn text-black btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="text-dark fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav    ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle" height="25" width="25" src="media/user_images/<?php echo $_SESSION['user_image']; ?>" alt="">
                <!-- <img class="rounded-circle" height="25" width="25" src="media/user_images/<?php echo $user_image; ?>?<?php echo time(); ?>" alt="Profile Image"> -->
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li class="dropdown-item">
                    <h6 class="mt-0 mb-0"><b>Name</b></h6>
                    <p class="my-0 py-0"><?php echo $_SESSION['user_fullname']; ?></p>
                </li>
                <li class="dropdown-item">
                    <h6 class="my-0 py-0"><b>Email</b></h6>
                    <p class="my-0 py-0"><?php echo $_SESSION['user_email']; ?></p>
                </li>
                <li class="dropdown-item py-1 my-0">
                    <a href="./profile.php" class="text-dark text-decoration-none fw-bolder">Profile</a>
                </li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>