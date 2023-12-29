

<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['submit_change'])){


    $id1 = mysqli_real_escape_string($conn,$_POST['id1']);
    $commtype1 = mysqli_real_escape_string($conn,$_POST['commtype1']);
    $commname1 = mysqli_real_escape_string($conn,$_POST['commname1']);
    $commclass1 = mysqli_real_escape_string($conn,$_POST['commclass1']);
    $datesold1 = mysqli_real_escape_string($conn,$_POST['datesold1']);
    $buyer1 = mysqli_real_escape_string($conn,$_POST['buyer1']);
    $commprice1 = mysqli_real_escape_string($conn,$_POST['commprice1']);
    $commqty1 = mysqli_real_escape_string($conn,$_POST['commqty1']);


    $query = "UPDATE salesrecord SET id= '".$id1."', 
    commtype= '".$commtype1."',
    commname= '".$commname1."',
    commclass= '".$commclass1."',
    datesold= '".$datesold1."',
    buyer= '".$buyer1."',
    commprice= '".$commprice1."',               
    commqty= '".$commqty1."' WHERE id= '".$id1."'";


    $result = mysqli_query($conn,$query);
    echo '<script>';    
    echo 'window.location.href = "../salesfarmerview.php";'; // Replace with the URL you want to redirect to
    echo '</script>';
    
}
?>
