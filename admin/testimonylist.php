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
                        <h4 class="mb-sm-0">Testimony</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Testimony</li>
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
                            <h5 class="card-title mb-0">Testimony List</h5>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped table-sm dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th data-ordering="false">N.o</th>
                                        <th data-ordering="false">Client's Photo</th>
                                        <th data-ordering="false">Client's Name</th>
                                        <th data-ordering="false">Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $q = "SELECT * FROM  testimony ORDER BY id DESC";

                                    $x = 1;
                                    $r123 = mysqli_query($con, $q);

                                    while ($row = mysqli_fetch_array($r123)) {

                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $ufile = $row['ufile'];
                                        $message = $row['message'];


                                    ?>
                                        <tr>

                                            <td><?php echo $x; ?></td>
                                            <td class="text-small">
                                                <img src='uploads/testimony/<?php echo $ufile ?>' alt='img' style='max-height:30px;'>
                                            </td>
                                            <td class="text-small"> <?php echo "<m class='small'>" . $name . "</m>"; ?> </td>
                                            <td class="text-small"> <?php echo "<m class='small'>" . substr($message, 0, 30) . "...</m>"; ?> </td>
                                            <td>
                                                <div class='d-inline-block'>
                                                    <a class='btn btn-sm btn-success  text-light edit-item-btn' data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
                                                        <i class='ri-eye-fill align-bottom fa-2 text-light '></i> View
                                                    </a>

                                                    <a href='editteam.php?id=<?php echo $id; ?>' class='btn btn-sm  btn-primary text-light edit-item-btn'>
                                                        <i class='ri-pencil-fill align-bottom me-2 text-light'> </i> Edit
                                                    </a>

                                                    <a href="javascript: delete_user(<?php echo $row['id']; ?>)" class='btn btn-sm btn-danger text-light remove-item-btn'>
                                                        <i class='ri-delete-bin-fill align-bottom me-2 text-light'></i> Delete
                                                    </a>
                                                </div>
                                                <div class='dropdown d-inline-block' hidden>

                                                    <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                        <i class='ri-more-fill align-middle'></i>
                                                    </button>
                                                    <ul class='dropdown-menu dropdown-menu-end'>
                                                        <li>
                                                            <a href='deletetest.php?id=$id' class='dropdown-item remove-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>



                                        <!-- start of view modal -->
                                        <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header text-right">
                                                        <h5 class="modal-title">Member details</h5>
                                                        <i data-dismiss="modal" class="fa fa-close close text-right fa-2x"></i>
                                                    </div>


                                                    <div class="modal-body">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-6"><b> NAME</b><br> <?php echo $row['name']; ?></div>
                                                                <div class="col-md-6"><b> PHOTO</b><br>
                                                                    <img src="uploads/testimony/<?php echo $ufile; ?>" alt="img" style="max-height:70px;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12"><b> Message</b><br> <?php echo $row['message']; ?></div>
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary close" data-dismiss="modal">Close</button>
                                                        <!-- <a type="button" class="btn btn-danger close" data-dismiss="modal">Yes</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of view modal -->







                                    <?php
                                        $x++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->




        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include "footer.php"; ?>