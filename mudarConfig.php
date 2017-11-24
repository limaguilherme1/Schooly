<?php
  include 'connection/connection.php';

$cor = $_POST['cor'];
$uid = $_POST['usuario_ID'];

$query = "UPDATE usuario SET cor = '$cor' WHERE id = '$uid'";
$result = $db->query($query);

header("Location:config.php");


?>