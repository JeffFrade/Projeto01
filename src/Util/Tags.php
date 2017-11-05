<?php

namespace Classes\Util;

class Tags implements TagsInterface
{
    //Montagem de <div>:
    public static function div($classes = [], $content = "")
    {
        $class = implode(' ', $classes);
        return sprintf('<div class="%s">%s</div>', $class, $content);
    }

    //Montagem de Alertas (Dispensáveis):
    public static function alertDismissible($classes = [], $content = "")
    {
        $class = implode(' ', $classes);
        return sprintf('<div class="%s">%s<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>', $class, $content);
    }

    //Montagem de Scripts JavaScript (Simples):
    public static function scriptSimple($type = "", $script)
    {
        return sprintf('<script type="%s">%s</script>', $type, $script);
    }
}
