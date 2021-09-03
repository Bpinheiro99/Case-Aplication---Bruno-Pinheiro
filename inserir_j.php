<?php
include 'db.php';

$cnpj = $_POST['cnpj'];
$empresa = $_POST['empresa'];
$tel_celular_j = $_POST['tel_celular_'];
$tel_comercial = $_POST['tel_comercial'];
$ende_comercial = $_POST['ende_comercial'];
$cidade_j = $_POST['cidade_j'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];

$query = "INSERT INTO cliente_j(
	cnpj,
	empresa, 
	tel_celular_j,
	tel_comercial,
	ende_comercial,
	cidade_j,
	facebook,
	linkedin,
	twitter,
	instagram) 
VALUES (
	'$cnpj',
	'$empresa',
	'$tel_celular_j',
	'$tel_comercial',
	'$ende_comercial',
	'$cidade_j',
	'$facebook',
	'$linkedin',
	'$twitter',
	'$instagram')";

mysqli_query($conexao, $query);

header ('location:index.php?pagina=list_j');