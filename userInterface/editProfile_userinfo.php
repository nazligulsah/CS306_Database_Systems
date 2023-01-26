
<?php
session_start();
include "config.php";

$username = $_SESSION['username'];

if (isset($_POST['username'])) {

	$user_id = $_POST['user_id'];
    echo "<tr>" .  "<th>" . 'mom'. "</th>" . "</tr>";
	$query = mysqli_query($db,"SELECT * FROM usertable WHERE user_id='".$user_id."'");
    echo "<tr>" .  "<th>" . 'mom'. "</th>" . "</tr>";
 	if (!$query) {
        die('Error: ' . mysqli_error($db));
    }

	if (mysqli_num_rows($query) > 0) {

    	echo " <script type='text/javascript'>
				alert('Username already exists! Try another.');
				history.go(-1);
					</script>";

		
	}

	else {
       
		$user = mysqli_query($db, "SELECT * FROM usertable
							WHERE username = '$username'");
		$userInfo = mysqli_fetch_array($user);

        $password = $userInfo['password'];
		$phone_number = $userInfo['phone_number'];
		$mail = $userInfo['mail'];
		$location = $userInfo['location'];
		$number_of_dogs = $userInfo['number_of_dogs'];
		$names_of_dog = $userInfo['names_of_dogs'];
		$place_of_birth = $userInfo['place_of_birth'];
		$age = $userInfo['age'];
		$gender = $userInfo['gender'];
		$breed = $userInfo['breed'];
		$background = $userInfo['background'];

		mysqli_query($db, "DELETE FROM usertable
		      WHERE `usertable`.`username` = '$username'");

        echo "<tr>" .  "<th>" . 'mom'. "</th>" . "</tr>";

		mysqli_query($db,  "INSERT INTO usertable(username,password,phone_number,mail,location,number_of_dogs,names_of_dog,place_of_birth,age,gender,breed,background,photos)
					VALUES ('$username','$password','$phone_number','$mail','$location','$number_of_dogs','$names_of_dog','$place_of_birth','$age','$gender','$breed','$background','$photos')");
		   	 
		mysqli_query($db, "INSERT INTO `Account` (`user_id`, `deactivate`) 
		 VALUES ('$user_id', b'0')");

		$_SESSION['username'] = $username;
		session_write_close(); 

		header("Location: profile.php"); 
		exit();
	}
}


?>
