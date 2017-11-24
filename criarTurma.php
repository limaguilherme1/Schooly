<?php include 'connection/connection.php';

	
?>
<!doctype html>
<html lang="en">

<head>
	<?php include '_header.php'; ?>
</head>

<body onload="startTime()">

	<div class="wrapper">
		<?php include '_navbar.php'; ?>

		<div class="main-panel">
			<?php include '_topbar.php'; ?>


			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="header">
									<h4 class="title">Criar Turma</h4>
								</div>
								<div class="content">
									<form method="post" action="inserirTurma.php">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Nome da turma</label>
													<input type="text" class="form-control" placeholder="Nome" name="nome">
												</div>
											</div>

										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Professor</label>
													<input type="text" class="form-control" placeholder="Company" value="<?php echo $row['nome'] . ' ' . $row['sobrenome'] ?>">
												</div>
											</div>
											<div class="col-md-6">
											</div>
										</div>
										<input type="hidden" value="<?php echo $row['id']?>" name="profID">


										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Descrição do assunto</label>
													<textarea rows="5" class="form-control" name="descricao"></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Ementa</label>
													<textarea rows="5" class="form-control" name="ementa"></textarea>
												</div>
											</div>
										</div>

										<button type="submit" class="btn btn-info btn-fill pull-right">Criar Turma</button>
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