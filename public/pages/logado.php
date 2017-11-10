<?php
    //Verificação de Login:
    if (!isset($_SESSION['usuario']) || !isset($_SESSION['perfil'])) {
        header("location: login.php");
    }
