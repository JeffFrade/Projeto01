<?php

namespace Classes\Util;

interface SqlInterface
{
    //Método de Contagem:
    public static function count(\PDO $db, $field, $table);
    //Método de Contagem (com WHERE):
    public static function countWhere(\PDO $db, $field, $table, $whereField, $whereValue);
}
