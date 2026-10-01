<?php
session_start();
$_SESSION['usuario'] = $_POST['nome'];
header("Location: exercicio04-boasvindas.php");
exit;
?>