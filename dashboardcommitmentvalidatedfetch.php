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
                            $finalcode='MON'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
                        ?>

<!--START OVERALL -->

                    <?php
                        $query1 = mysqli_query($conn,"SELECT * FROM production_validated_cms WHERE id='$id'");
                        while($q = mysqli_fetch_array($query1)): ?>

                                            <div class="mb-3">
                                                <h5 style="color: royalblue;">Validated Details:</h5>
                                            </div>

                                            <div class="mb-3" style="display: none;">
                                                <label for="code" class="form-label">ID</label>
                                                <input style="display:none;" type="text" class="form-control" name="mon_id" id="mon_id" readonly value="<?php echo $q['id'];?>">
                                                <p><?php echo $q['id'];?></p>
                                            </div>

                                            <div class="mb-3">
                                                <label for="code_monitor" class="form-label">Monitor Code</label>
                                                <input style="display:none;" type="text" class="form-control" name="code_monitor" id="code_monitor" readonly value="<?php echo $finalcode;?>">
                                                <p><?php echo $finalcode;?></p>
                                            </div>

                                            <div class="mb-3">
                                                <label for="code" class="form-label">Code</label>
                                                <input style="display:none;" type="text" class="form-control" name="mon_code" id="mon_code" readonly value="<?php echo $q['code'];?>">
                                                <p><?php echo $q['code'];?></p>
                                            </div>

                                       
                                            <div class="mb-3" >
                                                <label for="name" class="form-label">Name</label>
                                                <input style="display:none;" type="text" class="form-control" name="mon_name" id="mon_name" readonly value="<?php echo $q['name'];?>">
                                                <p><?php echo $q['name'];?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="comm" class="form-label">Commodity</label>
                                                <input style="display:none;" type="text" class="form-control" name="mon_comm" id="mon_comm" readonly value="<?php echo $q['comm'];?>">
                                                <p><?php echo $q['comm'];?></p>
                                            </div>

                                          

                                            <div class="mb-3" >
                                                <label for="hills" class="form-label">No. of Hills</label>
                                                <input style="display:none;" type="text" class="form-control" name="mon_hills" id="mon_hills" readonly value="<?php echo $q['hills'];?>">
                                                <p><?php echo $q['hills'];?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="date_sown" class="form-label">Date Sown</label>
                                                <input style="display:none;" type="text" class="form-control" name="mon_date_sown" id="mon_date_sown" readonly value="<?php echo $q['date_sown'];?>">
                                                <p><?php echo date('M d, Y', strtotime($q['date_sown']));?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="date_harvest" class="form-label">Date of First Harvest</label>
                                                <input style="display:none;" type="text" class="form-control" name="mon_date_harvest" id="mon_date_harvest" readonly value="<?php echo $q['date_harvest'];?>">
                                                <p><?php echo date('M d, Y', strtotime($q['date_harvest']));?></p>
                                            </div>

                                            <br>

                                            <div class="mb-3">
                                                <h5 style="color: royalblue;">Findings:</h5>
                                            </div>

                                            <style>
                                                .fields_01{
                                                    padding-left: 5px;
                                                }
                                                .sub_fields_01{
                                                    padding-left: 10px;
                                                }
                                            </style>

                                            <div class="fields_01">
                                                <div class="mb-3">
                                                    <h5 style="color: crimson;">Date and Status:</h5>
                                                </div>

                                                <div class="sub_fields_01">
                                                    <div class="mb-3" >
                                                        <label for="date_monitor" class="form-label">Date of Monitoring</label>
                                                        <input type="date" class="form-control" id="mon_date_monitor" name="mon_date_monitor" oninput="updateDateValidatedFrom1(this.value)">
                                                    </div>

                                                    <div class="mb-3" >
                                                        <label for="mon_status" class="form-label">Status</label>
                                                        <select class="form-select" aria-label="Default select example" name="mon_status" id="mon_status">
                                                                <option value='On Track'>On Track</option>
                                                                <option value='Partially Damaged'>Partially Damaged</option>
                                                                <option value='Totally Damaged'>Totally Damaged</option>                              
                                                        </select>  
                                                    </div>

                                                    <div class="mb-3" style="padding-left: 10px;">
                                                        <label for="mon_cause" class="form-label">Cause (If Partially or Totally Damaged):</label>
                                                        <textarea class="form-control" name="mon_cause" placeholder="Please enter detailed findings..." rows="6" id="mon_cause"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fields_01">
                                                <div class="mb-3">
                                                    <h5 style="color: crimson;">Harvest:</h5>
                                                </div>

                                                <div class="sub_fields_01">
                                                    <div class="mb-3" >
                                                        <label for="date_monitor" class="form-label">Actual Date of Harvest</label>
                                                        <input type="date" class="form-control" id="mon_actual_monitor" name="mon_actual_monitor">
                                                    </div>

                                                    <div class="mb-3" >
                                                        <label for="date_monitor" class="form-label">Actual Yield</label>
                                                        <input type="number" class="form-control" id="mon_actual_yield" name="mon_actual_yield" placeholder="Enter Yield (kg) *">
                                                    </div>

                                                    
                                                </div>

                                            </div>
