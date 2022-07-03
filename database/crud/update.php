<?php 
    require "../functions.php";
    
    if(isset($_POST["submit"])){
        if(update($_POST) > 0){
           echo "Data updated successfully";
           //redirect to show.php
           header("Location: show.php");
        }else{
            echo "Data not updated!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <input type="hidden" name="idU" value="<?= $_GET["id"] ?>">
            <li><label for="name">Name: </label> <input type="text" name="nameU" id="name" value="<?= $_GET["name"] ?>"></li>
            <li><label for="age">Age: </label><input type="text" name="ageU" id="age" value="<?= $_GET["age"] ?>"></li>
            <li><label for="address">Address: </label><input type="text" name="addressU" id="address" value="<?= $_GET["address"] ?>"></li>
            <li><label for="phone">Phone: </label><input type="text" name="phoneU" id="phone" value="<?= $_GET["phone"] ?>"></li>
            <li><label for="image">Image: </label><input type="text" name="imageU" id="image" value="<?= $_GET["image"] ?>"></li>
            <li><label for="isMarried">Status: </label><input type="text" name="isMarriedU" id="isMarried" value="<?= $_GET["isMarried"] ?>"></li>
            <li><button class="btn btn-secondary" type="submit" name="submit">Update</button>
                <a href="show.php">Back to the students list</a>
            </li>
        </ul>
    </form>
</body>
</html>