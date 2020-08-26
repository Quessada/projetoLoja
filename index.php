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

    

    <section id="empresa">
        <div class="container">
            <h3>Empresa</h3>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque autem debitis commodi quas natus harum tempore officiis molestias iure officia atque laudantium dolore magni, est, cum omnis asperiores aliquam eius.
            <h5>Missão</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius repellendus voluptatum quidem. Necessitatibus, fugiat. Aspernatur commodi, provident illum quos beatae reiciendis qui ad obcaecati id doloremque aperiam voluptatem, quo nesciunt.
            <h5>Visão</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum exercitationem quibusdam eaque sequi eligendi distinctio deserunt adipisci delectus tempore deleniti culpa, excepturi commodi, illo fuga eius odit ex vitae debitis.
            <h5>Valores</h5>          
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus qui ipsa labore rerum, suscipit ut, accusamus tempore odit, fugit atque officia facilis facere error pariatur? Aliquam autem necessitatibus porro quod.  
        </div>
    </section>

    <section id="historia">
        <div class="container">
            <h3>História</h3>

            <p class="text-justify">A K - Store foi criada em 1998 em Novo Horizonte - SP. No dia 11/02/1998 na cidade de Novo Horizonte, Matheus S. Quessada criou a K - Store. 
                Uma loja de roupas para todas as idades, desde crianças até adultos. De início, ficávamos na Rua XV de Novembro nº 777, porém no 
                ano de 2004 precisamos mudar de endereço devido a um problema com o local. Em 2004, a K - Store nos estabelecemos na Rua Trajano Machado nº 147, um 
                local bem localizado no centro da cidade. Desde então, permanecemos nesse endereço, buscando atender sempre os clientes da melhor forma possível.
            </p>

        </div>

    </section>

    <section id="contato">
        <div class="container">
            <h3>Contato</h3>
            <form action="" method="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" required name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="subject">Assunto</label>
                    <input class="form-control" type="text" required name="subject" id="subject">
                </div>
                <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea class="form-control" required name="message" id="message" cols="100" rows="10" style="resize: none;"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" id="enviar" value="Enviar">
                </div>
            </form>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="mx-auto" style="color: grey;">                
                    Todos os direitos reservados - K - Store &copy 2020
                </div>
            </div>
        </div>
    </footer>


    <?php include "./includes/js.inc.php"; ?>
    <script>
               
        
    </script>
</body>
</html>