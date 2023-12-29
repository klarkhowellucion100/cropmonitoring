<?php
include 'db.inc.php';



session_start();


//session
$userprofile = $_SESSION['fname'];



$userid = $_SESSION['id'];                      
$usertype = $_SESSION['code'];        
$useruname = $_SESSION['uname'];
$userposition = $_SESSION['position'];
$userbday = $_SESSION['bday'];
$userage = $_SESSION['age'];
$usergender = $_SESSION['gender'];
$usercnumber = $_SESSION['cnumber'];
$usertype = $_SESSION['type'];
$userregval = $_SESSION['regval'];



// echo '-------------------------------------'.$userprofile;

if($userprofile==true){

   

} else {

    header("location:login.php");
}

$query= "SELECT * FROM usertableclanapp WHERE uname ='$userprofile'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);


?>