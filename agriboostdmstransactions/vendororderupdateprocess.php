

<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['submit_change'])){


    $trans_id = mysqli_real_escape_string($conn,$_POST['trans_id']);
    $trans_commitvol = mysqli_real_escape_string($conn,$_POST['trans_commitvol']);


    $query = "UPDATE transactionfinalhubpos SET trans_id= '".$trans_id."',                
    trans_commitvol= '".$trans_commitvol."' WHERE trans_id= '".$trans_id."'";


    $result = mysqli_query($conn,$query);
    echo '<script>';    
    echo 'window.location.href = "../vendororderview.php";'; // Replace with the URL you want to redirect to
    echo '</script>';
    
}
?>
