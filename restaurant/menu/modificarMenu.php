<?php

	require "../conexion.php";

	$cve_Menu = $_GET['cve_Menu'];

	$sql = "SELECT * FROM menu WHERE cve_Menu='$cve_Menu'";
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
			<h3 style="text-align:center">Modificar Menú</h3>
		</div>

		<form class="form-horizontal" method="POST" action="updateMenu.php" autocomplete="off">

			<div class="form-group">
				<label for="Nombre_menu" class="col-sm-2 control-label">Nombre Menu</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Nombre_menu" name="Nombre_menu" placeholder="Nombre menu" value="<?php echo $row['Nombre_menu']?>" required>
				</div>
			</div>

			<div class="form-group">
					<label for="Tipo_menu" class="col-sm-2 control-label">Tipo menu</label>
					<div class="col-sm-10">
						<select class="form-control" id="Tipo_menu" name="Tipo_menu">
							<option value="En" <?php if($row['Tipo_menu']=='En') echo 'selected'; ?>>Entrada</option>
							<option value="Pf" <?php if($row['Tipo_menu']=='Pf') echo 'selected'; ?>>Plato Fuerte</option>
							<option value="Po" <?php if($row['Tipo_menu']=='Po') echo 'selected'; ?>>Postre</option>
							<option value="Ot" <?php if($row['Tipo_menu']=='Ot') echo 'selected'; ?>>Otro</option>
						</select>
					</div>
				</div>
			
			<div class="form-group">
				<label for="Precio_menu" class="col-sm-2 control-label">Precio de Menu</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="Precio_menu" name="Precio_menu" placeholder="Precio menu" value="<?php echo $row['Precio_menu']?>" required>
				</div>
			</div>


			<div class="form-group">
				<label for="Comentario_menu" class="col-sm-2 control-label">Comentario Menu</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="Comentario_menu" name="Comentario_menu" placeholder="Comentario menu" value="<?php echo $row['Comentario_menu']?>" required>
				</div>
			</div>
			<!-- ---------------------------RECUPERO EL ID---------------------------------- -->
			<input type="hidden" id="cve_Menu" name="cve_Menu" value="<?php echo $row['cve_Menu']; ?>" />
			<!-- ---------------------------CONTINUAN CAMPOS---------------------------------- -->

			

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="consultarMenu.php" class="btn btn-default">Regresar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>

		</form>

	</div>

</body>
</html>