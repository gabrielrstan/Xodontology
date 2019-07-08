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
			echo $dados ="update tb_dentista set den_NOME='$_POST[nome]',den_telefone='$_POST[telefone]',den_email='$_POST[email]',den_endereco='$_POST[endereco]',den_salario='$_POST[salario]' where den_cpf='$_POST[cpf]'";
			$query = mysql_query($dados, $conexao) or die (mysql_error());
			mysql_close($conexao);
			header("Location: alterardendentista.php");
		?>
	</body>
</html>