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
$consulta = "INSERT INTO Empleado(NID,nombres,apellidos,sexo,estadocivil,telefono,direccion,email,fechaingreso,estado) values
('$nid','$nombres', '$ap', '$sexo', '$estc','$tel','$dir','$correo',now(),'activo')";
$res= $con->query($consulta);
if($res==1){
echo "Empleado registrado";
echo '<a href="../view/empleados.php">Volver</a>;';
}
else {
  echo "Error al registrar empleado";
  echo '<a href="../view/empleados.php">Volver</a>;';
}
