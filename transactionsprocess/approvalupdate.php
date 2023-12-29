<?php
if (isset($_GET['updateaccept'])) {
        include_once 'db.inc.php';
       
        $updateaccept = $_GET['updateaccept'];
       
       $query="UPDATE usertableclanapp SET id= '".$updateaccept."',                
       regval= 'Accept' WHERE id = '".$updateaccept."'";
       $result01 = mysqli_query($conn,$query);
       
       /*or die ("Cannot delete data from database.". mysqli_error($conn));
       if($fire) echo "Data deleted from database";*/
    
    
       header("location:../approval.html");
    
      // header("Location:courtorderentrytracker.php?deleted=success");
      // exit();
}        

?>