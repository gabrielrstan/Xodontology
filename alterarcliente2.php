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
			echo $dados ="update tb_paciente set PA_NOME='$_POST[nome]',PA_SENHA='$_POST[senha]',PA_telefone='$_POST[telefone]',PA_email='$_POST[email]',PA_endereco='$_POST[endereco]' where PA_CPF = " .$_SESSION['cpf'];
			$query = mysql_query($dados, $conexao) or die (mysql_error());
			mysql_close($conexao);
			header("Location: alterarcliente.php");
		?>
	</body>
</html>