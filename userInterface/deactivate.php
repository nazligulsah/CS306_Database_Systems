<?php
session_start();
include "config.php";


$user_id = $_SESSION['user_id'];



$query2 = mysqli_query($db, "UPDATE account
SET `deactivate`= '0'
WHERE `account`.user_id = '".$user_id."'");
header("Location: index.php");
exit();

?> 
