<!DOCTYPE html>
<html>
<head>
	<title>Elimina Empleados</title>
	<meta charset="utf-8">
<script>
    var objeto = null
	if (window.XMLHttpRequest) objeto = new XMLHttpRequest()
	else if (window.ActiveXObject) objeto = new ActiveXObject("Microsoft.XMLHTTP")

    function HacerPeticion(valorID){
    	url= "server.php?id_u="+valorID
    	objeto.open("GET",url)
   	 	objeto.send()
   		objeto.onreadystatechange = ObtenerRespuesta
	}
 	function ObtenerRespuesta() {
    	if(objeto.readyState==4)
      	document.getElementById("miCapa").innerHTML = objeto.responseText
  	}
 </script>
</head>
<body>
	<h1>Elimación de Empleado</h1>
	<div id="miCapa">
	<table border=1>
		<tr> <td>NºEmp</td>
			 <td>Nombre</td>
			 <td></td>
		</tr>
<?php
include("conex.inc");
$consulta = "SELECT * FROM empleados";
$respuesta = mysqli_query($db, $consulta);

while($fila=mysqli_fetch_object($respuesta)){
	echo "<tr> <td> $fila->NoEmpleado </td>
			   <td> $fila->Nombre</td>
			   <td><img src='papelero.png' width=30 height=30 onclick='HacerPeticion($fila->NoEmpleado)'</td>
		 </tr>";
}
?>
</table>
</div>
</body>
</html>