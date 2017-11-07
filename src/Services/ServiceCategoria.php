<?php

namespace Classes\Services;

use Classes\Tables\CategoriaInterface;

class ServiceCategoria implements ServiceCategoriaInterface
{
    //Atributos:
    private $db;
    private $categoria;

    //Método Construtor Para Inicializar as Variáveis (Sempre Passar o Tipo \PDO Para o Parâmetro Correspondente ao Banco de Dados):
    public function __construct(\PDO $db, CategoriaInterface $categoria)
    {
        $this->db = $db;
        $this->categoria = $categoria;
    }

    ##### INSERT #####

    ##### SELECT #####
    //Método que Monta as <option> de um <select>:
    public function options()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT id, categoria FROM categoria";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Executando o Statment:
            $stmt->execute();

            $option = "";

            //Loop de Montagem de <option>:
            while ($dados = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $option.= sprintf('<option value="%s">%s</option>', $dados['id'], $dados['categoria'])."\n";
            }

            //Retorno:
            return $option;
        } catch (\PDOException $ex) {
            //Caso Haja Erros:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    //Método que Monta as Opções do Submenu:
    public function menu($pagina)
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT categoria FROM categoria";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Executando o Statment:
            $stmt->execute();

            $menu = "";

            //Loop de Montagem de <option>:
            while ($dados = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $menu.= sprintf('<li><a href="#">%s</a></li>', $dados['categoria'])."\n";
            }

            //Retorno:
            return $menu;
        } catch (\PDOException $ex) {
            //Caso Haja Erros:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### UPDATE #####

    ##### DELETE #####
}
