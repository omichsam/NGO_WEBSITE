<?php
include "header.php";
$username = $_SESSION['username'];
?>
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
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">

                    <div class="bh-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Hello, <?php print $username; ?>!</h4>
                                        <p class="text-muted mb-0">Welcome back to YKF dashboard.</p>
                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">

                                        </form>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row bh-100">
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                    <i class="ri-git-merge-fill"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <?php
                                                $result = mysqli_query($con, "SELECT count(*) FROM `events`");
                                                $row = mysqli_fetch_row($result);
                                                $numrows = $row[0];

                                                ?>

                                                <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Events</p>
                                                <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $numrows; ?>"></span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                    <i class="ri-server-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <?php
                                                $result = mysqli_query($con, "SELECT count(*) FROM `events` WHERE `date` >= CURDATE() ");
                                                $rowx = mysqli_fetch_row($result);
                                                $nux = $rowx[0];

                                                ?>
                                                <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Upcoming Events</p>
                                                <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $nux; ?>"></span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                    <i class="ri-pages-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <?php
                                                $result = mysqli_query($con, "SELECT count(*) FROM `events` WHERE `date` <= CURDATE() ");
                                                $rod = mysqli_fetch_row($result);
                                                $nud = $rod[0];

                                                ?>
                                                <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Done Events</p>
                                                <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $nud; ?>"></span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <!-- <hr> -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                    <i class="ri-pages-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <?php
                                                $result = mysqli_query($con, "SELECT count(*) FROM blog");
                                                $rod = mysqli_fetch_row($result);
                                                $nud = $rod[0];

                                                ?>
                                                <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Causes</p>
                                                <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $nud; ?>"></span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                    <i class="ri-pages-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <?php
                                                $result = mysqli_query($con, "SELECT count(*) FROM blog");
                                                $rod = mysqli_fetch_row($result);
                                                $nud = $rod[0];

                                                ?>
                                                <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Testimonials</p>
                                                <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $nud; ?>"></span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                    <i class="ri-pages-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <?php
                                                $result = mysqli_query($con, "SELECT count(*) FROM blog");
                                                $rod = mysqli_fetch_row($result);
                                                $nud = $rod[0];

                                                ?>
                                                <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Team members</p>
                                                <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $nud; ?>"></span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                    <i class="ri-pages-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <?php
                                                $result = mysqli_query($con, "SELECT count(*) FROM blog");
                                                $rod = mysqli_fetch_row($result);
                                                $nud = $rod[0];

                                                ?>
                                                <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Blog</p>
                                                <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $nud; ?>"></span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                    <i class="ri-pages-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <?php
                                                $result = mysqli_query($con, "SELECT count(*) FROM blog");
                                                $rod = mysqli_fetch_row($result);
                                                $nud = $rod[0];

                                                ?>
                                                <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Blog</p>
                                                <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $nud; ?>"></span></h4>
                                            </div>

                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div>


                        <!-- start of the upcoming events -->
                        <div class="row ">
                            <div class="col-lg-6 col-md-6">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Upcoming events</h5>
                                    </div>
                                    <div class="card-body">
                                        <table id="examples" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>N.O</th>
                                                    <th data-ordering="false">Service Title</th>
                                                    <th>Time remaining</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                function remaining_days($date1)
                                                {
                                                    //Calculate difference
                                                    $diff = strtotime($date1) - time(); //time returns current time in seconds
                                                    $days = floor($diff / (60 * 60 * 24)); //seconds/minute*minutes/hour*hours/day)
                                                    $hours = round(($diff - $days * 60 * 60 * 24) / (60 * 60));

                                                    //Report
                                                    // echo "$days days $hours hours remain<br />";
                                                    // $now = strtotime(time());
                                                    if ($days > 0) {
                                                        return "<center class=' text-success font-weight-bold small'><b>{$days} days {$hours} hours</b></center> ";
                                                    } else {
                                                        return "<center class='text-danger font-weight-bold'><b>Completed</b></center>";
                                                    }
                                                }
                                                ?>

                                                <?php
                                                $q = "SELECT * FROM  `events` WHERE `date` >= CURDATE() ORDER BY id   DESC  ";

                                                $x = 1;

                                                $r123 = mysqli_query($con, $q);

                                                if (mysqli_num_rows($r123) > 0) {

                                                    while ($ro = mysqli_fetch_array($r123)) {

                                                        $id = "$ro[id]";
                                                        $event_title = "$ro[event_title]";
                                                        $event_county = "$ro[county]";
                                                        $date = $ro['date'];
                                                        // $date = date("M-d-Y", strtotime($r)o['date']));
                                                        // $date = strtotime($ro['date']) - strtotime(time());

                                                        $xdays = remaining_days($date);
                                                ?>

                                                        <tr>
                                                            <td><?PHP echo $x; ?></td>
                                                            <td><?PHP echo $event_title; ?></td>
                                                            <td><?PHP echo $xdays; ?></td>
                                                        </tr>

                                                <?PHP
                                                        $x++;
                                                    }
                                                } else {
                                                    echo "<td class='text-danger'></td>";
                                                    echo "<td class='text-danger text-center'>no data avaialble</td>";
                                                }
                                                ?>




                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6">

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">monthly donation</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="chartContainer" style="height: 280px; width: 100%;"></div>
                                        <!-- <div id="myChart" style="max-width:auto; height:auto"></div> -->

                                        <!-- <script>
                                            google.charts.load('current', {
                                                'packages': ['corechart']
                                            });
                                            google.charts.setOnLoadCallback(drawChart);

                                            function drawChart() {
                                                var data = google.visualization.arrayToDataTable([
                                                    ['Contry', 'Sh(k)'],
                                                    ['Jan', 105],
                                                    ['Feb', 49],
                                                    ['Mar', 64],
                                                    ['Apr', 84],
                                                    ['May', 35]
                                                ]);

                                                var options = {
                                                    title: 'Monthly donation'
                                                };

                                                var chart = new google.visualization.BarChart(document.getElementById('myChart'));
                                                chart.draw(data, options);
                                            }
                                        </script> -->
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6">

                                <div class="card">
                                    <div class="card-header" hidden>
                                        <h5 class="card-title mb-0">Calendar</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id='calendar'></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->


            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php include "footer.php"; ?>