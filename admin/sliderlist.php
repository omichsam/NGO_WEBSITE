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
                        <h4 class="mb-sm-0">All Slider</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Slider</li>
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
                            <h5 class="card-title mb-0">Slider List</h5>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-striped table-sm dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" data-ordering="false">Image</th>
                                        <th class="tedxt-center" data-ordering="false">Slider Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    $q = "SELECT * FROM  slider ORDER BY id DESC";


                                    $r123 = mysqli_query($con, $q);

                                    while ($row = mysqli_fetch_array($r123)) {

                                        $id = $row['id'];
                                        $slide_title = $row['slide_title'];
                                        $ufile = $row['ufile'];
                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <img src='uploads/slider/<?php echo $ufile; ?>' alt='img' style='max-height:30px;'>
                                            </td>
                                            <td>
                                                <?php echo $slide_title; ?>
                                            </td>

                                            <td>
                                                <div class='dropdown d-inline-block'>
                                                    <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                        <i class='ri-more-fill align-middle'></i>
                                                    </button>
                                                    <ul class='dropdown-menu dropdown-menu-end'>

                                                        <li>
                                                            <a href='deleteslide.php?id=<?php echo $id; ?>' class='dropdown-item remove-item-btn'>
                                                                <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>


                                        </tr><?php
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