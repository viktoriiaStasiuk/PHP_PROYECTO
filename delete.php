<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php

	include("conexion.php");

	$idTour=$_GET["idTour"];

	$base->query("DELETE FROM tours WHERE idTour='$idTour'");

	header("Location: crud.php");
?>

</body>
</html>