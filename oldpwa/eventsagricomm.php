<?php include 'heading.php'; ?> 

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>AgriComms || AgriBOOST Data Management System</title>
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

    <link href="function/rating/libs/jquery-bar-rating/themes/bars-1to10.css" rel="stylesheet" type="text/css" />
    <link href="function/rating/libs/jquery-bar-rating/themes/bars-horizontal.css" rel="stylesheet" type="text/css" />
    <link href="function/rating/libs/jquery-bar-rating/themes/bars-movie.css" rel="stylesheet" type="text/css" />
    <link href="function/rating/libs/jquery-bar-rating/themes/bars-pill.css" rel="stylesheet" type="text/css" />
    <link href="function/rating/libs/jquery-bar-rating/themes/bars-reversed.css" rel="stylesheet" type="text/css" />
    <link href="function/rating/libs/jquery-bar-rating/themes/bars-square.css" rel="stylesheet" type="text/css" />
    <link href="function/rating/libs/jquery-bar-rating/themes/css-stars.css" rel="stylesheet" type="text/css" />
    <link href="function/rating/libs/jquery-bar-rating/themes/fontawesome-stars-o.css" rel="stylesheet" type="text/css" />
    <link href="function/rating/libs/jquery-bar-rating/themes/fontawesome-stars.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="function/datatable/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="function/fullcalendar/css/bootstrap.min.css">
    <link rel="stylesheet" href="function/fullcalendar/fullcalendar/lib/main.min.css">
    <script src="function/fullcalendar/js/bootstrap.min.js"></script>
    <script src="function/fullcalendar/fullcalendar/lib/main.min.js"></script>

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

<!--########################################################## Start Header ##############################################-->

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

<!--########################################################## End Header ##############################################-->



<!--########################################################## Start Content ##############################################-->

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
  $finalcode='EV'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
?>


<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Events Log</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Feedback</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->



<div id="feebackmain">

<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Calendar</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                    <li class="breadcrumb-item active">Calendar</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title" style='color: white;'>Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="agriboostdmstransactions/save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label" style='display:none;'>Code</label>
                                    <input type="text" readonly class="form-control form-control-sm rounded-0" name="code" id="code" value='<?php echo $finalcode; ?>' required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required placeholder='Enter Title of Activity *'>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description"></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Location</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="location" id="location" placeholder='Enter Location *'>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Target Audience</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="targetaudience" id="targetaudience" placeholder='Enter Target Audience *'>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">No. of Attendees</label>
                                    <input type="number" class="form-control form-control-sm rounded-0" name="totalaudience" id="totalaudience" placeholder='Enter No. of Audience *'>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Code</dt>
                            <dd id="code" class=""></dd>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                            <dt class="text-muted">Location</dt>
                            <dd id="location" class=""></dd>
                            <dt class="text-muted">Target Audience</dt>
                            <dd id="targetaudience" class=""></dd>
                            <dt class="text-muted">Total Audience</dt>
                            <dd id="totalaudience" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
<!-- container-fluid -->
</div>
               
<?php 
$schedules = $conn->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>



<textarea name="" id="parsevalue" style='display:none;' cols="30" rows="10"><?= json_encode($sched_res) ?></textarea>

                </div>
            </div>




        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

<!--########################################################## End Content ##############################################-->


