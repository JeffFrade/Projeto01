<?php

namespace Classes\Services;

use Classes\Tables\ProdutoInterface;
use Classes\Util\Tags;

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
                $vitrine .= '<a href="#"><img src="' . $dados['imagem'] . '" class="img-circle img-responsive img-vitrine" title="' . $dados['item'] . '" alt="' . $dados['item'] . '"/></a>'.PHP_EOL;

                //Preço do Produto:
                $vitrine .= '<strong><i class="fa fa-money"></i> Preço: <span class="text-success">R$ ' . number_format($dados['preco'], 2,',', '.') . '</span></strong>'.PHP_EOL;

                //Botão de Detalhes:
                $vitrine .= '<a href="#" role="button" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Clique Para Ver Detalhes</a>'.PHP_EOL;

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
            $ret = array('inicio' => $inicio, 'reg' => $reg, 'pagina' => $pagina, 'numPags' => $numPags, 'anterior' => $anterior, 'proxima' => $pagina);

            //Retorno:
            return $ret;
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### UPDATE #####

    ##### DELETE #####
}
