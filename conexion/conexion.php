<?php
function conectarse(){
$conexion =new MySQLi("localhost", "root","", "proyectontp");
		if ($conexion -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $conexion-> mysqli_connect_errno() 
				. ") " . $conexion -> mysqli_connect_error());
		}

}

?>