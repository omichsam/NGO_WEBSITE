<?php

// Start the session
session_start();

?>

<!doctype html>
<html lang='en'>

<head>
    <?php include_once 'views/head.php';
?>
</head>

<body>

    <!-- covif button -->
    <a href='covid.php'>
        <button class='btn covid-relief' type='button' hidden>
            <span class='blink'><i class='fa fa-medkit blink' aria-hidden='true'></i> Covid Relief</span>
        </button>
    </a>

    <?php include_once 'views/header.php';
?>

    <!--  ************************* Page Title Starts Here ************************** -->

    <?php include_once 'views/page_header.php';
showTitle('Popular Causes', 'Work');

?>

    <!-- ################# Events Start Here#######################--->
    <section class='events'>
        <div class='container'>

            <div class=' row'>

                <div class='col-md-4 col-sm-6 mb-4'>
                    <div class='causes-item'>
                        <div class='causes-img'>
                            <img src='assets/images/events/image_08.jpg' alt='Image'>
                        </div>
                       
                        <div class='causes-text mt-3'>
                            <h5>Girl Child Prestige</h4>

                            <p class='raises text-crimson text-crimson'><span>Raised : Ksh. 39, 425</span> / Ksh. 5, 00, 000 </p>
                            <p>Provided basic sanitary needs and initiated work and education
                                programmes for girls bringing about an attitude change in parents and promoting
                                equality. </p>
                        </div>
                        <div class='causes-btn'>
                            <a class='btn btn-custom'>Learn More</a>
                            <a class='btn btn-custom hidden'>Donate Now</a>
                        </div>
                    </div>

                </div>
                <div class='col-md-4 col-sm-6'>
                    <div class='event-box'>
                        <img src='assets/images/events/image_06.jpg' alt=''>
                        <h5 class="mt-3">Pan African School Health Program</h5>
                        <p class='raises text-crimson'><span>Raised : Ksh. 434, 425</span> / Ksh. 1 00, 000 </p>
                        <p class='desic'>Women,youths & children have benefitted from the health campaign
                            providing free health supplies, blood banks and health checkups to remote rural areas. </p>
                       <div class='causes-btn'>
                            <a class='btn btn-custom'>Learn More</a>
                            <a class='btn btn-custom hidden'>Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                    <div class='event-box'>
                        <img src='assets/images/events/image_04.jpg' alt=''>
                        <h5 class="mt-3">Rural Child Education</h5>
                        <p class='raises text-crimson'><span>Raised : Ksh. 30, 420</span> / Ksh. 500, 000 </p>
                        <p class='desic'>Already functional in 23 states, organised teacher training programs and
                            outsourced study material to 32, 000 children nationwide.</p>
                       <div class='causes-btn'>
                            <a class='btn btn-custom'>Learn More</a>
                            <a class='btn btn-custom hidden'>Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                    <div class='event-box'>
                        <img src='assets/images/events/image_05.jpg' alt=''>
                        <h5 class="mt-3">Vaapsi- Restoring lives</h5>
                        <p class='raises text-crimson'><span>Raised : Ksh. 404, 925</span> / Ksh. 1 ,000, 000 </p>
                        <p class='desic'>After the Ahero floods in 2008, we the village hped in rebuilding their
                            homes and helping them stand back up on their feet.</p>
                       <div class='causes-btn'>
                            <a class='btn btn-custom'>Learn More</a>
                            <a class='btn btn-custom hidden'>Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                    <div class='event-box'>
                        <img src='assets/images/events/image_06.jpg' alt=''>
                        <h5 class="mt-3">Well works wondeKsh</h5>
                        <p class='raises text-crimson'><span>Raised : Ksh. 10, 000</span> / Ksh. 100, 000 </p>
                        <p class='desic'>Actively helping every village get access by building better irrigation sytems
                            and waterworks plans and storage for their livelihoods and farmers</p>
                       <div class='causes-btn'>
                            <a class='btn btn-custom'>Learn More</a>
                            <a class='btn btn-custom hidden'>Donate Now</a>
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                    <div class='event-box'>
                        <img src='assets/images/events/image_07.jpg' alt=''>
                        <h5 class="mt-3">Khel Pragati</h5>
                        <p class='raises text-crimson'><span>Raised : Ksh. 34, 425</span> / Ksh. 300, 000 </p>
                        <p class='desic'>Helping rural kids believe in their passion and talent for sports and encourage
                            them to peKshuet by providing adequate equipments and mentors </p>
                       <div class='causes-btn'>
                            <a class='btn btn-custom'>Learn More</a>
                            <a class='btn btn-custom hidden'>Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  ************************* Footer Starts Here ************************** -->

    <?php include 'views/footer.php';
?>

</body>

<script src='assets/js/jquery-3.2.1.min.js'></script>
<script src='assets/js/popper.min.js'></script>
<script src='assets/js/bootstrap.min.js'></script>
<script src='assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js'></script>
<script src='assets/plugins/slider/js/owl.carousel.min.js'></script>
<script src='assets/js/script.js'></script>

</html>