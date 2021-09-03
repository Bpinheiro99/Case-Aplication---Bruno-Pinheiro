<?php 

#Base de Dados
include 'db.php';

#Cabeçalho
include 'header.php';

#Conteúdo da página
if(isset($_GET['pagina'])){
    $pagina=$_GET['pagina'];
}
else{
    $pagina='home';
}
if($pagina =='cadastrar'){
    include 'views/cadastrar.php';
}
elseif ($pagina=='listar') {
    include 'views/listar.php';
}
elseif ($pagina=='list_f') {
    include 'views/list_f.php';
}
elseif ($pagina=='list_j') {
    include 'views/list_j.php';
}

elseif ($pagina=='cad_f') {
    include 'views/cad_f.php';
}
elseif ($pagina=='cad_j') {
    include 'views/cad_j.php';
}
else{
    include 'views/home.php';
}

#Rodapé
include 'footer.php';