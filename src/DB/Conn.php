<?php

namespace Classes\DB;

class Conn implements ConnInterface
{
    //Método de Conexão:
    public static function connect($host, $dbname, $user, $pass)
    {
        try {
            //Retorno da Conexão (PDO):
            return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $pass);
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }
}