<!DOCTYPE html>
<html>
<head>
    <title>USER INSERTION PAGE</title>

    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=int], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=mail], select {
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

        .button2 {
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

        .button2:hover{
            background-color: #006f84;
            border: 1px solid #fff;
            transition: 0.5s;
        }

        div {
            border-radius: 4px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../imgs/image.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: scroll;
            padding: 2px;
        }
        body {
            color: #f2f2f2;
            font-size: 18px;
        }
    </style>


</head>
<body>

<!--    <body  style="background-color:red;">   -->
<div align="center">
    <b style="font-size: 30px;">Welcome to User Insertion Page</b>
    <br>
    <br>
    Users in our database:
    <br>
    <br>

    <?php
    include "usermessage.php";
    ?>

    <form action="sendusermsg.php" method="POST" >
        <input type="text" id="username" name="username" placeholder="Type Username"><br>
        <input type="text" id="password" name="password" placeholder="Type Password"><br>
        <input type="text" id="phone_number" name="phone_number" placeholder="Type Phone Number"><br>
        <input type="mail" id="mail" name="mail" placeholder="Type Mail"><br>
        <input type="text" id="location" name="location" placeholder="Type Location"><br>
        <input type="int" id="number_of_dogs" name="number_of_dogs" placeholder="Type Number of Dogs"><br>
        <input type="text" id="names_of_dog" name="names_of_dog" placeholder="Type Names of Dogs"><br>
        <input type="text" id="place_of_birth" name="place_of_birth" placeholder="Type Place of Birth"><br>
        <input type="int" id="age" name="age" placeholder="Type Age"><br>
        <input type="text" id="gender" name="gender" placeholder="Type Gender"><br>
        <input type="text" id="breed" name="breed" placeholder="Type Breed"><br>
        <input type="text" id="background" name="background" placeholder="Type Background"><br>
        <input type="int" id="photos" name="photos" placeholder="Type Photos"><br>
        <button class="button2">INSERT</button>
    </form>
</div>
</body>
</html>
