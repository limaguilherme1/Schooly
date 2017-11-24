<?php include 'connection/connection.php';

	
?>
<!doctype html>
<html lang="en">

<head>
	<?php include '_header.php'; ?>
	<style>
		/* Esconde o input */

		input[type='file'] {
			display: none;
		}
	</style>

</head>

<body onload="startTime()">

	<div class="wrapper">
		<?php include '_navbar.php'; ?>

		<div class="main-panel">
			<?php include '_topbar.php'; ?>


			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<div class="card card-user">
								<div class="image">
									<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." />
								</div>
								<div class="content">
									<div class="author">
										<a href="#">
                                    <img class="avatar border-gray" src="upload/fotos/<?php echo $row['imagem']; ?>" alt="..."/>

                                      <h4 class="title"><b><?php echo $row['nome'] . ' ' . $row['sobrenome'];?></b><br />
                                         <small><?php echo $row['email'] ;?></small>
                                      </h4>
                                    </a>
									</div>
									<p class="description text-center">"<?php echo $row['descricao_usuario']; ?>"
									</p>
									<p class="description text-center">Level:
										<?php echo $row['level']; ?>
									</p>
								</div>								
							</div>
							<div class="card hidden-sm hidden-md hidden-xs text-center">
								<div class="content hidden-sm hidden-md hidden-xs">
									<form action="upload/upload.php" method="post" enctype="multipart/form-data">
										<p class="description text-center">Mudar a foto de perfil:</p>

										<label for="fileToUpload" class="btn btn-info btn-fill ">Selecionar</label>
										<input class="btn btn-info btn-fill" type="file" name="fileToUpload" id="fileToUpload"><br>
										<input class="btn btn-info btn-fill" type="submit" value="UPLOAD" name="submit">
									</form>
								</div>
							</div>
							
						</div>
						<div class="col-md-8">
							<div class="card">
								<div class="header">
									<h4 class="title">Editar Perfil</h4>
								</div>
								<div class="content">
									<form method="post" action="atualizarPerfil.php">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="exampleInputEmail1">Email</label>
													<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email'] ?>">
													<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Primeiro nome</label>
													<input type="text" name="nome" class="form-control" placeholder="Company" value="<?php echo $row['nome'] ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Sobrenome</label>
													<input type="text" name="sobrenome" class="form-control" placeholder="Last Name" value="<?php echo $row['sobrenome'] ?>">
												</div>
											</div>
										</div>



										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Cidade</label>
													<input type="text" name="cidade" class="form-control" placeholder="City" value="<?php echo $row['cidade'] ?>">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>País</label>
													<input type="text" name="pais" class="form-control" placeholder="Country" value="<?php echo $row['pais'] ?>">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Descrição</label>
													<textarea rows="5" name="descricao" class="form-control" placeholder="Here can be your description" value="Mike"><?php echo $row['descricao_usuario']; ?></textarea>
												</div>
											</div>
										</div>

										<button type="submit" class="btn btn-info btn-fill pull-right">Atualizar Perfil</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>							
						</div>
						


					</div>
				</div>
			</div>


			<?php include '_footer.php'; ?>

		</div>
	</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<?php include 'clock.php'; ?>
</html>