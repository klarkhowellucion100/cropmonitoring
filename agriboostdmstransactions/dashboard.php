


 <!-- Begin page -->
 <div id="layout-wrapper">

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="icons/icon192.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="icons/icon192.png" alt="" height="20">
                        </span>
                    </a>

                <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="icons/icon192.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="icons/icon192.png" alt="" height="20">
                        </span>
                    </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="uil-search"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">

           
            

          


            

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="icons/icon192.png"
                            alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?php echo $userprofile;?></span>
                        <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                    </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <!--<a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Settings</span> <span class="badge bg-success-subtle text-success rounded-pill mt-1 ms-2">03</span></a>
                    <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Lock screen</span></a>-->
                    <a class="dropdown-item" href="agriboostdmstransactions/logoutprocess.php"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                </div>
            </div>

        

        </div>
    </div>
    <div class="container-fluid">
        <div class="topnav">

            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="home.html">
                                    <i class="uil-home-alt me-2"></i> Dashboard
                                </a>
                        </li>

                        <?php if($component=="Admin" || $component=="AgriBloom"){?>
                        <li class="nav-item">
                            <a class="nav-link" href="farmerregistration.html">
                                    <i class="uil-apps me-2"></i> AgriBloom
                                </a>
                        </li>
                        <?php } ?> 

                        <?php if($component=="Admin" || $component=="AgriMart"){?>
                        <li class="nav-item">
                            <a class="nav-link" href="vendorregistration.html">
                                    <i class="uil-apps me-2"></i> AgriMart
                                </a>
                        </li>
                        <?php } ?> 

                        <?php if($component=="Admin" || $component=="AgriComms"){?>
                        <li class="nav-item">
                            <a class="nav-link" href="eventsagricomm.html">
                                    <i class="uil-apps me-2"></i> AgriComms
                                </a>
                        </li>
                        <?php } ?> 

                        <?php if($component=="Admin"){?>
                        <li class="nav-item">
                            <a class="nav-link" href="userapproval.html">
                                    <i class="uil-apps me-2"></i> Admin
                                </a>
                        </li>
                        <?php } ?> 

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

         

            <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Search</h4>
                                    <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-xl-3">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="year_filter">Year</label>
                                                                <select id="year_filter" class="form-select">
                                                                    <option value="2023">2023</option>
                                                                    <!-- Add more options as needed -->
                                                                </select>    
                                                            </div>                                        
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="from_month">From</label>
                                                                <select id="from_month" class="form-select">
                                                                <option value="1">January</option>
                                                                    <option value="2">February</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <!-- Add more options as needed -->
                                                                </select>    
                                                            </div>                                        
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="to_month">To:</label>
                                                                <select id="to_month" class="form-select">
                                                                <option value="1">January</option>
                                                                    <option value="2">February</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <!-- Add more options as needed -->
                                                                </select>    
                                                            </div>                                        
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dateto">Filter</label>
                                                                <button type="button" id='filtertop' onclick="filterChartData()" class="btn btn-primary form-control">Filter</button>
                                                            </div>                                        
                                                        </div>
                                                    </div>


                                                   

                                                </div>
                                           
                                        </div>

                                    </div>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->

                <div id='dashboardfetchajax'>
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: green; font-size: 30px;"></i>
                                    </div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT week_num, month_num, year_num, month_name, SUM(volume_processed) FROM dashboard_tot_processed_volume");
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
                                            $query1 = mysqli_query($conn, "SELECT week_num, month_num, year_num, month_name, SUM(volume_processed) FROM dashboard_tot_released_volume");
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
                                            $query2 = mysqli_query($conn, "SELECT COUNT(DISTINCT trans_partner) FROM farmers_engaged_tothubpos");
                                            while($result2 = mysqli_fetch_array($query2)): ?>
                                                <?php                                                            
                                                    $farmers_engaged = $result2['COUNT(DISTINCT trans_partner)'];                                                               
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
                                            $query3 = mysqli_query($conn, "SELECT COUNT(DISTINCT trans_partner) FROM vendors_engaged_tothubpos");
                                            while($result3 = mysqli_fetch_array($query3)): ?>
                                                <?php                                                            
                                                    $vendors_engaged = $result3['COUNT(DISTINCT trans_partner)'];                                                               
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
                </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="card-title mb-4">Processed Volume Per Week</h4>

                          

                            <div class="mt-3"> <div id="chart_div" style="width: 100%; height: 400px; max-width: 100%; max-height: 400%;"></div>
                                        <?php
                                            include 'db.inc.php';

                                            $sql = "SELECT month_num, month_name, week_num, year_num, SUM(volume_processed) as total_volume FROM dashboard_tot_processed_volume GROUP BY week_num";
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
                                                            $query4 = mysqli_query($conn,"SELECT trans_adate, week_num, volume_processed FROM dashboard_tot_processed_volume");
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

                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end Col -->
            </div>
            <!-- end row-->

            
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="card-title mb-4">Buyers Order, Farmers Commitment, Delivered Volume</h4>

                          

                            <div class="mt-3"> <div id="chart_div01" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                                        <?php
                                            include 'db.inc.php';

                                            $sql001 = "SELECT month_num, month_name, week_num, year_num, SUM(actual_delivery) as actual_delivery, SUM(farmer_commitment) as farmer_commitment, SUM(vendor_orders) as vendor_orders FROM orders_commitment_actual GROUP BY week_num";
                                            $result001 = mysqli_query($conn, $sql001);

                                            $order_commit_actual = array();
                                            while ($row001 = mysqli_fetch_assoc($result001)) {
                                                $order_commit_actual[] = $row001;
                                            }

                                           //echo json_encode($order_commit_actual);
                                            ?>

                                            <textarea name="" id="order_commit_actual" style='display:none;' cols="30" rows="10"><?= json_encode($order_commit_actual) ?></textarea>
                            </div>
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="card-title mb-4">Famers NPS by Month</h4>

                        
                               <div id="chart_div03" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                                    include 'db.inc.php';

                                    $sql003 = "SELECT month_num,year_num,month_name,((SUM(rate_five) - (SUM(rate_one) + SUM(rate_two) + SUM(rate_three))) / SUM(total_rating)) * 100 AS percent_rating 
                                FROM 
                                    farmer_nps 
                                GROUP BY 
                                    month_num, year_num, month_name
                                ";
                                    $result003 = mysqli_query($conn, $sql003);

                                    $farmer_nps = array();
                                    while ($row003 = mysqli_fetch_assoc($result003)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row003['percent_rating'] = number_format($row003['percent_rating'], 2); // Format to 2 decimal places
                                        $farmer_nps[] = $row003;
                                    }

                                    //echo json_encode($farmer_nps);
                                    ?>


                                            <textarea name="" id="farmer_nps" style='display:none;' cols="30" rows="10"><?= json_encode($farmer_nps) ?></textarea>
                          
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           

                            <h4 class="card-title mb-4">Buyers NPS by Month</h4>

                            <div id="chart_div04" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                                    include 'db.inc.php';

                                    $sql004 = "SELECT month_num,year_num,month_name,((SUM(rate_five) - (SUM(rate_one) + SUM(rate_two) + SUM(rate_three))) / SUM(total_rating)) * 100 AS percent_rating 
                                FROM 
                                    vendor_nps 
                                GROUP BY 
                                    month_num, year_num, month_name
                                ";
                                    $result004 = mysqli_query($conn, $sql004);

                                    $vendor_nps = array();
                                    while ($row004 = mysqli_fetch_assoc($result004)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row004['percent_rating'] = number_format($row004['percent_rating'], 2); // Format to 2 decimal places
                                        $vendor_nps[] = $row004;
                                    }

                                    //echo json_encode($vendor_nps);
                                    ?>


                                            <textarea name="" id="vendor_nps" style='display:none;' cols="30" rows="10"><?= json_encode($vendor_nps) ?></textarea>
                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="card-title mb-4">Active Farmers by Month</h4>

                        
                               <div id="chart_div05" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                                    include 'db.inc.php';

                                    $sql005 = "SELECT year_num, month_num, month_name, COUNT(DISTINCT trans_partner) AS unique_partner_count FROM active_farmers_perdate GROUP BY month_num ORDER BY month_num, year_num,month_name;";
                                    $result005 = mysqli_query($conn, $sql005);

                                    $active_farmers = array();
                                    while ($row005 = mysqli_fetch_assoc($result005)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row005['unique_partner_count'] = number_format($row005['unique_partner_count']); // Format to 2 decimal places
                                        $active_farmers[] = $row005;
                                    }

                                    //echo json_encode($farmer_nps);
                                    ?>


                                            <textarea name="" id="active_farmers" style='display:none;' cols="30" rows="10"><?= json_encode($active_farmers) ?></textarea>
                          
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           

                            <h4 class="card-title mb-4">Active Buyers by Month</h4>

                            <div id="chart_div06" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                                    include 'db.inc.php';

                                    $sql006 = "SELECT year_num, month_num, month_name, COUNT(DISTINCT trans_partner) AS unique_partner_count FROM active_vendors_perdate GROUP BY month_num ORDER BY month_num, year_num,month_name;";
                                    $result006 = mysqli_query($conn, $sql006);

                                    $active_vendors = array();
                                    while ($row006 = mysqli_fetch_assoc($result006)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row006['unique_partner_count'] = number_format($row006['unique_partner_count']); // Format to 2 decimal places
                                        $active_vendors[] = $row006;
                                    }

                                    //echo json_encode($farmer_nps);
                                    ?>


                                            <textarea name="" id="active_vendors" style='display:none;' cols="30" rows="10"><?= json_encode($active_vendors) ?></textarea>
                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="card-title mb-4">Median of Farmer's Weekly Income</h4>

                        
                               <div id="chart_div07" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                                    include 'db.inc.php';

                                    $sql007 = "SELECT month_num, year_num, month_name, median_sales FROM farmer_average_weekly_median ORDER BY month_num";
                                    $result007 = mysqli_query($conn, $sql007);

                                    $median_sales = array();
                                    while ($row007 = mysqli_fetch_assoc($result007)) {
                                        $median_sales[] = $row007;
                                    }

                                        //echo json_encode($median_sales);
                                    ?>


                                            <textarea name="" id="median_sales" style='display:none;' cols="30" rows="10"><?= json_encode($median_sales) ?></textarea>
                          
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           

                            <h4 class="card-title mb-4">Monthly Volume Weighted Price</h4>

                            <div id="chart_div08" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                            <div id="legend_div08" style="margin-top: 20px;"></div>
                               <?php
                                    include 'db.inc.php';

                                    $sql008 = "SELECT year_num, month_num, month_name, agrihub_weighted_price, other_weighted_price, price_diff  FROM volume_weighed_price_permonth ORDER BY month_num, year_num,month_name;";
                                    $result008 = mysqli_query($conn, $sql008);

                                    $weighed_volume = array();
                                    while ($row008 = mysqli_fetch_assoc($result008)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row008['agrihub_weighted_price'] = number_format($row008['agrihub_weighted_price'],2); // Format to 2 decimal places
                                        $row008['other_weighted_price'] = number_format($row008['other_weighted_price'],2); // Format to 2 decimal places
                                        $row008['price_diff'] = number_format($row008['price_diff'],2); // Format to 2 decimal places
                                        $weighed_volume[] = $row008;
                                    }

                                   // echo json_encode($weighed_volume);
                                    ?>


                                            <textarea name="" id="weighed_volume" style='display:none;' cols="30" rows="10"><?= json_encode($weighed_volume) ?></textarea>
                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            

            

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © AgriBOOST DMS.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">KlarkSites</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!-- Right Sidebar -->
<div class="right-bar">
<div data-simplebar class="h-100">
    <div class="rightbar-title d-flex align-items-center p-3">

        <h5 class="m-0 me-2">Settings</h5>

        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
    </div>

    <!-- Settings -->
    <hr class="m-0" />

    <div class="p-4">
        <h6 class="mb-3">Layout</h6>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
            <label class="form-check-label" for="layout-vertical">Vertical</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
            <label class="form-check-label" for="layout-horizontal">Horizontal</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
            <label class="form-check-label" for="layout-mode-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
            <label class="form-check-label" for="layout-mode-dark">Dark</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
            <label class="form-check-label" for="layout-width-fuild">Fluid</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
            <label class="form-check-label" for="layout-width-boxed">Boxed</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
            <label class="form-check-label" for="topbar-color-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
            <label class="form-check-label" for="topbar-color-dark">Dark</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
            <label class="form-check-label" for="sidebar-size-default">Default</label>
        </div>
        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'small')">
            <label class="form-check-label" for="sidebar-size-compact">Compact</label>
        </div>
        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
            <label class="form-check-label" for="sidebar-color-light">Light</label>
        </div>
        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
        </div>
        <div class="form-check sidebar-setting">
            <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-colored" value="colored" onchange="document.body.setAttribute('data-sidebar', 'colored')">
            <label class="form-check-label" for="sidebar-color-colored">Colored</label>
        </div>

        <h6 class="mt-4 mb-3 pt-2">Direction</h6>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
            <label class="form-check-label" for="layout-direction-ltr">LTR</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
            <label class="form-check-label" for="layout-direction-rtl">RTL</label>
        </div>

    </div>

</div>
<!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>