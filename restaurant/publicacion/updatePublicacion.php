<?php

	require "../conexion.php";

	$cve_Publicacion = $_POST['cve_Publicacion'];
	$Descripcion = $_POST['Descripcion'];
	$Fuente = $_POST['Fuente'];
	$Ubicacion_Fisica = $_POST['Ubicacion_Fisica'];

	$sql = "UPDATE publicacion SET Descripcion='$Descripcion', Fuente='$Fuente', Ubicacion_Fisica='$Ubicacion_Fisica' WHERE cve_Publicacion = '$cve_Publicacion'";
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
					<h3>Publicación Actualizada</h3>
					<?php } else { ?>
					<h3>Error al actualizar</h3>
					<?php } ?>
				</div>

				<a href="consultarPublicacion.php" class="btn btn-primary">Regresar</a>
				
			</div>
		</div>
	</body>
</html>