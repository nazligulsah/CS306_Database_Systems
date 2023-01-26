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

<tr> <th> message_id </th> <th> user_id </th> <th> to_user_id </th> <th> date </th>  <th> time </th>  <th> text </th>  </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM Message";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $message_id = $row['message_id'];
            $user_id = $row['user_id'];
            $to_user_id = $row['to_user_id'];
            $date = $row['date'];
            $time = $row['time'];
            $text = $row['text'];
            


            echo "<tr>" . "<th>" . $message_id . "</th>" . "<th>" . $user_id . "</th>" . "<th>" . $to_user_id . "</th>" . "<th>" . $date . "</th>" . "<th>" . $time . "</th>" . "<th>" . $text . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>
