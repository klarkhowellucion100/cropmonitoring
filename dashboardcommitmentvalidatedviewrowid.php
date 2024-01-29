<?php
include 'db.inc.php';



session_start();


//session
$userprofile = $_SESSION['fname'];
$userid = $_SESSION["id"];
$usertype = $_SESSION['type'];                       
$userposition = $_SESSION['position'];
$userbday = $_SESSION['bday'];
$usersex = $_SESSION['gender'];
$usernumber = $_SESSION['cnumber'];
$userauthorize = $_SESSION['regval'];

$userass_brgy = $_SESSION['as_brgy'];


// echo '-------------------------------------'.$userprofile;

if($userprofile==true){

   

} else {

    header("location:login.html");
}

$query= "SELECT * FROM usertable_cms WHERE uname ='$userprofile'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);


?>

<?php
    include 'db.inc.php';
    if(isset($_POST['id'])){ 
?>

<?php 

$id = $_POST['id'];
?>


<?php  
    $date_f = date('Y-m-d');
    $date_t = date('H:i:s');
    $date_m = date('m');
    $date_d = date('d');
    $date_y = date('Y');
?>

<!--START OVERALL -->

                   

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Findings</h4>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Details</a>
                                                <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Fertilizer Application</a>
                                                <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pest and Disease Present</a>
                                                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Control Agents Used</a>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <?php
                                                    $query001 = mysqli_query($conn,"SELECT * FROM monitoring_production_cms, usertable_cms WHERE monitoring_production_cms.encoder = usertable_cms.id AND monitoring_production_cms.mon_id='$id' ORDER BY date_monitor ");
                                                    while($q001 = mysqli_fetch_array($query001)): ?>

                                                            <!--Start Details-->
                                                                <div class="col-xl-12">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                           
                                                                            <h4 class="card-title mb-4">Activity Details</h4>

                                                                            <ol class="activity-feed mb-0 ps-2" data-simplebar style="max-height: 339px;">
                                                                                
                                                                                <li class="feed-item">
                                                                                    <p class="text-muted mb-1 font-size-13">Date Monitored: <?php echo date('M d, Y', strtotime($q001['date_monitor'])); ?></p>
                                                                                    <p class="mb-0">Monitored by: <span class="text-primary"><?php echo $q001['fname'];?></span></p>
                                                                                    <br>
                                                                                    <p class="mb-0"><span class="text-primary">Validated Production Details </span></p>
                                                                                    <p class="mb-0">Farmer Name: <span class="text-primary"><?php echo $q001['name'];?></span></p>
                                                                                    <p class="mb-0">Commodity: <span class="text-primary"><?php echo $q001['comm'];?></span></p>
                                                                                    <p class="mb-0">Validated Hills: <span class="text-primary"><?php echo number_format($q001['hills'],2);?></span></p>
                                                                                    <p class="mb-0">Date of Harvest: <span class="text-primary"><?php echo date('M d, Y', strtotime($q001['date_harvest'])); ?></span></p>
                                                                                    <br>
                                                                                    <p class="mb-0"><span class="text-primary">Status of Monitoring</span></p>
                                                                                    <p class="mb-0">Monitoring Status: <span class="text-primary"><?php echo $q001['mon_status'];?></span></p>
                                                                                    <p class="mb-0">Cause (If partially damaged or damaged): <span class="text-primary"><?php echo $q001['mon_findings'];?></span></p>
                                                                                    <p class="mb-0">Actual Date of Harvest: <span class="text-primary"><?php echo date('M d, Y', strtotime($q001['actual_monitor'])); ?></span></p>
                                                                                    <p class="mb-0">Actual Yield: <span class="text-primary"><?php echo number_format($q001['actual_yield'],2);?></span></p>
                                                                                    <br>
                                                                                    <p class="mb-0">Applied Fertilizer: <span class="text-primary"><?php echo $q001['mon_fert_ex'];?></span></p>
                                                                                    <p class="mb-0">Existence of Pests and Disease: <span class="text-primary"><?php echo $q001['mon_pest_ex'];?></span></p>
                                                                                    <p class="mb-0">Pesticides Used: <span class="text-primary"><?php echo $q001['mon_cont_ex'];?></span></p>
                                                                                    <br>
                                                                                    <p class="mb-0"><span class="text-primary">Comments</span></p>
                                                                                    <p class="mb-0">Overall Findings: <span class="text-primary"><?php echo $q001['mon_findings'];?></span></p>
                                                                                    <p class="mb-0">Recommendation from AEW: <span class="text-primary"><?php echo $q001['mon_recomm'];?></span></p>
                                                                                    <p class="mb-0">Farmer's Response: <span class="text-primary"><?php echo $q001['mon_recomm'];?></span></p>
                                                                                </li>
                                                                                

                                                                            </ol>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!--End Details-->
                                                    <?php endwhile; ?>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <?php
                                                        $query002 = mysqli_query($conn,"SELECT * FROM fertilizer_monitoring_cms, usertable_cms WHERE fertilizer_monitoring_cms.encoder_from = usertable_cms.id AND fertilizer_monitoring_cms.id_from='$id' ORDER BY date_validated ");
                                                        while($q002 = mysqli_fetch_array($query002)): ?>

                                                            <!--Start Details-->
                                                                <div class="col-xl-12">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                           
                                                                            <h4 class="card-title mb-4">Fertilizer Application Details</h4>

                                                                            <ol class="activity-feed mb-0 ps-2" data-simplebar style="max-height: 339px;">
                                                                                
                                                                                <li class="feed-item">
                                                                                    <p class="text-muted mb-1 font-size-13">Date Monitored: <?php echo date('M d, Y', strtotime($q002['date_validated'])); ?></p>
                                                                                    <p class="mb-0">Monitored by: <span class="text-primary"><?php echo $q002['fname'];?></span></p>
                                                                                    <br>
                                                                                    <p class="mb-0"><span class="text-primary">Fertilizers Used </span></p>
                                                                                    <p class="mb-0">Ferilizer Name: <span class="text-primary"><?php echo $q002['name_from'];?></span></p>
                                                                                  
                                                                                </li>
                                                                                

                                                                            </ol>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!--End Details-->
                                                    <?php endwhile; ?>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <?php
                                                        $query003 = mysqli_query($conn,"SELECT * FROM pest_monitoring_cms, usertable_cms WHERE pest_monitoring_cms.encoder_from = usertable_cms.id AND pest_monitoring_cms.id_from='$id' ORDER BY date_validated ");
                                                        while($q003 = mysqli_fetch_array($query003)): ?>

                                                            <!--Start Details-->
                                                                <div class="col-xl-12">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                           
                                                                            <h4 class="card-title mb-4">Pest and Disease Present</h4>

                                                                            <ol class="activity-feed mb-0 ps-2" data-simplebar style="max-height: 339px;">
                                                                                
                                                                                <li class="feed-item">
                                                                                    <p class="text-muted mb-1 font-size-13">Date Monitored: <?php echo date('M d, Y', strtotime($q003['date_validated'])); ?></p>
                                                                                    <p class="mb-0">Monitored by: <span class="text-primary"><?php echo $q003['fname'];?></span></p>
                                                                                    <br>
                                                                                    <p class="mb-0"><span class="text-primary">Pests and Diseases Present</span></p>
                                                                                    <p class="mb-0">Name: <span class="text-primary"><?php echo $q003['name_from'];?></span></p>
                                                                                    <p class="mb-0">Type: <span class="text-primary"><?php echo $q003['type_from'];?></span></p>
                                                                                  
                                                                                </li>
                                                                                

                                                                            </ol>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!--End Details-->
                                                    <?php endwhile; ?>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <?php
                                                        $query004 = mysqli_query($conn,"SELECT * FROM controlagent_monitoring_cms, usertable_cms WHERE controlagent_monitoring_cms.encoder_from = usertable_cms.id AND controlagent_monitoring_cms.id_from='$id' ORDER BY date_validated ");
                                                        while($q004 = mysqli_fetch_array($query004)): ?>

                                                            <!--Start Details-->
                                                                <div class="col-xl-12">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                           
                                                                            <h4 class="card-title mb-4">Pesticides Used</h4>

                                                                            <ol class="activity-feed mb-0 ps-2" data-simplebar style="max-height: 339px;">
                                                                                
                                                                                <li class="feed-item">
                                                                                    <p class="text-muted mb-1 font-size-13">Date Monitored: <?php echo date('M d, Y', strtotime($q004['date_validated'])); ?></p>
                                                                                    <p class="mb-0">Monitored by: <span class="text-primary"><?php echo $q004['fname'];?></span></p>
                                                                                    <br>
                                                                                    <p class="mb-0"><span class="text-primary">Pesticides</span></p>
                                                                                    <p class="mb-0">Name: <span class="text-primary"><?php echo $q004['name_from'];?></span></p>
                                                                                  
                                                                                </li>
                                                                                

                                                                            </ol>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!--End Details-->
                                                    <?php endwhile; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->
                                       
                                           
                                     
                            
                      
<?php } ?>







    









                               

















