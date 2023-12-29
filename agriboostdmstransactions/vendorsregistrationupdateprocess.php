

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


    $category1 = mysqli_real_escape_string($conn,$_POST['category1']);
    $bus_name1 = mysqli_real_escape_string($conn,$_POST['bus_name1']);
    $bus_add1 = mysqli_real_escape_string($conn,$_POST['bus_add1']);
    $dt_joined1 = mysqli_real_escape_string($conn,$_POST['dt_joined1']);


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

    category= '".$category1."',
    bus_name= '".$bus_name1."',
    bus_add= '".$bus_add1."',
    dt_joined= '".$dt_joined1."' WHERE id= '".$id1."'";


    $result = mysqli_query($conn,$query);
    echo '<script>';
    echo 'window.location.href = "../vendorregistration.php";'; // Replace with the URL you want to redirect to
    echo '</script>';
    
}
?>
