<?php
			define('DB_SERVER', 'localhost');
			define('DB_USERNAME', 'root');
			define('DB_PASSWORD', '');
			define('DB_DATABASE', 'gamification');
			session_start();
			
				if(!isset($_SESSION['email_user'])){
					header("Location:index.php");
				}
			
			$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);  
				if ($db->connect_error) {
					die("Connection failed: " . $db->connect_error);
				}
			$db->query("SET NAMES 'utf8'");

	 		$username = $_SESSION['email_user'];
			$sql1 = "SELECT * FROM usuario WHERE email = '$username'";	
				$result = mysqli_query($db,$sql1);
				if (mysqli_num_rows($result) > 0){
					$row = mysqli_fetch_assoc($result);


				}
			

?>