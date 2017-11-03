<?php

namespace Classes\DB;

interface ConnInterface
{
    //Método de Conexão:
    public static function connect($dbname, $host, $user, $pass);
}