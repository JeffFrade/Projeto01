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

    //Método que Monta a Visualização do Produto:
    public static function paginaProduto($dados = [])
    {
        $view = "";

        //Título do Item:
        $view.= '<h2 class="text-center">'.$dados['item'].'</h2>'.PHP_EOL;
        $view.= "<hr/>".PHP_EOL;

        //Imagem:
        $view.= sprintf('<a href="%s" data-lightbox="%s"><img src="%s" class="centro img-responsive img-rounded" title="%s" alt="%s"></a>', $dados['imagem'], $dados['item'], $dados['imagem'], $dados['item'], $dados['item']).PHP_EOL;

        //Descrição:
        $view.= '<strong><i class="fa fa-comment"></i> Descrição: </strong><p class="text-justify">'.$dados['descricao'].'</p>'.PHP_EOL;
        $view.= "<hr/>".PHP_EOL;

        //Categoria:
        $view.= "<strong><i class='fa fa-tag'></i> Categoria: </strong>".$dados['categoria'].PHP_EOL;
        $view.= "<br/>".PHP_EOL;

        //Preço:
        $view.= '<strong><i class="fa fa-money"></i> Preço: <span class="text-success">R$ '.number_format($dados['preco'], 2,',', '.')."</span></strong>".PHP_EOL;
        $view.= '<hr/>'.PHP_EOL;

        //Carrinho:
        $view.= '<form id="frmCarrinho" name="frmCarrinho" method="post" action="">'.PHP_EOL;
        $view.= '<button class="btn btn-primary" type="submit" id="btnCarrinho" name="btnCarrinho"><i class="fa fa-cart-plus"></i> Adicionar ao Carrinho</button>'.PHP_EOL;
        $view.= '</form>'.PHP_EOL;

        //Retorno:
        return $view;
    }
}
