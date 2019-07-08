<?php

	require_once("abreconexao.php");
    require_once("verifica.php");

		$SqlSit2 = "INSERT into tb_desc_consulta";
		$SqlSit2 = $SqlSit2. "(desc_paciente, desc_data, desc_hora, desc_descricao)";
		$SqlSit2 = $SqlSit2. "values('$_POST[paciente]',  '$_POST[data]', '$_POST[hora]', '$_POST[descricao]'); ";
		$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
		
		
header("Location: adicionardescricao.php");
		
		
		

?>
