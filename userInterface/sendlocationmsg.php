<?php

include "config.php";

if (isset($_POST['user_id'])){


    $user_id = $_POST['user_id'];
    $user_location = $_POST['user_location'];
    $location_name = $_POST['location_name'];
   
   

    echo $location_id . " " . $user_id . " " . $user_location . " " . $location_name .  "<br>";

    $sql_statement = "INSERT INTO Location(location_id,user_id, user_location, location_name)
					VALUES ('$location_id','$user_id','$user_location','$location_name')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: locationinsert.php");

}

else
{

    echo "The form is not set.";

}


?>
