<?php

namespace Classes\Services;

interface ServiceProdutoInterface
{
    ##### INSERT #####

    ##### SELECT #####
    //Método que Retorna os Produtos da Vitrine:
    public function selectVitrine($field, $value, $page);
    //Método que Monta a Página de Visualização do Produto:
    public function mountVisualizacao();

    ##### UPDATE #####

    ##### DELETE #####
}
