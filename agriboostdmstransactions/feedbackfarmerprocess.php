<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['feedcode']) && isset($_POST['fname']) && isset($_POST['fnamecode']) && 
isset($_POST['feeddate']) && isset($_POST['numdel']) && isset($_POST['quniqueone']) && 
isset($_POST['qone']) && isset($_POST['qoner']) && isset($_POST['qtwo']) &&
isset($_POST['qtwor']) && isset($_POST['qthree']) && isset($_POST['qthreer']) && 
isset($_POST['qfour']) && isset($_POST['qfourr']) && isset($_POST['qfive']) &&
isset($_POST['qfiver']) && isset($_POST['qsix']) && isset($_POST['qsixr']) &&
isset($_POST['quniquetwo']) && isset($_POST['qsuggest']) && isset($_POST['fnametype'])){





    $sql="insert into `feedbackrecord`(feedcode,fname,fnamecode,feeddate,numdel,quniqueone,qone,qoner,qtwo,qtwor,qthree,qthreer,qfour,qfourr,qfive,qfiver,qsix,qsixr,quniquetwo,qsuggest,fnametype)
    values ('$feedcode','$fname','$fnamecode','$feeddate','$numdel','$quniqueone','$qone','$qoner','$qtwo','$qtwor','$qthree','$qthreer','$qfour','$qfourr','$qfive','$qfiver','$qsix','$qsixr','$quniquetwo','$qsuggest','$fnametype')";

    $result003=mysqli_query($conn,$sql);

    
}
?>
