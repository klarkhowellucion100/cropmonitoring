
 <!-- <body data-layout="horizontal" data-topbar="colored"> -->
  <?php
  include 'heading.php';
  
  
 ?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>AgriBloom || AgriBOOST Data Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="icons/icon192.png">

    <!-- Bootstrap Css -->
    <link href="function/dashboard/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="function/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="function/dashboard/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="function/datatable/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="function/datatable/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        
    <!-- Responsive datatable examples -->
    <link href="function/datatable/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script>
    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"> </script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="apple-touch-icon" href="icons/icon192.png">
    <link rel="manifest" href="manifest.json">

</head>

<body>



<style>
        /* Styles for the loader container */
        .loader-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
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
                            <a href="javascript:0;" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="icons/icon192.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="icons/icon192.png" alt="" height="20">
                                    </span>
                                </a>
    
                            <a href="javascript:0;" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="icons/icon192.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="icons/icon192.png" alt="" height="20">
                                    </span>
                                </a>
                        </div>
    
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
    
                        <!-- App Search-->
                        <!--<form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="uil-search"></span>
                            </div>
                        </form>-->
                    </div>
    
                    <div class="d-flex">
    
                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="uil-search"></i>
                                </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
    
                                <!--<form class="p-3">
                                    <div class="m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>-->
                            </div>
                        </div>
    
                        
                        
    
                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                    <i class="uil-minus-path"></i>
                                </button>
                        </div>
    
                        <!--################Notification######################-->
                        <!--<div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="uil-bell"></i>
                                    <span class="badge bg-danger rounded-pill">3</span>
                                </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-16"> Notifications </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> Mark all as read</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="javascript:void(0);" class="text-dark notification-item">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                            <i class="uil-shopping-basket"></i>
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="text-dark notification-item">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hour ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="text-dark notification-item">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                            <i class="uil-truck"></i>
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
    
                                    <a href="javascript:void(0);" class="text-dark notification-item">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                                <i class="uil-arrow-circle-right me-1"></i> View More..
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
    
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="icons/icon192.png"
                                        alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?php echo $userprofile;?></span>
                                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                                </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                               <!-- <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Settings</span> <span class="badge bg-success-subtle text-success rounded-pill mt-1 ms-2">03</span></a>
                                <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Lock screen</span></a>-->
                                <a class="dropdown-item" href="agriboostdmstransactions/logoutprocess.php"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                            </div>
                        </div>
    
                       <!-- <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                    <i class="uil-cog"></i>
                                </button>
                        </div>-->
    
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
    
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
    
                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
    
                <div data-simplebar class="sidebar-menu-scroll">
    
                    <!---################## Sidemenu ################################3-->
                   
    
    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
    
                            <li>
                                <a href="home.php">
                                        <i class="uil-signal-alt-3"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                                        <span>Dashboard</span>
                                    </a>
                            </li>
    
                            <?php if($component=="Admin" || $component=="AgriBloom"){?>
                            <li class="menu-title">AgriBloom</li>
    
                            <li>
                                <a href="farmerregistration.php">
                                        <i class="uil-user-circle"></i>
                                        <span>Farmers Profile</span>
                                    </a>
                            </li>
    
                           
    
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="uil-store"></i>
                                        <span>Farmers' Commit</span>
                                    </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="farmercommitmentdashboard.php">Dashboard</a></li>
                                    <li><a href="farmercommitment.php">Add Commitment</a></li>
                                    <li><a href="farmercommitmentview.php">View Commitment</a></li>
                                </ul>
                            </li>
    
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="uil-coins"></i>
                                        <span>Farmers' Sales</span>
                                    </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="salesfarmer.php">Add Sales</a></li>
                                    <li><a href="salesfarmerview.php">View Sales</a></li>
                                </ul>
                            </li>
    
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="uil-feedback"></i>
                                        <span>Farmers' Feedback</span>
                                    </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="feedbackfarmer.php">Add Feedback</a></li>
                                    <li><a href="feedbackfarmerview.php">View Feedback</a></li>
                                </ul>
                            </li>
                            <?php } ?> 
    
                            <?php if($component=="Admin" || $component=="AgriMart"){?>
                            <li class="menu-title">AgriMart</li>
    
                            <li>
                                <a href="vendorregistration.php">
                                        <i class="uil-user-circle"></i>
                                        <span>Market Profile</span>
                                    </a>
                            </li>
    
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="uil-store"></i>
                                        <span>Market Orders</span>
                                    </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="vendororder.php">Add Order</a></li>
                                    <li><a href="vendororderview.php">View Order</a></li>
                                </ul>
                            </li>
    
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="uil-coins"></i>
                                        <span>Market Sales</span>
                                    </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="salesvendor.php">Add Sales</a></li>
                                    <li><a href="salesvendorview.php">View Sales</a></li>
                                </ul>
                            </li>
    
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="uil-feedback"></i>
                                        <span>Markets' Feedback</span>
                                    </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="feedbackvendor.php">Add Feedback</a></li>
                                    <li><a href="feedbackvendorview.php">View Feedback</a></li>
                                </ul>
                            </li>
                            <?php } ?> 
    
                            <?php if($component=="Admin" || $component=="AgriComms"){?>
                            <li class="menu-title">AgriComms</li>
    
                            <li>
                                <a href="eventsagricomm.php">
                                        <i class="uil-calendar-alt"></i>
                                        <span>Events Data</span>
                                    </a>
                            </li>
                            <?php } ?> 
    
                            <?php if($component=="Admin"){?>
                            <li class="menu-title">Admin</li>
    
                            <li>
                                <a href="userapproval.php">
                                        <i class="uil-user-circle"></i>
                                        <span>Approval</span>
                                    </a>
                            </li>
                            <?php } ?> 
                      
    
                            
    
                        </ul>
                    </div>
                    <!--####################### Sidebar #######################################-->
                </div>
            </div>
            <!-- Left Sidebar End -->
    
    
    
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
                                <h4 class="mb-0">Farmers Profile</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

              
                       <!-- Start Modal -->
                       <?php  

                            $date_f = date('Y-m-d');

                            $date_t = date('H:i:s');
                            $date_m = date('m');
                            $date_d = date('d');
                            $date_y = date('Y');

                        ?>

                        <?php
                            $date_f = date('Y-m-d');
                            $date_t = date('H:i:s');
                            $date_m = date('m');
                            $date_d = date('d');
                            $date_y = date('Y');

                            function createRandomPassword() {
                                $chars = "003232303232023232023456789";
                                srand((double)microtime()*1000000);
                                $i = 0;
                                $pass = '' ;
                                while ($i <= 7) {

                                    $num = rand() % 33;

                                    $tmp = substr($chars, $num, 1);

                                    $pass = $pass . $tmp;

                                    $i++;

                                }
                                return $pass;
                            }
                            $finalcode='US'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
                        ?>

            <!-- End Modal -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add Farmer</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">PERSONAL INFORMATION</label>                                                                         
                                                                    </div>                                        
                                                                </div>
                                                         
                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="code">Code</label>
                                                                        <input type="text" required readonly class="form-control" id="code" value='<?php echo $finalcode;?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="type">Type</label>
                                                                        <input type="text" required class="form-control" id="type" readonly name='type' value="Farmer">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="fname">Full Name</label>
                                                                        <input type="text" required class="form-control" id="fname" placeholder='Enter First Name *' name='fname'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="cnumber">Contact Number</label>
                                                                        <input type="text" required class="form-control" id="cnumber" placeholder='Enter Contact Number *' name='cnumber'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="region">Region</label>
                                                                        <input type="text" readonly required class="form-control" id="region" value="Region XIII" name='region'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="province">Province</label>
                                                                        <input type="text" readonly required class="form-control" id="province" value="Agusan del Norte" name='province'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="municipality">City/Municipality</label>
                                                                        <input type="text" readonly required class="form-control" id="municipality" value="Butuan City" name='municipality'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="gender">Gender</label>                                                       
                                                                            <select id="gender" class="form-select">
                                                                                <option value="">Pease Select Gender *</option>
                                                                                <option value="Male">Male</option>
                                                                                <option value="Female">Female</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="birthdate">Birthdate</label>
                                                                        <input type="date" required class="form-control" id="birthdate" name='birthdate'>      
                                                                    </div>                                        
                                                                </div>

                                                                
                                                               
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="education">Educational Attainment</label>                                                       
                                                                            <select id="education" class="form-select">
                                                                                <option value="">Pease Select Education *</option>
                                                                                <option value="Elementary Level">Elementary Level</option>
                                                                                <option value="Elementary Graduate">Elementary Graduate</option>
                                                                                <option value="Highschool Level">Highschool Level</option>
                                                                                <option value="Highschool Graduate">Highschool Graduate</option>
                                                                                <option value="College Level">College Level</option>
                                                                                <option value="College Graduate">College Graduate</option>
                                                                                <option value="Post Graduate">Post Graduate</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="barangay">Barangay Address</label>                                                       
                                                                            <select id="barangay" class="form-select region_1 region_0 region_2">
                                                                            <option value="">Pease Select Barangay *</option>
                                                                                <?php  
                                                                                    $sql = "SELECT * FROM areashubpos WHERE region='Region XIII' AND province='Agusan del Norte' AND municipality='Butuan City' GROUP BY barangay";
                                                                                    $query = mysqli_query($conn, $sql);
                                                                                ?>
                                                                                <?php foreach($query as $q){ ?>  
                                                                                    <option value="<?php echo $q ['barangay'];?>"><?php echo $q ['barangay'];?></option>
                                                                                <?php } ?>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">AREA DETAILS</label>                                                                         
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="landsize">Agricultural Land Size</label>
                                                                        <input type="number" required class="form-control" id="landsize" name='landsize' placeholder="Enter Area (Ha) *">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="veg_area">Vegetable Area</label>
                                                                        <input type="number" required class="form-control" id="veg_area" name='veg_area' placeholder="Enter Area (Ha) *">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="type_own">Ownership</label>                                                       
                                                                            <select id="type_own" class="form-select">
                                                                                <option value="">Pease Select Type *</option>
                                                                                <option value="Owner">Owner</option>
                                                                                <option value="Tenant">Tenant</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">AGRIBOOST MEMBERSHIP</label>                                                                         
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="dt_joined">Date of Membership</label>
                                                                        <input type="date" required class="form-control" id="dt_joined" name='dt_joined'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="ffs_phase">FFS Phase</label>                                                       
                                                                            <select id="ffs_phase" class="form-select">
                                                                                <option value="">Pease Select Phase *</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 


                                                                
                                                               

                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" id="submit-btn" class="btn btn-primary waves-effect waves-light" onclick=addcomm()>Register</button>
                                                            </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->


                                            <div id="myModalUpdate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Update Farmer</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <form action="agriboostdmstransactions/farmerregistrationupdateprocess.php" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-body" id="modal_update">

                                                              

                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <input type="submit"  name="submit_change" value='Save' class="btn btn-primary waves-effect waves-light">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->


                                       

                                    <h4 class="card-title">Farmers' List </h4>    

                                    <div style="padding-bottom:10px;"> <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Add Farmer +</button></div>                                    

                                    <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Barangay</th>
                                                <th>Contact</th>
                                                <th>Membership</th>
                                                <th>Action</th>
                                              
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                                include 'agriboostdmstransactions/db.inc.php';
                                                $query1 = mysqli_query($conn,"SELECT * FROM registrationhubpos WHERE type='Farmer' ORDER BY id DESC");
                                                while($result1 = mysqli_fetch_array($query1)): ?>
                                            <tr>
                                                                                
                                              
                                                <td><?php echo $result1 ['code']; ?></td>
                                                <td><?php echo $result1 ['fname']; ?></td>
                                                <td><?php echo $result1 ['barangay']; ?></td>
                                                <td><?php echo $result1 ['cnumber']; ?></td>
                                                <td><?php echo $result1 ['dt_joined']; ?></td>
                                                <td> 
                                                    <a class="farmerinfo btn btn-raised btn-warning waves-effect" data-id="<?php echo $result1['id'];?>"><i class="uil-edit-alt"></i></a>
                                                    <a onClick="deleteme(<?php echo $result1['id'];?>)" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>
                                                </td>

                                             
                                            
                                            
                                                                                        
                                            </tr>
                                                <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                    </div>

                                    <script>         
    $(document).ready(function(){
    $('.farmerinfo').click(function(){
        var farmerid = $(this).data('id');
    
        $.ajax({
                    url:"agriboostdmstransactions/farmerregistrationupdate.php",
                    method:"POST",
                    data:{farmerid:farmerid},
                    success:function(data){
                        $('#modal_update').html(data);
                        $('#myModalUpdate').modal('show');
                    }
                });

    })
})
</script>



                                 
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </div>



