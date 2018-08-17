<?php

	require "../conexion.php";

	$cve_Receta = $_GET['cve_Receta'];

	$sql = "SELECT * FROM receta WHERE cve_Receta='$cve_Receta'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">

	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<h3 style="text-align:center">Modificar Receta</h3>
		</div>

		<form class="form-horizontal" method="POST" action="updateReceta.php" autocomplete="off">

		<div class="form-group">
				<label for="Nombre_rec" class="col-sm-2 control-label">Nombre Receta</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Nombre_rec" name="Nombre_rec" placeholder="Nombre receta" value="<?php echo $row['Nombre_rec']?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Tiempo_ejec" class="col-sm-2 control-label">Tiempo de ejecución (min)</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Tiempo_ejec" name="Tiempo_ejec" placeholder="00" value="<?php echo $row['Tiempo_ejec']?>" required>-
				</div>
			</div>

			<div class="form-group">
				<label for="Precio_rec" class="col-sm-2 control-label">Precio de receta</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Precio_rec" name="Precio_rec" placeholder="Precio Receta" value="<?php echo $row['Precio_rec']?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Comentarios_rec" class="col-sm-2 control-label">Comentario sobre Receta</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Comentarios_rec" name="Comentarios_rec" placeholder="Comentario Receta" value="<?php echo $row['Comentarios_rec']?>" required>
				</div>
			</div>
			<!-- ---------------------------RECUPERO EL ID---------------------------------- -->
			<input type="hidden" id="cve_Receta" name="cve_Receta" value="<?php echo $row['cve_Receta']; ?>" />
			<!-- ---------------------------CONTINUAN CAMPOS---------------------------------- -->

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="consultarReceta.php" class="btn btn-default">Regresar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>

		</form>

	</div>

</body>
</html>