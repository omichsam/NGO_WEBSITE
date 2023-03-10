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
                        <h4 class="mb-sm-0">Social Networks</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Socials</li>
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
                            <h5 class="card-title mb-0">Social List</h5>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped table-sm dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>

                                        <th data-ordering="false">No</th>
                                        <th data-ordering="false">Social Network</th>
                                        <th data-ordering="false">Icon</th>
                                        <th data-ordering="false">Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $q = "SELECT * FROM  social ORDER BY id DESC";

                                    $x = 1;
                                    $r123 = mysqli_query($con, $q);

                                    while ($row = mysqli_fetch_array($r123)) {

                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $social_link = $row['social_link'];
                                        $icon = $row['fa'];
                                    ?>

                                        <tr>

                                            <td class='text-uppercase'> <?php echo $x; ?> </td>
                                            <td class='text-uppercase'> <?php echo $name; ?> </td>
                                            <td class='text-center'><i class="<?php echo $icon; ?> text-info fa-2x" aria-hidden='true'></i></td>
                                            <td><a href='$social_link'> <?php echo $social_link; ?></a> </td>
                                            <td class='text-center'>
                                                <!-- <a href='edit-cause.php?id=$id' class=' '><i class=' btn text-success ri-pencil-fill text-primary align-bottom me-2 '></i> </a></li>
  <a href='deletecause.php?id=$id' class=''> <i class=' btn text-danger  ri-delete-bin-fill align-bottom me-2 '></i> </a> -->
                                                <a class='btn btn-sm btn-success  text-light edit-item-btn' data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
                                                    <i class='ri-eye-fill align-bottom fa-2 text-light '></i> View
                                                </a>
                                                <!-- <a href='deletesocial.php?id=$id' class='dropdown-item remove-item-btn'>
                                                            <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Delete
                                                        </a> -->

                                                <a href='#editcause.php?id=<?php echo $id; ?>' class='btn btn-sm  btn-primary text-light edit-item-btn'>
                                                    <i class='ri-pencil-fill align-bottom me-2 text-light'> </i> Edit
                                                </a>

                                                <a disabled href="#javascript: delete_cause(< ?php echo $row['id']; ?>)" class='btn btn-sm btn-danger text-light remove-item-btn'>
                                                    <i class='ri-delete-bin-fill align-bottom me-2 text-light'></i> Delete
                                                </a>
                                            </td>

                                        </tr>
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