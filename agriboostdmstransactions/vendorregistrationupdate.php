


<?php
    include 'db.inc.php';
    if(isset($_POST['vendorid'])){ 
?>

<?php 
    $vendorid = $_POST['vendorid'];
?>

<!--START OVERALL -->

                                          

                                <div class="row">
                                   

                                    <?php  
                                        $sql = "SELECT * FROM `registrationhubpos` WHERE id=$vendorid";
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
                                                                        <label style="color:royalblue;">BUSINESS DETAILS</label>                                                                         
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="category">Category</label>                                                       
                                                                            <select id="category" class="form-select" name="category1">
                                                                                <option value="<?php echo $q['category'];?>"><?php echo $q['category'];?></option>
                                                                                <option value="Market Vendor">Market Vendor</option>
                                                                                <option value="Modern Trade">Modern Trade</option>
                                                                                <option value="Restaurants">Restaurants</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="bus_name">Business Name</label>
                                                                        <input type="text" class="form-control" id="bus_name" value="<?php echo $q['bus_name'];?>" name='bus_name1' placeholder="Enter Business Name *">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="bus_add">Business Address</label>                                                       
                                                                            <select id="bus_add" class="form-select region_1 region_0 region_2" name="bus_add1">
                                                                            <option value="<?php echo $q['bus_add'];?>"><?php echo $q['bus_add'];?></option>
                                                                                <?php  
                                                                                    $sql = "SELECT * FROM areashubpos WHERE region='Region XIII' AND province='Agusan del Norte' AND municipality='Butuan City' GROUP BY barangay";
                                                                                    $query = mysqli_query($conn, $sql);
                                                                                ?>
                                                                                <?php foreach($query as $q3){ ?>  
                                                                                    <option value="<?php echo $q3 ['barangay'];?>"><?php echo $q3 ['barangay'];?></option>
                                                                                <?php } ?>
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

                                                     

                                        
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
<?php } ?>







    









                               

















