<!-- < ?php include 'model/const.php'; ?> -->
<!-- 
<footer class="footer" hidden>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <h2 class="text-cenmter">About Us</h2>
                <p class="text-capitallize">
                    < ?php echo TITLE; ?> , a non-profit organization in india is to empower underprivileged children,
                    youth and women through relevant education, innovative healthcare and market-focused livelihood
                    programmes.</p>
                <p hidden> We aim to achieve behavioural, social and economic transformation for all girls
                    towards an India where all children have equal opportunities to access quality education.</p>
                <div class="donate-link col-md-3"><a href="donate1.php" class="btn btn-danger mt-4"><span class="btn-title">Donate Now</span></a></div>

            </div>
            <div class="col-md-2 col-sm-12">
                <h2>Useful Links</h2>
                <ul class="list-styled link-list ml-3">

                    <li><a ui-sref="about" href="#/about">About us</a></li>
                    <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a></li>
                    <li><a ui-sref="products" href="#/products">Latest jobs</a></li>
                    <li><a ui-sref="gallery" href="#/gallery">Gallery</a></li>
                    <li><a ui-sref="contact" href="#/contact">Contact us</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 map-img">
                <h2 class="">Contact Us</h2>
                <address class="md-margin-bottom-40 ">
                    <p class="mb-2 "> <i class="fas fa-star   mr-2 "></i><?php echo TITLE; ?> <br></p>
                    <p class="mb-2 "> <i class="fas fa-map-marker    mr-2 "></i> <?php echo LOCATION_COUNTRY; ?> <br></p>
                    <p class="mb-2 "> <i class="fas fa-city   mr-2 "></i> <?php echo LOCATION_CITY; ?> <br></p>
                    <p class="mb-2 "> <i class="fas fa-phone-square-alt  mr-2 "></i> <?php echo PHONE; ?> <br></p>
                    <p class="mb-2 "> <i class="fas fa-address-card   mr-2 "></i> <?php echo ADDRESS; ?> <br></p>
                    <p class="mb-2 "> <a href="mailto:youngfoundation@gmai.com" class=""><i class="fas fa-envelope  mr-2 "></i><?php echo EMAIL; ?> <i class="fas fa-envelope-open-o"></i> </a><br></p>
                    <p class="mb-2 "> <i class="fas fa-globe mr-2   "></i><a href="index.php" class=""><?php echo WEBSITE; ?> </a> </p>
                </address>
            </div>


            <style>
                .form-box {
                    background-color: crimson !important;
                    color: white !important;
                    border-top-left-radius: 30px;
                }

                input::placeholder {
                    color: red !important;
                    font-weight: 500;
                }
            </style>

            <div class="col-md-3 col-sm-12 map-img form-box">
                <h2 class="text-light">Subscribe to our Newsletter</h2>
                <form action="sendemail.php" method="post" id="footer-form">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="center"><button type="submit" class="btn btn-main py-2 px-4">Subscribe</button></div>

                </form>

            </div>
        </div>


    </div>


</footer> -->

<!-- <div class="copy">
    <div class="container">
        <a href="index.php"> <?php echo TITLE . "&nbsp&nbsp  &copy COPYRIGHT " . date('Y'); ?> &nbsp;&nbsp; All Rights Reserved </a>

        <span>
            <a><i class="fab fa-whatsapp"></i></a>
            <a><i class="fab fa-google-plus-g"></i></a>
            <a><i class="fab fa-pinterest-p"></i></a>
            <a><i class="fab fa-twitter"></i></a>
            <a><i class="fab fa-facebook-f"></i></a>
        </span>
    </div>

</div>
 -->
<style>
    .text-decoration-underline {
        text-decoration: underline;
    }
</style>

<!-- Footer Start -->
<div class="footer ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2 class="text-decoration-underline">About Foundation</h2>
                    <!-- <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Help</a>
                    <a href="">FQAs</a> -->
                    <p > <?php echo TITLE; ?> , a non-profit organization in <?php echo LOCATION_COUNTRY;?> is to empower underprivileged children,
                        youth and women through relevant education, innovative healthcare and market-focused livelihood
                        programmes.</p>
                </div>



            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2 class="text-decoration-underline">Popular Links</h2>

                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="contact_us.php">Contact Us</a>
                    <a href="services.php">Popular Causes</a>
                    <a href="gallery.php">Upcoming Events</a>
                    <a href="blog.php">Latest Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2 class="text-decoration-underline">Our Head Office</h2>
                    <p><i class="fa fa-map-marker-alt"></i>123 Street, <?php echo LOCATION_CITY . ' &nbsp' . LOCATION_COUNTRY; ?></p>
                    <p><i class="fa fa-phone-alt"></i><?php echo PHONE; ?></p>
                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                    <div class="footer-social">
                        <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-newsletter">
                    <h2 class="text-decoration-underline">Newsletter</h2>
                    <form>
                        <style>
                            ::placeholder{
                                color: maroon !important;
                                font-weight: bold;
                            }
                        </style>
                        <input class="form-control" placeholder="Email goes here">
                        <button class="btn btn-custom">Submit</button>
                        <label class="text-light small">Receive updates and news about our organisation</label>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <?php echo date('Y'); ?> <a href="#">youngfoundation.com</a> , All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="">*****</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to top button -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up" hidden></i></a>

<!-- Pre Loader -->
<div id="loader" class="show" hidden>
    <div class="loader"></div>
</div>

<!-- < ?php

$errorname = $erroremail = "";
$name = $email = "";

$anyErr = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // name
    if (empty($_POST["name"])) {
        $errorname = "Name is required";
        $anyErr = true;
    } else {
        $name = $_POST["name"];
        $name = trim($name);
        if (ctype_alpha(str_replace(' ', '', $name)) === false) {
            $errorname = "Please write a valid name";
            $anyErr = true;
        }
    }

    // email
    if (empty($_POST["email"])) {
        $erroremail = "Email is required";
        $anyErr = true;
    } else {
        $email = trim($_POST["email"]);
        // $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            $erroremail = "Enter valid email";
            $anyErr = true;
        }
    }
}

function checkSubmission()
{
    global $anyErr;
    if ($anyErr == false) {
        return true;
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?> -->

<!-- Back to top button -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Pre Loader -->
<div id="loader" class="show" hidden>
    <div class="loader"></div>
</div>

<!-- 
<div class="text-center">
    <div class=" show" id="loader" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
        <div class="loader"></div>
</div> -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/easing/easing.min.js"></script>
<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/plugins/waypoints/waypoints.min.js"></script>
<script src="assets/plugins/counterup/counterup.min.js"></script>
<script src="assets/plugins/parallax/parallax.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>



<!-- Template Javascript -->
<script src="assets/js/mains.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>







</body>



</html>