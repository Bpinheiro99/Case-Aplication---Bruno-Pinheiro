<?php

include 'db.php';

$id_cliente_j = $_GET['id'];

$query = "DELETE FROM cliente_j where id_cliente_j = $id_cliente_j";

mysqli_query($conexao, $query);

header ('location:index.php?pagina=list_j');