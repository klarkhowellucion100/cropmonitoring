

<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['submit_change'])){


    $id1 = mysqli_real_escape_string($conn,$_POST['id1']);
    $qsix1 = mysqli_real_escape_string($conn,$_POST['qsix1']);
    $qsixr1 = mysqli_real_escape_string($conn,$_POST['qsixr1']);


    $query = "UPDATE feedbackrecord SET id= '".$id1."',   
    qsix= '".$qsix1."',             
    qsixr= '".$qsixr1."' WHERE id= '".$id1."'";


    $result = mysqli_query($conn,$query);
    echo '<script>';    
    echo 'window.location.href = "../feedbackvendorview.php";'; // Replace with the URL you want to redirect to
    echo '</script>';
    
}
?>
