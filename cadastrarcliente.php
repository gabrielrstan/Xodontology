<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/Dente.ico" type="image/x-icon" />">

    <title>Cadastre-se aqui e acompanhe suas consultas</title>

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
          <a class="navbar-brand" href="index.php">Xodontology</a>
        </div>
          
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="cadastrarcliente.php">Cadastre-se</a></li>
            </ul>
            
          <form class="navbar-form navbar-right" action="autentica.php" method="post" name="form1">
            <div class="form-group">
              <input id="user" type="text" placeholder="Usuario" class="form-control" name="user">
            </div>
            <div class="form-group">
              <input id="senha" type="password" placeholder="Senha" maxlength="16" class="form-control" name="senha">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        </div><!--/.navbar-collapse -->
          
          
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <!--<div class="jumbotron">
        <center><h1>Cadastre-se </h1></center>
      </div> -->
        <div class="well">

        <center><h1><b><br>Cadastre-se Aqui</b></h1></center>
		<center><h2><b>Marque e acompanhe suas consultas</b></h2></center>
      </div>
        

      <div class="page-header">
        <form class="form-horizontal" action="enviarcliente.php" method="post" name="form1">
			<fieldset>

                
            
			<!-- Form Name -->
			<legend>Cadastro</legend>

			<!-- Text input -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nome">Nome Completo</label> 
			  <div class="col-md-8">
			  <input id="nome" name="nome" type="text" placeholder="Digite aqui seu nome" class="form-control input-md" required="">
				
			  </div>
			</div>
			
							
			    
            <!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="senha">Senha</label>  
			  <div class="col-md-8">
                <div class="input-group">
			  <input id="senha" name="senha" type="password" placeholder="Digite aqui a senha que você usará"  maxlength="16" class="form-control input-md" required="">
				<span class="input-group-addon">Com no máximo 16 caracteres</span>
                  </div>  
                  
			  </div>
			</div>    
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="cpf">CPF</label>  
			  <div class="col-md-8">
                  <div class="input-group">
			  <input id="cpf" name="cpf" type="text" placeholder="Digite aqui seu CPF" class="form-control input-md" required="">
              <span class="input-group-addon">Sem pontos ou traços</span>
                  </div>
				
			  </div>
			</div>

            <!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="rg">RG</label>  
			  <div class="col-md-8">
                  <div class="input-group">
			  <input id="rg" name="rg" type="text" placeholder="Digite aqui seu RG" class="form-control input-md" required="">
              <span class="input-group-addon">Sem pontos ou traços</span>
                  </div>
				
			  </div>
			</div>
                
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nascimento">Data de Nascimento</label>  
			  <div class="col-md-8">
			  <input id="nascimento" name="nascimento" type="date" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

		

			<!-- Appended Input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="telefone">Telefone</label>
			  <div class="col-md-8">
				<div class="input-group">
				  <input id="telefone" name="telefone" class="form-control" placeholder="Digite seu telefone" type="text">
				  <span class="input-group-addon">Com DDD, sem espaços, pontos ou hífens</span>
				</div>
				
			  </div>
			</div>
            <div class="form-group">
			  <label class="col-md-4 control-label" for="endereco">Endereço</label>
			  <div class="col-md-8">
			  <input id="endereco" name="endereco" type="text" placeholder="Digite aqui seu Endereço" class="form-control input-md" required="">
                  
			  </div>
			</div>
            <div class="form-group">
			  <label class="col-md-4 control-label" for="complemento">Complemento</label>
			  <div class="col-md-8">
			  <input id="complemento" name="complemento" type="text" placeholder="Digite aqui o Complemento se existir" class="form-control input-md" >
                  
			  </div>
			</div>
                <div class="form-group">
			  <label class="col-md-4 control-label" for="bairro">Bairro</label>
			  <div class="col-md-8">
			  <input id="bairro" name="bairro" type="text" placeholder="Digite aqui o Bairro" class="form-control input-md" required="">
                  
			  </div>
			</div>
                <div class="form-group">
			  <label class="col-md-4 control-label" for="cidade">Cidade</label>
			  <div class="col-md-8">
			  <input id="cidade" name="cidade" type="text" placeholder="Digite aqui a Cidade" class="form-control input-md" required="">
                  
			  </div>
			</div>
                

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email">E-Mail</label>
			  <div class="col-md-8">
			  <input id="email" name="email" type="email" placeholder="Digite aqui seu E-Mail" class="form-control input-md" required="">
                  
			  </div>
			</div>
                	<!-- Multiple Radios (inline) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="sexo">Sexo</label>
			  <div class="col-md-4"> 
				<label class="radio-inline" for="txtSexo-0">
				  <input type="radio" name="sexo" id="txtSexo-0" value="M">
				  Masculino
				</label> 
				<label class="radio-inline" for="txtSexo-1">
				  <input type="radio" name="sexo" id="txtSexo-1" value="F">
				  Feminino
				</label>
                
                  
			  </div>
			</div>
                
            <!-- CheckBoxs -->
			<div class="form-group">
                <label class="col-md-4 control-label">Termos de Uso</label>
                <div class="col-md-4">
                    <label class="form-check-label" for="check">
				  <input type="checkbox" name="check" id="check" value="check" class="form-check-input" required>
				  Aceito os Termos de Uso
				</label>
                </div>        
                    
            </div>
                
                

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit" class="btn btn-success">Cadastrar</button>
			<!-- <input type="submit" name="Submit" value="FINALIZAR CADASTRO">
			<input type="reset" value="Limpar" name="B2"> -->
                
			</fieldset>
		</form>

      </div>


    </div> <!-- /container -->

	  
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