<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K - Store</title>
    <style>
        ul span {
            font-weight: bold;
        }
    </style>

    <?php include "../includes/css.inc.php"; ?>

</head>
<body>   
    <?php include "../includes/menu.inc.php"; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/roupa1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/roupa2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/roupa3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section id="empresa">
        <div class="container">
            <h3>Empresa</h3>
                <h4>K - Store</h4>
            <h5>Missão</h5>
            <p class="text-justify">
                Nossa missão é buscar levar sempre o melhor atendimento ao cliente, fornecendo um serviço de qualidade e com um preço justo.
            </p> 
            <h5>Visão</h5>
            <p class="text-justify">
                Ser a empresa número 1 na cidade de Novo Horizonte com diversas lojas e o melhor atendimento do mercado.
            </p> 
            <h5>Valores</h5>          
                <ul>
                    <li> <span>Satisfação do cliente:</span>  Ele é a razão da existência de qualquer negócio.</li>
                    <li> <span>Valorização e respeito às pessoas:</span>  São as pessoas o grande diferencial que torna tudo possível.</li>
                    <li> <span>Atuar como parte integrante da empresa:</span>  Juntos nossa marca fica muito mais forte.</li>
                    <li> <span>Responsabilidade social:</span>  É a única forma de crescer em uma sociedade mais justa.</li>
                    <li> <span>Respeito ao Meio Ambiente:</span>  É isso que nos dá a perspectiva do amanhã.</li>
                </ul>


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
    <!----------------------------------------------CONTATO------------------------------------------------------ -->
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

    <a href="/produtos">aaaa</a>

    <?php include "../includes/js.inc.php"; ?>
    <script>
               
        
    </script>
</body>
</html>