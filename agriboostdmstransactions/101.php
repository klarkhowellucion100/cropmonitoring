<div class="table-responsive">
        <table id="table_collect" class="table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
             <thead>
                 <tr>
                     
            
                        <th>Farmer ID</th>  
                        <th>Name</th> 
                        <th>Barangay</th>   
                        <th>Sex</th> 
                        <th>Age</th>    
                        <th>Birthdate</th>   
                        <th>Last Education</th>    
                        <th>Land Size</th>
                        <th>Vegetable Area</th> 
                        <th>Ownership</th> 
                        <th>Contact No</th>
                        <th>Status</th>  
                        <th>Membership Date</th> 
                        <th>Farming Years</th> 
                  
                 </tr>
             </thead>


             <tbody>
                 <?php
                     include 'db.inc.php';
                     $query001 = mysqli_query($conn,"SELECT * FROM registrationhubpos WHERE `type`='Farmer'");
                     while($result001 = mysqli_fetch_array($query001)): ?>
                 <tr>
                         
                      

                        <td><?php echo $result001 ['code']; ?></td> 
                        <td><?php echo $result001 ['fname']; ?></td> 
                        <td><?php echo $result001 ['barangay']; ?></td> 
                        <td><?php echo $result001 ['gender']; ?></td> 
                        <td><?php echo $result001 ['age']; ?></td> 
                        <td><?php echo $result001 ['birthdate']; ?></td> 
                        <td><?php echo $result001 ['education']; ?></td> 
                        <td><?php echo $result001 ['landsize']; ?></td> 
                        <td><?php echo $result001 ['veg_area']; ?></td> 

                        <td><?php echo $result001 ['type_own']; ?></td> 
                        <td><?php echo $result001 ['cnumber']; ?></td> 
                        <td><?php echo $result001 ['reg_status']; ?></td> 
                        <td><?php echo $result001 ['dt_membership']; ?></td> 
                        <td>0</td> 


                   
                      
                                 
                 </tr>
                     <?php endwhile; ?>

             </tbody>
         </table>
        </div>