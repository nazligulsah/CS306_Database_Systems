<!DOCTYPE html>
<html>
<head>
    <title>User Search Result</title>

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

<tr> <th> user_id </th> <th> username </th> <th> password </th> <th> phone_number </th>  <th> mail </th>  <th> location </th>  <th> number_of_dogs </th>  <th> names_of_dog </th>  <th> place_of_birth </th>  <th> age </th>  <th> gender </th>  <th> breed </th>  <th> background </th>  <th> photos </th> </tr>

<?php

include "config.php";


if (isset($_POST['username'])){
    

    $username = $_POST['username'];


    $sql_statement = "SELECT * FROM usertable WHERE username LIKE'$username'";
    
    $result = mysqli_query($db, $sql_statement);
    if ($result)
    {
        if($row = mysqli_fetch_array($result))
        {
            $user_id = $row['user_id'];
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

        


        else
        {
            echo "Cannot find the user!";
        }
         
        //header ("Location: usersearch.php");
    }
    

}

else
{
    $username="";
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
<form action="usersearch.php" method="POST">
    <button class="delbtn">Create a New SEARCH</button>
</div>
</form>