<?php
require_once("abreconexao.php");
session_start();
?>
<html>
	<body>
		<head>
			<title> Alterar Cliente</title>
		</head>
		<?php
		if(!$_POST['nome'])
		
		header("Location: alterarcliente.php");
		
		else
			echo $dados ="update tb_paciente set PA_NOME='$_POST[nome]',PA_telefone='$_POST[telefone]',PA_email='$_POST[email]',PA_endereco='$_POST[endereco]',PA_situacao='$_POST[situacao]' where PA_cpf='$_POST[cpf]'";
			$query = mysql_query($dados, $conexao) or die (mysql_error());
			mysql_close($conexao);
			header("Location: alterarclientedentista.php");
		?>
	</body>
</html>