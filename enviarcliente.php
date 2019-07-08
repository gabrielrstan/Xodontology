<?php

	require_once("abreconexao.php");

	if(!$_POST['nome'] || !$_POST['senha'] || !$_POST['cpf'] || !$_POST['rg'] || !$_POST['nascimento'] || !$_POST['email']| !$_POST['sexo'] || !$_POST['telefone']|| !$_POST['endereco']|| !$_POST['bairro']|| !$_POST['cidade'])
	{
        header("Location: index.php");
	}

    else
	{
		$SqlSit2 = "INSERT into tb_paciente";
		$SqlSit2 = $SqlSit2. "(PA_NOME, PA_senha, PA_cpf, PA_rg, PA_dtnascimento, PA_telefone, PA_endereco, PA_complemento, PA_bairro, PA_cidade, PA_email, PA_sexo) ";
		$SqlSit2 = $SqlSit2. "values('$_POST[nome]',  '$_POST[senha]', '$_POST[cpf]', '$_POST[rg]', '$_POST[nascimento]', '$_POST[telefone]', '$_POST[endereco]', '$_POST[complemento]', '$_POST[bairro]', '$_POST[cidade]', '$_POST[email]',  '$_POST[sexo]'); ";
		$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
		
		session_start();
		
		$sql = mysql_query("SELECT PA_CODIGO FROM tb_paciente WHERE cpf = '$_POST[cpf]'");
		
		//RECEBE OS DADOS
		$_SESSION['id'] = mysql_result($sql, 0, "PA_CODIGO");
		$_SESSION['cpf'] = $_POST['cpf'];
header("Location: indexcliente.php");
		
}		
		

?>
