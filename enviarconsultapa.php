<?php

	require_once("abreconexao.php");
    require_once("verifica.php");

		$SqlSit2 = "INSERT into tb_consulta";
		$SqlSit2 = $SqlSit2. "(con_data,con_hora, con_dentista, con_pa_cpf,con_paciente)";
		$SqlSit2 = $SqlSit2. "values('$_POST[data]',  '$_POST[hora]', '$_POST[dentista]', '$_POST[cpf]', '$_POST[paciente]'); ";
		$rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
		
		
header("Location: marcarconsultapaciente.php");
		
		
		

?>
