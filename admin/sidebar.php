<?php
include '../z_db.php';
$username = $_SESSION['username'];
?>
<div class='app-menu navbar-menu'>
    <!-- LOGO -->
    <div class='navbar-brand-box'>
        <!-- Dark Logo-->
        <?php
        $rr = mysqli_query($con, 'SELECT ufile FROM logo');
        $r = mysqli_fetch_row($rr);
        $ufile = $r[0];
        ?>

        <a href='#' class='logo logo-dark'>
            <span class='logo-sm'>
                <img src="uploads/logo/<?php print $ufile ?>" alt='' height='22'>
            </span>
            <span class='logo-lg'>
                <img src="uploads/logo/<?php print $ufile ?>" alt='' height='30'>
            </span>
        </a>
        <!-- Light Logo-->
        <a href='index.html' class='logo logo-light'>
            <span class='logo-sm'>
                <img src="uploads/logo/<?php print $ufile ?>" alt='' height='22'>
            </span>
            <span class='logo-lg'>
                <img src="uploads/logo/<?php print $ufile ?>" alt='' height='30'>
            </span>
        </a>
        <button type='button' class='btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover' id='vertical-hover'>
            <i class='ri-record-circle-line'></i>
        </button>
    </div>

    <div id='scrollbar'>
        <div class='container-fluid'>

            <div id='two-column-menu'>
            </div>
            <ul class='navbar-nav' id='navbar-nav'>
                <li class='menu-title'><span data-key='t-menu'>Menu</span></li>

                <li class='nav-item'>
                    <a href='dashboard' class='nav-link' data-key='t-analytics'> <i class='fas fa-home'></i> <span data-key='t-dashboards'> Dashboard </span></a>
                </li>

                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarB' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='ri-file-list-3-line'></i> <span data-key='t-landing'>Manage Blog</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarB'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='createblog' class='nav-link' data-key='t-one-page'> Add New </a>
                            </li>
                            <li class='nav-item'>
                                <a href='blog' class='nav-link' data-key='t-nft-landing'>Blog lists </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebar1' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='far fa-calendar-alt'></i> <span data-key='t-landing'>Manage Events</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebar1'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='create_event' class='nav-link' data-key='t-one-page'> Add Event </a>
                            </li>
                            <li class='nav-item'>
                                <a href='done' class='nav-link' data-key='t-nft-landing'>Done Events </a>
                            </li>
                            <li class='nav-item'>
                                <a href='upcoming' class='nav-link' data-key='t-nft-landing'>Upcoming Events </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarLanding' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='fas fa-fire'></i> <span data-key='t-landing'>Manage Causes</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarLanding'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='createcause' class='nav-link' data-key='t-one-page'> Add Cause </a>
                            </li>
                            <li class='nav-item'>
                                <a href='causes' class='nav-link' data-key='t-nft-landing'> Cause List </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarContribute' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='fas fa-people-carry'></i> <span data-key='t-landing'>Manage Donation</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarContribute'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='createdonation' class='nav-link' data-key='t-one-page'> Add Donation </a>
                            </li>
                            <li class='nav-item'>
                                <a href='donation' class='nav-link' data-key='t-nft-landing'> Donation List </a>
                            </li>
                            <li class='nav-item'>
                                <a href='cashtype' class='nav-link' data-key='t-nft-landing'> Cash type list </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarPot' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='ri-rhythm-fill'></i> <span data-key='t-landing'>Manage Portfolio</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarPot'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='createportfolio' class='nav-link' data-key='t-one-page'> Add New </a>
                            </li>
                            <li class='nav-item'>
                                <a href='portfolio' class='nav-link' data-key='t-nft-landing'> Portfolio List </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarSl' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='ri-image-fill'></i> <span data-key='t-landing'>Manage Slider</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarSl'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='createslide' class='nav-link' data-key='t-one-page'> Add New </a>
                            </li>
                            <li class='nav-item'>
                                <a href='slider' class='nav-link' data-key='t-nft-landing'> Sliders List </a>
                            </li>
                            <li class='nav-item'>
                                <a href='static' class='nav-link' data-key='t-nft-landing'> Static Sliders</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarX' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='ri-chrome-fill'></i> <span data-key='t-landing'>Manage Social</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarX'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='createsocial' class='nav-link' data-key='t-one-page'> Add New </a>
                            </li>
                            <li class='nav-item'>
                                <a href='social' class='nav-link' data-key='t-nft-landing'>Social List </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarT' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='ri-message-line'></i> <span data-key='t-landing'>Manage Testimony</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarT'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='newtestimony' class='nav-link' data-key='t-one-page'>New Testimony</a>
                            </li>
                            <li class='nav-item'>
                                <a href='testimony' class='nav-link' data-key='t-nft-landing'> All Testimonies </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarTeam' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='ri-message-line'></i> <span data-key='t-landing'>Manage Team</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarTeam'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='newteam' class='nav-link' data-key='t-one-page'>New Member</a>
                            </li>
                            <li class='nav-item'>
                                <a href='team' class='nav-link' data-key='t-nft-landing'> All Team </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarW' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='ri-rocket-line'></i> <span data-key='t-landing'> Why Choose Us</span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarW'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='addwhy' class='nav-link' data-key='t-one-page'> Add New </a>
                            </li>
                            <li class='nav-item'>
                                <a href='why' class='nav-link' data-key='t-nft-landing'> All lists </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class='nav-item'>
                    <a class='nav-link menu-link' href='#sidebarK' data-bs-toggle='collapse' role='button' aria-expanded='true' aria-controls='sidebarLanding'>
                        <i class='ri-tools-fill'></i> <span data-key='t-landing'> Site Configuration </span>
                    </a>
                    <div class='menu-dropdown collapse' id='sidebarK'>
                        <ul class='nav nav-sm flex-column'>
                            <li class='nav-item'>
                                <a href='settings' class='nav-link' data-key='t-one-page'> Site Settings </a>
                            </li>
                            <li class='nav-item'>
                                <a href='sections' class='nav-link' data-key='t-nft-landing'> Section Titles </a>
                            </li>
                            <li class='nav-item'>
                                <a href='logo' class='nav-link' data-key='t-nft-landing'> Update Logo </a>
                            </li>
                            <li class='nav-item'>
                                <a href='contact' class='nav-link' data-key='t-nft-landing'> Update Contact </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class='sidebar-background'></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class='vertical-overlay'></div>