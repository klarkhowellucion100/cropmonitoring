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
  $finalcode='FF'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
?>

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Market Channels Feedback</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Feedback</li>
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
                                                            <h5 class="modal-title" id="myModalLabel">Add Feedback Data</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <!--<div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">PERSONAL INFORMATION</label>                                                                         
                                                                    </div>                                        
                                                                </div>-->
                                                                <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">DETAILS</label> 
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="code">Code</label>
                                                                        <input type="text" required readonly class="form-control" id="feedcode" name="feedcode" value='<?php echo $finalcode;?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="fname">Market Channel</label>                                                       
                                                                            <select id="fname" name="fname" class="form-select name_1 name_0">
                                                                            <option value="">Select Market Channel *</option>
                                                                                    <?php  
                                                                                    include_once "db.inc.php";
                                                                                        $sql1 = "SELECT * FROM registrationhubpos WHERE `type`='Vendor' GROUP BY `fname`";
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
                                                                        <label for="fnamecode">Code</label>                                                       
                                                                        <select id="fnamecode" name="fnamecode" class="form-select code_1">
                                                                            <option value="">Select Code *</option>
                                                                        </select> 
                                                                        </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="feeddate">Date of Feedback</label>
                                                                        <input type="date" class="form-control" id="feeddate" name="feeddate">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="numdel">No. of Transactions Made in AgriHub</label>
                                                                        <input type="number" class="form-control" id="numdel" name="numdel" required placeholder="Enter No. *">   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="fnametype">Type</label>
                                                                        <input type="text" readonly class="form-control" id="fnametype" name="fnametype" value='Vendor'>   
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">FEEDBACK</label> 
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label" style="color:green;">1. Reason for joining the AgriBOOST Project</label>
                                                                    <div>
                                                                        <textarea required="" id="quniqueone" name="quniqueone" class="form-control" rows="5"></textarea>
                                                                    </div>
                                                                </div>

                                                               

                                                                <div class="mb-3">
                                                                    <h5 class="font-size-15 mb-3" style="color:green;">2. Are you happy with the quality of the vegetables you bought in AgriHub?</h5>                                                                
                                                                        <select id="qone" name="qone" class="rating-css" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select> 
                                                                    </div>


                                                                <div class="mb-3" style="margin-left: 10px;">
                                                                    <label class="form-label" style="color:royalblue;">Reason/s</label>
                                                                    <div>
                                                                        <textarea required="" id="qoner" name="qoner" class="form-control" rows="5"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <h5 class="font-size-15 mb-3" style="color:green;">3. Are you satisfied with the wholesale price of AgriHub?</h5>                                                                
                                                                        <select id="qtwo" name="qtwo" class="rating-css" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select> 
                                                                    </div>


                                                                <div class="mb-3" style="margin-left: 10px;">
                                                                    <label class="form-label" style="color:royalblue;">Reason/s</label>
                                                                    <div>
                                                                        <textarea id="qtwor" name="qtwor" required="" class="form-control" rows="5"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <h5 class="font-size-15 mb-3" style="color:green;">4. Have you made profit in your business during your engagement with AgriHub?</h5>                                                                
                                                                        <select id="qthree" name="qthree" class="rating-css" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select> 
                                                                    </div>


                                                                <div class="mb-3" style="margin-left: 10px;">
                                                                    <label class="form-label" style="color:royalblue;">Reason/s</label>
                                                                    <div>
                                                                        <textarea id="qthreer" name="qthreer" required="" class="form-control" rows="5"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <h5 class="font-size-15 mb-3" style="color:green;">5. Will you still continue ordering vegetables from AgriHub?</h5>                                                                
                                                                        <select id="qfour" name="qfour" class="rating-css" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select> 
                                                                    </div>


                                                                <div class="mb-3" style="margin-left: 10px;">
                                                                    <label class="form-label" style="color:royalblue;">Reason/s</label>
                                                                    <div>
                                                                        <textarea id="qfourr" name="qfourr" required="" class="form-control" rows="5"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <h5 class="font-size-15 mb-3" style="color:green;">6. Is AgriBOOST/AgriHub's presence beneficial to you?</h5>                                                                
                                                                        <select id="qfive" name="qfive" class="rating-css" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select> 
                                                                    </div>


                                                                <div class="mb-3" style="margin-left: 10px;">
                                                                    <label class="form-label" style="color:royalblue;">Reason/s</label>
                                                                    <div>
                                                                        <textarea id="qfiver" name="qfiver" required="" class="form-control" rows="5"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <h5 class="font-size-15 mb-3" style="color:green;">7. Would you recommend buying from AgriHub to your colleagues/other vendors? (NPS)</h5>                                                                
                                                                        <select id="qsix" name="qsix" class="rating-css" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select> 
                                                                    </div>


                                                                <div class="mb-3" style="margin-left: 10px;">
                                                                    <label class="form-label" style="color:royalblue;">Reason/s</label>
                                                                    <div>
                                                                        <textarea required="" id="qsixr" name="qsixr" class="form-control" rows="5"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label" style="color:green;">8. What is the advantage of AgriHub's presence</label>
                                                                    <div>
                                                                        <textarea required="" id="quniquetwo" name="quniquetwo" class="form-control" rows="5"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label class="form-label" style="color:green;">9. Suggestion on how to improve the operation of the AgriHub/AgriMart/AgriBOOST Project</label>
                                                                    <div>
                                                                        <textarea required="" id="qsuggest" name="qsuggest" class="form-control" rows="5"></textarea>
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
<div id="feebackmain">

                    <div class="row">
                    <?php
                        include 'db.inc.php';
                        $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnametype='Vendor' GROUP BY fname");
                        while($result001 = mysqli_fetch_array($query001)): ?>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    
                                    <div class="clearfix"></div>
                                    <div class="mb-4">
                                        <img src="icons/icon192.png" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                    </div>
                                    <h5 class="font-size-16 mb-1"><a href="#" class="text-reset "><?php echo $result001['fname'];?></a></h5>
                                    <p class="text-muted mb-2"><?php echo $result001['fnamecode'];?></p>

                                </div>

                                <div class="btn-group" role="group">
                                    <a class="feedbackfetch btn btn-outline-light text-truncate" data-id="<?php echo $result001['fnamecode'];?>"><i class="uil-edit-alt"></i>Feedback Details</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- end row -->
</div>
               


              

                </div>
            </div>



                



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





<?php include_once 'footer.php';?>