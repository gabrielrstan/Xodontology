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
		
		header("Location: alterarfuncionario.php");
		
		else
			echo $dados ="update tb_funcionario set fun_NOME='$_POST[nome]',fun_SENHA='$_POST[senha]',fun_telefone='$_POST[telefone]',fun_email='$_POST[email]',fun_endereco='$_POST[endereco]' where fun_CPF = " .$_SESSION['cpf'];
			$query = mysql_query($dados, $conexao) or die (mysql_error());
			mysql_close($conexao);
			header("Location: alterarfuncionario.php");
		?>
	</body>
</html>