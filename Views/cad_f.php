<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<title></title>
<script type="text/javascript">
	function mascara(src, mascara) {
		var campo = src.value.length;
		var saida = mascara.substring(0,1);
		var texto = mascara.substring(campo);
		if(texto.substring(0,1) != saida) {
		 	src.value += texto.substring(0,1);
		}
	}

	function somenteNumeros(num){
		var er=/[^0-9-./]/;
		er.lastIndex=0;
		var campo=num;
		if(er.test(campo.value)){
			campo.value="";
		}
	}
</script>
</head>
</html>

<?php if (!isset($_GET['editar'])) { ?>

	<h1><br>Cadastrar Cliente (Pessoa Física)</h1>
	
			<form method="post" action="inserir.php">
			<?php echo '<div style ="font-size:12px;text-align: rigth;font-weight:bold; color:red"><br>Os campos marcados com * são obrigatórios para o cadastro!</div>';?>
			
			<br><br>
			<label><b><font face="geneva">*Nome:</font></b></label>
			<input type="textx" name="nome" placeholder="Nome" id="nome" maxlength="100" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro"required>

			<br><br>
			<label><b><font face="geneva">*Data de Nascimento:</font></b></label><p>Somente Numeros</p>
			<input name="data_nascimento" placeholder="Data de Nascimento" id="data_nascimento" method="post" type="textx" maxlength="10" size="30" onkeypress="mascara(this,'##/##/####')"onkeyup="somenteNumeros(this);"required>

			<br><br>
			<label><b><font face="geneva">*CPF:</font></b></label><p>Somente Numeros</p>
			<input name="cpf" placeholder="CPF" id="cpf" method="post" type="textx" maxlength="14" size="30" onkeypress="mascara(this,'###.###.###-##')" onkeyup="somenteNumeros(this);"required>

			<br><br>
			<label><b><font face="geneva">RG:</font></b></label><p>Somente Numeros</p>
			<input name="rg" placeholder="RG" id="rg" method="post" type="textx" maxlength="12" size="30" onkeypress="mascara(this,'##.###.###-#')"onkeyup="somenteNumeros(this);">

			<br><br>
			<label><b><font face="geneva">*Celular:</font></b></label><p>Somente Numeros</p>
			<input name="tel_celular_f" placeholder="Celular" id="tel_celular_f" method="post" type="textx" maxlength="13" size="30" onkeypress="mascara(this,'##-#####-####')"onkeyup="somenteNumeros(this);"required>

			<br><br>
			<label><b><font face="geneva">Telefone:</font></b></label><p>Somente Numeros</p>
			<input name="tel_residencial" placeholder="Telefone" id="tel_residencial" method="post" type="textx" maxlength="12" size="30" onkeypress="mascara(this,'##-####-####')"onkeyup="somenteNumeros(this);">

			<br><br>
			<label><b><font face="geneva">*Endereço:</font></b></label>
			<input type="textx" name="ende_residencial" placeholder="Endereço" id="ende_residencial" maxlength="255" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro"required>

			<br><br>
			<label><b><font face="geneva">*Cidade:</font></b></label>
			<input type="textx" name="cidade_f" placeholder="Cidade" id="cidade_f" maxlength="255" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro"required>

			<br><br>
			<label><b><font face="geneva">Facebook:</font></b></label>
			<input type="textx" name="facebook" placeholder="Facebook" id="facebook" maxlength="100" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro">

			<br><br>
			<label><b><font face="geneva">Linkedin:</font></b></label>
			<input type="textx" name="linkedin" placeholder="Linkedin" id="linkedin" maxlength="100" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro">

			<br><br>
			<label><b><font face="geneva">Twitter:</font></b></label>
			<input type="textx" name="twitter" placeholder="Twitter" id="twitter" maxlength="100" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro">

			<br><br>
			<label><b><font face="geneva">Instagram:</font></b></label>
			<input type="textx" name="instagram" placeholder="Instagram" id="instagram" maxlength="100" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro">

			<br><br>
			<input type="submit" value="Cadastrar">
 		</form>
<?php }


