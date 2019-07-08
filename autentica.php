<?php

//CONECTA COM O BANCO DE DADOS 
require_once("abreconexao.php");

//RECEBE OS DADOS DO FORMULÁRIO 
$usuario = $_POST['user']; 
$senha = $_POST['senha'];
//VERIFICA 
//VERIFICA 
$sql = mysql_query("SELECT PA_CODIGO, PA_CPF FROM tb_paciente WHERE PA_CPF = '$usuario' AND PA_SENHA = '$senha'", $conexao) or die("ERRO NO COMANDO SQL");
$sql2 = mysql_query("SELECT fun_CODIGO, fun_CPF FROM tb_funcionario WHERE fun_CPF = '$usuario' AND fun_SENHA = '$senha'", $conexao) or die("ERRO NO COMANDO SQL");
$sql3 = mysql_query("SELECT den_CODIGO, den_CPF FROM tb_dentista WHERE den_CPF = '$usuario' AND den_SENHA = '$senha'", $conexao) or die("ERRO NO COMANDO SQL");
//LINHAS AFETADAS PELA CONSULTA
$row = mysql_num_rows($sql);
$row2 = mysql_num_rows($sql2);
$row3 = mysql_num_rows($sql3);

//VERIFICA SE RETORNOU ALGO 
if($row == 1)
{
    //PEGA OS DADOS 
    $id = mysql_result($sql, 0, "PA_CODIGO"); 
    $cpf = mysql_result($sql, 0, "PA_CPF");
    $nome = mysql_result($sql, 0, "PA_NOME");

    //INICIALIZA A SESSÃO 
    session_start();

    //GRAVA AS VARIÁVEIS NA SESSÃO 
    $_SESSION['id'] = $id; 
    $_SESSION['cpf'] = $cpf;
    $_SESSION['nome'] = $nome;


    //REDIRECIONA PARA A PÁGINA QUE VAI EXIBIR OS PRODUTOS 
    header("Location: indexcliente.php");
}


else if($row2==1)
{
    
        //PEGA OS DADOS 
    $id = mysql_result($sql2, 0, "FUN_CODIGO");
    $cpf = mysql_result($sql2, 0, "FUN_CPF");

    //INICIALIZA A SESSÃO 
    session_start();

    //GRAVA AS VARIÁVEIS NA SESSÃO 
    $_SESSION['id'] = $id; 
    $_SESSION['cpf'] = $cpf;
    $_SESSION['nome'] = $nome;

    //REDIRECIONA PARA A PÁGINA QUE VAI EXIBIR OS PRODUTOS 
    header("Location: indexfuncionario.php");
    }
    else if($row3==1){
        //PEGA OS DADOS 
    $id = mysql_result($sql3, 0, "den_CODIGO");
    $cpf = mysql_result($sql3, 0, "den_CPF");


    //INICIALIZA A SESSÃO 
    session_start();

    //GRAVA AS VARIÁVEIS NA SESSÃO 
    $_SESSION['id'] = $id; 
    $_SESSION['cpf'] = $cpf;
    $_SESSION['nome'] = $nome;

    //REDIRECIONA PARA A PÁGINA QUE VAI EXIBIR OS PRODUTOS 
    header("Location: indexdentista.php");
}
    


?>