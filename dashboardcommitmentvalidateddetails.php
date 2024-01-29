<?php include 'heading.php'; ?>




<?php
    if (isset($_GET['code'])) {
        include_once 'db.inc.php';
    
    $prod_code = $_GET['code'];
    }
?>

<?php

$date_f = date('Y-m-d');
$date_t = date('H:i:s');
$date_m = date('m');
$date_d = date('d');
$date_y = date('Y');
?>




<div class="row">

    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Details   

            <button class='btn btn-primary' onclick=goBack()>Back</button>
                                                <script>
                                                    function goBack(){
                                                        window.location.href='dashboardcommitmentvalidated.php';
                                                        }
                                                </script> 
            <!-- Start Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                 



                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="submit_array" onclick="addfindings()">Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>

            <!-- End Modal -->
                    
            
            
            <div class="table-responsive">
                <?php
                   

                    // Define the current page and the number of records per page
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $records_per_page = 10;

                    // Calculate the OFFSET for the SQL query
                    $offset = ($current_page - 1) * $records_per_page;

                    // Query to retrieve records with pagination
                    $query001 = mysqli_query($conn, "SELECT * FROM production_validated_cms WHERE code='$prod_code' ORDER BY date_harvest ASC LIMIT $offset, $records_per_page");

                    // Calculate the total number of pages
                    $total_records_query = mysqli_query($conn, "SELECT COUNT(*) AS total_records FROM production_validated_cms WHERE code='$prod_code'");
                    $total_records = mysqli_fetch_assoc($total_records_query)['total_records'];
                    $total_pages = ceil($total_records / $records_per_page);
                ?>

                <!--<div class="container mt-3">
                    <input type="text" id="search" class="form-control" placeholder="Search for a name or commodity">
                </div>-->

                <!-- Your existing table code here -->
                <table id="table_collect" class="table table-striped table-bordered wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <!-- Table headers -->
                    <thead>
                        <tr style="vertical-align: middle;">
                            <th>Date of Expected Harvest</th>
                            <th>Frequency</th>
                            <th>Weekly Expected Yield</th>
                            <th>Status</th>
                            <th style="display:none;">Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <?php while ($result001 = mysqli_fetch_array($query001)): ?>
                            <tr>
                                <!-- Your table row data -->
                                <td style="text-align: left;"><?php echo date('F d, Y', strtotime($result001['date_harvest'])); ?></td>
                                <td style="text-align: right;">(<?php echo $result001['frequency']; ?>) times per week</td>
                                <td style="text-align: right;"><?php echo $result001['vol_del_week']; ?> kg</td>
                                <td style="text-align: right;"><?php echo $result001['status_mon']; ?></td>
                                <td style="display:none;">
                                    <input type="text" id="comm_id" value="<?php echo $result001['comm']; ?>">
                                    <input type="text" id="name_id" value="<?php echo $result001['name']; ?>">
                                    <input type="text" id="hills_id" value="<?php echo $result001['hills']; ?>">
                                    <input type="text" id="date_sown_id" value="<?php echo $result001['date_sown']; ?>">
                                    <input type="text" id="date_harvest_id" value="<?php echo $result001['date_harvest']; ?>">
                                                      
                                </td>
                                <td>
                                    <a class="monitorinfo btn btn-raised btn-info waves-effect" data-id="<?php echo $result001['id']; ?>"><i class="uil-search-plus"></i></a>
                                    <!--<a onClick="deleteme(<?php echo $result001['id']; ?>)" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>-->
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

                        <script>         
                                $(document).ready(function(){
                                $('.monitorinfo').click(function(){
                                    var id = $(this).data('id');
                                   
                                    $.ajax({
                                                url:"dashboardcommitmentvalidatedfetch.php",
                                                method:"POST",
                                                data:{id:id},
                                                success:function(data){
                                                    $('.modal-body').html(data);
                                                    $('#exampleModal').modal('show');
                                                    displayData();
                                                }
                                            });

                                })
                            })
                        </script>

                            <!-- Pagination links -->
                        <!-- Bootstrap-styled pagination -->
                        <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <?php if ($current_page > 1): ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?page=1" aria-label="First Page">
                                                <span aria-hidden="true">&laquo;&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="?page=<?php echo ($current_page - 1); ?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo; Previous</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php for ($i = max(1, $current_page - 2); $i <= min($current_page + 2, $total_pages); $i++): ?>
                                        <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                                            <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                        </li>
                                    <?php endfor; ?>

                                    <?php if ($current_page < $total_pages): ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?page=<?php echo ($current_page + 1); ?>" aria-label="Next">
                                                <span aria-hidden="true">Next &raquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="?page=<?php echo $total_pages; ?>" aria-label="Last Page">
                                                <span aria-hidden="true">&raquo;&raquo;</span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>

                        </div>
                </div>
            </div>
        </div>
        <!-- end col-->
    </div>
