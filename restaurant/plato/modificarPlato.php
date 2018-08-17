<?php

	require "../conexion.php";

	$cve_Plato = $_GET['cve_Plato'];

	$sql = "SELECT * FROM plato WHERE cve_Plato='$cve_Plato'";
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
			<h3 style="text-align:center">Modificar Plato</h3>
		</div>

		<form class="form-horizontal" method="POST" action="updateProducto.php" autocomplete="off">

			<div class="form-group">
				<label for="Nombre_Plato" class="col-sm-2 control-label">Nombre Plato</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Nombre_Plato" name="Nombre_Plato" placeholder="Nombre plato" value="<?php echo $row['Nombre_Plato']?>" required>
				</div>
			</div>
			<!-- ---------------------------RECUPERO EL ID---------------------------------- -->
			<input type="hidden" id="cve_Plato" name="cve_Plato" value="<?php echo $row['cve_Plato']; ?>" />
			<!-- ---------------------------CONTINUAN CAMPOS---------------------------------- -->

			<div class="form-group">
				<label for="Tipo" class="col-sm-2 control-label">Tipo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Tipo" name="Tipo" placeholder="Tipo" value="<?php echo $row['Tipo']?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Ingrediente_princ" class="col-sm-2 control-label">Ingrediente principal</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Ingrediente_princ" name="Ingrediente_princ" placeholder="Ingrediente Principal" value="<?php echo $row['Ingrediente_princ']?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Precio_plato" class="col-sm-2 control-label">Precio plato</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Precio_plato" name="Precio_plato" placeholder="Precio_plato" value="<?php echo $row['Precio_plato']?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Comentario_plato" class="col-sm-2 control-label">Comentario</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Comentario_plato" name="Comentario_plato" placeholder="Comentario_plato" value="<?php echo $row['Comentario_plato']?>" required="true">
				</div>
			</div>


			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="consultarPlato.php" class="btn btn-default">Regresar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>

		</form>

	</div>

</body>
</html>