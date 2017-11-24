<?php

  include 'connection/connection.php';

  $email = $_POST['email'];
  $descricao = $_POST['descricao'];
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $cidade = $_POST['cidade'];
	$pais = $_POST['pais'];
	$id = $_POST['id'];


	$query = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', descricao_usuario = '$descricao', cidade = '$cidade', pais = '$pais' ,email = '$email' WHERE id = '$id' ";

	$result = $db->query($query); 
	header("Location:user.php");
	


?>