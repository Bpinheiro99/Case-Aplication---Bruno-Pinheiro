<?php 
include 'db.php';

$id_cliente_f=$_POST['id_cliente_f'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$tel_celular_f = $_POST['tel_celular_f'];
$tel_residencial = $_POST['tel_residencial'];
$ende_residencial = $_POST['ende_residencial'];
$cidade_f = $_POST['cidade_f'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];


$query = "UPDATE cliente_f SET 
	nome='$nome', 
	data_nascimento='$data_nascimento', 
	cpf='$cpf',
	rg='$rg',
	tel_celular_f='$tel_celular_f',
	tel_residencial='$tel_residencial',
	ende_residencial='$ende_residencial',
	cidade_f='$cidade_f',
	facebook='$facebook',
	linkedin='$linkedin',
	twitter='$twitter',
	instagram='$instagram' 
	WHERE id_cliente_f = $id_cliente_f";


mysqli_query($conexao, $query);

header('location:index.php?pagina=list_f');