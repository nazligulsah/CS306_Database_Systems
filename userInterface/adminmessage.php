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

<tr> <th> admin_id </th> <th> user_id </th> <th> mail </th>   <th> password </th>    </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM Admin";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $admin_id = $row['admin_id'];
            $user_id = $row['user_id'];
            $mail = $row['mail'];
            $password = $row['password'];
          


            echo "<tr>" . "<th>" . $admin_id . "</th>" . "<th>" . $user_id . "</th>" . "<th>" . $mail. "</th>" . "<th>" . $password . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>
