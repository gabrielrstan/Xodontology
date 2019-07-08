<?php
    
if ($_POST['user'] == 1 && $_POST['senha'] == 'renan')
{
    // Cliente
    header("Location: indexcliente.php");
	
}

elseif ($_POST['user'] == 2 && $_POST['senha'] == 'renan')
{
    // Segurança
    header("Location: indexseguranca.php");
}

elseif ($_POST['user'] == 3 && $_POST['senha'] == 'renan')
{
    // Cozinheiro
    header("Location: indexcozinheiro.php");
}

elseif ($_POST['user'] == 4 && $_POST['senha'] == 'renan')
{
    // Manobrista
    header("Location: indexmanobrista.php");
}

elseif ($_POST['user'] == 5 && $_POST['senha'] == 'renan')
{
    // Contador
    header("Location: indexcontador.php");
}

elseif ($_POST['user'] == 6 && $_POST['senha'] == 'renan')
{
    // Empresa de Limpeza
    header("Location: indexlimpeza.php");
}

elseif ($_POST['user'] == 7 && $_POST['senha'] == 'renan')
{
    // Secretário
    header("Location: indexsecretario.php");
}

elseif ($_POST['user'] == 8 && $_POST['senha'] == 'renan')
{
    // Gerente
    header("Location: indexgerente.php");
}

else
{
    // Retorna à primeira tela caso haja algum problema
    header("Location: index.php");
}

?>
