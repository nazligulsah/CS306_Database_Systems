


<!DOCTYPE html>
<html>
<head>
	<title>DOGMATES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	
		body {
  background-image: url(../imgs/image.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: cover;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ffb2b2;
  color: white;
}
</style>
</head>
<body>
<div align="center">


<?php
session_start();

include "config.php";


if (isset($_POST['username'])) {

$username = $_POST['username'];
$password = $_POST['password'];


if ($username == "admin" && $password == "1234"){
    header("Location: adminPanel.php"); 
    exit();
}

 
$sel2 = mysqli_query($db, "SELECT * FROM account WHERE deactivate = 0");
if (mysqli_num_rows($sel2)>0) {
echo"<br><br><br>";
echo"Are you sure to activate your account?";
  echo'<form action = "index.php" method="POST" > <button>No</button></form>';
echo'<form action = "activate.php" method="POST" > <button>Yes</button></form>';

}
  



$sql_statement = "SELECT * FROM usertable WHERE username = '$username' AND password = '$password'";


    
$result = mysqli_query($db, $sql_statement);
 if ($result){
  if($row = mysqli_fetch_array($result))
        {
          
            $user_id = $row['user_id'];
            $_SESSION['user_id'] = $user_id; 
            header("Location: homepage.php");

            
         }
  else {
          echo'<br><br><br>
            <br>
            <br>
            <br>';
            echo "Your username or password is incorrect! Please try again. ";
            echo '<form action = "index.php" >
            <button>TRY AGAIN</button>
            </form>';
   }     
  
 }



}

?>
</div>
</body>
</html>
