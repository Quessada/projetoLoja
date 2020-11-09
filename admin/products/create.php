<?php

    if(isset($GET['cod'])){
        $cod = $_POST['cod'];
    }

    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }

    if(isset($_POST['description'])){
        $description = $_POST['description'];
    }

    if(isset($_POST['image'])){
        $image = $_POST['image'];
    }

    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }

    require_once "../auxiliares/banco/connection.php";

    $conn = connect();

    $query = "INSERT INTO products (cod, name, description, image, price) VALUES ('$cod', '$name', '$description', '$image', '$price')";

    if(mysqli_query($conn, $query)){
        echo "Criado com sucesso!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    close($conn);


?>