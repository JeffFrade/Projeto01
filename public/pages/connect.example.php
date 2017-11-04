<?php
    ###############################
    // Renomear Para connect.php //
    ###############################

    //Uso do Namespace de Conexão:
    use Classes\DB\Conn;

    //Criando a Conexão:
    $db = Conn::connect('host_do_host', 'nome_do_banco', 'usuario', 'senha');
