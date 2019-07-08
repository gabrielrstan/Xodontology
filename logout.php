<?php
//INICIALIZA A SESSÃO 
session_start();


$_SESSION = array();
//DESTRÓI AS VARIÁVEIS 
unset($_SESSION['id']);
unset($_SESSION['cpf']);
unset($_SESSION['nome']);

//REDIRECIONA PARA A TELA DE LOGIN 
header("Location: index.php");
?>