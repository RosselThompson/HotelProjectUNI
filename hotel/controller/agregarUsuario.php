<?php
include('conexion.php');
$con = conexion();
$nid = $_POST['NID'];
$nombre= $_POST['nombre'];
$idp= $_POST['permiso'];
$pass= $_POST['pass'];
$passc= $_POST['passc'];
if ($pass == $passc) {
  $res= $con->query("SELECT Empleado.idEmpleado from Empleado where Empleado.NID='$nid'");
  if ($res->num_rows > 0) {
    while ($row= $res->fetch_assoc()) {
          $ide= $row['idEmpleado'];
          $consulta="INSERT into users(idPermiso, idEmpleado, username, pass, statu, created_at) values ($idp,$ide,'$nombre','$pass','activo',now());";
          $result= $con->query($consulta);
          if ($result==1) {
            echo "Usuario registrado";
            echo '<a href="../view/usuarios.php">Volver</a>;';
          }
          else {
            echo "<h2>Error al registrar</h2>";
            echo '<a href="../view/usuarios.php">Volver</a>';

          }
    }
  }
  else {
    echo "<h2>NID no pertenece a ningun empleado</h2>";
    echo '<a href="../view/usuarios.php">Volver</a>';
  }
}
else {
  echo "<h2> Las contraseñas no coinciden</h2>";
  echo '<a href="../view/usuarios.php">Volver</a>';
}

?>
