<?php 
    require("../functions.php");

    //check if name, age, address, phone, image and marital status is not empty
    if(!isset($_GET["name"]) || !isset($_GET["age"])){
        header("Location: show.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
    <h3>Details of data</h3>
    <ul>
        <li>Name: <?= $_GET["name"]; ?></li>
        <li>Age: <?= $_GET["age"]; ?></li>
        <li>Address: <?= $_GET["address"]; ?></li>
        <li>Phone: <?= $_GET["phone"]; ?></li>
        <li><img src="<?= $_GET["image"]; ?>" alt="<?= $_GET["name"]; ?>" srcset=""></li>
        <?php if($_GET["isMarried"] == 1): ?>
            <li>Status: <?= "Casado" ?></li>
        <?php else: ?>
            <li>Status: <?= "Solteiro" ?></li>
        <?php endif ?>
        <li>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $_GET["id"] ?>" type="submit" name="delete">Delete</a>

            <a href="show.php">Back to the students list</a>
        </li>
    </ul>
</body>
</html>