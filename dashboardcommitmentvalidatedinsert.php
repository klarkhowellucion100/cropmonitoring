<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['mon_cont_ex']) && isset($_POST['mon_id']) && isset($_POST['mon_code']) && isset($_POST['mon_name']) && isset($_POST['mon_comm']) && isset($_POST['mon_hills']) && isset($_POST['mon_date_sown']) && isset($_POST['mon_date_harvest']) && isset($_POST['mon_date_monitor']) && isset($_POST['mon_status']) && isset($_POST['mon_actual_monitor']) && isset($_POST['mon_actual_yield']) && isset($_POST['mon_findings']) && isset($_POST['mon_recomm']) && isset($_POST['mon_response']) && isset($_POST['mon_date_created']) && isset($_POST['mon_encoder']) && isset($_POST['mon_cause']) && isset($_POST['code_monitor']) && isset($_POST['mon_pest_ex']) && isset($_POST['mon_fert_ex'])){

    $sql="insert into `monitoring_production_cms` (mon_cont_ex,mon_id,code,name,comm,hills,date_sown,date_harvest,date_monitor,mon_status,actual_monitor,actual_yield,mon_findings,mon_recomm,mon_response,date_created,encoder,mon_cause,code_monitor,mon_pest_ex,mon_fert_ex)
    values ('$mon_cont_ex','$mon_id','$mon_code','$mon_name','$mon_comm','$mon_hills','$mon_date_sown','$mon_date_harvest','$mon_date_monitor','$mon_status','$mon_actual_monitor','$mon_actual_yield','$mon_findings','$mon_recomm','$mon_response','$mon_date_created','$mon_encoder','$mon_cause','$code_monitor','$mon_pest_ex','$mon_fert_ex')";

    $result=mysqli_query($conn,$sql);

}   if($result){

    $sql2 = "UPDATE production_validated_cms SET status_mon= '$mon_status' WHERE id='$mon_id'";
    $query2 = mysqli_query($conn, $sql2);

} if($query2){

    $sql3 = "UPDATE production_validated_cms SET status_details= '$mon_findings' WHERE id='$mon_id'";
    $query3 = mysqli_query($conn, $sql3);

}
?>


