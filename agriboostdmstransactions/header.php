  <!-- <body data-layout="horizontal" data-topbar="colored"> -->
  <?php
include 'db.inc.php';



session_start();


//session
$userprofile = $_SESSION['fname'];



$userid = $_SESSION['id'];                      
$usertype = $_SESSION['code'];        
$useruname = $_SESSION['uname'];
$userposition = $_SESSION['position'];
$userbday = $_SESSION['bday'];
$userage = $_SESSION['age'];
$usergender = $_SESSION['gender'];
$usercnumber = $_SESSION['cnumber'];
$usertype = $_SESSION['type'];
$userregval = $_SESSION['regval'];
$component = $_SESSION['component'];



// echo '-------------------------------------'.$userprofile;

if($userid==true){

   

} else {

    header("location:../login.php");
}

$query= "SELECT * FROM usertableadms WHERE id ='$userid'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);


?><!-- <body data-layout="horizontal" data-topbar="colored"> -->

    
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