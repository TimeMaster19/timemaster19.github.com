<?php

	require "../conexion.php";

	$cve_Ingrediente = $_GET['cve_Ingrediente'];

	$sql = "SELECT * FROM ingrediente WHERE cve_Ingrediente='$cve_Ingrediente'";
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
			<h3 style="text-align:center">Modificar Ingrediente</h3>
		</div>

		<form class="form-horizontal" method="POST" action="updateIngrediente.php" autocomplete="off">

			<div class="form-group">
				<label for="Nombre_ing" class="col-sm-2 control-label">Nombre Ingrediente</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Nombre_ing" name="Nombre_ing" placeholder="Nombre Ingrediente" value="<?php echo $row['Nombre_ing']?>" required>
				</div>
			</div>
			<!-- ---------------------------RECUPERO EL ID---------------------------------- -->
			<input type="hidden" id="cve_Ingrediente" name="cve_Ingrediente" value="<?php echo $row['cve_Ingrediente']; ?>" />
			<!-- ---------------------------CONTINUAN CAMPOS---------------------------------- -->

			<div class="form-group">
				<label for="Calorias" class="col-sm-2 control-label">Calorias</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Calorias" name="Calorias" placeholder="Calorias" value="<?php echo $row['Calorias']?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Cantidad" class="col-sm-2 control-label">Cantidad</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad" value="<?php echo $row['Cantidad']?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="Precio_ing" class="col-sm-2 control-label">Precio Ingrediente</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Precio_ing" name="Precio_ing" placeholder="Precio Ingrediente" value="<?php echo $row['Precio_ing']?>" required>
				</div>
			</div>

			<div class="form-group">
					<label for="Unidad" class="col-sm-2 control-label">Unidad</label>
					<div class="col-sm-10">
						<select class="form-control" id="Unidad" name="Unidad">
							<option value="KG" <?php if($row['Unidad']=='KG') echo 'selected'; ?>>Kg</option>
							<option value="GR" <?php if($row['Unidad']=='GR') echo 'selected'; ?>>Gr</option>
							<option value="PZ" <?php if($row['Unidad']=='PZ') echo 'selected'; ?>>Pz</option>
							<option value="LT" <?php if($row['Unidad']=='LT') echo 'selected'; ?>>Lt</option>
						</select>
					</div>
				</div>
			
			<div class="form-group">
					<label for="Tipo_ing" class="col-sm-2 control-label">Tipo De Ingrediente</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="Tipo_ing" name="Tipo_ing" value="1" <?php if($row['Tipo_ing']=='1') echo 'checked'; ?> checked> Perecedero
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="Tipo_ing" name="Tipo_ing" value="0" <?php if($row['Tipo_ing']=='0') echo 'checked'; ?>> No perecedero
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