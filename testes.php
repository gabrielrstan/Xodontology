
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
            <a href="index.php"> <button type="button" class="btn btn-danger">Logout</button></a>
              </form>
              
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        

<div class="container theme-showcase" role="main">

        <div class="well">

		<center><h1><b><br>Agendamento</b></h1></center>
		</div>
        
        <div class="alert alert-info" role="alert">
      <center><strong>Agendar</strong> <br>Para agendar uma consulta basta escolher a data e o horário disponivel e confirmar seu agendamento.</center>
    </div>
    <div class="page-header">
        <form class="form-horizontal" action="enviarcliente.php" method="post" name="form1">
    			
                <fieldset>
            
             <label class="col-md-4 control-label" for="data">Escolha o Dentista </label>  
			      
<select>
  <option value="Paciente 1">Selecione</option>
  <option value="Paciente 1">Dentista 1</option>
  <option value="Paciente 2">Dentista 2</option>
  <option value="Paciente 3">Dentista 3</option>
  <option value="Paciente 4">Dentista 4</option>
</select>
            
            </fieldset>
            
            <fieldset>

    
    <div class="form-group">
			  <label class="col-md-4 control-label" for="data">Escolha a Data </label>  
			  <div class="col-md-4">
			  <input id="nascimento" name="nascimento" type="date" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>
            </fieldset>
            <fieldset>
    
    <div class="form-group">
			  <label class="col-md-4 control-label" for="nascimento">Escolha a Hora </label>  
			  <div class="col-md-4">
			  <input id="nascimento" name="nascimento" type="time" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>
    </fieldset>
    
<center> <button type="button" class="btn btn-success">Confirmar</button></center>
        </form>
    </div>
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