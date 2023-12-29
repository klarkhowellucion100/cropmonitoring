<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['code']) && isset($_POST['commtype']) && isset($_POST['commclass']) && isset($_POST['commname']) && isset($_POST['commselltype']) && isset($_POST['dateplant']) && 
isset($_POST['datesold']) && isset($_POST['buyer']) && isset($_POST['commprice']) && isset($_POST['commqty']) && isset($_POST['sellername']) && isset($_POST['sellercode']) && 
isset($_POST['sellertype'])){





    $sql="insert into `salesrecord` (code,commtype,commclass,commname,commselltype,dateplant,datesold,buyer,commprice,commqty,sellername,sellercode,sellertype)
    values ('$code','$commtype','$commclass','$commname','$commselltype','$dateplant','$datesold','$buyer','$commprice','$commqty','$sellername','$sellercode','$sellertype')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
