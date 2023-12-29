


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
                                        $sql = "SELECT * FROM `feedbackrecord` WHERE id=$farmerid";
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

                                            
                                           
                                                         
                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="code">NPS Score</label>
                                                                        <input type="text" required class="form-control" id="qsix1" name="qsix1" value='<?php echo $q['qsix'];?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label">NPS Details</label>
                                                                    <div>
                                                                        <textarea required="" id="qsixr1" name="qsixr1" class="form-control" rows="5"><?php echo $q['qsixr'];?></textarea>
                                                                    </div>
                                                                </div>

                                                              
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
<?php } ?>







    









                               

















