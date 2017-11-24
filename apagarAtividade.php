<?php
  include 'connection/connection.php';

	 $id = $_GET["id"];
		$turma = $_GET["turma"];
		
		$query = "DELETE FROM atividade WHERE id = '$id' ";
    $result = $db->query($query); 

		$query2 = "DELETE FROM atividade_turma WHERE id_tarefa = '$id'";

   $result = $db->query($query2); 
		header("Location:paginaturma.php?turmaID=$turma");
	

?>