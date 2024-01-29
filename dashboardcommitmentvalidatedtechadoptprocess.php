<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['prop_encoder']) && isset($_POST['prop_code']) && isset($_POST['prop_date']) && isset($_POST['prop1']) && isset($_POST['prop2']) && isset($_POST['prop3']) && isset($_POST['prop4']) && isset($_POST['prop5']) && isset($_POST['prop6']) && isset($_POST['prop7']) && isset($_POST['prop8']) && isset($_POST['prop9']) && isset($_POST['prop10']) && isset($_POST['prop11']) && isset($_POST['prop12']) && isset($_POST['prop13']) && isset($_POST['prop14']) && isset($_POST['prop15']) && isset($_POST['prop16']) && isset($_POST['prop17']) && isset($_POST['prop18']) && isset($_POST['prop_tot_score']) && isset($_POST['prop_final_score']) && isset($_POST['prop_remarks']) && isset($_POST['prop_created_date'])){





    $sql="insert into `tech_adoption_cms` (prop_encoder,prop_code,prop_date,prop1,prop2,prop3,prop4,prop5,prop6,prop7,prop8,prop9,prop10,prop11,prop12,prop13,prop14,prop15,prop16,prop17,prop18,prop_tot_score,prop_final_score,prop_remarks,prop_created_date)
    values ('$prop_encoder','$prop_code','$prop_date','$prop1','$prop2','$prop3','$prop4','$prop5','$prop6','$prop7','$prop8','$prop9','$prop10','$prop11','$prop12','$prop13','$prop14','$prop15','$prop16','$prop17','$prop18','$prop_tot_score','$prop_final_score','$prop_remarks','$prop_created_date')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
