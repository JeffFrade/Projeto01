<?php

namespace Classes\Tables;

class Categoria implements CategoriaInterface
{
    //Esta Classe Possui Somente Getters e Setters
    private $id;
    private $categoria;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
}
