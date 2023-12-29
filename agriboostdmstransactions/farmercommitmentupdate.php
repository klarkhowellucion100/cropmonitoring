


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
                                        $sql = "SELECT * FROM `transactionfinalhubpos` WHERE trans_id=$farmerid";
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
                                                <input type="text" class="form-control" id="trans_id" name="trans_id" readonly value="<?php echo $q['trans_id'];?>">
                                            </div>

                                            
                                           
                                                         
                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="code">Commitment</label>
                                                                        <input type="text" required class="form-control" id="trans_commitvol" name="trans_commitvol" value='<?php echo $q['trans_commitvol'];?>'>      
                                                                    </div>                                        
                                                                </div>

                                                              
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
<?php } ?>







    









                               

















