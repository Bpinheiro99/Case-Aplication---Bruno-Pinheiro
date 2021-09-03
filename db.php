<?php 

#Conexão com o Banco de dados do MySql
$servidor = "localhost";
$usuario = "root" ;
$senha = "";
$database = "cadastros";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = "SELECT * FROM cliente_f";
$consulta_clientes_f = mysqli_query($conexao, $query);

$query = "SELECT * FROM cliente_j";
$consulta_clientes_j = mysqli_query($conexao, $query);