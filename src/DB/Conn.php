<?php

namespace Classes\DB;

class Conn implements ConnInterface
{
    //Método de Conexão:
    public static function connect($dbname, $host, $user, $pass)
    {
        try {
            //Retorno da Conexão (PDO):
            return new \PDO("mysql:dbname={$dbname};host={$host}", $user, $pass);
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }
}