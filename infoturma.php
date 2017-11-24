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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $row2['nome_turma'] ?></h4>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-2.jpg" alt="..."/>

                                      <h4 class="title"><?php echo $row2['nome_turma'];?><br />
                                         
                                      </h4>
																			 <br>
                                    </a>
                                </div>
                                <p class="description text-center">"<?php echo $row2['descricao_turma']; ?>"
                                </p>
															<p class="description text-center">Dificuldade: <?php echo $row['level']; ?>
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

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
