<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['uname']) && isset($_POST['pword']) && isset($_POST['fname']) && isset($_POST['office']) && isset($_POST['position']) && isset($_POST['eaddr']) && isset($_POST['cnumber'])){





    $sql="insert into `usertableadms` (uname,pword,fname,office,position,eaddr,cnumber)
    values ('$uname','$pword','$fname','$office','$position','$eaddr','$cnumber')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
