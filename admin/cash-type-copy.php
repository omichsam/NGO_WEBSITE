<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<?php
if (isset($_POST['save_add'])) {


    $cash_type = mysqli_real_escape_string($con, $_POST['cash_type']);
    $visibility = mysqli_real_escape_string($con, $_POST['visibility']);

    if (strlen($cash_type) > 3) {
        $query = "INSERT INTO `cash_inflow_type`( `cash_type`) VALUES ('$cash_type')";
        $statement = mysqli_query($con, $query);
        if ($statement) {
            echo "<script>
            swal.fire('success', 'Cash type inserted successfully', 'success')
            </script>";
        }
    } else {
        echo "<script>
        swal.fire( 'error', 'Cash type cannot be empty', 'error')
         </script>";
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
                            <table id="example" class="table table-bordered table-striped dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th data-ordering="true">No.</th>
                                        <th data-ordering="false"> type</th>
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

                                    $q = "SELECT * FROM  `cash_inflow_type` ORDER BY `id` DESC  ";


                                    $r123 = mysqli_query($con, $q);



                                    while ($ro = mysqli_fetch_array($r123)) {
                                        $id = "$ro[id]";
                                        $cash_type = "$ro[cash_type]";
                                        $date = " $ro[date_updated]";
                                    ?>
                                        <tr>

                                            <td> <?php echo $x; ?> </td>
                                            <td> <?php echo "<b>{$cash_type}</b>"; ?> </td>
                                            <td> <?php echo "<b class='small'> {$date}</b>"; ?> </td>


                                            <td class="text-center">
                                                <?php echo "
                                            <a bt href='editblog.php?id=$id' hidden class='btn btn-sm btn-border-primary text-success edit-item-btn'>
                                                    <i class='ri-pencil-fill align-bottom me-2 text-primary'>
                                            </i> Edit</a></li>
                                                           
                                            <a href='deleteblog.php?id=$id' hidden class='btn btn-sm btn-border-primary text-danger remove-item-btn'>
                                                        <i class='ri-delete-bin-fill align-bottom me-2 text-danger'></i> Delete
                                            </a>
                                            <a h hidden  data-id='" . $ro['id'] . "' id='delete_id' class='btn border-danger btn-sm'> <i class='ri-delete-bin-fill align-bottom me-2 text-danger'></i>delete</a>
                                            <a hidden href='#deleteEmployeeModal' class='delete' data-id='<?php echo $id; ?>' data-toggle='modal'><i class='ri-delete-bin-fill text-danger' data-toggle='tooltip'
                                              title='Delete'></i></a>
                                            <a class=' btn btn-sm btn-primary small float-end' hidden data-id='<?php echo $id; ?>' data-bs-toggle='modal' data-bs-target='#myDeleteModal<?php echo $id; ?>'><i class='ri-delete-bin-fill text-danger' data-toggle='tooltip'
                                          title='Delete'></i></a>
                                          <button type='button' class='btn btn-danger' data-target='#modal_delete<?php echo $id; ?>' data-toggle='modal'><span class='fa fa-trash'></span>
                                 <!-- Delete -->
                             </button>

</form>


<?php       
                                                </td> 
				                         </tr>";
                                                $x++;


                                                ?>
                                                <!-- Delete Modal HTML -->
                                                <!-- <div class="modal fade" id="myDeleteModal<?php echo $id; ?>"> -->
                                                <div class="modal fade " id="viewModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form>
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Delete Cash type </h4>
                                                                    <a href="" type="btn" class="close" data-dismiss="modal" aria-hidden="true"></a>
                                                                    <!-- <button type="btn" ><i class="fa fa-times"></i></button> -->
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidde" id="id_d" name="id" class="form-control">
                                                                    <p>Are you sure you want to delete these Records?</p>
                                                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->
                                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-danger" id="delete">Delete</button>



                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            <?php
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




        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- api for deleting the cash type -->

    <!-- Modal for delete -->



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
                                    <input type="text" class="form-control" requirsed id="firstnameInput" name="cash_type" placeholder=" Enter cash origin" value="">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="firstnameInput" class="form-label"> Visibility</label>
                                    <select class="form-select" name="visibility">
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