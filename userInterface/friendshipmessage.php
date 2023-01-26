<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>

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
    </style>

</head>
<body>

<div align="center">

    <table>

<tr> <th> request_id </th> <th> user_id </th> <th> to_user_id </th> <th> answer_date </th>  <th> answer_time </th>  <th> answer </th>  </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM Friendship";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $request_id = $row['request_id'];
            $user_id = $row['user_id'];
            $to_user_id = $row['to_user_id'];
            $answer_date = $row['answer_date'];
            $answer_time = $row['answer_time'];
            $answer = $row['answer'];
            


            echo "<tr>" . "<th>" . $request_id . "</th>" . "<th>" . $user_id . "</th>" . "<th>" . $to_user_id . "</th>" . "<th>" . $answer_date . "</th>" . "<th>" . $answer_time . "</th>" . "<th>" . $answer . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>
