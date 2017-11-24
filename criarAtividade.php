<?php

  include 'connection/connection.php';

  
  $descricao = $_POST['descricao'];
  $pontos = $_POST['pontos'];
  $data = $_POST['data'];
  $turma = $_POST['turmaid'];

	$query = mysqli_query($db,"INSERT INTO atividade (descricao, pontos, data_limite) VALUES ('$descricao', '$pontos', '$data')");


	$query2 = mysqli_query($db,"SELECT id FROM atividade WHERE descricao = '$descricao' AND pontos = '$pontos'");

	$teste = $query2->fetch_assoc();

	$idAtividade = $teste['id'];

	$query3 = mysqli_query($db,"INSERT INTO atividade_turma (id_tarefa, id_turma) VALUES ('$idAtividade' , $turma)");

	 header("Location:paginaturma.php?turmaID=$turma");



	


?>