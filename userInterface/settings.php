
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
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
	echo'	<div style="padding-left:16px">
  <h2>DOGMATES</h2>
</div>';
echo'<div class="topnav">
  <a href="homepage.php">Home</a>
  
  <a href="profile.php">Profile</a>

  <a href="messages.php">Messages</a>

  <a href="friends.php">My Friends</a>
    
  <a class="active" href="settings.php">Settings</a>
  
  <a href="index.php">Exit</a>

  <form action = "searchingLocation.php" method="POST" >
  <textarea name= "searchLocation" placeholder="Search Location.."></textarea>
  <button>Search Location</button></form>

  <form action = "searchingUser.php" method="POST" >
  <textarea name= "searchUser" placeholder="Search Username.."></textarea>
  <button>Search Username</button></form>

  
  
  
  </div>';

?>
<h2><font color="#333">Manage Your Account</font></h2>

<br>
<br>


 <form action = "deactivate.php" method="POST" >
 <button>DEACTIVATE</button>
</form>
<br>
<br>
<br>
<form action = "delete.php" method="POST" >
 <button>DELETE</button>

</form>


</div>

</body>
</html>
