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
		
		header("Location: alterardentista.php");
		
		else
			echo $dados ="update tb_dentista set den_NOME='$_POST[nome]',den_SENHA='$_POST[senha]',den_telefone='$_POST[telefone]',den_email='$_POST[email]',den_endereco='$_POST[endereco]' where den_CPF = " .$_SESSION['cpf'];
			$query = mysql_query($dados, $conexao) or die (mysql_error());
			mysql_close($conexao);
			header("Location: alterardentista.php");
		?>
	</body>
</html>