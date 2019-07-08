<?php
require_once ("abreconexao.php");
require_once ("verifica.php");
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

            </button><a class="navbar-brand" href="indexcliente.php">Xodontology</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
            
            <ul class="nav navbar-nav">
            <li class="dropdown">
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

		<center><h1><b><br>Agendamento</b></h1></center>
		</div>
        
        <div class="alert alert-info" role="alert">
      <center><strong>Agendar</strong> <br>Para agendar uma consulta basta escolher a data e o horário disponivel e confirmar seu agendamento.</center>
    </div>
    <div class="page-header">
        <form class="form-horizontal" action="enviarconsultapa.php" method="post" name="form1">
            
            
            <div class="form-row">
                <div class="col-md-4">
             <label class="control-label" for="data">Escolha o Dentista </label>  
			      
<select class="form-control" required name="dentista">
    <option value=""></option>
    <?php 
    
    $sql="select den_nome
    from tb_dentista";
    
    $den=mysql_query($sql,$conexao) or die(mysql_error());
    
    while ($linha=mysql_fetch_array($den)){
        $dentista=$linha["den_nome"];
    
    
    ?>
  <option value="<?php echo $dentista;?>"><?php echo $dentista; ?></option>
  <?php
    }
?>
    
</select>
                    </div>

            <div class="col-md-2">
			  <label class="control-label" for="data">Escolha a Data</label>  
			  <input id="data" name="data" type="date" placeholder="" class="form-control input-md" required="">
				
        </div>
    
    <div class="col-md-2">
			  <label class="control-label" for="nascimento">Escolha a Hora </label>  
			  <input id="hora" name="hora" type="time" placeholder="" class="form-control input-md" required="">
			</div>
                    
   <div class="col-md-4">
<label class="control-label" for="paciente"> Paciente </label>  
			      
<select class="form-control" required name="paciente">
    <option value=""></option>
    <?php 
    
            $cpf=$_SESSION['cpf'];

    $sql2="select pa_nome,pa_cpf
    from tb_paciente
    where pa_CPF = " .$_SESSION['cpf'];
    
    
    $pa=mysql_query($sql2,$conexao) or die(mysql_error());
    
    while ($linha2=mysql_fetch_array($pa)){
        $paciente=$linha2["pa_nome"];
    
    
    ?>
  <option value="<?php echo $paciente;?>"><?php echo $paciente; ?></option>
   
  <?php
    }
    
?>
      <input type="hidden" value="<?php echo $cpf; ?>" name="cpf">
                    
    
</select>
                </div> 
                <div class="col-md-12">
                   <br> <center><button type="submit" class="btn btn-success">Confirmar</button></center>
                    </div>
                
            </div>
                </form>


    </div>
        </div>
        
<br>        
<iframe src="https://calendar.google.com/calendar/embed?src=m903g97f38lq75lg8frkgg50t8%40group.calendar.google.com&ctz=America%2FSao_Paulo" style="border: 0" width="450" height="500" frameborder="0" scrolling="no"></iframe>
<iframe src="https://calendar.google.com/calendar/embed?src=5p3qmudanspodhljut3ofj28fc%40group.calendar.google.com&ctz=America%2FSao_Paulo" style="border: 0" width="450" height="500" frameborder="0" scrolling="no"></iframe>
<iframe src="https://calendar.google.com/calendar/embed?src=ndrm8ao4oacftj3gpoihb9bo84%40group.calendar.google.com&ctz=America%2FSao_Paulo" style="border: 0" width="440" height="500" frameborder="0" scrolling="no"></iframe>

      


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