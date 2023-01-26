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

<tr> <th> user_id </th> <th> username </th> <th> password </th> <th> phone_number </th>  <th> mail </th>  <th> location </th>  <th> number_of_dogs </th>  <th> names_of_dog </th>  <th> place_of_birth </th>  <th> age </th>  <th> gender </th>  <th> breed </th>  <th> background </th>  <th> photos </th> </tr>

        <?php

        include "config.php";

        $sql_statement = "SELECT * FROM usertable";

        $result = mysqli_query($db, $sql_statement);

        while($row = mysqli_fetch_assoc($result))
        {
            $user_id = $row['user_id'];
            $username = $row['username'];
            $password = $row['password'];
            $phone_number = $row['phone_number'];
            $mail = $row['mail'];
            $location = $row['location'];
            $number_of_dogs = $row['number_of_dogs'];
            $names_of_dog = $row['names_of_dog'];
            $place_of_birth = $row['place_of_birth'];
            $age = $row['age'];
            $gender = $row['gender'];
            $breed = $row['breed'];
            $background = $row['background'];
            $photos = $row['photos'];


            echo "<tr>" . "<th>" . $user_id . "</th>" . "<th>" . $username . "</th>" . "<th>" . $password . "</th>" . "<th>" . $phone_number . "</th>" . "<th>" . $mail . "</th>" . "<th>" . $location . "</th>" . "<th>" . $number_of_dogs . "</th>" . "<th>" . $names_of_dog . "</th>" . "<th>" . $place_of_birth . "</th>" . "<th>" . $age . "</th>" . "<th>" . $gender . "</th>" . "<th>" . $breed . "</th>" . "<th>" . $background . "</th>" . "<th>" . $photos . "</th>" . "</tr>";
        }

        ?>

    </table>
</div>

</body>
</html>