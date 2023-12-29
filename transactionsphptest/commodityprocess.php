


<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['code']) && isset($_POST['commodity']) && isset($_POST['type']) && isset($_POST['classcom']) && isset($_POST['price']) && isset($_POST['sellingtype']) && isset($_POST['unit'])){





    $sql="insert into commodityhubpos (code,commodity,type,classcom,price,sellingtype,unit)
    values ('$code','$commodity','$type','$classcom','$price','$sellingtype','$unit')";

    $result003=mysqli_query($conn,$sql);

    
}
?>

<?php
if (isset($_GET['delete'])) {
    include_once 'db.inc.php';
   
   $id = $_GET['delete'];
   $query="DELETE FROM commodityhubpos WHERE id = $id";
   $result = mysqli_query($conn,$query); /*or die ("Cannot delete data from database.". mysqli_error($conn));
   if($fire) echo "Data deleted from database";*/


   header("location:commodity.php");

  // header("Location:courtorderentrytracker.php?deleted=success");
  // exit();
}
?>

