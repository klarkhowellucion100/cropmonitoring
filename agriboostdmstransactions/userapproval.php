<?php include "header.php"; ?>

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Users Profile</h4>

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

                                         


                                            <div id="myModalUpdate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Update User</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                        </div>
                                                        <form action="agriboostdmstransactions/userapprovalupdateprocess.php" method="POST" enctype="multipart/form-data">
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


                                       

                                    <h4 class="card-title">Users' List </h4>    

                                                                   

                                    <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                            
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Status</th>
                                                <th>Component</th>
                                                <th>Action</th>
                                              
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                                include 'db.inc.php';
                                                $query1 = mysqli_query($conn,"SELECT * FROM usertableadms ORDER BY id DESC");
                                                while($result1 = mysqli_fetch_array($query1)): ?>
                                            <tr>
                                                                                
                                              
                                                <td><?php echo $result1 ['fname']; ?></td>
                                                <td><?php echo $result1 ['position']; ?></td>
                                                <td><?php echo $result1 ['office']; ?></td>
                                                <td><?php echo $result1 ['regval']; ?></td>
                                                <td><?php echo $result1 ['component']; ?></td>
                                                <td> 
                                                    <a class="farmerinfo btn btn-raised btn-warning waves-effect" data-id="<?php echo $result1['id'];?>"><i class="uil-edit-alt"></i></a>
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
                    url:"agriboostdmstransactions/userapprovalupdate.php",
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

<?php include "footer.php"; ?>