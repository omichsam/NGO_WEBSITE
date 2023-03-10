<?php

// Start the session
session_start();

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

    <!-- header -->
    <?php include_once'views/header.php';?>
    
    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Volunteer with Us in Spreading Smiles</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Join Us</li>
                </ul>
            </div>
        </div>
    </div>



    <!--  ************************* Volunteer Form Starts Here ************************** -->
    <!-- php code for form validation -->
    <?php

    $errorname = $erroremail = $errorphone = $genderErr = $locationErr = $checklistErr = "";
    $name = $email = $phone = $gender = $location = $checklist = "";

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
        // gender
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $anyErr = true;
        } else {
            $gender = test_input($_POST["gender"]);
        }
        // location
        if (empty($_POST["location"])) {
            $locationErr = "Location is required";
            $anyErr = true;
        } else {
            $location = test_input($_POST["location"]);
        }
        // 
        // if (empty($_POST["check_list[]"])) {
        //     $locationErr = "Please select atleast one.";
        //     $anyErr = true;
        // }
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
            <h5>We'll be happy to have you with us!</h5>
        </div>

        <!-- volunteer form -->
        <form class="pt-4 col-md-5 m-auto" name="userForm" method="POST" action='volunteer.php'>

            <div class="form-label-group">
                <label for="name">Name<small>*</small></label>
                <input type="text" class="form-control" name="name">
                <small id="errorname"><?php echo $errorname; ?> </small>
            </div>

            <div class="form-label-group">
                <label class="col-form-label" for="email">Email<small>*</small></label>
                <input class="form-control" type="email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <small id="erroremail"><?php echo $erroremail; ?> </small>
            </div>
            <br>
            <div class="form-label-group">
                <label class="col-form-label" for="phone">Contact<small>*</small></label>
                <input class="form-control" type="tel" name="phone">
                <small id="errorphone"><?php echo $errorphone; ?> </small>
            </div>

            <div class="form-label-group">
                <label class="col-form-label" for="gender">Gender<small>*</small></label><br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="Female">&nbsp;&nbsp;Female<br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="Male">&nbsp;&nbsp;Male<br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="Other">&nbsp;&nbsp;Other<br>
                <small id="genderErr"><?php echo $genderErr; ?> </small>
            </div>
            <br>
            <div class="form-label-group">
                <label class="col-form-label" for="location">Location<small>*</small></label>
                <input type="text" name="location" class="form-control">
                <small id="erroremail"><?php echo $locationErr; ?> </small>
            </div>

            <div class="form-label-group">
                <label for="events" class="col-form-label">Event/s you would like to volunteer in:<small>*</small></label><br>
                <input type="checkbox" name="check_list[]" value="Food Distribution Drive"><label>&nbsp;&nbsp;Food Distribution Drive</label><br>
                <input type="checkbox" name="check_list[]" value="Covid Relief Camp"><label>&nbsp;&nbsp;Covid Relief Camp</label><br>
                <input type="checkbox" name="check_list[]" value="Old Age Home Visit"><label>&nbsp;&nbsp;Old Age Home Visit</label><br>
                <input type="checkbox" name="check_list[]" value="Orphange Visit"><label>&nbsp;&nbsp;Orphange Visit</label><br>
                <input type="checkbox" name="check_list[]" value="Mental Health Center Volunteering"><label>&nbsp;&nbsp;Mental Health Center Volunteering</label><br>
                <b>Please Select Atleast One Option for Volunteering.</b>

            </div>

            <br>

            <br>
            <input class="btn btn-green pull-left" type="submit" value="Submit " />
            <input class="btn btn-danger pull-right" type="reset" value="Reset" />
            <br><br>
        </form>

    </div>



    <!-- databse -->
    <?php
    include('functional/volunteer_tbl.php');
    ?>



    <!--  ************************* Footer Starts Here ************************** -->
    <?php include 'views/footer.php'; ?>
    <div class="copy">
        <div class="container">
            <a href="index.php">2021 &copy; All Rights Reserved</a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>