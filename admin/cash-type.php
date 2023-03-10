<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<?php
if (isset($_POST['save_add'])) {


    $cash_type = mysqli_real_escape_string($con, $_POST['cash_type']);
    $visibility = mysqli_real_escape_string($con, $_POST['visible']);
    if (empty($cash_type)) {
        echo "
        <script>
            Swal.fire(
                'Empty cash type?',
                'Empty inputs are not allowed?',
                'error'
              )
        </script>
        ";
    } else {
        $query = "INSERT INTO `cash_inflow_type`( `cash_type`,`visible`) VALUES ('$cash_type', '$visibility')";
        $statement = mysqli_query($con, $query);
        if ($statement) {
            echo "<script>
                        swal.fire('success', 'Data inserted successfully')
                        </script>";
        }
    }
}
?>
<?php
if (isset($_POST['update'])) {


    $cash_type = mysqli_real_escape_string($con, $_POST['cash_type']);
    $visibility = mysqli_real_escape_string($con, $_POST['visible']);
    $id = mysqli_real_escape_string($con, $_POST['id']);
    if (empty($cash_type)) {
        echo "
        <script>
            Swal.fire(
                'Empty cash type?',
                'Empty inputs are not allowed?',
                'error'
              )
        </script>
        ";
    } else {
        $query_update =  "UPDATE `cash_inflow_type` SET `cash_type` = '$cash_type ', `visible` = '$visibility'  WHERE `cash_inflow_type`.`id` = '$id'";
        $statement = mysqli_query($con, $query_update);
        if ($statement) {
            echo "<script> 
                        swal.fire('Success!', 'Data updated successfully!', 'success')
                        </script>";
        }
    }
}
?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Cash type</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">All</a></li>
                                <li class="breadcrumb-item active">Cash type</li>
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
                            <h5 class="card-title mb-0 text-capitalize">Cash type List</h5>
                            <a class=" btn btn-sm btn-primary small float-end" data-bs-toggle="modal" data-bs-target="#myModal">
                                + Add Cash type</a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-sm dt-responsive table-responsive nowrap table-striped align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th data-ordering="true">No.</th>
                                            <th data-ordering="false"> type</th>
                                            <th data-ordering="false"> Visible</th>
                                            <th data-ordering="false">date updated</th>
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

                                        $query = "SELECT * FROM  `cash_inflow_type` ORDER BY `date_updated` DESC   ";


                                        $query_exec = mysqli_query($con, $query);



                                        while ($row = mysqli_fetch_array($query_exec)) {

                                            $id = "$row[id]";
                                            $cash_type = "$row[cash_type]";
                                            $visibility = "$row[visible]";
                                            $date = " $row[date_updated]";
                                        ?>
                                            <tr>

                                                <td> <?php echo $x; ?> </td>

                                                <td> <?php echo "{$cash_type}"; ?> </td>
                                                <td class="text-center"> <?php if ($visibility == 0) {
                                                                                echo '<i class="fa fa-eye text-primary"></i>';
                                                                            } else {
                                                                                echo '<i class="fa fa-eye-slash text-danger blinks"></i>';
                                                                            }; ?> </td>
                                                <td> <?php echo "<k class='small'> {$date}</k>"; ?> </td>

                                                <td>
                                                    <a class='btn btn-sm btn-primary  text-light edit-item-btn' data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
                                                        <i class='ri-pencil-line align-bottom fa-2 text-light '></i> Edit
                                                    </a>
                                                    <a class='btn btn-sm btn-danger text-light remove-item-btn' data-target="#modal_delete<?php echo $id ?>" data-toggle="modal">
                                                        <i class='ri-delete-bin-fill align-bottom me-2 text-light'></i> Delete
                                                    </a>

                                                </td>
                                            </tr>

                                            <!-- Modal for delete -->

                                            <!-- End for delete modal -->
                                            <div class="modal fade" id="modal_delete<?php echo $count ?>" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">System</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <center>
                                                                <h4>Are you sure you want to delete this row?</h4>
                                                            </center>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                                            <a type="button" class="btn btn-danger" href="delete.php?mem_id=<?php echo $fetch['id'] ?>">Yes</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>





                                            <!-- Modal for edit-->
                                            <!-- modal starts here -->
                                            <!-- The Modal -->

                                            <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog" aria-hidden="true">

                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Donation type</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form action="" method="post" enctype="multipart/form-data">
                                                                <div class="row">


                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="firstnameInput" class="form-label"> Cash type</label>
                                                                            <input type="text" class="form-control" value="<?php echo $row['cash_type']; ?>" id="firstnameInput" name="cash_type" required placeholder=" Enter cash origin">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12" hidden>
                                                                        <div class="mb-3">
                                                                            <label for="firstnameInput" hidden class="form-label"> id</label>
                                                                            <input type="text" class="form-control" value="<?php echo $row['id']; ?>" id="id" name="id" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="firstnameInput" class="form-label"> Visibility</label>
                                                                            <select class="form-select" name="visible" required>
                                                                                <option value='0' <?php echo (($visibility == 0) ? "selected" : "") ?>>Visible</option>
                                                                                <option value='1' <?php echo (($visibility == 1) ? "selected" : "") ?>>Hidden</option>
                                                                                <!-- <option></option> -->
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button> -->
                                                                    <div class="col-lg-12">
                                                                        <!-- <div class="hstack gap-2 justify-content-end"> -->
                                                                        <button type="submit" name="update" class="btn btn-primary">Update</button>

                                                                        <!-- </div> -->
                                                                    </div>
                                                                </div>
                                                                <!--end row-->
                                                            </form>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button> -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- modal edit ends here -->


                                        <?php
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


    <!-- api for deleting the cash type -->




    <!-- modal starts here -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Cash type</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">


                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="firstnameInput" class="form-label"> Cash type</label>
                                    <input type="text" class="form-control" id="firstnameInput" name="cash_type" required placeholder=" Enter cash origin" value="">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="firstnameInput" class="form-label"> Visibility</label>
                                    <select class="form-select" name="visible" required>
                                        <option value='0'>Visible</option>
                                        <option value='1'>Hidden</option>
                                        <!-- <option></option> -->
                                    </select>
                                </div>
                            </div>

                            <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button> -->
                            <div class="col-lg-12">
                                <!-- <div class="hstack gap-2 justify-content-end"> -->
                                <button type="submit" name="save_add" class="btn btn-primary">Add Donation</button>

                                <!-- </div> -->
                            </div>
                        </div>
                        <!--end row-->
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button> -->
                </div>

            </div>
        </div>
    </div>
    <!-- modal ends here -->

    <?php include "footer.php"; ?>