<?php

// Start the session
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <?php include_once 'views/head.php'; ?>
    <style>
        /*=================== contact form start ====================*/
/* line 45, C:/Users/HP/Desktop/jun-2020/277.Charity _Non-profit/assets/scss/_contact.scss */
.contact-title {
  font-size: 27px;
  font-weight: 600;
  margin-bottom: 20px;
}

/* line 53, C:/Users/HP/Desktop/jun-2020/277.Charity _Non-profit/assets/scss/_contact.scss */
.form-contact label {
  font-size: 14px;
}

/* line 57, C:/Users/HP/Desktop/jun-2020/277.Charity _Non-profit/assets/scss/_contact.scss */
.form-contact .form-group {
  margin-bottom: 30px;
}

/* line 61, C:/Users/HP/Desktop/jun-2020/277.Charity _Non-profit/assets/scss/_contact.scss */
.form-contact .form-control {
  border: 1px solid #e5e6e9;
  border-radius: 0px;
  height: 48px;
  padding-left: 18px;
  font-size: 13px;
  background: transparent;
}

/* line 69, C:/Users/HP/Desktop/jun-2020/277.Charity _Non-profit/assets/scss/_contact.scss */
.form-contact .form-control:focus {
  outline: 0;
  box-shadow: none;
}

/* line 74, C:/Users/HP/Desktop/jun-2020/277.Charity _Non-profit/assets/scss/_contact.scss */
.form-contact .form-control::placeholder {
  font-weight: 300;
  color: #999999;
}

/* line 80, C:/Users/HP/Desktop/jun-2020/277.Charity _Non-profit/assets/scss/_contact.scss */
.form-contact textarea {
  border-radius: 0px;
  height: 100% !important;
}

/*=================== contact form end ====================*/
        small {
            color: red;
        }
    </style>
</head>

