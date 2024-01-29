<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['code']) && isset($_POST['name']) && isset($_POST['type']) && isset($_POST['date_created']) && isset($_POST['encoder'])){





    $sql="insert into `pest_cms` (code,name,type,date_created,encoder)
    values ('$code','$name','$type','$date_created','$encoder')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
