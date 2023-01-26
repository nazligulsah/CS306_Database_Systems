<!DOCTYPE html>
<html>
<head>
    <title>ADMIN INSERTION PAGE</title>

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

<body  style="background-color">
<div align="center">
    <b style="font-size: 30px;">Welcome to Admin Insertion Page</b>
    <br>
    <br>
    Admins in our database:
    <br>
    <br>

    <?php
    include "adminmessage.php";
    ?>

    <form action="sendadminmsg.php" method="POST" >
      
        <input type="text" id="user_id" name="user_id" placeholder="Type user_id"><br>
        <input type="text" id="mail" name="mail" placeholder="Type mail"><br>
        <input type="text" id="password" name="password" placeholder="password"><br>
        
      
        <button class="button2">INSERT</button>
    </form>
</div>
</body>
</html>
