


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
                                        $sql = "SELECT * FROM `registrationhubpos` WHERE id=$farmerid";
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
                                                                        <input type="text" required readonly class="form-control" id="code1" name="code1" value='<?php echo $q['code'];?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="type">Type</label>
                                                                        <input type="text" required class="form-control" id="type1" readonly name='type1' value="<?php echo $q['type'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="fname">Full Name</label>
                                                                        <input type="text" required class="form-control" id="fname1" placeholder='Enter First Name *' name='fname1' value="<?php echo $q['fname'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="cnumber">Contact Number</label>
                                                                        <input type="text" class="form-control" id="cnumber1" placeholder='Enter Contact Number *' name='cnumber1' value="<?php echo $q['cnumber'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="region">Region</label>
                                                                        <input type="text" readonly required class="form-control" id="region1" name="region1" value="<?php echo $q['region'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="province">Province</label>
                                                                        <input type="text" readonly required class="form-control" id="province1" name="province1" value="<?php echo $q['province'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="municipality">City/Municipality</label>
                                                                        <input type="text" readonly required class="form-control" id="municipality1" value="<?php echo $q['municipality'];?>" name='municipality1'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="gender">Gender</label>                                                       
                                                                            <select id="gender1" class="form-select" name="gender1">
                                                                                <option value="<?php echo $q['gender'];?>"><?php echo $q['gender'];?></option>
                                                                                <option value="Male">Male</option>
                                                                                <option value="Female">Female</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="birthdate">Birthdate</label>
                                                                        <input type="date" class="form-control" id="birthdate1" name='birthdate1' value="<?php echo $q['birthdate'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                
                                                               
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="education">Educational Attainment</label>                                                       
                                                                            <select id="education1" class="form-select" name="education1">
                                                                                <option value="<?php echo $q['education'];?>"><?php echo $q['education'];?></option>
                                                                                <option value="Elementary Level">Elementary Level</option>
                                                                                <option value="Elementary Graduate">Elementary Graduate</option>
                                                                                <option value="Highschool Level">Highschool Level</option>
                                                                                <option value="Highschool Graduate">Highschool Graduate</option>
                                                                                <option value="College Level">College Level</option>
                                                                                <option value="College Graduate">College Graduate</option>
                                                                                <option value="Post Graduate">Post Graduate</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="barangay">Barangay Address</label>                                                       
                                                                            <select id="barangay1" class="form-select region_1 region_0 region_2" name="barangay1">
                                                                            <option value="<?php echo $q['barangay'];?>"><?php echo $q['barangay'];?></option>
                                                                                <?php  
                                                                                    $sql = "SELECT * FROM areashubpos WHERE region='Region XIII' AND province='Agusan del Norte' AND municipality='Butuan City' GROUP BY barangay";
                                                                                    $query = mysqli_query($conn, $sql);
                                                                                ?>
                                                                                <?php foreach($query as $q2){ ?>  
                                                                                    <option value="<?php echo $q2 ['barangay'];?>"><?php echo $q2 ['barangay'];?></option>
                                                                                <?php } ?>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">AREA DETAILS</label>                                                                         
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="landsize">Agricultural Land Size</label>
                                                                        <input type="text" class="form-control" id="landsize1" name='landsize1' placeholder="Enter Area (Ha) *" value="<?php echo $q['landsize'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="veg_area">Vegetable Area</label>
                                                                        <input type="text" class="form-control" id="veg_area1" name='veg_area1' placeholder="Enter Area (Ha) *" value="<?php echo $q['veg_area'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="type_own">Ownership</label>                                                       
                                                                            <select id="type_own1" class="form-select" name="type_own1">
                                                                                <option value="<?php echo $q['type_own'];?>"><?php echo $q['type_own'];?></option>
                                                                                <option value="Owner">Owner</option>
                                                                                <option value="Tenant">Tenant</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">AGRIBOOST MEMBERSHIP</label>                                                                         
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="dt_joined">Date of Membership</label>
                                                                        <input type="date" class="form-control" id="dt_joined1" name='dt_joined1' value="<?php echo $q['dt_joined'];?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="ffs_phase">FFS Phase</label>                                                       
                                                                            <select id="ffs_phase1" class="form-select" name="ffs_phase1">
                                                                                <option value="<?php echo $q['ffs_phase'];?>"><?php echo $q['ffs_phase'];?></option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                        
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
<?php } ?>







    









                               

















