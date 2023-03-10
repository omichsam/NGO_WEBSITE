<?php

// Start the session
session_start();

// Set session variables
$_SESSION["phone"] = $_POST["phone"];
$_SESSION["email"] = $_POST["email"];

?>


<!doctype html>
<html lang="en">

<head>
    <?php include_once 'views/head.php'; ?>
    <style>
        small {
            color: red;
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

    <?php include_once 'views/header.php'; ?>
    <!--  ************************* Page Title Starts Here ************************** -->


    <?php include_once 'views/page_header.php';
    showTitle("Help us by Donating", "Donate");

    ?>


    <!--  ************************* Volunteer Form Starts Here ************************** -->
    <!-- php code for form validation -->
    <?php

    $errorname = $erroremail = $errorphone = $genderErr = $addressErr = "";
    $name = $email = $phone = $gender = $address = "";

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

        // phone
        if (empty($_POST["phone"])) {
            $errorphone = "Phone is required";
            $anyErr = true;
        } else {
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

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
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

    ?>


    <div class="">

        <div class="text-center">
            <br>
            <h1>Please fill the form below</h1>
            <h5>We assure you that all your donations are being spent on a social cause.</h5>
            <br>
            <h6>Please fill the form</h6>
            <p>Payment details</p>
            <h6>(3/3)</h6>
        </div>

        <!-- donation form -->

        <form class="m-auto col-md-5" name="userForm" method="POST" action='donate_success.php'>

            <!-- amount -->
            <div class="form-label-group">
                <label class="col-form-label" for="amount">Amount<small>*</small></label>
                <input class="form-control" type="number" name="amount" required>
                <small id="erroremail"><?php //echo $erroremail; 
                                        ?> </small>
            </div>

            <!-- payment method -->
            <div class="form-label-group">
                <label class="col-form-label" for="mode">Payment method<small>*</small></label><br>
                <input type="radio" name="mode" value="Credit/Debit card">&nbsp;
                &nbsp;Credit/Debit card<br>
                <input type="radio" name="mode" value="Net banking">&nbsp;
                &nbsp;Net banking<br>
                <input type="radio" name="mode" value="Paytm">&nbsp;
                &nbsp;Paytm<br>
                <input type="radio" name="mode" value="Phone Pay">&nbsp;
                &nbsp;Phone Pay<br>
                <small id="genderErr"><?php // echo $genderErr; 
                                        ?> </small>
            </div>

            <br>
            <br>
            <input class="btn btn-green pull-left" type="submit" value="Next " />
            <input class="btn btn-danger pull-right" type="reset" value="Reset" />
            <br><br>
        </form>

    </div>






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