<body>



    <?php include_once 'views/header.php'; ?>
    <!--  ************************* Page Title Starts Here ************************** -->

    <?php include_once 'views/page_header.php';
    showTitle("Contact Us", "Contact Us");

    ?>



    <!--  ************************* Contact Us Starts Here ************************** -->


    <div style="margin-top:0px;" class="row no-margin" hidden>
        <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.7777383728485!2d72.8973566149011!3d19.073507387089418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c627a20bcaa9%3A0xb2fd3bcfeac0052a!2sK.%20J.%20Somaiya%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1605091852147!5m2!1sen!2sin" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>



    <!-- form validation -->
    <?php
    $errorname = $erroremail = $errorphone = $errormessage = "";
    $name = $email = $phone = $message = "";

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
            $email = $_POST["email"];
            $email = trim($email);
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $erroremail = "Enter valid email";
                $anyErr = true;
            }
        }
        // phone
        if (empty($_POST["phone"])) {
            $errorphone = "Phone is required";
            $anyErr = true;
        } else {
            $phone = $_POST["phone"];
            $phone = trim($_POST["phone"]);
            if (!ctype_digit($phone)) {
                $errorphone = "Only digits are allowed";
                $anyErr = true;
            }
            if (strlen($phone) < 10) {
                $errorphone = "Phone number cannot be less than 10 digits";
                $anyErr = true;
            }
        }
        // message
        if (empty($_POST["message"])) {
            $errormessage = "Message is required";
            $anyErr = true;
        } else {
            $message = $_POST["message"];
            $message = trim($_POST["message"]);
        }
    }
    ?>

    <div class="row  no-margin" >
        <div class="container">
            <div class="row">

                <div style="padding:20px" class="col-sm-7"hidden>
                    <h2>Contact Form</h2>

                    <form name="contactusform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> <br>
                        <div class="row cont-row">
                            <!-- <div class="col-sm-3"><label>Enter Name <small>*</small> </label><span>:</span></div> -->
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-md"><small id="errorname"><?php echo $errorname; ?> </small></div>
                        </div>
                        <div class="row cont-row">
                            <!-- <div class="col-sm-3"><label>Email Address<small>*</small> </label><span>:</span></div> -->
                            <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-md"><small id="erroremail"><?php echo $erroremail; ?></small></div>
                        </div>
                        <div class="row cont-row">
                            <!-- <div class="col-sm-3"><label>Mobile Number<small>*</small></label><span>:</span></div> -->
                            <div class="col-sm-8"><input type="text" name="phone" placeholder="Enter Mobile Number" class="form-control input-md"><small id="errorphone"><?php echo $errorphone; ?></small></div>

                        </div>
                        <div class="row cont-row">
                            <!-- <div class="col-sm-3"><label>Enter Message<small>*</small></label><span>:</span></div> -->
                            <div class="col-sm-8">
                                <textarea rows="5" placeholder="Enter Your Message" name="message" class="form-control input-md"></textarea>
                                <small id="errormessage"><?php echo $errormessage; ?> </small>
                            </div>
                        </div>
                        <div style="margin-top:10px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <button class="btn btn-custom btn-sm">Send Message</button>
                            </div>
                        </div>
                    </form>

                </div>


                <!-- sending mail -->
                <?php

                use PHPMailer\PHPMailer\PHPMailer;

                if (isset($_POST['name']) && isset($_POST['email'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    require 'assets/PHPMailer-master/src/Exception.php';
                    require 'assets/PHPMailer-master/src/PHPMailer.php';
                    require 'assets/PHPMailer-master/src/SMTP.php';

                    $mail = new PHPMailer();
                    //smtp settings
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPAuth = true;
                    $mail->Username = "smile.foundation.for.you@gmail.com";
                    $mail->Password = 'smilefounDation123#$';
                    $mail->Port = 465;
                    $mail->SMTPSecure = "ssl";
                    //email settings
                    $mail->isHTML(true);
                    $mail->setFrom($email, $name);
                    $mail->addAddress("smile.foundation.for.you@gmail.com");
                    $mail->Subject = ("Mail from $name via Smile Foundation");
                    $mail->Body = $message;

                    if ($mail->send()) {
                        $status = "success";
                        $response = "Email is sent!";
                    } else {
                        $status = "failed";
                        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
                    }
                }

                ?>

                <div class="col-sm-5 bg-dark text-light" style="border-top-left-radius: 30px;" hidden>

                    <div style="margin:50px" class="serv">

                        <h2 class="text-light my-3">Address</h2>

                        <p> <?php echo TITLE ?> </p>
                        <hr>
                        <p><?php echo ADDRESS ?> <br> </p>
                        <p> <?php echo LOCATION_CITY . ", &nbsp" . LOCATION_COUNTRY  ?><br></p>

                        <p> <?php echo "Phone : " . PHONE ?><br> </p>
                        <p> <?php echo "Email : " . EMAIL ?><br></p>
                        <p> <?php echo "Website : " . WEBSITE ?><br></p>

                    </div>


                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-custom">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <!-- insert in contact table in db -->
    <!-- < ?php

    $con = mysqli_connect('localhost', 'root', '', 'ngo_db');

    mysqli_select_db($con, "ngo_db");

    $sql = "CREATE TABLE IF NOT EXISTS
            contact_tbl(
                id INT(6) UNSIGNED
                AUTO_INCREMENT
                PRIMARY KEY,
                fldName VARCHAR(30) NOT NULL,
                fldEmail VARCHAR(50) NOT NULL,
                fldPhone VARCHAR(10) NOT NULL,
                fldMessage VARCHAR(100) NOT NULL
            )";

    mysqli_query($con, $sql);


    $sql = "INSERT INTO contact_tbl ( fldName, fldEmail, fldPhone, fldMessage) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $message . "')";

    // insert in database 
    mysqli_query($con, $sql);


    mysqli_close($con);

    ?>


 -->


    <!--  ************************* Footer Starts Here ************************** -->

    <?php include_once 'views/footer.php'; ?>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>