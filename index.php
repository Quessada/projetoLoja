<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K - Store</title>

    <?php include "./includes/css.inc.php"; ?>

</head>
<body>   
    <?php include "./includes/menu.inc.php"; ?>

    <section id="valores">
        <div class="container">
        Valores
        </div>
    </section>

    <section id="historia">
        <div class="container">
        Historia
        </div>

    </section>

    <section id="contato">
        <div class="container">
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="subject">Assunto</label>
                    <input class="form-control" type="text" name="subject" id="subject">
                </div>
                <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea class="form-control" name="message" id="message" cols="100" rows="10" style="resize: none;"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </div>

            </form>
            <div class="row"">
               
            </div>
        </div>
    </section>


    <?php include "./includes/js.inc.php"; ?>
    <script>

    </script>
</body>
</html>