<?php
include('conexion.php');
$con = conexion();
$nid = $_POST['nid'];
$nombres= $_POST['nombres'];
$sexo= $_POST['sexo'];
$fecha= $_POST['fechai'];
$tel= $_POST['telefono'];
$dir= $_POST['direccion'];
$ap= $_POST['apellidos'];
$estc= $_POST['estc'];
$correo= $_POST['correo'];
$consulta = "UPDATE Empleado SET Empleado.nombres= '$nombres', Empleado.apellidos='$ap', Empleado.sexo='$sexo', Empleado.estadocivil='$estc', Empleado.telefono= '$tel', Empleado.direccion='$dir', Empleado.email='$correo', Empleado.fechaingreso= '$fecha' WHERE Empleado.NID='$nid'";
$res= $con->query($consulta);
if ($res==1) {
  echo "<h2>Empleado actualizado correctamente</h2>";
  echo '<a href="../view/empleados.php">Volver</a>';
}
else {
  echo "<h2>Error al actualizar</h2>";
  echo '<a href="../view/empleados.php">Volver</a>';
}

 ?>
