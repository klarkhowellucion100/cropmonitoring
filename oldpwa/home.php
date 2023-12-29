<?php include 'heading.php'; ?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>AgriBOOST Data Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="icons/icon192.png">

    <!-- Bootstrap Css -->
    <link href="function/dashed/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="function/dashed/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="function/dashed/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
       
    <link href="function/datatable/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="function/datatable/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        
    <!-- Responsive datatable examples -->
    <link href="function/datatable/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script>
    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"> </script>
  
    <link rel="apple-touch-icon" href="icons/icon192.png">
    <link rel="manifest" href="manifest.json">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body data-layout="horizontal" data-topbar="colored">

 
  




<style>
        /* Styles for the loader container */
        .loader-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }
  
        /* Styles for the loader GIF image */
        .loader {
            width: 100px; /* Adjust the width and height as needed */
            height: 100px;
        }
    </style>
<!-- Loader Container -->
<div class="loader-container" id="loader-container">
        <img src="icons/loader.gif" alt="Loader" class="loader">
    </div>

    <script>
        // Show the loader while the page is loading
        document.addEventListener("DOMContentLoaded", function () {
            // Display the loader container
            const loaderContainer = document.getElementById("loader-container");
            loaderContainer.style.display = "flex"; // You can also use "block" if you prefer

            // Hide the loader when the page is fully loaded
            window.addEventListener("load", function () {
                loaderContainer.style.display = "none";
            });
        });
    </script>




 <!-- Begin page -->
 <div id="layout-wrapper">

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="home.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="icons/icon192.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="icons/icon192.png" alt="" height="20">
                        </span>
                    </a>

                <a href="home.php" class="logo logo-light">
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
                            <a class="nav-link" href="home.php">
                                    <i class="uil-home-alt me-2"></i> Dashboard
                                </a>
                        </li>

                        <?php if($component=="Admin" || $component=="AgriBloom"){?>
                        <li class="nav-item">
                            <a class="nav-link" href="farmerregistration.php">
                                    <i class="uil-apps me-2"></i> AgriBloom
                                </a>
                        </li>
                        <?php } ?> 

                        <?php if($component=="Admin" || $component=="AgriMart"){?>
                        <li class="nav-item">
                            <a class="nav-link" href="vendorregistration.php">
                                    <i class="uil-apps me-2"></i> AgriMart
                                </a>
                        </li>
                        <?php } ?> 

                        <?php if($component=="Admin" || $component=="AgriComms"){?>
                        <li class="nav-item">
                            <a class="nav-link" href="eventsagricomm.php">
                                    <i class="uil-apps me-2"></i> AgriComms
                                </a>
                        </li>
                        <?php } ?> 

                        <?php if($component=="Admin"){?>
                        <li class="nav-item">
                            <a class="nav-link" href="userapproval.php">
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
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
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
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
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

             
<!--########################################################################################### START DASHBOARD AJAX LINE ######################################################################-->
<div id='dashboardfetchajaxlines'>
            <div class="row">

                <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Processed Volume</h4>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#navpills-weekly" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Weekly</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#navpills-monthly" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Monthly</span>
                                            </a>
                                        </li>                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="navpills-weekly" role="tabpanel">
                                            
                                            <h4 class="card-title mb-4">Sum of Weekly Delivery</h4>

                                            <div class="mt-3"> 
                                            <div id="chart_div" style="width: 100%; height: 400px; max-width: 100%; max-height: 400%;"></div>
                                                        <?php
                                                            include 'agriboostdmstransactions/db.inc.php';

                                                            $sql = "SELECT month_num, month_name, week_num, year_num, SUM(volume_processed) as total_volume FROM dashboard_tot_processed_volume GROUP BY week_num";
                                                            $result = mysqli_query($conn, $sql);

                                                            $data_processed_volume = array();
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                $data_processed_volume[] = $row;
                                                            }

                                                        
                                                            ?>
                                            <script>
                                                                        // PHP data from your database
                                            var processedVolumeData = <?php echo json_encode($data_processed_volume); ?>;

                                            // Extract the necessary data for the chart
                                            var labels = [];
                                            var totalVolume = [];

                                            processedVolumeData.forEach(function(item) {
                                                labels.push(item.week_num);
                                                // Check for null values in total_volume and handle them gracefully
                                                var volume = parseFloat(item.total_volume);
                                                
                                                if (!isNaN(volume)) {
                                                    totalVolume.push(volume.toFixed(2)); // Round to 2 decimal places
                                                } else {
                                                    totalVolume.push(null); // Set to null for null values
                                                }
                                            });

                                            // Replace 0 values with null
                                            totalVolume = totalVolume.map(function(value) {
                                                return value === "0.00" ? null : value;
                                            });

                                            // Chart configuration
                                            var options = {
                                                chart: {
                                                    type: 'line',
                                                    height: 400,
                                                    width: '100%',
                                                },
                                                xaxis: {
                                                    categories: labels,
                                                },
                                                series: [
                                                    {
                                                        name: 'Total Volume Processed',
                                                        data: totalVolume,
                                                    },
                                                ],
                                                stroke: {
                                                    width: 5,
                                                    curve: 'smooth'
                                                },
                                                colors: ['#FFD700'], // Different colors for each line
                                            };

                                            // Create the chart
                                            var chart = new ApexCharts(document.querySelector("#chart_div"), options);
                                            chart.render();

                                            </script>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="navpills-monthly" role="tabpanel">
                                        <h4 class="card-title mb-4">Average of Monthly Delivery</h4>

                                            <div class="mt-3"> 
                                            <div id="chart_div001" style="width: 100%; height: 400px; max-width: 100%; max-height: 400%;"></div>
                                                        <?php
                                                            include 'agriboostdmstransactions/db.inc.php';

                                                            $sql001 = "SELECT month_num, month_name, week_num, year_num, AVG(volume_processed) as average_volume FROM dashboard_tot_processed_volume GROUP BY month_num";
                                                            $result001 = mysqli_query($conn, $sql001);

                                                            $data_processed_volume001 = array();
                                                            while ($row001 = mysqli_fetch_assoc($result001)) {
                                                                $data_processed_volume001[] = $row001;
                                                            }

                                                        
                                                            ?>
                                            <script>
                                                                        // PHP data from your database
                                            var processedVolumeData001 = <?php echo json_encode($data_processed_volume001); ?>;

                                            // Extract the necessary data for the chart
                                            var labels001 = [];
                                            var totalVolume001 = [];

                                            processedVolumeData001.forEach(function(item001) {
                                                labels001.push(item001.month_name);
                                                // Check for null values in total_volume and handle them gracefully
                                                var volume001 = parseFloat(item001.average_volume);
                                                
                                                if (!isNaN(volume001)) {
                                                    totalVolume001.push(volume001.toFixed(2)); // Round to 2 decimal places
                                                } else {
                                                    totalVolume001.push(null); // Set to null for null values
                                                }
                                            });

                                            // Replace 0 values with null
                                            totalVolume001 = totalVolume001.map(function(value001) {
                                                return value001 === "0.00" ? null : value001;
                                            });

                                            // Chart configuration
                                            var options001 = {
                                                chart: {
                                                    type: 'line',
                                                    height: 400,
                                                    width: '100%',
                                                },
                                                xaxis: {
                                                    categories: labels001,
                                                },
                                                series: [
                                                    {
                                                        name: 'Average Volume Processed',
                                                        data: totalVolume001,
                                                    },
                                                ],
                                                stroke: {
                                                    width: 5,
                                                    curve: 'smooth'
                                                },
                                                colors: ['#FFD700'], // Different colors for each line
                                            };

                                            // Create the chart
                                            var chart001 = new ApexCharts(document.querySelector("#chart_div001"), options001);
                                            chart001.render();

                                            </script>

                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
           

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
                                                            include 'agriboostdmstransactions/db.inc.php';
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
                                                <script>
                                                    $(document).ready(function() {
                                                        // Delay the DataTable initialization by 1000 milliseconds (1 second)
                                                        setTimeout(function() {
                                                        $('#myTable01').DataTable({
                                                            dom: 'Bfrtip',
                                                            buttons: [
                                                            'copy', 'csv', 'excel', 'pdf', 'print'
                                                            ],
                                                            "pageLength": 5 // Set the number of rows per page to 5
                                                        });
                                                        }, 1000);
                                                    });
                                                </script>
             
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
                                                // Your PHP code to fetch data from the database

                                                include 'agriboostdmstransactions/db.inc.php';

                                                $sql001 = "SELECT * FROM order_commitment_actual_final";
                                                $result001 = mysqli_query($conn, $sql001);

                                                $order_commit_actual = array();
                                                while ($row001 = mysqli_fetch_assoc($result001)) {
                                                    $order_commit_actual[] = $row001;
                                                }
                                                ?>

                                        <script>
                                            // PHP data from your database
                                            var orderCommitActualData01 = <?php echo json_encode($order_commit_actual); ?>;

                                            // Extract the necessary data for the chart
                                            var labels01 = [];
                                            var actualDelivery01 = [];
                                            var farmerCommitment01 = [];
                                            var vendorOrders01 = [];

                                            orderCommitActualData01.forEach(function(item01) {
                                                labels01.push(item01.week_num);
                                                actualDelivery01.push(parseFloat(item01.actual_delivery).toFixed(2));
                                                farmerCommitment01.push(parseFloat(item01.farmer_commitment).toFixed(2));
                                                vendorOrders01.push(parseFloat(item01.vendor_orders).toFixed(2));
                                            });

                                            // Replace 0.00 values with null
                                            actualDelivery01 = actualDelivery01.map(function(value01) {
                                                return value01 === "0.00" ? null : value01;
                                            });

                                            farmerCommitment01 = farmerCommitment01.map(function(value02) {
                                                return value02 === "0.00" ? null : value02;
                                            });

                                            vendorOrders01 = vendorOrders01.map(function(value03) {
                                                return value03 === "0.00" ? null : value03;
                                            });

                                            // Chart configuration
                                            var options01 = {
                                                chart: {
                                                    type: 'line',
                                                    height: 400,
                                                    width: '100%',
                                                },
                                                xaxis: {
                                                    categories: labels,
                                                    title: {
                                                        text: 'Week Number', // X-axis title
                                                    },
                                                },
                                                yaxis: {
                                                    title: {
                                                        text: 'Values', // Y-axis title
                                                    },
                                                },
                                                series: [
                                                    {
                                                        name: 'Actual Delivery',
                                                        data: actualDelivery01,
                                                    },
                                                    {
                                                        name: 'Farmer Commitment',
                                                        data: farmerCommitment01,
                                                    },
                                                    {
                                                        name: 'Vendor Orders',
                                                        data: vendorOrders01,
                                                    },
                                                ],
                                                stroke: {
                                                    width: 5,
                                                    curve: 'smooth'
                                                },
                                                colors: ['#FFD700', '#00E396', '#FF4560'], // Different colors for each line
                                                annotations: {
                                                    points: [
                                                        {
                                                            x: 'Week 5', // X-axis value for annotation
                                                            y: 500, // Y-axis value for annotation
                                                            marker: {
                                                                size: 6,
                                                                fillColor: '#FF4560',
                                                                strokeColor: '#FF4560',
                                                                strokeWidth: 2,
                                                            },
                                                            label: {
                                                                text: 'Annotation 1',
                                                            },
                                                        },
                                                        // Add more annotations as needed
                                                    ],
                                                },
                                            };

                                            // Create the chart
                                            var chart01 = new ApexCharts(document.querySelector("#chart_div01"), options01);
                                            chart01.render();

                                        </script>

                                           
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
                                    include 'agriboostdmstransactions/db.inc.php';

                                    $sql003 = "SELECT month_num, year_num, month_name,((SUM(rate_five) - (SUM(rate_one) + SUM(rate_two) + SUM(rate_three))) / SUM(total_rating)) * 100 AS percent_rating 
                                FROM 
                                    farmer_nps 
                                GROUP BY 
                                    month_num, month_name, year_num
                                ";
                                    $result003 = mysqli_query($conn, $sql003);

                                    $farmer_nps = array();
                                    while ($row003 = mysqli_fetch_assoc($result003)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row003['percent_rating'] = number_format($row003['percent_rating'], 2); // Format to 2 decimal places
                                        $farmer_nps[] = $row003;
                                    }

                                    ?>

