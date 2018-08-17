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
			<h3 style="text-align:center">Nuevo Ingrediente</h3>
		</div>

		<form class="form-horizontal" method="POST" action="guardarIngrediente.php" autocomplete="off">

			<div class="form-group">
				<label for="Nombre_ing" class="col-sm-2 control-label">Nombre Ingrediente</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Nombre_ing" name="Nombre_ing" placeholder="Nombre Ingrediente" required>
				</div>
			</div>


			<div class="form-group">
				<label for="Calorias" class="col-sm-2 control-label">Calorias</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Calorias" name="Calorias" placeholder="Calorias" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Cantidad" class="col-sm-2 control-label">Cantidad</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Precio_ing" class="col-sm-2 control-label">Precio Ingrediente</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Precio_ing" name="Precio_ing" placeholder="Precio Ingrediente" required>
				</div>
			</div>

			<div class="form-group">
					<label for="Unidad" class="col-sm-2 control-label">Unidad</label>
					<div class="col-sm-10">
						<select class="form-control" id="Unidad" name="Unidad">
							<option value="KG">Kg</option>
							<option value="GR">Gr</option>
							<option value="PZ">Pz</option>
							<option value="LT">Lt</option>
						</select>
					</div>
				</div>
			
			<div class="form-group">
					<label for="Tipo_ing" class="col-sm-2 control-label">Tipo De Ingrediente</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="Tipo_ing" name="Tipo_ing" value="1" checked> Perecedero
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="Tipo_ing" name="Tipo_ing" value="0"> No perecedero
						</label>
					</div>
				</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="consultarIngrediente.php" class="btn btn-default">Regresar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>

		</form>

	</div>

</body>
</html>