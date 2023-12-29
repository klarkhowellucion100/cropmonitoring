


<?php
    include 'db.inc.php';
    if(isset($_POST['farmerid'])){ 
?>

<?php 
    $farmerid = $_POST['farmerid'];
?>

<!--START OVERALL -->

                                          

                                <div class="row">
                                   

                                    <?php  
                                        $sql = "SELECT * FROM `salesrecord` WHERE id=$farmerid";
                                                $query = mysqli_query($conn, $sql);
                                    ?>

                                    <?php 
                                        while($q = mysqli_fetch_array($query)){ 
                                    ?> 
                                    
                                    <?php
                                                                
                                        //$add_prod_file = $q['add_prod_file'];
                                        
                                    ?>
                                                                  
                                </div>

                                         

                                            <div class="mb-3">
                                                <label for="id1" class="form-label">ID</label>
                                                <input type="text" class="form-control" id="id1" name="id1" readonly value="<?php echo $q['id'];?>">
                                            </div>


                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="commtype1">Type</label>                                                       
                                                                            <select id="commtype1" class="form-select" name="commtype1">
                                                                                <option value="<?php echo $q['commtype'];?>"><?php echo $q['commtype'];?></option>

                                                                                
                                                                                    <?php  
                                                                                    include 'db.inc.php';
                                                                                    $query001 = mysqli_query($conn,"SELECT * FROM commodityhubpos WHERE `sellingtype`='Farmgate' GROUP BY `type`");
                                                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                                                  
                                                                                <option value="<?php echo $result001 ['type'];?>"><?php echo $result001 ['type'];?></option>
                                                                                <?php endwhile; ?>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="commname1">Commodity</label>                                                       
                                                                            <select id="commname1" class="form-select" name="commname1">
                                                                                <option value="<?php echo $q['commname'];?>"><?php echo $q['commname'];?></option>
                                                                                  
                                                                                    <?php  
                                                                                    include 'db.inc.php';
                                                                                    $query002 = mysqli_query($conn,"SELECT * FROM commodityhubpos WHERE `sellingtype`='Farmgate' GROUP BY `commodity`");
                                                                                    while($result002 = mysqli_fetch_array($query002)): ?>
                                                                                <option value="<?php echo $result002 ['commodity'];?>"><?php echo $result002 ['commodity'];?></option>
                                                                                <?php endwhile; ?>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="commclass1">Class</label>                                                       
                                                                            <select id="commclass1" class="form-select" name="commclass1">
                                                                                <option value="<?php echo $q['commclass'];?>"><?php echo $q['commclass'];?></option>
                                                                                <option value="Class A">Class A</option>
                                                                                <option value="Class B">Class B</option>
                                                                                <option value="Class C">Class C</option>
                                                                                <option value="Reject">Reject</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                            
                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="code">Date Sold</label>
                                                                        <input type="text" required class="form-control" id="datesold1" name="datesold1" value='<?php echo $q['datesold'];?>'>      
                                                                    </div>                                        
                                                                </div>

                                                         
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="buyer1">Buyer</label>                                                       
                                                                            <select id="buyer1" class="form-select" name="buyer1">
                                                                                <option value="<?php echo $q['buyer'];?>"><?php echo $q['buyer'];?></option>
                                                                                <option value="AgriHub">AgriHub</option>
                                                                                <option value="Agent">Agent</option>
                                                                                <option value="Wholesaler">Wholesaler</option>
                                                                                <option value="Retailer">Retailer</option>
                                                                                <option value="Wholesaler-Retailer">Wholesaler-Retailer</option>
                                                                                <option value="Exporter">Exporter</option>
                                                                                <option value="Cooperative">Cooperative</option>
                                                                                <option value="Consumer">Consumer</option>
                                                                                <option value="Processor">Processor</option>
                                                                                <option value="Others">Others</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="code">Price</label>
                                                                        <input type="number" required class="form-control" id="commprice1" name="commprice1" value='<?php echo $q['commprice'];?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="code">Quantity</label>
                                                                        <input type="number" required class="form-control" id="commqty1" name="commqty1" value='<?php echo $q['commqty'];?>'>      
                                                                    </div>                                        
                                                                </div>

                                                              
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
<?php } ?>







    









                               

















