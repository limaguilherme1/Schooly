<?php include 'connection/connection.php';
    $id = $_GET["id"];
		$turma = $_GET["turma"];
	  $query = "SELECT * FROM atividade WHERE id = '$id'";
		$result = $db->query($query);

		if ($result->num_rows > 0) {
		// output data of each row
			$row2 = $result->fetch_assoc(); 
			
			
		} else {
			echo "0 Resultados";
		}
		$idprof = $row2['professor_id'];
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


      <div class="card">
        <div class="content">
          <div class="card">
            <div class="header">
              <h4 class="title"><?php echo $row2['descricao']; ?></h4>
              <p class="category"><?php echo "Pontos dessa atividade: " . $row2['pontos']; ?></p>
            </div>
						<form method="post" action="confirmarCorrecao.php">					
            <div class="content">
              <div class="table-full-width">
                <table class="table table-hover">
                  
                  <tbody>
                    <?php 
											$queryUID = "SELECT nome, sobrenome, usuario.id FROM usuario LEFT JOIN (turmas, usuario_turma) ON (turmas.id = usuario_turma.turma_id AND usuario.id = usuario_turma.usuario_id) WHERE turmas.id = '$turma' ";
											$result3 = $db->query($queryUID);																				
											if($result3->num_rows > 0){
												while($rowUID = $result3->fetch_assoc()){
																							
													echo "<tr>
																<td>" . $rowUID['nome'] . " " . $rowUID['sobrenome'] . "</td>
																	<td>																												 
																		<div class='checkbox' >
																				<span class='icons'><span class='first-icon fa fa-square-o'></span><span class='second-icon fa fa-check-square-o'></span></span>                                                           
																				<input id='".$rowUID['id'] . "' type='checkbox' '>
																				<label for='checkbox1'></label>
																		 </div>                                                       
																</td>
																<tr>";
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
          <a href="paginaturma.php?turmaID=<?php echo $turma; ?>" class='btn btn-info btn-fill' type='button'>Voltar para turma</a>
					 <button onclick="teste();" class='btn btn-info btn-fill pull-right' type='button'>Corrigir Atividade</button>
        </div>
				</form>
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
	
<script>
function teste(){
	if($('#4').is(':checked'))
		alert('Marcado');
	
	else if($('#3').is(':checked'))
		alert('Marcado');
	}
	
</script>
	
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<?php include 'clock.php'; ?>

</html>