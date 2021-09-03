<?php 
include 'db.php';

$id_cliente_j=$_POST['id_cliente_j'];
$cnpj = $_POST['cnpj'];
$empresa = $_POST['empresa'];
$tel_celular_j = $_POST['tel_celular_j'];
$tel_comercial = $_POST['tel_comercial'];
$ende_comercial = $_POST['ende_comercial'];
$cidade_j = $_POST['cidade_j'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];


$query = "UPDATE cliente_j SET 
	cnpj='$cnpj',
	empresa='$empresa', 
	tel_celular_j='$tel_celular_j',
	tel_comercial='$tel_comercial',
	ende_comercial='$ende_comercial',
	cidade_j='$cidade_j',
	facebook='$facebook',
	linkedin='$linkedin',
	twitter='$twitter',
	instagram='$instagram' 
	WHERE id_cliente_j = $id_cliente_j";


mysqli_query($conexao, $query);

header('location:index.php?pagina=list_j');