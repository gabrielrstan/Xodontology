<?php
require_once("abreconexao.php");
session_start();
?>
<html>
	<body>
		<head>
			<title> Cancelar consulta</title>
		</head>
		<?php
		
			echo $dados = "DELETE FROM tb_consulta 
            WHERE con_codigo = $_POST[codigo]";
			$query = mysql_query($dados, $conexao) or die (mysql_error());
			mysql_close($conexao);
			header("Location: cancelarconsultadentista.php");
		?>
	</body>
</html>
