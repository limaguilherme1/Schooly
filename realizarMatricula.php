<?php
include 'connection/connection.php';

$idturma = $_POST['turma_ID'];
$idaluno = $_POST['aluno_ID'];

$query = mysqli_query($db,"INSERT INTO usuario_turma (usuario_id, turma_id) VALUES ('$idaluno', '$idturma')");

$selecionarID = mysqli_query($db, "SELECT * FROM turmas WHERE id = '$idturma'");
$teste = $selecionarID->fetch_assoc();

$query2 = mysqli_query($db,"INSERT INTO ranking_turma (id_turma, id_aluno, pontos) VALUES ('$idturma', '$idaluno', 0)");


header("Location:infoturma.php?turmaID=$teste[id]");


?>