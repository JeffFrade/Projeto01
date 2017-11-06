CREATE DATABASE Loja01;
USE Loja01;

CREATE TABLE cliente(
  cpf CHAR(14) PRIMARY KEY,
  nome VARCHAR(170) NOT NULL,
  dataNasc DATE NOT NULL,
  email VARCHAR(170) NOT NULL,
  telefone CHAR(14),
  celular VARCHAR(15),
  cep CHAR(9) NOT NULL,
  endereco VARCHAR(250) NOT NULL,
  cidade VARCHAR(250) NOT NULL,
  estado VARCHAR(25) NOT NULL,
  numero INT NOT NULL,
  complemento VARCHAR(50),
  senha VARCHAR(255) NOT NULL);

ALTER TABLE cliente ADD bairro VARCHAR(100);

CREATE TABLE categoria(
  id INT PRIMARY KEY AUTO_INCREMENT,
  categoria VARCHAR(50) NOT NULL);

CREATE TABLE produtos(
  cod INT PRIMARY KEY AUTO_INCREMENT,
  item VARCHAR(200) NOT NULL,
  categoria INT NOT NULL,
  FOREIGN KEY (categoria) REFERENCES categoria(id),
  descricao VARCHAR(3500) NOT NULL,
  preco FLOAT NOT NULL,
  vitrine CHAR(1) NOT NULL,
  qtde INT NOT NULL,
  imagem VARCHAR(2000) NOT NULL);

CREATE TABLE carrinho(
  cpf CHAR(14) PRIMARY KEY,
  FOREIGN KEY (cpf) REFERENCES cliente(cpf),
  cod_prod INT NOT NULL,
  FOREIGN KEY (cod_prod) REFERENCES produtos(cod),
  qtde INT NOT NULL,
  total FLOAT NOT NULL);

CREATE TABLE venda(
  id INT PRIMARY KEY AUTO_INCREMENT,
  cpf CHAR(14) NOT NULL,
  FOREIGN KEY (cpf) REFERENCES carrinho(cpf),
  valor FLOAT NOT NULL);

CREATE TABLE funcionario(
  usuario VARCHAR(50) PRIMARY KEY,
  senha VARCHAR(255) NOT NULL,
  perfil VARCHAR(50) NOT NULL);

CREATE TABLE `log`(
  usuario VARCHAR(50) NOT NULL,
  FOREIGN KEY (usuario) REFERENCES funcionario(usuario),
  cod_prod INT NOT NULL,
  FOREIGN KEY (cod_prod) REFERENCES produtos(cod),
  `data` DATE NOT NULL,
  hora TIME NOT NULL,
  tipo VARCHAR(25) NOT NULL);