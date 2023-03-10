<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Add Team Member</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Team Member</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">

                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                        <i class="fas fa-home"></i> Team Member Form
                                    </a>
                                </li>


                            </ul>
                        </div>



                        <?php
                        $status = "OK"; //initial status
                        $msg = "";
                        if (isset($_POST['save'])) {

                            $first_name = mysqli_real_escape_string($con, $_POST['fname']);
                            $last_name = mysqli_real_escape_string($con, $_POST['lname']);
                            $email = mysqli_real_escape_string($con, $_POST['email']);
                            $phone = mysqli_real_escape_string($con, $_POST['phone']);
                            $occupation = mysqli_real_escape_string($con, $_POST['occupation']);
                            $description = mysqli_real_escape_string($con, $_POST['description']);

                            if (strlen($first_name) < 1) {
                                $msg = $msg . "Name must contain a Character.<BR>";
                                $status = "NOTOK";
                            }
                            if (strlen($last_name) < 1) {
                                $msg = $msg . "Name must contain a Character.<BR>";
                                $status = "NOTOK";
                            }
                            // if (strlen($position) < 1) {
                            //     $msg = $msg . "Position must contain a Character.<BR>";
                            //     $status = "NOTOK";
                            // }

                            if (strlen($description) < 10) {
                                $msg = $msg . "Team Message Must Be More Than 10 Char Length.<BR>";
                                $status = "NOTOK";
                            }



                            $uploads_dir = 'uploads/team';

                            $tmp_name = $_FILES["ufile"]["tmp_name"];
                            // basename() may prevent filesystem traversal attacks;
                            // further validation/sanitation of the filename may be appropriate
                            $name = basename($_FILES["ufile"]["name"]);
                            $random_digit = rand(0000, 9999);
                            $new_file_name = $random_digit . $name;

                            move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");

                            if ($status == "OK") {
                                $qf = mysqli_query($con, "INSERT INTO `team` ( `first_name`, `last_name`, `email`, `phone`, `work`, `description`, `profile_pic`) 
                                VALUES ('$first_name', '$last_name', '$email', '$phone', '$occupation', '$description','$ufile')");



                                if ($qf) {
                                    $errormsg = "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                 Team Member has been added successfully.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
 "; //printing error if found in validation

                                } else {
                                    $errormsg = "
            <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                       Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                       </div>"; //printing error if found in validation

                                }
                            } elseif ($status !== "OK") {
                                $errormsg = "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                     " . $msg . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation


                            } else {
                                $errormsg = "
      <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                 Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>"; //printing error if found in validation


                            }
                        }
                        ?>



                        <div class="card-body p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        print $errormsg;
                                    }
                                    ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> First Name</label>
                                                            <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Last name</label>
                                                            <input type="text" class="form-control" name="lname" placeholder="Enter Second Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Email</label>
                                                            <input type="email" class="form-control" name="email" placeholder="Enter Team Member Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Phone</label>
                                                            <input type="number" class="form-control" name="phone" placeholder="Enter Team Memeber Phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Occupation</label>
                                                            <input type="text" class="form-control" name="occupation" placeholder="Enter Client's Position">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">


                                                    <style>
                                                        #output_image {

                                                            width: 150px;
                                                            height: 150px;
                                                            position: relative;
                                                            border-radius: 100%;
                                                            border: 6px solid #F8F8F8;
                                                            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
                                                            /* width: 100%;
                                                            height: 100%; */
                                                            border-radius: 100%;
                                                            background-size: cover;
                                                            background-repeat: no-repeat;
                                                            background-position: center;
                                                        }
                                                    </style>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Photo</label>
                                                            <input type="file" accept="image/*" onchange="preview_image(event)" class="form-control" name="ufile">
                                                            <div class="text-center m-2" style="border-radius:30px;">
                                                                <!-- <img class="img-responsive" id="output_image" /> -->
                                                                <img src='uploads/blog/<?php echo $ufile; ?> ' id="output_image">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Description</label>
                                                            <textarea class="form-control" name="description" placeholder="Enter description" rows="2"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" name="save" class="btn btn-primary">Add Member</button>

                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <!--end tab-pane-->

                                <!--end tab-pane-->

                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include "footer.php"; ?>