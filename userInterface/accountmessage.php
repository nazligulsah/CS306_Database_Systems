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

<tr> <th> account_id </th> <th> user_id </th> <th> deactivate </th> <th> deleteaction </th> </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM Account";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $account_id = $row['account_id'];
            $user_id = $row['user_id'];
            $deactivate = $row['deactivate'];
            $deleteaction = $row['deleteaction'];
            

            echo "<tr>" . "<th>" . $account_id . "</th>" . "<th>" . $user_id . "</th>" . "<th>" . $deactivate . "</th>" . "<th>" . $deleteaction . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>