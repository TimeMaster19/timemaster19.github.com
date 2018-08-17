<?php

	require "../conexion.php";

	$where = "";

	$sql = "SELECT * FROM menu $where";
	$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-theme.css" rel="stylesheet">
	
	<link href="../css/jquery.dataTables.min.css" rel="stylesheet">

	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<script src="../js/jquery.dataTables.min.js"></script>

<!------------------------INICIAMOS LA CONFIGURACIÓN DE L ATABLA CON JQUERY--------------------->
	<script>
		$(document).ready(function(){
		$('#mitabla').DataTable({
			"order": [[1, "asc"]],
			"language":{
				"lengthMenu": "Mostrar _MENU_ registros por pagina",
				"info": "Mostrando pagina _PAGE_ de _PAGES_",
				"infoEmpty": "No hay registros disponibles",
				"infoFiltered": "(filtrada de _MAX_ registros)",
				"loadingRecords": "Cargando...",
				"processing":     "Procesando...",
				"search": "Buscar:",
				"zeroRecords":    "No se encontraron registros coincidentes",
				"paginate": {
					"next":       "Siguiente",
					"previous":   "Anterior"
				},					
			}
		});	
	});	
	</script>
</head>
<body>

	<div class="container">
		<div class="row">
			<h2 style="text-align: center;">Menú de administración de Menús</h2>
		</div>

		<div class="row">
			<a href="nuevoMenu.php" class="btn btn-primary">Nuevo Menu</a>
			<a href="../log.php" class="btn btn-danger">Regresar</a>
			<!--<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				
				<b>Buscar por ID: </b><input type="text" id="campo" name="campo"/>
				<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
			</form>-->
		</div>
		<br>

		<div class="row table-responsive">
			<!--<table class="table table-striped">-->
			<table class="display" id="mitabla">
				<thead>
					<tr>
						<th>Clave Menú</th>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Precio</th>
						<th>Comentarios</th>
						<th></th>
						<th></th>
					</tr>
				</thead>


				<tbody>
					<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
						<tr>
							<td><?php echo $row['cve_Menu']; ?></td>
							<td><?php echo $row['Nombre_menu']; ?></td>
							<td><?php echo $row['Tipo_menu']; ?></td>
							<td><?php echo $row['Precio_menu']; ?></td>
							<td><?php echo $row['Comentario_menu']; ?></td>
							<td><a href="modificarMenu.php?cve_Menu=<?php echo $row['cve_Menu']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td> <!--se envía metdiante método GET osea URL el ID-->
							<td><a href="#" data-href="eliminarMenu.php?cve_Menu=<?php echo $row['cve_Menu']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>

	<!--Se realiza la creación del MODAL para onfirmación de eliminación-->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		<!--Finaliza MODAL-->
		<!--Script de JQUERY para agregar funcionalidad-->
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		<!--Finaliza el script del JQUERY-->
</body>
</html>