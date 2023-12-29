<?php include "header.php"; ?>

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Minible</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: green; font-size: 30px;"></i>
                                    </div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT SUM(volume_processed) FROM dashboard_tot_processed_volume");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $volume_processed = $result['SUM(volume_processed)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo number_format($volume_processed,2);?></span> kg</h4>
                                        <p class="text-muted mb-0">Total Processed Volume (kg)</p>
                                    </div>                                   
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: royalblue; font-size: 30px;"></i>
                                    </div>

                                    <?php
                                            include 'db.inc.php';
                                            $query1 = mysqli_query($conn, "SELECT SUM(volume_processed) FROM dashboard_tot_released_volume");
                                            while($result1 = mysqli_fetch_array($query1)): ?>
                                                <?php                                                            
                                                    $volume_released = $result1['SUM(volume_processed)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo number_format($volume_released,2);?></span> kg</h4>
                                        <p class="text-muted mb-0">Total Released Volume (kg)</p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: yellow; font-size: 30px;"></i>
                                    </div>
                                    <?php
                                            include 'db.inc.php';
                                            $query2 = mysqli_query($conn, "SELECT COUNT(trans_partner) FROM farmers_engaged_tothubpos");
                                            while($result2 = mysqli_fetch_array($query2)): ?>
                                                <?php                                                            
                                                    $farmers_engaged = $result2['COUNT(trans_partner)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo number_format($farmers_engaged);?></span></h4>
                                        <p class="text-muted mb-0">No. of Farmers Engaged</p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">

                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                    <i class="uil-graph-bar" style="color: crimson; font-size: 30px;"></i>
                                    </div>
                                    <?php
                                            include 'db.inc.php';
                                            $query3 = mysqli_query($conn, "SELECT COUNT(trans_partner) FROM vendors_engaged_tothubpos");
                                            while($result3 = mysqli_fetch_array($query3)): ?>
                                                <?php                                                            
                                                    $vendors_engaged = $result3['COUNT(trans_partner)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo number_format($vendors_engaged);?></span></h4>
                                        <p class="text-muted mb-0">No. of Market Channels Engaged</p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <h4 class="card-title mb-4">Processed Volume Per Week</h4>

                                  

                                    <div class="mt-3">   
                                        <div id="chart_div" style="width: 100%; height: 100%; max-width: 100%; max-height: 100%;"></div>
                                        <?php
                                            include 'db.inc.php';

                                            $sql = "SELECT week_num, SUM(volume_processed) as total_volume FROM dashboard_tot_processed_volume GROUP BY week_num";
                                            $result = mysqli_query($conn, $sql);

                                            $data_processed_volume = array();
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $data_processed_volume[] = $row;
                                            }

                                           // echo json_encode($data_processed_volume);
                                            ?>

                                            <textarea name="" id="data_processed_volume" style='display:none;' cols="30" rows="10"><?= json_encode($data_processed_volume) ?></textarea>

                                         


                                    </div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->

                        <div class="col-xl-4">
                           
                            <!-- end card-->

                            <div class="card">
                                <div class="card-body">
                                    
                                                
                                    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
                                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

                                    <h4 class="card-title mb-4">Details</h4>

                                    <div class="table-responsive">
                                                    <table id="myTable01" style="width:100%;" class="display table table-striped table-bordered wrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Week</th>
                                                                <th>Date</th>
                                                                <th>Delivered</th>
                                                              
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include 'db.inc.php';
                                                            $query4 = mysqli_query($conn,"SELECT week_num, trans_adate, volume_processed FROM dashboard_tot_processed_volume");
                                                            while($result4 = mysqli_fetch_array($query4)): ?>
                                                            <tr>
                                                                <td style="text-align: center;"><?php echo $result4 ['week_num'];?></td>  
                                                                <td style="text-align: center;"><?php echo date('M d, Y', strtotime($result4['trans_adate'])); ?></td> 
                                                                <td style="text-align: right;"><?php echo number_format($result4 ['volume_processed']);?> kg</td>                                                  
                                                            </tr>      
                                                            <?php endwhile; ?>                                                  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            
                                               
                                   
                                    <!-- end row-->

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end Col -->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <h4 class="card-title mb-4">Processed Volume Per Week</h4>

                                  

                                    <div class="mt-3">   
                                        <div id="chart_div" style="width: 100%; height: 100%; max-width: 100%; max-height: 100%;"></div>
                                        <?php
                                            include 'db.inc.php';

                                            $sql = "SELECT week_num, SUM(volume_processed) as total_volume FROM dashboard_tot_processed_volume GROUP BY week_num";
                                            $result = mysqli_query($conn, $sql);

                                            $data_processed_volume = array();
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $data_processed_volume[] = $row;
                                            }

                                           // echo json_encode($data_processed_volume);
                                            ?>

                                            <textarea name="" id="data_processed_volume" style='display:none;' cols="30" rows="10"><?= json_encode($data_processed_volume) ?></textarea>

                                         


                                    </div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->

                        <div class="col-xl-4">
                           
                            <!-- end card-->

                            <div class="card">
                                <div class="card-body">
                                    
                                                
                                    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
                                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

                                    <h4 class="card-title mb-4">Details</h4>

                                    <div class="table-responsive">
                                                    <table id="myTable01" style="width:100%;" class="display table table-striped table-bordered wrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Week</th>
                                                                <th>Date</th>
                                                                <th>Delivered</th>
                                                              
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include 'db.inc.php';
                                                            $query4 = mysqli_query($conn,"SELECT week_num, trans_adate, volume_processed FROM dashboard_tot_processed_volume");
                                                            while($result4 = mysqli_fetch_array($query4)): ?>
                                                            <tr>
                                                                <td style="text-align: center;"><?php echo $result4 ['week_num'];?></td>  
                                                                <td style="text-align: center;"><?php echo date('M d, Y', strtotime($result4['trans_adate'])); ?></td> 
                                                                <td style="text-align: right;"><?php echo number_format($result4 ['volume_processed']);?> kg</td>                                                  
                                                            </tr>      
                                                            <?php endwhile; ?>                                                  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            
                                               
                                   
                                    <!-- end row-->

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end Col -->
                    </div>
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="#">Locations</a>
                                                <a class="dropdown-item" href="#">Revenue</a>
                                                <a class="dropdown-item" href="#">Join Date</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-title mb-4">Top Users</h4>

                                    <div data-simplebar style="max-height: 339px;">
                                        <div class="table-responsive">
                                            <table class="table table-borderless table-centered table-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 20px;"><img src="assets/images/users/avatar-4.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Glenn Holden</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Nevada</p>
                                                        </td>
                                                        <td><span class="badge bg-danger-subtle text-danger font-size-12">Cancel</span></td>
                                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$250.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-5.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Lolita Hamill</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Texas</p>
                                                        </td>
                                                        <td><span class="badge bg-success-subtle text-success font-size-12">Success</span></td>
                                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$110.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-6.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Robert Mercer</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                        </td>
                                                        <td><span class="badge bg-info-subtle text-info font-size-12">Active</span></td>
                                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$420.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Montana</p>
                                                        </td>
                                                        <td><span class="badge bg-warning-subtle text-warning font-size-12">Pending</span></td>
                                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-8.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Colorado</p>
                                                        </td>
                                                        <td><span class="badge bg-info-subtle text-info font-size-12">Active</span></td>
                                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-2.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Marie Kim</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> Australia</p>
                                                        </td>
                                                        <td><span class="badge bg-success-subtle text-success font-size-12">Success</span></td>
                                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-danger" data-feather="trending-down"></i>$120.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/users/avatar-1.jpg" class="avatar-xs rounded-circle " alt="..."></td>
                                                        <td>
                                                            <h6 class="font-size-15 mb-1 fw-normal">Sonya Henshaw</h6>
                                                            <p class="text-muted font-size-13 mb-0"><i class="mdi mdi-map-marker"></i> India</p>
                                                        </td>
                                                        <td><span class="badge bg-danger-subtle text-danger font-size-12">Cancel</span></td>
                                                        <td class="text-muted fw-semibold text-end"><i class="icon-xs icon me-2 text-success" data-feather="trending-up"></i>$112.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- enbd table-responsive-->
                                    </div>
                                    <!-- data-sidebar-->
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">Recent<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                                                <a class="dropdown-item" href="#">Recent</a>
                                                <a class="dropdown-item" href="#">By Users</a>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title mb-4">Recent Activity</h4>

                                    <ol class="activity-feed mb-0 ps-2" data-simplebar style="max-height: 339px;">
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <p class="text-muted mb-1 font-size-13">Today<small class="d-inline-block ms-1">12:20 pm</small></p>
                                                <p class="mb-0">Andrei Coman magna sed porta finibus, risus posted a new article: <span class="text-primary">Forget UX
                                                            Rowland</span></p>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <p class="text-muted mb-1 font-size-13">22 Jul, 2020 <small class="d-inline-block ms-1">12:36 pm</small></p>
                                            <p class="mb-0">Andrei Coman posted a new article: <span class="text-primary">Designer Alex</span></p>
                                        </li>
                                        <li class="feed-item">
                                            <p class="text-muted mb-1 font-size-13">18 Jul, 2020 <small class="d-inline-block ms-1">07:56 am</small></p>
                                            <p class="mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace Commented <span class="text-primary"> Developer Moreno</span></p>
                                        </li>
                                        <li class="feed-item">
                                            <p class="text-muted mb-1 font-size-13">10 Jul, 2020 <small class="d-inline-block ms-1">08:42 pm</small></p>
                                            <p class="mb-0">Zack Wetass, Chris combined Commented <span class="text-primary">UX Murphy</span></p>
                                        </li>

                                        <li class="feed-item">
                                            <p class="text-muted mb-1 font-size-13">23 Jun, 2020 <small class="d-inline-block ms-1">12:22 am</small></p>
                                            <p class="mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace Commented <span class="text-primary"> Developer Moreno</span></p>
                                        </li>
                                        <li class="feed-item pb-1">
                                            <p class="text-muted mb-1 font-size-13">20 Jun, 2020 <small class="d-inline-block ms-1">09:48 pm</small></p>
                                            <p class="mb-0">Zack Wetass, Chris combined Commented <span class="text-primary">UX Murphy</span></p>
                                        </li>

                                    </ol>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">

                                    <div class="float-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">Monthly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton4">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title">Social Source</h4>

                                    <div class="text-center">
                                        <div class="avatar-sm mx-auto mb-4">
                                            <span class="avatar-title rounded-circle bg-primary-subtle font-size-24">
                                                        <i class="mdi mdi-facebook text-primary"></i>
                                                    </span>
                                        </div>
                                        <p class="font-16 text-muted mb-2"></p>
                                        <h5><a href="#" class="text-reset ">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                                        <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus tincidunt.</p>
                                        <a href="#" class="text-reset font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-16">
                                                                <i class="mdi mdi-facebook text-white"></i>
                                                            </span>
                                                </div>
                                                <h5 class="font-size-15">Facebook</h5>
                                                <p class="text-muted mb-0">125 sales</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-info font-size-16">
                                                                <i class="mdi mdi-twitter text-white"></i>
                                                            </span>
                                                </div>
                                                <h5 class="font-size-15">Twitter</h5>
                                                <p class="text-muted mb-0">112 sales</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-pink font-size-16">
                                                                <i class="mdi mdi-instagram text-white"></i>
                                                            </span>
                                                </div>
                                                <h5 class="font-size-15">Instagram</h5>
                                                <p class="text-muted mb-0">104 sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3 text-center">
                                        <a href="#" class="text-primary font-size-14 fw-medium">View All Sources <i class="mdi mdi-chevron-right"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Latest Transaction</h4>
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="width: 20px;">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th>Order ID</th>
                                                    <th>Billing Name</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>Payment Status</th>
                                                    <th>Payment Method</th>
                                                    <th>View Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2540</a> </td>
                                                    <td>Neal Matthews</td>
                                                    <td>
                                                        07 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $400
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                                            <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2541</a> </td>
                                                    <td>Jamal Burnett</td>
                                                    <td>
                                                        07 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $380
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-danger-subtle text-danger font-size-12">Chargeback</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="customCheck4">
                                                            <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2542</a> </td>
                                                    <td>Juan Mitchell</td>
                                                    <td>
                                                        06 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $384
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="customCheck5">
                                                            <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2543</a> </td>
                                                    <td>Barry Dick</td>
                                                    <td>
                                                        05 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $412
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="customCheck6">
                                                            <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2544</a> </td>
                                                    <td>Ronald Taylor</td>
                                                    <td>
                                                        04 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $404
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-warning-subtle text-warning font-size-12">Refund</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input" id="customCheck7">
                                                            <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2545</a> </td>
                                                    <td>Jacob Hunter</td>
                                                    <td>
                                                        04 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $392
                                                    </td>
                                                    <td>
                                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                                View Details
                                                            </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


<?php include "footer.php"; ?>