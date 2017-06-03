<!doctype html>
<html>
<head>
<?php
	include("PHP/verificar.php");
	if(!isset($_SESSION)) session_start();
	if($_SESSION['User']['idkey'] == "nada") header("Location: Acesso.php");
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Painel :: Sala de Exercícios</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
</head>

<body>
<?php
	include("PHP/barra_de_menu.php");
?>
</body>
</html>