<script>
    // Define the data for the bar chart
    var chartData03 = <?php echo json_encode($farmer_nps); ?>;
    
    // Extract labels (month_name) and data (percent_rating) from the PHP array
    var labels03 = chartData03.map(function(item03) {
        return item03.month_name;
    });
    
    var data03 = chartData03.map(function(item03) {
        return parseFloat(item03.percent_rating);
    });

    // Get the current month
    var today = new Date();
    var currentMonth = today.toLocaleString('default', { month: 'long' });

    // Check if a month is ongoing (current month)
    var ongoingIndex = labels03.indexOf(currentMonth);
    if (ongoingIndex !== -1) {
        labels03[ongoingIndex] += ' (Ongoing)';
    }

    // Create the bar chart using ApexCharts
    var options03 = {
        chart: {
            type: 'bar',
            height: 400,
            width: '100%',
            foreColor: '#333',
        },
        plotOptions: {
            bar: {
                horizontal: false,
                dataLabels: {
                    position: 'top',
                },
            },
        },
        xaxis: {
            categories: labels03,
        },
        yaxis: {
            min: 0, // Set the minimum value to 0
            max: 100, // Set the maximum value to 100
        },
        dataLabels: {
            enabled: true,
            formatter: function (val03) {
                return val03 + "%";
            },
        },
        series: [
            {
                name: 'Percent Rating',
                data: data03,
            },
        ],
        colors: ['#00E396'], // Different colors for each column
    };

    var chart03 = new ApexCharts(document.querySelector("#chart_div03"), options03);
    chart03.render();
