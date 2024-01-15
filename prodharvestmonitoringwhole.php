<?php include 'heading.php'; ?>




<?php
    if (isset($_GET['name']) && isset($_GET['year'])) {
        include_once 'db.inc.php';
    
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




                    <div class="row" >
                        <div class="col-12 mx-auto">
                           
                                <h4 class="mb-0" >Monitor Production</h4>
                                
                                
                        </div>
                    </div>
                    <!-- end page title -->

              
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
                                    <button type="button" class="btn btn-primary" onclick=addproduct()>Save changes</button>
                                </div>
                                </div>
                            </div>
                        </div>

            <!-- End Modal -->
                    

                    <div class="row" id="printarea_01">
                        <div class="col-lg-12 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <a class='btn btn-primary' href="prodharvestmonitoring.php" style="margin-top: 20px;"> Exit </a> 
                                  
                                    <div class="row">
                                        <?php
                                                include 'db.inc.php';
                                                $query1 = mysqli_query($conn,"SELECT *, YEAR(date_harvest) AS date_harvest_first FROM harvest_schedule_cms WHERE (`name` LIKE '%$name_prod%') AND YEAR(date_harvest)='2024'");
                                                while($result1 = mysqli_fetch_array($query1)): ?>

                                            <!--Start Content-->
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="product-box">
                                                    <div class="product-img pt-4 px-4">
                                                        <div class="product-ribbon badge bg-warning">
                                                            <?php echo $result1['code']; ?>
                                                        </div>
                                                        
                                                        <!--<img src="" alt="" style="height:150px; widht:100%;" class="img-fluid mx-auto d-block">-->
                                                    </div>

                                                    <div class="text-center product-content p-4">

                                                    
                                                        <h5 class="mb-1"><a href="#" class="text-dark"><?php echo $result1['comm']; ?></a></h5>
                                                        <p class="text-muted font-size-15"> Barangay: <br> <span style="color: royalblue;"><?php echo $result1['barangay']; ?></span></p>
                                                        <p class="text-muted font-size-15"> Number of Hills: <br> <span style="color: royalblue;"><?php echo $result1['hills']; ?></span></p>
                                                        <p class="text-muted font-size-15"> Date Sown: <br> <span style="color: royalblue;"><?php echo date('M d, Y', strtotime($result1['date_sown'])); ?></span></p>
                                                        <p class="text-muted font-size-15"> Date of First Harvest: <br> <span style="color: royalblue;"><?php echo date('M d, Y', strtotime($result1['date_harvest'])); ?></span></p>
                                                        <!--<h5 class="mt-3 mb-0"><span class="text-muted me-2"></span> P </h5>-->
                                                        <div style="display:none;">
                                                            <input type="text" id="comm_id" value="<?php echo $result1['comm']; ?>">
                                                            <input type="text" id="name_id" value="<?php echo $result1['name']; ?>">
                                                            <input type="text" id="barangay_id" value="<?php echo $result1['barangay']; ?>">
                                                            <input type="text" id="hills_id" value="<?php echo $result1['hills']; ?>">
                                                            <input type="text" id="date_sown_id" value="<?php echo $result1['date_sown']; ?>">
                                                            <input type="text" id="date_harvest_id" value="<?php echo $result1['date_harvest']; ?>">
                                                        </div>
                                                        <a class='monitorinfo btn btn-primary' style="margin-top: 20px;" data-id="<?php echo $result1['code'];?>"> Monitor </a> 
                                                        <a class='productinfo1 btn btn-primary' style="margin-top: 20px;" data-id="<?php echo $result1['code'];?>"> Comments </a> 

                                                
                                                        
                                                    </div>
                                                
                                                </div>
                                            </div>
                                            <!--End Content-->
                                            
                                        <?php endwhile; ?> 
                                    </div>
                    <!-- end row -->
                                </div>
                            </div>
                        </div>
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
    function printPage(){
        var printarea_01 = document.getElementById('printarea_01').innerHTML;
     
        window.print();
    }
</script>






<?php include 'footer.php'; ?>