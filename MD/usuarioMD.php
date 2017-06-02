<?php
require"../conexion/conexion.php";
$conn=conectarse();

function insertarUsuario($nick,$mail,$clave,$conn){
		$sql="INSERT INTO usuario (`MAIL`, `USUARIO`, `CLAVE`)VALUES('$mail','$nick','$clave')";
		echo($sql);exit;
		mysql_query($sql,$conn);
}


?>