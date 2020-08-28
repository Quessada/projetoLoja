<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K - Store - Administração</title>
    <?php include "../includes/css.inc.php" ?>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-form">                
        <form action="">
        <h2 class="text-center">Login</h2>
            <div class="form-group">
                <label for="login">Login</label>
                <input class="form-control" type="text" name="login" id="login">
            </div>
            <div class="form-group">
                <label for="login">Senha</label>
                <input class="form-control" type="password" name="login" id="login">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </div>
            <div class="clearfix">
                <a href="./create.php" class="float-left">Criar conta</a>
                <a href="../index.php" class="float-right">Home</a>
            </div>
        </form>
    </div>


    <?php include "../includes/js.inc.php" ?>

</body>
</html>

<?php 

?>