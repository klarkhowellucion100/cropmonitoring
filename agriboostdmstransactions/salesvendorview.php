<?php include_once 'header.php';?>




<?php
  $date_f = date('Y-m-d');
  $date_t = date('H:i:s');
  $date_m = date('m');
  $date_d = date('d');
  $date_y = date('Y');

  function createRandomPassword() {
      $chars = "003232303232023232023456789";
      srand((double)microtime()*1000000);
      $i = 0;
      $pass = '' ;
      while ($i <= 7) {
  
          $num = rand() % 33;
  
          $tmp = substr($chars, $num, 1);
  
          $pass = $pass . $tmp;
  
          $i++;
  
      }
      return $pass;
  }
  $finalcode='CM'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
?>

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Farmers Commitment</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Commitment</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <?php
$date_f = date('Y-m-d');
?>

    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Search</h4>
                                    <div class="mt-3">
                                                <div class="row">
                                                    <div class="col-xl-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="datefrom">Delivery Date (From)</label>
                                                                <input type="date" class="form-control" id="datefrom">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dateto">Delivery Date (To)</label>
                                                                <input type="date" class="form-control" id="dateto">      
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                  

                                                    <div class="col-xl-4">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dateto">Filter</label>
                                                                <button type="button" onclick="filter()" id="filter001" class="btn btn-primary form-control">Filter</button>
                                                            </div>                                        
                                                        </div>
                                                    </div>


                                                   

                                                </div>
                                           
                                        </div>

                                    </div>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->

                        <div id="myModalUpdate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Update Commitment</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <form action="agriboostdmstransactions/salesvendorviewupdateprocess.php" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-body" id="modal_update">

                                                              

                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <input type="submit"  name="submit_change" value='Save' class="btn btn-primary waves-effect waves-light">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
    <div id="dashboardmain">
                    



                  
                    <div class="row">

                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="card-title">Deliveries   

                                   
                                 
                                <div class="table-responsive">
                                <table id="table_collect" class="table table-striped table-bordered wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                     <thead>
                                         <tr>
                                             
                                    
                                                <th>Name</th>  
                                                <th>Commodity</th> 
                                                <th>Class</th>   
                                                <th>Date Bought</th> 
                                                <th>Date Sold</th> 
                                                <th>Buyer</th>
                                                <th>Price</th> 
                                                <th>Quantity</th>    
                                                <th>Amount</th>                                                 
                                                <th>Action</th>    
                                          
                                         </tr>
                                     </thead>


                                     <tbody>
                                         <?php
                                             include 'db.inc.php';
                                             $query001 = mysqli_query($conn,"SELECT * FROM sales_vendor");
                                             while($result001 = mysqli_fetch_array($query001)): ?>
                                         <tr>
                                              

                                                <td><?php echo $result001 ['sellername']; ?></td> 
                                                <td><?php echo $result001 ['commname']; ?></td>
                                                <td><?php echo $result001 ['commclass']; ?></td>
                                                <td style="text-align: right;"><?php echo date('F d, Y', strtotime($result001['dateplant'])); ?></td>  
                                                <td style="text-align: right;"><?php echo date('F d, Y', strtotime($result001['datesold'])); ?></td> 
                                                <td><?php echo $result001 ['buyer']; ?></td>
                                                <td style="text-align: right;">P <?php echo $result001 ['commprice']; ?></td> 
                                                <td style="text-align: right;"><?php echo $result001 ['commqty']; ?> kg</td> 
                                                <td style="text-align: right;">P <?php echo $result001 ['sales']; ?></td> 
                                                <td>   <a class="farmerinfo btn btn-raised btn-warning waves-effect" data-id="<?php echo $result001['id'];?>"><i class="uil-edit-alt"></i></a>
                                                    <a onClick="deleteme(<?php echo $result001['id'];?>)" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>
                                                </td> 

                                              
                                                         
                                         </tr>
                                             <?php endwhile; ?>

                                     </tbody>
                                 </table>
                                </div>

                                 <script>
                                    $(document).ready(function () {
                                            $('#table_collect').DataTable();
                                        });
                                 </script>

                                </div>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>


                    
            </div>

<!--################################################################################################################### FOR ADMIN VIEW (END) ######################################################################################-->





        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





<?php include_once 'footer.php';?>