<?php

include "config.php";

if (isset($_POST['ids'])){

    $selection_id = $_POST['ids'];

    $sql_statement = "DELETE FROM Admin WHERE admin_id = $selection_id";

    $result = mysqli_query($db, $sql_statement);

    header ("Location: admindelete.php");

}

else
{

    echo "The form is not set.";

}

?>
