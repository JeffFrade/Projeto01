<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site</title>
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

                <a href="index.php" class="navbar-brand">Site 01</a>
            </div>

            <div id="navbarCollapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html"> <i class="fa fa-fw fa-home"></i> Home</a></li>
                    <li><a href="pages/produtos.html"><i class="fa fa-fw fa-shopping-cart"></i> Produtos</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-users"></i> Contato</a></li>
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
    </section>
</main>

<footer>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lightbox.min.js"></script>
</body>
</html>