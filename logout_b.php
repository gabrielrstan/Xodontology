<?php
//INICIALIZA A SESSÃO 
session_start();


$_SESSION = array();
//DESTRÓI AS VARIÁVEIS 
unset($_SESSION['id']);
unset($_SESSION['nome']);

?>