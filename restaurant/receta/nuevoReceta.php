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
			<h3 style="text-align:center">Nueva Receta</h3>
		</div>

		<form class="form-horizontal" method="POST" action="guardarReceta.php" autocomplete="off">

			<div class="form-group">
				<label for="Nombre_rec" class="col-sm-2 control-label">Nombre Receta</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Nombre_rec" name="Nombre_rec" placeholder="Nombre receta" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Tiempo_ejec" class="col-sm-2 control-label">Tiempo de ejecución (min)</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Tiempo_ejec" name="Tiempo_ejec" placeholder="00" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Precio_rec" class="col-sm-2 control-label">Precio de receta</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Precio_rec" name="Precio_rec" placeholder="Precio Receta" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Comentarios_rec" class="col-sm-2 control-label">Comentario sobre Receta</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Comentarios_rec" name="Comentarios_rec" placeholder="Comentario Receta" required>
				</div>
			</div>
			

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