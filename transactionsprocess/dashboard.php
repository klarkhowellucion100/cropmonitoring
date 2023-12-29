
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
$clanname = $_SESSION['clanname'];



// echo '-------------------------------------'.$userprofile;

if($userid==true){

   

} else {

    header("location:login.php");
}

$query= "SELECT * FROM usertableclanapp WHERE id ='$userid'";
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
                        <a href="javascript:void(0);" class="logo logo-dark">
                                <span class="logo-sm">
              
              
                                <img src="users/clan.jpg" alt="" height="50">
                                </span>
                                <span class="logo-lg">
                                    <img src="users/clan.jpg" alt="" height="100">
                                </span>
                            </a>

                        <a href="javascript:void(0);" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="users/clan.jpg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="users/clan.jpg" alt="" height="20">
                                </span>
                            </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    <!-- App Search-->
              




                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="uil-search"></i>
                            </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="uil-minus-path"></i>
                            </button>
                    </div>

                

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                     <img style='height:30px; width:30px; border-radius:50%;' src='users/2.jpg'/>
                             
                                <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?php echo $userprofile;?></span>
                                <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                            </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                           <!-- <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a> -->
              
                            <a class="dropdown-item" href="transactionsprocess/logoutprocess.php"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign Out</span></a>
                        </div>
                    </div>

                    <!--
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="uil-cog"></i>
                            </button>
                    </div>
                    -->
                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="javascript:void(0);" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="users/clan.jpg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="users/clan.jpg" alt="" height="20">
                        </span>
                    </a>

                <a href="javascript:void(0);" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="users/clan.jpgg" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="users/clan.jpg" alt="" height="20">
                        </span>
                    </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                  
             
                        <li>
                            <a style='cursor:pointer;' href="home.html">
                                    <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                                    <span>Home</span>
                                </a>
                        </li>

                        
                        <li>
                            <a style='cursor:pointer;' href="payment.html">
                                    <i class="uil-file-alt"></i></span>
                                    <span>Payment</span>
                                </a>
                        </li>


                        <?php if($userposition=="President" || $userposition=="Vice President" || $userposition=="Secretary"){?>
                        <li>
                            <a style='cursor:pointer;' href="approval.html">
                                    <i class="uil-file-alt"></i></span>
                                    <span>Registration</span>
                                </a>
                        </li>
                        <?php } ?> 


                    <!--
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="uil-file-alt"></i>
                                    <span>Commodities</span>
                                </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                <?php if($usertype=="Employee"){?>
                                    <a style='cursor:pointer;' href='volumeadd.php'>Add Data</a>   
                                <?php } ?> 
                             
                                    <a style='cursor:pointer;' href='volumeview.php'>View Data</a> 
                                
                                </li>
                            </ul>

                        </li> 
                    -->

         
                    <li>
                            <a style='cursor:pointer;' href="transactionsprocess/logoutprocess.php">
                                    <i class="uil-file-alt"></i>
                                    <span>Logout</span>
                            </a>
                    </li>

                      
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



              <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

        <!--###############################################################################################################Start###################################################################################-->
    <!-- start page title -->
    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Transaction</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                   
<div id="dashboardmain">

<?php
$date_f = date('Y-m-d');
?>

<style>
    /* Custom styles for bottom modal */
.bottom-modal .modal-dialog.modal-bottom {
  margin: 0;
  position: absolute;
  bottom: -100%; /* Start offscreen */
  left: 0;
  right: 0;
  transform: translate(0, 100%);
  transition: transform 0.3s ease-in-out;
}

.bottom-modal.show .modal-dialog.modal-bottom {
  transform: translate(0, 0);
}
</style>


                                 
                                            <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Payment</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">

                                                        <div class="mb-3" style='display:none;'>
                                                            <label class="form-label" for="fname">UserId</label>
                                                            <input type="text" class="form-control" id="userid" name="userid" value="<?php echo $userid; ?>">
                                                        </div>

                                                        <div class="mb-3" style='display:none;'>
                                                            <label class="form-label" for="username">Full Name</label>
                                                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $userprofile; ?>">
                                                        </div>

                                                    
                                                        <div class="mb-3" style='display:none;'>
                                                            <label class="form-label" for="userpaymentstatus">Payment Status</label>
                                                            <input type="text" class="form-control" id="userpaymentstatus" name="userpaymentstatus" value='Pending'>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label" for="userdate">Date of Payment</label>
                                                            <input type="date" class="form-control" id="userdate" name="userdate">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label" for="userpaid">Amount</label>
                                                            <input type="number" class="form-control" id="userpaid" name="userpaid" placeholder='Enter Amount *'>
                                                        </div>

                                                        <div class="mb-3" style='display:none;'>
                                                            <label class="form-label" for="usertransactiondate">Transaction Date</label>
                                                            <input type="text" class="form-control" id="usertransactiondate" name="usertransactiondate" value='<?php echo $date_f;?>'>
                                                        </div>

                                                      


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" onclick=addcomm()>Save changes</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                            


                                         


