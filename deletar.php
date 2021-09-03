<?php

include 'db.php';

$id_cliente_f = $_GET['id'];

$query = "DELETE FROM cliente_f where id_cliente_f = $id_cliente_f";

mysqli_query($conexao, $query);

header ('location:index.php?pagina=list_f');