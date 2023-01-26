<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>DOGMATES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	
		body {
  background-image:  url(../imgs/image.jpg);
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
$user_id = $_SESSION['user_id'];
include "config.php";
  $query4 = mysqli_query($db, "UPDATE `Account`
SET `deactivate`= '1'
WHERE `Account`.user_id = '".$user_id."'");
header("Location: homepage.php"); 
exit();

?>
</div>
</body>
</html>
