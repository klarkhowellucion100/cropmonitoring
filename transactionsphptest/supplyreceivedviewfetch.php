
<!-- STart Category -->
<?php


include 'db.inc.php';

if(isset($_POST['commt_1']) && isset($_POST['stype_1'])){ ?>


<?php 

$commt_1 = $_POST['commt_1'];
$stype_1 = $_POST['stype_1'];

?>





                                                           

                                                            <?php  
                                                                $sql = "SELECT * FROM commodityhubpos WHERE `type`='$commt_1' AND sellingtype='$stype_1' GROUP BY commodity";
                                                                $query = mysqli_query($conn, $sql);
                                                            ?>

                                                            <option value=''>Please Select Commodity *</option>             

                                                            <?php foreach($query as $q){ ?>  
                                                                <option value='<?php echo $q ['commodity'];?>'><?php echo $q ['commodity'];?></option>                                                
                                                            <?php } ?>
                     
                 
<?php } ?>

<!-- End Category -->


<!-- STart Category -->
<?php


include 'db.inc.php';

if(isset($_POST['commt_2']) && isset($_POST['stype_2']) && isset($_POST['comm_2'])){ ?>


<?php 

$commt_2 = $_POST['commt_2'];
$stype_2 = $_POST['stype_2'];
$comm_2 = $_POST['comm_2'];

?>





                                                           

                                                            <?php  
                                                                $sql1 = "SELECT * FROM commodityhubpos WHERE `type`='$commt_2' AND sellingtype='$stype_2' AND commodity='$comm_2' GROUP BY classcom";
                                                                $query1 = mysqli_query($conn, $sql1);
                                                            ?>

                                                            <option value=''>Please Select Class *</option>             

                                                            <?php foreach($query1 as $q1){ ?>  
                                                                <option value='<?php echo $q1 ['classcom'];?>'><?php echo $q1 ['classcom'];?></option>                                                
                                                            <?php } ?>
                     
                 
<?php } ?>

<!-- End Category -->


<!-- STart Category -->
<?php


include 'db.inc.php';

if(isset($_POST['commt_3']) && isset($_POST['stype_3']) && isset($_POST['comm_3']) && isset($_POST['comcl_3'])){ ?>


<?php 

$commt_3 = $_POST['commt_3'];
$stype_3 = $_POST['stype_3'];
$comm_3 = $_POST['comm_3'];
$comcl_3 = $_POST['comcl_3'];

?>





                                                           

                                                            <?php  
                                                                $sql2 = "SELECT * FROM commodityhubpos WHERE `type`='$commt_3' AND sellingtype='$stype_3' AND commodity='$comm_3' AND classcom='$comcl_3' GROUP BY price";
                                                                $query2 = mysqli_query($conn, $sql2);
                                                            ?>

                                                              

                                                            <?php foreach($query2 as $q2){ ?>  
                                                                <option value='<?php echo $q2 ['price'];?>'><?php echo $q2 ['price'];?></option>                          
                                                            <?php } ?>
                     
                 
<?php } ?>

<!-- End Category -->
