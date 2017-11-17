<?php

namespace Classes\Services;

use Classes\Tables\CategoriaInterface;
use Classes\Util\Validator;
use Classes\Util\Tags;

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
    //Método de Inserção de Categorias:
    public function insertCategoria()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "INSERT INTO categoria(categoria) VALUES(:categoria)";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            $err = 0;

            //Validação:
            $err+= Validator::validate($this->categoria->getCategoria(), "", "Preencha o Campo Categoria Corretamente", 1);

            //Verificando Se Há Erros:
            if ($err != 0) {
                //Caso Haja:
                return false;
            }

            //Adicionando as Variáveis:
            $stmt->bindValue(':categoria', $this->categoria->getCategoria());

            //Verificando se o Statment Foi Executado:
            if ($stmt->execute()) {
                //Caso Seja:
                $classes = ['alert alert-success'];

                //Retorno:
                return Tags::alertDismissible($classes, "Categoria Cadastrada com Sucesso!");
            }

            //Caso Não Seja:
            $classes = ['alert alert-danger'];

            //Retorno:
            return Tags::alertDismissible($classes, "Erro ao Cadastrar Categoria");
        } catch (\PDOException $ex) {
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

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
                $option.= sprintf('<option value="%s" '.($this->categoria->getId() == $dados['id']?'class="selected"':'').'>%s</option>', $dados['id'], $dados['categoria'])."\n";
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

    //Método de Retorno das Categorias na Tabela:
    public function selectCategoria()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT id, categoria FROM categoria";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Executando o Statment:
            $stmt->execute();

            $table = "";

            //Loop de Montagem da Tabela:
            while ($dados = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $table.= '<tr>';
                $table.= '<td class="text-center">'.$dados['categoria'].'</td>';
                $table.= '<td class="text-center"><a href="categorias.php?id='.$dados['id'].'" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search"></span></a></td>';
                $table.= '</tr>';
            }

            //Retorno:
            return $table;
        } catch (\PDOException $ex) {
            //Caso Haja Erros:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    //Método de Filtro de Categorias:
    public function findCategoria()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT id, categoria FROM categoria WHERE id = :id";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Adicionando as Variáveis:
            $stmt->bindValue(':id', $this->categoria->getId());

            //Executando o Statment:
            $stmt->execute();

            //Jogando os Dados num Array:
            $dados = $stmt->fetch(\PDO::FETCH_ASSOC);

            //Passando os Dados Para os Setters:
            $this->categoria->setId($dados['id']);
            $this->categoria->setCategoria($dados['categoria']);
        } catch (\PDOException $ex) {
            //Caso Haja Erros:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### UPDATE #####
    //Método de Atualização de Categoria:
    public function updateCategoria()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "UPDATE categoria SET categoria = :categoria WHERE id = :id";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            $err = 0;

            //Validação:
            $err+= Validator::validate($this->categoria->getCategoria(), "", "Preencha o Campo Categoria Corretamente", 1);

            //Verificando Se Há Erros:
            if ($err != 0) {
                //Caso Haja:
                return false;
            }

            //Adicionando as Variáveis:
            $stmt->bindValue(':categoria', $this->categoria->getCategoria());
            $stmt->bindValue(':id', $this->categoria->getId());

            //Verificando se o Statment Foi Executado:
            if ($stmt->execute()) {
                //Caso Seja:
                $classes = ['alert alert-success'];

                //Retorno:
                return Tags::alertDismissible($classes, "Categoria Editada com Sucesso!");
            }

            //Caso Não Seja:
            $classes = ['alert alert-danger'];

            //Retorno:
            return Tags::alertDismissible($classes, "Erro ao Editar Categoria");
        } catch (\PDOException $ex) {
            //Caso Haja Erros:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### DELETE #####
    //Método de Exclusão de Categoria:
    public function deleteCategoria()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "DELETE FROM categoria WHERE id = :id";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Adicionando as Variáveis:
            $stmt->bindValue(':id', $this->categoria->getId());;

            //Verificando se o Statment Foi Executado:
            if ($stmt->execute()) {
                //Caso Seja:
                $classes = ['alert alert-success'];

                //Retorno:
                return Tags::alertDismissible($classes, "Categoria Excluída com Sucesso!");
            }

            //Caso Não Seja:
            $classes = ['alert alert-danger'];

            //Retorno:
            return Tags::alertDismissible($classes, "Erro ao Excluir Categoria");
        } catch (\PDOException $ex) {
            //Caso Haja Erros:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }
}
