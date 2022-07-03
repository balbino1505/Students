<?php 
    $server = "Localhost";
    $username = "root";
    $password = "root";
    $database = "students";

    $conn = mysqli_connect($server, $username, $password, $database);
    
    //show data function
    function connect($sql){
        global $conn;
        
        $result = $conn->query($sql);
        $rows = [];
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }

    //insert data function
    function insert($data){
        global $conn;

        $name = $data["name"];
        $age = $data["age"];
        $address = $data["address"];
        $phone = $data["phone"];
        $image = $data["image"];
        $isMarried = $data["isMarried"];

        $sql = "INSERT INTO students (nome, age, address, phone, image, isMarried) VALUES('$name', '$age', '$address', '$phone', '$image', '$isMarried')";
        //$sql = "INSERT INTO students3 VALUES ($id,'$name', '$email', '$age', '$address', '$phone')";
        $conn->query($sql);

        return mysqli_affected_rows($conn);
    }

    //Update function
    function update($data){
        global $conn;

        $id = $data["idU"];
        $name = $data["nameU"];
        $age = $data["ageU"];
        $address = $data["addressU"];
        $phone = $data["phoneU"];
        $image = $data["imageU"];
        $isMarried = $data["isMarriedU"];
        //var_dump($name);

        $sql = "UPDATE students SET nome = '$name', age = '$age', address = '$address', phone = '$phone', image = '$image', isMarried = '$isMarried' WHERE id = '$id'";

        $conn->query($sql);

        return mysqli_affected_rows($conn);
    }

    //delete function
    function delete($id){
        global $conn;

        $sql = "DELETE FROM students WHERE id = '$id'";
        $conn->query($sql);

        return mysqli_affected_rows($conn);
    }
?>