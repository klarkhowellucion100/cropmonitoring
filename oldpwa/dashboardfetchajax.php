<?php


include 'agriboostdmstransactions/db.inc.php';

if(isset($_POST['selectedYear']) && isset($_POST['fromMonth']) && isset($_POST['toMonth'])){ ?>


<?php 

$selectedYear = $_POST['selectedYear'];
$fromMonth = $_POST['fromMonth'];
$toMonth = $_POST['toMonth'];

?>

<div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: green; font-size: 30px;"></i>
                                    </div>

                                    <?php
                                            include 'agriboostdmstransactions/db.inc.php';
                                            $query = mysqli_query($conn, "SELECT week_num, month_num, year_num, month_name, SUM(volume_processed) FROM dashboard_tot_processed_volume WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear'");
                                            while($result = mysqli_fetch_array($query)): ?>
                                                <?php                                                            
                                                    $volume_processed = $result['SUM(volume_processed)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo number_format($volume_processed,2);?></span> kg</h4>
                                        <p class="text-muted mb-0">Total Processed Volume (kg)</p>
                                    </div>                                   
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: royalblue; font-size: 30px;"></i>
                                    </div>
                                    <?php
                                            include 'agriboostdmstransactions/db.inc.php';
                                            $query1 = mysqli_query($conn, "SELECT week_num, month_num, year_num, month_name, SUM(pay_subtotal_final) FROM dashboard_tot_processed_volume WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear'");
                                            while($result1 = mysqli_fetch_array($query1)): ?>
                                                <?php                                                            
                                                    $volume_released = $result1['SUM(pay_subtotal_final)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span>Php <?php echo number_format($volume_released,2);?></span> </h4>
                                        <p class="text-muted mb-0"> Total Amount Farmers' Received (Php)</p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <i class="uil-graph-bar" style="color: yellow; font-size: 30px;"></i>
                                    </div>
                                    <?php
                                            include 'agriboostdmstransactions/db.inc.php';
                                            $query2 = mysqli_query($conn, "SELECT COUNT(DISTINCT trans_partner) FROM farmers_engaged_tothubpos WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear'");
                                            while($result2 = mysqli_fetch_array($query2)): ?>
                                                <?php                                                            
                                                    $farmers_engaged = $result2['COUNT(DISTINCT trans_partner)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo number_format($farmers_engaged);?></span></h4>
                                        <p class="text-muted mb-0">No. of Farmers Engaged</p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <!-- end col-->

                        <div class="col-md-6 col-xl-3">

                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                    <i class="uil-graph-bar" style="color: crimson; font-size: 30px;"></i>
                                    </div>
                                    <?php
                                            include 'agriboostdmstransactions/db.inc.php';
                                            $query3 = mysqli_query($conn, "SELECT COUNT(DISTINCT trans_partner) FROM vendors_engaged_tothubpos WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear'");
                                            while($result3 = mysqli_fetch_array($query3)): ?>
                                                <?php                                                            
                                                    $vendors_engaged = $result3['COUNT(DISTINCT trans_partner)'];                                                               
                                                ?>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo number_format($vendors_engaged);?></span></h4>
                                        <p class="text-muted mb-0">No. of Market Channels Engaged</p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row-->

<?php } ?>