<!-- end row-->


</div>

                    <script>         
                                $(document).ready(function(){
                                $('.monitorinfo').click(function(){
                                    var code = $(this).data('id');
                                    var comm_id = document.getElementById('comm_id').value;
                                    var name_id = document.getElementById('name_id').value;
                                    var barangay_id = document.getElementById('barangay_id').value;
                                    var hills_id = document.getElementById('hills_id').value;
                                    var date_sown_id = document.getElementById('date_sown_id').value;
                                    var date_harvest_id = document.getElementById('date_harvest_id').value;
                                   
                                    $.ajax({
                                                url:"prodharvestmonitoringwholeadd.php",
                                                method:"POST",
                                                data:{code:code,comm_id:comm_id,name_id:name_id,barangay_id:barangay_id,hills_id:hills_id,date_sown_id:date_sown_id,date_harvest_id:date_harvest_id},
                                                success:function(data){
                                                    $('.modal-body').html(data);
                                                    $('#exampleModal').modal('show');
                                                    displayData();
                                                }
                                            });

                                })
                            })
                        </script>

                  
                    <script>
                        function addfindings(){
                            var mon_id= $('#mon_id').val();
                            var mon_code= $('#mon_code').val();
                            var mon_name= $('#mon_name').val();
                            var mon_comm= $('#mon_comm').val();
                            var mon_hills= $('#mon_hills').val();
                            var mon_date_sown= $('#mon_date_sown').val();
                            var mon_date_harvest= $('#mon_date_harvest').val();
                            var mon_date_monitor= $('#mon_date_monitor').val();
                            var mon_status= $('#mon_status').val();
                            var mon_actual_monitor= $('#mon_actual_monitor').val();
                            var mon_actual_yield= $('#mon_actual_yield').val();
                            var mon_findings= $('#mon_findings').val();
                            var mon_recomm= $('#mon_recomm').val();
                            var mon_response= $('#mon_response').val();
                            var mon_date_created= $('#mon_date_created').val();
                            var mon_encoder= $('#mon_encoder').val();
                            var mon_cause= $('#mon_cause').val();
                            var code_monitor= $('#code_monitor').val();       // Update values to 1 for "Yes" and 0 for "No"
                            var mon_pest_ex = $('.mon_pest_ex').is(':checked') ? "Yes" : "No";
                            var mon_fert_ex = $('.mon_fert_ex').is(':checked') ? "Yes" : "No";
                            var mon_cont_ex = $('.mon_cont_ex').is(':checked') ? "Yes" : "No";
                            

                                $.ajax({
                                        url:"dashboardcommitmentvalidatedinsert.php",
                                        method:"POST",
                                        data:{mon_id:mon_id,
                                            mon_code:mon_code,
                                            mon_name:mon_name,
                                            mon_comm:mon_comm,
                                            mon_hills:mon_hills,
                                            mon_date_sown:mon_date_sown,
                                            mon_date_harvest:mon_date_harvest,
                                            mon_date_monitor:mon_date_monitor,
                                            mon_status:mon_status,
                                            mon_actual_monitor:mon_actual_monitor,
                                            mon_actual_yield:mon_actual_yield,
                                            mon_findings:mon_findings,
                                            mon_recomm:mon_recomm,
                                            mon_response:mon_response,
                                            mon_date_created:mon_date_created,
                                            mon_encoder:mon_encoder,
                                            mon_cause:mon_cause,
                                            code_monitor:code_monitor,
                                            mon_pest_ex:mon_pest_ex,
                                            mon_fert_ex:mon_fert_ex,
                                            mon_cont_ex:mon_cont_ex

                                        },
                                        success:function(data,status){
                                        
                                            Swal.fire({
                                                    title: 'Success',
                                                    text: 'Saved successfully!',
                                                    icon: 'success',
                                                    timer: 2000
                                                }).then(() => {
                                                    $('#exampleModal').modal('hide');   
                                                    location.reload();
                                                });
                                            }
                                        });
                            }
                    </script>

                                    <script>
                                        $(document).ready(function () {
                                            $("#submit_array").click(function (e) {
                                                e.preventDefault();

                                                // Create an array to store data for each row
                                                var dataArray = [];

                                                // Loop through each row in the table
                                                $('.table_form2 tbody tr').each(function () {
                                                    var row = $(this);
                                                    var rowData = {
                                                        id_from: row.find('#id_from').val(),
                                                        code_from: row.find('#code_from').val(),
                                                        type_from: row.find('#type_from').val(),
                                                        encoder_from: row.find('#encoder_from').val(),
                                                        date_created_from: row.find('#date_created_from').val(),
                                                        name_from: row.find('#name_from').val(),
                                                        level_from: row.find('#level_from').val(),
                                                        date_validated_from: row.find('#date_validated_from').val(),
                                                        code_monitor_pd: row.find('#code_monitor_pd').val(),
                                                        

                                                        id_from1: row.find('#id_from1').val(),
                                                        code_from1: row.find('#code_from1').val(),
                                                        type_from1: row.find('#type_from1').val(),
                                                        encoder_from1: row.find('#encoder_from1').val(),
                                                        date_created_from1: row.find('#date_created_from1').val(),
                                                        name_from1: row.find('#name_from1').val(),
                                                        level_from1: row.find('#level_from1').val(),
                                                        date_validated_from1: row.find('#date_validated_from1').val(),
                                                        code_monitor_pd1: row.find('#code_monitor_pd1').val(),

                                                        id_from02: row.find('#id_from02').val(),
                                                        code_from02: row.find('#code_from02').val(),
                                                        code_monitor_pd02: row.find('#code_monitor_pd02').val(),
                                                        encoder_from02: row.find('#encoder_from02').val(),
                                                        date_validated_from02: row.find('#date_validated_from02').val(),
                                                        date_created_from02: row.find('#date_created_from02').val(),
                                                        name_from02: row.find('#name_from02').val(),

                                                        id_from03: row.find('#id_from03').val(),
                                                        code_from03: row.find('#code_from03').val(),
                                                        code_monitor_pd03: row.find('#code_monitor_pd03').val(),
                                                        encoder_from03: row.find('#encoder_from03').val(),
                                                        date_validated_from03: row.find('#date_validated_from03').val(),
                                                        date_created_from03: row.find('#date_created_from03').val(),
                                                        name_from03: row.find('#name_from03').val(),
                                                        
                                                        
                                                      
                                                    };

                                                    // Push the rowData to the dataArray
                                                    dataArray.push(rowData);
                                                });

                                                //alert(JSON.stringify(dataArray, null, 2));

                                                // Send the dataArray to the PHP script
                                                $.ajax({
                                                    url: "dashboardcommitmentvalidatedinsertarray.php",
                                                    method: "POST",
                                                    data: { dataArray: dataArray },
                                                    success: function (data) {
                                                        var response = JSON.parse(data);
                                                    }
                                                });
                                            });
                                        });
                                    </script>

<script>
        function updateDateValidatedFrom1(value) {
            // Assuming you want to set the value of date_validated_from1 to the input value
            document.getElementById('date_validated_from1').value = value;
            document.getElementById('date_validated_from').value = value;
            document.getElementById('date_validated_from02').value = value;
            document.getElementById('date_validated_from03').value = value;
        }
        
    </script>
                    
                    <script>
                        function printPage(){
                            var printarea_01 = document.getElementById('printarea_01').innerHTML;
                        
                            window.print();
                        }
                    </script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php include 'footer.php'; ?>