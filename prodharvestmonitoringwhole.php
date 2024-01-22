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

              
               
                    

                    <div class="row" id="printarea_01">
                        <div class="col-lg-12 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <button class='btn btn-primary' onclick=goBack()>Back</button>
                                                <script>
                                                    function goBack(){
                                                        window.location.href='prodharvestmonitoring.php';
                                                        }
                                                </script> 
                                  
                                    <div class="row">
                                        <?php
                                                include 'db.inc.php';
                                                $query1 = mysqli_query($conn,"SELECT *, YEAR(date_harvest) AS date_harvest_first, MAX(date_harvest) AS date_harvest_last FROM production_cms WHERE (`name` LIKE '%$name_prod%') AND YEAR(date_harvest)='2024' GROUP BY code");
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
                                                        <p class="text-muted font-size-15"> Number of Hills: <br> <span style="color: royalblue;"><?php echo $result1['hills']; ?></span></p>
                                                        <p class="text-muted font-size-15"> Date Sown: <br> <span style="color: royalblue;"><?php echo date('M d, Y', strtotime($result1['date_sown'])); ?></span></p>
                                                        <p class="text-muted font-size-15"> Date of First Harvest: <br> <span style="color: royalblue;"><?php echo date('M d, Y', strtotime($result1['date_harvest'])); ?></span></p>
                                                        <p class="text-muted font-size-15"> Date of Last Harvest: <br> <span style="color: royalblue;"><?php echo date('M d, Y', strtotime($result1['date_harvest_last'])); ?></span></p>
                                                        <!--<h5 class="mt-3 mb-0"><span class="text-muted me-2"></span> P </h5>-->
                                                        <div style="display:none;">
                                                            <input type="text" id="comm_id" value="<?php echo $result1['comm']; ?>">
                                                            <input type="text" id="name_id" value="<?php echo $result1['name']; ?>">
                                                            <input type="text" id="barangay_id" value="<?php echo $result1['barangay']; ?>">
                                                            <input type="text" id="hills_id" value="<?php echo $result1['hills']; ?>">
                                                            <input type="text" id="date_sown_id" value="<?php echo $result1['date_sown']; ?>">
                                                            <input type="text" id="date_harvest_id" value="<?php echo $result1['date_harvest']; ?>">
                                                           
                                                        </div>
                                                        <!--<a class='monitorinfo btn btn-primary' style="margin-top: 20px;" data-id="<?php echo $result1['code'];?>"> Monitor </a> -->
                                                        <a class='monitorinfo02 btn btn-primary' style="margin-top: 20px;" href="prodharvestmonitoringwholeadddetails.php?code=<?php echo $result1['code']; ?>&&name=<?php echo $name_prod; ?>&&year=<?php echo $year_prod; ?>"> Monitor </a> 
                                                        <a class='monitorinfo01 btn btn-primary' style="margin-top: 20px;" href="prodharvestmonitoringwholefindings.php?code=<?php echo $result1['code']; ?>&&name=<?php echo $name_prod; ?>&&year=<?php echo $year_prod; ?>"> Findings </a> 

                                                
                                                        
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
                        function printPage(){
                            var printarea_01 = document.getElementById('printarea_01').innerHTML;
                        
                            window.print();
                        }
                    </script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php include 'footer.php'; ?>