<?php

// Start the session
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <?php include_once 'views/head.php'; ?>
    <script>
        $(document).ready(function() {
            $("#myModaal").modal('show');
        });
    </script>
</head>

<body>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe our Newsletter</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="pb-3">Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                    <form method="post">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
                <!-- send mail for subscriptoion -->
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (!empty($_POST['name']) && !empty($_POST['email'])) {

                        $reciever_name = $_POST['name'];
                        $reciever_email = $_POST['email'];

                        include('sendemail.php');
                    }
                }
                ?>
                <br>
            </div>
        </div>
    </div>
    <?php include_once 'views/header.php'; ?>

    <!-- ******************** Slider Starts Here ******************* -->
    <?php include_once 'views/carousel.php'; ?>


    <!--  ************************* About Us Starts Here ************************** -->

    <!-- < ? php include 'views/about.php'; ?> -->
    <?php include_once 'views/about_us.php'; ?>
    <!-- ################# Mission Vision Start Here #######################--->





    <!-- Service Start -->
    <?php include_once 'views/services.php'; ?>
    <!-- Service End -->
    <!-- Facts Start -->
    <?php include_once 'views/facts.php'; ?>
    <!-- Facts End -->

    <!-- ################# Events Start Here#######################--->
    <?php include_once 'views/events.php'; ?>

    <section class="events" hidden>
        <div class="container">
            <div class="session-title row">
                <h2>Popular Causes</h2>
                <p>We are a non-profital & Charity raising money for child education</p>
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Girl Child Prestige</h4>
                        <p class="raises"><span>Raised : Rs.3,94,425</span> / Rs.5,00,000 </p>
                        <p class="desic">Provided basic sanitary needs and initiated work and education programmes for
                            girls bringing about an attitude change in parents and promoting equality.</p>
                        <a href='donate1.php'><button class="btn btn-success btn-sm">Donate Now</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_06.jpg" alt="">
                        <h4>Pan Kenya School Health Program</h4>
                        <p class="raises"><span>Raised : Rs.4,34,425</span> / Rs.10,00,000 </p>
                        <p class="desic">4,765 children have benefitted from the Young On Wheels health campaign
                            providing free health supplies, blood banks and health checkups to remote rural areas. </p>
                        <a href='donate1.php'><button class="btn btn-success btn-sm">Donate Now</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_04.jpg" alt="">
                        <h4>Rural Child Education</h4>
                        <p class="raises"><span>Raised : Rs.38,420</span> / Rs.5,00,000 </p>
                        <p class="desic">Already functional in 23 states, organised teacher training programs and
                            outsourced study material to 32,000 children nationwide.</p>
                        <a href='donate1.php'><button class="btn btn-success btn-sm">Donate Now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message" hidden>
        <div class="inner-lay">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Reach</h2>
                    <p>In keeping with its philosophy of 'Real Work Real Change', Young Foundation , an NGO in Nairobi,
                        Kenya to
                        support the underserved, has taken its intervention into the interiors of Kenya, reaching the
                        unreached
                        in the remotest of rural areas and urban slums with our services and making this helping
                        foundation in Kenya
                        , the best NGO in Kenya.</p>
                </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3 data-toggle="counter-up">12+</h3>
                        <span>YEARS OF EXPERIENCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3 data-toggle="counter-up">1812+</h3>
                        <span>HAPPY CHILDREN</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3 data-toggle="counter-up">52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3 data-toggle="counter-up">48+</h3>
                        <span>SLUMS & VILLAGES</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11" >
        <div class="container">
            <div class="session-title row">
                <h2>Meet our Team</h2>
                <p>Our mentors at Young Foundation do the same for us. An initial push, some guidance when needed, a
                    sharing
                    of knowledge gained through years of experience—our mentors work pro bono to help further our cause
                    and to
                    help us realise our full potential, individually and as an organisation.</p>
            </div>
            <div class="row team-row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb1.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Accomplished professional with 25 years of experience in Entrepreneurship and Fund
                                Management. </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb2.jpg" alt="">
                        <div class="det-o">
                            <h4>Akshay Calapa</h4>
                            <i>Senior Pharmaceutical executive in Business Development and Alliance Management.</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb3.jpg" alt="">
                        <div class="det-o">
                            <h4>Mitchell Williams</h4>
                            <i>CEO of Dentsu Solutions, Kenya and the President of DentsuKenya (Strategy &
                                Integration).</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb4.jpg" alt="">
                        <div class="det-o">
                            <h4>Karthik Kumar</h4>
                            <i>Advertising & marketing professional, also played a role in evangelising “Daan
                                Utsav”.</i>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <?php include_once'views/donate.php';?> 


    <?php include_once 'views/testimony.php'; ?>

    <?php include_once 'views/blog.php'; ?>


    <?php include_once 'views/footer.php'; ?>