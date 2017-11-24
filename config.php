<?php include 'connection/connection.php';
?>
<!doctype html>
<html lang="en">

<head>
	<?php include '_header.php'; 
?>
	<style>
		/* Esconde o input */

		input[type='file'] {
			display: none;
		}
	</style>
</head>

<body onload="startTime()">
	<div class="wrapper">
		<?php include '_navbar.php';
?>
		<div class="main-panel">
			<?php include '_topbar.php';
?>
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="header">
									<h4 class="title">Configurações</h4>
								</div>
								<div class="content">
									<form method="post" action="mudarConfig.php">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="exampleInputEmail1">Escolher cor barra de navegação:</label>
													<select class="form-control" name="cor">
														<option value="" selected disabled></option>
														<option value="azure">Azure</option>
														<option value="blue">Blue</option>
														<option value="green">Green</option>
														<option value="orange">Orange</option>
														<option value="red">Red</option>
														<option value="purple">Purple</option>														
													</select>
												</div>
												<input type='hidden' name='usuario_ID' value="<?php echo $row['id'] ?>"></div>
										</div><button type="submit" class="btn btn-info btn-fill pull-right">Atualizar configurações</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include '_footer.php';
?>
		</div>
	</div>
</body>
<!-- Core JS Files -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Checkbox,
Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
<!-- Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!-- Notifications Plugin -->
<script src="assets/js/bootstrap-notify.js"></script>
<!-- Google Maps Plugin -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>
<!-- Light Bootstrap Table DEMO methods,
don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<?php include 'clock.php'; ?>
</html>