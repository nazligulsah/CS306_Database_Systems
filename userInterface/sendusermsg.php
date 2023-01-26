<?php

include "config.php";

if (isset($_POST['username'])){


    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $mail = $_POST['mail'];
    $location = $_POST['location'];
    $number_of_dogs = $_POST['number_of_dogs'];
    $names_of_dog = $_POST['names_of_dog'];
    $place_of_birth = $_POST['place_of_birth'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $breed = $_POST['breed'];
    $background = $_POST['background'];
    $photos = $_POST['photos'];

    echo $username . " " . $password . " " . $phone_number . " " . $mail . " " . $location . " " . $number_of_dogs . " " . $names_of_dog . " " . $place_of_birth . " " . $age . " " . $gender . " " . $breed . " " . $background . " " . $photos . "<br>";

    $sql_statement = "INSERT INTO usertable(username,password,phone_number,mail,location,number_of_dogs,names_of_dog,place_of_birth,age,gender,breed,background,photos)
					VALUES ('$username','$password','$phone_number','$mail','$location','$number_of_dogs','$names_of_dog','$place_of_birth','$age','$gender','$breed','$background','$photos')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: userinsert.php");

}

else
{

    echo "The form is not set.";

}


?>