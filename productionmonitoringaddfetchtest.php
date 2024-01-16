
<!-- STart Category -->
<?php


include 'db.inc.php';

if(isset($_POST['comm_name']) && isset($_POST['date_sown'])){ ?>


<?php 

$comm_name = $_POST['comm_name'];
$date_sown = $_POST['date_sown'];

?>





                                                           
<div class="row">
                    <?php  

                        $date_f = date('Y/m/d');

                        $date_t = date('H:i:s');
                        $date_m = date('m');
                        $date_d = date('d');
                        $date_y = date('Y');

                    ?>

                    <?php
                        $query1 = mysqli_query($conn,"SELECT * FROM commodity_prod_cms WHERE (`comm` LIKE '%$comm_name%') ORDER BY comm ASC");
                        while($q = mysqli_fetch_array($query1)): ?>
                <table id="table_form2" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Production Schedule</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-coef-query">
                        <tr id="row-1">
                            <td>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="commo">
                                            <input type="number" class="form-control" name="coef[]" id="coef"
                                                value="<?php echo $q['coef']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="commo">
                                        <input type="date" class="form-control" name="date_harvest[]" id='date_harvest' value="<?php  
                                                                        $date_sown_f = strtotime($date_sown) + $q['mat_days'] * 24 * 60 * 60; // Convert to seconds
                                                                        $days_in_week = $q['days_in_week'];
                                                                        echo date('Y-m-d', $date_sown_f);
                                                                    ?>">
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                      
                      
                        <?php endwhile; ?>

                        <script>         
                                $(document).ready(function(){
                                $('.productinfo').click(function(){
                                    var commodityid = $(this).data('id');
                                   
                                    $.ajax({
                                                url:"transactionorderview.php",
                                                method:"POST",
                                                data:{commodityid:commodityid},
                                                success:function(data){
                                                    $('.modal-body').html(data);
                                                    $('#exampleModal').modal('show');
                                                    displayData();
                                                }
                                            });

                                })
                            })
                        </script>
                </div>
                 
<?php } ?>

<!-- End Category -->

