<?php
if (isset($_GET['delete'])) {
    include_once 'db.inc.php';
   
   $id = $_GET['delete'];
   $query="DELETE FROM production_cms WHERE (code LIKE '%$id%')";
   $result = mysqli_query($conn,$query); /*or die ("Cannot delete data from database.". mysqli_error($conn));
   if($fire) echo "Data deleted from database";*/


   header("location:dashboardcommitment.php");

  // header("Location:courtorderentrytracker.php?deleted=success");
  // exit();
} if($result){
  $query="DELETE FROM monitoring_production_cms WHERE (code LIKE '%$id%')";
  $result = mysqli_query($conn,$query);
}
?>
