<?php
    //Autoload:
    require_once '../vendor/autoload.php';

    //Utilização de Classes em Namespaces:
    use Classes\Tables\Cliente;
    use Classes\Services\ServiceCliente;

    //Iniciando a Sessão (Caso Não Exista):
    if (!isset($_SESSION)) {
        session_start();
    }

    //Conexão:
    require_once 'pages/connect.php';

    //Classe de Cliente:
    $cliente = new Cliente;

    //Serviço de Cliente:
    $sCliente = new ServiceCliente($db, $cliente);
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
                    <div class="col-md-8">
                        <h2 class="text-left">Vitrine</h2>
                        <hr/>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="well">
                                    <h4 class="text-center">Notebook Lenovo 19 Polegadas</h4>
                                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4Ydot19n2GU1IyqSWkoQEmyjLS-5G0t_jf4t6Iqs7A-9KIwhA" class="img-circle img-responsive img-vitrine" title="Notebook Lenovo 19 Polegadas" alt="Notebook Lenovo 19 Polegadas"/></a>
                                    <strong><i class="fa fa-money"></i> Preço: <span class="text-success">R$ 1.800,99</span></strong>
                                    <a href="#" role="button" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Clique Para Ver Detalhes</a>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="well">
                                    <h4 class="text-center">Notebook Lenovo 19 Polegadas</h4>
                                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4Ydot19n2GU1IyqSWkoQEmyjLS-5G0t_jf4t6Iqs7A-9KIwhA" class="img-circle img-responsive img-vitrine" title="Notebook Lenovo 19 Polegadas" alt="Notebook Lenovo 19 Polegadas"/></a>
                                    <strong><i class="fa fa-money"></i> Preço: <span class="text-success">R$ 1.800,99</span></strong>
                                    <a href="#" role="button" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Clique Para Ver Detalhes</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="well">
                                    <h4 class="text-center">Notebook Lenovo 19 Polegadas</h4>
                                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4Ydot19n2GU1IyqSWkoQEmyjLS-5G0t_jf4t6Iqs7A-9KIwhA" class="img-circle img-responsive img-vitrine" title="Notebook Lenovo 19 Polegadas" alt="Notebook Lenovo 19 Polegadas"/></a>
                                    <strong><i class="fa fa-money"></i> Preço: <span class="text-success">R$ 1.800,99</span></strong>
                                    <a href="#" role="button" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Clique Para Ver Detalhes</a>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="well">
                                    <h4 class="text-center">Notebook Lenovo 19 Polegadas</h4>
                                    <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4Ydot19n2GU1IyqSWkoQEmyjLS-5G0t_jf4t6Iqs7A-9KIwhA" class="img-circle img-responsive img-vitrine" title="Notebook Lenovo 19 Polegadas" alt="Notebook Lenovo 19 Polegadas"/></a>
                                    <strong><i class="fa fa-money"></i> Preço: <span class="text-success">R$ 1.800,99</span></strong>
                                    <a href="#" role="button" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Clique Para Ver Detalhes</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <nav class="text-center">
                                <ul class="pagination">
                                    <li class="disabled">
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <?php
                        //Div da Direita:
                        require_once 'pages/direita.php'
                    ?>
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