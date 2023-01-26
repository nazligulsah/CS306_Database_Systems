<?php

include "config.php";

if (isset($_POST['user_id'])){


    $user_id = $_POST['user_id'];
    $to_user_id = $_POST['to_user_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $text = $_POST['text'];
   

    echo $user_id . " " . $to_user_id . " " . $date . " " . $time . " " . $text .  "<br>";

    $sql_statement = "INSERT INTO Message(user_id, to_user_id, date, time, text)
					VALUES ('$user_id','$to_user_id','$date','$time','$text')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: messageinsert.php");

}

else
{

    echo "The form is not set.";

}


?>
