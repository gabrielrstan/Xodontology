<?php

	require_once("abreconexao.php");
    require_once("verifica.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/Dente.ico" type="image/x-icon" />

    <title>Xondontology</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="indexdentista.php">Xodontology</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
             
            <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dentista <span class="caret"></span></a>
              <ul class="dropdown-menu">
            	<li><a href="cadastrardentista.php">Cadastrar Dentista</a></li>
            	<li><a href="alterardendentista.php">Gerenciar Dentista</a></li>
				
              </ul>
                
            </li>
			  
          </ul>
            
            <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Funcionario <span class="caret"></span></a>
              <ul class="dropdown-menu">
            	<li><a href="cadastrarfuncionario.php">Cadastrar Funcionario</a></li>
            	<li><a href="alterarfundentista.php">Gerenciar Funcionario</a></li>
				
              </ul>
                
            </li>
			  
          </ul>
            <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pacientes <span class="caret"></span></a>
              <ul class="dropdown-menu">
            	<li><a href="cadastrarclientedentista.php">Cadastrar Paciente</a></li>
            	<li><a href="alterarclientedentista.php">Editar Paciente</a></li>
				
              </ul>
                
            </li>
			  
          </ul>
           
            <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultas <span class="caret"></span></a>
              <ul class="dropdown-menu">
            	<li><a href="marcarconsultadentista.php">Marcar Consulta</a></li>
            	<li><a href="cancelarconsultadentista.php">Cancelar Consulta</a></li>
                <li><a href="adicionardescricao.php">Adicionar Descrição Consulta</a></li>
            	<li><a href="receita.php">Gerar Receita</a></li>

				
              </ul>
                
            </li>
			  
          </ul>
        <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Finanças <span class="caret"></span></a>
              <ul class="dropdown-menu">
            	<li><a href="historicopagamentosden.php">Historico de Caixa</a></li>
            	<li><a href="historicodebitosden.php">Historico de Debitos</a></li>
            	<li><a href="pagamentosreceberden.php">Pagamentos Pendentes a Receber</a></li>
                  <li><a href="incluirpagamentoden.php">Incluir Pagamento</a></li>
                  <li><a href="incluirdespesaden.php">Incluir Despesa</a></li>
                  
				
              </ul>
                
            </li>
			  
          </ul>
              <form class="nav navbar-nav" >
                  <li><a href="agendaden.php"> Agenda</a></li>
            
              </form>
                  
              <form class="navbar-form navbar-right" name="form1">
            <a href="alterardentista.php"> <button type="button" class="btn btn-primary">Meus Dados</button></a>
            <a href="logout.php"> <button type="button" class="btn btn-danger">Logout</button></a>
              </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        <div class="container theme-showcase" role="main">

        <div class="well">

		<center><h1><b><br>Historico de Debidos</b></h1></center>
		</div>
        
        <div class="alert alert-info" role="alert">
      <center><strong>Lista de Debidos</strong> <br>Aqui estão todos os debitos realizados.</center>
    </div>

		
		
		
        <table class="table table-striped">
          <thead>
            <tr>
              
            <th><center>Motivo</center></th>
            <th><center>Data </center></th>
            <th><center>Valor</center></th>
            <th><center>Detalhes</center></th>

            
              <?php
        $sql = "SELECT cai_deb_motivo, cai_deb_data, cai_deb_valor, cai_deb_detalhes FROM tb_caixa_deb
            where cai_deb_data <= sysdate()  ";
            

            
				$rs = mysql_query($sql,$conexao) or die ($sql);
        
        
        		while($linha=mysql_fetch_array($rs)){
				$motivo=$linha["cai_deb_motivo"];
				$data=$linha["cai_deb_data"];
				$valor=$linha["cai_deb_valor"];
				$detalhes=$linha["cai_deb_detalhes"];


        
        ?>
                <tr>
                    <td><center><?php echo $motivo; ?></center></td>
                    <td><center><?php echo $data; ?></center></td>
                    <td><center><?php echo $valor; ?></center></td>
                    <td><center><?php echo $detalhes; ?></center></td>
                    

            </tr>
          </thead>
			
			        <?php } ?>

		

         
			
			
		
        </table>
    </div>
      



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->      <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
        
