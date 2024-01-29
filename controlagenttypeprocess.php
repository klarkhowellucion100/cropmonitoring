<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['cont_type']) && isset($_POST['date_created']) && isset($_POST['cont_encoder']) && isset($_POST['cont_code'])){





    $sql="insert into `controlagent_type_cms` (cont_type,date_created,cont_encoder,cont_code)
    values ('$cont_type','$date_created','$cont_encoder','$cont_code')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
