<?php
session_start();
include 'db.inc.php';

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}



// LOGIN
function login(){
  global $conn;

  $uname = $_POST["uname"];
  $pword = $_POST["pword"];

  $user = mysqli_query($conn, "SELECT * FROM usertableclanapp WHERE uname = '$uname'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($pword == $row['pword'] && $row['regval']=='Accept'){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION['uname'] = $uname; 
      $_SESSION["id"] = $row["id"];
      $_SESSION['type'] = $row['type'];       
      $_SESSION['code'] = $row['code'];            
       $_SESSION['fname'] = $row['fname'];                  
       $_SESSION['position'] = $row['position'];            
       $_SESSION['bday'] = $row['bday'];
       $_SESSION['age'] = $row['age'];
       $_SESSION['gender'] = $row['gender'];
       $_SESSION['cnumber'] = $row['cnumber'];
       $_SESSION['type'] = $row['type'];
       $_SESSION['regval'] = $row['regval'];
       $_SESSION['clanname'] = $row['clanname'];

       $_SESSION['region'] = $row['region'];
       $_SESSION['province'] = $row['province'];
       $_SESSION['municipality'] = $row['municipality'];
       $_SESSION['barangay'] = $row['barangay'];
       $_SESSION['specloc'] = $row['specloc'];
       $_SESSION['clanname'] = $row['clanname'];

      
   
    }
    elseif($pword != $row['pword']){
      echo "Wrong Password";
      exit;
    }
    elseif($row['regval']!='Accept'){
      echo "Account Verification";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>
