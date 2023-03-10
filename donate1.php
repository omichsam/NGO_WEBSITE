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
        <button class="btn covid-relief" type="button" hidden >
            <span class="blink"><i class="fa fa-medkit blink" aria-hidden="true"></i> Covid Relief</span>
        </button>
    </a>

    <?php include_once'views/header.php';?>
    
    <!--  ************************* Page Title Starts Here ************************** -->

   
    <?php include_once 'views/page_header.php';
    showTitle("Help us by Donating","Donate");

    ?>


    <!--  ************************* Volunteer Form Starts Here ************************** -->
    <!-- php code for form validation -->
    <?php

    $errorfname = $errorlname = $erroremail = $genderErr = "";
    $fname = $lname = $email = $phone = $gender = $address = "";

    $anyErr = false;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // first fname
        if (empty($_POST["fname"])) {
            $errorfname = "First name is required";
            $anyErr = true;
        } else {
            $fname = $_POST["fname"];
            $fname = trim($fname);
            if (ctype_alpha(str_replace(' ', '', $fname)) === false) {
                $errorfname = "Please write a valid first name";
                $anyErr = true;
            }
        }
        // lname
        if (empty($_POST["lname"])) {
            $errorlname = "Last name is required";
            $anyErr = true;
        } else {
            $lname = $_POST["lname"];
            $lname = trim($lname);
            if (ctype_alpha(str_replace(' ', '', $lname)) === false) {
                $errorlname = "Please write a valid last name";
                $anyErr = true;
            }
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $anyErr = true;
        } else {
            $gender = test_input($_POST["gender"]);
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
            <p>Personal details</p>
            <h6>(1/3)</h6>
        </div>

        <!-- donation form -->

        <form class="m-auto col-md-5" name="userForm" method="POST" <?php if ($anyErr == false) {
                                                                        echo "action='donate2.php'";
                                                                    } ?>>

            <!-- first name -->
            <div class="form-label-group">
                <label for="fname">First name<small>*</small></label>
                <input type="text" class="form-control" name="fname" required>
                <small id="errorfname"><?php echo $errorfname; ?> </small>
            </div>
            <!-- last name -->
            <div class="form-label-group">
                <label for="lname">Last name<small>*</small></label>
                <input type="text" class="form-control" name="lname" required>
                <small id="errorlname"><?php echo $errorlname; ?> </small>
            </div>

            <!-- age -->
            <div class="form-label-group">
                <label class="col-form-label" for="age">Age<small>*</small></label>
                <input class="form-control" min=15 type="number" name="age" required>
            </div>

            <!-- gender -->
            <div class="form-label-group">
                <label class="col-form-label" for="gender">Gender<small>*</small></label><br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="Female">&nbsp;&nbsp;Female<br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="Male">&nbsp;&nbsp;Male<br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="Other">&nbsp;&nbsp;Other<br>
                <small id="genderErr"><?php echo $genderErr; ?> </small>
            </div>

            <br>


            <br>
            <input class="btn btn-green pull-left" type="submit" value="Next " />
            <input class="btn btn-danger pull-right" type="reset" value="Reset" />
            <br><br>
        </form>

    </div>



    <?php
    // database connection code
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

    // $servername = 'localhost';
    // $username = 'root';
    // $password = '';

    // // create conn
    // $con = mysqli_connect($servername, $username, $password);


    // // check conn
    // if (!$con) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // // else { do nothing }




    // // create db

    // $db = "ngo_db";
    // $sql = "CREATE DATABASE $db;";
    // if (mysqli_query($con, $sql)) {
    //     // do nothing
    // } else {
    //     // show error
    //     mysqli_error($con);
    // }

    // // use ngo db for further queries
    // mysqli_select_db($con, $db);

    // $table_name = "vounteer_tbl";

    // $query = "SELECT ID FROM $table_name";
    // $result = mysqli_query($con, $query);

    // $sql = "CREATE TABLE IF NOT EXISTS
    //     $table_name(
    //         -- id INT(6) UNSIGNED
    //         -- AUTO_INCREMENT
    //         -- PRIMARY KEY,
    //         fldName VARCHAR(50),
    //         fldEmail VARCHAR(50) PRIMARY KEY,
    //         fldPhone VARCHAR(10),
    //         fldGender VARCHAR(10),
    //         fldAddress VARCHAR(150),
    //         fldEvent TEXT
    //     )";

    // mysqli_query($con, $sql);

    // // insert query

    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     if (!empty($_POST['email'])) {
    //         $name = $_POST['name'];
    //         $email = $_POST['email'];
    //         $phone = $_POST['phone'];
    //         $gender = $_POST['gender'];
    //         $address = $_POST['address'];
    //         $chk = implode(',', $_POST['check_list']);

    //         $sql = "INSERT INTO $table_name (fldName, fldEmail, fldPhone,  fldGender, fldAddress, fldEvent) values (?,?,?,?,?,?);";
    //         $pst = mysqli_prepare($con, $sql);
    //         mysqli_stmt_bind_param($pst, "ssisss", $roll, $fname, $lname, $branch, $year);
    //         mysqli_stmt_execute($pst);

    //         // echo '<h5 class="card-title mt-4">Inserting record</h5>';
    //         // echo '<p class="card-text">Record with roll number ' . $roll . ' added to the table.</p>';
    //     }
    // }

    // // get the post records
    // // if (isset($_POST['submit'])) {
    // //     $name = $_POST['name'];
    // //     $email = $_POST['email'];
    // //     $phone = $_POST['phone'];
    // //     $gender = $_POST['gender'];
    // //     $address = $_POST['address'];
    // //     // $check_list = $_POST['check_list'];
    // //     // $chk="";  
    // //     // foreach($check_list as $chk1)  
    // //     // {  
    // //     //     $chk .= $chk1.",";  
    // //     // }  
    // //     $chk = implode(',', $_POST['check_list']);


    // //     // $query = "SELECT count(*) as allcount FROM volunteer_tbl 
    // //     // WHERE fldName='".$name."' && fldEmail='".$email."' && 
    // //     // fldPhone='".$phone."'";
    // //     // $result = mysqli_query($con,$query);
    // //     // $row = mysqli_fetch_array($result);
    // //     // $allcount = $row['allcount'];

    // //     // // insert new record
    // //     // if($allcount == 0){
    // //     //database insert SQL code

    // //     $sql = "INSERT INTO volunteer_tbl (fldName, fldEmail, fldPhone,  fldGender, fldAddress, fldEvent) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $gender . "','" . $address . "','" . $chk . "')";

    // //     // insert in database 
    // //     // mysqli_query($con, $sql);  
    // //     if (mysqli_query($con, $sql)) {
    // //         echo "New record created successfully";
    // //     } else {
    // //         echo "Error: " . $sql . "<br>" . mysqli_error($con);
    // //     }

    // //     // Redirect to another page
    // //     // header('location: volunteer.php');
    // //     // }
    // // }

    // mysqli_close($con);

    ?>







    <!--  ************************* Footer Starts Here ************************** -->

    <?php include_once'views/footer.php';?>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>