<?php

	require_once("abreconexao.php");
    require_once("verifica.php");

		$SqlSit2 = "INSERT into tb_caixa";
		$SqlSit2 = $SqlSit2. "(cai_data,cai_valor, cai_paciente, cai_detalhes)";
		$SqlSit2 = $SqlSit2. "values('$_POST[data]',  '$_POST[valor]', '$_POST[paciente]', '$_POST[detalhes]'); ";
		$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
		
		
header("Location: incluirpagamentoden.php");
		
		
		

?>
