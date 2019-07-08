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

    <title>Historico de Consultas</title>

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
            <a class="navbar-brand" href="indexcliente.php">Xodontology</a>
        </div>
          
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultas <span class="caret"></span></a>
              <ul class="dropdown-menu">
            	<li><a href="marcarconsultapaciente.php">Marcar Consulta</a></li>
            	<li><a href="cancelarconsultacliente.php">Cancelar Consulta</a></li>
				<li><a href="consultascliente.php">Minhas Consultas</a></li>
				
              </ul>
                
            </li>
			  
          </ul>
            <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Finanças <span class="caret"></span></a>
              <ul class="dropdown-menu">
            	<li><a href="historicopagamentocliente.php">Pagamentos Realizados</a></li>
            	<li><a href="dividascliente.php">Pagamentos Pendentes</a></li>
				
              </ul>
                
            </li>
			  
          </ul>
              
              <form class="navbar-form navbar-right" action="login.php" method="post" name="form1">
            <a href="alterarcliente.php"> <button type="button" class="btn btn-primary">Meus Dados</button></a>
            <a href="logout.php"> <button type="button" class="btn btn-danger">Logout</button></a>
              </form>
              
        </div><!--/.nav-collapse -->
          
      </div>
    </nav>
      
      
    <div class="container theme-showcase" role="main">

        <div class="well">

		<center><h1><b><br>Historico de Consultas</b></h1></center>
		</div>
        
        <div class="alert alert-info" role="alert">
      <center><strong>Lista de consultas</strong> <br>Aqui estão todas as consultas feitas por você.</center>
    </div>

		
		
		
        <table class="table table-striped">
          <thead>
            <tr>
              
              <th><center>Data</center></th>
              <th><center>Hora</center></th>
              <th><center>Dentista</center></th>

            </tr>
          </thead>
            
            <?php
        $sql = "SELECT con_data, con_hora, con_dentista,con_pa_cpf FROM tb_consulta
            where con_data < sysdate() 
            and con_pa_cpf = " .$_SESSION['cpf'];

            
				$rs = mysql_query($sql,$conexao) or die ($sql);
        
        
        			
				while($linha=mysql_fetch_array($rs)){
				$data=$linha["con_data"];
				$hora=$linha["con_hora"];
				$dentista=$linha["con_dentista"];
                $cpf=$linha["con_pa_cpf"];
                $hora=str_replace(":00.000000","",$hora);

				

        
        ?>
                <form class="" action="cancelarconsultacliente2.php" method="post" name="form1">
                <tr>
                    <td><center><?php echo $data; ?></center></td>
                    <td><center><?php echo $hora; ?></center></td>
                    <td><center><?php echo $dentista; ?></center></td>
                     
                    
                    
                    
                </tr>
                </form>
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