<script>
    $(document).ready(function(){

    $('.type_0').change(function(){

        var type_0 = $('.type_0').val();                                                   
            $.ajax({
                url:"agriboostdmstransactions/salesfarmerfetch.php",
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
    function addcomm(){
        var data = {                                 
            feedcode: $("#feedcode").val(),
            fname: $("#fname").val(),
            fnamecode: $("#fnamecode").val(),
            feeddate: $("#feeddate").val(),
            numdel: $("#numdel").val(),
            quniqueone: $("#quniqueone").val(),
            qone: $("#qone").val(),
            qoner: $("#qoner").val(),
            qtwo: $("#qtwo").val(),
            qtwor: $("#qtwor").val(),
            qthree: $("#qthree").val(),
            qthreer: $("#qthreer").val(),
            qfour: $("#qfour").val(),
            qfourr: $("#qfourr").val(),
            qfive: $("#qfive").val(),
            qfiver: $("#qfiver").val(),
            qsix: $("#qsix").val(),
            qsixr: $("#qsixr").val(),
            quniquetwo: $("#quniquetwo").val(),
            qsuggest: $("#qsuggest").val(),
            fnametype: $("#fnametype").val(),

            
         
        };
         
                   $.ajax({
                           url:"agriboostdmstransactions/feedbackfarmerprocess.php",
                           method:"POST",
                           data:data,
                           success:function(data,status){
                           
                               Swal.fire({
                               title: 'Success',
                               text: 'Saved successfully!',
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
    
</script>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Wait for the document to be fully ready
    $(document).ready(function () {
        // Retrieve the JSON-encoded value from the input field
        var parseValue = $('#parsevalue').val();

        // Parse the JSON value into a JavaScript object
        var scheds = $.parseJSON(parseValue);

        // Check if the 'scheds' data is available
        var calendar;
    var Calendar = FullCalendar.Calendar;
    var events = [];
    $(function() {
        if (scheds) {
            Object.keys(scheds).map(k => {
                var row = scheds[k]
                events.push({ id: row.id, title: row.title, start: row.start_datetime, end: row.end_datetime });
            })
        }
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

        calendar = new Calendar(document.getElementById('calendar'), {
            headerToolbar: {
                left: 'prev,next today',
                right: 'dayGridMonth,dayGridWeek,list',
                center: 'title',
            },
            selectable: true,
            themeSystem: 'bootstrap',
            //Random default events
            events: events,
            eventClick: function(info) {
                var _details = $('#event-details-modal')
                var id = info.event.id
                if (scheds[id]) {
                    _details.find('#code').text(scheds[id].code)
                    _details.find('#title').text(scheds[id].title)
                    _details.find('#description').text(scheds[id].description)
                    _details.find('#start').text(scheds[id].sdate)
                    _details.find('#end').text(scheds[id].edate)
                    _details.find('#location').text(scheds[id].location)
                    _details.find('#targetaudience').text(scheds[id].targetaudience)
                    _details.find('#totalaudience').text(scheds[id].totalaudience)
                    _details.find('#edit,#delete').attr('data-id', id)
                    _details.modal('show')
                } else {
                    alert("Event is undefined");
                }
            },
            eventDidMount: function(info) {
                // Do Something after events mounted
            },
            editable: true
        });

        calendar.render();

        // Form reset listener
        $('#schedule-form').on('reset', function() {
            $(this).find('input:hidden').val('')
            $(this).find('input:visible').first().focus()
        })

        // Edit Button
        $('#edit').click(function() {
            var id = $(this).attr('data-id')
            if (scheds[id]) {
                var _form = $('#schedule-form')
                console.log(String(scheds[id].start_datetime), String(scheds[id].start_datetime).replace(" ", "\\t"))
                _form.find('[name="id"]').val(id)
                _form.find('[name="code"]').val(scheds[id].code)
                _form.find('[name="title"]').val(scheds[id].title)
                _form.find('[name="description"]').val(scheds[id].description)
                _form.find('[name="start_datetime"]').val(String(scheds[id].start_datetime).replace(" ", "T"))
                _form.find('[name="end_datetime"]').val(String(scheds[id].end_datetime).replace(" ", "T"))
                _form.find('[name="location"]').val(scheds[id].location)
                _form.find('[name="targetaudience"]').val(scheds[id].targetaudience)
                _form.find('[name="totalaudience"]').val(scheds[id].totalaudience)
                $('#event-details-modal').modal('hide')
                _form.find('[name="title"]').focus()
            } else {
                alert("Event is undefined");
            }
        })

        // Delete Button / Deleting an Event
        $('#delete').click(function() {
            var id = $(this).attr('data-id')
            if (scheds[id]) {
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
                        window.location.href="agriboostdmstransactions/delete_schedule.php?id=" + id;
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
        })
    })
    });
</script>

<?php include 'agriboostdmstransactions/footer.php';?>
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


<script src="function/stars/assets/libs/jquery-bar-rating/jquery.barrating.min.js"></script>

<script src="function/stars/assets/js/pages/rating-init.js"></script>




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






