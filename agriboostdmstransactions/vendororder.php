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
                                <h4 class="mb-0">Market Channels' Order</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Order</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">    
                        <div class="card">                                
                            <div class="card-body">
                                    <h4 class="card-title">Add Data</h4>

                                
                                        <form class="p-3">
                                            <div class="m-0">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" id="myInput" onkeyup="myFunction()">                                                   
                                                </div>
                                            </div>
                                        </form>
                                
                                 
                                        <div class="main-form">
                                            
                                    

                                            <h4 style='margin-top: 30px; font-size: 15px; color: royalblue;'>Commodities</h4>
                                  
                                            <form id="dateForm">
                                                <div class="table-responsive">
                                                        <table id="myTable03a" style="width:100%;" class="display table table-bordered wrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Commodity</th>
                                                                    <th style="display:none;">Type</th>                                                                   
                                                                    <th>Price</th>
                                                                    <th>Qty</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="myTable">
                                                                <?php
                                                                include 'db.inc.php';
                                                                $query1 = mysqli_query($conn,"SELECT * FROM commodityhubpos WHERE sellingtype='Wholesale' AND classcom='Class A' ORDER BY `type` ASC");
                                                                while($result1 = mysqli_fetch_array($query1)): ?>
                                                                <tr>
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_comm" name="trans_comm[]" value="<?php echo $result1 ['commodity']; ?>"></td> 
                                                                    <td><?php echo $result1 ['commodity']; ?></td>    
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_type" name="trans_type[]" value="<?php echo $result1 ['type']; ?>"></td> 
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_sellingtype" name="trans_sellingtype[]" value="<?php echo $result1 ['sellingtype']; ?>"></td> 
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_class" name="trans_class[]" value="<?php echo $result1 ['classcom']; ?>"></td> 
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_price" name="trans_price[]" value="<?php echo $result1 ['price']; ?>"></td> 
                                                                    <td><?php echo $result1 ['price']; ?></td> 

                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_date" name="trans_date[]" value="<?php echo $date_f; ?>"></td> 
                                                                    <td><input type="number" class="form-control" id="trans_commitvol" name="trans_commitvol[]" placeholder="0"></td> 

                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_status" name="trans_status[]" value="Pending"></td> 

                                                                    <td style="display:none;"><input type="text" class="form-control partnername" id="trans_partner" name="trans_partner[]"></td> 
                                                                    <td style="display:none;">
                                                                        <select id="pcode" class="form-select partnercode" id="trans_partnercode" name="trans_partnercode[]">
                                                                        </select> 
                                                                    </td> 
                                                                    <td style="display:none;">
                                                                        <select id="pcode" class="form-select partnertype" id="trans_partnertype" name="trans_partnertype[]">
                                                                        </select> 
                                                                    </td> 
                                                                    <td style="display:none;"><input type="text" readonly class="form-control" id="trans_encoder" value="<?php echo $userid;?>" name="trans_encoder[]"></td> 
                                                               
                                                                   
                                                                                                                      
                                                                </tr>      
                                                                <?php endwhile; ?>                                                  
                                                            </tbody>
                                                        </table>
                                                 </div>
                                           
                                            
                                         
                                               


                                                 <h4 style='margin-top: 30px; font-size: 15px; color: royalblue;'>Details</h4>

                                              


                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <div class="commo">
                                                        <label for="reg">Name</label>                                                       
                                                            <select id="partner_name" class="form-select farmer_1 farmer_0">
                                                              <option value="">Select Market Channel *</option>
                                                                  <?php  
                                                                    $sql = "SELECT * FROM registrationhubpos WHERE `type`='Vendor' GROUP BY fname";
                                                                    $query = mysqli_query($conn, $sql);
                                                                  ?>
                                                                  <?php foreach($query as $q){ ?>  
                                                                      <option value="<?php echo $q ['fname'];?>"><?php echo $q ['fname'];?></option>
                                                                  <?php } ?>
                                                            </select> 
                                                            </div>                                        
                                                    </div>
                                                </div> 

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dt_joined">Start Date</label>
                                                                <input type="date" required class="form-control" id="start_date" name="start_date">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <div class="commo">
                                                                <label for="dt_joined">End Date</label>
                                                                <input type="date" required class="form-control" id="end_date" name="end_date">      
                                                            </div>                                        
                                                        </div>
                                                    </div> 
                                                </div>
                                                <button type="submit" class="btn btn-primary submit-btn w-100">Commit</button>
                                            </form>
                                               

                                         

                                            
                                                

                                                

                                        </div>

                                      
                          <!--  <a href="fmrdata.php" class="btn btn-warning waves-effect waves-light">Exit</a> -->
                            </div>
                             
                        </div>
                    </div>

                    
                </div>

                </div>
            </div>



                



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





<?php include_once 'footer.php';?>