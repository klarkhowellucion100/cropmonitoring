



<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['mon_id']) && isset($_POST['mon_status']) && isset($_POST['mon_findings']) && isset($_POST['date_monitor']) && isset($_POST['prod_id'])){

    $mon_id = mysqli_real_escape_string($conn,$_POST['mon_id']);
    $mon_status = mysqli_real_escape_string($conn,$_POST['mon_status']);
    $mon_findings = mysqli_real_escape_string($conn,$_POST['mon_findings']);
    $date_monitor = mysqli_real_escape_string($conn,$_POST['date_monitor']);
    $prod_id = mysqli_real_escape_string($conn,$_POST['prod_id']);

    $query = "UPDATE monitoring_production_cms SET id= '".$mon_id."',                
    mon_status= '".$mon_status."',
    mon_findings= '".$mon_findings."',
    date_monitor= '".$date_monitor."' WHERE id= '".$mon_id."'";


    $result = mysqli_query($conn,$query);
   

}   if($result){

    $sql2 = "UPDATE production_cms SET status_mon= '$mon_status' WHERE id='$prod_id'";
    $query2 = mysqli_query($conn, $sql2);

} if($query2){

    $sql3 = "UPDATE production_cms SET status_details= '$mon_findings' WHERE id='$prod_id'";
    $query3 = mysqli_query($conn, $sql3);

}
?>
