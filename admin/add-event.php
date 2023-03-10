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
                        <h4 class="mb-sm-0">Create event</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">event</a></li>
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
                                        <i class="fas fa-home"></i> New event
                                    </a>
                                </li>


                            </ul>
                        </div>



                        <?php
                        $status = "OK"; //initial status
                        $msg = "";
                        if (isset($_POST['save'])) {




                            $event_title = mysqli_real_escape_string($con, $_POST['event_title']);
                            $event_detail = mysqli_real_escape_string($con, $_POST['event_detail']);
                            $event_start_time = mysqli_real_escape_string($con, $_POST['start_time']);
                            $event_end_time = mysqli_real_escape_string($con, $_POST['end_time']);
                            $event_date = mysqli_real_escape_string($con, $_POST['event_date']);
                            $event_map_url = mysqli_real_escape_string($con, $_POST['event_map_url']);
                            $event_county = mysqli_real_escape_string($con, $_POST['event_county']);
                            $event_town = mysqli_real_escape_string($con, $_POST['event_town']);
                            // $ufile  = basename($_FILES["ufile"]["name"]);

                            // echo $ufile;

                            if (strlen($event_title) < 5) {
                                $msg = $msg . "event Title Must Be More Than 5 Char Length.<BR>";
                                $status = "NOTOK";
                            }


                            if (strlen($event_detail) < 15) {
                                $msg = $msg . "event Detail Must Be More Than 15 Char Length.<BR>";
                                $status = "NOTOK";
                            }


                            $uploads_dir = 'uploads/events';

                            $tmp_name = $_FILES["ufile"]["tmp_name"];
                            // basename() may prevent filesystem traversal attacks;
                            // further validation/sanitation of the filename may be appropriate
                            $name = basename($_FILES["ufile"]["name"]);
                            $random_digit = rand(0000, 9999);
                            $new_file_name = $random_digit . $name;

                            move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");






                            if ($status == "OK") {
                                $qf = mysqli_query($con, "
                           
                                INSERT INTO `events`
                                (`event_title`, `event_description`, `county`, `sub_county`, `map_link`, `start_time`,
                                 `end_time`, `date`, `ufile`,  `status_visible`, `rescheduled`) 

                                VALUES ('$event_title','$event_detail','$event_county ','$event_town','$event_map_url',
                                '$event_start_time','$event_end_time','$event_date','$new_file_name','0','0') ");




                                if ($qf) {
                                    $errormsg = "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                  Blog has been added successfully.
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
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">Event Title</label>
                                                        <input type="text" class="form-control" name="event_title" placeholder="Enter Event Title">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12" hidden>
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">Short Description</label>
                                                        <textarea class="form-control" name="event_desc" rows="2"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">Event Detail</label>
                                                        <textarea class="form-control" name="event_detail" rows="3" placeholder="Enter Events Descriptions"></textarea>
                                                    </div>
                                                </div>
                                                <fieldset>
                                                    <legend class="small text-uppercase"><u>Event location</u> </legend>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">County</label>
                                                                <input type="text" class="form-control" name="event_county" placeholder="Enter Event County">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">Nearest town</label>
                                                                <input type="text" class="form-control" name="event_town" placeholder="Enter nearest town">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">Map Link</label>
                                                                <input type="url" class="form-control" name="event_map_url" placeholder="Enter map url">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <legend class="small text-uppercase"><u>event time</u></legend>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">Starting time</label>
                                                                <input type="time" class="form-control" name="start_time">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">Ending time</label>
                                                                <input type="time" class="form-control" name="end_time">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>


                                            </div>



                                            <div class="col-lg-4 bg-light">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label">Photo</label>
                                                    <input type="file" accept="image/*" onchange="preview_image(event)" class="form-control" name="ufile">
                                                    <div class="text-center m-2" style="border-radius:100px;">
                                                        <img class="img-responsive" id="output_image" />
                                                    </div>

                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">Date</label>
                                                        <input type="date" class="form-control" name="event_date">
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12 text-center m-3">
                                                <div class="hstack gap-2 justify-content-end ">
                                                    <button type="submit" name="save" class="btn btn-primary  ">Create event</button>

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