<?php
		echo '<div style ="font-size:20px;text-align: center;font-weight:bold"><br>Lista de Clientes (Pessoa Física)</div>';
?>

<table border="1" width="100%" bordercolor="#00CED1">
	<tr>
		<th>Cod.</th>
		<th>Nome</th>
		<th>Data Nascimento</th>
		<th>CPF</th>
		<th>RG</th>
		<th>Celular</th>
		<th>Tel. Residencial</th>
		<th>End. Residencial</th>
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
<input type="text" name="nome" placeholder="Digite o nome do cliente">
<input name="SendPesqUser" type="submit" value="Pesquisar">
</form>

<?php echo '<br><br>';
if (empty('nome'))
{
		while ($linha = mysqli_fetch_array($consulta_clientes_f)){			
			echo '<tr><td>'.$linha['id_cliente_f'].'</td>';
			echo '<td>'.$linha['nome'].'</td>';
			echo '<td>'.$linha['data_nascimento'].'</td>';
			echo '<td>'.$linha['cpf'].'</td>';
			echo '<td>'.$linha['rg'].'</td>';
			echo '<td>'.$linha['tel_celular_f'].'</td>';
			echo '<td>'.$linha['tel_residencial'].'</td>';
			echo '<td>'.$linha['ende_residencial'].'</td>';
			echo '<td>'.$linha['cidade_f'].'</td>';
			echo '<td>'.$linha['facebook'].'</td>';
			echo '<td>'.$linha['linkedin'].'</td>';
			echo '<td>'.$linha['twitter'].'</td>';
			echo '<td>'.$linha['instagram'].'</td>';

			?>
			<td><a href="?pagina=cad_f&editar=<?php echo $linha['id_cliente_f'];?>">Editar</a></td>
			<td><a href="deletar.php?id=<?php echo $linha['id_cliente_f'];?>">Deletar</a></td></tr>
		<?php
		}
	}

 else {
 	$SendPesqUser=filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
	if($SendPesqUser){
		$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
		$query="SELECT * FROM cliente_f WHERE nome like '%$nome%'";
		$resultado = mysqli_query($conexao,$query);
		while ($linha = mysqli_fetch_assoc($resultado)){
			echo '<tr><td>'.$linha['id_cliente_f'].'</td>';
			echo '<td>'.$linha['nome'].'</td>';
			echo '<td>'.$linha['data_nascimento'].'</td>';
			echo '<td>'.$linha['cpf'].'</td>';
			echo '<td>'.$linha['rg'].'</td>';
			echo '<td>'.$linha['tel_celular_f'].'</td>';
			echo '<td>'.$linha['tel_residencial'].'</td>';
			echo '<td>'.$linha['ende_residencial'].'</td>';
			echo '<td>'.$linha['cidade_f'].'</td>';
			echo '<td>'.$linha['facebook'].'</td>';
			echo '<td>'.$linha['linkedin'].'</td>';
			echo '<td>'.$linha['twitter'].'</td>';
			echo '<td>'.$linha['instagram'].'</td>';
		?>
			<td><a href="?pagina=cad_f&editar=<?php echo $linha['id_cliente_f'];?>">Editar</a></td>
			<td><a href="deletar.php?id=<?php echo $linha['id_cliente_f'];?>">Deletar</a></td></tr>
		<?php
			}
		}
	}
?>

</table>	

<?php 
	echo '<br>';
?>