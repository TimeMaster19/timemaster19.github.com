<?php

	require '../conexion.php';

	$Nombre_ing = $_POST['Nombre_ing'];
	$Calorias = $_POST['Calorias'];
	$Cantidad = $_POST['Cantidad'];
	$Precio_ing = $_POST['Precio_ing'];
	$Unidad = $_POST['Unidad'];
	$Tipo_ing = $_POST['Tipo_ing'];

	$sql = "INSERT INTO ingrediente (Nombre_ing, Calorias, Cantidad, Precio_ing, Unidad, Tipo_ing) VALUES ('$Nombre_ing', '$Calorias', '$Cantidad', '$Precio_ing', '$Unidad', '$Tipo_ing')";
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
					<h3>Registro Guardado</h3>
					<?php } else { ?>
					<h3>Error al guardar</h3>
					<?php } ?>
				</div>

				<a href="consultarIngrediente.php" class="btn btn-primary">Regresar</a>
				
			</div>
		</div>
	</body>
</html>