</script>





                          
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
                                    include 'agriboostdmstransactions/db.inc.php';

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

                                    ?>

                                    <script>


                                        // Define the data for the bar chart
                                        var chartData04 = <?php echo json_encode($vendor_nps); ?>;
                                        
                                        // Extract labels (month_name) and data (percent_rating) from the PHP array
                                        var labels04 = chartData04.map(function(item04) {
                                            return item04.month_name;
                                        });
                                        
                                        var data04 = chartData04.map(function(item04) {
                                            return parseFloat(item04.percent_rating);
                                        });

                                        // Get the current month
                                        var today04 = new Date();
                                        var currentMonth04 = today04.toLocaleString('default', { month: 'long' });

                                        // Check if a month is ongoing (current month)
                                        var ongoingIndex04 = labels04.indexOf(currentMonth04);
                                        if (ongoingIndex04 !== -1) {
                                            labels04[ongoingIndex04] += ' (Ongoing)';
                                        }

                                        // Create the bar chart using ApexCharts
                                        var options04 = {
                                            chart: {
                                                type: 'bar',
                                                height: 400,
                                                width: '100%',
                                                foreColor: '#333',
                                            },
                                            plotOptions: {
                                                bar: {
                                                    horizontal: false,
                                                    dataLabels: {
                                                        position: 'top',
                                                    },
                                                },
                                            },
                                            xaxis: {
                                                categories: labels04,
                                            }, yaxis: {
                                                min: 0, // Set the minimum value to 0
                                                max: 100, // Set the maximum value to 100
                                            },
                                            dataLabels: {
                                                enabled: true,
                                                formatter: function (val04) {
                                                    return val04 + "%";
                                                },
                                            },
                                            series: [
                                                {
                                                    name: 'Percent Rating',
                                                    data: data04,
                                                },
                                            ],
                                        };

                                        var chart04 = new ApexCharts(document.querySelector("#chart_div04"), options04);
                                        chart04.render();
                                    </script>

                                                
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
                                    include 'agriboostdmstransactions/db.inc.php';

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

                                    <script>
                            
                                          // Define the data for the bar chart
                                          var chartData05 = <?php echo json_encode($active_farmers); ?>;
                                        
                                        // Extract labels (month_name) and data (percent_rating) from the PHP array
                                        var labels05 = chartData05.map(function(item05) {
                                            return item05.month_name;
                                        });
                                        
                                        var data05 = chartData05.map(function(item05) {
                                            return parseFloat(item05.unique_partner_count);
                                        });

                                        // Get the current month
                                        var today05 = new Date();
                                        var currentMonth05 = today05.toLocaleString('default', { month: 'long' });

                                        // Check if a month is ongoing (current month)
                                        var ongoingIndex05 = labels05.indexOf(currentMonth05);
                                        if (ongoingIndex05 !== -1) {
                                            labels05[ongoingIndex05] += ' (Ongoing)';
                                        }

                                        // Create the bar chart using ApexCharts
                                        var options05 = {
                                            chart: {
                                                type: 'bar',
                                                height: 400,
                                                width: '100%',
                                                foreColor: '#333',
                                            },
                                            plotOptions: {
                                                bar: {
                                                    horizontal: false,
                                                    dataLabels: {
                                                        position: 'top',
                                                    },
                                                },
                                            },
                                            xaxis: {
                                                categories: labels05,
                                            },
                                            dataLabels: {
                                                enabled: true,
                                                formatter: function (val05) {
                                                    return val05;
                                                },
                                            },
                                            series: [
                                                {
                                                    name: 'No. of Farmers',
                                                    data: data05,
                                                },
                                            ],
                                            colors: ['#00E396'], // Different colors for each line
                                        };

                                        var chart05 = new ApexCharts(document.querySelector("#chart_div05"), options05);
                                        chart05.render();
                                    </script>
                          
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
                                    include 'agriboostdmstransactions/db.inc.php';

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


                                        <script>
                                            
                                                    // Define the data for the bar chart
                                            var chartData06 = <?php echo json_encode($active_vendors); ?>;
                                            
                                            // Extract labels (month_name) and data (percent_rating) from the PHP array
                                            var labels06 = chartData06.map(function(item06) {
                                                return item06.month_name;
                                            });
                                            
                                            var data06 = chartData06.map(function(item06) {
                                                return parseFloat(item06.unique_partner_count);
                                            });

                                            // Get the current month
                                            var today06 = new Date();
                                            var currentMonth06 = today06.toLocaleString('default', { month: 'long' });

                                            // Check if a month is ongoing (current month)
                                            var ongoingIndex06 = labels06.indexOf(currentMonth06);
                                            if (ongoingIndex06 !== -1) {
                                                labels06[ongoingIndex06] += ' (Ongoing)';
                                            }


                                                // Create the bar chart using ApexCharts
                                                var options06 = {
                                                    chart: {
                                                        type: 'bar',
                                                        height: 400,
                                                        width: '100%',
                                                        foreColor: '#333',
                                                    },
                                                    plotOptions: {
                                                        bar: {
                                                            horizontal: false,
                                                            dataLabels: {
                                                                position: 'top',
                                                            },
                                                        },
                                                    },
                                                    xaxis: {
                                                        categories: labels05,
                                                    },
                                                    dataLabels: {
                                                        enabled: true,
                                                        formatter: function (val06) {
                                                            return val06;
                                                        },
                                                    },
                                                    series: [
                                                        {
                                                            name: 'No. of Buyers',
                                                            data: data06,
                                                        },
                                                    ],
                                                };

                                                var chart06 = new ApexCharts(document.querySelector("#chart_div06"), options06);
                                                chart06.render();
                                        </script>
                                                
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
                            // Include the database connection file
                            include 'agriboostdmstransactions/db.inc.php';

                            // SQL query to retrieve data
                            $sql007 = "SELECT month_name, MAX(CASE WHEN year_num = 2022 THEN median_sales END) AS median_2022, 
                            MAX(CASE WHEN year_num = 2023 THEN median_sales END) AS median_2023 
                            FROM farmers_weekly_median_final 
                            WHERE ((year_num = '2023' AND month_num NOT IN ('2', '3', '4', '5', '6'))
                            OR (year_num != '2023')) AND ((year_num = '2022' AND month_num NOT IN ('1', '2', '3', '4', '5', '6'))
                            OR (year_num != '2022')) GROUP BY month_name, month_num ORDER BY CAST(month_num AS SIGNED);";

                            // Execute the SQL query
                            $result007 = mysqli_query($conn, $sql007);

                            $median_sales = array();
                            while ($row007 = mysqli_fetch_assoc($result007)) {
                                $median_sales[] = $row007;
                            }
                            ?>

                            <script>
                                // Define the data for the bar chart
                                var chartData07 = <?php echo json_encode($median_sales); ?>;
                                var labels07 = chartData07.map(function(item07) {
                                    return item07.month_name;
                                });

                                var data07_1 = chartData07.map(function(item07) {
                                    return parseFloat(item07.median_2022).toFixed(2);
                                });

                                var data07_2 = chartData07.map(function(item07) {
                                    return parseFloat(item07.median_2023).toFixed(2);
                                });

                                // Create the bar chart data structure with '2022' and '2023' as separate series
                                var chartData = labels07.map(function(month, index) {
                                    return {
                                        x: month,
                                        '2022': parseFloat(data07_1[index]),
                                        '2023': parseFloat(data07_2[index])
                                    };
                                });

                                // Transpose the data to separate '2022' and '2023' series
                                var transposedData = {
                                    categories: labels07,
                                    series: [
                                        {
                                            name: '2022',
                                            data: chartData.map(function(item) {
                                                return item['2022'];
                                            }),
                                        },
                                        {
                                            name: '2023',
                                            data: chartData.map(function(item) {
                                                return item['2023'];
                                            }),
                                        },
                                    ]
                                };

                                // Create the bar chart using ApexCharts
                                var options07 = {
                                    chart: {
                                        type: 'bar',
                                        height: 400,
                                        width: '100%',
                                        foreColor: '#333',
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            dataLabels: {
                                                position: 'top',
                                            },
                                        },
                                    },
                                    xaxis: {
                                        categories: transposedData.categories,
                                    },
                                    dataLabels: {
                                        enabled: true,
                                        formatter: function (val07) {
                                            return 'P' + val07.toLocaleString('en-US', {
                                                minimumFractionDigits: 2,
                                                maximumFractionDigits: 2,
                                            });
                                        },
                                    },
                                    series: transposedData.series,
                                    colors: ['#00E396', '#008FFB'], // Different colors for each year
                                };

                                var chart07 = new ApexCharts(document.querySelector("#chart_div07"), options07);
                                chart07.render();
                            </script>



                          
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
                            <div id="line_chart_div08" style="margin-top: 20px;"></div>
                               <?php
                                    include 'agriboostdmstransactions/db.inc.php';

                                    $sql008 = "SELECT year_num, month_num, month_name, agrihub_weighted_price, other_weighted_price, price_diff  FROM volume_weighed_price_permonth ORDER BY month_num, year_num;";
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


                                    <script>
                                        // Define the data for the charts
                                        var chartData08 = <?php echo json_encode($weighed_volume); ?>;

                                        // Extract labels (month_name) and data (agrihub_weighted_price, other_weighted_price) from the PHP array
                                        var labels08 = chartData08.map(function(item08) {
                                            return item08.month_name;
                                        });

                                        var data08 = chartData08.map(function(item08) {
                                            return parseFloat(item08.agrihub_weighted_price).toFixed(2);
                                        });

                                        var data09 = chartData08.map(function(item08) {
                                            return parseFloat(item08.other_weighted_price).toFixed(2);
                                        });

                                        // Calculate the percent difference and format it
                                        var data10 = chartData08.map(function(item08) {
                                            var agrihubPrice08 = parseFloat(item08.agrihub_weighted_price);
                                            var otherPrice08 = parseFloat(item08.other_weighted_price);

                                            if (otherPrice08 === 0) {
                                                return 'N/A'; // Avoid division by zero
                                            }

                                            var percentDifference08 = ((agrihubPrice08 - otherPrice08) / otherPrice08) * 100;
                                            return percentDifference08.toFixed(2) + '%';
                                        });

                                    
                                        
                                        // Column chart options

                                        var options08 = {
                                        series: [
                                            {
                                                name: 'AgriHub Weighted Price',
                                                type: 'column',
                                                data: data08,
                                            },
                                            {
                                                name: 'Other Weighted Price',
                                                type: 'column',
                                                data: data09,
                                            },
                                            {
                                                name: 'Diff',
                                                type: 'line',
                                                data: data10,
                                            },
                                        ],
                                        chart: {
                                            height: 350,
                                            type: 'line',
                                            stacked: false,
                                        },
                                        dataLabels: {
                                            enabled: false,
                                        },
                                        stroke: {
                                            width: [1, 1, 4],
                                        },
                                        title: {
                                            text: 'Monthly Volume Weighted Price',
                                            align: 'left',
                                            offsetX: 110,
                                        },
                                        xaxis: {
                                            categories: labels08,
                                        },
                                        yaxis: [
                                            {
                                                axisTicks: {
                                                    show: true,
                                                },
                                                axisBorder: {
                                                    show: true,
                                                    color: '#008FFB',
                                                },
                                                labels: {
                                                    style: {
                                                        colors: '#008FFB',
                                                    },
                                                },
                                                title: {
                                                    text: "AgriHub Volume Weighted Price (Php)",
                                                    style: {
                                                        color: '#008FFB',
                                                    },
                                                },
                                                tooltip: {
                                                    enabled: true,
                                                },
                                                min: 0, // Set minimum value for the y-axis
                                                max: 100, // Set maximum value for the y-axis
                                            },
                                            {
                                                seriesName: 'Income',
                                                opposite: true,
                                                axisTicks: {
                                                    show: true,
                                                },
                                                axisBorder: {
                                                    show: true,
                                                    color: '#00E396',
                                                },
                                                labels: {
                                                    style: {
                                                        colors: '#00E396',
                                                    },
                                                },
                                                title: {
                                                    text: "Other Volume Weighted Price (Php)",
                                                    style: {
                                                        color: '#00E396',
                                                    },
                                                },
                                                tooltip: {
                                                    enabled: true,
                                                },
                                                min: 0, // Set minimum value for the y-axis
                                                max: 100, // Set maximum value for the y-axis
                                            },
                                            {
                                                seriesName: 'Diff (%)',
                                                opposite: true,
                                                axisTicks: {
                                                    show: true,
                                                },
                                                axisBorder: {
                                                    show: true,
                                                    color: '#FEB019',
                                                },
                                                labels: {
                                                    style: {
                                                        colors: '#FEB019',
                                                    },
                                                },
                                                title: {
                                                    text: "Diff (%)",
                                                    style: {
                                                        color: '#FEB019',
                                                    },
                                                },
                                                tooltip: {
                                                    enabled: true,
                                                },
                                            },
                                        ],
                                        tooltip: {
                                            fixed: {
                                                enabled: true,
                                                position: 'topLeft',
                                                offsetY: 30,
                                                offsetX: 60,
                                            },
                                        },
                                        legend: {
                                            horizontalAlign: 'left',
                                            offsetX: 40,
                                        },
                                        };


                                            var chart08 = new ApexCharts(document.querySelector("#chart_div08"), options08);
                                            chart08.render();


                                        
                                    </script>




                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

    </div>
