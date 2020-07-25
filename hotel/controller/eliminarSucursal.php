<?php
  include('conexion.php');
  $con= conexion();
  $user= $_GET['u'];
  $consulta="UPDATE Sucursal SET estado='inactivo'  WHERE nombre='$user'";
  $res = $con->query($consulta);
  if($res==1){
    header("Location: ../view/sucursales.php");
    }
  else {
    echo "Error al inhabilitar usuario";
  }
 ?>
