<?php
include "header.php";
$todo =  mysqli_real_escape_string($con, $_GET['id']);
include "sidebar.php";

?>

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
                        <h4 class="mb-sm-0">Edit Blog</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <?php
            $query = "SELECT * FROM  `events` where `id`='$todo' ";


            $result = mysqli_query($con, $query);
            $i = 0;
            // SELECT `id`, `event_title`, `event_description`, `county`, 
            // `sub_county`, `map_link`, `start_time`, `end_time`, `date`,
            //  `ufile`, `created_on`, `status_visible`, `rescheduled` 
            //  FROM `events` WHERE 1

            while ($row = mysqli_fetch_array($result)) {
                $id = "$row[id]";
                $event_title = "$row[event_title]";
                $event_description = "$row[event_description]";
                $county = "$row[county]";
                $sub_county = "$row[sub_county]";
                $map_link = "$row[map_link]";
                $start_time = "$row[start_time]";
                $end_time = "$row[end_time]";
                $ufile = "$row[ufile]";
                $status_visible = "$row[status_visible]";
                $date = "$row[date]";
            }
            ?>

            <div class="row">

                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                        <i class="fas fa-home"></i> Edit Event
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
                            $event_visibility = mysqli_real_escape_string($con, $_POST['event_visiblity']);
                            $event_town = mysqli_real_escape_string($con, $_POST['event_town']);
                            $ufile  = basename($_FILES["ufile"]["name"]);

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

                                $qf = mysqli_query(
                                    $con,
                                    "UPDATE `events` SET `event_title`='$event_title',`event_description`='$event_detail',
                                    `county`='$event_county ',`sub_county`='$event_town ',`map_link`='$event_map_url ',
                                    `start_time`='$event_start_time',`end_time`='$event_end_time',`date`='$event_date ',
                                    `ufile`='$ufile',`status_visible`='1'WHERE `id` = $todo"
                                );

                                if ($qf) {
                                    $errormsg = "
                                
                        <div class='alert alert-success alert-dismissible alert-outline fade show'>
                        Blog has been added successfully.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>"; //printing error if found in validation
                                    // echo "<script>alert('Updated successfully');</script>";
                                    echo "<script>window.location='done';</script>";
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
                                                        <input type="text" class="form-control" name="event_title" value=<?php echo $event_title; ?> placeholder="Enter Event Title">
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
                                                        <textarea class="form-control" name="event_detail" rows="5" placeholder="Enter Events Descriptions"><?php echo $event_description ?>
                                                    </textarea>
                                                    </div>
                                                </div>
                                                <fieldset>
                                                    <legend class="small text-uppercase"><u>Event location</u> </legend>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">County</label>
                                                                <input type="text" class="form-control" value=<?php echo $county; ?> name="event_county" placeholder="Enter Event County">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">Nearest town</label>
                                                                <input type="text" class="form-control" value=<?php echo $sub_county; ?> name="event_town" placeholder="Enter nearest town">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">Map Link</label>
                                                                <input type="url" class="form-control" value=<?php echo $map_link; ?> name="event_map_url" placeholder="Enter map url">
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
                                                                <input type="time" class="form-control" value=<?php echo $start_time; ?> name="start_time">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">Ending time</label>
                                                                <input type="time" class="form-control" value=<?php echo $end_time; ?> name="end_time">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>


                                            </div>

                                            <style>
                                                #output_image {
                                                    /* 
                                                    width: 192px;
                                                    height: 192px;
                                                    position: relative;
                                                    
                                                    /* border: 2px solid #B1B1B1D7; 
                                                    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);*/
                                                    border-radius: 5%;
                                                    width: 100%;
                                                    height: 100%;
                                                    background-size: cover;
                                                    background-repeat: no-repeat;
                                                    background-position: center;
                                                }
                                            </style>

                                            <div class="col-lg-4 bg-light">
                                                <div class="mb-3">

                                                    <label for="firstnameInput" class="form-label">Photo</label>
                                                    <input type="file" accept="image/*" onchange="preview_image(event)" class="form-control" name="ufile">
                                                    <div class="text-center m-2" style="border-radius:5px;">


                                                        <img src='uploads/events/<?php echo $ufile; ?> ' id="output_image">

                                                        <!-- <img src='uploads/events/< ?php echo $ufile; ? >' alt=' img' class='img-responsive' id='output_image' style='max-height:150px;'> -->
                                                        <?php echo $ufile; ?>
                                                        <!-- $ufile;  -->
                                                        <!-- <img src='uploads/events/$ufile/8437log.png' alt='a' style='max-height:150px;'> -->
                                                        <!-- <img src='http://localhost/ngo/admin/uploads/events/< ?php echo $ufile; ?>' alt="b" style='max-height:150px;' /> -->



                                                    </div>

                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">Date</label>
                                                        <input type="date" value=<?php echo $date; ?> class="form-control" name="event_date">
                                                    </div>
                                                </div>

                                                <!-- //< ?php echo $status_visible; ?>
                                                 -->
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" name="event_visiblity" class="form-label">Visibility to webpage <i class="fa fa-eye"></i></label>
                                                        <select class="form-select form-select" aria-label=".form-select-sm example">
                                                            <option value="1" <?php echo (($status_visible == 1) ? "selected" : "") ?>>Visible to web users</option>
                                                            <option value="0" <?php echo (($status_visible == 0) ? "selected" : "") ?>>Invisible to web users</option>

                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12 text-center m-3">
                                                <div class="hstack gap-2 justify-content-end ">
                                                    <button type="submit" name="save" class="btn btn-primary  ">Update event</button>

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

            <!-- < ?php


            $path = __DIR__ . "/ uploads / blogs / " . $ufile;

            echo "<img src = 'uploads/blog/'.$ufile>";
            ?> -->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include "footer.php"; ?>