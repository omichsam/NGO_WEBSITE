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
                        <h4 class="mb-sm-0">Site Donation</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Donation</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">

                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                        <i class="fas fa-home"></i>Add New Donation
                                    </a>
                                </li>


                            </ul>
                        </div>



                        <?php
                        $status = "OK"; //initial status
                        $msg = "";
                        if (isset($_POST['save'])) {

                            //    month=January&year=2023&cash+type=20
                            $month = mysqli_real_escape_string($con, $_POST['month']);
                            $year = mysqli_real_escape_string($con, $_POST['year']);
                            $cash_type = mysqli_real_escape_string($con, $_POST['cash_type']);
                            $amount = mysqli_real_escape_string($con, $_POST['amount']);



                            if ($status == "OK") {
                                $qb = mysqli_query($con, "update sitecontact set phone1='$phone1', phone2='$phone2', email1='$email1',email2='$email2',longitude='$longitude',latitude='$latitude' where id=1");

                                if ($qb) {
                                    $errormsg = "
                           <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                   Contact Data Updated successfully.
                                     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>"; //printing error if found in validation

                                }
                            } elseif ($status !== "OK") {
                                $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                     " . $msg . " <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation


                            } else {
                                $errormsg = "  <div class='alert alert-danger alert-dismissible alert-outline fade show'>
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
                                    $query = "SELECT * FROM sitecontact where id=1 ";


                                    $result = mysqli_query($con, $query);
                                    $i = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        $phone1 = "$row[phone1]";
                                        $phone2 = "$row[phone2]";
                                        $email1 = "$row[email1]";
                                        $email2 = "$row[email2]";
                                        $longitude = "$row[longitude]";
                                        $latitude = "$row[latitude]";
                                    }
                                    ?>




                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        print $errormsg;
                                    }
                                    ?>
                                    <form action="" method="get" enctype="multipart/form-data">
                                        <div class="row">


                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label"> Month</label>
                                                    <select name="month" class="form-select" aria-label="size 3 select example" required>
                                                        <?php for ($m = 1; $m <= 12; ++$m) {
                                                            $month_label = date('F', mktime(0, 0, 0, $m, 1));
                                                        ?>
                                                            <option value="<?php echo $month_label; ?>"><?php echo $month_label; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label"> Year</label>


                                                    <select class="form-select" aria-label="size 3 select example" name="year" required>
                                                        <?php
                                                        $year = date('Y');
                                                        $min = $year - 5;
                                                        $max = $year;
                                                        for ($i = $max; $i >= $min; $i--) {
                                                            echo '<option value=' . $i . '>' . $i . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>








                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label"> Amount</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Ksh.</span>
                                                        <input type="number" name="amount" class="form-control" id="firstnameInput" aria-label="Amount (to the nearest Kenyan shilling)" required>
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $query = "SELECT * FROM `cash_inflow_type`";
                                            $result = $con->query($query);
                                            if ($result->num_rows > 0) {
                                                $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                            }
                                            ?>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="firstnameInput" class="form-label"> Cash-type</label>
                                                    <select name="cash_type" class="form-select" aria-label="Default select example" required>
                                                        <option value="">select donation type</option>
                                                        <?php
                                                        foreach ($options as $option) {
                                                        ?>
                                                            <option value="<?php echo $option['id']; ?>"><?php echo $option['cash_type']; ?> </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" id="firstnameInput" name="cash_type" value=""> -->
                                                </div>
                                            </div>








                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" name="save" class="btn btn-primary">Add Donation</button>

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


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include "footer.php"; ?>