<?php 

    // var_dump($_REQUEST);

    echo "<h1>Recuperando os Dados do formulário</h1>";

    $nome = $_GET['name'];

    print "O nome é: " . $nome; 

    // if(isset($_POST['name'])){
    //     $name = $_POST['name'];
    // }

    // if(isset($_POST['cpf'])){
    //     $cpf = $_POST['cpf'];
    // }

    // if(isset($_POST['email'])){
    //     $email = $_POST['email'];
    // }

    // if(isset($_POST['password'])){
    //     $password = $_POST['password'];
    // }

    // require_once "../auxiliares/banco/connection.php";

    // $conn = connect();

    // $query = "INSERT INTO users (name, cpf, email, password) VALUES ('$name', '$cpf', '$email', '$password')";

    // if(mysqli_query($conn, $query)){
    //     echo "Criado com sucesso!";
    // } else {
    //     echo "Error: " . $query . "<br>" . mysqli_error($conn);
    // }

    // close($conn);


?>