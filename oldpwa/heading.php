   <!-- <body data-layout="horizontal" data-topbar="colored"> -->
   <?php
include 'agriboostdmstransactions/db.inc.php';



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
$component = $_SESSION['component'];



// echo '-------------------------------------'.$userprofile;

if($userid==true){

   

} else {

    header("location:login.html");
}

$query= "SELECT * FROM usertableadms WHERE id ='$userid'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);


?><!-- <body data-layout="horizontal" data-topbar="colored"> -->