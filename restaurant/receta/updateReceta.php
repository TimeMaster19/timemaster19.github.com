<?php

	require "../conexion.php";

	$cve_Receta = $_POST['cve_Receta'];
	$Nombre_rec = $_POST['Nombre_rec'];
	$Tiempo_ejec = $_POST['Tiempo_ejec'];
	$Precio_rec = $_POST['Precio_rec'];
	$Comentarios_rec = $_POST['Comentarios_rec'];

	$sql = "UPDATE receta SET Nombre_rec='$Nombre_rec', Tiempo_ejec='$Tiempo_ejec', Precio_rec='$Precio_rec', Comentarios_rec='Comentarios_rec' WHERE cve_Receta = '$cve_Receta'";
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
					<h3>Receta Actualizada</h3>
					<?php } else { ?>
					<h3>Error al actualizar</h3>
					<?php } ?>
				</div>

				<a href="consultarReceta.php" class="btn btn-primary">Regresar</a>
				
			</div>
		</div>
	</body>
</html>