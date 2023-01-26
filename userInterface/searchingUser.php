
<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>SEARCH</title>
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

<div style="padding-left:16px">
  <h2>DOGMATES</h2>
</div>
<div class="topnav">
  <a href="homepage.php">Home</a>
  
  <a href="profile.php">Profile</a>

  <a href="messages.php">Messages</a>

  <a href="friends.php">My Friends</a>
    
  <a href="settings.php">Settings</a>
  
  <a href="index.php">Exit</a>

  <form action = "searchingLocation.php" method="POST" >
  <textarea name= "searchLocation" placeholder="Search Location.."></textarea>
  <button>Search Location</button></form>

  <form action = "searchingUser.php" method="POST" >
  <textarea name= "searchUser" placeholder="Search Username.."></textarea>
  <button>Search Username</button></form>

  <form action = "editprofile.php" method="POST" >
  <br>
  <button>Edit Profile </button>
  </form>
  
  </div>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the share button */
.sharebtn {
  background-color: #ffb2b2;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.sharebtn:hover {
  opacity: 1;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>



</body>
</html>
</div>

<?php

include "config.php";

if (isset($_POST['searchUser'])) 
{

    $search = $_POST['searchUser'];
    $sel = mysqli_query($db, "SELECT * FROM usertable WHERE username = '".$search ."'");

    if (mysqli_num_rows($sel)>0) 
    {
    
        while($row = mysqli_fetch_array($sel)) 
        {

            echo "<table> ";
            echo "<td>----------------------------------------------------</td>";

            echo "<tr>";
            echo "<td>User: " . $row['username'] . " </td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Name of Dog: " . $row['names_of_dog'] . " </td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> <br><form action = 'friendsProfile.php?user_id=".$row["user_id"]."' method='POST'><button>ADD Friend</button>";
            echo "</form> </td><br>";
            echo "</tr>";

            echo "<td>----------------------------------------------------</td>";

            echo "<br><br>";
        }
    }

    else
    {
        echo'<br><br><br><br>Could not find the User in database!';
    }

}

?>
</div>
</body>
</html>
