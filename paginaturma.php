<?php include 'connection/connection.php';

	
  
		$turma = $_GET['turmaID'];		
		$query = "SELECT * FROM turmas WHERE id = '$turma'";
		$result = $db->query($query);

		if ($result->num_rows > 0) {
		// output data of each row
			$row2 = $result->fetch_assoc(); 
			
			
		} else {
			echo "0 Resultados";
		}
		$idprof = $row2['professor_id'];
	
		
		
																	
																	
	?>
	<?php
		$idA = $row['id'];
		$queryRanking1 = "SELECT * FROM ranking_turma WHERE id_turma = '$turma' AND id_aluno = '$idA'";
		$resultRanking1 = $db->query($queryRanking1);	
		while($rowRanking1 = $resultRanking1->fetch_assoc()){	
			$pontosAluno = $rowRanking1['pontos'];
		
		}		
													
	?>
<!doctype html>
<html lang="en">

<head>
	<?php include '_header.php'; ?>
	<link href="assets/css/modal.css" rel="stylesheet" />
	<script language="JavaScript" type="text/javascript">
		function checkDelete() {
			return confirm('Tem certeza?');
		}
	</script>
	<script src="https://www.w3schools.com/lib/w3.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
</head>

<body>

	<div class="wrapper">
		<?php include '_navbar.php'; ?>

		<div class="main-panel">
			<?php include '_topbar.php'; ?>

			<!-- INICIO CARD PERFIL -->
			
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<div class="card card-user">
								<div class="image">
									<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." />
								</div>
								<div class="content">
									<div class="author">
										<a href="#">
                        <img class="avatar border-gray" src="assets/img/database.jpg" alt="..."/>
                        <h4 class="title"><?php echo $row2['nome_turma'];?><br /></h4>
												<br>
                    </a>
									</div>
									<p class="description text-center">"
										<?php echo $row2['descricao_turma']; ?>"
									</p>
									<p class="description text-center"><b>Professor:
										<?php 
										$queryprofessor = "SELECT nome, sobrenome FROM usuario WHERE id = '$idprof'"; 
										$resultprofessor = $db->query($queryprofessor);
										if ($resultprofessor->num_rows > 0) {
										// output data of each row
											$rowprofessor = $resultprofessor->fetch_assoc(); 

										} else {
											echo "0 Resultados";
										}
										echo $rowprofessor['nome'] . ' ' . $rowprofessor['sobrenome'];
										?></b>
									</p>
								</div>
							</div>
							<!-- FIM CARD PERFIL -->
							
							<!-- INICIO CARD DESEMPENHO -->
							<?php
							$pontosPercen = round(($pontosAluno/200) * 100);
							$pontosRest = 200 - $pontosAluno;
							if($row3['papel_id'] != 2){
							echo "	
							<div class='card'>
								<div class='content'>
									<div class='card'>
										<div class='content'>

											<div class='header'>
												<h4 class='title'>
													Próximo level:
												</h4>
											</div>
											<br>
											 <div class='progress'>
												<div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' aria-valuenow='". $pontosPercen ."' aria-valuemin='0' aria-valuemax='100' style='width:". $pontosPercen ."%; color: black;'>
												  ". $pontosPercen ."%
												</div>
											  </div>
											  <span>Pontos nessa turma: ". $pontosAluno ." </span><br>
											  <span>Pontos para próximo level: ". $pontosRest  ." </span>
										</div>									
									</div>									
								</div>
							</div>";
							}
								
							?>

						</div>
						
						<!-- FINAL CARD DESEMPENHO -->
						
						<div class="col-md-9">

							<!-- CARD ATIVIDADES -->

							<div class="card">
								<div class="content">
									<div class="card ">
										<div class="header">
											<h4 class="title">Atividades</h4>
											<p class="category"></p>
										</div>
										<div class="content">
											<div class="table-full-width table-responsive">
												<table id="search" class="table table-hover">
													<tr>

														<th ><b>Atividade:</b></th>
														<th ><b>Data Limite:</b></th>
														<th ><b>Pontuação:</b></th>
														<?php
														if($row3['papel_id'] == 2 && $idprof == $row['id']){
															echo "<th><b>Apagar:</b></th>
																		<th><b>Corrigir:</b></th>
															
															";
															}
															?>
													</tr>
													<tbody>

														<?php 
														$queryAtividades = "SELECT atividade.id, descricao, DATE_FORMAT(data_limite, '%d/%m/%Y' ) as data, pontos FROM atividade LEFT JOIN (atividade_turma, turmas) ON (atividade_turma.id_turma = turmas.id AND atividade.id = atividade_turma.id_tarefa) WHERE atividade_turma.id_turma = '$turma' ORDER BY atividade.data_limite ASC";
														$resultAtividades = $db->query($queryAtividades);	
														if($resultAtividades->num_rows > 0){
															while($rowAtividades = $resultAtividades->fetch_assoc()){
																
																echo "<tr>														
																			<td>". $rowAtividades['descricao'] . "</td>
																			<td>". $rowAtividades['data'] . "</td>
																			<td>". $rowAtividades['pontos'] . "</td>";
																		if($row3['papel_id'] == 2 && $idprof == $row['id']){
																		echo "<td><a  href='apagarAtividade.php?id=". $rowAtividades['id'] ."&turma=". $turma . "' onclick='return checkDelete()' type='button' rel='tooltip' title='Excluir' class='btn btn-danger btn-simple btn-xs'>
                                          <i class='fa fa-times'></i></td>
																					<td><a href='corrigirAtividade.php?id=". $rowAtividades['id'] ."&turma=". $turma . "' type='button'";
																			if($rowAtividades['corrigida'] == 1){
																				echo "disabled";
																			}  
																			 echo "rel='tooltip' title='Corrigir' class='btn btn-simple btn-xs'> 
																				<i class='pe-7s-pen'></i></td></tr>
																					
																					";
																		}
																else{
																	echo "</tr>";
																}
																			
																			
																		
															}
														}else{
															echo "<tr>														
																			<td>Sem atividades cadastradas</td>
																			<td></td>
																			<td></td>
																			</tr>";
														}
														
														
														?>



													</tbody>
												</table>
											</div>



										</div>
									</div>
									<?php 
									if($row3['papel_id'] == 2 && $idprof == $row['id']){
									echo "<button data-toggle='modal' data-target='#squarespaceModal' type='submit' class='btn btn-info btn-fill'>Criar Atividade</button>";
									}
										?>
								</div>
							</div>

							<!-- FINAL CARD ATIVIDADES -->

							<!-- INICIO CARD RANKING -->
							<div class="card">
								<div class="content">
									<div class="card">
										<div class="header">
											<h4 class="title">Ranking da turma</h4>
											<p class="category">Acompanhe o ranking da turma</p>
										</div>
										<div class="content">
											<div class="table-full-width">
												<table class="table table-hover">
												<tr>
													<th>Aluno:</td>
													<th>Pontos:</th>
												</tr>
													<tbody>
														<?php
															$queryRanking = "SELECT * FROM ranking_turma WHERE id_turma = '$turma' ORDER BY pontos DESC";
															$resultRanking = $db->query($queryRanking);													
															if($resultRanking->num_rows > 0){
																	while($rowRanking = $resultRanking->fetch_assoc()){
																		$idAluno = $rowRanking['id_aluno'];
																		$queryAluno = "SELECT nome, sobrenome FROM usuario WHERE id = '$idAluno'";
																		$resultAluno = $db->query($queryAluno);
																		$rowAluno = $resultAluno->fetch_assoc();
																		echo "<tr>
																				<td>". $rowAluno['nome'] . " " . $rowAluno['sobrenome'] ."</td>
																				<td>". $rowRanking['pontos'] . "</td>
																				</tr>";
																		
																	}
															}
														?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- FINAL CARD RANKING -->

							<div class="card">
								<div class="content">
									<div class="card">
										<div class="header">
											<h4 class="title">Recompensas da turma </h4>
											<p class="category">Veja as recompensas da turma</p>
										</div>
										<div class="content">
											<div class="table-full-width table-responsive">
												<table class="table table-hover">
													<tr>
														<th><b>Level:</b></th>
														<th><b>Próximo level:</b></th>
														<th><b>Recompensa:</b></th>
													</tr>
													<tbody>
														<tr>
															<td>1</td>
															<td>200</td>
															<td>Atividade valendo o dobro</td>
														</tr>
														<tr>
															<td>2</td>
															<td>400</td>
															<td>Dica na hora da prova</td>
														</tr>
														<tr>
															<td>3</td>
															<td>800</td>
															<td>Questão da prova valendo o dobro</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>



							<!-- INICIO CARD PARTICIPANTES -->
							<div class="card">
								<div class="content">
									<div class="card">
										<div class="header">
											<h4 class="title">Participantes</h4>
											<p class="category">Acompanhe os participantes da turma</p>
										</div>
										<div class="content">
											<div class="table-full-width">
												<table class="table table-hover">
													<tbody>
														<?php 
																						$queryUID = "SELECT nome, sobrenome, usuario.id FROM usuario LEFT JOIN (turmas, usuario_turma) ON (turmas.id = usuario_turma.turma_id AND usuario.id = usuario_turma.usuario_id) WHERE turmas.id = '$turma' ORDER BY usuario.nome DESC";
																						$result3 = $db->query($queryUID);																				
																						if($result3->num_rows > 0){
																							while($rowUID = $result3->fetch_assoc()){
																							
																								echo "<tr><td><a href='visitarPerfil.php?perfilID=". $rowUID['id'] . "'>" . $rowUID['nome'] . " " . $rowUID['sobrenome'] . "</a></td></tr>";

																							}
																						}
																						else{
																							echo "<tr><td>Nenhum aluno matriculado</td></tr>";
																						}
																					
																						
																					
																					?>

													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- FINAL CARD PARTICIPANTES -->
						</div>
					</div>
				</div>
			</div>


			<?php include '_footer.php'; ?>

		</div>
	</div>


	<!-- line modal -->
	<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fechar</span></button>
					<h3 class="modal-title" id="lineModalLabel">Criar atividade -
						<?php echo $row2['nome_turma']; ?>
					</h3>
				</div>
				<div class="modal-body">

					<!-- content goes here -->
					<form method="post" action="criarAtividade.php">
						<div class="form-group">
							<label for="exampleInputEmail1">Descrição da Atividade:</label>
							<input type="text" required class="form-control" id="exampleInputEmail1" name="descricao" placeholder="Descreva a atividade">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Pontos da Atividade:</label>
							<input type="number" required min="0" class="form-control" id="exampleInputEmail1" name="pontos" placeholder="Pontuação">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Data Limite:</label>
							<input type="date" required min="<?php echo date('Y-m-d'); ?>" max="2099-12-31" class="form-control" id="exampleInputPassword1" name="data" placeholder="Data Limite">
							<input type="hidden" required class="form-control" id="exampleInputPassword1" name="turmaid" placeholder="Data Limite" value="<?php echo $turma ?>">
						</div>
						<div class="btn-group" role="group">
							<button type="submit" id="saveImage" class="btn btn-fill btn-default btn-hover-green" data-action="save" role="button">Criar</button>
						</div>
					</form>

				</div>
				<div class="modal-footer">
					<div class="btn-group btn-group-justified" role="group" aria-label="group button">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default" data-dismiss="modal" role="button">Fechar</button>
						</div>
						<div class="btn-group btn-delete hidden" role="group">
							<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal" role="button">Fechar</button>
						</div>
					</div>
				</div>
			</div>
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
		color = Math.floor((Math.random() * 4) + 1);

		$.notify({
			icon: 'pe-7s-cash',
			message: "Bem-vindo a turma: <b><?php echo $row2['nome_turma'] ?></b> <br> Professor:<b> <?php echo $rowprofessor['nome'] . ' ' . $rowprofessor['sobrenome'];  ?></b>"

		}, {

			type: type[color],
			timer: 4000,
			placement: {
				from: 'top',
				align: 'center'
			}
		});

	});
</script>
<?php include 'clock.php'; ?>

</html>