<?php

// Start the session
session_start();

?>


<!doctype html>
<html lang="en">

<head>
    <?php include_once 'views/head.php'; ?>

    <style>
        .covid-relief {
            background-color: crimson;
            color: white;
            position: fixed;
            bottom: 0;
            left: 0;
            margin: 1rem;
            padding: .75rem 1rem;
            border-radius: 1.2rem;

        }

        .blink {
            animation: blink 1s steps(1, end) infinite;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>



    <?php include_once 'views/header.php'; ?>

    <!--  ************************* Page Title Starts Here ************************** -->


    <?php include_once 'views/page_header.php';
    showTitle("About Foundation", "About Us");

    ?>





    <!--  ************************* About Us Starts Here ************************** -->

    <?php include 'views/about_us.php'; ?>

    <!--  ************************* Facts Starts Here ************************** -->
    <?php include 'views/facts.php'; ?>

    <!--  ************************* Testimony Starts Here ************************** -->
    <?php include 'views/testimony.php'; ?>

    <!--################### Our Team Starts Here #######################--->
    <section class="our-team team-11" hidden>
        <div class="container">
            <div class="session-title row">
                <h2>Meet our Team</h2>
                <p>Our mentors at Smile Foundation do the same for us. An initial push, some guidance when needed, a sharing
                    of knowledge gained through years of experience—our mentors work pro bono to help further our cause and to
                    help us realise our full potential, individually and as an organisation.</p>
            </div>
            <div class="row team-row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb1.jpg" alt="">
                        <div class="det-o">
                            <h4>David Kanuel</h4>
                            <i>Accomplished professional with 25 years of experience in Entrepreneurship and Fund Management. </i>
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
                            <i>CEO of Dentsu Solutions, India and the President of DentsuIndia (Strategy & Integration).</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb4.jpg" alt="">
                        <div class="det-o">
                            <h4>Karthik Kumar</h4>
                            <i>Advertising & marketing professional, also played a role in evangelising “Daan Utsav”.</i>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--  ************************* Footer Starts Here ************************** -->
    <?php include_once 'views/footer.php'; ?>