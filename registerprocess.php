<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['uname']) && isset($_POST['pword']) && isset($_POST['fname']) && isset($_POST['office']) && isset($_POST['position']) && isset($_POST['eaddr']) && isset($_POST['cnumber']) && isset($_POST['as_brgy'])){





    $sql="insert into `usertable_cms` (uname,pword,fname,office,position,eaddr,cnumber,as_brgy)
    values ('$uname','$pword','$fname','$office','$position','$eaddr','$cnumber','$as_brgy')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
