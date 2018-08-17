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
			<h3 style="text-align:center">Nuevo Menu</h3>
		</div>

		<form class="form-horizontal" method="POST" action="guardarMenu.php" autocomplete="off">

			<div class="form-group">
				<label for="Nombre_menu" class="col-sm-2 control-label">Nombre Menu</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Nombre_menu" name="Nombre_menu" placeholder="Nombre menu" required>
				</div>
			</div>

			<div class="form-group">
					<label for="Tipo_menu" class="col-sm-2 control-label">Tipo menu</label>
					<div class="col-sm-10">
						<select class="form-control" id="Tipo_menu" name="Tipo_menu">
							<option value="En">Entrada</option>
							<option value="Pf">Plato Fuerte</option>
							<option value="Po">Postre</option>
							<option value="Ot">Otro</option>
						</select>
					</div>
				</div>
			
			<div class="form-group">
				<label for="Precio_menu" class="col-sm-2 control-label">Precio de Menu</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Precio_menu" name="Precio_menu" placeholder="Precio menu" required>
				</div>
			</div>


			<div class="form-group">
				<label for="Comentario_menu" class="col-sm-2 control-label">Comentario Menu</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Comentario_menu" name="Comentario_menu" placeholder="Comentario menu" required>
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