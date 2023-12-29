







    

<?php


session_start();


include 'db.inc.php';






//session
$uid = $_SESSION['id'];
$time = "";

$query=mysqli_query($conn, "UPDATE usertableadms SET status='Offline now' WHERE id=$uid");
// echo '-------------------------------------'.$userprofile;

//echo $time;




session_unset();

header("location:../login.html");


?>









   



