<?php

namespace Classes\Services;

use Classes\Tables\FuncionarioInterface;
use Classes\Util\Validator;
use Classes\Util\Tags;

class ServiceFuncionario implements ServiceFuncionarioInterface
{
    //Atributos:
    private $db;
    private $funcionario;

    //Método Construtor Para Inicializar os Atributos:
    public function __construct(\PDO $db, FuncionarioInterface $funcionario)
    {
        $this->db = $db;
        $this->funcionario = $funcionario;
    }

    ##### INSERT #####

    ##### SELECT #####
    //Método de Login:
    public function login()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT usuario, senha, perfil FROM funcionario WHERE usuario = :usuario AND senha = :senha";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            $err = 0;

            //Validação:
            $err.= Validator::validate($this->funcionario->getUsuario(), "", "Preencha o Campo Usuário Corretamente", 1);
            $err.= Validator::validate($this->funcionario->getSenha(), md5(""), "Preencha o Campo Senha Corretamente", 1);

            //Verificando se Há Erros:
            if ($err != 0) {
                //Caso Haja:
                return false;
            }

            //Adicionando os Parâmetros:
            $stmt->bindValue(':usuario', $this->funcionario->getUsuario());
            $stmt->bindValue(':senha', $this->funcionario->getSenha());

            //Executando o Statment:
            $stmt->execute();

            //Jogando os Dados num Array:
            $dados = $stmt->fetch(\PDO::FETCH_ASSOC);

            //Verificando se os Dados Conferem:
            if ($dados['usuario'] == $this->funcionario->getUsuario() && $dados['senha'] == $this->funcionario->getSenha()) {
                //Caso Confiram:
                //Atribui Valor as Sessões:
                $_SESSION['usuario'] = $dados['usuario'];
                $_SESSION['perfil'] = $dados['perfil'];

                $classes = ['alert alert-success'];

                //Retorno:
                return Tags::alertDismissible($classes, "Login Efetuado com Sucesso!").Tags::scriptSimple('text/javascript', 'setTimeout(function(){ location.href="intranet.php"; }, 1000);');
            }

            //Caso Não Confiram:
            //Destrói as Sessões:
            unset($_SESSION['usuario']);
            unset($_SESSION['perfil']);

            $classes = ['alert alert-danger'];

            //Retorno:
            return Tags::alertDismissible($classes, "Usuário ou Senha Inválidos");
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### UPDATE #####

    ##### DELETE #####
}
