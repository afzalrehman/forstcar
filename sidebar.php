        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav side-bg bg-nav  shadow" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link hover active" href="./index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link collapsed hover" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon "><i class="fa-solid fa-truck"></i></div>
                            Truck
                            <div class="sb-sidenav-collapse-arrow "><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link hover " href="./company.php">Company</a>
                                <a class="nav-link hover " href="./add-truck.php">Add Truck Details</a>
                                <a class="nav-link hover " href="./tables.php">View Truck Details</a>
                            </nav>
                        </div>


                        <a class="nav-link collapsed hover" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                            <div class="sb-nav-link-icon "><i class="fa-solid fa-user"></i></div>
                            Users
                            <div class="sb-sidenav-collapse-arrow "><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse " id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link hover  " href="./user.php">User Add</a>
                                <a class="nav-link hover " href="./uservewi.php">User Vewi</a>

                            </nav>
                        </div>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
