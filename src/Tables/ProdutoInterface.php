<?php

namespace Classes\Tables;

interface ProdutoInterface
{
    public function getCod();
    public function setCod($cod);
    public function getItem();
    public function setItem($item);
    public function getCategoria();
    public function setCategoria($categoria);
    public function getDescricao();
    public function setDescricao($descricao);
    public function getPreco();
    public function setPreco($preco);
    public function getVitrine();
    public function setVitrine($vitrine);
    public function getQtde();
    public function setQtde($qtde);
    public function getImagem();
    public function setImagem($imagem);
}
