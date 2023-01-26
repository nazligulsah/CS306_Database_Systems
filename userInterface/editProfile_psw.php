<?php
session_start();
include "config.php";


$user_id= $_SESSION['user_id'];

if (isset($_POST['password'])) {
$password=$_POST['password'];


    $sql_statement = "UPDATE usertable
      SET  `usertable`.`password` = '$password'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}
header("Location: profile.php"); 


if (isset($_POST['phone_number'])) {
$phone_number=$_POST['phone_number'];


    $sql_statement = "UPDATE usertable
      SET  `usertable`.`phone_number` = '$phone_number'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}
header("Location: profile.php"); 

if (isset($_POST['location'])) {
$location=$_POST['location'];


    $sql_statement = "UPDATE usertable
      SET  `usertable`.`location` = '$location'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}
header("Location: profile.php"); 

if (isset($_POST['number_of_dogs'])) {
$number_of_dogs=$_POST['number_of_dogs'];


    $sql_statement = "UPDATE usertable
      SET  `usertable`.`number_of_dogs` = '$number_of_dogs'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}
header("Location: profile.php"); 

if (isset($_POST['names_of_dog'])) {
$names_of_dog=$_POST['names_of_dog'];


    $sql_statement = "UPDATE usertable
      SET  `usertable`.`names_of_dog` = '$names_of_dog'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}
header("Location: profile.php"); 

if (isset($_POST['place_of_birth'])) {
$place_of_birth=$_POST['place_of_birth'];


    $sql_statement = "UPDATE usertable
      SET  `usertable`.`place_of_birth` = '$place_of_birth'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}
header("Location: profile.php"); 

if (isset($_POST['age'])) {
$age=$_POST['age'];


    $sql_statement = "UPDATE usertable
      SET  `usertable`.`age` = '$age'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}
header("Location: profile.php"); 
if (isset($_POST['gender'])) {
$gender=$_POST['gender'];


    $sql_statement = "UPDATE usertable
      SET  `usertable`.`gender` = '$gender'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}
header("Location: profile.php"); 
if (isset($_POST['breed'])) {
$breed=$_POST['breed'];


    $sql_statement = "UPDATE usertable
      SET  `usertable`.`breed` = '$breed'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}
header("Location: profile.php"); 

if (isset($_POST['background'])) {
$background=$_POST['background'];

    $sql_statement = "UPDATE usertable
      SET  `usertable`.`background` = '$background'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);
}

header("Location: profile.php"); 

if (isset($_POST['photos'])) {
$photos=$_POST['photos'];

    $sql_statement = "UPDATE usertable
      SET  `usertable`.`photos` = '$photos'
      WHERE `usertable`.user_id = '$user_id'";

      mysqli_query($db, $sql_statement);

}
header("Location: profile.php"); 

exit();
?>
