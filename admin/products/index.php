<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K - Store</title>
    <style>
        .create-form {
            width: 800px;
            margin: 50px auto;
            font-size: 15px;
        }
    </style>

    <?php include "../includes/css.inc.php"; ?>
</head>
<body>
    <?php include "../includes/menu.inc.php"; ?>

    <?php include "../auxiliares/banco/connection.php"; ?>

    <div class="create-form">
        <h3>Criação de Produtos</h3>
        <form action="/products/create-data" method="POST">
            <div class="form-group">
                <label for="cod">Cod</label>
                <input class="form-control" type="text" name="cod" id="cod" required>
            </div>
            <div class="form-group">
                <label for="cpf">Nome</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Descrição</label>
                <!-- <input class="form-control" type="text" name="email" id="email"> -->
                <textarea class="form-control" style="resize: none" name="description" id="description" cols="30" rows="10" maxlength="200" required></textarea>
            </div>
            <div class="form-group">
                <label for="password">Image</label>
                <input class="form-control" type="text" name="image" id="image" placeholder="Insira a URL da imagem" required>
            </div>
            <div class="form-group">
                <label for="value">Preço do Produto</label>
                <input class="form-control" type="text" name="price" id="price" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger" value="Limpar">
                <a href="/produtos" class="btn btn-primary">Retornar</a>
            </div>
        </form>
    </div>

    <?php include "../includes/js.inc.php"; ?>

    <script>
     $("#price").mask('000.000.000.000.000,00', {reverse: true})
    </script>
</body>
</html>