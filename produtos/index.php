<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K - Store</title>

    <?php include "../includes/css.inc.php"; ?>
</head>
<body>
    <?php include "../includes/menu.inc.php"; ?>

    <?php include "../auxiliares/banco/connection.php"; ?>


    <?php 
        $conn = connect();

        $query = "SELECT * FROM products";

        $resultado = mysqli_query($conn, $query);

        if($resultado){
            // $linhas = $resultado->num_rows;
            // $produtos = $resultado->fetch_array();

            $row = mysqli_fetch_assoc($resultado);

            // for($i = 0; $i < $linhas; $i++){
            //     $produtos = $resultado->fetch_row();
            //     // print "Cod: " . $produtos[]['cod'];
            //     // print "Name: " . $produtos['name'];
            //     // print "Description: " . $produtos['description'];
            //     // print "image: " . $produtos['image'];
            //     // print "Price: " . $produtos['price'];
            //     var_dump($produtos);
            // }
            
            // var_dump($row);
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

        close($conn);
    ?>

    <?php 
        if($row > 0){
            do {
                print "<p> " . $row['cod'] . "<br>" . $row['name'] . "</p>";
            } while ($row = mysqli_fetch_assoc($resultado));
        }
    ?>


    <?php include "../includes/js.inc.php"; ?>
</body>
</html>