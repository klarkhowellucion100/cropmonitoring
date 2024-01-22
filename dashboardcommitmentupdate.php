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

                    <?php
                        $query1 = mysqli_query($conn,"SELECT * FROM production_cms WHERE id='$id'");
                        while($q = mysqli_fetch_array($query1)): ?>

                                            <div class="mb-3" >
                                                <label for="val_id" class="form-label">ID</label>
                                                <input style="display:none;" type="text" class="form-control" name="val_id" id="val_id" readonly value="<?php echo $q['id'];?>">
                                                <p><?php echo $q['id'];?></p>
                                            </div>

                                            <div class="mb-3">
                                                <label for="val_code" class="form-label">Code</label>
                                                <input style="display:none;" type="text" class="form-control" name="val_code" id="val_code" readonly value="<?php echo $q['code'];?>">
                                                <p><?php echo $q['code'];?></p>
                                            </div>

                                       
                                            <div class="mb-3" >
                                                <label for="val_name" class="form-label">Famer Name</label>
                                                <input style="display:none;" type="text" class="form-control" name="val_name" id="val_name" readonly value="<?php echo $q['name'];?>">
                                                <p><?php echo $q['name'];?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="val_comm" class="form-label">Commodity</label>
                                                <input style="display:none;" type="text" class="form-control" name="val_comm" id="val_comm" readonly value="<?php echo $q['comm'];?>">
                                                <p><?php echo $q['comm'];?></p>
                                            </div>

                                            <div class="mb-3" style="color: crimson;">
                                                <label for="val_date_sown" class="form-label">Reported Date Sown</label>
                                                <p><?php echo date('M d, Y', strtotime($q['date_sown'])); ?></p>
                                            </div>

                                            <div class="mb-3" >
                                                <label for="val_date_trans" class="form-label">Date Transplanted</label>
                                                <input type="date" class="form-control" name="val_date_trans" id="val_date_trans" value="<?php echo $q['date_trans']; ?>">
                                            </div>


                                            <div class="mb-3" >
                                                <label for="val_hills" class="form-label">No. of Hills</label>
                                                <input type="text" class="form-control" name="val_hills" id="val_hills" value="<?php echo $q['hills'];?>">
                                            </div>

                                            

                                            <div class="mb-3" >
                                                <label for="val_area" class="form-label">Area</label>
                                                <select class="form-select" aria-label="Default select example" name="val_area" id="val_area">
                                                        <option value='<?php echo $q['area']; ?>'><?php echo $q['area']; ?></option>
                                                        <option value="Lot 1">Lot 1</option>
                                                        <option value="Lot 2">Lot 2</option>
                                                        <option value="Lot 3">Lot 3</option>
                                                        <option value="Lot 4">Lot 4</option>
                                                        <option value="Lot 5">Lot 5</option>
                                                        <option value="Lot 6">Lot 6</option>
                                                        <option value="Lot 7">Lot 7</option>
                                                        <option value="Lot 8">Lot 8</option>
                                                        <option value="Lot 9">Lot 9</option>
                                                        <option value="Lot 10">Lot 10</option>                             
                                                </select>  
                                            </div>

                                            <div class="mb-3" >
                                                <label for="val_status" class="form-label">Status</label>
                                                <select class="form-select" aria-label="Default select example" name="val_status" id="val_status">
                                                        <option value='<?php echo $q['status_comm']; ?>'><?php echo $q['status_comm']; ?></option>
                                                        <option value="Committed">Committed</option>
                                                        <option value="Uncommitted">Uncommitted</option>
                                                        <option value="Advisory">Advisory</option>                          
                                                </select>  
                                            </div>

                                            <div class="mb-3" >
                                                <label for="val_date_validated" class="form-label">Date Validated</label>
                                                <input type="date" class="form-control" name="val_date_validated" id="val_date_validated">
                                            </div>

                                            <div class="mb-3" >
                                                <label for="val_encoder" class="form-label">Encoder</label>
                                                <input type="text" class="form-control" name="val_encoder" id="val_encoder" value="<?php echo $userid;?>">
                                            </div>

                                            <button type="button" class="btn btn-success filter_btn" id="filter_btn">Generate Production</button>

                                            <div id="schedule_table">

                                            </div>
                                        

                                        <?php endwhile; ?>

                                        <script>
                                                $(document).ready(function(){
                                                $('#filter_btn').click(function(){
                                                    var val_id = $('#val_id').val(); 
                                                    var val_code = $('#val_code').val(); 
                                                    var val_name = $('#val_name').val();   
                                                    var val_comm = $('#val_comm').val(); 
                                                    var val_hills = $('#val_hills').val();   
                                                    var val_area = $('#val_area').val();     
                                                    var val_status = $('#val_status').val();      
                                                    var val_encoder = $('#val_encoder').val();   
                                                    var val_date_validated = $('#val_date_validated').val();  
                                                    var val_date_trans = $('#val_date_trans').val();                                     
                                                        $.ajax({
                                                            url:"dashboardcommitmentupdatefetch.php",
                                                            method:"POST",
                                                            data:{val_id:val_id,
                                                                val_code:val_code,
                                                                val_name:val_name,
                                                                val_comm:val_comm,
                                                                val_hills:val_hills,
                                                                val_area:val_area,
                                                                val_status:val_status,
                                                                val_encoder:val_encoder,
                                                                val_date_validated:val_date_validated,
                                                                val_date_trans:val_date_trans},
                                                            success:function(data){
                                                                $('#schedule_table').html(data);
                                                            }
                                                        });
                                                    });
                                                });
                                            </script>
                                           
                                        <script>
                                                document.getElementById("table-coef-query").addEventListener("click", function (event) {
                                                    if (event.target.classList.contains("delete-btn")) {
                                                        var rowId = event.target.closest("tr").id;
                                                        deleteRow(rowId);
                                                    }
                                                });

                                                document.getElementById("add-btn").addEventListener("click", function () {
                                                    var tableBody = document.getElementById("table-coef-query");
                                                    var clonedRow = tableBody.querySelector("tr:first-child").cloneNode(true);

                                                    var newRowId = "row-" + (tableBody.childElementCount + 1);
                                                    clonedRow.id = newRowId;

                                                    // Fetch the random code from the original row
                                                    var originalRandomCode = document.querySelector('input[name="code"]').value;

                                                    // Update all cloned td elements
                                                    clonedRow.querySelectorAll('td input').forEach(function (input) {
                                                        input.value = '';
                                                    });

                                                    // Update the random code for the cloned row
                                                    clonedRow.querySelector('input[name="code[]"]').value = originalRandomCode;

                                                    var deleteButton = document.createElement("button");
                                                    deleteButton.type = "button";
                                                    deleteButton.className = "btn btn-danger delete-btn";
                                                    deleteButton.textContent = "Delete";
                                                    deleteButton.addEventListener("click", function () {
                                                        deleteRow(newRowId);
                                                    });

                                                    clonedRow.appendChild(document.createElement("td")).appendChild(deleteButton);
                                                    tableBody.appendChild(clonedRow);
                                                });

                                                function deleteRow(rowId) {
                                                    var rowToDelete = document.getElementById(rowId);
                                                    rowToDelete.parentNode.removeChild(rowToDelete);
                                                }

                                                function updateDH() {
                                                    var dbhValue = document.getElementById("dbh").value;
                                                    document.querySelectorAll('input[name="dh[]"]').forEach(function (input) {
                                                        input.value = dbhValue;
                                                    });
                                                }

                                                function updateDR() {
                                                    var dbrValue = document.getElementById("dbr").value;
                                                    document.querySelectorAll('input[name="dr[]"]').forEach(function (input) {
                                                        input.value = dbrValue;
                                                    });
                                                }

                                                function updateDTS() {
                                                    var dtsValue = document.getElementById("dts").value;
                                                    document.querySelectorAll('input[name="date_created[]"]').forEach(function(input) {
                                                        input.value = dtsValue;
                                                    });
                                                }

                                                function updateMTD() {
                                                    var mtdValue = document.getElementById("mtd").value;
                                                    document.querySelectorAll('input[name="mat_days[]"]').forEach(function (input) {
                                                        input.value = mtdValue;
                                                    });
                                                }

                                                function updateCMN() {
                                                    var cmnValue = document.getElementById("comm_name").value;
                                                    document.querySelectorAll('input[name="comm[]"]').forEach(function (input) {
                                                        input.value = cmnValue;
                                                    });
                                                }

                                                function updateFQY() {
                                                    var selectedDays = [];
                                                    var selectedOptions = document.querySelectorAll('#selected_days option:checked');
                                                    
                                                    selectedOptions.forEach(function(option) {
                                                        selectedDays.push(option.value);
                                                    });

                                                    var selDays = document.getElementById("days_in_week").value = selectedDays.join(', ');
                                                    document.querySelectorAll('input[name="days_in_week[]"]').forEach(function (input) {
                                                        input.value = selDays;
                                                    });
                                                }

                                                // Attach event listeners to the input elements
                                                document.getElementById("dbh").addEventListener("input", updateDH);
                                                document.getElementById("dbr").addEventListener("input", updateDR);
                                            </script>
                            
                      
<?php } ?>







    









                               

















