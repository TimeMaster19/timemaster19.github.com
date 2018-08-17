<?php

	require "../conexion.php";

	$cve_Utensilio = $_GET['cve_Utensilio'];

	$sql = "SELECT * FROM utensilio WHERE cve_Utensilio='$cve_Utensilio'";
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
			<h3 style="text-align:center">Modificar Utensilio</h3>
		</div>

		<form class="form-horizontal" method="POST" action="updateUtensilio.php" autocomplete="off">

		<div class="form-group">
				<label for="Nombre_ut" class="col-sm-2 control-label">Nombre Utensilio</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Nombre_ut" name="Nombre_ut" placeholder="Nombre utensilio" value="<?php echo $row['Nombre_ut']?>" required>
				</div>
			</div>

			<div class="form-group">
					<label for="Material" class="col-sm-2 control-label">Material</label>
					<div class="col-sm-10">
						<select class="form-control" id="Material" name="Material">
							<option value="Madera" <?php if($row['Material']=='Madera') echo 'selected'; ?>>Madera</option>
							<option value="Metal" <?php if($row['Material']=='Metal') echo 'selected'; ?>>Metal</option>
							<option value="Plastico" <?php if($row['Material']=='Plastico') echo 'selected'; ?>>Plastico</option>
							<option value="Otro" <?php if($row['Material']=='Otro') echo 'selected'; ?>>Otro</option>
						</select>
					</div>
				</div>
			<!-- ---------------------------RECUPERO EL ID---------------------------------- -->
			<input type="hidden" id="cve_Utensilio" name="cve_Utensilio" value="<?php echo $row['cve_Utensilio']; ?>" />
			<!-- ---------------------------CONTINUAN CAMPOS---------------------------------- -->

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