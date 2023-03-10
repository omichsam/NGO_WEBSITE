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

    <?php include_once 'views/header.php';
?>

    <!--  ************************* Page Title Starts Here ************************** -->

    <?php include_once 'views/page_header.php';
showTitle('Our Gallery', 'Gallery');
?>

    <!--  ************************* Gallery Starts Here ************************** -->
    <div id='portfolio' class='gallery'>
        <div class='container'>

            <div class='row justify-content-center'>
                
                    <div class='gallery-filter d-none d-sm-block'>
                        <button class='btn btn-default filter-button' data-filter='all'>All</button>
                        <button  class='btn btn-default filter-button' data-filter='projects'><i class='fas fa-heartbeat'
                                style='color:crimson;'></i> Projects</button>
                        <button class='btn btn-default filter-button' data-filter='orphanage'>Orphanage Visits</button>
                        <button class='btn btn-default filter-button' data-filter='distribution'>Items
                            Distributions</button>
                        <button class='btn btn-default filter-button' data-filter='education'>Education
                            Projects</button>
                    </div>
               

                <br />

                <div class='col-lg-4 col-md-3 col-sm-4 col-xs-6 filter education'>
                    <div class='blog-item'>
                        <div class='blog-img'>
                            <img src='assets/images/events/image_01.jpg' class='img-responsive' alt='Image'>
                        </div>
                        <div class='blog-text'>
                            <!-- <h6><a href = '#'>Location : Sarang Village, Maharashtra</a></h6> -->
                            <p class=' font-weight-500 mt-3 center'> Helped locals build well
                                for education.</p>

                        </div>
                        <div class='blog-meta'>
                            <!-- <p class = 'center'><a href = '' class = 'small'>Date: August 2022 </a> </p> -->
                            <p class="center"><i class='fa fa-map-marker-alt'></i><a href='' class='small mx-2'>Itar,
                                    Turkana </a> | <i class='ml-2 fa fa-clock'></i><a href='' class='small mx-2'>Date:
                                    August 2022 </a></p>

                        </div>
                    </div>
                </div>

                <div class='col-lg-4 col-md-3 col-sm-4 col-xs-6 filter distribution'>
                    <div class='blog-item'>
                        <div class='blog-img'>
                            <img src='assets/images/events/image_02.jpg' class='img-responsive' alt='Image'>
                        </div>
                        <div class='blog-text'>
                            <!-- <h6><a href = '#'>Location : Sarang Village, Maharashtra</a></h6> -->
                            <p class=' font-weight-500 mt-3 center'> Provided basic sanitary needs.</p>

                        </div>
                        <div class='blog-meta'>
                            <!-- <p class = 'center'><a href = '' class = 'small'>Date: August 2022 </a> </p> -->
                            <p class="center"><i class='fa fa-map-marker-alt'></i><a href='' class='small mx-2'>Igamba,
                                    Kitui </a> | <i class='ml-2 fa fa-clock'></i><a href='' class='small mx-2'>Date:
                                    December 2021 </a></p>

                        </div>
                    </div>
                </div>

                <div class='col-lg-4 col-md-3 col-sm-4 col-xs-6 filter distribution'>
                    <div class='blog-item'>
                        <div class='blog-img'>
                            <img src='https://images.indianexpress.com/2020/04/coronavirus-delhi-food-759.jpg' class='img-responsive' alt='Image'>
                        </div>
                        <div class='blog-text'>
                            <!-- <h6><a href = '#'>Location : Sarang Village, Maharashtra</a></h6> -->
                            <p class=' font-weight-500 mt-3 center'> Provided meals to the needy.</p>

                        </div>
                        <div class='blog-meta'>
                            <!-- <p class = 'center'><a href = '' class = 'small'>Date: August 2022 </a> </p> -->
                            <p class="center"><i class='fa fa-map-marker-alt'></i><a href='' class='small mx-2'>Igamba,
                                    Kitui </a> | <i class='ml-2 fa fa-clock'></i><a href='' class='small mx-2'>Date:
                                    December 2021 </a></p>

                        </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-3 col-sm-4 col-xs-6 filter education'>
                    <div class='blog-item'>
                        <div class='blog-img'>
                            <img src='assets/images/events/image_03.jpg' class='img-responsive' alt='Image'>
                        </div>
                        <div class='blog-text'>
                            <!-- <h6><a href = '#'>Location : Sarang Village, Maharashtra</a></h6> -->
                            <p class=' font-weight-500 mt-3 center'> Initiated Education Programs for villagers.</p>

                        </div>
                        <div class='blog-meta'>
                            <!-- <p class = 'center'><a href = '' class = 'small'>Date: August 2022 </a> </p> -->
                            <p class="center"><i class='fa fa-map-marker-alt'></i><a href='' class='small mx-2'>Igamba,
                                    Kitui </a> | <i class='ml-2 fa fa-clock'></i><a href='' class='small mx-2'>Date:
                                    December 2021 </a></p>

                        </div>
                    </div>
                </div>


                <div class='col-lg-4 col-md-3 col-sm-4 col-xs-6 filter orphanage'>
                    <div class='blog-item'>
                        <div class='blog-img'>
                            <img src='assets/images/events/image_04.jpg' class='img-responsive' alt='Image'>
                        </div>
                        <div class='blog-text'>
                            <!-- <h6><a href = '#'>Location : Sarang Village, Maharashtra</a></h6> -->
                            <p class=' font-weight-500 mt-3 center'> Provided study material to Cahrity Orphanage..</p>

                        </div>
                        <div class='blog-meta'>
                            <!-- <p class = 'center'><a href = '' class = 'small'>Date: August 2022 </a> </p> -->
                            <p class="center"><i class='fa fa-map-marker-alt'></i><a href='' class='small mx-2'>Igamba,
                                    Kitui </a> | <i class='ml-2 fa fa-clock'></i><a href='' class='small mx-2'>Date:
                                    December 2021 </a></p>

                        </div>
                    </div>
                </div>

                <div class='col-lg-4 col-md-3 col-sm-4 col-xs-6 filter distribution'>
                    <div class='blog-item'>
                        <div class='blog-img'>
                            <img src='assets/images/events/image_05.jpg' class='img-responsive' alt='Image'>
                        </div>
                        <div class='blog-text'>
                            <!-- <h6><a href = '#'>Location : Sarang Village, Maharashtra</a></h6> -->
                            <p class=' font-weight-500 mt-3 center'> Supplied blankets for winters..</p>

                        </div>
                        <div class='blog-meta'>
                            <!-- <p class = 'center'><a href = '' class = 'small'>Date: August 2022 </a> </p> -->
                            <p class="center"><i class='fa fa-map-marker-alt'></i><a href='' class='small mx-2'>Igamba,
                                    Kitui </a> | <i class='ml-2 fa fa-clock'></i><a href='' class='small mx-2'>Date:
                                    December 2021 </a></p>

                        </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-3 col-sm-4 col-xs-6 filter education'>
                    <div class='blog-item'>
                        <div class='blog-img'>
                            <img src='assets/images/events/image_06.jpg' class='img-responsive' alt='Image'>
                        </div>
                        <div class='blog-text'>
                            <!-- <h6><a href = '#'>Location : Sarang Village, Maharashtra</a></h6> -->
                            <p class=' font-weight-500 mt-3 center'> Spent quality time with orphans.</p>

                        </div>
                        <div class='blog-meta'>
                            <!-- <p class = 'center'><a href = '' class = 'small'>Date: August 2022 </a> </p> -->
                            <p class="center"><i class='fa fa-map-marker-alt'></i><a href='' class='small mx-2'>Igamba,
                                    Kitui </a> | <i class='ml-2 fa fa-clock'></i><a href='' class='small mx-2'>Date:
                                    December 2021 </a></p>

                        </div>
                    </div>
                </div>

                <div class='col-lg-4 col-md-3 col-sm-4 col-xs-6 filter projects'>
                    <div class='blog-item'>
                        <div class='blog-img'>
                            <img src='assets/images/events/image_07.jpg' class='img-responsive' alt='Image'>
                        </div>
                        <div class='blog-text'>
                            <!-- <h6><a href = '#'>Location : Sarang Village, Maharashtra</a></h6> -->
                            <p class=' font-weight-500 mt-3 center'> Initiated sports aid for poor kids</p>

                        </div>
                        <div class='blog-meta'>
                            <!-- <p class = 'center'><a href = '' class = 'small'>Date: August 2022 </a> </p> -->
                            <p class="center"><i class='fa fa-map-marker-alt'></i><a href='' class='small mx-2'>Igamba,
                                    Kitui </a> | <i class='ml-2 fa fa-clock'></i><a href='' class='small mx-2'>Date:
                                    December 2021 </a></p>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- ######## Gallery End ####### -->

    <!--  ************************* Footer Starts Here ************************** -->

    <?php include_once 'views/footer.php';
?>
</body>

<script src='assets/js/jquery-3.2.1.min.js'></script>
<script src='assets/js/popper.min.js'></script>
<script src='assets/js/bootstrap.min.js'></script>
<script src='assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js'></script>
<script src='assets/plugins/slider/js/owl.carousel.min.js'></script>
<script src='assets/js/script.js'></script>

</html>