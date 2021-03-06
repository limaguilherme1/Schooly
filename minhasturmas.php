<?php include 'connection/connection.php';

	
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Minhas turmas</h4>
                                <p class="category">Lista das suas turmas </p>
                            </div>
                            <div class="content all-icons">
                                <div class="row">
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
																	$result1 = $db->query($query);
																	if ($result1->num_rows > 0) {
																		// output data of each row
																		while($row2 = $result1->fetch_assoc()) {
																			echo "<form method='get' action='paginaturma.php' >
																							<div class='font-icon-list col-lg-4 col-md-3 col-sm-4 col-xs-6 col-xs-6'  >
																								<div class='font-icon-detail'><i class='pe-7s-album'></i>
																									<input type='text' placeholder='". $row2["nome_turma"] . "'><br>
																									<button type='submit'  name='turmaID' class='btn btn-info btn-fill' value='". $row2['id'] ."'>Ir á turma</button>
																								</div>
																							</div>
																						</form>";
																				}
																			} else {
																			echo  "<div class='col-md-12'><h4> Sem turmas matriculadas </h4></div>";
																			}
																	}
																	else{
																		$id = $row['id'];
																		$query = "SELECT nome_turma, id
																				FROM turmas	WHERE professor_id ='$id' ORDER BY nome_turma";
																		$result1 = $db->query($query);
																		if ($result1->num_rows > 0) {
																		// output data of each row
																		while($row2 = $result1->fetch_assoc()) {
																			echo "<form method='get' action='paginaturma.php' >
																							<div class='font-icon-list col-lg-4 col-md-3 col-sm-4 col-xs-6 col-xs-6'  >
																								<div class='font-icon-detail'><i class='pe-7s-album'></i>
																									<input type='text' placeholder='". $row2["nome_turma"] . "'><br>
																									<button type='submit'  name='turmaID' class='btn btn-info btn-fill' value='". $row2['id'] ."'>Ir á turma</button>
																								</div>
																							</div>
																						</form>";
																				}
																			} else {
																			echo  "<div class='col-md-12'><h4> Sem turmas matriculadas </h4></div>";
																			}
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
