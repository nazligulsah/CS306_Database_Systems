<!DOCTYPE html>
<html>
<head>
    <title>Friendship Search Result</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: transparent;
        }
        tr {
            font-size: 14px;
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

</head>
<body>

<div align="center">
<b style="font-size: 30;">The Search Result</b>
    <br>
    <br>
    <table>

<tr> <th> request_id </th> <th> user_id </th> <th> to_user_id </th> <th> answer_date </th>  <th> answer_time </th>  <th> answer </th>  </tr>
<?php

include "config.php";


if (isset($_POST['request_id'])){
    

    $request_id = $_POST['request_id'];


    $sql_statement = "SELECT * FROM Friendship WHERE request_id LIKE'$request_id'";
    
    $result = mysqli_query($db, $sql_statement);
    if ($result)
    {
        if($row = mysqli_fetch_array($result))
        {
            $request_id = $row['request_id'];
            $user_id = $row['user_id'];
            $to_user_id = $row['to_user_id'];
            $answer_date = $row['answer_date'];
            $answer_time = $row['answer_time'];
            $answer = $row['answer'];
            


            echo "<tr>" . "<th>" . $request_id . "</th>" . "<th>" . $user_id . "</th>" . "<th>" . $to_user_id . "</th>" . "<th>" . $answer_date . "</th>" . "<th>" . $answer_time . "</th>" . "<th>" . $answer . "</tr>";
        }

        


        else
        {
            echo "Cannot find the Friendship!";
        }
        
        
    }
    

}

else
{
    $request_id="";
    echo "The form is not set.";

}

?>
<br>
<br>
    </table>
</div>

</body>
</html>

<div align="center"> 
<form action="friendshipsearch.php" method="POST">
    <button class="delbtn">Create a New SEARCH</button>
</div>
</form>