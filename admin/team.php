<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
<script type="text/javascript">
    function delete_user(uid) {
        if (confirm('Are You Sure to Delete this Record?')) {
            window.location.href = 'delete.php?delete=blog&id=' + uid;
        }
    }
</script>

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
                        <h4 class="mb-sm-0">Team</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Team members</li>
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
                            <h5 class="card-title mb-0">Team Member List</h5>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped table-sm dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th data-ordering="true">No.</th>
                                        <th data-ordering="false">Name</th>
                                        <th data-ordering="false">E-mail</th>
                                        <th data-ordering="false">Phone</th>
                                        <th data-ordering="false">Work</th>
                                        <th hidden data-ordering="false">Description</th>


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

                                    $q = "SELECT * FROM  `team` ORDER BY id DESC";


                                    $r123 = mysqli_query($con, $q);

                                    while ($row = mysqli_fetch_array($r123)) {
                                        //   <!-- SELECT `id`, `first_name`, `last_name`, `email`, `phone`, `work`, `description`, `date_join` FROM `team` -->

                                        $id = "$row[id]";
                                        $first_name = "$row[first_name]";
                                        $last_name = "$row[last_name]";
                                        $email = "$row[email]";
                                        $phone = "$row[phone]";
                                        $work = "$row[work]";
                                        $description = "$row[description]";
                                        $date = "$row[date_join]";


                                    ?>
                                        <tr>

                                            <td>
                                                <?php echo $x; ?>

                                            </td>
                                            <td class="text-capitalize">
                                                <?php echo "<m class='small font-weight-light'>" .  $first_name . " " . $last_name . "</m>"; ?>
                                            </td>
                                            <td class="text-capitalize">
                                                <?php echo "<m class='small font-weight-light'>" . $email . "</m>"; ?>
                                            </td>
                                            <td class="text-capitalize">
                                                <?php echo "<m class='small font-weight-light'>" . $phone . "</m>"; ?>
                                            </td>
                                            <td class="text-capitalize">
                                                <?php echo "<m class='small font-weight-light'>" . $work . "</m>"; ?>
                                            </td>
                                            <td class="text-capitalize" class="text-capitalize" hidden>
                                                <?php echo "<m class='small font-weight-light'>" . substr($description, 0, 30) . "...</m>"; ?>
                                            </td>

                                            <td>


                                                <a class='btn btn-sm btn-success  text-light edit-item-btn' data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
                                                    <i class='ri-eye-fill align-bottom fa-2 text-light '></i> View
                                                </a>

                                                <a href='editteam.php?id=<?php echo $id; ?>' class='btn btn-sm  btn-primary text-light edit-item-btn'>
                                                    <i class='ri-pencil-fill align-bottom me-2 text-light'> </i> Edit
                                                </a>

                                                <a href="javascript: delete_user(<?php echo $row['id']; ?>)" class='btn btn-sm btn-danger text-light remove-item-btn'>
                                                    <i class='ri-delete-bin-fill align-bottom me-2 text-light'></i> Delete
                                                </a>


                                            </td>


                                            <!-- start of view modal -->
                                            <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-right">
                                                            <h5 class="modal-title">Member details</h5>
                                                            <i data-dismiss="modal" class="fa fa-close close text-dark text-right fa-2x"></i>
                                                        </div>


                                                        <div class="modal-body">
                                                            <!-- <hr> -->
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-8"><b> NAME</b><br> <?php echo $first_name . " " . $last_name; ?></div>
                                                                    <div class="col-md-4"><b> PHOTO</b><br>
                                                                        <img src="uploads/team/<?php echo $ufile; ?>" alt="img" style="max-height:100px;">
                                                                        <!-- <img src='uploads/team/<?php echo $ufile; ?> ' id="output_image"> -->
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-3 mb-3">
                                                                    <div class="col-md-3"><b> PHONE</b><br> <?php echo $row['phone']; ?></div>
                                                                    <div class="col-md-5"><b> OCCUPATION</b><br> <?php echo $row['work']; ?></div>
                                                                    <div class="col-md-4"><b> UPDATED AT</b><br> <?php echo $row['date_join']; ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12"><b> DESCRIPTION</b><br> <?php echo $row['description']; ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary close" data-dismiss="modal">CLOSE</button>
                                                            <!-- <a type="button" class="btn btn-danger close" data-dismiss="modal">Yes</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of view modal -->




                                        </tr>
                                    <?php
                                        $x++;
                                    }
                                    ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->


            <!--  start  modal -->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <?php include "footer.php"; ?>