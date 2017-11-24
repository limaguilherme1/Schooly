<?php include 'connection/connection.php';?>

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
						</div>

						<div class="col-md-4">
						<div class="card">
								<div class="header">
									<h4 class="title">Suas Turmas</h4>
									<p class="category">Acompanhe suas turmas mais recentes</p>
								</div>
								<div class="content">
									<div class="table-full-width">
										<table class="table">
											<tbody>
												<?php 
																		if($row3['papel_id'] == 3){
																			$id = $row['id'];
																			$query = "SELECT nome_turma, turmas.id
																				FROM turmas
																				LEFT JOIN (
																				usuario_turma, usuario
																				) ON ( turmas.id = usuario_turma.turma_id
																				AND usuario.id = usuario_turma.usuario_id ) 
																				WHERE usuario.id ='$id' ORDER BY nome_turma";
																			$resultturma = $db->query($query);
																			
																				if ($resultturma->num_rows > 0) {
																					
																			// output data of each row
																			while($row2 = $resultturma->fetch_assoc()) {
																				
																				echo "<tr><td><a href='paginaturma.php?turmaID=" . $row2['id'] ."'>"
																					. $row2['nome_turma'] .
																							"</a></td></tr>";
																					}
																				}
																		}
																	else{
																		$id = $row['id'];
																			$query = "SELECT nome_turma, id FROM turmas WHERE	professor_id ='$id' ORDER BY nome_turma";
																			$resultturma = $db->query($query);
																			
																				if ($resultturma->num_rows > 0) {
																					
																			// output data of each row
																			while($row2 = $resultturma->fetch_assoc()) {
																				
																				echo "<tr><td><a href='paginaturma.php?turmaID=" . $row2['id'] ."'>"
																					. $row2['nome_turma'] .
																							"</a></td></tr>";
																					}
																				}
																	}
																			
																			?>

											</tbody>
										</table>
									</div>
								</div>
							</div>						
						</div>
						<div class="col-md-4">
						<div class="card">
								<div class="header">
									<h4 class="title">Atalhos</h4>
									<p class="category">Acesse aos atalhos</p>
								</div>
								<div class="content">
									<div class="table-full-width">
										<table class="table">
											<tbody>
												<tr><td><a href="user.php">Perfil</a></td></tr>
												<tr><td><a href="criarTurma.php">Criar Turma</a></td></tr>
												<tr><td><a href="minhasturmas.php">Minhas Turmas</a></td></tr>
												<tr><td><a href="procurarturma.php">Procurar Turmas</a></td></tr>
											</tbody>
										</table>
									</div>
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

<script type="text/javascript">
	$(document).ready(function() {

		demo.initChartist();

		$.notify({
			icon: 'pe-7s-gift',
			message: "Bem-vindo ao <b>Schooly</b> - uma plataforma para uso de gamificação em sala de aula."

		}, {
			type: 'info',
			timer: 4000
		});

	});
</script>
	<?php include 'clock.php'; ?>

</html>