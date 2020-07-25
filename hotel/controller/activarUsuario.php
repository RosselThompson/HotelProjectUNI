<?php
  include('conexion.php');
  $con= conexion();
  $user= $_GET['u'];
  $consulta="UPDATE users SET statu='activo'  WHERE username='$user'";
  $res = $con->query($consulta);
  if($res==1){
    header("Location: ../view/usuarios.php");
    }
  else {
    echo "Error al habilitar usuario";
  }
 ?>
