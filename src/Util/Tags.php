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

    //Montagem do Paginador:
    public static function pagination($arr = [], $page)
    {
        //Cria Linha (row):
        $paginador = '<div class="row">'.PHP_EOL;

        //Centraliza a <nav>:
        $paginador.= '<nav class="text-center">'.PHP_EOL;

        //Cria o Paginador:
        $paginador.= '<ul class="pagination">'.PHP_EOL;

        //Botão de Anterior:
        $paginador.= '<li class="'.($arr['pagina'] <= 1?"disabled":"").'">'.PHP_EOL;
        $paginador.= '<a href="'.$page.'?pag='.$arr['anterior'].'" aria-label="Previous" class="'.($arr['pagina'] <= 1?"disabled":"").'>'.PHP_EOL;
        $paginador.= '<span aria-hidden="true">&laquo;</span>'.PHP_EOL;
        $paginador.= '</a>'.PHP_EOL;
        $paginador.= '</li>'.PHP_EOL;

        //Loop do Paginador:
        for ($i = 1; $i <= $arr['numPags']; $i++) {
            $paginador.= '<li class="'.($arr['pagina'] == $i?"active":"").'"><a href="'.$page.'?pag='.$i.'" >'.$i.'</a></li>'.PHP_EOL;
        }

        //Botão de Próximo:
        $paginador.= '<li class="'.($arr['pagina'] >= $arr['numPags']?"disabled":"").'">'.PHP_EOL;
        $paginador.= '<a href="'.$page.'?pag='.$arr['proxima'].'" aria-label="Next" '.($arr['pagina'] >= $arr['numPags']?"disabled":"").'>'.PHP_EOL;
        $paginador.= '<span aria-hidden="true">&raquo;</span>'.PHP_EOL;
        $paginador.= '</a>'.PHP_EOL;
        $paginador.= '</li>'.PHP_EOL;

        //Finaliza o Paginador:
        $paginador.= '</ul>'.PHP_EOL;

        //Finaliza a <nav>:
        $paginador.= '</nav>'.PHP_EOL;

        //Finaliza a Linha (row):
        $paginador.= '</div>'.PHP_EOL;

        //Retorno:
        return $paginador;
    }
}
