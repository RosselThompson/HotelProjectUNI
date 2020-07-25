<?php
  include('conexion.php');
  $con= conexion();
  $emp= $_GET['u'];
  $consulta="UPDATE Empleado SET estado='inactivo'  WHERE NID='$emp'";
  $res = $con->query($consulta);
  if($res==1){
    header("Location: ../view/empleados.php");
    }
  else {
    echo "Error al inhabilitar empleado";
  }
 ?>
