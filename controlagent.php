
 <!-- <body data-layout="horizontal" data-topbar="colored"> -->
 <?php
  include 'heading.php';
  
  
 ?>


                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Control Agent Registration</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Control Agent</li>
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
                            $finalcode='CA'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
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
                                                            <h5 class="modal-title" id="myModalLabel">Add Control Agent</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <div class="mb-0">
                                                                    <div class="commo">
                                                                        <label style="color:royalblue;">CONTROL AGENT INFORMATION</label>                                                                         
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="code">Code</label>
                                                                        <input type="text" required readonly class="form-control" id="cont_code" value='<?php echo $finalcode;?>'>      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3">
                                                                    <div class="commo">
                                                                        <label for="name">Control Agent Name</label>
                                                                        <input type="text" required class="form-control" id="cont_name" placeholder='Enter Type *' name='cont_name'>      
                                                                    </div>                                        
                                                                </div>
                                                            
                                                                <div class="mb-3">
                                                                    <div class="commo">    
                                                                        <label for="name">Control Agent Type</label>                                                 
                                                                            <select id="cont_type" name="cont_type" class="form-select">
                                                                                <option value="">Pease Select Type *</option>
                                                                                    <?php  
                                                                                        $sql1 = "SELECT * FROM controlagent_type_cms ORDER BY `cont_type` ASC";
                                                                                        $query1 = mysqli_query($conn, $sql1);
                                                                                    ?>
                                                                                    <?php foreach($query1 as $q1){ ?>  
                                                                                        <option value="<?php echo $q1 ['cont_type'];?>"><?php echo $q1 ['cont_type'];?></option>
                                                                                    <?php } ?>
                                                                            </select> 
                                                                    </div>                                        
                                                                </div>
                                                                

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="birthdate">Date Created</label>
                                                                        <input type="date" required class="form-control" id="date_created" name='date_created' value="<?php echo $date_f;?>">      
                                                                    </div>                                        
                                                                </div>

                                                                <div class="mb-3" style="display:none;">
                                                                    <div class="commo">
                                                                        <label for="birthdate">Encoder</label>
                                                                        <input type="text" required class="form-control" id="cont_encoder" name='cont_encoder' value="<?php echo $userid;?>">      
                                                                    </div>                                        
                                                                </div>

                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" id="submit-btn" class="btn btn-primary waves-effect waves-light" onclick=addcomm()>Register</button>
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
                                                            <h5 class="modal-title" id="myModalLabel">Update Farmer</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <form action="farmerregistrationupdateprocess.php" method="POST" enctype="multipart/form-data">
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


                                       

                                    <h4 class="card-title">Control Agents List </h4>    

                                    <div style="padding-bottom:10px;"> <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Add Control Agent +</button></div>                                    

                                    <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Control Agent</th>
                                                <th>Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                                include 'db.inc.php';
                                                $query1 = mysqli_query($conn,"SELECT * FROM controlagent_cms ORDER BY `cont_name` ASC");
                                                while($result1 = mysqli_fetch_array($query1)): ?>
                                            <tr>
                                                                                
                                                <td><?php echo $result1 ['cont_name']; ?></td>
                                                <td><?php echo $result1 ['cont_type']; ?></td>
                                                <td> 
                                                    <!--<a class="farmerinfo btn btn-raised btn-warning waves-effect" data-id="<?php echo $result1['id'];?>"><i class="uil-edit-alt"></i></a>-->
                                                    <a onClick="deleteme(<?php echo $result1['id'];?>)" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>
                                                </td>

                                             
                                            
                                            
                                                                                        
                                            </tr>
                                                <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                    </div>

                                    <script>         
                                        $(document).ready(function(){
                                        $('.farmerinfo').click(function(){
                                            var farmerid = $(this).data('id');
                                        
                                            $.ajax({
                                                        url:"farmerregistrationupdate.php",
                                                        method:"POST",
                                                        data:{farmerid:farmerid},
                                                        success:function(data){
                                                            $('#modal_update').html(data);
                                                            $('#myModalUpdate').modal('show');
                                                        }
                                                    });

                                            })
                                        })
                                    </script>



                                 
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
            </div>



<script>
    function addcomm(){
        var data = {                                 
            cont_name: $("#cont_name").val(),
            cont_type: $("#cont_type").val(),
            date_created: $("#date_created").val(),
            cont_encoder: $("#cont_encoder").val(),
            cont_code: $("#cont_code").val(),
          
        };
         
                   $.ajax({
                           url:"controlagentprocess.php",
                           method:"POST",
                           data:data,
                           success:function(data,status){
                           
                               Swal.fire({
                               title: 'Success',
                               text: 'Registered successfully!',
                               icon: 'success',
                               timer: 2000
                               }).then(() => {
                                $('#myModal').modal('hide');                                               
                               window.location.reload();
                               }); 
                               
                               
                           }
                       });
       }
</script>







<!--<script>
    function deleteme(delid){
        if(confirm("Are you sure you want to delete this data?")){
        window.location.href='agriboostdmstransactions/farmerregistrationdelete.php?delete=' +delid+ '';
        return true;
        }
        }
</script>-->



<script>
      function deleteme(delid){
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    ).then(() => {
        window.location.href='controlagentdelete.php?delete=' +delid+ '';
        });
   
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
}
</script>

<script>         
    $(document).ready(function(){
    $('.farmerinfo').click(function(){
        var farmerid = $(this).data('id');
    
        $.ajax({
                    url:"farmerregistrationupdate.php",
                    method:"POST",
                    data:{farmerid:farmerid},
                    success:function(data){
                        $('#modal_update').html(data);
                        $('#myModalUpdate').modal('show');
                    }
                });

    })
})
</script>


<?php include 'footer.php';?>