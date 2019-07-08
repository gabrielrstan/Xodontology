<?php

	require_once("abreconexao.php");

	
		$SqlSit2 = "INSERT into tb_dentista";
		$SqlSit2 = $SqlSit2. "(den_NOME, den_senha, den_cpf, den_rg, den_dtnascimento, den_telefone, den_endereco, den_complemento , den_bairro, den_cidade, den_email,den_salario, den_sexo) ";
		$SqlSit2 = $SqlSit2. "values('$_POST[nome]',  '$_POST[senha]', '$_POST[cpf]', '$_POST[rg]', '$_POST[nascimento]', '$_POST[telefone]', '$_POST[endereco]', '$_POST[complemento]', '$_POST[bairro]', '$_POST[cidade]', '$_POST[email]','$_POST[salario]',  '$_POST[sexo]'); ";
		$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
		
		
header("Location: cadastrardentista.php");
		
		
		

?>
