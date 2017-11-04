<?php

namespace Classes\DB;

interface ConnInterface
{
    //Método de Conexão:
    public static function connect($host, $dbname, $user, $pass);
}