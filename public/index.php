<?php
    //Autoload:
    require_once '../vendor/autoload.php';

    //Utilização de Classes em Namespaces:
    use Classes\Tables\Cliente;
    use Classes\Tables\Produto;
    use Classes\Services\ServiceCliente;
    use Classes\Services\ServiceProduto;

    //Iniciando a Sessão (Caso Não Exista):
    if (!isset($_SESSION)) {
        session_start();
    }

    //Conexão:
    require_once 'pages/connect.php';

    //Classe de Cliente:
    $cliente = new Cliente;

    //Classe de Produto:
    $produto = new Produto;

    //Serviço de Cliente:
    $sCliente = new ServiceCliente($db, $cliente);

    //Serviço de Produto:
    $sProduto = new ServiceProduto($db, $produto);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Minha Loja (Estudo)"/>
        <meta name="keywords" content="PHP,HTML,CSS,SASS,LESS,JavaScript,SQL,Bootstrap,Vue,Chart,Gulp"/>
        <meta name="author" content="Jefferson Frade"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Minha Loja</title>
        <link href="img/icon.ico" rel="shortcut icon"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/lightbox.min.css" rel="stylesheet"/>
        <link href="css/sb-admin.css" rel="stylesheet"/>
        <link href="css/style.min.css" rel="stylesheet"/>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="branco" id="app">
        <!-- Facebook: -->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- Fim Facebook -->
        <?php
            //Menu:
            require_once 'pages/menu.php';
        ?>

        <main>
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="img/banner01.jpg" class="banner" title="Banner 01" alt="Banner 01"></a>
                                    <div class="carousel-caption">
                                        <h3>Banner 01</h3>
                                    </div>
                                </div>

                                <div class="item">
                                    <a href="#"><img src="img/banner02.jpg" class="banner" title="Banner 02" alt="Banner 02"></a>
                                    <div class="carousel-caption">
                                        <h3>Banner 02</h3>
                                    </div>
                                </div>

                                <div class="item">
                                    <a href="#"><img src="img/banner03.jpg" class="banner" title="Banner 03" alt="Banner 03"></a>
                                    <div class="carousel-caption">
                                        <h3>Banner 03</h3>
                                    </div>
                                </div>
                            </div>

                            <a class="left carousel-control" href="#carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="col-lg-8">
                        <h2 class="text-left">Vitrine</h2>
                        <hr/>
                        <?= $sProduto->selectVitrine('vitrine', 'S', 'index.php'); ?>
                    </div>

                    <?php
                        //Div da Direita:
                        require_once 'pages/direita.php'
                    ?>
                </div>
            </section>
        </main>

        <?php
            //Rodapé:
            require_once 'pages/rodape.php';
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/vue.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/script.min.js"></script>

        <?php
            //Modal de Login:
            require_once 'pages/modal.php';
        ?>
    </body>
</html>