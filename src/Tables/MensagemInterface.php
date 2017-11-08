<?php

namespace Classes\Tables;

interface MensagemInterface
{
    public function getId();
    public function setId($id);
    public function getNome();
    public function setNome($nome);
    public function getEmail();
    public function setEmail($email);
    public function getMensagem();
    public function setMensagem($mensagem);
}
