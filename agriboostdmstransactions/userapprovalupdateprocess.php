

<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['submit_change'])){


    $id1 = mysqli_real_escape_string($conn,$_POST['id1']);
    $fname1 = mysqli_real_escape_string($conn,$_POST['fname1']);
    $position1 = mysqli_real_escape_string($conn,$_POST['position1']);
    $office1 = mysqli_real_escape_string($conn,$_POST['office1']);
    $regval1 = mysqli_real_escape_string($conn,$_POST['regval1']);
    $component1 = mysqli_real_escape_string($conn,$_POST['component1']);


    $query = "UPDATE usertableadms SET id= '".$id1."',                

    fname= '".$fname1."',
    position= '".$position1."',
    office= '".$office1."',
    regval= '".$regval1."',
    component= '".$component1."' WHERE id= '".$id1."'";


    $result = mysqli_query($conn,$query);
    echo '<script>';    
    echo 'window.location.href = "../userapproval.php";'; // Replace with the URL you want to redirect to
    echo '</script>';
    
}
?>
