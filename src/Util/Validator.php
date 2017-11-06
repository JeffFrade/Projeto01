<?php

namespace Classes\Util;

class Validator implements ValidatorInterface
{
    //Método de Validação Simples:
    public static function validate($field, $value, $message, $code)
    {
        $return = 0;
        $classes = ['alert alert-danger alert-dismissible'];

        //Verificando se os Valores Batem:
        if ($field == $value) {
            $return = $code;
            //Exibindo o Erro:
            echo Tags::alertDismissible($classes, $message);
        }

        //Retorno do Código:
        return $return;
    }

    //Método de Validação com Regex:
    public static function validateRegex($field, $regex, $message, $code)
    {
        $return = 0;
        $classes = ['alert alert-danger alert-dismissible'];

        //Validando com o Regex:
        preg_match($regex, $field, $matches);

        //Verificando se o Valor Não Bate com o Regex::
        if (empty($matches)) {
            $return = $code;
            //Exibindo o Código:
            echo Tags::alertDismissible($classes, $message);
        }

        //Retorno do Código:
        return $return;
    }
}