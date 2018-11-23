<?php
$con=mysqli_connect("db.inf.uct.cl","jnail","jnail1257","jnail");


$consult= "SELECT * FROM usuario";
$resultado = mysqli_query($con,$consult);
 while ($data = mysqli_fetch_array($resultado)) 
 {
 	echo "Nick: ".$data['nick']." correo: ".$data['correo']."<br>";
 }
?>