<?php include 'heading.php';?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>AgriMart || AgriBOOST Data Management System</title>
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
  
 <!--##############################################################Start Header ##############################################################-->

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
<!--##############################################################End Header ##############################################################-->

<!--##############################################################Start Content ##############################################################-->


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
  $finalcode='SM'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
?>

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Market Channels' Sales</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Sales</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add Sales Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <!--<div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">PERSONAL INFORMATION</label>                                                                         
                                                                    </div>                                        
                                                                </div>-->
                                                         
                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="code">Code</label>
                                                                        <input type="text" required readonly class="form-control" id="code" name="code" value='<?php echo $finalcode;?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12"> 
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="commtype">Type</label>                                                       
                                                                            <select id="commtype" name="commtype" class="form-select type_0 type_1">
                                                                            <option value="">Select Type *</option>
                                                                                    <?php  
                                                                                        $sql = "SELECT * FROM commodityhubpos WHERE `sellingtype`='Farmgate' GROUP BY `type`";
                                                                                        $query = mysqli_query($conn, $sql);
                                                                                    ?>
                                                                                    <?php foreach($query as $q){ ?>  
                                                                                <option value="<?php echo $q ['type'];?>"><?php echo $q ['type'];?></option>
                                                                                <?php } ?>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="commname">Commodity</label>                                                       
                                                                        <select id="commname" name="commname" class="form-select com_0">
                                                                            <option value="">Select Commodity *</option>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="commclass">Class</label>                                                       
                                                                            <select id="commclass" name="commclass" class="form-select">
                                                                            <option value="">Select Class *</option>
                                                                                <option value="Class A">Class A</option>
                                                                                <option value="Class B">Class B</option>
                                                                                <option value="Class C">Class C</option>
                                                                                <option value="Reject">Reject</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                              

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="cnumber">Selling Type</label>
                                                                        <input type="text" readonly class="form-control" id="commselltype" name="commselltype" value="Wholesale">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="dateplant">Date Bought</label>
                                                                        <input type="date" class="form-control" id="dateplant" name="dateplant">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="buyer">Seller</label>                                                       
                                                                            <select id="buyer" required name="buyer" class="form-select">
                                                                            <option value="">Select Seller *</option>
                                                                            <option value="AgriHub">AgriHub</option>
                                                                            <option value="Agent">Agent</option>
                                                                            <option value="Wholesaler">Wholesaler</option>
                                                                            <option value="Retailer">Retailer</option>
                                                                            <option value="Wholesaler-Retailer">Wholesaler-Retailer</option>
                                                                            <option value="Exporter">Exporter</option>
                                                                            <option value="Cooperative">Cooperative</option>
                                                                            <option value="Consumer">Consumer</option>
                                                                            <option value="Processor">Processor</option>
                                                                            <option value="Others">Others</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="commprice">Price</label>
                                                                        <input type="number" class="form-control" id="commboughtprice" name="commboughtprice" required placeholder="Enter Price *">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="commqty">Quantity</label>
                                                                        <input type="number" class="form-control" id="commboughtqty" name="commboughtqty" required placeholder="Enter kg *">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="datesold">Date Sold</label>
                                                                        <input type="date" class="form-control" id="datesold" required name="datesold">   
                                                                    </div>                                        
                                                                </div>

                                                                

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="commprice">Price</label>
                                                                        <input type="number" class="form-control" id="commprice" name="commprice" required placeholder="Enter Price *">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="commqty">Quantity</label>
                                                                        <input type="number" class="form-control" id="commqty" name="commqty" required placeholder="Enter kg *">   
                                                                    </div>                                        
                                                                </div>


                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="sellername">Market Channel</label>                                                       
                                                                            <select id="sellername" name="sellername" class="form-select name_1 name_0">
                                                                            <option value="">Select Market *</option>
                                                                                    <?php  
                                                                                    include_once "agriboostdmstransactions/db.inc.php";
                                                                                        $sql1 = "SELECT * FROM registrationhubpos WHERE `type`='Vendor' GROUP BY `fname`";
                                                                                        $query1 = mysqli_query($conn, $sql1);
                                                                                    ?>
                                                                                    <?php foreach($query1 as $q1){ ?>  
                                                                                <option value="<?php echo $q1 ['fname'];?>"><?php echo $q1 ['fname'];?></option>
                                                                                <?php } ?>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="sellercode">Code</label>                                                       
                                                                        <select id="sellercode" name="sellercode" class="form-select code_1">
                                                                            <option value="">Select Code *</option>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="sellertype">Type</label>
                                                                        <input type="text" readonly class="form-control" id="sellertype" name="sellertype" value='Vendor'>   
                                                                    </div>                                        
                                                                </div>
                                                               

                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" id="submit-btn" class="btn btn-primary waves-effect waves-light" onclick=addcomm()>Save Data</button>
                                                            </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->


                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal"><i class="mdi mdi-plus me-2"></i> Add Data</button>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-inline float-md-end mb-3">
                                <div class="search-box ms-2">
                                    <div class="position-relative">
                                        <input type="text" class="form-control rounded border-0" placeholder="Search...">
                                        <i class="mdi mdi-magnify search-icon"></i>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- end row -->

                    <div class="row">

                    <?php
                        include 'agriboostdmstransactions/db.inc.php';
                        $query001 = mysqli_query($conn,"SELECT * FROM sales_vendor_sales");
                        while($result001 = mysqli_fetch_array($query001)): ?>
                        <div class="col-xl-4 col-sm-6">

                        <?php $buyers = $result001['buyer']; ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-success text-white font-size-16 rounded-circle">
                                                        <?php echo $result001['first_letter']; ?>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 align-self-center">
                                            <div class="border-bottom pb-1">
                                                <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-reset "><?php echo $result001['sellername']; ?></a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account me-1"></i> <?php echo $result001['sellercode']; ?>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mt-3">
                                                        <p class="text-muted mb-2">Volume Bought(kg)</p>
                                                        <h5 class="font-size-16 mb-0"><?php  echo number_format($result001['total_buyqty'],2); ?> kg</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mt-3">
                                                        <p class="text-muted mb-2">Total Purchase(Php)</p>
                                                        <h5 class="font-size-16 mb-0"><?php  echo number_format($result001['total_purchase'],2); ?> kg</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mt-3">
                                                        <p class="text-muted mb-2">Volume Sold(kg)</p>
                                                        <h5 class="font-size-16 mb-0"><?php  echo number_format($result001['total_soldqty'],2); ?> kg</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mt-3">
                                                        <p class="text-muted mb-2">Total Sales(Php)</p>
                                                        <h5 class="font-size-16 mb-0"><?php  echo number_format($result001['total_sales'], 2); ?> kg</h5>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                       
                    </div>
                    <!-- end row -->

               


              

                </div>
            </div>



                



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--##############################################################End Content ##############################################################-->

    
<script>
    $(document).ready(function(){

    $('.type_0').change(function(){

        var type_0 = $('.type_0').val();                                                   
            $.ajax({
                url:"agriboostdmstransactions/salesvendorfetch.php",
                method:"POST",
                data:{type_0:type_0},
                success:function(data){
                    $('.com_0').html(data);
                }
            });
    
    });

    });