<script>
    function addcomm(){
        var data = {                                 
            code: $("#code").val(),
            type: $("#type").val(),
            fname: $("#fname").val(),
            cnumber: $("#cnumber").val(),
            region: $("#region").val(),
            province: $("#province").val(),
            municipality: $("#municipality").val(),
            gender: $("#gender").val(),
            birthdate: $("#birthdate").val(),
            education: $("#education").val(),
            barangay: $("#barangay").val(),
            landsize: $("#landsize").val(),
            veg_area: $("#veg_area").val(),
            type_own: $("#type_own").val(),
            dt_joined: $("#dt_joined").val(),
            ffs_phase: $("#ffs_phase").val(),
        };
         
                   $.ajax({
                           url:"agriboostdmstransactions/farmersregistrationprocess.php",
                           method:"POST",
                           data:data,
                           success:function(data,status){
                           
                               Swal.fire({
                               title: 'Success',
                               text: 'Registered successfully!',
                               icon: 'success',
                               timer: 2000
                               }).then(() => {
                                $('#myModal').modal('hide');                                               
                               window.location.reload();
                               }); 
                               
                               
                           }
                       });
       }
</script>







<!--<script>
    function deleteme(delid){
        if(confirm("Are you sure you want to delete this data?")){
        window.location.href='agriboostdmstransactions/farmerregistrationdelete.php?delete=' +delid+ '';
        return true;
        }
        }
