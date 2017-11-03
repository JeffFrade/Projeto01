<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja</title>
    <link href="img/icon.ico" rel="shortcut icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="branco">
<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="index.php" class="navbar-brand">Minha Loja</a>
            </div>

            <div id="navbarCollapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php"> <i class="fa fa-fw fa-home"></i> Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-arrows-v"></i> Produtos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-fw fa-users"></i> Contato</a></li>
                    <li><a role="button" data-toggle="modal" data-target="#login"><i class="fa fa-fw fa-user"></i> Login</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-shopping-cart"></i> Carrinho <span class="badge-default">3</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

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
            <div class="row">
                <h2 class="text-left">Vitrine</h2>
                <hr/>
                <div class="col-xs-6 col-md-3">
                    <div class="well">
                        <h4 class="text-center">Notebook Lenovo 19 Polegadas</h4>
                        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4Ydot19n2GU1IyqSWkoQEmyjLS-5G0t_jf4t6Iqs7A-9KIwhA" class="img-circle img-responsive img-vitrine" title="Notebook Lenovo 19 Polegadas" alt="Notebook Lenovo 19 Polegadas"/></a>
                        <strong><p class="text-center text-success">R$ 1.800,99</p></strong>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="well">
                        <h4 class="text-center">Notebook Lenovo 19 Polegadas</h4>
                        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4Ydot19n2GU1IyqSWkoQEmyjLS-5G0t_jf4t6Iqs7A-9KIwhA" class="img-circle img-responsive img-vitrine" title="Notebook Lenovo 19 Polegadas" alt="Notebook Lenovo 19 Polegadas"/></a>
                        <strong><p class="text-center text-success">R$ 1.800,99</p></strong>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="well">
                        <h4 class="text-center">Notebook Lenovo 19 Polegadas</h4>
                        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4Ydot19n2GU1IyqSWkoQEmyjLS-5G0t_jf4t6Iqs7A-9KIwhA" class="img-circle img-responsive img-vitrine" title="Notebook Lenovo 19 Polegadas" alt="Notebook Lenovo 19 Polegadas"/></a>
                        <strong><p class="text-center text-success">R$ 1.800,99</p></strong>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="well">
                        <h4 class="text-center">Notebook Lenovo 19 Polegadas</h4>
                        <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4Ydot19n2GU1IyqSWkoQEmyjLS-5G0t_jf4t6Iqs7A-9KIwhA" class="img-circle img-responsive img-vitrine" title="Notebook Lenovo 19 Polegadas" alt="Notebook Lenovo 19 Polegadas"/></a>
                        <strong><p class="text-center text-success">R$ 1.800,99</p></strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <h4 class="text-center">Minha Loja - <?= date('Y')?> - Todos Direitos Reservados</h4>
</footer>

<?php
    require_once 'pages/modal.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/vue.min.js"></script>
<script src="js/app.min.js"></script>
<!--<script src="js/script.min.js"></script>-->
</body>
</html>