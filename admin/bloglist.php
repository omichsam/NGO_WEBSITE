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
                        <h4 class="mb-sm-0">Blog</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Blog</li>
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
                            <h5 class="card-title mb-0">Blog List</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-responsive table-sm table-striped dt-responsive nowrap table-striped align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-ordering="true">No.</th>
                                            <th data-ordering="false"> Title </th>
                                            <th data-ordering="false">Blog Details</th>
                                            <th data-ordering="false">Author</th>
                                            <th data-ordering="false">Posted</th>
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

                                        $q = "SELECT * FROM  blog ORDER BY id DESC";


                                        $r123 = mysqli_query($con, $q);

                                        while ($row = mysqli_fetch_array($r123)) {

                                            $id = "$row[id]";
                                            $blog_title = "$row[blog_title]";
                                            $blog_detail = "$row[blog_detail]";
                                            $author = "$row[author]";
                                            $date_posted = "$row[updated_at]";
                                            $image = "$row[ufile]";


                                        ?>
                                            <tr>

                                                <td>
                                                    <?php echo $x; ?>

                                                </td>
                                                <td class="text-capitalize">
                                                    <?php echo "<m class='small font-weight-light'>" .  $blog_title . "</m>"; ?>

                                                </td>
                                                <td class="">
                                                    <?php echo "<m class='small font-weight-light'>" .   substr($blog_detail, 0, 40) . "..." . "</m>"; ?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo "<m class='small font-weight-light'>" .  $author  . "</m>"; ?>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo "<m class='small font-weight-light'>" .  $date_posted . "</m>"; ?>

                                                </td>

                                                <td>
                                                    <a class='btn btn-sm btn-success  text-light edit-item-btn' data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
                                                        <i class='ri-eye-fill align-bottom fa-2 text-light '></i> View
                                                    </a>

                                                    <a href='editblog.php?id=<?php echo $id; ?>' class='btn btn-sm  btn-primary text-light edit-item-btn'>
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

                                                                <h5 class="modal-title"></h5>
                                                                <i data-dismiss="modal" class="fa fa-close close text-right fa-2x"></i>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="modal-title">Title: <?php echo $row['blog_title']; ?></h5>
                                                                <hr>
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p> <b> Details</b> : <br> &nbsp <i class='font-italic small'><?php echo  $row['blog_detail'];; ?></i></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p> <b> Blog image</b> : <br> <img src='uploads/blog/<?php echo $image; ?> ' id="output_image"></p>
                                                                        </div>

                                                                        <div class="col-md-6 text-center">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <p> <b> Author</b> : <br><i class='font-italic small'><?php echo  $row['author']; ?></i></p>
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <p> <b> Updated at</b> : <br><i class='font-italic small'><?php echo  $row['updated_at']; ?></i></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


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