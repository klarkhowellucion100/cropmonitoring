<?php
if (isset($_GET['delete'])) {
    include_once 'db.inc.php';
   
   $id = $_GET['delete'];
   $query="DELETE FROM fertilizer_type_cms WHERE id = $id";
   $result = mysqli_query($conn,$query); /*or die ("Cannot delete data from database.". mysqli_error($conn));
   if($fire) echo "Data deleted from database";*/


   header("location:fertilizertype.php");

  // header("Location:courtorderentrytracker.php?deleted=success");
  // exit();
}
?>
