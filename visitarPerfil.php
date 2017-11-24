<?php include 'connection/connection.php';

	
  
		$perfilID = $_GET['perfilID'];		
		
		$query = "SELECT * 	FROM usuario WHERE id = '$perfilID'";
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
  <style>
    /* Esconde o input */

    input[type='file'] {
      display: none;
    }
  </style>

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
                  <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." />
                </div>
                <div class="content">
                  <div class="author">
                    <a href="#">
                                    <img class="avatar border-gray" src="upload/fotos/<?php echo $row2['imagem']; ?>" alt="..."/>

                                      <h4 class="title"><?php echo $row2['nome'] . ' ' . $row2['sobrenome'];?><br />
                                         <small><?php echo $row2['email'] ;?></small>
                                      </h4>
                                    </a>
                  </div>
                  <p class="description text-center">"
                    <?php echo $row2['descricao_usuario']; ?>"
                  </p>
                  <p class="description text-center">Level:
                    <?php echo $row2['level']; ?>
                  </p>
                </div>
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="header">
                  <h4 class="title">Perfil</h4>
                </div>
                <div class="content">
                  <form>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input disabled type="email" class="form-control" placeholder="Email" value="<?php echo $row2['email'] ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Primeiro Nome</label>
                          <input disabled type="text" class="form-control" placeholder="Company" value="<?php echo $row2['nome'] ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Sobrenome</label>
                          <input disabled type="text" class="form-control" placeholder="Last Name" value="<?php echo $row2['sobrenome'] ?>">
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Cidade</label>
                          <input disabled type="text" class="form-control" placeholder="Cidade" value="<?php echo $row2['cidade'] ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>País</label>
                          <input disabled type="text" class="form-control" placeholder="País" value="<?php echo $row2['pais'] ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Descrição</label>
                          <textarea disabled rows="5" class="form-control" placeholder="Here can be your description" value="Mike"><?php echo $row2['descricao_usuario']; ?></textarea>
                        </div>
                      </div>
                    </div>


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