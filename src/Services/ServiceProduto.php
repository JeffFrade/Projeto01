<?php

namespace Classes\Services;

use Classes\Tables\ProdutoInterface;
use Classes\Util\Tags;
use Classes\Util\Sql;
use Classes\Util\Validator;

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

    ##### INSERT #####
    //Método de Inserção de Produtos:
    public function insertProduto()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "INSERT INTO produtos(item, categoria, descricao, preco, vitrine, qtde, imagem) VALUES(:item, :categoria, :descricao, :preco, :vitrine, :qtde, :imagem)";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            $err = 0;

            //Validações:
            $err += Validator::validate($this->produto->getItem(), "", "Preencha o Campo Item Corretamente", 1);
            $err += Validator::validate($this->produto->getDescricao(), "", "Preencha o Campo Descrição Corretamente", 1);
            $err += Validator::validateRegex($this->produto->getPreco(), "/^[\d]*\.[\d]{2}/", "Preencha o Campo Preço Corretamente", 2);
            $err += Validator::validate($this->produto->getQtde(), "", "Preencha o Campo Quantidade Corretamente", 2);
            $err += Validator::validate($this->produto->getImagem(), "", "Preencha o Campo Imagem Corretamente", 1);

            //Verificando se Há Erros:
            if ($err != 0) {
                //Caso Haja:
                return false;
            }

            //Adicionando os Parâmetros:
            $stmt->bindValue(':item', $this->produto->getItem());
            $stmt->bindValue(':categoria', $this->produto->getCategoria());
            $stmt->bindValue(':descricao', $this->produto->getDescricao());
            $stmt->bindValue(':preco', $this->produto->getPreco());
            $stmt->bindValue(':vitrine', $this->produto->getVitrine());
            $stmt->bindValue(':qtde', $this->produto->getQtde());
            $stmt->bindValue(':imagem', $this->produto->getImagem());

            //Verificando se o Statment Foi Executado:
            if ($stmt->execute()) {
                //Caso Seja:
                $classes = ['alert alert-success'];

                return Tags::alertDismissible($classes, "Produto Cadastrado com Sucesso!");
            }

            //Caso Não Seja:
            $classes = ['alert alert-danger'];

            return Tags::alertDismissible($classes, "Erro ao Cadastrar Produto");

        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### SELECT #####
    //Método que Retorna os Produtos da Vitrine:
    public function selectVitrine($field, $value, $page)
    {
        //Tratamento de Erros:
        try {
            //Array com os Valores do Paginador:
            $arr = $this->paginador($field, $value);

            //Query SQL:
            $sql = "SELECT cod, item, preco, imagem FROM produtos WHERE vitrine = 'S' LIMIT {$arr['inicio']}, {$arr['reg']}";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Executando o Statment:
            $stmt->execute();

            //Contador de Linhas:
            $row = 0;

            //Cria uma Linha (row):
            $vitrine = '<div class="row">'.PHP_EOL;

            //Loop de Exibição:
            while ($dados = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                //Verifica se uma Linha Já Possui 2 Registros:
                if ($row % 2 == 0 && $row != 0) {
                    //Caso Possua:
                    //Finaliza a Linha: (row):
                    $vitrine.= '</div>';
                    $vitrine.= "\n";
                    //Começa uma Nova Linha (row):
                    $vitrine.= '<div class="row">';
                }

                //Cria a Coluna (col-sm-6):
                $vitrine .= '<div class="col-sm-6">'.PHP_EOL;

                //Cria o Fundo Cinza (well):
                $vitrine .= '<div class="well">'.PHP_EOL;

                //Título do Produto:
                $vitrine .= '<h4 class="text-center">' . $dados['item'] . '</h4>'.PHP_EOL;

                //Imagem do Produto:
                $vitrine .= '<a href="'.$dados['imagem'].'" data-lightbox="'.$dados['cod'].'"><img src="' . $dados['imagem'] . '" class="img-circle img-responsive img-vitrine" title="' . $dados['item'] . '" alt="' . $dados['item'] . '"/></a>'.PHP_EOL;

                //Preço do Produto:
                $vitrine .= '<strong><i class="fa fa-money"></i> Preço: <span class="text-success">R$ ' . number_format($dados['preco'], 2,',', '.') . '</span></strong>'.PHP_EOL;

                //Botão de Detalhes:
                $vitrine .= '<a href="pages/visualizarProduto.php?cod='.$dados['cod'].'" role="button" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Clique Para Ver Detalhes</a>'.PHP_EOL;

                //Finaliza o Fundo Cinza (well);
                $vitrine .= '</div>'.PHP_EOL;

                //Finaliza a Coluna (col-sm-6):
                $vitrine .= '</div>'.PHP_EOL;

                $vitrine.= "\n";

                $row++;
            }

            //Finaliza a Linha (row)
            $vitrine.= '</div>'.PHP_EOL;
            $vitrine.= "\n";

            //Monta o Paginador:
            $paginador = Tags::pagination($arr, $page);

            $vitrine.= $paginador;

            //Retorno:
            return $vitrine;
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    //Método do Paginador:
    private function paginador($field, $value)
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT COUNT(cod) FROM produtos WHERE {$field} = :{$field}";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Adicionando as Variáveis:
            $stmt->bindValue(':'.$field, $value);

            //Executando o Statment:
            $stmt->execute();

            //Jogando o Dado num Array Associativo:
            $dados = $stmt->fetch(\PDO::FETCH_ASSOC);

            //Total de Registros Por Página:
            $reg = 4;


            //Número de Páginas:
            $numPags = ceil($dados['COUNT(cod)']/$reg);

            //Verificando em Qual Página Está:
            if (isset($_GET['pag'])) {
                $pagina = $_GET['pag'];
            } else {
                $pagina = 1;
            }

            //Próxima Página:
            $proxima = $pagina +1;
            //Página Anterior
            $anterior = $pagina -1;

            $inicio = ($reg * $pagina) - $reg;

            //Array de Retorno:
            $ret = array('inicio' => $inicio, 'reg' => $reg, 'pagina' => $pagina, 'numPags' => $numPags, 'anterior' => $anterior, 'proxima' => $proxima);

            //Retorno:
            return $ret;
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    //Método que Monta a Página de Visualização do Produto:
    public function mountVisualizacao()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT produtos.item, categoria.categoria, produtos.descricao, produtos.preco, produtos.qtde, produtos.imagem FROM produtos LEFT JOIN categoria ON categoria.id = produtos.categoria WHERE produtos.cod = :cod";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Adicionando as Variáveis:
            $stmt->bindValue(':cod', $this->produto->getCod());

            //Executando o Statment:
            $stmt->execute();

            //Jogando os Dados em um Array Associativo:
            $dados = $stmt->fetch(\PDO::FETCH_ASSOC);

            //Retorno da Visualização:
            return Tags::paginaProduto($dados);
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    //Método Contador de Produtos:
    public function countProduto()
    {
        return Sql::count($this->db, 'item', 'produtos');
    }

    //Método de Retorno em Tabela dos Produtos:
    public function selectProduto()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT produtos.cod, produtos.item, categoria.categoria, produtos.preco, produtos.qtde FROM produtos LEFT JOIN categoria ON produtos.categoria = categoria.id";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Executando o Statment:
            $stmt->execute();

            $table = "";
            //Loop de Criação da Tabela:
            while ($dados = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $table.= '<tr>'.PHP_EOL;
                $table.= '<td class="text-center">'.$dados['cod'].'</td>'.PHP_EOL;
                $table.= '<td class="text-center">'.$dados['item'].'</td>'.PHP_EOL;
                $table.= '<td class="text-center">'.$dados['categoria'].'</td>'.PHP_EOL;
                $table.= '<td class="text-center">R$ '.number_format($dados['preco'], 2,',', '.').'</td>'.PHP_EOL;
                $table.= '<td class="text-center">'.$dados['qtde'].'</td>'.PHP_EOL;
                $table.= '<td class="text-center"><a href="ediDelProdutos.php?cod='.$dados['cod'].'" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search"></span></a></td>'.PHP_EOL;
                $table.= '</tr>'.PHP_EOL;
            }

            //Retorno:
            return $table;
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    //Método que Procura um Produto:
    public function findProduto()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT cod, item, categoria, descricao, preco, vitrine, qtde, imagem FROM produtos WHERE cod = :cod";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Adicionando as Variáveis:
            $stmt->bindValue(':cod', $this->produto->getCod());

            //Executando o Statment:
            $stmt->execute();

            //Jogando os Dados num Array:
            $dados = $stmt->fetch(\PDO::FETCH_ASSOC);

            //Passando Valores Para os Setters:
            $this->produto->setCod($dados['cod']);
            $this->produto->setItem($dados['item']);
            $this->produto->setCategoria($dados['categoria']);
            $this->produto->setDescricao($dados['descricao']);
            $this->produto->setPreco($dados['preco']);
            $this->produto->setVitrine($dados['vitrine']);
            $this->produto->setQtde($dados['qtde']);
            $this->produto->setImagem($dados['imagem']);
        } catch (\PDOException $ex) {
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### UPDATE #####

    ##### DELETE #####
}
