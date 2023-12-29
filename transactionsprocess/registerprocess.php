<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['clanname']) && isset($_POST['cnumber']) && isset($_POST['fname']) && isset($_POST['position']) && isset($_POST['bday']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['region']) && isset($_POST['province']) && isset($_POST['municipality']) && isset($_POST['barangay']) && isset($_POST['specloc']) && isset($_POST['uname']) && isset($_POST['pword'])){





    $sql="insert into `usertableclanapp` (clanname,cnumber,fname,position,bday,age,gender,region,province,municipality,barangay,specloc,uname,pword)
    values ('$clanname','$cnumber','$fname','$position','$bday','$age','$gender','$region','$province','$municipality','$barangay','$specloc','$uname','$pword')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
