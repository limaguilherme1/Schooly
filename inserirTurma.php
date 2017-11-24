<?php
include 'connection/connection.php';

$nometurma = $_POST['nome'];
$descricao = $_POST['descricao'];

$query = mysqli_query($db,"INSERT INTO turmas (nome_turma, descricao_turma) VALUES ('$nometurma' , '$descricao')");

$selecionarID = mysqli_query($db, "SELECT * FROM turmas WHERE nome_turma = '$nometurma' AND descricao_turma = '$descricao'");
$teste = $selecionarID->fetch_assoc();


header("Location:infoturma.php?turmaID=$teste[id]");


?>