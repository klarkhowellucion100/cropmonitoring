<div class="table-responsive">
        <table id="table_collect" class="table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
             <thead>
                 <tr>
                     
            
                        <th>Farmer ID</th>  
                        <th>Name</th> 
                        <th>Commodity</th>   
                        <th>Class</th> 
                        <th>Commitment Date</th>    
                        <th>Delivery Date</th>   
                        <th>Volume Committed</th>    
                        <th>Farmgate Price</th>
                        <th>Week</th> 
                      
                  
                 </tr>
             </thead>


             <tbody>
                 <?php
                     include 'db.inc.php';
                     $query001 = mysqli_query($conn,"SELECT * FROM all_transactions_hubpos WHERE `trans_partnertype`='Farmer'");
                     while($result001 = mysqli_fetch_array($query001)): ?>
                 <tr>
                         
                      

                        <td><?php echo $result001 ['code']; ?></td> 
                        <td><?php echo $result001 ['fname']; ?></td> 
                        <td><?php echo $result001 ['code']; ?></td> 
                        <td><?php echo $result001 ['fname']; ?></td> 
                        <td><?php echo $result001 ['code']; ?></td> 
                        <td><?php echo $result001 ['fname']; ?></td> 
                        <td><?php echo $result001 ['code']; ?></td> 
                        <td><?php echo $result001 ['fname']; ?></td> 
                        <td><?php echo $result001 ['code']; ?></td> 
                        <td><?php echo $result001 ['fname']; ?></td> 
                        <td><?php echo $result001 ['code']; ?></td> 
                        <td><?php echo $result001 ['fname']; ?></td> 
                        <td><?php echo $result001 ['code']; ?></td> 
                        <td><?php echo $result001 ['fname']; ?></td> 
                        
                        <td>0</td> 


                   
                      
                                 
                 </tr>
                     <?php endwhile; ?>

             </tbody>
         </table>
        </div>