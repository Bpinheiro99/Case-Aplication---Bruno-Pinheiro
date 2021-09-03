<?php
		echo '<div style ="font-size:20px;text-align: center;font-weight:bold"><br>Lista de Clientes (Pessoa Jurídico)</div>';
?>

<table border="1" width="100%" bordercolor="#00CED1">
	<tr>
		<th>Cod.</th>
		<th>CNPJ</th>
		<th>Empresa</th>
		<th>Celular</th>
		<th>Tel. Comercial</th>
		<th>End. Comercial</th>
		<th>Cidade</th>
		<th>Facebook</th>
		<th>Linkedin</th>
		<th>Twitter</th>
		<th>Instagram</th>

		<th>Deletar</th>
		<th>Editar</th>
	</tr>


<form method="POST" action="">
<label><b>Buscar cliente: </b></label>
<input type="text" name="empresa" placeholder="Digite o nome da Empresa">
<input name="SendPesqUser" type="submit" value="Pesquisar">
</form>


<?php   echo '<br><br>' ;
if (empty('empresa'))
{
		while ($linha = mysqli_fetch_array($consulta_clientes_j)){
			echo '<tr><td>'.$linha['id_cliente_j'].'</td>';
			echo '<td>'.$linha['cnpj'].'</td>';
			echo '<td>'.$linha['empresa'].'</td>';
			echo '<td>'.$linha['tel_celular_j'].'</td>';
			echo '<td>'.$linha['tel_comercial'].'</td>';
			echo '<td>'.$linha['ende_comercial'].'</td>';
			echo '<td>'.$linha['cidade_j'].'</td>';
			echo '<td>'.$linha['facebook'].'</td>';
			echo '<td>'.$linha['linkedin'].'</td>';
			echo '<td>'.$linha['twitter'].'</td>';
			echo '<td>'.$linha['instagram'].'</td>';

			?>
				<td><a href="?pagina=cad_j&editar_j=<?php echo $linha['id_cliente_j'];?>">Editar</a></td>
				<td><a href="deletar_j.php?id=<?php echo $linha['id_cliente_j'];?>">Deletar</a></td></tr>
		<?php
	}
}


else {
 	$SendPesqUser=filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
	if($SendPesqUser){
		$empresa=filter_input(INPUT_POST,'empresa',FILTER_SANITIZE_STRING);
		$query="SELECT * FROM cliente_j WHERE empresa like '%$empresa%'";
		$resultado = mysqli_query($conexao,$query);
		while ($linha = mysqli_fetch_assoc($resultado)){
			echo '<tr><td>'.$linha['id_cliente_j'].'</td>';
			echo '<td>'.$linha['cnpj'].'</td>';
			echo '<td>'.$linha['empresa'].'</td>';
			echo '<td>'.$linha['tel_celular_j'].'</td>';
			echo '<td>'.$linha['tel_comercial'].'</td>';
			echo '<td>'.$linha['ende_comercial'].'</td>';
			echo '<td>'.$linha['cidade_j'].'</td>';
			echo '<td>'.$linha['facebook'].'</td>';
			echo '<td>'.$linha['linkedin'].'</td>';
			echo '<td>'.$linha['twitter'].'</td>';
			echo '<td>'.$linha['instagram'].'</td>';
			?>
				<td><a href="?pagina=cad_j&editar_j=<?php echo $linha['id_cliente_j'];?>">Editar</a></td>
				<td><a href="deletar_j.php?id=<?php echo $linha['id_cliente_j'];?>">Deletar</a></td></tr>
			<?php
			}
		}
	}
?>

</table>

<?php 
	echo '<br>';
?>