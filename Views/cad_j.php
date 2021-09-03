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
</script>
</head>
</html>

<?php if (!isset($_GET['editar_j'])) { ?>
	<h1><br>Cadastrar Cliente (Pessoa Jurídica)</h1>
	
			<form method="post" action="inserir_j.php">
			<?php echo '<div style ="font-size:12px;text-align: rigth;font-weight:bold; color:red"><br>Os campos marcados com * são obrigatórios para o cadastro!</div>';?>
			
			<br><br>
			<label><b><font face="geneva">*CNPJ:</font></b></label>
			<input name="cnpj" placeholder="CNPJ" id="cnpj" method="post" type="textx" maxlength="18" size="30" onkeypress="mascara(this,'##.###.###/####-##')"required>

			<br><br>
			<label><b><font face="geneva">*Nome da empresa:</font></b></label>
			<input type="textx" name="empresa" placeholder="Nome da empresa" id="empresa" maxlength="100" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro"required>

			<br><br>
			<label><b><font face="geneva">Celular:</font></b></label>
			<input name="tel_celular_j" placeholder="Celular" id="tel_celular_j" method="post" type="textx" maxlength="13" size="30" onkeypress="mascara(this,'##-#####-####')">

			<br><br>
			<label><b><font face="geneva">*Telefone:</font></b></label>
			<input name="tel_comercial" placeholder="Telefone" id="tel_comercial" method="post" type="textx" maxlength="12" size="30" onkeypress="mascara(this,'##-####-####')"required>

			<br><br>
			<label><b><font face="geneva">*Endereço:</font></b></label>
			<input type="textx" name="ende_comercial" placeholder="Endereço" id="ende_comercial" maxlength="255" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro"required>

			<br><br>
			<label><b><font face="geneva">*Cidade:</font></b></label>
			<input type="textx" name="cidade_j" placeholder="Cidade" id="cidade_j" maxlength="255" onkeypress="volta_input(this.id)" value="" size="30" class="text inputErro"required>

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
	<?php while ($linha = mysqli_fetch_array($consulta_clientes_j)){ ?>
		<?php if ($linha['id_cliente_j'] == $_GET['editar_j']){ ?>
			
			<br><br><h1>Editar Cliente (Pessoa Jurídica)</h1>
			
			<form method="post" action="editar_j.php">
				<?php echo '<div style ="font-size:12px;text-align: rigth;font-weight:bold; color:red"><br>Os campos marcados com * são obrigatórios para o cadastro!</div>';?>
				
				<input type ="hidden" name ="id_cliente_j" value="<?php echo $linha['id_cliente_j'];?>">

				<br><br>
				<label><b><font face="geneva">*CNPJ:</font></b></label>
				<input name="cnpj" placeholder="CNPJ" id="cnpj" method="post" type="textx" maxlength="18" size="30" onkeypress="mascara(this,'##.###.###/####-##')" value="<?php echo $linha['cnpj'];?>"required>

				<br><br>
				<label><b><font face="geneva">*Nome da Empresa:</font></b></label>
				<input type="textx" name="empresa" placeholder="Nome da Empresa" id="empresa" maxlength="100" onkeypress="volta_input(this.id)" value="<?php echo $linha['empresa'];?>" size="30" class="text inputErro"required>

				<br><br>
				<label><b><font face="geneva">Celular:</font></b></label>
				<input name="tel_celular_j" placeholder="Celular" id="tel_celular_j" method="post" type="textx" maxlength="13" size="30" onkeypress="mascara(this,'##-#####-####')" value="<?php echo $linha['tel_celular_j'];?>">

				<br><br>
				<label><b><font face="geneva">*Telefone:</font></b></label>
				<input name="tel_comercial" placeholder="Telefone" id="tel_comercial" method="post" type="textx" maxlength="12" size="30" onkeypress="mascara(this,'##-####-####')" value="<?php echo $linha['tel_comercial'];?>"required>

				<br><br>
				<label><b><font face="geneva">*Endereço:</font></b></label>
				<input type="textx" name="ende_comercial" placeholder="Endereço" id="ende_comercial" maxlength="255" onkeypress="volta_input(this.id)" size="30" class="text inputErro" value="<?php echo $linha['ende_comercial'];?>"required>

				<br><br>
				<label><b><font face="geneva">*Cidade:</font></b></label>
				<input type="textx" name="cidade_j" placeholder="Cidade" id="cidade_j" maxlength="255" onkeypress="volta_input(this.id)" size="30" class="text inputErro" value="<?php echo $linha['cidade_j'];?>"required>

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
				<input type="submit" value="Editar">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>