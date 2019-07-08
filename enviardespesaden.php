<?php

	require_once("abreconexao.php");
    require_once("verifica.php");

		$SqlSit2 = "INSERT into tb_caixa_deb";
		$SqlSit2 = $SqlSit2. "(cai_deb_data,cai_deb_valor, cai_deb_motivo, cai_deb_detalhes)";
		$SqlSit2 = $SqlSit2. "values('$_POST[data]',  '$_POST[valor]', '$_POST[motivo]', '$_POST[detalhes]'); ";
		$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
		
		
header("Location: incluirdespesaden.php");
		
		
		

?>
