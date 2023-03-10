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
                        <h4 class="mb-sm-0">Donation</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Donation(s)</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Listed Donation(s) $</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-sm dt-responsive table-responsive nowrap table-striped align-middle" style="width:100%">
                                    <thead>
                                        <tr>

                                            <th data-ordering="true">No.</th>
                                            <th data-ordering="false"> Month</th>
                                            <!-- <th data-ordering="false">Blog Details</th> -->
                                            <th data-ordering="false">Year</th>
                                            <th data-ordering="false">Town</th>
                                            <th data-ordering="false">Amount</th>
                                            <!-- <th data-ordering="false">Status</th> -->
                                            <th data-ordering="false">Donation type</th>
                                            <th data-ordering="false">Date updated</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <style>
                                            #demo-3 {
                                                display: -webkit-box;
                                                overflow: hidden;
                                                -webkit-line-clamp: 3;
                                                -webkit-box-orient: vertical;
                                            }
                                        </style>

                                        <?php
                                        $x = 1;

                                        // $q = "SELECT * FROM  `events` ORDER BY `id` DESC  ";
                                        $q = "SELECT * FROM `donation`";


                                        $r123 = mysqli_query($con, $q);

                                        while ($row = mysqli_fetch_array($r123)) {
                                            $id = "$row[id]";
                                            $event_title = "$row[event_title]";
                                            $event_desc = "$row[event_description]";
                                            $event_county = "$row[county]";
                                            $event_town = "$row[sub_county]";
                                            $start_time = "$row[start_time]";
                                            $end_time = "$row[end_time]";
                                            $event_date = "$row[date]";
                                            $visibility = "$row[status_visible]";
                                            $link_map = "$row[map_link]";
                                        ?>
                                            <tr>

                                                <td>
                                                    <?php echo $x; ?>

                                                </td>
                                                <td class="text-capitalize text-left">
                                                    <?php echo "<m class='small font-weight-light'>" . $event_title . "</m>"; ?>
                                                </td>
                                                <!-- <td id='demo-3 ' class="text-capitalize">
    < ?php echo "<b class='small font-weight-light'>" . substr($event_desc, 0, 20) . "..." . "</b>"; ?>
</td> -->


                                                <td class="text-capitalize text-center">
                                                    <?php echo "<m class='small font-weight-light'>" . $event_county . "</m>"; ?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo "<m class='small font-weight-light'>" . $event_town . "</m>"; ?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo "<m class='small font-weight-light'>" . $start_time . "-" . $end_time; ?>

                                                </td>

                                                <td class="text-center">
                                                    <?php echo "<m><a href='{$link_map}' class='small text-info'>location</a>" . "...</br></m>"; ?>

                                                </td>
                                                <td class="text-center">
                                                    <!-- ?<i class="fa fa-eye-slash" -->
                                                    <?php if ($visibility == 1) {
                                                        // echo  "<b class='small  text-primary'> visible </b>";
                                                        echo '<i class="fa fa-eye text-primary"></i>';
                                                    } else {
                                                        // echo "<b class='small blinks '> not  visible </b>";
                                                        echo '<i class="fa fa-eye-slash text-danger blinks"></i>';
                                                    }; ?>
                                                </td>


                                                <td class="text-center">
                                                    <a class='btn btn-sm btn-success  text-light edit-item-btn' data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
                                                        <i class='ri-eye-fill align-bottom fa-2 text-light '></i> View
                                                    </a>

                                                    <a href='editevent.php?id=<?php echo $id; ?>' class='btn btn-sm small btn-primary text-light edit-item-btn'>
                                                        <i class='ri-pencil-fill align-bottom me-3 text-light'> </i>Edit
                                                    </a>

                                                    <a href="javascript: delete_event(<?php echo $row['id']; ?>)" class='btn btn-sm small btn-danger text-light remove-item-btn'>
                                                        <i class='ri-delete-bin-fill align-bottom me-3 text-light'></i>Delete
                                                    </a>
                                                </td>

                                                <!-- start of view modal -->
                                                <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header text-right">

                                                                <h5 class="modal-title">Event : <?php echo $event_title; ?></h5>
                                                                <i data-dismiss="modal" class="fa fa-close close text-right fa-2x"></i>
                                                            </div>
                                                            <div class="modal-body">

                                                                <hr>
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p> <b> Details</b> : <br> &nbsp <i class='font-italic small'><?php echo  $event_desc; ?></i></p>
                                                                        </div>
                                                                    </div>

                                                                    <b class=""><u>Location :</u></b>
                                                                    <div class="row">

                                                                        <div class="col-md-4">
                                                                            <p> <b> County</b> : <br><i class='font-italic small'><?php echo  $event_county; ?></i></p>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <p> <b> Nearest town</b> : &nbsp <br><i class='font-italic small'><?php echo  $event_town; ?></i>
                                                                        </div>
                                                                    </div>
                                                                    <b class=""><u> Date and duration:</u></b>
                                                                    <div class="row">

                                                                        <div class="col-md-4">
                                                                            <p> <b> Date</b> : <br> <i class='font-italic small'><?php echo  $event_date; ?></i> </p>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <p> <b> Time</b> : <br> <i class='font-italic small'><?php echo  $start_time . " - " . $end_time; ?></i>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <p> <b> Visibility</b> : <br> <i class='font-italic small'><?php if ($visibility == 1) {
                                                                                                                                            echo  "Visible to user";
                                                                                                                                        } else {
                                                                                                                                            echo  "Not visible to user";
                                                                                                                                        } ?></i></p>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <p> <b> Location Link</b> : <br> <a href="<?php echo  $link_map; ?>"><i class='font-italic small'><?php echo  $link_map; ?></i></a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <hr>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary close" data-dismiss="modal">No</button>
                                                                <a type="button" class="btn btn-danger close" data-dismiss="modal">Yes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end of view modal -->


                                            </tr> <?php
                                                    $x++;
                                                }
                                                    ?>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->




        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <?php include "footer.php"; ?>