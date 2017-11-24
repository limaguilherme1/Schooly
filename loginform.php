<?php
    include 'connection/connection.php';
		
		session_start();
	
		$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);  
		if ($db->connect_error) {
			die("Connection failed: " . $db->connect_error);
		}
    
    $email = $_POST['email'];
    $senha = MD5($_POST['senha']);
          
    $query = mysqli_query($db,"SELECT * FROM usuario WHERE `email` = '$email' AND `senha` = '$senha'");
   	$count = mysqli_num_rows($query);
  
    if($count == 1){
      $_SESSION['email_user'] = $email;
		
			
			header("Location:menu.php");
    }else{
			
        echo "Email inexistente ou senha incorreta para o email: <br>";
			echo $email;
    }

	

?>



	

