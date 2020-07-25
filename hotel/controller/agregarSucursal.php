<?php
include('conexion.php');
$con = conexion();
$nombre= $_POST['nombre'];
$tel= $_POST['tel'];
$dir= $_POST['dir'];
if($nombre=='' and $dir==''){
  echo "Complete todos los campos";
  echo '<a href="../view/sucursales.php">Volver</a>;';
}
else {

  $consulta = "INSERT INTO Sucursal(nombre,direccion,telefono,estado) values ('$nombre','$dir','$tel','activo')
  ";
  $res= $con->query($consulta);
  if($res==1){
  echo "Sucursal registrada";
  echo '<a href="../view/sucursales.php">Volver</a>;';
  }
  else {
    echo "Error al registrar sucursal";
    echo '<a href="../view/sucursales.php">Volver</a>;';
  }

}


 ?>
