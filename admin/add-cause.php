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
                        <h4 class="mb-sm-0">Add Cause</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Causes</a></li>
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
                                        <i class="fas fa-home"></i> Add Causes
                                    </a>
                                </li>


                            </ul>
                        </div>



                        <?php
                        $status = "OK"; //initial status
                        $msg = "";
                        if (isset($_POST['save'])) {

                            // cause_title=cbn&cause_icon=cvb&cause_detail=cvb&ufile

                            $cause_title = mysqli_real_escape_string($con, $_POST['cause_title']);
                            $cause_icon = mysqli_real_escape_string($con, $_POST['cause_icon']);
                            $cause_detail = mysqli_real_escape_string($con, $_POST['cause_detail']);

                            if (strlen($cause_title) < 5) {
                                $msg = $msg . "Service Title Must Be More Than 5 Char Length.<BR>";
                                $status = "NOTOK";
                            }


                            if (strlen($cause_detail) < 150) {
                                $msg = $msg . "Cause Description Must Be More Than 15 Char Length.<BR>";
                                $status = "NOTOK";
                            }



                            $uploads_dir = 'uploads/causes';

                            $tmp_name = $_FILES["ufile"]["tmp_name"];
                            // basename() may prevent filesystem traversal attacks;
                            // further validation/sanitation of the filename may be appropriate
                            $name = basename($_FILES["ufile"]["name"]);
                            $random_digit = rand(0000, 9999);
                            $new_file_name = $random_digit . $name;

                            move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");

                            if ($status == "OK") {
                                $qb = mysqli_query($con, "INSERT INTO `cause` (cause_title, cause_icon, cause_detail,ufile) 
                                VALUES ('$cause_title', '$cause_icon', '$cause_detail', '$new_file_name')");


                                if ($qb) {
                                    $errormsg = "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                  Service has been added successfully.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
 "; //printing error if found in validation

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
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <!-- <form action="add-cause.php" method="get" enctype=""> -->
                                        <div class="row">



                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Cause Title</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="cause_title" placeholder="Enter Service Title">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Icon</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="cause_icon" placeholder="Enter Icon for cause">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label"> Cause Detail</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea5" name="cause_detail" rows="3" placeholder="Enter cause description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4">
                                                <label for="firstnameInput" class="form-label">Photo</label>
                                                <input type="file" accept="image/*" onchange="preview_image(event)" class="form-control bg-danger" name="ufile">
                                                <div class="text-center m-2">
                                                    <img class="img-responsive" id="output_image" />
                                                </div>

                                            </div>

                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" name="save" class="btn btn-primary">Add Cause</button>

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