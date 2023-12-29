


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
                                        $sql = "SELECT * FROM `usertableadms` WHERE id=$farmerid";
                                                $query = mysqli_query($conn, $sql);
                                    ?>

                                    <?php 
                                        while($q = mysqli_fetch_array($query)){ 
                                    ?> 
                                    
                                    <?php
                                                                
                                        //$add_prod_file = $q['add_prod_file'];
                                        
                                    ?>
                                                                  
                                </div>

                                         

                                            <div class="mb-3" style="display:none;">
                                                <label for="id" class="form-label">ID</label>
                                                <input type="text" class="form-control" id="id1" name="id1" readonly value="<?php echo $q['id'];?>">
                                            </div>

                                            
                                            <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">PERSONAL INFORMATION</label>                                                                         
                                                                    </div>                                        
                                                                </div>
                                                         
                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="code">Code</label>
                                                                        <input type="text" required class="form-control" id="fname1" name="fname1" value='<?php echo $q['fname'];?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="type">Type</label>
                                                                        <input type="text" required class="form-control" id="position1" name='position1' value="<?php echo $q['position'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="type">Office</label>
                                                                        <input type="text" required class="form-control" id="office1" name='office1' value="<?php echo $q['office'];?>">      
                                                                    </div>                                        
                                                                </div>
                                                          

                                                               
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="regval1">Status</label>                                                       
                                                                            <select id="regval1" class="form-select" name="regval1">
                                                                                <option value="<?php echo $q['regval'];?>"><?php echo $q['regval'];?></option>
                                                                                <option value="Accept">Accept</option>
                                                                                <option value="Decline">Decline</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="component1">Component</label>                                                       
                                                                            <select id="component1" class="form-select" name="component1">
                                                                                <option value="<?php echo $q['component'];?>"><?php echo $q['component'];?></option>
                                                                                <option value="AgriBloom">AgriBloom</option>
                                                                                <option value="AgriMart">AgriMart</option>
                                                                                <option value="AgriComms">AgriComms</option>
                                                                                <option value="None">None</option>
                                                                                <option value="Admin">Admin</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                      

                                                        



                                        
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
<?php } ?>







    









                               

















