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
}