<?php
$usuario=!empty($_REQUEST['usuario'])?$_REQUEST['usuario']:'';
$passwordd=!empty($_REQUEST['passwordd'])?$_REQUEST['passwordd']:'';

//before if is not null
if($usuario && $passwordd){
	require('conexion.php');
		//comp entre datos que vienen y datos entre tabla
		$consulta="SELECT * FROM users WHERE usuario='$usuario' AND passwordd='$passwordd'";
		//accedemos al obj conexión
		$resultado = $mysqli->query($consulta); //el metodo query recibe el parametro.
		$row = $resultado->num_rows; //si regresa N cantidad de filas

	//si filas es diferente de 0
	if($row<>0){
	
		header('Location: log.php');
	}
	else{
		header('Location: index.php');
		echo "<script> alert('Datos incorrectos')</script>";
	}
}
else{
	header('Location: index.php');
	echo "<script> alert('Error campos vacíos')</script>";
}
//-----------------------------------//
//Lo que lleva adentro el REQUEST es el NAME de los Input
?>