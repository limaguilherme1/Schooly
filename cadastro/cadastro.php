<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">


		<!-- Website CSS style -->
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/cadastro.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Schooly - Cadastro</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Schooly - Cadastro</h5>
					<form class="" method="post" action="enviarCadastro.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nome</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nome" id="name"  placeholder="Digite seu nome"/>
								</div>
							</div>
						</div>
            <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Sobrenome</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="sobrenome" id="lastname"  placeholder="Digite seu sobrenome"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Digite seu email"/>
								</div>
							</div>
						</div>					
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Descrição</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-info fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="sobre" id="password"  placeholder="Descrição"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
 							<label for="filter">Tipo de usuario</label>
								<select class="form-control" name="papel">
									<option value="" selected disabled></option>
									<option value="2">Professor</option>
									<option value="3">Aluno</option>									
								</select>
							</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="senha" id="confirm"  placeholder="Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input onclick='alert("Usuario criado!")' type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button"/>
						</div>
						
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