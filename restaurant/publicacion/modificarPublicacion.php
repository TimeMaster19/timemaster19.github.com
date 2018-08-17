<?php

	require "../conexion.php";

	$cve_Publicacion = $_GET['cve_Publicacion'];

	$sql = "SELECT * FROM publicacion WHERE cve_Publicacion='$cve_Publicacion'";
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
			<h3 style="text-align:center">Modificar Publicacion</h3>
		</div>

		<form class="form-horizontal" method="POST" action="updatePublicacion.php" autocomplete="off">

			<div class="form-group">
				<label for="Descripcion" class="col-sm-2 control-label">Descripción Publicación</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Descripción" value="<?php echo $row['Descripcion']?>" required>
				</div>
			</div>

			<div class="form-group">
					<label for="Fuente" class="col-sm-2 control-label">Fuente</label>
					<div class="col-sm-10">
						<select class="form-control" id="Fuente" name="Fuente">
							<option value="Revista" <?php if($row['Fuente']=='Revista') echo 'selected'; ?>>Revista</option>
							<option value="Periodico" <?php if($row['Fuente']=='Periodico') echo 'selected'; ?>>Periodico</option>
							<option value="Internet" <?php if($row['Fuente']=='Internet') echo 'selected'; ?>>Internet</option>
							<option value="Enciclopedia" <?php if($row['Fuente']=='Enciclopedia') echo 'selected'; ?>>Enciclopedia</option>
							<option value="Otro" <?php if($row['Fuente']=='Otro') echo 'selected'; ?>>Otro</option>
						</select>
					</div>
				</div>
			
			<div class="form-group">
				<label for="Ubicacion_Fisica" class="col-sm-2 control-label">Ubicación Física</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Ubicacion_Fisica" name="Ubicacion_Fisica" placeholder="Ubicacion Fisica" value="<?php echo $row['Ubicacion_Fisica']?>" required>
				</div>
			</div>
			<!-- ---------------------------RECUPERO EL ID---------------------------------- -->
			<input type="hidden" id="cve_Publicacion" name="cve_Publicacion" value="<?php echo $row['cve_Publicacion']; ?>" />
			<!-- ---------------------------CONTINUAN CAMPOS---------------------------------- -->

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