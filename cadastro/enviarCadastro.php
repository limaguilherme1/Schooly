<?php
 define('DB_SERVER', 'mysql.hostinger.com.br');
			define('DB_USERNAME', 'u906862614_banco');
			define('DB_PASSWORD', 'schooly');
			define('DB_DATABASE', 'u906862614_banco');

		$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);  
			if ($db->connect_error) {
				die("Connection failed: " . $db->connect_error);
			}
		$db->query("SET NAMES 'utf8'");

		
  $nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$sobre = $_POST['sobre'];
  $email = $_POST['email'];
 	$papel = $_POST['papel'];
	$senha = MD5($_POST['senha']);
          
  $query = "INSERT INTO usuario (nome, sobrenome, email, senha, descricao_usuario) VALUES ('$nome','$sobrenome','$email','$senha', '$sobre')";
  $result = $db->query($query); 
	
	$queryid = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
	$result2 = $db->query($queryid);
	if (mysqli_num_rows($result2) > 0){
		$row = mysqli_fetch_assoc($result2);
	}
	$id = $row['id'];
	$query2 = "INSERT INTO usuario_papel (usuario_id, papel_id) VALUES ('$id', '$papel')";
	$result3 = $db->query($query2);

	header("Location:../login.php");

	

		
    
?>



	

