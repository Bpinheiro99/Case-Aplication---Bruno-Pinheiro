<?php 

#CRIAR TABELA NO BANCO DE DADOS
#Conexão com o Banco de dados do MySql
$servidor = "localhost";
$usuario = "root" ;
$senha = "";

$conexao = mysqli_connect($servidor, $usuario, $senha);

/*

//DATA BASE - USUARIO
$query = "CREATE DATABASE cadastros";

//CRIANDO TABELA 
$query = "CREATE TABLE CLIENTE_F(
    id_cliente_f int not null AUTO_INCREMENT,
    nome varchar(255) not null,
    cpf varchar (14) not null,
    rg varchar (12) not null,
    data_nascimento varchar(10) not null,
    tel_celular_f varchar(13) not null,
    tel_residencial varchar(12),
    ende_residencial varchar (255) not null,
    cidade_f varchar (100) not null,
    facebook varchar (100),
    linkedin varchar (100),
    twitter varchar (100),
    instagram varchar (100),
    PRIMARY KEY (id_cliente_f)
)";

$query = "CREATE TABLE CLIENTE_J(
    id_cliente_j int not null AUTO_INCREMENT,
    cnpj varchar (18) not null, 
    empresa varchar(255) not null,
    tel_celular_j varchar(13) not null,
    tel_comercial varchar(12),
    ende_comercial varchar (255)not null,
    cidade_j varchar (100) not null,
    facebook varchar (100),
    linkedin varchar (100),
    twitter varchar (100),
    instagram varchar (100),
    PRIMARY KEY (id_cliente_j)
)";

$executar = mysqli_query($conexao, $query);

if ($executar){
	echo "Executado com sucesso (clientes)<br>";
}
else{
	echo "Falha ao executar (clientes)<br>";
}*/