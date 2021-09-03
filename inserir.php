<?php
include 'db.php';

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

$query = "INSERT INTO cliente_f(
	nome, 
	data_nascimento,
	cpf,
	rg,
	tel_celular_f,
	tel_residencial,
	ende_residencial,
	cidade_f,
	facebook,
	linkedin,
	twitter,
	instagram) 
VALUES (
	'$nome',
	'$data_nascimento',
	'$cpf',
	'$rg',
	'$tel_celular_f',
	'$tel_residencial',
	'$ende_residencial',
	'$cidade_f',
	'$facebook',
	'$linkedin',
	'$twitter',
	'$instagram')";

mysqli_query($conexao, $query);

header ('location:index.php?pagina=list_f');