<?php

	require "../conexion.php";

	$cve_Receta = $_GET['cve_Receta'];

	$sql = "DELETE FROM receta WHERE cve_Receta='$cve_Receta'";
	$resultado = $mysqli->query($sql);
?>

<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-theme.css" rel="stylesheet">

		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container" align="center">
			<div class="row">
				<div class="row" style="text-align: center">
					<?php if($resultado) { ?>
					<h3>Receta Eliminada</h3>
					<?php } else { ?>
					<h3>Error al eliminar</h3>
					<?php } ?>
				</div>

				<a href="consultarReceta.php" class="btn btn-primary">Regresar</a>
				
			</div>
		</div>
	</body>
</html>