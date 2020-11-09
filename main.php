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
        .showcase .showcase-text {
            padding: 3rem;
        }

        .showcase .showcase-img {
            min-height: 30rem;
            background-size: cover;
        }
        @media (min-width: 768px) {
            .showcase .showcase-text {
                padding: 7rem;
            }
        }
    </style>

    <?php include "../includes/css.inc.php"; ?>

</head>
<body>   
    <?php include "../includes/menu.inc.php"; ?>

        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.imgur.com/cp9ap65.jpg" class="d-block w-50" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://i.imgur.com/jYPeFCw.jpg" class="d-block carousel" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://i.imgur.com/m8dLRQG.jpg" class="d-block carousel" alt="...">
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
        </div> -->


        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(https://i.imgur.com/pLatZqC.png);">
                    </div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Calças</h2>
                        <p class="lead mb-0">As melhores marcas de calças e bermudas, temos Colcci, Levi's, Calvin Klein, Diesel, Balmain!</p>
                    </div>
                </div>

                <!-- ----------------------------------- -->

                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url(https://i.imgur.com/yiaMcbN.jpg);">
                    </div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Blusas</h2>
                        <p class="lead mb-0">As melhores marcas de blusas, temos Tommy, Gucci, Levi's, Zara, Fila!</p>
                    </div>
                </div>

                <!-- ----------------------------------- -->

                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(https://i.imgur.com/jhoY96t.jpg);">
                    </div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Camisas</h2>
                        <p class="lead mb-0">As melhores marcas de camisas, temos Dudalina, Levi's, Calvin Klein, Diesel, Tommy!</p>
                    </div>
                </div>
            </div>
        </section>

        <!----------------------------------------------CARDS------------------------------------------------------ -->
        <div class="container" style="margin-top: 40px; margin-bottom: 40px;">
            <p style="font-size: 25px;">Veja alguns comentários de nossos clientes</p>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem; height: 18rem;">
                        <div class="card-body" style="text-align: center;">
                            <img src="https://i.imgur.com/ZHxpyJb.jpg" alt="Luciana" style="width: 11rem; height: 8rem; margin-bottom: 10px;">
                            <p style="font-weight: bold; text-align: center;">Luciana G.</p>
                            <p class="card-text" style="text-align: justify;">Encontrei o look que eu buscava para o fim de ano.</p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card" style="width: 18rem; height: 18rem;">
                        <div class="card-body" style="text-align: center;">
                            <img src="https://i.imgur.com/oJd5sLo.jpg" alt="Marcos" style="width: 11rem; height: 8rem; margin-bottom: 10px;">
                            <p style="font-weight: bold; text-align: center;">Marcos A.</p>
                            <p class="card-text" style="text-align: justify;">Minhas camisas são todas compradas na K - Store, a qualidade é surpreendente!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem; height: 18rem;">
                        <div class="card-body" style="text-align: center;">
                            <img src="https://i.imgur.com/mBgs757.jpg" alt="Gabriel" style="width: 11rem; height: 8rem; margin-bottom: 10px;">
                            <p style="font-weight: bold; text-align: center;">Gabrie T.</p>
                            <p class="card-text" style="text-align: justify;">Encontrei tudo que eu precisava para me vestir para um encontro, recomendo!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------------------------------CARDS------------------------------------------------------ -->

    <?php include '../includes/contato.inc.php' ?>


    <footer>
        <div class="container">
            <div class="row">
                <div class="mx-auto" style="color: grey;">                
                    Todos os direitos reservados - K - Store &copy 2020
                </div>
            </div>
        </div>
    </footer>

    <?php include "../includes/js.inc.php"; ?>
    <script>
               
        
    </script>
</body>
</html>