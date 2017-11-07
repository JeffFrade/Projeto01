<?php
    require_once 'head.php';
?>

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
require_once 'menu.php';
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
                            <a href="#"><img src="../img/banner01.jpg" class="banner" title="Banner 01" alt="Banner 01"></a>
                            <div class="carousel-caption">
                                <h3>Banner 01</h3>
                            </div>
                        </div>

                        <div class="item">
                            <a href="#"><img src="../img/banner02.jpg" class="banner" title="Banner 02" alt="Banner 02"></a>
                            <div class="carousel-caption">
                                <h3>Banner 02</h3>
                            </div>
                        </div>

                        <div class="item">
                            <a href="#"><img src="../img/banner03.jpg" class="banner" title="Banner 03" alt="Banner 03"></a>
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