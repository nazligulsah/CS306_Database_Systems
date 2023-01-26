<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Friends</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
  background-image:url(../imgs/image.jpg);
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

$user_id = $_SESSION['user_id'];

include "config.php";

$sel = "SELECT * 
  FROM  Friendship
  WHERE `Friendship`.user_id = '".$user_id."'";

$result = mysqli_query($db, $sel);



echo'<div style="padding-left:16px">
<h2>DOGMATES</h2>
</div>';
echo'<div class="topnav">
  <a href="homepage.php">Home</a>
  
  <a href="profile.php">Profile</a>

  <a href="messages.php">Messages</a>

  <a class="active" href="friends.php">My Friends</a>
  
  <a href="settings.php">Settings</a>
  
  <a href="index.php">Exit</a>

  <form action = "searchingLocation.php" method="POST" >
  <textarea name= "searchLocation" placeholder="Search Location.."></textarea>
  <button>Search Location</button></form>

  <form action = "searchingUser.php" method="POST" >
  <textarea name= "searchUser" placeholder="Search Username.."></textarea>
  <button>Search Username</button></form>

  
  </div>';
  while($row = mysqli_fetch_assoc($result))
  {
    $friend_user_id = $row['to_user_id'];
    
    $sel2 = "SELECT * 
    FROM  usertable
    WHERE `usertable`.user_id = $friend_user_id.";

    $result2 = mysqli_query($db, $sel2);
    
    while($row2 = mysqli_fetch_assoc($result2))
  {
    

      
echo"
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #666;
  padding: 1px;
  text-align: center;
  font-size: 35px;
  color: white;
}

section {
  display: -webkit-flex;
  display: flex;
}

nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 50px;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 100px;
}

footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>

<header>
  <h2> ".$row2['username']." </h2>
</header>

<section>
  <nav>
    <ul>
      <li><img src=" . $row2['photos'] . ' width="400" ' . ' height="400" ' . ">" . "</li>
    </ul>
  </nav>
  
  <article>
  <tr>
  <td> Name of the Dog: ".$row2['names_of_dog']." </td><br><br>
  </tr>

  <tr>
  <td> E-Mail: ".$row2['mail']." </td><br><br>
  </tr>

  <tr>
  <td> Phone Number: ".$row2['phone_number']." </td><br><br><br>
  </tr>

  <tr>
  <td> Location: ".$row2['location']." </td><br><br>
  </tr>

  <tr>
  <td> Birth Place: ".$row2['place_of_birth']." </td><br><br>
  </tr>

  <tr>
  <td> Age: ".$row2['age']." </td><br><br>
  </tr>

  <tr>
  <td> Gender: ".$row2['gender']." </td><br><br>
  </tr>

  <tr>
  <td>  Breed: ".$row2['breed']." </td><br><br>
  </tr>

  <tr>
  <td> Background: <br><br> ".$row2['background']." </td><br>
  </tr>

  <tr>
  <td> <br><br> <form action = 'messages.php?user_friend=".$row2["user_id"]."' method='POST'>
    <button>SEND MESSAGE </button>
  </form> </td><br>
  </tr>

  </article>
</section>


</body>
</html>";
  }

}


?>

</div>
</body>
</html>
