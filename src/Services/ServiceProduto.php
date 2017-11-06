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

    ##### INSERT #####

    ##### SELECT #####
    //Método que Retorna os Produtos da Vitrine:
    public function selectVitrine()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT cod, item, preco, imagem FROM produtos WHERE vitrine = 'S'";

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
                $vitrine .= '<a href="#"><img src="' . $dados['imagem'] . '"class="img-circle img-responsive img-vitrine" title="' . $dados['item'] . '" alt="' . $dados['item'] . '"/></a>'.PHP_EOL;
                //Preço do Produto:
                $vitrine .= '<strong><i class="fa fa-money"></i> Preço: <span class="text-success">' . $dados['preco'] . '</span></strong>'.PHP_EOL;
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
            $vitrine.= '</div>';

            //Retorno:
            return $vitrine;
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### UPDATE #####

    ##### DELETE #####
}
