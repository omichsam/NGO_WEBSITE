<?php

// Start the session
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <?php include_once 'views/head.php'; ?>
</head>

<body>

    <!-- covif button -->
    <a href="covid.php">
        <button class="btn covid-relief" type="button" hidden>
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid Relief</span>
        </button>
    </a>

    <?php include_once 'views/header.php'; ?>

    <!--  ************************* Page Title Starts Here ************************** -->

    <?php include_once 'views/page_header.php';
    showTitle("Our Blog", "Our Blog");

    ?>


    <section class="container pt-5 text-center" hidden>
        <h2>Subscribe to our Newsletter</h2>
        <div class="p-2">
            <h6>For more such articles, subscribe to us!</h6>
            <p class="h6">We promise you we won't spam :)</p>
        </div>
        <form class="col-md-5 m-auto p-2" method="post">
            <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Full name">
            </div>
            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Email Address">
            </div>
            <button type="submit" class="btn btn-success">Subscribe</button>
        </form>

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
    </section>



    <!-- ################# Our Blog Starts Here#######################--->
    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Blog</p>
                <h2>Be up to date with what we are doing and what causes we stand for...</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/img/blog-1.jpg" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Why Health Cannot Wait</a></h3>
                            <p> The second wave of the Covid-19 pandemic has shaken up the entire country and seems to be even more devastating than the first. Fighting the new, more infectious variant of the virus, frontline health workers are working round the clock ...</p>

                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="" class="small">By Admin </a></p>
                            <p><i class=" fa fa-clock"></i><a href="" class="small">June 19 2021</a></p>

                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/img/blog-2.jpg" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Nutrition for Education</a></h3>
                            <p> When six year old Kiran Wagh joined the Mission Education centre at Kalyan in Maharashtra, her teachers took note of her extreme health condition. She was visibly malnourished, looked much younger than her age and was ...</p>

                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="" class="small">By Admin </a></p>
                            <p><i class=" fa fa-clock"></i><a href="" class="small">August 10, 2022</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/images/events/image_03.jpg" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Empowering the Young</a></h3>
                            <p> Today, more than half of Kenya population is below the age of 25. In another seven years, Kenya average age will be just 29 years, in comparison with 37 in China and the United States, 45 in Western Europe and 48 in Japan; ...</p>

                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="" class="small">By Admin </a></p>
                            <p><i class=" fa fa-clock"></i><a href="" class="small">June 19 2021</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/images/events/image_05.jpg" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Building Saga Again</a></h3>
                            <p> Saga, a sub-county known for its dryness, windstorms, tribal crashes and hunger that is avery day problem facing the
                                residents living there . Research shows that boreholes drilled in the area has reduced
                                human fatality by a big percentage....</p>

                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="" class="small">By Mr. Sam </a></p>
                            <p><i class=" fa fa-clock"></i><a href="" class="small"> May 23 2022</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/images/events/image_04.jpg" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Anne Chege</a></h3>
                            <p> Last year, Anne was awarded with a merit-based scholarship under Smile Foundation’s Swabhiman programme to help her complete her schooling and higher studies. She belongs to a family who work hard ...</p>

                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="" class="small">By Admin </a></p>
                            <p><i class=" fa fa-clock"></i><a href="" class="small">June 19 2021</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="assets/img/blog-2.jpg" alt="Image">
                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Daughters no more dearer?</a></h3>
                            <p> Over the past decade, gender equality has been recognized as key not only to
                                the health of nations, but also to their social and economic development. The
                                promotion of gender equality and empowering of women ...</p>

                        </div>
                        <div class="blog-meta">
                            <p><i class="fa fa-user"></i><a href="" class="small">By Admin </a></p>
                            <p><i class=" fa fa-clock"></i><a href="" class="small">July 19 2021</a></p>

                        </div>
                    </div>
                </div>

            </div>
           
           
           
            <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!--  ************************* Footer Starts Here ************************** -->

    <?php include 'views/footer.php'; ?>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>