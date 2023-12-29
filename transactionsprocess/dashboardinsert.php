<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['userid']) && isset($_POST['username']) && isset($_POST['userpaymentstatus']) && isset($_POST['userdate']) && isset($_POST['userpaid']) && isset($_POST['usertransactiondate'])){





    $sql="insert into `paymentdataclanapp` (userid,username,userpaymentstatus,userdate,userpaid,usertransactiondate)
    values ('$userid','$username','$userpaymentstatus','$userdate','$userpaid','$usertransactiondate')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
