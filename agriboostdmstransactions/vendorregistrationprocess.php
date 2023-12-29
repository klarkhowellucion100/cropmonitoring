<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['code']) && isset($_POST['type']) && isset($_POST['fname']) && isset($_POST['cnumber']) && isset($_POST['region']) && isset($_POST['province']) && 
isset($_POST['municipality']) && isset($_POST['gender']) && isset($_POST['birthdate']) && isset($_POST['education']) && isset($_POST['barangay']) && isset($_POST['bus_name']) && 
isset($_POST['bus_add']) && isset($_POST['dt_joined']) && isset($_POST['category'])){





    $sql="insert into `registrationhubpos` (code,type,fname,cnumber,region,province,municipality,gender,birthdate,education,barangay,bus_name,bus_add,dt_joined,category)
    values ('$code','$type','$fname','$cnumber','$region','$province','$municipality','$gender','$birthdate','$education','$barangay','$bus_name','$bus_add','$dt_joined','$category')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
