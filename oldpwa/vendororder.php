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

    <div id="menu_body"></div>


  
  
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
  
  
 <!--####################################################### Start HEader ###############################################################-->
    
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
  <!--####################################################### End HEader ###############################################################-->
  
  <!--####################################################### Start Content ###############################################################-->
  

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
  $finalcode='CM'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
?>

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Market Channels' Order</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Order</li>
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
                                    <h4 class="card-title">Add Data</h4>

                                
                                        <form class="p-3">
                                            <div class="m-0">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" id="myInput" onkeyup="myFunction()">                                                   
                                                </div>
                                            </div>
                                        </form>
                                
                                 
                                        <div class="main-form">
                                            
                                    

                                            <h4 style='margin-top: 30px; font-size: 15px; color: royalblue;'>Commodities</h4>
                                  
                                            <form id="dateForm">
                                                <div class="table-responsive">
                                                        <table id="myTable03a" style="width:100%;" class="display table table-bordered wrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Commodity</th>
                                                                    <th style="display:none;">Type</th>                                                                   
                                                                    <th>Price</th>
                                                                    <th>Qty</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="myTable">
                                                                <?php
                                                                include 'agriboostdmstransactions/db.inc.php';
                                                                $query1 = mysqli_query($conn,"SELECT * FROM commodityhubpos WHERE sellingtype='Wholesale' AND classcom='Class A' ORDER BY `type` ASC");
                                                                while($result1 = mysqli_fetch_array($query1)): ?>
                                                                <tr>
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_comm" name="trans_comm[]" value="<?php echo $result1 ['commodity']; ?>"></td> 
                                                                    <td><?php echo $result1 ['commodity']; ?></td>    
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_type" name="trans_type[]" value="<?php echo $result1 ['type']; ?>"></td> 
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_sellingtype" name="trans_sellingtype[]" value="<?php echo $result1 ['sellingtype']; ?>"></td> 
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_class" name="trans_class[]" value="<?php echo $result1 ['classcom']; ?>"></td> 
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_price" name="trans_price[]" value="<?php echo $result1 ['price']; ?>"></td> 
                                                                    <td><?php echo $result1 ['price']; ?></td> 

                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_date" name="trans_date[]" value="<?php echo $date_f; ?>"></td> 
                                                                    <td><input type="number" class="form-control" id="trans_commitvol" name="trans_commitvol[]" placeholder="0"></td> 

                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_status" name="trans_status[]" value="Pending"></td> 

                                                                    <td style="display:none;"><input type="text" class="form-control partnername" id="trans_partner" name="trans_partner[]"></td> 
                                                                    <td style="display:none;">
                                                                        <select id="pcode" class="form-select partnercode" id="trans_partnercode" name="trans_partnercode[]">
                                                                        </select> 
                                                                    </td> 
                                                                    <td style="display:none;">
                                                                        <select id="pcode" class="form-select partnertype" id="trans_partnertype" name="trans_partnertype[]">
                                                                        </select> 
                                                                    </td> 
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_encoder" value="<?php echo $userid;?>" name="trans_encoder[]"></td> 
                                                               
                                                                   
                                                                                                                      
                                                                </tr>      
                                                                <?php endwhile; ?>                                                  
                                                            </tbody>
                                                        </table>
                                                 </div>
                                           
                                            
                                         
                                               


                                                 <h4 style='margin-top: 30px; font-size: 15px; color: royalblue;'>Details</h4>

                                              


                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <div class="commo">
                                                        <label for="reg">Name</label>                                                       
                                                            <select id="partner_name" class="form-select farmer_1 farmer_0">
                                                              <option value="">Select Market Channel *</option>
                                                                  <?php  
                                                                    $sql = "SELECT * FROM registrationhubpos WHERE `type`='Vendor' GROUP BY fname";
                                                                    $query = mysqli_query($conn, $sql);
                                                                  ?>
                                                                  <?php foreach($query as $q){ ?>  
                                                                      <option value="<?php echo $q ['fname'];?>"><?php echo $q ['fname'];?></option>
                                                                  <?php } ?>
                                                            </select> 
                                                            </div>                                        
                                                    </div>
                                                </div> 

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dt_joined">Start Date</label>
                                                                <input type="date" required class="form-control" id="start_date" name="start_date">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dt_joined">End Date</label>
                                                                <input type="date" required class="form-control" id="end_date" name="end_date">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 
                                                </div>
                                                <button type="submit" class="btn btn-primary submit-btn w-100">Commit</button>
                                            </form>
                                               

                                         

                                            
                                                

                                                

                                        </div>

                                      
                          <!--  <a href="fmrdata.php" class="btn btn-warning waves-effect waves-light">Exit</a> -->
                            </div>
                             
                        </div>
                    </div>

                    
                </div>

                </div>
            </div>



                



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!--####################################################### End Content ###############################################################-->
<script>
   
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
                                       
</script>



<script>
  $(document).ready(function(){

  $('.farmer_1').change(function(){

      var farmer_1 = $('.farmer_1').val();                                                    
          $.ajax({
              url:"agriboostdmstransactions/farmercommitmentfetch.php",
              method:"POST",
              data:{farmer_1:farmer_1},
              success:function(data){
                  $('.partnercode').html(data);
              }
          });
  
  });

  });
</script>

<script>
  $(document).ready(function(){

  $('.farmer_0').change(function(){

      var farmer_0 = $('.farmer_0').val();                                                    
          $.ajax({
              url:"agriboostdmstransactions/farmercommitmentfetch.php",
              method:"POST",
              data:{farmer_0:farmer_0},
              success:function(data){
                  $('.partnertype').html(data);
              }
          });
  
  });

  });
</script>

<script>
  $(document).ready(function () {
      $("#partner_name").on('change', function() {
          var newValue = $(this).val();
          $(".partnername").val(newValue);
      });
  });
</script>

<script>
$(document).ready(function () {
    $("#partner_name").on('change', function () {
        var newValue = $(this).val();
        $(".partnername").val(newValue);
    });

    $("#username").on('change', function () {
        var newValue = $(this).val();
        $(".user").val(newValue);
    });

    $("#dateForm").submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "agriboostdmstransactions/vendororderprocess.php",
            data: $(this).serialize(),
            dataType: "text", // Change the data type to text
            success: function (response) {
                if (response === "success") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Data saved successfully!',
                        showConfirmButton: false,
                        timer: 2000, // Auto close after 2 seconds
                    }).then(function () {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Error',
                        text: 'Error saving data: ' + response,
                    });
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Error saving data: ' + errorThrown,
                });
            }
        });
    });
});

</script>

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






