<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
<script type="text/javascript">
    function delete_cause(uid) {
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
                        <h4 class="mb-sm-0">Causes</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Causes</li>
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
                            <h5 class="card-title mb-0">Causes List</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-responsive table-sm table-striped dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>

                                                <th data-ordering="false">Causes Title</th>
                                                <th data-ordering="false">Description</th>
                                                <th data-ordering="false">Icon</th>
                                                <th data-ordering="false">Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            $q = "SELECT * FROM  `cause` ORDER BY id DESC";


                                            $r123 = mysqli_query($con, $q);

                                            while ($row = mysqli_fetch_array($r123)) {

                                                $id = "$row[id]";
                                                $cause_title = "$row[cause_title]";
                                                $cause_icon = "$row[cause_icon]";
                                                $cause_details = "$row[cause_detail]";
                                                $ufile = "$row[ufile]";


                                                print "<tr>

                                                    <td class='text-uppercase'> $cause_title </td>"; ?>
                                                <td> <?php echo substr($cause_details, 0, 40) . "   ..."; ?> </td>

                                                <td class='text-center'><i class='<?php echo $row["cause_icon"]; ?> text-info fa-2x' aria-hidden='true'></i></td>
                                                <td class='text-center'> <img src='uploads/causes/<?php echo $ufile; ?> ' width='20px' height='20px' alt='N?A' ?></td>
                                                <td class='text-center'>
                                                    <!-- <a href='edit-cause.php?id=$id' class=' '><i class=' btn text-success ri-pencil-fill text-primary align-bottom me-2 '></i> </a></li>
                                            <a href='deletecause.php?id=$id' class=''> <i class=' btn text-danger  ri-delete-bin-fill align-bottom me-2 '></i> </a> -->
                                                    <a class='btn btn-sm btn-success  text-light edit-item-btn' data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
                                                        <i class='ri-eye-fill align-bottom fa-2 text-light '></i> View
                                                    </a>

                                                    <a href='editcause.php?id=<?php echo $id; ?>' class='btn btn-sm  btn-primary text-light edit-item-btn'>
                                                        <i class='ri-pencil-fill align-bottom me-2 text-light'> </i> Edit
                                                    </a>

                                                    <a href="javascript: delete_cause(<?php echo $row['id']; ?>)" class='btn btn-sm btn-danger text-light remove-item-btn'>
                                                        <i class='ri-delete-bin-fill align-bottom me-2 text-light'></i> Delete
                                                    </a>
                                                </td>
                                                <!-- start of view modal -->



                                                <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header text-right">

                                                                <h5 class="modal-title">Cause title: <?php echo $row['cause_title']; ?></h5>

                                                                <i data-dismiss="modal" class="fa fa-close close text-right fa-2x"></i>
                                                            </div>
                                                            <div class="modal-body">

                                                                <hr>

                                                                <div class="container-fluid">
                                                                    <div class="row">

                                                                        <div class="col-md-12  ">
                                                                            <p><b class="p-4">Details</b> <br> <i class="small"><?php echo $row['cause_detail']; ?></i>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <p class="text-center  text-dark"><b>Icon</b> <br> <i class="<?php echo $row['cause_icon']; ?> fa-2x text-primary"></i></p>

                                                                        </div>
                                                                        <div class="col-md-6 text-center ">
                                                                            <p><b class="p-4">Image</b> <br> <img src='uploads/causes/<?php echo $ufile; ?> ' width='20px' height='20px' alt='N?A' ?>
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

                                                </tr>
                                            <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
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