<!--########################################################################################### END DASHBOARD AJAX LINE ######################################################################-->

            <div id='dashboardfetchajax'>
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: green; font-size: 30px;"></i>
                                    </div>

                                    <?php
                                            include 'agriboostdmstransactions/db.inc.php';
                                            $query = mysqli_query($conn, "SELECT week_num, month_num, year_num, month_name, SUM(volume_processed) FROM dashboard_tot_processed_volume");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $volume_processed = $result['SUM(volume_processed)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span><?php echo number_format($volume_processed,2);?></span> kg</h4>
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
                                            include 'agriboostdmstransactions/db.inc.php';
                                            $query1 = mysqli_query($conn, "SELECT week_num, month_num, year_num, month_name, SUM(pay_subtotal_final) FROM dashboard_tot_processed_volume");
                                            while($result1 = mysqli_fetch_array($query1)): ?>
                                                <?php                                                            
                                                    $volume_released = $result1['SUM(pay_subtotal_final)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span>Php <?php echo number_format($volume_released,2);?></span> </h4>
                                        <p class="text-muted mb-0"> Total Amount Farmers' Received (Php)</p>
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
                                            include 'agriboostdmstransactions/db.inc.php';
                                            $query2 = mysqli_query($conn, "SELECT COUNT(DISTINCT trans_partner) FROM farmers_engaged_tothubpos");
                                            while($result2 = mysqli_fetch_array($query2)): ?>
                                                <?php                                                            
                                                    $farmers_engaged = $result2['COUNT(DISTINCT trans_partner)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span><?php echo number_format($farmers_engaged);?></span></h4>
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
                                            include 'agriboostdmstransactions/db.inc.php';
                                            $query3 = mysqli_query($conn, "SELECT COUNT(DISTINCT trans_partner) FROM vendors_engaged_tothubpos");
                                            while($result3 = mysqli_fetch_array($query3)): ?>
                                                <?php                                                            
                                                    $vendors_engaged = $result3['COUNT(DISTINCT trans_partner)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span><?php echo number_format($vendors_engaged);?></span></h4>
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




<script src="chartfilter.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="src/index.js"></script>


<!-- Datatable init js -->
<script src="function/datatable/assets/js/pages/datatables.init.js"></script>
    <script src="function/dashed/assets/libs/jquery/jquery.min.js"></script>
    <script src="function/dashed/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="function/dashed/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="function/dashed/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="function/dashed/assets/libs/node-waves/waves.min.js"></script>
    <script src="function/dashed/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="function/dashed/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- apexcharts -->
    <script src="function/dashed/assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="function/dashed/assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="function/dashed/assets/js/app.js"></script>

    
<!-- jquery step -->
<script src="function/wizard/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

<!-- form wizard init -->
<script src="function/wizard/assets/js/pages/form-wizard.init.js"></script>


<script src="function/datatable/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="function/datatable/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="function/datatable/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="function/datatable/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="function/datatable/assets/libs/jszip/jszip.min.js"></script>
<script src="function/datatable/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="function/datatable/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.php5.min.js"></script>
<script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="function/datatable/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="function/datatable/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="function/datatable/assets/js/pages/datatables.init.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.php5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>





<!-- parsleyjs -->
<script src="function/formvalidation/assets/libs/parsleyjs/parsley.min.js"></script>

<script src="function/formvalidation/assets/js/pages/form-validation.init.js"></script>


</body>

</html>