<?php
$mysqli = new mysqli('127.0.0.1:3316','root','','restaurant');

if($mysqli->connect_error){
	die('Error en la conexión'. $mysqli->connect_error);
}
//printf("Info Server: %s\n",$mysqli->server_info);
?>