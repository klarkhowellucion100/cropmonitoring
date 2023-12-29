
<?php
include 'db.inc.php';

session_start();


//session
$userprofile = $_SESSION['uname'];
$userid = $_SESSION['id'];
$userfname = $_SESSION['fname'];
$usertype= $_SESSION['type'];


if($userprofile==true){

} else {

    header("location:index.php");
}

$query= "SELECT * FROM usertablehubpos WHERE uname ='$userprofile'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);

?>

<?php
    include 'db.inc.php';
    if(isset($_POST['commodityid'])){ 
?>

<?php 

$commodityid = $_POST['commodityid'];

?>

<!--START OVERALL -->

                                          

                                <div class="row">
                                   

                                    <?php  
                                        $sql = "SELECT * FROM transactionfinalhubpos WHERE trans_id=$commodityid";
                                                $query = mysqli_query($conn, $sql);
                                    ?>

                                    <?php 
                                        while($q = mysqli_fetch_array($query)){ 
                                    ?> 
                                    
                                    <?php
                                                                
                                        //$add_prod_file = $q['add_prod_file'];
                                        
                                    ?>
                                                                  
                                </div>

                                         
                                            <div class="mb-3" style="display:none;">
                                                <label for="cfull" class="form-label">ID</label>
                                                <input type="text" class="form-control" id="trans_id" value="<?php echo $q['trans_id'];?>">
                                            </div>
                                                                                
                                           

                                            <div class="mb-3" >
                                                <label for="drate" class="form-label">Price</label>
                                                <input type="text" class="form-control" required id="trans_price" value="<?php echo $q['trans_price'];?>">     
                                            </div>


                                            <div class="mb-3">
                                                <label for="dund" class="form-label">Actual Volume (kg)</label>
                                                <input type="text" class="form-control" required id="trans_volume" value="<?php echo $q['trans_volume'];?>" placeholder="Please Enter Weight (kg) *">
                                            </div>


                                    
                                        
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
<?php } ?>







    









                               

















