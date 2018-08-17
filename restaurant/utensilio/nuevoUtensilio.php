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
			<h3 style="text-align:center">Nuevo Utensilio</h3>
		</div>

		<form class="form-horizontal" method="POST" action="guardarUtensilio.php" autocomplete="off">

			<div class="form-group">
				<label for="Nombre_ut" class="col-sm-2 control-label">Nombre Utensilio</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Nombre_ut" name="Nombre_ut" placeholder="Nombre utensilio" required>
				</div>
			</div>

			<div class="form-group">
					<label for="Material" class="col-sm-2 control-label">Material</label>
					<div class="col-sm-10">
						<select class="form-control" id="Material" name="Material">
							<option value="Madera">Madera</option>
							<option value="Metal">Metal</option>
							<option value="Plastico">Plastico</option>
							<option value="Otro">Otro</option>
						</select>
					</div>
				</div>
			

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="consultarUtensilio.php" class="btn btn-default">Regresar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>

		</form>

	</div>

</body>
</html>