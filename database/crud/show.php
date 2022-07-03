<!-- Make a connection with DB -->
<?php
    require("../functions.php");
    
    $students = connect("SELECT * FROM students");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Students List</h1>
    <a href="insert.php">Insert data</a>
    <table class="table table-bordered" style="width:100%">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Imagem</th>
            <th>Estado Civil</th>
            <th>Actions</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($students as $student): ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $student["nome"] ?></td>
                <td><?= $student["age"] ?></td>
                <td><?= $student["address"] ?></td>
                <td><?= $student["phone"] ?></td>
                <td><?= $student["image"] ?></td>
                <td><?php if($student["isMarried"] == true){echo "Casado";}else{echo "Solteiro";} ?></td>
                <td>
                    <a href="read.php?id=<?= $student["id"] ?>&name=<?= $student["nome"]?>&age=<?= $student["age"] ?>&address=<?= $student["address"] ?>&phone=<?= $student["phone"] ?>&image=<?= $student["image"] ?>&isMarried=<?= $student["isMarried"] ?>">Read Data</a>|
                    <a href="update.php?id=<?= $student["id"] ?>&name=<?= $student["nome"]?>&age=<?= $student["age"] ?>&address=<?= $student["address"] ?>&phone=<?= $student["phone"] ?>&image=<?= $student["image"] ?>&isMarried=<?= $student["isMarried"] ?>">Update Data</a>
                </td>
                <?php $i = $i + 1; ?>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>