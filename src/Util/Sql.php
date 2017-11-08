<?php

namespace Classes\Util;

class Sql
{
    //Método de Contagem:
    public static function count(\PDO $db, $field, $table)
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT COUNT({$field}) FROM {$table}";

            //Criando o Statment:
            $stmt = $db->prepare($sql);

            //Executando o Statment:
            $stmt->execute();

            //Jogando os Dados num Array:
            $dados = $stmt->fetch(\PDO::FETCH_ASSOC);

            //Retorno:
            return $dados['COUNT('.$field.')'];
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }
}