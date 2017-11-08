<?php

namespace Classes\Util;

class Strings implements StringsInterface
{
    //Método Para Exibir as Mensagens Grnades (Mostrando Apenas o Começo):
    public static function mensagens($msg, $limite = 25)
    {
        $str = "";

        //Pega o Tamanho da String Baseado na Mensagem:
        $tamanho = strlen($msg);

        //Verifica se Tem mais de 25 Caractéres:
        if ($tamanho >= $limite) {
            //Caso Tenha, Atribui 25 ao Tamanho:
            $tamanho = $limite;
        }

        //Pega a Parte da String:
        $str = substr($msg, 0, $tamanho);;

        //Verifica se Tem mais de 25 Caractéres:
        if ($tamanho >= $limite) {
            //Caso Tenha, Atribui 25 ao Tamanho:
            $str.= "...";
        }

        //Retorna a Mensagem:
        return $str;
    }
}
