<?php

	require "../conexion.php";

	$cve_Ingrediente = $_GET['cve_Ingrediente'];

	$sql = "DELETE FROM ingrediente WHERE cve_Ingrediente='$cve_Ingrediente'";
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
					<h3>Ingrediente Eliminado</h3>
					<?php } else { ?>
					<h3>Error al eliminar</h3>
					<?php } ?>
				</div>

				<a href="consultarIngrediente.php" class="btn btn-primary">Regresar</a>
				
			</div>
		</div>
	</body>
</html>