</script>

<script>
    $(document).ready(function(){

    $('.name_1').change(function(){

        var name_1 = $('.name_1').val();                                                   
            $.ajax({
                url:"agriboostdmstransactions/salesvendorfetch.php",
                method:"POST",
                data:{name_1:name_1},
                success:function(data){
                    $('.code_1').html(data);
                }
            });
    
    });

    });
</script>


<script>
    function addcomm(){
        var data = {                                 
            code: $("#code").val(),
            commtype: $("#commtype").val(),
            commclass: $("#commclass").val(),
            commname: $("#commname").val(),
            commselltype: $("#commselltype").val(),
            dateplant: $("#dateplant").val(),
            datesold: $("#datesold").val(),
            buyer: $("#buyer").val(),
            commprice: $("#commprice").val(),
            commqty: $("#commqty").val(),
            sellername: $("#sellername").val(),
            sellercode: $("#sellercode").val(),
            sellertype: $("#sellertype").val(),
            commboughtprice: $("#commboughtprice").val(),
            commboughtqty: $("#commboughtqty").val(),
         
        };
         
                   $.ajax({
                           url:"agriboostdmstransactions/salesvendorprocess.php",
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

<script>
    $(document).ready(function(){

    $('#filter001').click(function(){

        var datefrom = $('#datefrom').val();      
        var dateto = $('#dateto').val();  
                                        
            $.ajax({
                url:"agriboostdmstransactions/salesfarmerviewfetch.php",
                method:"POST",
                data:{datefrom:datefrom,dateto:dateto},
                success:function(data){
                    $('#dashboardmain').html(data);
                }
            });
    
    });

    });
</script>



<?php include 'agriboostdmstransactions/footer.php';?>
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