<!--############################################################################################################################################### START FERTILIZER APPLICATION ###############################################################################################################################################-->
<hr style="border: none; height: 2px; background-color:royalblue; margin: 20px 0;">
                                            <div class="mb-3">
                                                <h5 style="color: royalblue;">Fertlizer Application:
                                                    <div class="form-check">
                                                            <input class="form-check-input fertilizer_tog fert_app01 mon_fert_ex" type="checkbox" id="formCheck1" value="Yes">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Yes
                                                            </label>
                                                    </div>
                                                    <script>
                                                        $(document).ready(function(){
                                                        $(".fertilizer_tog").click(function(){
                                                            $(".fields_fertilizer").toggle();
                                                        });
                                                        });
                                                    </script>
                                                </h5>
                                            </div>
                                        <div class="fields_fertilizer" style="display:none;">
                                            <div class="fields_01" style="padding-bottom: 50px;">
                                                <div class="mb-3">
                                                    <h5 style="color: crimson;">Fertilizer:</h5>
                                                </div>
                                                <div class="sub_fields_01">
                                                    <table class="table_form2 table table-pest table-striped table-bordered dt-responsive nowrap" id="table-fertilizer02" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <th style="display:none;">ID</th>
                                                            <th style="display:none;">From Code</th>
                                                            <th>Fertilizer Used</th>
                                                        </thead>
                                                        <tbody>
                                                            <td style="display:none;"><input type="text" class="form-control" id="id_from02" name="id_from02[]" value="<?php echo $q['id'];?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="code_from02" name="code_from02[]" value="<?php echo $q['code'];?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="code_monitor_pd02" name="code_monitor_pd02[]" value="<?php echo $finalcode;?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="encoder_from02" name="encoder_from02[]" value="<?php echo $userid;?>"></td>
                                                            <td style="display:none;"><input type="date" class="form-control" id="date_validated_from02" name="date_validated_from02[]"></td>
                                                            <td style="display:none;"><input type="date" class="form-control" id="date_created_from02" name="date_created_from02[]" value="<?php echo $date_f;?>"></td>
                                                            <td>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">                                                     
                                                                        <select id="name_from02" name="name_from02[]" class="form-select">
                                                                            <option value="">Pease Select Fertilizer *</option>
                                                                                <?php  
                                                                                    $sql1001 = "SELECT * FROM fertilizer_cms ORDER BY `fert_name` ASC";
                                                                                    $query001 = mysqli_query($conn, $sql1001);
                                                                                ?>
                                                                                <?php foreach($query001 as $q001){ ?>  
                                                                                    <option value="<?php echo $q001 ['fert_name'];?>"><?php echo $q001 ['fert_name'];?></option>
                                                                                <?php } ?>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger deleteRow02">-</button>
                                                            </td>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button style="width: 100%;" class="btn btn-primary" id="addRow02"><i class="uil-plus"></i></button>
                                                <script>
                                                    $(document).ready(function () {
                                                        // Add new row when the button is clicked
                                                        $("#addRow02").on("click", function () {
                                                            var newRow = $("#table-fertilizer02 tbody tr:first").clone();
                                                            newRow.find('.deleteRow02').show(); // Show delete button in the new row
                                                            $("#table-fertilizer02 tbody").append(newRow);
                                                        });

                                                        // Delete row when the delete button is clicked
                                                        $("#table-fertilizer02 tbody").on("click", ".deleteRow02", function () {
                                                            // Make sure not to remove the first row
                                                            if ($("#table-fertilizer02 tbody tr").length > 1) {
                                                                $(this).closest('tr').remove();
                                                            }
                                                        });

                                                        // Initially hide delete button in the first row
                                                        $("#table-fertilizer02 tbody tr:first .deleteRow02").hide();
                                                    });
                                                </script>
                                            </div>

                                            
                                        </div>
                       
