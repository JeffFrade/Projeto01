<?php

namespace Classes\Tables;

class Produto implements ProdutoInterface
{
    //Esta Classe Possui Somente Getters e Setters
    private $cod;
    private $item;
    private $categoria;
    private $descricao;
    private $preco;
    private $vitrine;
    private $qtde;
    private $imagem;

    public function getCod()
    {
        return $this->cod;
    }

    public function setCod($cod)
    {
        $this->cod = $cod;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem($item)
    {
        $this->item = $item;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getVitrine()
    {
        return $this->vitrine;
    }

    public function setVitrine($vitrine)
    {
        $this->vitrine = $vitrine;
    }

    public function getQtde()
    {
        return $this->qtde;
    }

    public function setQtde($qtde)
    {
        $this->qtde = $qtde;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }
}
