<?php include 'heading.php'; ?>




<?php
    if (isset($_GET['code']) && isset($_GET['name']) && isset($_GET['year'])) {
        include_once 'db.inc.php';
    
    $prod_code = $_GET['code'];
    $name_prod = $_GET['name'];
    $year_prod = $_GET['year'];
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
                                                        window.location.href='prodharvestmonitoringwhole.php?name=<?php echo $name_prod;?>&&year=<?php echo $year_prod;?>';
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
                                    <button type="button" class="btn btn-primary" onclick="updatefindings()">Save changes</button>
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
                    $query001 = mysqli_query($conn, "SELECT * FROM monitoring_production_cms WHERE code='$prod_code' ORDER BY date_monitor ASC LIMIT $offset, $records_per_page");

                    // Calculate the total number of pages
                    $total_records_query = mysqli_query($conn, "SELECT COUNT(*) AS total_records FROM monitoring_production_cms WHERE code='$prod_code'");
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
                        <tr>
                            <th>Name</th>
                            <th>Commodity</th>
                            <th>No. of Hills</th>
                            <th>Date Sown</th>
                            <th>Date of Expected Harvest</th>
                            <th>Date Monitored</th>
                            <th>Status</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody>
                        <?php while ($result001 = mysqli_fetch_array($query001)): ?>
                            <tr>
                                <!-- Your table row data -->
                                <td><?php echo $result001['name']; ?></td>
                                <td><?php echo $result001['comm']; ?></td>
                                <td><?php echo $result001['hills']; ?></td>
                                <td style="text-align: right;"><?php echo date('F d, Y', strtotime($result001['date_sown'])); ?></td>
                                <td style="text-align: right;"><?php echo date('F d, Y', strtotime($result001['date_harvest'])); ?></td>
                                <td style="text-align: right;"><?php echo date('F d, Y', strtotime($result001['date_monitor'])); ?></td>
                                <td style="text-align: left;"><?php echo $result001['mon_status']; ?></td>
                                <td style="text-align: left;"><?php echo $result001['mon_findings']; ?></td>
                              
                                <td>
                                    <a class="monitorinfo btn btn-raised btn-warning waves-effect" data-id="<?php echo $result001['id']; ?>"><i class="uil-edit-alt"></i></a>
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
                                                url:"prodharvestmonitoringwholefindingsupdate.php",
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
                                                url:"prodharvestmonitoringwholefindingsupdate.php",
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
                            function updatefindings() {
                                var mon_id = $('#mon_id').val();
                                var mon_status = $('#mon_status').val();
                                var mon_findings = $('#mon_findings').val();
                                var date_monitor = $('#date_monitor').val();
                                var prod_id = $('#prod_id').val();

                                $.ajax({
                                    url: "prodharvestmonitoringwholefindingsupdateprocess.php",
                                    method: "POST",
                                    data: {
                                        mon_id: mon_id,
                                        mon_status: mon_status,
                                        mon_findings: mon_findings,
                                        date_monitor: date_monitor,
                                        prod_id: prod_id
                                    },
                                    success: function (data, status) {
                                        Swal.fire({
                                            title: 'Success',
                                            text: 'Updated successfully!',
                                            icon: 'success',
                                            timer: 2000
                                        }).then(() => {
                                            //$('#exampleModal').modal('hide');
                                            location.reload(); // or window.location.reload();
                                        });
                                    }
                                });
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