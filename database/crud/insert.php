<?php 
    require("../functions.php");
    
    //Check if submit button is clicked
    if(isset($_POST["submit"])){
        if(insert($_POST) > 0){
            echo "New record created successfully";
            //redirect to show.php
            header("Location: show.php");
        }else if($_POST["name"] == ""){
            echo "Please insert a valid name";
        }else if($_POST["age"] == ""){
            echo "Please insert a valid age";
        }else if($_POST["address"] == ""){
            echo "Please insert a valid address";
        }else if($_POST["phone"] == ""){
            echo "Please insert a valid phone";
        }else if($_POST["image"] == ""){
            echo "Please insert a valid image";
        }else if($_POST["isMarried"] == ""){
            echo "Please insert a valid isMarried";
        }else{
            echo "Student data not inserted!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Student</title>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <h4>Insert Data</h4>
    <a href="show.php">Back to estudents list</a>

    <form action="" method="post">
        <ul>
            <li><label for="name">Name: </label> <input type="text" name="name" id="name"></li>
            <li><label for="age">Age: </label><input type="text" name="age" id="age"></li>
            <li><label for="address">Address: </label><input type="text" name="address" id="address"></li>
            <li><label for="phone">Phone: </label><input type="text" name="phone" id="phone"></li>
            <li><label for="image">Image: </label><input type="text" name="image" id="image"></li>
            <li><label for="isMarried">Status: </label><input type="text" name="isMarried" id="isMarried"></li>
            <li><button class="btn btn-success" type="submit" name="submit">Submit</button></li>
        </ul>
    </form>
</body>
</html>