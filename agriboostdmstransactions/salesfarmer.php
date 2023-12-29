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
  $finalcode='SF'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
?>

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Farmers Sales</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Sales</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add Sales Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <!--<div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">PERSONAL INFORMATION</label>                                                                         
                                                                    </div>                                        
                                                                </div>-->
                                                         
                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="code">Code</label>
                                                                        <input type="text" required readonly class="form-control" id="code" name="code" value='<?php echo $finalcode;?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12"> 
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="commtype">Type</label>                                                       
                                                                            <select id="commtype" name="commtype" class="form-select type_0 type_1">
                                                                            <option value="">Select Type *</option>
                                                                                    <?php  
                                                                                        $sql = "SELECT * FROM commodityhubpos WHERE `sellingtype`='Farmgate' GROUP BY `type`";
                                                                                        $query = mysqli_query($conn, $sql);
                                                                                    ?>
                                                                                    <?php foreach($query as $q){ ?>  
                                                                                <option value="<?php echo $q ['type'];?>"><?php echo $q ['type'];?></option>
                                                                                <?php } ?>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="commname">Commodity</label>                                                       
                                                                        <select id="commname" name="commname" class="form-select com_0">
                                                                            <option value="">Select Commodity *</option>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="commclass">Class</label>                                                       
                                                                            <select id="commclass" name="commclass" class="form-select">
                                                                            <option value="">Select Class *</option>
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
                                                                        <label for="cnumber">Selling Type</label>
                                                                        <input type="text" readonly class="form-control" id="commselltype" name="commselltype" value="Farmgate">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="dateplant">Date Planted</label>
                                                                        <input type="date" class="form-control" id="dateplant" name="dateplant">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="datesold">Date Sold</label>
                                                                        <input type="date" class="form-control" id="datesold" required name="datesold">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="buyer">Buyer</label>                                                       
                                                                            <select id="buyer" required name="buyer" class="form-select">
                                                                            <option value="">Select Buyer *</option>
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
                                                                        <label for="commprice">Price</label>
                                                                        <input type="number" class="form-control" id="commprice" name="commprice" required placeholder="Enter Price *">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="commqty">Quantity</label>
                                                                        <input type="number" class="form-control" id="commqty" name="commqty" required placeholder="Enter kg *">   
                                                                    </div>                                        
                                                                </div>


                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="sellername">Farmer</label>                                                       
                                                                            <select id="sellername" name="sellername" class="form-select name_1 name_0">
                                                                            <option value="">Select Farmer *</option>
                                                                                    <?php  
                                                                                    include_once "db.inc.php";
                                                                                        $sql1 = "SELECT * FROM registrationhubpos WHERE `type`='Farmer' GROUP BY `fname`";
                                                                                        $query1 = mysqli_query($conn, $sql1);
                                                                                    ?>
                                                                                    <?php foreach($query1 as $q1){ ?>  
                                                                                <option value="<?php echo $q1 ['fname'];?>"><?php echo $q1 ['fname'];?></option>
                                                                                <?php } ?>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="sellercode">Code</label>                                                       
                                                                        <select id="sellercode" name="sellercode" class="form-select code_1">
                                                                            <option value="">Select Code *</option>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="sellertype">Type</label>
                                                                        <input type="text" readonly class="form-control" id="sellertype" name="sellertype" value='Farmer'>   
                                                                    </div>                                        
                                                                </div>
                                                               

                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" id="submit-btn" class="btn btn-primary waves-effect waves-light" onclick=addcomm()>Save Data</button>
                                                            </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->


                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal"><i class="mdi mdi-plus me-2"></i> Add Data</button>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-inline float-md-end mb-3">
                                <div class="search-box ms-2">
                                    <div class="position-relative">
                                        <input type="text" class="form-control rounded border-0" placeholder="Search...">
                                        <i class="mdi mdi-magnify search-icon"></i>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- end row -->

                    <div class="row">

                    <?php
                        include 'db.inc.php';
                        $query001 = mysqli_query($conn,"SELECT * FROM sales_farmer_buyer");
                        while($result001 = mysqli_fetch_array($query001)): ?>
                        <div class="col-xl-4 col-sm-6">

                        <?php $buyers = $result001['buyer']; ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-success text-white font-size-16 rounded-circle">
                                                        <?php echo $result001['first_letter']; ?>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 align-self-center">
                                            <div class="border-bottom pb-1">
                                                <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-reset "><?php echo $result001['sellername']; ?></a></h5>
                                                <p class="text-muted">
                                                    <i class="mdi mdi-account me-1"></i> <?php echo $result001['sellercode']; ?>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mt-3">
                                                        <p class="text-muted mb-2">Volume to AgriHub(kg)</p>
                                                        <h5 class="font-size-16 mb-0"><?php  echo $result001['total_agrihub_commqty']; ?> kg</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mt-3">
                                                        <p class="text-muted mb-2">Sales from AgriHub(Php)</p>
                                                        <h5 class="font-size-16 mb-0">P <?php echo $result001['total_agrihub_sales']; ?></h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mt-3">
                                                        <p class="text-muted mb-2">Volume Outside(kg)</p>
                                                        <h5 class="font-size-16 mb-0"><?php echo $result001['total_other_commqty']; ?>kg</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mt-3">
                                                        <p class="text-muted mb-2">Sales Outside(Php)</p>
                                                        <h5 class="font-size-16 mb-0">P <?php echo $result001['total_other_sales']; ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                       
                    </div>
                    <!-- end row -->

               


              

                </div>
            </div>



                



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





<?php include_once 'footer.php';?>