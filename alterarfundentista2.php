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
			echo $dados ="update tb_funcionario set fun_NOME='$_POST[nome]',fun_telefone='$_POST[telefone]',fun_email='$_POST[email]',fun_endereco='$_POST[endereco]',fun_salario='$_POST[salario]' where fun_cpf='$_POST[cpf]'";
			$query = mysql_query($dados, $conexao) or die (mysql_error());
			mysql_close($conexao);
			header("Location: alterarfundentista.php");
		?>
	</body>
</html>