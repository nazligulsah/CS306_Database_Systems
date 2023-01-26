<?php

include "config.php";

if (isset($_POST['user_id'])){


    $user_id = $_POST['user_id'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
   
   

    echo $admin_id . " " . $user_id . " " . $mail . " " . $password.  "<br>";

    $sql_statement = "INSERT INTO Admin(admin_id,user_id, mail, password)
					VALUES ('$admin_id','$user_id','$mail','$password')";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: admininsert.php");

}

else
{

    echo "The form is not set.";

}


?>
