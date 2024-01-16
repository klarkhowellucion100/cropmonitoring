<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['code']) && isset($_POST['name']) && isset($_POST['mon_id']) && isset($_POST['comm']) && isset($_POST['hills']) && isset($_POST['date_sown']) && isset($_POST['date_harvest']) && isset($_POST['date_monitor']) && isset($_POST['mon_status']) && isset($_POST['mon_findings']) && isset($_POST['date_created']) && isset($_POST['encoder'])){

    $sql="insert into `monitoring_production_cms` (code,mon_id,name,comm,hills,date_sown,date_harvest,date_monitor,mon_status,mon_findings,date_created,encoder)
    values ('$code','$mon_id','$name','$comm','$hills','$date_sown','$date_harvest','$date_monitor','$mon_status','$mon_findings','$date_created','$encoder')";

    $result=mysqli_query($conn,$sql);

}   if($result){

    $sql2 = "UPDATE production_cms SET status_mon= '$mon_status' WHERE id='$mon_id'";
    $query2 = mysqli_query($conn, $sql2);

} if($query2){

    $sql3 = "UPDATE production_cms SET status_details= '$mon_findings' WHERE id='$mon_id'";
    $query3 = mysqli_query($conn, $sql3);

}
?>