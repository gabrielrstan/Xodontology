<?php

	require_once("abreconexao.php");

	
		$SqlSit2 = "INSERT into tb_funcionario";
		$SqlSit2 = $SqlSit2. "(fun_NOME, fun_senha, fun_cpf, fun_rg, fun_dtnascimento, fun_telefone, fun_endereco,fun_complemento ,fun_bairro, fun_cidade, fun_email,fun_salario, fun_sexo) ";
		$SqlSit2 = $SqlSit2. "values('$_POST[nome]',  '$_POST[senha]', '$_POST[cpf]', '$_POST[rg]', '$_POST[nascimento]', '$_POST[telefone]', '$_POST[endereco]', '$_POST[complemento]', '$_POST[bairro]', '$_POST[cidade]', '$_POST[email]','$_POST[salario]',  '$_POST[sexo]'); ";
		$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
		
		
header("Location: cadastrarfuncionario.php");
		
		
		

?>
