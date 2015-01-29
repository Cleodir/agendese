<?php

if ($_POST['cadastrar'] == 'Cadastrar') 
{
	$objFornecedor->setNome($_POST["nome"]);
	$objFornecedor->setTelefone($_POST["telefone"]);
	$objFornecedor->setCelular($_POST["celular"]);
	$objFornecedor->setEmail($_POST["email"]);
	$objFornecedor->setSite($_POST["site"]);
	$objFornecedor->setCep($_POST["cep"]);
	$objFornecedor->setLogradouro($_POST["logradouro"]);
	$objFornecedor->setNumero($_POST["numero"]);
	$objFornecedor->setBairro($_POST["bairro"]);
	$objFornecedor->setCidade($_POST["cidade"]);
	$objFornecedor->setEstado($_POST["estado"]);
	$objFornecedor->setLatitude($_POST["latitude"]);
	$objFornecedor->setLongitude($_POST["longitude"]);
	$objFornecedor->setCpf_cnpj($_POST["cpf_cnpj"]);
	$objFornecedor->setIe($_POST["ie"]);
	$objFornecedor->setServicos($_POST["servicos"]);
	$objFornecedor->setLogin($_POST["senha"]);
	$objFornecedor->setSenha($_POST["confirmaSenha"]);
	$objFornecedor->setDB();
}

?>
	<div id="boxFornecedor">
	<h1>Prestador de Servi�os</h1>

	<p>Explica��o do cadastro</p>


		<form name="frmCadastraVeiculo" method="POST" action="">

			<table class="table">
				<tr>
					<td align=right>*Nome</td>
					<td><input type="text" name="nome" id="nome" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Telefone</td>
					<td><input type="text" name="telefone" id="telefone" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Celular</td>
					<td><input type="text" name="celular" id="celular" value="" /></td>
				</tr>
				<tr>
					<td align=right>E-mail <small>(opcional)</small></td>
					<td><input type="text" name="email" id="email" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Site</td>
					<td><input type="text" name="site" id="site" value="" /></td>
				</tr>
				<tr>
					<td align=right>*CEP</td>
					<td><input type="text" name="cep" id="cep" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Logradouro</td>
					<td><input type="text" name="logradouro" id="logradouro" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Numero</td>
					<td><input type="text" name="n�" id="n�" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Bairro</td>
					<td><input type="text" name="bairro" id="bairro" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Cidade</td>
					<td><input type="text" name="cidade" id="cidade" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Estado</td>
					<td><input type="text" name="estado" id="estado" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Latitude</td>
					<td><input type="text" name="latitude" id="latitude" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Longitude</td>
					<td><input type="text" name="longitude" id="longitude" value="" /></td>
				</tr>
				<tr>
					<td align=right>*CPF/CNPJ</td>
					<td><input type="text" name="cpf_cnpj" id="cpf_cnpj" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Ie</td>
					<td><input type="text" name="ie" id="ie" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Servi�os</td>
					<td><input type="text" name="servicos" id="servicos" value="" /></td>
				</tr>
				<tr>
					<td colspan=2 align=left>
	<input type='checkbox' name='manicure' id='manicure' value="" /> 
	Manicure
				</td>
				<tr>
					<td colspan=2 align=left>
	<input type='checkbox' name='cabelereiro' id='cabelereiro' value="" /> 
	Cabelereiro
				</td>
				<tr>
					<td colspan=2 align=left>
	<input type='checkbox' name='massoterapeuta' id='massoterapeuta' value="" /> 
	Massoterapeuta
				</td>
				<tr>
					<td colspan=2 align=left>
	<input type='checkbox' name='fisioterapeuta' id='fisioterapeuta' value="" /> 
	Fisioterapeuta
				</td>

				<tr>
					<td align=right>*Senha</td>
					<td><input type="password" name="login" id="login" value="" /></td>
				</tr>
				<tr>
					<td align=right>*Confirmar Senha</td>
					<td><input type="password" name="confirmaSenha" id="confirmaSenha" value="" /></td>
				</tr>
				<tr>
					<td colspan=2 align=center>
	<input type='checkbox' name='concordaTermos' id='concordaTermos' value='Sim' /> 
	* Concordo com os Termos de Servi�o e a Pol�tica de Privacidade.
					</td>
				</tr>						
				<tr>

					<td colspan=2 align=center><input type="submit"  name="cadastrar" value="Cadastrar"/></td>
				</tr>

			</table>

		</form>
</div>	


<div id="boxImagem1">
	<img src="images/esmalte.jpg" />


</div>	

<div class="clear">
</div>