</script>-->



<script>
      function deleteme(delid){
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ).then(() => {
        window.location.href='agriboostdmstransactions/farmerregistrationdelete.php?delete=' +delid+ '';
        });
   
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
}
</script>

<script>         
    $(document).ready(function(){
    $('.farmerinfo').click(function(){
        var farmerid = $(this).data('id');
    
        $.ajax({
                    url:"agriboostdmstransactions/farmerregistrationupdate.php",
                    method:"POST",
                    data:{farmerid:farmerid},
                    success:function(data){
                        $('#modal_update').html(data);
                        $('#myModalUpdate').modal('show');
                    }
                });

    })
})
</script>



         
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
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Klarksites
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



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="src/index.js"></script>
</body>


<!-- JAVASCRIPT -->
<!--<script src="function/dashboard/assets/libs/jquery/jquery.min.js"></script>-->
<script src="function/dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="function/dashboard/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="function/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
<script src="function/dashboard/assets/libs/node-waves/waves.min.js"></script>
<script src="function/dashboard/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="function/dashboard/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

<!-- apexcharts -->
<script src="function/dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="function/dashboard/assets/js/pages/dashboard.init.js"></script>

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
<script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
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
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>




<!-- Init js -->
<script src="function/rwdtable/assets/js/pages/table-responsive.init.js"></script>


<!-- init js -->
<script src="function/advanceplug/assets/js/pages/form-advanced.init.js"></script>

<script src="function/advanceplug/assets/libs/select2/js/select2.min.js"></script>


<!-- parsleyjs -->
<script src="function/formvalidation/assets/libs/parsleyjs/parsley.min.js"></script>

<script src="function/formvalidation/assets/js/pages/form-validation.init.js"></script>


<!-- App js -->
<script src="function/dashboard/assets/js/app.js"></script>

</html>






