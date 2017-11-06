<?php

namespace Classes\Util;

interface TagsInterface
{
    //Montagem de <div>:
    public static function div($classes = [], $content = "");
    //Montagem de Alertas (Dispensáveis):
    public static function alertDismissible($classes = [], $content = "");
    //Montagem de Scripts JavaScript (Simples):
    public static function scriptSimple($type = "", $script);
    //Montagem do Paginador:
    public static function pagination($arr = [], $page);
}
