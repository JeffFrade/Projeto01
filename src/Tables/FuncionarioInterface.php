<?php

namespace Classes\Tables;

interface FuncionarioInterface
{
    public function getUsuario();
    public function setUsuario($usuario);
    public function getSenha();
    public function setSenha($senha);
    public function setMd5Senha($senha);
    public function getPerfil();
    public function setPerfil($perfil);
}
