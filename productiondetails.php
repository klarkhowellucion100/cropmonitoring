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
                                    <h4 class="card-title">Add Commodity Details</h4>
                                    <h4 style="color: royalblue; font-size:15px; margin-top: 20px;">Commodity Details</h4>

                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered dt-responsive nowrap"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Production Coefficient</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-coef-query">
                                                <tr id="row-1">
                                                    <td>
                                                        <input type="number" name="coefficients[]" placeholder="Please Input Coefficient">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="randomCodes[]" value='<?php echo $finalcode; ?>' readonly>
                                                    </td>
                                                    <td>
                                                        <input type="date" name="date_saved[]" id='date_saved' readonly>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="dh[]" id="dh" readonly>
                                                    </td>
                                                    <td>
                                                        <input type="number" name="dr[]" id="dr" readonly>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                               

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dbh">Distance Over Hill</label>
                                                                <input type="number" required class="form-control" id="dbh" oninput="updateDH()">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dbr">Distance Over Row</label>
                                                                <input type="number" required class="form-control" id="dbr" oninput="updateDR()">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dbh">Date Saved</label>
                                                                <input type="date" required class="form-control" id="dts" oninput="updateDTS()">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                           
                                                                                          
                                                        </div>
                                                    </div> 
                                                </div>

                                    <button type="button" class="btn btn-success add-btn" id="add-btn">Add +</button>
                                    <button type="button" class="btn btn-primary submit-btn" id="submit-btn">Save</button>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>

                    
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
                                var originalRandomCode = document.querySelector('input[name="randomCodes[]"]').value;

                                // Update all cloned td elements
                                clonedRow.querySelectorAll('td input').forEach(function (input) {
                                    input.value = '';
                                });

                                // Update the random code for the cloned row
                                clonedRow.querySelector('input[name="randomCodes[]"]').value = originalRandomCode;

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
                                document.querySelectorAll('input[name="date_saved[]"]').forEach(function (input) {
                                    input.value = dtsValue;
                                });
                            }

                            // Attach event listeners to the input elements
                            document.getElementById("dbh").addEventListener("input", updateDH);
                            document.getElementById("dbr").addEventListener("input", updateDR);
                        </script>


                        <script>
                            $(document).ready(function() {
                            $("#submit-btn").click(function(e) {
                                e.preventDefault();
                                var code= $('#code').val();
                                var comm= $('#comm').val();
                                var comm_type= $('#comm_type').val();
                                var comm_prod= $('#comm_prod').val();
                                var comm_fgpm= $('#comm_fgpm').val();
                                var comm_fgp= $('#comm_fgp').val();
                                var comm_wspm= $('#comm_wspm').val();
                                var comm_wsppc= $('#comm_wsppc').val();
                                var comm_wsp= $('#comm_wsp').val();
                                var comm_srpm= $('#comm_srpm').val();
                                var comm_unit= $('#comm_unit').val();
                                var comm_srp= $('#comm_srp').val();
                                var comm_diffp= $('#comm_diffp').val();

                                // Send the dataArray to the PHP script
                                $.ajax({
                                        url:"commodityprocess.php",
                                        method:"POST",
                                        data:{code:code,comm:comm,comm_type:comm_type,comm_prod:comm_prod,comm_fgpm:comm_fgpm,comm_fgp:comm_fgp,comm_wspm:comm_wspm,comm_wsppc:comm_wsppc,comm_wsp:comm_wsp,comm_srpm:comm_srpm,comm_unit:comm_unit,comm_srp:comm_srp,comm_diffp:comm_diffp},
                                        success:function(data,status){
                                                                            
                                            
                                            Swal.fire({
                                                title: 'Success',
                                                text: 'Saved successfully!',
                                                icon: 'success',
                                                timer: 2000
                                                }).then(() => {
                                                location.reload();
                                                }); 
                                                
                                        }
                                        });
                            });
                            });                                                    
                        </script>

                        <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                     
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                
                                    <h4 class="card-title">Commodities</h4>
                                    <div class='open_data'>
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Commodity</th>
                                                        <th>Type</th>
                                                        <th>Class</th>
                                                        <th>Farmgate</th>
                                                        <th>Wholesale</th>
                                                        <th>Delete</th>                   
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        include 'db.inc.php';
                                                        $query1 = mysqli_query($conn,"SELECT * FROM comm_posnew ORDER BY comm ASC");
                                                        while($result1 = mysqli_fetch_array($query1)): ?>
                                                    <tr>
                                                        <td><?php echo $result1 ['comm']; ?></td>
                                                        <td><?php echo $result1 ['comm_type']; ?></td>
                                                        <td>Class A</td>
                                                        <td><?php echo $result1 ['comm_fgp']; ?></td>
                                                        <td><?php echo $result1 ['comm_wsp']; ?></td>
                                                        <td> <a onClick="deleteme(<?php echo $result1['id'];?>)" class="btn  btn-raised btn-danger waves-effect">Delete</a></td>
                                                        <script>
                                                            function deleteme(delid){
                                                                if(confirm("Are you sure you want to delete this data?")){
                                                                window.location.href='commodityprocess.php?delete=' +delid+ '';
                                                                return true;
                                                                }
                                                                }
                                                        </script>                                                                                 
                                                    </tr>
                                                        <?php endwhile; ?>
                                                </tbody>                                    
                                            </table>
                                        </div>
                                    </div>
                                <!-- end card-body-->
                                </div>
                            <!-- end card-->
                            </div>
                        <!-- end col-->
                        </div>


<?php include_once 'footer.php';?>