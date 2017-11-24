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
                                <h4 class="title">Todas as turmas</h4>
                                <p class="category">Lista de todas as turmas disponiveis</p>
                            </div>
                          	 <div class="content all-icons">
                                <div class="row">
																	<?php  
																	$id = $row['id'];
																	$query = "SELECT * 	FROM turmas ORDER BY nome_turma";
																				
																	$result = $db->query($query);
																	if ($result->num_rows > 0) {
																		// output data of each row
																		while($row2 = $result->fetch_assoc()) {
																			echo " 
																			<form method='get' action='infoturma.php'>
																			<div class='font-icon-list col-lg-4 col-md-3 col-sm-4 col-xs-6 col-xs-6'>
																								<div class='font-icon-detail'><i class='pe-7s-album'></i>
																									<input type='text' placeholder='". $row2['nome_turma'] . "'><br>
																									<button type='submit'  name='turmaID' class='btn btn-info btn-fill' value='". $row2['id'] ."'>Ir á turma</button>
																								</div>

																						</div>
																				</form>		";
																				}
																			} else {
																			echo "0 Resultados";
																			}
																	
																	
																	?>
                                  


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


</html>
