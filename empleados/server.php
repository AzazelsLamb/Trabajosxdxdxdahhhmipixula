<?php
include("conex.inc");

$id_u = $_GET["id_u"];

$query = "DELETE From empleados where Noempleado = $id_u";

$answer = mysqli_query($db,$query);

?>
<table border=1>
	<tr> <td>NºEmp</td>
		 <td>Nombre</td>
		 <td></td>
	</tr>
<?php

$consulta = "SELECT * FROM empleados";
$respuesta = mysqli_query($db, $consulta);

while($fila=mysqli_fetch_object($respuesta)){
echo "<tr> <td> $fila->NoEmpleado </td>
<td> $fila->Nombre</td>
<td><img src='papelero.png' width=30 height=30 onclick='HacerPeticion($fila->NoEmpleado)'</td></tr>";
}
?>
