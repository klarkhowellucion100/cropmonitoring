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

                  

                                            <div class="mb-3">
                                                <h5 style="color: royalblue;">Validated Details:</h5>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="date_sown" class="form-label">Code</label>
                                                <input type="text" class="form-control prop_code" readonly name="prop_code" id="prop_code" value="<?php echo $id;?>">
                                              
                                            </div>

                                            <div class="mb-3"style="display:none;" >
                                                <label for="date_sown" class="form-label">Date of Validation</label>
                                                <input type="date" class="form-control prop_date" name="prop_date" id="prop_date" value="<?php echo $date_f;?>">
                                              
                                            </div>

                                            <div class="mb-3" >
                                                <label for="date_sown" class="form-label">Date Created</label>
                                                <input type="date" class="form-control prop_created_date" name="prop_created_date" id="prop_created_date" value="<?php echo $date_f;?>">
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop1" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Land Preparation: Clearing/Line Stripping
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop2" type="checkbox" id="formCheck2" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Land Preparation: Plowing
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop3" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Land Preparation: Harrowing
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop4" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Land Preparation: Rotavation
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop5" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Land Preparation: Levelling
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop6" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Hilling Up
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop7" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Raised Bed
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop8" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Mulching
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop9" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Transplanting
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop10" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Pruning
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop11" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Proper Trellising
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop12" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Weeding/Field Sanitation
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop13" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Nutrient Management/Fertilizer Application
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop14" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Irrigation/Water Management
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop15" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            AESA/Regular Field Monitoring
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop16" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Pest and Disease Management
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                    
                                                        <input class="form-check-input contagent_tog formcheck01a prop17" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Harvest Management
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                        <input class="form-check-input contagent_tog formcheck01a prop18" type="checkbox" id="formCheck1" value="1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Postharvest Management
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="date_sown" class="form-label">Total Score</label>
                                                <input type="number" readonly class="form-control prop_tot_score" name="mon_tech_date" id="prop_tot_score" placeholder="0">
                                              
                                            </div>

                                            <div class="mb-3" >
                                                <label for="date_sown" class="form-label">Encoder</label>
                                                <input type="number" readonly class="form-control prop_encoder" name="prop_encoder" id="prop_encoder" value="<?php echo $userid;?>">
                                              
                                            </div>

                                            <div class="mb-3">
                                                <label for="final_score" class="form-label">Final Score (%)</label>
                                                <input type="number" readonly class="form-control prop_final_score" name="final_score" id="final_score" placeholder="0">
                                            </div>

                                            <div class="mb-3" >
                                                <label for="mon_findings" class="form-label">Remarks</label>
                                                <textarea class="form-control prop_remarks" name="mon_findings" placeholder="Please enter detailed findings..." rows="6" id="mon_findings"></textarea>
                                            </div>
                                            
                                            <script>
                                            // Get all checkboxes
                                            const checkboxes = document.querySelectorAll('.contagent_tog');

                                            // Get the total score and final score inputs
                                            const totalScoreInput = document.getElementById('prop_tot_score');
                                            const finalScoreInput = document.getElementById('final_score');

                                            // Add event listener to each checkbox
                                            checkboxes.forEach(checkbox => {
                                                checkbox.addEventListener('change', updateScores);
                                            });

                                            function updateScores() {
                                                let totalScore = 0;

                                                // Loop through checkboxes and add values
                                                checkboxes.forEach(checkbox => {
                                                totalScore += checkbox.checked ? parseInt(checkbox.value, 10) : 0;
                                                });

                                                // Update the total score input
                                                totalScoreInput.value = totalScore;

                                                // Calculate final score
                                                const finalScore = (totalScore / 18) * 100;

                                                // Update the final score input
                                                finalScoreInput.value = finalScore.toFixed(2); // Round to two decimal places
                                            }
                                            </script>

                   
                            
                      
<?php } ?>







    









                               

















