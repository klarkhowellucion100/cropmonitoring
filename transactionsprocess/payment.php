
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
                                <h4 class="mb-0">Dashboard </h4>

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
                                    <h4 class="card-title mb-4"></h4>
                                
                                    <!-- Tab panes -->

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Payments</h4>
                                                  

                                                    <div class="table-responsive">
                                                        
                                                    <?php if($userposition=="Family Representative"){?>
                                                        <table class="table mb-0">

                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Date</th>
                                                                    <th>Payment</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            
                                                           
                                                            <tbody>

                                                            <?php
                                                                include 'db.inc.php';
                                                                $query = mysqli_query($conn, "SELECT * FROM list_clanapp WHERE userid='$userid'");
                                                                while($result = mysqli_fetch_array($query)): ?>

                                                                <tr>
                                                                    <th><?php echo $result['fname']; ?></th>
                                                                    <td><?php echo $result['userdate']; ?></td>
                                                                    <td><?php echo $result['userpaid']; ?></td>
                                                                    <td><?php echo $result['userpaymentstatus']; ?></td>
                                                                </tr>

                                                                <?php endwhile; ?> 
                                                              
                                                            </tbody>
                                                        </table>
                                                     <?php } ?> 

                                                     <?php if($userposition=="Clan Representative"){?>
                                                        <table class="table mb-0">

                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Date</th>
                                                                    <th>Payment</th>
                                                                    <th>Status</th>
                                                                    <th style='display:none;'>Hidden</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            
                                                           
                                                            <tbody>

                                                            <?php
                                                                include 'db.inc.php';
                                                                $query = mysqli_query($conn, "SELECT * FROM list_clanapp WHERE clanname='$clanname'");
                                                                while($result = mysqli_fetch_array($query)): ?>

                                                                <tr>
                                                                    <th><?php echo $result['fname']; ?></th>
                                                                    <td><?php echo $result['userdate']; ?></td>
                                                                    <td><?php echo $result['userpaid']; ?></td>                                                                   
                                                                    <td><?php echo $result['userpaymentstatus']; ?></td>
                                                                    <td style='display:none;'><input type="text" readonly id='codehidden' value='<?php echo $result ['paymentid'];?>'></td>
                                                                    <td> <button onClick="updatemecollect('updatecollect=<?php echo $result ['paymentid'];?>')" <?php if ($result['userpaymentstatus'] == "Collected" || $result['userpaymentstatus'] == "Approved") { echo 'disabled'; } ?> class="btn  btn-raised btn-warning waves-effect">Collected</button></td>

                                                                  
                                                                </tr>

                                                                <?php endwhile; ?> 
                                                              
                                                            </tbody>
                                                        </table>
                                                     <?php } ?> 


                                                     <?php if($userposition=="Treasurer"){?>
                                                        <table class="table mb-0">

                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Date</th>
                                                                    <th>Payment</th>
                                                                    <th>Status</th>
                                                                    <th style='display:none;'>Hidden</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            
                                                           
                                                            <tbody>

                                                            <?php
                                                                include 'db.inc.php';
                                                                $query = mysqli_query($conn, "SELECT * FROM list_clanapp");
                                                                while($result = mysqli_fetch_array($query)): ?>

                                                                <tr>
                                                                    <th><?php echo $result['fname']; ?></th>
                                                                    <td><?php echo $result['userdate']; ?></td>
                                                                    <td><?php echo $result['userpaid']; ?></td>                                                                   
                                                                    <td><?php echo $result['userpaymentstatus']; ?></td>
                                                                    <td style='display:none;'><input type="text" readonly id='codehidden' value='<?php echo $result ['paymentid'];?>'></td>
                                                                    <td> <button onClick="updatemeapprove('updateapprove=<?php echo $result ['paymentid'];?>')" <?php if ($result['userpaymentstatus'] == "Pending" || $result['userpaymentstatus'] == "Approved") { echo 'disabled'; } ?> class="btn  btn-raised btn-success waves-effect">Approved</button></td>

                                                                  
                                                                </tr>

                                                                <?php endwhile; ?> 
                                                              
                                                            </tbody>
                                                        </table>
                                                     <?php } ?> 

                                                     <?php if($userposition=="President" || $userposition=="Vice President" || $userposition=="Secretary" || $userposition=="Treasurer" || $userposition=="Auditor" || $userposition=="Assistant Auditor"){?>
                                                        <table class="table mb-0">

                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Date</th>
                                                                    <th>Payment</th>
                                                                    <th>Status</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            
                                                           
                                                            <tbody>

                                                            <?php
                                                                include 'db.inc.php';
                                                                $query = mysqli_query($conn, "SELECT * FROM list_clanapp");
                                                                while($result = mysqli_fetch_array($query)): ?>

                                                                <tr>
                                                                    <th><?php echo $result['fname']; ?></th>
                                                                    <td><?php echo $result['userdate']; ?></td>
                                                                    <td><?php echo $result['userpaid']; ?></td>                                                                   
                                                                    <td><?php echo $result['userpaymentstatus']; ?></td>
                                                                    
                                                                  
                                                                </tr>

                                                                <?php endwhile; ?> 
                                                              
                                                            </tbody>
                                                        </table>
                                                     <?php } ?> 



                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                
                                        

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                    
                    </div>



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
