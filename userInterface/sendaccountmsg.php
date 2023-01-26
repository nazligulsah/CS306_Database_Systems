<?php

include "config.php";

if (isset($_POST['user_id'])){

    
    $user_id = $_POST['user_id'];
    $deactivate = $_POST['deactivate'];
    $deleteaction = $_POST['deleteaction'];
    

    echo $user_id . " " . $deactivate . " " . $deleteaction . "<br>";

    $sql_statement = "INSERT INTO Account(user_id,deactivate,deleteaction)
					VALUES ('$user_id','$deactivate','$deleteaction')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: accountinsert.php");

}

else
{

    echo "The form is not set.";

}


?>