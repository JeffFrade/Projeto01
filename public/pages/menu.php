<?php
    //Pegando a Página Atual e Adicionando a Extensão .php:
    $pagina = basename($_SERVER['PHP_SELF'],'.php').'.php';
?>
<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a href="<?= ($pagina == 'index.php'?"index.php":"../index.php")?>" class="navbar-brand">Minha Loja</a>
                    </div>
                </div>

                <div class="col-sm-10">
                    <div id="navbarCollapse" class="navbar-collapse collapse">
                        <form class="navbar-form navbar-left" id="frmFiltro" name="frmFiltro" method="get" action="">
                            <div class="input-group input-menu">
                                <input type="text" id="txtBuscar" name="txtBuscar" placeholder="Buscar" class="form-control">
                                <span class="input-group-btn">
                                        <button type="submit" id="btnFiltro" name="btnFiltro" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                                    </span>
                            </div>
                        </form>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="<?= ($pagina == 'index.php'?"active":"")?>"><a href="<?= ($pagina == 'index.php'?"index.php":"../index.php")?>"> <i class="fa fa-fw fa-home"></i> Home</a></li>
                            <li class="dropdown <?=($pagina == 'visualizarProduto.php'?"active":"")?>">
                                <a href="<?= ($pagina == 'index.php'?"pages/categorias.php":"categorias.php")?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-arrows-v"></i> Categorias <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?= $sCategoria->menu($pagina); ?>
                                </ul>
                            </li>
                            <li class="<?= ($pagina == 'contato.php'?"active":"")?>"><a href="<?= ($pagina == 'index.php'?"pages/contato.php":"contato.php")?>"><i class="fa fa-fw fa-users"></i> Contato</a></li>
                            <?php if(!isset($_SESSION['nome']) || empty($_SESSION['nome'])): ?>
                                <li class="<?= ($pagina == 'cadastroCliente.php'?"active":"")?>"><a role="button" data-toggle="modal" data-target="#login"><i class="fa fa-fw fa-user"></i> Login</a></li>
                            <?php else: ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?= $_SESSION['nome'] ?> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-pencil-square-o"></i> Alterar Dados</a></li>
                                        <li><a href="#"><i class="fa fa-history"></i> Histórico</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fa fa-fw fa-shopping-cart"></i> Carrinho <span class="badge-primary">3</span></a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?= ($pagina == 'index.php'?"pages/logado.php":"logado.php")?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
    </nav>
</header>