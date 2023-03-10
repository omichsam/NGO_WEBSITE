<!-- <header class="continer-fluid ">
    <div class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-5 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            foundation@gmail.com
                            <span>|</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            +254 987 666 5433
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 folouws">

                    <ul class="ulright">
                        <li> <small>Folow Us </small>:</li>

                        <li>
                            <i class="fab fa-whatsapp text-success"></i>
                        </li>
                        <li>
                            <i class="fab fa-facebook text-primary"></i>
                        </li>
                        <li>
                            <i class="fab fa-twitter-square text-primary"></i>
                        </li>
                        <li>
                            <i class="fab fa-instagram text-danger"></i>
                        </li>
                        <li>
                            <i class="fab fa-linkedin text-primary"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    <a href="volunteer.php"><button class="btn btn-sm btn-success px-2">Join Us</button></a>
                    <a href="donate1.php"><button class="btn btn-sm btn-success px-2">Donate</button></a>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-lg-3 col-md-12 logo">
                    <a href="index.php">
                        <img src="assets/images/logo.png" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                    <ul class="navbad">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Our Work</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_us.php">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">
                                < ?php if (!isset($_SESSION["login"])) {
                                    echo '<div class="text-light btn btn-danger"> <i class="fas fa-user"></i> Login/Register</div>';
                                } else {
                                    echo '<div class="text-light btn btn-success"> <i class="fas fa-user mr-2 "></i> '  . $_SESSION['user_name'] . '</div>';
                                } ?>
                            </a>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</header>
 -->


<!-- Top Bar Start -->
<div class="top-bar d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="top-bar-left">
                    <div class="text">
                        <i class="fa fa-phone-alt"></i>
                        <p><?php echo PHONE; ?></p>
                    </div>
                    <div class="text">
                        <i class="fa fa-envelope"></i>
                        <p><?php echo EMAIL; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-bar-right">
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-whatsapp"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container-fluid">
        <a href="index.html" class="navbar-brand">YF</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

            <div class="navbar-nav ml-auto">


                <a <?php echo showActive("index.php") ?> href=" index.php">Home </a>
                <a <?php echo showActive("about_us.php") ?> href="about_us.php">About Us</a>
                <a <?php echo showActive("services.php") ?> href="services.php">Our Work</a>
                <a <?php echo showActive("gallery.php") ?> href="gallery.php">Gallery</a>
                <a <?php echo showActive("events.php") ?> href="events.php">Events</a>
                <a <?php echo showActive("blog.php") ?> href="blog.php">Blog</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu">
                        <!-- <a href="single.html" class="dropdown-item">Detail Page</a> -->
                        <!-- <a href="service.html" class="dropdown-item">What We Do</a> -->
                        <a href="team.php" class="dropdown-item">Meet The Team</a>
                        <a href="donate.php" class="dropdown-item">Donate Now</a>
                        <a href="volunteer.php" class="dropdown-item">Become A Volunteer</a>
                    </div>
                </div>
                <a <?php echo showActive("contact_us.php") ?> href="contact_us.php">Contact Us</a>
            </div>
        </div>
    </div>
</div>