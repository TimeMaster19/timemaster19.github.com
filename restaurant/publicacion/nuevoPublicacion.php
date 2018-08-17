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
			<h3 style="text-align:center">Nueva Publicacion</h3>
		</div>

		<form class="form-horizontal" method="POST" action="guardarPublicacion.php" autocomplete="off">

			<div class="form-group">
				<label for="Descripcion" class="col-sm-2 control-label">Descripción Publicación</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Descripción" required>
				</div>
			</div>

			<div class="form-group">
					<label for="Fuente" class="col-sm-2 control-label">Fuente</label>
					<div class="col-sm-10">
						<select class="form-control" id="Fuente" name="Fuente">
							<option value="Revista">Revista</option>
							<option value="Periodico">Periodico</option>
							<option value="Internet">Internet</option>
							<option value="Enciclopedia">Enciclopedia</option>
							<option value="Otro">Otro</option>
						</select>
					</div>
				</div>
			
			<div class="form-group">
				<label for="Ubicacion_Fisica" class="col-sm-2 control-label">Ubicación Física</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Ubicacion_Fisica" name="Ubicacion_Fisica" placeholder="Ubicacion Fisica" required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="consultarPublicacion.php" class="btn btn-default">Regresar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>

		</form>

	</div>

</body>
</html>