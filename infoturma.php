<?php include 'connection/connection.php';

	
  
		$turma = $_GET['turmaID'];		
		
		$query = "SELECT * 	FROM turmas WHERE id = '$turma'";
		$result = $db->query($query);
		if ($result->num_rows > 0) {
		// output data of each row
			$row2 = $result->fetch_assoc(); 
			
		} else {
			echo "0 Resultados";
		}

		$idprof = $row2['professor_id'];
		
		$uid = $row['id'];
		
		$queryMatriculado = "SELECT * FROM usuario_turma WHERE usuario_id = '$uid' AND turma_id = '$turma'";
		$resultMatriculado = $db->query($queryMatriculado);
		if ($resultMatriculado->num_rows > 0) {
			$matriculado = 1;
		} else {
			$matriculado = 0;
		}
		
		
																	
																	
	?>
<!doctype html>
<html lang="en">
<head>
	<?php include '_header.php'; ?>
</head>
<body>

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
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/database.jpg" alt="..."/>

                                      <h2 class="title"><?php echo $row2['nome_turma'];?><br />
                                         
                                      </h2>
																			 <br>
                                    </a>
                                </div>
                                
														
															<h4 class="description text-center"><b>Professor:
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
																?>
                              </b></h4>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h2 class="title"><?php echo $row2['nome_turma'] ?></h2>
                            </div>
													<div class="content">
														<div class="typo-line">
															<p class="category">Sobre a turma:</p>
																<blockquote>															
																	"<?php echo $row2['descricao_turma']; ?>"
																</blockquote>
																
														</div>
														<div class="typo-line">
															<p class="category">Ementa</p>
																<blockquote>	
																	<?php echo $row2['ementa']; ?>
																</blockquote>
															
														</div>
														<?php 
														
														if($row3['papel_id'] == 3 && $matriculado == 0){
															echo "	
															<form method='post' action='realizarMatricula.php'>
																<input type='hidden' name='turma_ID' value=" . $turma . ">
																<input type='hidden' name='aluno_ID' value=" . $row['id'] . ">
																<input type='submit' value='Realizar matrícula' class='btn btn-info btn-fill'></button>														
															</form>	";
														}
														else if($row3['papel_id'] == 3 && $matriculado == 1){
															echo "
															<form method='get' action='paginaturma.php' >
																				<label>Já matriculado</label><br>													
																			<button type='submit'  name='turmaID' class='btn btn-info btn-fill' value='". $row2['id'] ."'>Ir á turma</button>
																	
															
															</form>
															";
														}
														else{
															echo "
															<form method='get' action='paginaturma.php' >																															
																			<button type='submit'  name='turmaID' class='btn btn-info btn-fill' value='". $row2['id'] ."'>Ir á turma</button>
																															
															</form>
															";
														}
														?>
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
