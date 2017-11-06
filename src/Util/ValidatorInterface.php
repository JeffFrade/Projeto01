<?php

namespace Classes\Util;

interface ValidatorInterface
{
    //Método de Validação Simples:
    public static function validate($field, $value, $message, $code);
    //Método de Validação com Regex:
    public static function validateRegex($field, $regex, $message, $code);
}
