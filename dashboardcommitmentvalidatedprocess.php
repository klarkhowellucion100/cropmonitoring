<?php
if (isset($_GET['delete'])) {
    include_once 'db.inc.php';
   
   $id = $_GET['delete'];
   $query="DELETE FROM production_validated_cms WHERE code='$id'";
   $result = mysqli_query($conn,$query); /*or die ("Cannot delete data from database.". mysqli_error($conn));
   if($fire) echo "Data deleted from database";*/


   header("location:dashboardcommitmentvalidated.php");

  // header("Location:courtorderentrytracker.php?deleted=success");
  // exit();
} if($result){
  $query3="DELETE FROM monitoring_production_cms WHERE code='$id'";
  $result3 = mysqli_query($conn,$query3);
}
?>


<?php
if (isset($_GET['approve'])) {
    include_once 'db.inc.php';
   
   $id1 = $_GET['approve'];
   $query1 = "UPDATE production_validated_cms SET status_from_admin= 'Approve' WHERE code= '".$id1."'";

   $result1 = mysqli_query($conn,$query1);


   header("location:dashboardcommitmentvalidated.php");

  // header("Location:courtorderentrytracker.php?deleted=success");
  // exit();
} if($result1){
  $query2="DELETE FROM production_cms WHERE code='$id1'";
  $result2 = mysqli_query($conn,$query2);
}
?>


