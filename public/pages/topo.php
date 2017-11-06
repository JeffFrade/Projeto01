<?php
    //Autoload:
    require_once '../../vendor/autoload.php';

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
