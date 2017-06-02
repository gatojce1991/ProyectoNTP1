<?php
require"../MD/usuarioMD.php";
$procesar="";

if(isset($_POST['mail'])){
	$mail=$_POST['mail'];
}

if(isset($_POST['nick'])){
	$nick=$_POST['nick'];
}

if(isset($_POST['pass'])){
	$pass=$_POST['pass'];
}

if(isset($_POST['procesar'])){
	$procesar=$_POST['procesar'];
}

if($procesar=="Ingresar"){
	insertarUsuario($nick,$mail,$pass,$conn);
}
?>