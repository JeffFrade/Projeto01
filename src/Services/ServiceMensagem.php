<?php

namespace Classes\Services;

use Classes\Tables\MensagemInterface;
use Classes\Util\Validator;
use Classes\Util\Tags;
use Classes\Util\Sql;

class ServiceMensagem implements ServiceMensagemInterface
{
    //Atributos:
    private $db;
    private $mensagem;

    //Método Construtor Para Inicializar as Variáveis:
    public function __construct(\PDO $db, MensagemInterface $mensagem)
    {
        $this->db = $db;
        $this->mensagem = $mensagem;
    }

    ##### INSERT #####
    //Método que Insere a Mensagem:
    public function insertMensagem()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "INSERT INTO mensagens(nome, email, mensagem) VALUES(:nome, :email, :mensagem)";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            $err = 0;

            //Validações:
            $err += Validator::validate($this->mensagem->getNome(), "", "Preencha o Campo Nome Corretamente", 1);
            $err += Validator::validateRegex($this->mensagem->getEmail(), "/^[\w.]+@[\w]+[\.][\w]{2,3}/", "Preencha o Campo E-mail Corretamente", 2);
            $err += Validator::validate($this->mensagem->getMensagem(), "", "Preencha o Campo Mensagem Corretamente", 1);

            //Verificando Se Há Erros:
            if ($err != 0) {
                //Caso Haja:
                return false;
            }

            //Adicionando as Variáveis:
            $stmt->bindValue(':nome', $this->mensagem->getNome());
            $stmt->bindValue(':email', $this->mensagem->getEmail());
            $stmt->bindValue(':mensagem', $this->mensagem->getMensagem());

            //Verificando se o Statment Foi Executado:
            if ($stmt->execute()) {
                //Caso Seja:

                ##### IMPLEMENTAR #####
                /* UTILIZAR MÉTODO DA CLASSE MAIL

                //Envio dos E-mails:
                //Para Quem Enviou a Mensagem:
                mail($this->mensagem->getEmail(), "Minha Loja", $this->mensagem->getNome()." Sua Mensagem Foi Enviada! \n Aguarde a Resposta", $headers);
                //Para o ADM do Site:
                mail('jefferrson.frade@gmail.com', "Minha Loja", "Nova Mensagem de: {$this->mensagem->getNome()} \n \n Mensagem: {$this->mensagem}", $headers);*/
                ##### FIM IMPLEMENTAR #####

                $classes = ['alert alert-success'];

                //Retorno:
                return Tags::alertDismissible($classes, "Mensagem Enviada com Sucesso!");
            }

            //Caso Não Seja:
            $classes = ['alert alert-danger'];

            //Retorno:
            return Tags::alertDismissible($classes, "Erro ao Enviar Mensagem");
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    ##### SELECT #####
    //Método que Monta as Mensagens no Menu da Intranet:
    public function showMensagens()
    {
        //Tratamento de Erros:
        try {
            //Query SQL:
            $sql = "SELECT id, nome, mensagem FROM mensagens ORDER BY id DESC LIMIT 3";

            //Criando o Statment:
            $stmt = $this->db->prepare($sql);

            //Executando o Statment:
            $stmt->execute();

            $mensagens = "";

            //Loop de Exibição:
            while ($dados = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $mensagens .= Tags::mountMensagem($dados);
            }

            //Retorno:
            return $mensagens;
        } catch (\PDOException $ex) {
            //Caso Haja Erro:
            return $ex->getCode()." ".$ex->getMessage();
        }
    }

    //Método Contador de Mensagens:
    public function countMensagem()
    {
       return Sql::count($this->db, 'mensagem', 'mensagens');
    }

    ##### DELETE #####
}
