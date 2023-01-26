<style>
    input[type=select], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .delbtn {
        background-color: #4ca3af;
        border: 1px solid #fff;
        border-radius: 999px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    } /* Blue */

    .delbtn:hover{
        background-color: #006f84;
        border: 1px solid #fff;
        transition: 0.5s;
    }

    div {
        border-radius: 5px;
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../imgs/image.jpg);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 20px;
    }
    body {
        color: #f2f2f2;
        font-size: 18px;
    }
</style>


<?php

include "config.php";

include "messagemessage.php";

?>
<div align="center">
    <b style="font-size: 30;">MESSAGE ID</b>
    <br>
<form action="sendmessagedelete.php" method="POST">
    <select name="ids">

        <?php

        $sql_command = "SELECT message_id FROM Message";

        $myresult = mysqli_query($db, $sql_command);

        while($id_rows = mysqli_fetch_assoc($myresult))
        {
            $message_id = $id_rows['message_id'];
            echo "<option value=$message_id>".$message_id."</option>";

        }

        ?>
    </select>

    <button class="delbtn">DELETE MESSAGE</button>
</div>
</form>
