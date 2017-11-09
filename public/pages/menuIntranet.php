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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Mensagens <b class="caret"></b> <?= ($sMensagem->countMensagem() > 0?'<span class="badge-default">'.$sMensagem->countMensagem().'</span></a>':''); ?>
            <ul class="dropdown-menu message-dropdown">
                <?= $sMensagem->showMensagens(); ?>
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
                <a href="relatorio.php"><i class="fa fa-fw fa-file-excel-o"></i> Relatório de Vendas</a>
            </li>
            <li <?= ($pagina == 'consultarProdutos.php' || $pagina == 'cadastrarProdutos.php' || $pagina == 'ediDelProdutos.php'?'class="active"':'')?>>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Produtos <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="cadastrarProdutos.php"><i class="fa fa-tags"></i> Cadastrar Produto</a>
                    </li>
                    <li>
                        <a href="consultarProdutos.php"><i class="fa fa-search"></i> Consultar Produto</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-fw fa-tag"></i> Categorias</a>
            </li>
            <li <?= ($pagina == 'consultarClientes.php'?'class="active"':'')?>>
                <a href="consultarClientes.php"><i class="fa fa-fw fa-users"></i> Clientes</a>
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
