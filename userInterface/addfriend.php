<?php
session_start();

include "config.php";

$user_id = $_SESSION['user_id'];

$user_friend = $_GET['user_id'];

if (isset($_POST['user_id'])){


    $user_id = $_POST['user_id'];
    $to_user_id = $_POST['to_user_id'];
    $answer_date = $_POST['answer_date'];
    $answer_time = $_POST['answer_time'];
    $answer = $_POST['answer'];
   

    echo $user_id . " " . $to_user_id . " " . $answer_date . " " . $answer_time . " " . $answer .  "<br>";

    $sql_statement = "INSERT INTO Friendship(user_id, to_user_id, answer_date, answer_time, answer)
					VALUES ('$user_id','$to_user_id','$answer_date','$answer_time','$answer')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: friendshipinsert.php");

}

?>
