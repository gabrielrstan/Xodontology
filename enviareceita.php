<?php

	require_once("abreconexao.php");
    require_once("verifica.php");

		$SqlSit2 = "INSERT into tb_receita";
		$SqlSit2 = $SqlSit2. "(rece_paciente, rece_data, RECE_PRESCRICAO)";
		$SqlSit2 = $SqlSit2. "values('$_POST[paciente]',  '$_POST[data]',  '$_POST[prescricao]'); ";
		$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
		
		
header("Location: receita.php");
		
		
		

?>
