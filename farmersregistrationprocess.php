<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['code']) && isset($_POST['type']) && isset($_POST['fname']) && isset($_POST['cnumber']) && isset($_POST['region']) && isset($_POST['province']) && 
isset($_POST['municipality']) && isset($_POST['gender']) && isset($_POST['birthdate']) && isset($_POST['education']) && isset($_POST['barangay']) && isset($_POST['landsize']) && 
isset($_POST['veg_area']) && isset($_POST['type_own']) && isset($_POST['dt_joined']) && isset($_POST['ffs_phase'])){





    $sql="insert into `registrationhubpos` (code,type,fname,cnumber,region,province,municipality,gender,birthdate,education,barangay,landsize,veg_area,type_own,dt_joined,ffs_phase)
    values ('$code','$type','$fname','$cnumber','$region','$province','$municipality','$gender','$birthdate','$education','$barangay','$landsize','$veg_area','$type_own','$dt_joined','$ffs_phase')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
