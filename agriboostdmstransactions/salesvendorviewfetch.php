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
                    url:"agriboostdmstransactions/salesvendorviewupdate.php",
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
                                             $query001 = mysqli_query($conn,"SELECT * FROM sales_vendor WHERE (datesold BETWEEN '$datefrom' AND '$dateto')");
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
                    <!-- end row-->

<?php } ?>

