<?php

namespace Classes\Tables;

class Funcionario implements FuncionarioInterface
{
    //Esta Classe Possui Somente Getters e Setters
    private $usuario;
    private $senha;
    private $perfil;

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setMd5Senha($senha)
    {
        $this->senha = md5($senha);
    }

    public function getPerfil()
    {
        return $this->perfil;
    }

    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }
}
