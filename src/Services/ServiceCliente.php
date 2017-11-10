<?php

namespace Classes\Services;

use Classes\Tables\ClienteInterface;
use Classes\Util\Tags;
use Classes\Util\Validator;
use Classes\Util\Sql;

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
    //Método de Inserção de Clientes:
    public function insertCliente()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "INSERT INTO cliente(cpf, nome, dataNasc, email, telefone, celular, cep, endereco, cidade, estado, numero, complemento, senha) VALUES(:cpf, :nome, :dataNasc, :email, :telefone, :celular, :cep, :endereco, :cidade, :estado, :numero, :complemento, :senha)";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            $err = 0;

            //Validações:
            $err.= Validator::validate($this->cliente->getNome(), "", "Preencha o Campo Nome Corretamente", 1);
            $err.= Validator::validateRegex($this->cliente->getEmail(), '/^[\w.]+@[\w]+[\.][\w]{2,3}/', "Preencha o Campo E-mail Corretamente", 2);
            $err.= Validator::validate($this->cliente->getDataNasc(), "", "Preencha o Campo Data de Nascimento Corretamente", 1);
            $err.= Validator::validateRegex($this->cliente->getCpf(), "/^[\d]{3}\.[\d]{3}\.[\d]{3}\-[\d]{2}/", "Preencha o CPF Corretamente", 2);
            if (empty($this->cliente->getTelefone())) {
                $this->cliente->setTelefone("-");
            }

            $err.= Validator::validateRegex($this->cliente->getCelular(), '/^\([\d]{2}\)[\d]{4,5}\-[\d]{4}/', "Preecnha o Campo Celular Corretamente", 2);
            $err.= Validator::validateRegex($this->cliente->getCep(), '/^[\d]{8}/', "Preecnha o Campo Cep Corretamente", 2);
            $err.= Validator::validate($this->cliente->getEndereco(), "", "Preencha o Campo Endereço Corretamente", 1);
            $err.= Validator::validate($this->cliente->getBairro(), "", "Preencha o Campo Bairro Corretamente", 1);
            $err.= Validator::validate($this->cliente->getNumero(), "", "Preencha o Campo Número Corretamente", 1);
            if (empty($this->cliente->getComplemento())) {
                $this->cliente->setComplemento("-");
            }
            $err.= Validator::validateRegex($this->cliente->getSenha(), '/^[\w\d\ W]{8,20}/', "Senha Menor que 8 Digitos ou Superior a 20 ou Não Contém Letras e Números", 2);

            //Verificando se há Erros:
            if ($err != 0) {
                //Caso Haja:
                return false;
            }

            //Verificando se o E-mail já Foi Cadastrado:
            if (Sql::countWhere($this->db, 'email', 'cliente', 'email', $this->cliente->getEmail()) > 0) {
                //Caso Seja:
                $classes = ['alert alert-danger'];

                return Tags::alertDismissible($classes, 'E-mail Já Cadastrado');
            }

            //Criando o Md5 da Senha:
            $this->cliente->setMd5Senha($this->cliente->getSenha());

            //Adicionando os Parâmetros:
            $stmt->bindValue(':cpf', $this->cliente->getCpf());
            $stmt->bindValue(':nome', $this->cliente->getNome());
            $stmt->bindValue(':dataNasc', $this->cliente->getDataNasc());
            $stmt->bindValue(':email', $this->cliente->getEmail());
            $stmt->bindValue(':telefone', $this->cliente->getTelefone());
            $stmt->bindValue(':celular', $this->cliente->getCelular());
            $stmt->bindValue(':cep', $this->cliente->getCep());
            $stmt->bindValue(':endereco', $this->cliente->getEndereco());
            $stmt->bindValue(':cidade', $this->cliente->getCidade());
            $stmt->bindValue(':estado', $this->cliente->getEstado());
            $stmt->bindValue(':numero', $this->cliente->getNumero());
            $stmt->bindValue(':complemento', $this->cliente->getComplemento());
            $stmt->bindValue(':senha', $this->cliente->getSenha());

            //Verificando se o Statment foi Executado:
            if ($stmt->execute()) {
                //Caso Seja:
                $classes = ['alert alert-success'];

                return Tags::alertDismissible($classes, "Cadastro Efetuado com Sucesso!");
            }

            //Caso Não Seja:
            $classes = ['alert alert-danger'];

            return Tags::alertDismissible($classes, "Erro ao Efetuar Cadastro, Tente Novamente mais Tarde");
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

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
            $err += Validator::validateRegex($this->cliente->getEmail(), "/^[\w.]+@[\w]+[\.][\w]{2,3}/", "Preencha o Campo E-mail Corretamente", 2);
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
                //O $_SERVER['REQUEST_URI'] Serve Para Voltar Para a Mesma Página
                return Tags::alertDismissible($classes, "Login Efetuado com Sucesso!").Tags::scriptSimple('text/javascript', '$("#login").modal("show");setTimeout(function(){ location.href="'.$_SERVER['REQUEST_URI'].'"; }, 1000);');
            }

            //Caso Não Confiram:
            //Destrói as Sessões:
            unset($_SESSION['cpf']);
            unset($_SESSION['email']);
            unset($_SESSION['nome']);

            $classes = ['alert alert-danger'];

            //Retorno:
            return Tags::alertDismissible($classes, "E-mail ou Senha Inválidos").Tags::scriptSimple('text/javascript', '$("#login").modal("show");');

        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    //Método de Contagem de Clientes:
    public function countCliente()
    {
        return Sql::count($this->db, 'nome', 'cliente');
    }

    //Método de Retorno (Em Tabela) dos Clientes:
    public function selectCliente()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT cpf, nome, email, telefone, celular FROM cliente";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Executando o Statment:
            $stmt->execute();

            $table = "";

            //Loop Para Criação da Tabela:
            while ($dados = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $table.= '<tr>'.PHP_EOL;
                $table.= '<td class="text-center">'.$dados['cpf'].'</td>'.PHP_EOL;
                $table.= '<td class="text-center">'.$dados['nome'].'</td>'.PHP_EOL;
                $table.= '<td class="text-center">'.$dados['email'].'</td>'.PHP_EOL;
                $table.= '<td class="text-center">'.$dados['telefone'].'</td>'.PHP_EOL;
                $table.= '<td class="text-center">'.$dados['celular'].'</td>'.PHP_EOL;
                $table.= '<td class="text-center"><a href="ediDelClientesIntranet.php?cpf='.$dados['cpf'].'" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search"></span></a></td>'.PHP_EOL;
                $table.= '</tr>'.PHP_EOL;
            }

            //Retorno:
            return $table;
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    //Método de Busca de Clientes:
    public function findCliente()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT cpf, nome, dataNasc, email, telefone, celular, cep, numero, complemento FROM cliente WHERE cpf = :cpf";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Adicionando as Variáveis:
            $stmt->bindValue(':cpf', $this->cliente->getCpf());

            //Executando o Statment:
            $stmt->execute();

            //Jogando os Dados num Array:
            $dados = $stmt->fetch(\PDO::FETCH_ASSOC);

            //Jogando os Dados nos Setters:
            $this->cliente->setCpf($dados['cpf']);
            $this->cliente->setNome($dados['nome']);
            $this->cliente->setDataNasc($dados['dataNasc']);
            $this->cliente->setEmail($dados['email']);
            $this->cliente->setTelefone($dados['telefone']);
            $this->cliente->setCelular($dados['celular']);
            $this->cliente->setCep($dados['cep']);
            $this->cliente->setNumero($dados['numero']);
            $this->cliente->setComplemento($dados['complemento']);
        } catch (\PDOException $ex) {
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### UPDATE #####
    //Método de Edição de Dados do Cliente:
    public function updateCliente()
    {

    }

    //Método de Alterar Senha do Cliente:
    public function updateSenha()
    {

    }

    ##### DELETE #####
    //Méotdo de Exclusão do Cliente:
    public function deleteCliente()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "DELETE FROM cliente WHERE cpf = :cpf";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Adicionando os Parâmetros:
            $stmt->bindValue(':cpf', $this->cliente->getCpf());

            //Verificando se o Statment Foi Executado:
            if ($stmt->execute()) {
                //Caso Seja:
                $classes = ['alert alert-success'];

                //Exibe a Mensagem:
                echo Tags::alertDismissible($classes, "Cliente Excluído com Sucesso!");

                //Retorno:
                return true;
            }

            //Caso Não Seja:
            $classes = ['alert alert-danger'];

            //Exibe a Mensagem:
            echo Tags::alertDismissible($classes, "Erro ao Excluir Dados, Tente Novamente Mais Tarde");

            //Retorno:
            return false;
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }
}
