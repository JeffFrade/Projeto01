<?php

namespace Classes\Services;

use Classes\Tables\ProdutoInterface;

class ServiceProduto implements ServiceProdutoInterface
{
    //Atributos:
    private $db;
    private $produto;

    //Método Construtor Para Inicializar os Atributos:
    public function __construct(\PDO $db, ProdutoInterface $produto)
    {
        $this->db = $db;
        $this->produto = $produto;
    }
}
