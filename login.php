<?php

// Start the session
session_start();

if (isset($_SESSION["login"]))
    header("location: dashboard.php");

?>

<!doctype html>
<html lang="en">

<head>
    <?php include_once 'views/head.php'; ?>

    <style>
        .login-error {
            color: red;
            text-align: center;
            /* border: .5px solid pink; */
            border-radius: 1rem;
            background-color: #fae0e4;
        }
    </style>
</head>

<body>

    <!-- covif button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button" hidden>
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid Relief</span>
        </button>
    </a>

    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                smilefoundation@gmail.com
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                +876 987 666 5433
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 folouws">

                        <ul class="ulright">
                            <li> <small>Folow Us </small>:</li>
                            <li>
                                <i class="fab fa-facebook-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                        <a href="volunteer.php"><button class="btn btn-sm btn-success">Join Us</button></a>
                        <a href="donate1.php"><button class="btn btn-sm btn-success">Donate</button></a>
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
                                <a class="nav-link" href="blog.php">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact_us.php">Contact US</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="login.php"><i class="fas fa-user"></i></a>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </header>




    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Login</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Login</li>
                </ul>
            </div>
        </div>
    </div>






    <!--  ************************* login Starts Here ************************** -->

    <section class="container-fluid mission-vision">
        <div class="container">

            <form action="functional/login_formval.php" class="pt-5 col-md-5 m-auto" name="loginform" method="POST">
                <!-- email -->
                <div class="form-label-group">
                    <label class="col-form-label" for="email">Email<small>*</small></label>
                    <input class="form-control" type="email" name="email">
                    <small id="erroremail"><?php // echo $erroremail; 
                                            ?> </small>
                </div>
                <!-- passwd -->
                <div class="form-label-group">
                    <label class="col-form-label" for="password">Password<small>*</small></label>
                    <input class="form-control" type="password" name="password">
                    <small id="errorphone"><?php //echo $errorphone; 
                                            ?> </small>
                </div>
                <br>
                <input class="btn btn-success btn-block" type="submit" value="Login " />

            </form>

            <?php
            if (isset($_GET["error"]))
                $msg = "Invalid email or password!";
            ?>
            <p class="mt-5 text-center" data-darkreader-inline-color="">

                <?php if (isset($msg)) {
                    echo '<span class="login-error p-2 pl-5 pr-5">';
                    echo $msg;
                    echo '</span>';
                }
                ?>
            </p>



            <p class="text-center pt-5 pb-3">If you're new user, sign up here! </p>
            <p class="text-center"><a href="signup.php"><button class="btn btn-white">SIGN UP</button></a></p>

            <br>
        </div>
    </section>


    <!--  ************************* Footer Starts Here ************************** -->

    <?php include'views/footer.php';?>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>