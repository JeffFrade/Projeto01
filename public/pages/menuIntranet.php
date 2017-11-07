<?php
    //Pegando a Página Atual e Adicionando a Extensão .php:
    $pagina = basename($_SERVER['PHP_SELF'],'.php').'.php';
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="intranet.php">Minha Loja - Intranet</a>
    </div>

    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $_SESSION['usuario']?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-users"></i> Funcionários</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Mensagens <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <h5 class="media-heading"><strong>John Smith</strong>
                        </h5>
                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <h5 class="media-heading"><strong>John Smith</strong>
                        </h5>
                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <h5 class="media-heading"><strong>John Smith</strong>
                        </h5>
                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                    </a>
                </li>
                <li class="message-footer">
                    <a href="#" class="text-center">Ler Todas as Mensagens</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li <?= ($pagina == 'intranet.php'?'class="active"':'')?>>
                <a href="intranet.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Gráficos</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-table"></i> Tabelas</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-file-excel-o"></i> Relatório</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-tags"></i> Produtos</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-users"></i> Clientes</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-shopping-cart"></i> Vendas</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-desktop"></i> Gerenciar o Site</a>
            </li>
        </ul>
    </div>
</nav>