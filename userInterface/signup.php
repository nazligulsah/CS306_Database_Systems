
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
		<style>
            input[type=text], select 
            {
                width: 30%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            textarea
            {
                width: 300px;
                height: 100px;
            }

            input[type=password], select 
            {
                width: 30%;
                padding: 12px 20px;
                margin: 8px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=int], select 
            {
                width: 30%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=mail], select 
            {
                width: 30%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .button2 
            {
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

            .button2:hover
            {
                background-color: #006f84;
                border: 1px solid #fff;
                transition: 0.5s;
            }
 
            body 
            {
            background-image: url(../imgs/image.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: cover;
            }
        </style>
</head>

<body>
<div align="center">
    <br>
    <br>
    
    <b style="font-size: 50;">CREATE YOUR ACCOUNT</b>
    <br>
    <br>
    <form method="POST" >
        <input type="text" id="username" name="username" placeholder="Type Username"><br>
        <input type="password" id="password" name="password" placeholder="Type Password"><br>
        <input type="text" id="phone_number" name="phone_number" placeholder="Type Phone Number"><br>
        <input type="mail" id="mail" name="mail" placeholder="Type Mail"><br>
        <input type="text" id="location" name="location" placeholder="Type Location"><br>
        <input type="int" id="number_of_dogs" name="number_of_dogs" placeholder="Type Number of Dogs"><br>
        <input type="text" id="names_of_dog" name="names_of_dog" placeholder="Type Names of Dogs"><br>
        <input type="text" id="place_of_birth" name="place_of_birth" placeholder="Type Place of Birth"><br>
        <input type="int" id="age" name="age" placeholder="Type Age"><br>
        <input type="text" id="gender" name="gender" placeholder="Type Gender"><br>
        <input type="text" id="breed" name="breed" placeholder="Type Breed"><br>
        <textarea id="background" name="background" placeholder="Type Background"></textarea><br>
        
        <label for="photos">Upload a profile picture: </label> <br>
        <input type="file" id="photos" name="photos" accept="image/*" required><br>

        <button class="button2">SIGN UP</button>

        <br>
        <br>
    </form>
    <?php

include "config.php";

if (isset($_POST['username'])){


    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $mail = $_POST['mail'];
    $location = $_POST['location'];
    $number_of_dogs = $_POST['number_of_dogs'];
    $names_of_dog = $_POST['names_of_dog'];
    $place_of_birth = $_POST['place_of_birth'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $breed = $_POST['breed'];
    $background = $_POST['background'];
    $photos = $_POST['photos'];

    $sql_statement = "INSERT INTO usertable(username,password,phone_number,mail,location,number_of_dogs,names_of_dog,place_of_birth,age,gender,breed,background,photos)
					VALUES ('$username','$password','$phone_number','$mail','$location','$number_of_dogs','$names_of_dog','$place_of_birth','$age','$gender','$breed','$background','$photos')";

    $result = mysqli_query($db, $sql_statement);
    $query = mysqli_query($db,"SELECT * FROM usertable WHERE username='".$username."'");
   
    $sql_statement = "INSERT INTO usertable(username,password,phone_number,mail,location,number_of_dogs,names_of_dog,place_of_birth,age,gender,breed,background,photos)
    VALUES ('$username','$password','$phone_number','$mail','$location','$number_of_dogs','$names_of_dog','$place_of_birth','$age','$gender','$breed','$background','$photos')";
    
    header("Location: index.php");
}
?>
    </form>
</div>
</body>
</html>