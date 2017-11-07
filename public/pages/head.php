<?php
    //Autoload:
    require_once '../../vendor/autoload.php';

    //Utilização de Classes em Namespaces:
    use Classes\Tables\Cliente;
    use Classes\Tables\Produto;
    use Classes\Tables\Funcionario;
    use Classes\Services\ServiceCliente;
    use Classes\Services\ServiceProduto;
    use Classes\Services\ServiceFuncionario;

    //Iniciando a Sessão (Caso Não Exista):
    if (!isset($_SESSION)) {
        session_start();
    }

    //Conexão:
    require_once 'connect.php';

    //Classe de Cliente:
    $cliente = new Cliente;

    //Classe de Produto:
    $produto = new Produto;

    //Classe de Funcionário:
    $funcionario = new Funcionario;

    //Serviço de Cliente:
    $sCliente = new ServiceCliente($db, $cliente);

    //Serviço de Produto:
    $sProduto = new ServiceProduto($db, $produto);

    //Serviço de Funcionário:
    $sFuncionario = new ServiceFuncionario($db, $funcionario);
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
    <link href="../img/icon.ico" rel="shortcut icon"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../css/font-awesome.min.css" rel="stylesheet"/>
    <link href="../css/lightbox.min.css" rel="stylesheet"/>
    <link href="../css/sb-admin.css" rel="stylesheet"/>
    <link href="../css/style.min.css" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>