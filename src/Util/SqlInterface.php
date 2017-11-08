<?php

namespace Classes\Util;

interface SqlInterface
{
    //Método de Contagem:
    public static function count(\PDO $db, $field, $table);
}