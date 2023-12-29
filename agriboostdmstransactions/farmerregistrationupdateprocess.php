

<?php 

include 'db.inc.php';

extract($_POST);

if(isset($_POST['submit_change'])){


    $id1 = mysqli_real_escape_string($conn,$_POST['id1']);
    $code1 = mysqli_real_escape_string($conn,$_POST['code1']);
    $type1 = mysqli_real_escape_string($conn,$_POST['type1']);
    $fname1 = mysqli_real_escape_string($conn,$_POST['fname1']);
    $cnumber1 = mysqli_real_escape_string($conn,$_POST['cnumber1']);
    $region1 = mysqli_real_escape_string($conn,$_POST['region1']);
    $province1 = mysqli_real_escape_string($conn,$_POST['province1']);
    $municipality1 = mysqli_real_escape_string($conn,$_POST['municipality1']);
    $gender1 = mysqli_real_escape_string($conn,$_POST['gender1']);
    $birthdate1 = mysqli_real_escape_string($conn,$_POST['birthdate1']);
    $education1 = mysqli_real_escape_string($conn,$_POST['education1']);
    $barangay1 = mysqli_real_escape_string($conn,$_POST['barangay1']);
    $landsize1 = mysqli_real_escape_string($conn,$_POST['landsize1']);
    $veg_area1 = mysqli_real_escape_string($conn,$_POST['veg_area1']);
    $type_own1 = mysqli_real_escape_string($conn,$_POST['type_own1']);
    $dt_joined1 = mysqli_real_escape_string($conn,$_POST['dt_joined1']);
    $ffs_phase1 = mysqli_real_escape_string($conn,$_POST['ffs_phase1']);


    $query = "UPDATE registrationhubpos SET id= '".$id1."',                
    code= '".$code1."',
    type= '".$type1."',
    fname= '".$fname1."',
    cnumber= '".$cnumber1."',
    region= '".$region1."',
    province= '".$province1."',
    municipality= '".$municipality1."',
    gender= '".$gender1."',
    birthdate= '".$birthdate1."',
    education= '".$education1."',
    barangay= '".$barangay1."',
    landsize= '".$landsize1."',
    veg_area= '".$veg_area1."',
    type_own= '".$type_own1."',
    dt_joined= '".$dt_joined1."',
    ffs_phase= '".$ffs_phase1."' WHERE id= '".$id1."'";


    $result = mysqli_query($conn,$query);
    echo '<script>';    
    echo 'window.location.href = "../farmerregistration.php";'; // Replace with the URL you want to redirect to
    echo '</script>';
    
}
?>
