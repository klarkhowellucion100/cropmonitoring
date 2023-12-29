<?php include "header.php"; ?>

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Market Channels' Profile</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

              
                       <!-- Start Modal -->
                       <?php  

                            $date_f = date('Y-m-d');

                            $date_t = date('H:i:s');
                            $date_m = date('m');
                            $date_d = date('d');
                            $date_y = date('Y');

                        ?>

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
                            $finalcode='US'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
                        ?>

            <!-- End Modal -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add Market Channel</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">PERSONAL INFORMATION</label>                                                                         
                                                                    </div>                                        
                                                                </div>
                                                         
                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="code">Code</label>
                                                                        <input type="text" required readonly class="form-control" id="code" value='<?php echo $finalcode;?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="type">Type</label>
                                                                        <input type="text" required class="form-control" id="type" readonly name='type' value="Vendor">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="fname">Full Name</label>
                                                                        <input type="text" required class="form-control" id="fname" placeholder='Enter First Name *' name='fname'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="cnumber">Contact Number</label>
                                                                        <input type="text" required class="form-control" id="cnumber" placeholder='Enter Contact Number *' name='cnumber'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="region">Region</label>
                                                                        <input type="text" readonly required class="form-control" id="region" value="Region XIII" name='region'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="province">Province</label>
                                                                        <input type="text" readonly required class="form-control" id="province" value="Agusan del Norte" name='province'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="municipality">City/Municipality</label>
                                                                        <input type="text" readonly required class="form-control" id="municipality" value="Butuan City" name='municipality'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="gender">Gender</label>                                                       
                                                                            <select id="gender" class="form-select">
                                                                                <option value="">Pease Select Gender *</option>
                                                                                <option value="Male">Male</option>
                                                                                <option value="Female">Female</option>
                                                                            </select> 
                                                                            </div>                                        
                                                                    </div>
                                                                </div> 

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="birthdate">Birthdate</label>
                                                                        <input type="date" required class="form-control" id="birthdate" name='birthdate'>      
                                                                    </div>                                        
                                                                </div>

                                                                
                                                               
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="education">Educational Attainment</label>                                                       
                                                                            <select id="education" class="form-select">
                                                                                <option value="">Pease Select Education *</option>
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
                                                                            <select id="barangay" class="form-select region_1 region_0 region_2">
                                                                            <option value="">Pease Select Barangay *</option>
                                                                                <?php  
                                                                                    $sql = "SELECT * FROM areashubpos WHERE region='Region XIII' AND province='Agusan del Norte' AND municipality='Butuan City' GROUP BY barangay";
                                                                                    $query = mysqli_query($conn, $sql);
                                                                                ?>
                                                                                <?php foreach($query as $q){ ?>  
                                                                                    <option value="<?php echo $q ['barangay'];?>"><?php echo $q ['barangay'];?></option>
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
                                                                            <select id="category" class="form-select">
                                                                                <option value="">Pease Select Category *</option>
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
                                                                        <input type="text" required class="form-control" id="bus_name" name='bus_name' placeholder="Enter Business Name *">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <div class="commo">
                                                                        <label for="bus_add">Business Address</label>                                                       
                                                                            <select id="bus_add" class="form-select region_1 region_0 region_2">
                                                                            <option value="">Pease Select Barangay *</option>
                                                                                <?php  
                                                                                    $sql = "SELECT * FROM areashubpos WHERE region='Region XIII' AND province='Agusan del Norte' AND municipality='Butuan City' GROUP BY barangay";
                                                                                    $query = mysqli_query($conn, $sql);
                                                                                ?>
                                                                                <?php foreach($query as $q){ ?>  
                                                                                    <option value="<?php echo $q ['barangay'];?>"><?php echo $q ['barangay'];?></option>
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
                                                                        <input type="date" required class="form-control" id="dt_joined" name='dt_joined'>      
                                                                    </div>                                        
                                                                </div>

                                                               

                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" id="submit-btn" class="btn btn-primary waves-effect waves-light" onclick=addcomms()>Register</button>
                                                            </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->


                                            <div id="myModalUpdate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Update Market Channel</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <form action="agriboostdmstransactions/vendorsregistrationupdateprocess.php" method="POST" enctype="multipart/form-data">
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


                                       

                                    <h4 class="card-title">Market Channels' List </h4>    

                                    <div style="padding-bottom:10px;"> <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Add Market Channel +</button></div>                                    
                                    <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Barangay</th>
                                                <th>Contact</th>
                                                <th>Membership</th>
                                                <th>Action</th>
                                              
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                                include 'db.inc.php';
                                                $query1 = mysqli_query($conn,"SELECT * FROM registrationhubpos WHERE type='Vendor' ORDER BY id DESC");
                                                while($result1 = mysqli_fetch_array($query1)): ?>
                                            <tr>
                                                                                
                                              
                                                <td><?php echo $result1 ['code']; ?></td>
                                                <td><?php echo $result1 ['fname']; ?></td>
                                                <td><?php echo $result1 ['barangay']; ?></td>
                                                <td><?php echo $result1 ['cnumber']; ?></td>
                                                <td><?php echo $result1 ['dt_joined']; ?></td>
                                                <td> 
                                                    <a class="vendorinfo btn btn-raised btn-warning waves-effect" data-id="<?php echo $result1['id'];?>"><i class="uil-edit-alt"></i></a>
                                                    <a onClick="deleteme(<?php echo $result1['id'];?>)" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>
                                                </td>

                                             
                                            
                                            
                                                                                        
                                            </tr>
                                                <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                    </div>

                                 
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </div>

<?php include "footer.php"; ?>