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

$query= "SELECT * FROM usertablehubpos WHERE uname ='$userprofile'";
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

                    <?php
                        $query1 = mysqli_query($conn,"SELECT * FROM production_cms WHERE id='$id'");
                        while($q = mysqli_fetch_array($query1)): ?>

                                            <div class="mb-3" style="display: none;">
                                                <label for="code" class="form-label">ID</label>
                                                <input style="display:none;" type="text" class="form-control" name="mon_id" id="mon_id" readonly value="<?php echo $q['id'];?>">
                                                <p><?php echo $q['id'];?></p>
                                            </div>

                                            <div class="mb-3">
                                                <label for="code" class="form-label">Code</label>
                                                <input style="display:none;" type="text" class="form-control" name="code" id="code" readonly value="<?php echo $q['code'];?>">
                                                <p><?php echo $q['code'];?></p>
                                            </div>

                                       
                                            <div class="mb-3" >
                                                <label for="name" class="form-label">Name</label>
                                                <input style="display:none;" type="text" class="form-control" name="name" id="name" readonly value="<?php echo $q['name'];?>">
                                                <p><?php echo $q['name'];?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="comm" class="form-label">Commodity</label>
                                                <input style="display:none;" type="text" class="form-control" name="comm" id="comm" readonly value="<?php echo $q['comm'];?>">
                                                <p><?php echo $q['comm'];?></p>
                                            </div>

                                          

                                            <div class="mb-3" >
                                                <label for="hills" class="form-label">No. of Hills</label>
                                                <input style="display:none;" type="text" class="form-control" name="hills" id="hills" readonly value="<?php echo $q['hills'];?>">
                                                <p><?php echo $q['hills'];?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="date_sown" class="form-label">Date Sown</label>
                                                <input style="display:none;" type="text" class="form-control" name="date_sown" id="date_sown" readonly value="<?php echo $q['date_sown'];?>">
                                                <p><?php echo date('M d, Y', strtotime($q['date_sown']));?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="date_harvest" class="form-label">Date of First Harvest</label>
                                                <input style="display:none;" type="text" class="form-control" name="date_harvest" id="date_harvest" readonly value="<?php echo $q['date_harvest'];?>">
                                                <p><?php echo date('M d, Y', strtotime($q['date_harvest']));?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="date_monitor" class="form-label">Date of Monitoring</label>
                                                <input type="date" class="form-control" id="date_monitor" name="date_monitor" value="<?php echo $date_f;?>">
                                            </div>

                                            <div class="mb-3" >
                                                <label for="mon_status" class="form-label">Status</label>
                                                <select class="form-select" aria-label="Default select example" name="mon_status" id="mon_status">
                                                        <option value='On Track'>On Track</option>
                                                        <option value='Partially Damaged'>Partially Damaged</option>
                                                        <option value='Totally Damaged'>Totally Damaged</option>                              
                                                </select>  
                                            </div>

                                            <div class="mb-3" >
                                                <label for="mon_findings" class="form-label">Findings</label>
                                                <textarea class="form-control" name="comon_findingsde" placeholder="Please enter detailed findings..." rows="6" id="mon_findings"></textarea>
                                            </div>
                                        
                                            <div class="mb-3" style="display:none;">
                                                <label for="date_created" class="form-label">Date</label>
                                                <input type="text" class="form-control" name="date_created" id="date_created" readonly value="<?php echo $date_f;?>">
                                            </div>
                                          
                                            <div class="mb-3" style="display:none;">
                                                <label for="encoder" class="form-label">Encoder</label>
                                                <input type="text" class="form-control" name="encoder" id="encoder" readonly value="<?php echo $userid;?>">
                                            </div>

                                        <?php endwhile; ?>
                                           
                                     
                            
                      
<?php } ?>







    









                               

















