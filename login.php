<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">


		<!-- Website CSS style -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/cadastro.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Schooly - Login</title>
	</head>
	<body>
		<br>
			<br>
			<br>
		<div class="container">
					<div class="row main">
				<div class="main-login main-center">
				<h4>Schooly - Sua plataforma de ensino gamificada</h4>
				
					<form class="" method="post" action="loginform.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Login</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-at fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Digite seu email"/>
								</div>
							</div>
						</div>
            <div class="form-group">							
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="senha" id="senha"  placeholder="Digite sua senha"/>
								</div>
							</div>
						</div>

						

						<div class="form-group ">
							<input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button"/>
						</div>
						<p>Não tem conta? Faça seu <a href="cadastro/cadastro.php" style="text-align:right">cadastro</a></p>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>