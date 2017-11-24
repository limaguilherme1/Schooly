<?php
  include 'connection/connection.php';

  $nometurma = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $ementa = $_POST['ementa'];
  $profID = $_POST['profID'];

  $query = mysqli_query($db,"INSERT INTO turmas (nome_turma, descricao_turma, ementa, professor_id) VALUES ('$nometurma' , '$descricao', '$ementa', '$profID')");

  $selecionarID = mysqli_query($db, "SELECT * FROM turmas WHERE nome_turma = '$nometurma' AND descricao_turma = '$descricao'");
  $teste = $selecionarID->fetch_assoc();


  header("Location:infoturma.php?turmaID=$teste[id]");


?>