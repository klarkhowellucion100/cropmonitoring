<?php include_once 'heading.php';?>



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
    $chars = "001312132303232023232023456789";
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
$finalcode='PC'.date('d').''.date('Y').''.date('m').''.createRandomPassword();

?>
   <!-- start page title -->
    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Commodity Registration</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Entry</a></li>
                                        <li class="breadcrumb-item active">Commodity</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                        <div class="row">                
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Add Production Schedule</h4>
                                    <h4 style="color: royalblue; font-size:15px; margin-top: 20px;">Production Schedule</h4>

                                    

                                    <div class="table-responsive">
                                        
                                    </div>

                                                <div class="row">

                                                    <div class="col-md-3" style="display:none;">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="farmer_name">Farmer Name</label>
                                                                <select id="farmer_name" class="form-select comm_name" name="farmer_name">
                                                                  <option value="">Select Farmer *</option>
                                                                        <?php  
                                                                            $sql = "SELECT * FROM registrationhubpos WHERE type='Farmer' GROUP BY fname";
                                                                            $query = mysqli_query($conn, $sql);
                                                                        ?>
                                                                        <?php foreach($query as $q){ ?>  
                                                                            <option value="<?php echo $q ['fname'];?>"><?php echo $q ['fname'];?></option>
                                                                        <?php } ?>
                                                            </select>  
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                    <div class="col-md-3" style="display:none;">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dbr">Date Transplanted</label>
                                                                <input type="date" required class="form-control" >      
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="comm_name">Commodity</label>
                                                                <select id="comm_name" class="form-select comm_name" name="comm_name">
                                                                  <option value="">Select Commodity *</option>
                                                                        <?php  
                                                                            $sql = "SELECT * FROM commodity_prod_cms GROUP BY comm";
                                                                            $query = mysqli_query($conn, $sql);
                                                                        ?>
                                                                        <?php foreach($query as $q){ ?>  
                                                                            <option value="<?php echo $q ['comm'];?>"><?php echo $q ['comm'];?></option>
                                                                        <?php } ?>
                                                            </select>  
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dbr">Date Sown</label>
                                                                <input type="date" required class="form-control" id="date_sown">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dbr">Harvest Schedule</label>
                                                                <button type="button" onclick="filter()" id="filter001" class="btn btn-primary form-control">Schedule</button>    
                                                            </div>                                        
                                                        </div>
                                                    </div> 

                                                    
                                                    
                                                    
                                                </div>

                                    <div id="schedule_table">

                                    </div>

                                                      
                                    <button type="button" class="btn btn-primary submit-btn" id="submit-btn">Save</button>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>

                        
                        <script>
                            $(document).ready(function(){
                            $('#filter001').click(function(){
                                var comm_name = $('#comm_name').val(); 
                                var date_sown = $('#date_sown').val();                                                   
                                    $.ajax({
                                        url:"productionmonitoringaddfetch.php",
                                        method:"POST",
                                        data:{comm_name:comm_name,date_sown:date_sown},
                                        success:function(data){
                                            $('#schedule_table').html(data);
                                        }
                                    });
                                });
                            });
                        </script>
                     
                    
                        <script>
                                        $(document).ready(function () {
                                            $("#submit-btn").click(function (e) {
                                                e.preventDefault();

                                                // Create an array to store data for each row
                                                var dataArray = [];

                                                // Loop through each row in the table
                                                $('#table_form2 tbody tr').each(function () {
                                                    var row = $(this);
                                                    var rowData = {
                                                        coef: row.find('#coef').val(),
                                                        code: row.find('#code').val(),
                                                        date_created: row.find('#date_created').val(),
                                                        dh: row.find('#dh').val(),
                                                        dr: row.find('#dr').val(),
                                                        mat_days: row.find('#mat_days').val(),
                                                        comm: row.find('#comm').val(),
                                                        days_in_week: row.find('#days_in_week').val(),
                                                    };

                                                    // Push the rowData to the dataArray
                                                    dataArray.push(rowData);
                                                });

                                                //alert(JSON.stringify(dataArray, null, 2));

                                                // Send the dataArray to the PHP script
                                                $.ajax({
                                                    url: "productiondetailsprocess.php",
                                                    method: "POST",
                                                    data: { dataArray: dataArray },
                                                    success: function (data) {
                                                        var response = JSON.parse(data);

                                                        if (response.status === 'success') {
                                                            Swal.fire({
                                                                title: 'Success',
                                                                text: response.message,
                                                                icon: 'success',
                                                                timer: 2000
                                                            }).then(() => {
                                                                location.reload();
                                                            });
                                                        } else {
                                                            Swal.fire({
                                                                title: 'Error',
                                                                text: response.message,
                                                                icon: 'error'
                                                            });
                                                        }
                                                    },
                                                    error: function () {
                                                        Swal.fire({
                                                            title: 'Error',
                                                            text: 'An error occurred during the request.',
                                                            icon: 'error'
                                                        });
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
                                var originalRandomCode = document.querySelector('input[name="code[]"]').value;

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

                  
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        


<?php include_once 'footer.php';?>