<?php 

    //Função de conexão
    function connect(){

        $servername = "localhost";  //nome do servidor - no nosso caso é localhost | 127.0.0.1
        $database = "lojaTeste";    //nome do banco que vocês estão utilizando
        $username = "root";         //nome do usuário utilizado para acessar o mysql
        $password = "";             //senha para acessar o mysql

        //Cria a conexão
        $conn = mysqli_connect($servername, $username, $password, $database);

        //Verifica se a conexão é false, ou seja, se deu problema, caso não tenha dado certo a conexão
        //ele mata o processo e retorna o erro do mysql connection
        if (!$conn) {
            die(mysqli_connect_error());
        }

        //retorna a conexão
        return $conn;
    }

    //Função para fechar a conexão
    function close($conn){
        mysqli_close($conn);   
    }

    // Check connection

 
    // $sql = "INSERT INTO Students (name, lastname, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
    // if (mysqli_query($conn, $sql)) {
    //       echo "New record created successfully";
    // } else {
    //       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
    // mysqli_close($conn);

?>