else { ?>
	<?php while ($linha = mysqli_fetch_array($consulta_clientes_f)){ ?>
		<?php if ($linha['id_cliente_f'] == $_GET['editar']){ ?>

			<br><br><h1>Editar Cliente (Pessoa Física)</h1>
			
			<form method="post" action="editar.php">
				<?php echo '<div style ="font-size:12px;text-align: rigth;font-weight:bold; color:red"><br>Os campos marcados com * são obrigatórios para o cadastro!</div>';?>

				<input type ="hidden" name ="id_cliente_f" value="<?php echo $linha['id_cliente_f'];?>">
				
				<br><br>
				<label><b><font face="geneva">*Nome:</font></b></label>
				<input type="textx" name="nome" placeholder="Nome" id="nome" maxlength="100" onkeypress="volta_input(this.id)" size="30" class="text inputErro" value="<?php echo $linha['nome'];?>" required>

				<br><br>
				<label><b><font face="geneva">*Data de Nascimento:</font></b></label><p>Somente Numeros</p>
				<input name="data_nascimento" placeholder="Data de Nascimento" id="data_nascimento" method="post" type="textx" maxlength="10" size="30" onkeypress="mascara(this,'##/##/####')" value="<?php echo $linha['data_nascimento'];?>"onkeyup="somenteNumeros(this);"required>

				<br><br>
				<label><b><font face="geneva">*CPF:</font></b></label><p>Somente Numeros</p>
				<input name="cpf" placeholder="CPF" id="cpf" method="post" type="textx" maxlength="14" size="30" onkeypress="mascara(this,'###.###.###-##')" value="<?php echo $linha['cpf'];?>"onkeyup="somenteNumeros(this);"required>

				<br><br>
				<label><b><font face="geneva">RG:</font></b></label><p>Somente Numeros</p>
				<input name="rg" placeholder="RG" id="rg" method="post" type="textx" maxlength="12" size="30" onkeypress="mascara(this,'##.###.###-#')" value="<?php echo $linha['rg'];?>"onkeyup="somenteNumeros(this);">

				<br><br>
				<label><b><font face="geneva">*Celular:</font></b></label><p>Somente Numeros</p>
				<input name="tel_celular_f" placeholder="Celular" id="tel_celular_f" method="post" type="textx" maxlength="13" size="30" onkeypress="mascara(this,'##-#####-####')" value="<?php echo $linha['tel_celular_f'];?>"onkeyup="somenteNumeros(this);"required>

				<br><br>
				<label><b><font face="geneva">Telefone:</font></b></label><p>Somente Numeros</p>
				<input name="tel_residencial" placeholder="Telefone" id="tel_residencial" method="post" type="textx" maxlength="12" size="30" onkeypress="mascara(this,'##-####-####')" value="<?php echo $linha['tel_residencial'];?>"onkeyup="somenteNumeros(this);">

				<br><br>
				<label><b><font face="geneva">*Endereço:</font></b></label>
				<input type="textx" name="ende_residencial" placeholder="Endereço" id="ende_residencial" maxlength="255" onkeypress="volta_input(this.id)" size="30" class="text inputErro" value="<?php echo $linha['ende_residencial'];?>"required>

				<br><br>
				<label><b><font face="geneva">*Cidade:</font></b></label>
				<input type="textx" name="cidade_f" placeholder="Cidade" id="cidade_f" maxlength="255" onkeypress="volta_input(this.id)" size="30" class="text inputErro" value="<?php echo $linha['cidade_f'];?>"required>

				<br><br>
				<label><b><font face="geneva">Facebook:</font></b></label>
				<input type="textx" name="facebook" placeholder="Facebook" id="facebook" maxlength="100" onkeypress="volta_input(this.id)" size="30" class="text inputErro" value="<?php echo $linha['facebook'];?>">

				<br><br>
				<label><b><font face="geneva">Linkedin:</font></b></label>
				<input type="textx" name="linkedin" placeholder="Linkedin" id="linkedin" maxlength="100" onkeypress="volta_input(this.id)" size="30" class="text inputErro" value="<?php echo $linha['linkedin'];?>">

				<br><br>
				<label><b><font face="geneva">Twitter:</font></b></label>
				<input type="textx" name="twitter" placeholder="Twitter" id="twitter" maxlength="100" onkeypress="volta_input(this.id)" size="30" class="text inputErro" value="<?php echo $linha['twitter'];?>">

				<br><br>
				<label><b><font face="geneva">Instagram:</font></b></label>
				<input type="textx" name="instagram" placeholder="Instagram" id="instagram" maxlength="100" onkeypress="volta_input(this.id)" size="30" class="text inputErro" value="<?php echo $linha['instagram'];?>">				
				
				<br><br>
				<input type="submit" value="Editar" >
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>
