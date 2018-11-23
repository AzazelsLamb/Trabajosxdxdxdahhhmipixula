<?php
$server="db.inf.uct.cl";
$user="jnail";
$password="jnail1257";
$database="jnail";
$db = mysqli_connect($server, $user, $password, $database);
$db->set_charset("utf8");
if(!$db){
	echo "error no se pudo conectar a a base de datos";
	exit();
	}
?>