<?php
$con=mysqli_connect("db.inf.uct.cl","jnail","jnail1257","jnail");

$user = $_POST["nick"];
$mail=$_POST["correo"];

$insertar="INSERT INTO usuario VALUES('$user','$mail')";
mysqli_query($con,$insertar);
?>