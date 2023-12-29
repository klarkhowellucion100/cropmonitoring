
<!-- STart Category -->
<?php


include 'db.inc.php';

if(isset($_POST['type_0'])){ ?>


<?php 

$type_0 = $_POST['type_0'];

?>





                                                           

                                                            <?php  
                                                                $sql = "SELECT * FROM commodityhubpos WHERE `type`='$type_0' GROUP BY commodity";
                                                                $query = mysqli_query($conn, $sql);
                                                            ?>

                                                            <option value=''>Select Commodity *</option>             

                                                            <?php foreach($query as $q){ ?>  
                                                                <option value='<?php echo $q ['commodity'];?>'><?php echo $q ['commodity'];?></option>                                                
                                                            <?php } ?>
                     
                 
<?php } ?>

<!-- End Category -->

<!-- STart Category -->
<?php


include 'db.inc.php';

if(isset($_POST['name_1'])){ ?>


<?php 

$name_1 = $_POST['name_1'];

?>





                                                           

                                                            <?php  
                                                                $sql2 = "SELECT * FROM registrationhubpos WHERE `fname`='$name_1' GROUP BY code";
                                                                $query2 = mysqli_query($conn, $sql2);
                                                            ?>
          

                                                            <?php foreach($query2 as $q2){ ?>  
                                                                <option value='<?php echo $q2 ['code'];?>'><?php echo $q2 ['code'];?></option>                                                
                                                            <?php } ?>
                     
                 
<?php } ?>