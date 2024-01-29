<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['fert_name']) && isset($_POST['fert_type']) && isset($_POST['date_created']) && isset($_POST['fert_encoder']) && isset($_POST['fert_code'])){





    $sql="insert into `fertilizer_cms` (fert_name,fert_type,date_created,fert_encoder,fert_code)
    values ('$fert_name','$fert_type','$date_created','$fert_encoder','$fert_code')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