<!--############################################################################################################################################### END FERTILIZER APPLICATIONM ###############################################################################################################################################-->
<!--############################################################################################################################################### START EXISTENCE OF PEST AND DISEASES ###############################################################################################################################################-->
                                    <hr style="border: none; height: 2px; background-color:royalblue; margin: 20px 0;">
                                            <div class="mb-3">
                                                <h5 style="color: royalblue;">Existence of Pest and Disease:
                                                    <div class="form-check">
                                                            <input class="form-check-input pest_disease_tog mon_pest_ex" type="checkbox" id="formCheck1" value="Yes">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Yes
                                                            </label>
                                                    </div>
                                                    <script>
                                                        $(document).ready(function(){
                                                        $(".pest_disease_tog").click(function(){
                                                            $(".fields_pests_disease").toggle();
                                                        });
                                                        });
                                                    </script>
                                                </h5>
                                            </div>
                                        <div class="fields_pests_disease" style="display:none;">
                                            <div class="fields_01" style="padding-bottom: 50px;">
                                                <div class="mb-3">
                                                    <h5 style="color: crimson;">Pest:</h5>
                                                </div>
                                                <div class="sub_fields_01">
                                                    <table class="table_form2 table table-pest table-striped table-bordered dt-responsive nowrap" id="table-pest" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <th style="display:none;">ID</th>
                                                            <th style="display:none;">From Code</th>
                                                            <th>Pest</th>
                                                            <th>Level of Infestation</th>
                                                        </thead>
                                                        <tbody>
                                                            <td style="display:none;"><input type="text" class="form-control" id="id_from" name="id_from[]" value="<?php echo $q['id'];?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="code_from" name="code_from[]" value="<?php echo $q['code'];?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="code_monitor_pd" name="code_monitor_pd[]" value="<?php echo $finalcode;?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="type_from" name="type_from[]" value="Pest"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="encoder_from" name="encoder_from[]" value="<?php echo $userid;?>"></td>
                                                            <td style="display:none;"><input type="date" class="form-control" id="date_validated_from" name="date_validated_from[]"></td>
                                                            <td style="display:none;"><input type="date" class="form-control" id="date_created_from" name="date_created_from[]" value="<?php echo $date_f;?>"></td>
                                                            <td>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">                                                     
                                                                        <select id="name_from" name="name_from[]" class="form-select">
                                                                            <option value="">Pease Select Pest *</option>
                                                                                <?php  
                                                                                    $sql1 = "SELECT * FROM pest_cms WHERE `type`='Pest' ORDER BY `name` ASC";
                                                                                    $query1 = mysqli_query($conn, $sql1);
                                                                                ?>
                                                                                <?php foreach($query1 as $q1){ ?>  
                                                                                    <option value="<?php echo $q1 ['name'];?>"><?php echo $q1 ['name'];?></option>
                                                                                <?php } ?>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                            <td>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">                                                      
                                                                        <select id="level_from" name="level_from[]" class="form-select">
                                                                            <option value="">Pease Select Level *</option>
                                                                            <option value="Low-level Infestation">Low-level Infestation</option>
                                                                            <option value="Moderate-level Infestation">Moderate-level Infestation</option>
                                                                            <option value="High-level Infestation">High-level Infestation</option>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger deleteRow">-</button>
                                                            </td>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button style="width: 100%;" class="btn btn-primary" id="addRow"><i class="uil-plus"></i></button>
                                                <script>
                                                    $(document).ready(function () {
                                                        // Add new row when the button is clicked
                                                        $("#addRow").on("click", function () {
                                                            var newRow = $("#table-pest tbody tr:first").clone();
                                                            newRow.find('.deleteRow').show(); // Show delete button in the new row
                                                            $("#table-pest tbody").append(newRow);
                                                        });

                                                        // Delete row when the delete button is clicked
                                                        $("#table-pest tbody").on("click", ".deleteRow", function () {
                                                            // Make sure not to remove the first row
                                                            if ($("#table-pest tbody tr").length > 1) {
                                                                $(this).closest('tr').remove();
                                                            }
                                                        });

                                                        // Initially hide delete button in the first row
                                                        $("#table-pest tbody tr:first .deleteRow").hide();
                                                    });
                                                </script>
                                            </div>

                                            <div class="fields_01" style="padding-bottom: 50px;">
                                                <div class="mb-3">
                                                    <h5 style="color: crimson;">Disease:</h5>
                                                </div>
                                                <div class="sub_fields_01">
                                                    <table class="table table_form2 table-pest01 table-striped table-bordered dt-responsive nowrap" id="table-pest01" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <th style="display:none;">ID</th>
                                                            <th style="display:none;">From Code</th>
                                                            <th>Disease</th>
                                                            <th>Severity of Disease</th>
                                                        </thead>
                                                        <tbody>
                                                            <td style="display:none;"><input type="text" class="form-control" id="id_from1" name="id_from1[]" value="<?php echo $q['id'];?>"></td>
                                                            <td style="display:none;"><input type="date" class="form-control" id="date_validated_from1" name="date_validated_from1[]"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="code_monitor_pd1" name="code_monitor_pd1[]" value="<?php echo $finalcode;?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="code_from1" name="code_from1[]" value="<?php echo $q['code'];?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="type_from1" name="type_from1[]" value="Disease"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="encoder_from1" name="encoder_from1[]" value="<?php echo $userid;?>"></td>
                                                            <td style="display:none;"><input type="date" class="form-control" id="date_created_from1" name="date_created_from1[]" value="<?php echo $date_f;?>"></td>
                                                            
                                                            <td>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">                                                     
                                                                        <select id="name_from1" name="name_from1[]" class="form-select">
                                                                            <option value="">Pease Select Type *</option>
                                                                                <?php  
                                                                                    $sql2 = "SELECT * FROM pest_cms WHERE `type`='Disease' ORDER BY `name` ASC";
                                                                                    $query2 = mysqli_query($conn, $sql2);
                                                                                ?>
                                                                                <?php foreach($query2 as $q2){ ?>  
                                                                                    <option value="<?php echo $q2 ['name'];?>"><?php echo $q2 ['name'];?></option>
                                                                                <?php } ?>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                            <td>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">                                                      
                                                                        <select id="level_from1" name="level_from1[]" class="form-select">
                                                                            <option value="">Pease Select Level *</option>
                                                                            <option value="Low-level Severity">Low-level Severity</option>
                                                                            <option value="Moderate-level Severity">Moderate-level Severity</option>
                                                                            <option value="High-level Severity">High-level Severity</option>
                                                                            <option value="Epidemic">Epidemic</option>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger deleteRow01">-</button>
                                                            </td>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button style="width: 100%;" class="btn btn-primary" id="addRow01"><i class="uil-plus"></i></button>
                                              
                                                <script>
                                                    $(document).ready(function () {
                                                        // Add new row when the button is clicked
                                                        $("#addRow01").on("click", function () {
                                                            var newRow01 = $("#table-pest01 tbody tr:first").clone();
                                                            newRow01.find('.deleteRow01').show(); // Show delete button in the new row
                                                            $("#table-pest01 tbody").append(newRow01);
                                                        });

                                                        // Delete row when the delete button is clicked
                                                        $("#table-pest01 tbody").on("click", ".deleteRow01", function () {
                                                            // Make sure not to remove the first row
                                                            if ($("#table-pest01 tbody tr").length > 1) {
                                                                $(this).closest('tr').remove();
                                                            }
                                                        });

                                                        // Initially hide delete button in the first row
                                                        $("#table-pest01 tbody tr:first .deleteRow01").hide();
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                
<!--############################################################################################################################################### END EXISTENCE OF PEST AND DISEASES ###############################################################################################################################################-->
<!--############################################################################################################################################### START CONTOL AGENT APPLICATION ###############################################################################################################################################-->
<hr style="border: none; height: 2px; background-color:royalblue; margin: 20px 0;">
                                            <div class="mb-3">
                                                <h5 style="color: royalblue;">Control Agent Application:
                                                    <div class="form-check">
                                                            <input class="form-check-input contagent_tog cont_app01 mon_cont_ex" type="checkbox" id="formCheck1" value="Yes">
                                                            <label class="form-check-label" for="formCheck1">
                                                                Yes
                                                            </label>
                                                    </div>
                                                    <script>
                                                        $(document).ready(function(){
                                                        $(".contagent_tog").click(function(){
                                                            $(".fields_controlagent").toggle();
                                                        });
                                                        });
                                                    </script>
                                                </h5>
                                            </div>
                                        <div class="fields_controlagent" style="display:none;">
                                            <div class="fields_01" style="padding-bottom: 50px;">
                                                <div class="mb-3">
                                                    <h5 style="color: crimson;">Control Agent:</h5>
                                                </div>
                                                <div class="sub_fields_01">
                                                    <table class="table_form2 table table-pest table-striped table-bordered dt-responsive nowrap" id="table-controlagent03" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <th style="display:none;">ID</th>
                                                            <th style="display:none;">From Code</th>
                                                            <th>Control Agent Used</th>
                                                        </thead>
                                                        <tbody>
                                                            <td style="display:none;"><input type="text" class="form-control" id="id_from03" name="id_from03[]" value="<?php echo $q['id'];?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="code_from03" name="code_from03[]" value="<?php echo $q['code'];?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="code_monitor_pd03" name="code_monitor_pd03[]" value="<?php echo $finalcode;?>"></td>
                                                            <td style="display:none;"><input type="text" class="form-control" id="encoder_from03" name="encoder_from03[]" value="<?php echo $userid;?>"></td>
                                                            <td style="display:none;"><input type="date" class="form-control" id="date_validated_from03" name="date_validated_from03[]"></td>
                                                            <td style="display:none;"><input type="date" class="form-control" id="date_created_from03" name="date_created_from03[]" value="<?php echo $date_f;?>"></td>
                                                            <td>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">                                                     
                                                                        <select id="name_from03" name="name_from03[]" class="form-select">
                                                                            <option value="">Pease Select Control Agent *</option>
                                                                                <?php  
                                                                                    $sql1001 = "SELECT * FROM controlagent_cms ORDER BY `cont_name` ASC";
                                                                                    $query001 = mysqli_query($conn, $sql1001);
                                                                                ?>
                                                                                <?php foreach($query001 as $q001){ ?>  
                                                                                    <option value="<?php echo $q001 ['cont_name'];?>"><?php echo $q001 ['cont_name'];?></option>
                                                                                <?php } ?>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger deleteRow03">-</button>
                                                            </td>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button style="width: 100%;" class="btn btn-primary" id="addRow03"><i class="uil-plus"></i></button>
                                                <script>
                                                    $(document).ready(function () {
                                                        // Add new row when the button is clicked
                                                        $("#addRow03").on("click", function () {
                                                            var newRow = $("#table-controlagent03 tbody tr:first").clone();
                                                            newRow.find('.deleteRow03').show(); // Show delete button in the new row
                                                            $("#table-controlagent03 tbody").append(newRow);
                                                        });

                                                        // Delete row when the delete button is clicked
                                                        $("#table-controlagent03 tbody").on("click", ".deleteRow03", function () {
                                                            // Make sure not to remove the first row
                                                            if ($("#table-controlagent03 tbody tr").length > 1) {
                                                                $(this).closest('tr').remove();
                                                            }
                                                        });

                                                        // Initially hide delete button in the first row
                                                        $("#table-controlagent03 tbody tr:first .deleteRow03").hide();
                                                    });
                                                </script>
                                            </div>

                                            
                                        </div>
                                    <hr style="border: none; height: 2px; background-color:royalblue; margin: 20px 0;">
<!--############################################################################################################################################### END CONTROL AGENT APPLICATIONM ###############################################################################################################################################-->

                                            <div class="mb-3">
                                                <h5 style="color: royalblue;">Comments:</h5>
                                            </div>

                                            <!-- Start Added fields by Sir Eric Ancheta -->

                                            <!-- End Added fields by Sir Eric Ancheta -->
                                            <div class="mb-3" >
                                                <label for="mon_findings" class="form-label">Overall Findings</label>
                                                <textarea class="form-control" name="mon_findings" placeholder="Please enter detailed findings..." rows="6" id="mon_findings"></textarea>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="mon_findings" class="form-label">Recommendation from the AEW</label>
                                                <textarea class="form-control" name="mon_recomm" placeholder="Please enter detailed recommendation..." rows="6" id="mon_recomm"></textarea>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="mon_findings" class="form-label">Farmer's Response</label>
                                                <textarea class="form-control" name="mon_response" placeholder="Please enter detailed response..." rows="6" id="mon_response"></textarea>
                                            </div>

                                            
                                        
                                            <div class="mb-3" style="display:none;">
                                                <label for="date_created" class="form-label">Date</label>
                                                <input type="text" class="form-control" name="mon_date_created" id="mon_date_created" readonly value="<?php echo $date_f;?>">
                                            </div>
                                          
                                            <div class="mb-3" style="display:none;">
                                                <label for="encoder" class="form-label">Encoder</label>
                                                <input type="text" class="form-control" name="mon_encoder" id="mon_encoder" readonly value="<?php echo $userid;?>">
                                            </div>

                                        <?php endwhile; ?>
                                           
                                     
                            
                      
<?php } ?>







    









                               

















