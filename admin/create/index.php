<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K - Store - Administração</title>
    <style>
        .create-form {
            width: 800px;
            margin: 50px auto;
            font-size: 15px;
        }
    </style>

    <?php include "../includes/css.inc.php" ?>
</head>
<body>
    <div class="create-form">
        <h3>Criação de Usuário</h3>
        <form action="/create-data" method="GET">
            <div class="form-group">
                <label for="name">Nome</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input class="form-control" type="text" name="cpf" id="cpf">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger" value="Limpar">
                <a href="/login" class="btn btn-primary">Retornar</a>
            </div>
        </form>
    </div>
    

    <?php include "../includes/js.inc.php" ?>
    <script>
        $("#cpf").mask("000.000.000-00");
    </script>
</body>
</html>