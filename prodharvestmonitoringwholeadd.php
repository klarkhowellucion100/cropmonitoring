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
    if(isset($_POST['code']) && isset($_POST['comm_id'])&& isset($_POST['name_id'])&& isset($_POST['barangay_id'])&& isset($_POST['hills_id'])&& isset($_POST['date_sown_id'])&& isset($_POST['date_harvest_id'])){ 
?>

<?php 

$code = $_POST['code'];
$comm_id = $_POST['comm_id'];
$name_id = $_POST['name_id'];
$barangay_id = $_POST['barangay_id'];
$hills_id = $_POST['hills_id'];
$date_sown_id = $_POST['date_sown_id'];
$date_harvest_id = $_POST['date_harvest_id'];
?>


<!--START OVERALL -->

                                          

                                <div class="row">
                                   

                                    
                                   
                                                                  
                                </div>

                                         

                                            <div class="mb-3">
                                                <label for="dcom" class="form-label">Code</label>
                                                <input style="display:none;" type="text" class="form-control" id="trans_comm" readonly value="<?php echo $code;?>">
                                                <p><?php echo $code;?></p>
                                            </div>

                                       
                                            <div class="mb-3" >
                                                <label for="dcoty" class="form-label">Name</label>
                                                <input style="display:none;" type="text" class="form-control" id="trans_type" readonly value="<?php echo $name_id;?>">
                                                <p><?php echo $name_id;?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="dcoty" class="form-label">Commodity</label>
                                                <input style="display:none;" type="text" class="form-control" id="trans_type" readonly value="<?php echo $comm_id;?>">
                                                <p><?php echo $comm_id;?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="dcoty" class="form-label">Barangay</label>
                                                <input style="display:none;" type="text" class="form-control" id="trans_type" readonly value="<?php echo $barangay_id;?>">
                                                <p><?php echo $barangay_id;?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="dcoty" class="form-label">No. of Hills</label>
                                                <input style="display:none;" type="text" class="form-control" id="trans_type" readonly value="<?php echo $hills_id;?>">
                                                <p><?php echo $hills_id;?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="dcoty" class="form-label">Date Sown</label>
                                                <input style="display:none;" type="text" class="form-control" id="trans_type" readonly value="<?php echo $date_sown_id;?>">
                                                <p><?php echo date('M d, Y', strtotime($date_sown_id));?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="dcoty" class="form-label">Date of First Harvest</label>
                                                <input style="display:none;" type="text" class="form-control" id="trans_type" readonly value="<?php echo $date_harvest_id;?>">
                                                <p><?php echo date('M d, Y', strtotime($date_harvest_id));?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="dcoty" class="form-label">Selling Type</label>
                                                <input  type="text" class="form-control" id="trans_sellingtype" readonly value="Wholesale">
                                                <p>Wholesale</p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="dcoty" class="form-label">No. of Hills</label>
                                                <input  type="text" class="form-control" id="trans_sellingtype" readonly value="Wholesale">
                                                <p>Wholesale</p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="dcoty" class="form-label">Class</label>
                                                <select class="form-select" aria-label="Default select example" id="trans_class">
                                                        <option value='Class A'>Class A</option>
                                                        <option value='Class B'>Class B</option>
                                                        <option value='Class C'>Class C</option>                              
                                                </select>  
                                            </div>


                                            <div class="mb-3" >
                                                <label for="drate" class="form-label">Price</label>
                                                <input type="text" class="form-control" required id="trans_price" value="<?php echo $q['comm_wsp_f'];?>">      
                                                                                    
                                            </div>

                                            <script>
                                                $(document).ready(function() {
                                                    // Event listener for the change in the trans_class dropdown
                                                    $('#trans_class').change(function() {
                                                        // Get the selected value
                                                        var selectedClass = $(this).val();

                                                        // Get the initial price value
                                                        var initialPrice = <?php echo $q['comm_wsp_f'];?>;

                                                        // Calculate the new price based on the selected class
                                                        var newPrice;
                                                        switch (selectedClass) {
                                                            case 'Class A':
                                                                newPrice = initialPrice * 1;
                                                                break;
                                                            case 'Class B':
                                                                newPrice = initialPrice * 0.75;
                                                                break;
                                                            case 'Class C':
                                                                newPrice = initialPrice * 0.50;
                                                                break;
                                                            case 'Class D':
                                                                newPrice = initialPrice * 0.40;
                                                                break;
                                                            default:
                                                                newPrice = initialPrice;
                                                        }

                                                        // Update the trans_price input with the new value
                                                        $('#trans_price').val(newPrice);
                                                    });
                                                });
                                                </script>

                                            <div class="mb-3" >
                                                <label for="dund" class="form-label"> Committed Volume (kg) <span style="color:crimson;"></span></label>
                                                <input type="text" class="form-control" required id="trans_commitvol" placeholder="Please Enter Weight (kg) *">
                                            </div>

                                            <div class="mb-3">
                                                <label for="dund" class="form-label">Actual Volume (kg)</label>
                                                <input type="text" class="form-control" required id="trans_volume" placeholder="Please Enter Weight (kg) *">
                                            </div>

                                            


                                            <?php  
                                                $date_f = date('Y-m-d');
                                                $date_t = date('H:i:s');
                                                $date_m = date('m');
                                                $date_d = date('d');
                                                $date_y = date('Y');
                                            ?>

                                            <div class="mb-3" >
                                                <label for="cfull" class="form-label">Date</label>
                                                <input type="text" class="form-control" id="trans_date" readonly value="<?php echo $date_f;?>">
                                            </div>
                                            <div class="mb-3" >
                                                <label for="cyear" class="form-label">Year</label>
                                                <input type="text" class="form-control" id="trans_year" readonly value="<?php echo $date_y;?>">
                                            </div>
                                            <div class="mb-3" >
                                                <label for="cmonth" class="form-label">Month</label>
                                                <input type="text" class="form-control" id="trans_month" readonly value="<?php echo $date_m;?>">
                                            </div>
                                            <div class="mb-3" >
                                                <label for="cday" class="form-label">Day</label>
                                                <input type="text" class="form-control" id="trans_day" readonly value="<?php echo $date_d;?>">
                                            </div>
                                            <div class="mb-3" >
                                                <label for="ctime" class="form-label">Time</label>
                                                <input type="text" class="form-control" id="trans_time" readonly value="<?php echo $date_t;?>">
                                            </div>
                                            <div class="mb-3" >
                                                <label for="encoder" class="form-label">Encoder</label>
                                                <input type="text" class="form-control" id="trans_encoder" readonly value="<?php echo $userid;?>">
                                            </div>
                                           
                                     
                                           


                                    
                                        
                                    </div>
                                </div>
                            </div>
                      
<?php } ?>







    









                               

















