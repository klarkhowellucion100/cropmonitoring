


<?php
if (isset($_GET['updatecollect'])) {
        include_once 'db.inc.php';
       
        $updatecollect = $_GET['updatecollect'];
       
       $query="UPDATE paymentdataclanapp SET id= '".$updatecollect."',                
       userpaymentstatus= 'Collected' WHERE id = '".$updatecollect."'";
       $result01 = mysqli_query($conn,$query);
       
       /*or die ("Cannot delete data from database.". mysqli_error($conn));
       if($fire) echo "Data deleted from database";*/
    
    
       header("location:../payment.html");
    
      // header("Location:courtorderentrytracker.php?deleted=success");
      // exit();
}        

?>


<?php
if (isset($_GET['updateapprove'])) {
        include_once 'db.inc.php';
       
        $updateapprove = $_GET['updateapprove'];
       
       $query01="UPDATE paymentdataclanapp SET id= '".$updateapprove."',                
       userpaymentstatus= 'Approved' WHERE id = '".$updateapprove."'";
       $result02 = mysqli_query($conn,$query01);
       
       /*or die ("Cannot delete data from database.". mysqli_error($conn));
       if($fire) echo "Data deleted from database";*/
    
    
       header("location:../payment.html");
    
      // header("Location:courtorderentrytracker.php?deleted=success");
      // exit();
}        

?>