<?php
include('conexion.php');
$con = conexion();
$nombre= $_POST['nombre'];
$tel= $_POST['tel'];
$dir= $_POST['dir'];
$consulta = "UPDATE Sucursal SET Sucursal.telefono='$tel', Sucursal.direccion='$dir' WHERE Sucursal.nombre='$nombre'";
$res= $con->query($consulta);
if ($res==1) {
  echo "<h2>Sucursal actualizado correctamente</h2>";
  echo '<a href="../view/sucursales.php">Volver</a>';
}
else {
  echo "<h2>Error al actualizar</h2>";
  echo '<a href="../view/sucursales.php">Volver</a>';
}

 ?>
