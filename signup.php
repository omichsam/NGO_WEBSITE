<!doctype html>
<html lang="en">

<head>
    <?php include_once 'views/head.php'; ?>
</head>

<body>



    <?php include_once 'views/header.php'; ?>
    <!--  ************************* Page Title Starts Here ************************** -->

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Register Here</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Sign up</li>
                </ul>
            </div>
        </div>
    </div>




    <!--  ************************* sign up Starts Here ************************** -->

    <section class="container-fluid mission-vision">
        <div class="container">
            <div class="text-center">
                <br>
                <h1>Sign Up</h1>
                <h5>Please fill the form below with your correct information</h5>
            </div>

            <form class="p-4 col-md-5 m-auto" action="" name="signupform" method="POST">
                <!-- first name -->
                <div class="form-label-group">
                    <label for="fname">First name<small>*</small></label>
                    <input type="text" class="form-control" name="fname" required>
                    <small id="errorfname"><?php //echo $errorname; 
                                            ?> </small>
                </div>
                <!-- last name -->
                <div class="form-label-group">
                    <label for="lname">Last name<small>*</small></label>
                    <input type="text" class="form-control" name="lname" required>
                    <small id="errorlname"><?php //echo $errorname; 
                                            ?> </small>
                </div>
                <!-- email -->
                <div class="form-label-group">
                    <label class="col-form-label" for="email">Email<small>*</small></label>
                    <input class="form-control" type="email" name="email" required>
                    <small id="erroremail"><?php //echo $erroremail; 
                                            ?> </small>
                </div>
                <!-- phone -->
                <div class="form-label-group">
                    <label class="col-form-label" for="phone">Contact</label>
                    <input class="form-control" type="tel" name="phone" required>
                    <small id="errorphone"><?php //echo $errorphone; 
                                            ?> </small>
                </div>

                <div class="form-label-group">
                    <label class="col-form-label" for="password">Password (max 30 characters) <small>*</small></label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <!-- <div class="form-label-group">
                    <label class="col-form-label" for="conf_password">Confirm password<small>*</small></label>
                    <input type="password" name="conf_password" class="form-control">
                </div> -->


                <br>
                <input class="btn btn-success btn-block" type="submit" value="Sign Up " />
                <input class="btn btn-danger btn-block" type="reset" value="Reset" />

            </form>



            <?php
            include('functional/signup_formval.php');

            // if ($_SERVER['REQUEST_METHOD'] == "POST") {

            //     if (isset($_POST['submit'])) {
            //         $fname = $_POST['fname'];
            //         $lname = $_POST['lname'];
            //         $email = $_POST['email'];
            //         $phone = $_POST['phone'];
            //         $password = $_POST['password'];

            //         echo $fname, $lname, $email, $phone, $password;



            //         $con = mysqli_connect('localhost', 'root', '');

            //         // check conn
            //         if (!$con) {
            //             die("Connection failed: " . mysqli_connect_error());
            //         }

            //         // create db
            //         $db = "ngo_db";
            //         $sql = "CREATE DATABASE $db;";

            //         mysqli_query($con, $sql);

            //         // use ngo db for further queries
            //         mysqli_select_db($con, $db);

            //         $table_name = "registered_user";

            //         $query = "SELECT ID FROM $table_name";
            //         $result = mysqli_query($con, $query);

            //         $sql = "CREATE TABLE IF NOT EXISTS
            //         $table_name(
            //             Firstname VARCHAR(50) NOT NULL,
            //             Lastname VARCHAR(50) NOT NULL,
            //             Email VARCHAR(50) PRIMARY KEY,
            //             Contact VARCHAR(10),
            //             Password VARCHAR(30)
            //         )";

            //         mysqli_query($con, $sql);

            //         echo 'table created';

            //         // insert query
            //         $sql = "INSERT INTO $table_name (Firstname, Lastname, Email, Contact, Password) values (?,?,?,?,?);";
            //         $pst = mysqli_prepare($con, $sql);
            //         mysqli_stmt_bind_param($pst, "sssss", $fname, $lname, $email, $phone, $password);

            //         if (mysqli_stmt_execute($pst))
            //             echo 'inserted';


            //         mysqli_close($con);
            //     }
            // }
            ?>

            <br>
            <p class="text-center pb-3">If you're already registered, login here! </p>
            <p class="text-center"><a href="login.php"><button class="btn btn-white">LOGIN</button></a></p>
            <br><br>
        </div>
    </section>


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