<?php

namespace Classes\Services;

use Classes\Tables\ClienteInterface;
use Classes\Util\Tags;
use Classes\Util\Validator;

class ServiceCliente implements ServiceClienteInterface
{
    //Atributos:
    private $db;
    private $cliente;

    //Método Construtor Para Inicializar os Atributos:
    public function __construct(\PDO $db, ClienteInterface $cliente)
    {
        $this->db = $db;
        $this->cliente = $cliente;
    }

    ##### INERT #####

    ##### SELECT #####
    //Método de Login:
    public function login()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT cpf, nome, email, senha FROM cliente WHERE email = :email AND senha = :senha";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Validações:
            $err = 0;

            //Somando ao Valor do Erro o Valor dos Códigos Obtidos na Validação:
            $err += Validator::validate($this->cliente->getEmail(), "", "Preencha o Campo E-mail Corretamente", 1);
            $err += Validator::validate($this->cliente->getSenha(), md5(""), "Preencha o Campo Senha Corretamente", 1);

            //Verificando se Há Erros:
            if ($err != 0) {
                //Caso Haja:
                return Tags::scriptSimple('text/javascript', '$("#login").modal("show");');
            }

            //Adicionando as Variáveis:
            $stmt->bindValue(':email', $this->cliente->getEmail());
            $stmt->bindValue(':senha', $this->cliente->getSenha());

            //Executando o Statment:
            $stmt->execute();

            //Criando um Array Associativo com os Campos:
            $dados = $stmt->fetch(\PDO::FETCH_ASSOC);

            //Verificando se o E-mail e a Senha Conferem:
            if ($this->cliente->getEmail() == $dados['email'] && $this->cliente->getSenha() == $dados['senha']) {
                //Caso Confiram:
                //Atribui os Dados as Sessões:
                $_SESSION['cpf'] = $dados['cpf'];
                $_SESSION['email'] = $dados['email'];
                $_SESSION['nome'] = $dados['nome'];

                $classes = ['alert alert-success'];

                //Retorno:
                return Tags::alertDismissible($classes, "Login Efetuado com Sucesso!").Tags::scriptSimple('text/javascript', '$("#login").modal("show");setTimeout(function(){ location.href="'.$_SERVER['REQUEST_URI'].'"; }, 1000);');
            }

            //Caso Não Confiram:
            //Destrói as Sessões:
            unset($_SESSION['cpf']);
            unset($_SESSION['email']);
            unset($_SESSION['nome']);

            $classes = ['alert alert-danger'];

            //Retorno:
            return Tags::alertDismissible($classes, "E-mail ou Senha Inválidos").Tags::scriptSimple('text/javascript', 'text/javascript', '$("#login").modal("show");').Tags::scriptSimple('text/javascript', '$("#login").modal("show");');

        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### UPDATE #####

    ##### DELETE #####
}
