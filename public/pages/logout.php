<?php
    //Iniciando a Sessão (Caso Não Exista):
    if (!isset($_SESSION)) {
        session_start();
    }

    //Destrói as Seeões:
    unset($_SESSION['cpf']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']);

    //Redireciona Para a Página Acessada:
    header("location: ".$_SERVER['HTTP_REFERER']);