<div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">2023 Reunion</h4>
                                    
                                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="4"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="5"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="6"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="7"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="8"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="9"></li>
                                            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="10"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="2000">
                                                <img src="photos/01.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">                                    
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="photos/02.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="photos/03.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="photos/04.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="photos/05.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="photos/06.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="photos/07.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="photos/08.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <img src="photos/09.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                         
                                            <div class="carousel-item">
                                                <img src="photos/010.jpg" class="d-block w-100" alt="...">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Previous</span>
                                            </a>
                                        <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="visually-hidden">Next</span>
                                            </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

<div class="row">

<?php
$currentDate = date("Y-m-d"); // Format: Year-Month-Day Hour:Minute:Second

?>

            <?php if($userposition=="Family Representative"){?>
                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                       
                                            <i class="uil-graph-bar" style="color: red; font-size: 30px;"></i>
                                        
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT SUM(userpaid) FROM list_clanapp WHERE userid='$userid' AND userpaymentstatus='Approved'");
                                            while($result = mysqli_fetch_array($query)): ?>
                                            

                                                <?php
                                                    $startDate = "2023-07-01";
                                                    $endDate = date('Y-m-d');
                                                    
                                                    $startDateObj = new DateTime($startDate);
                                                    $endDateObj = new DateTime($endDate);
                                                    
                                                    $interval = $endDateObj->diff($startDateObj);
                                                    
                                                    $months = ($interval->y * 12) + $interval->m + ($interval->d / 30);
                                                    $contribution = $months*100;
                                                  
                                                    $userpaid=$result['SUM(userpaid)'];   
                                                    $balance = $contribution-$userpaid;
                                                    ?>

                                        <h4 class="mb-1 mt-1">Php <span data-plugin="counterup"> <?php echo number_format($userpaid,2);?></span></h4>
                                        <p class="text-muted mb-0">  Paid Contribution </p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                           
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: orange; font-size: 30px;"></i>
                                    </div>
                                    <div>

                                 

                                        <h4 class="mb-1 mt-1">Php <span data-plugin="counterup"> <?php echo number_format($balance,2);?></span></h4>
                                        <p class="text-muted mb-0"> Balance </p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                       
                                            <i class="uil-graph-bar" style="color: yellow; font-size: 30px;"></i>
                                        
                                    </div>
                                    <div>
                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT COUNT(id) FROM list_clanapp WHERE userid='$userid'");
                                            while($result = mysqli_fetch_array($query)): ?>
                                               

                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"> <?php echo number_format($result['COUNT(id)']);?></span></h4>
                                        <p class="text-muted mb-0">  Payments Made</p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->
        <?php } ?> 


        <?php if($userposition=="Clan Representative"){?>
                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                       
                                            <i class="uil-graph-bar" style="color: red; font-size: 30px;"></i>
                                        
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT SUM(userpaid) FROM list_clanapp WHERE clanname='$clanname' AND userpaymentstatus='Collected'");
                                            while($result = mysqli_fetch_array($query)): ?>
                                            

                                                <?php
                                                    $startDate = "2023-07-01";
                                                    $endDate = date('Y-m-d');
                                                    
                                                    $startDateObj = new DateTime($startDate);
                                                    $endDateObj = new DateTime($endDate);
                                                    
                                                    $interval = $endDateObj->diff($startDateObj);
                                                    
                                                    $months = ($interval->y * 12) + $interval->m + ($interval->d / 30);
                                                    $contribution = $months*100;
                                                  
                                                    $userpaid=$result['SUM(userpaid)'];   
                                                    $balance = $contribution-$userpaid;
                                                    ?>

                                        <h4 class="mb-1 mt-1">Php <span data-plugin="counterup"> <?php echo number_format($userpaid,2);?></span></h4>
                                        <p class="text-muted mb-0">  Total Collection </p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: orange; font-size: 30px;"></i>
                                    </div>
                                    <div>
                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT SUM(userpaid) FROM list_clanapp WHERE clanname='$clanname' AND userpaymentstatus='Pending'");
                                            while($result = mysqli_fetch_array($query)): ?>
                                 

                                        <h4 class="mb-1 mt-1">Php <span data-plugin="counterup"> <?php echo number_format($result['SUM(userpaid)'],2);?></span></h4>
                                        <p class="text-muted mb-0"> Uncollected </p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                       
                                            <i class="uil-graph-bar" style="color: yellow; font-size: 30px;"></i>
                                        
                                    </div>
                                    <div>
                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT COUNT(id) FROM list_clanapp WHERE clanname='$clanname'");
                                            while($result = mysqli_fetch_array($query)): ?>
                                               

                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"> <?php echo number_format($result['COUNT(id)']);?></span></h4>
                                        <p class="text-muted mb-0">  Payments Made</p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->
        <?php } ?> 

       
                                              
        
        <?php if($userposition=="President" || $userposition=="Vice President" || $userposition=="Secretary" || $userposition=="Assistant Treasurer" || $userposition=="Treasurer" || $userposition=="Auditor" || $userposition=="Assistant Auditor"){?>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                       
                                            <i class="uil-graph-bar" style="color: red; font-size: 30px;"></i>
                                        
                                    </div>
                                    <div>

                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT SUM(userpaid) FROM list_clanapp WHERE userpaymentstatus='Approved'");
                                            while($result = mysqli_fetch_array($query)): ?>
                                            

                                                <?php
                                                    $startDate = "2023-07-01";
                                                    $endDate = date('Y-m-d');
                                                    
                                                    $startDateObj = new DateTime($startDate);
                                                    $endDateObj = new DateTime($endDate);
                                                    
                                                    $interval = $endDateObj->diff($startDateObj);
                                                    
                                                    $months = ($interval->y * 12) + $interval->m + ($interval->d / 30);
                                                    $contribution = $months*100;
                                                  
                                                    $userpaid=$result['SUM(userpaid)'];   
                                                    $balance = $contribution-$userpaid;
                                                    ?>

                                        <h4 class="mb-1 mt-1">Php <span data-plugin="counterup"> <?php echo number_format($userpaid,2);?></span></h4>
                                        <p class="text-muted mb-0">  Total Approved </p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: orange; font-size: 30px;"></i>
                                    </div>
                                    <div>
                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT SUM(userpaid) FROM list_clanapp WHERE userpaymentstatus='Collected'");
                                            while($result = mysqli_fetch_array($query)): ?>
                                 

                                        <h4 class="mb-1 mt-1">Php <span data-plugin="counterup"> <?php echo number_format($result['SUM(userpaid)'],2);?></span></h4>
                                        <p class="text-muted mb-0"> Total Collected </p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                       
                                            <i class="uil-graph-bar" style="color: yellow; font-size: 30px;"></i>
                                        
                                    </div>
                                    <div>
                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT SUM(userpaid) FROM list_clanapp WHERE userpaymentstatus='Pending'");
                                            while($result = mysqli_fetch_array($query)): ?>
                                               

                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"> <?php echo number_format($result['SUM(userpaid)']);?></span></h4>
                                        <p class="text-muted mb-0">  Total Pending</p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                       
                                            <i class="uil-graph-bar" style="color: yellow; font-size: 30px;"></i>
                                        
                                    </div>
                                    <div>
                                    <?php
                                            include 'db.inc.php';
                                            $query = mysqli_query($conn, "SELECT COUNT(id) FROM list_clanapp");
                                            while($result = mysqli_fetch_array($query)): ?>
                                               

                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"> <?php echo number_format($result['COUNT(id)']);?></span></h4>
                                        <p class="text-muted mb-0">  Total Payment</p>
                                    </div>
                                    <!--<p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                                    </p>-->
                                </div>
                            </div>
                            <?php endwhile; ?> 
                        </div>
                        <!-- end col-->
      
                       

                        
                    </div>

                    <?php } ?> 
                       
                       
    

              

                        
                    

                    <?php if($userposition=="Family Representative"){?>
                        <div class="row">
                            <div class="col-xl-12">

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4"></h4>
                                    
                                        <!-- Tab panes -->

                                        <button type="button" class="btn btn-primary waves-effect waves-light" style='width:100%;' data-bs-toggle="modal" data-bs-target="#myModal">PAY</button>
                                    
                                            

                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card-->
                        
                        </div>
                    <?php } ?> 



        <!--###############################################################################################################End#####################################################################################-->

    
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
            </script> © Klarksites.
        </div>
        <div class="col-sm-6">
            <div class="text-sm-end d-none d-sm-block">
                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://www.facebook.com/klarkhowel.lucion" target="_blank" class="text-reset">Klarksites</a>
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

<h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

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
