<?php

namespace Classes\Tables;

interface ClienteInterface
{
    public function getCpf();
    public function setCpf($cpf);
    public function getNome();
    public function setNome($nome);
    public function getDataNasc();
    public function setDataNasc($dataNasc);
    public function getEmail();
    public function setEmail($email);
    public function getTelefone();
    public function setTelefone($telefone);
    public function getCelular();
    public function setCelular($celular);
    public function getCep();
    public function setCep($cep);
    public function getEndereco();
    public function setEndereco($endereco);
    public function getCidade();
    public function setCidade($cidade);
    public function getEstado();
    public function setEstado($estado);
    public function getNumero();
    public function setNumero($numero);
    public function getComplemento();
    public function setComplemento($complemento);
    public function getSenha();
    public function setSenha($senha);
}
