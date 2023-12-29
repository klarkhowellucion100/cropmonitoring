<?php


include 'db.inc.php';

if(isset($_POST['datefrom']) && isset($_POST['dateto'])){ ?>


<?php 

$datefrom = $_POST['datefrom'];
$dateto = $_POST['dateto'];


?>

<?php $yearnow=date('Y'); ?>



<div class="row">


<div class="col-md-12 col-xl-12">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Deliveries   

           
         
<script>         
    $(document).ready(function(){
    $('.farmerinfo').click(function(){
        var farmerid = $(this).data('id');
    
        $.ajax({
                    url:"agriboostdmstransactions/farmercommitmentupdate.php",
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
<div class="table-responsive">
        <table id="table_collect" class="table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
             <thead>
                 <tr>
                     
            
                        <th>Name</th>  
                        <th>Commodity</th> 
                        <th>Date</th>   
                        <th>Price</th> 
                        <th>Commitment</th>    
                       
                        <th>Amount</th>                                                 
                        <th>Action</th>    
                  
                 </tr>
             </thead>


             <tbody>
                 <?php
                     include 'db.inc.php';
                     $query001 = mysqli_query($conn,"SELECT * FROM erp_record WHERE trans_partnertype='Farmer' AND (trans_adate BETWEEN '$datefrom' AND '$dateto')");
                     while($result001 = mysqli_fetch_array($query001)): ?>
                 <tr>
                         
                        <?php
                            $commit = $result001 ['trans_commitvol'];
                            $price = $result001 ['trans_price'];
                            $sub_amount = $commit*$price;
                        ?>

                        <td><?php echo $result001 ['trans_partner']; ?></td> 
                        <td><?php echo $result001 ['trans_comm']; ?></td> 
                        
                        <td style="text-align: right;"><?php echo date('F d, Y', strtotime($result001['trans_adate'])); ?></td>  
                        <td style="text-align: right;">P <?php echo $result001 ['trans_price']; ?></td> 
                        <td style="text-align: right;"><?php echo $result001 ['trans_commitvol']; ?> kg</td> 
                        <td style="text-align: right;">P <?php echo $sub_amount; ?></td> 
                        <td>   <a class="farmerinfo btn btn-raised btn-warning waves-effect" data-id="<?php echo $result001['trans_id'];?>"><i class="uil-edit-alt"></i></a>
                            <a onClick="deleteme(<?php echo $result001['trans_id'];?>)" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>
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
                    <!-- end row-->

<?php } ?>

