<?php
include('conexion.php');
$con = conexion();
$nid = $_POST['NID'];
$nombre= $_POST['nombre'];
$permiso= $_POST['permiso'];
$pass= $_POST['pass'];
$passc= $_POST['passc'];
$idu= $_POST['user'];
if ($pass == $passc) {
          $consulta="UPDATE users SET idPermiso= $permiso, username='$nombre', pass='$pass' WHERE users.idUsuario=$idu";
          $result = $con->query($consulta);
          if ($result==1) {
            echo "<h2>Usuario actualizado correctamente</h2>";
            echo '<a href="../view/usuarios.php">Volver</a>';
          }
          else {
            echo "<h2>Error al actualizar</h2>";
            echo '<a href="../view/usuarios.php">Volver</a>';

      }

}
else {
  echo "<h2> Las contraseñas no coinciden</h2>";
  echo '<a href="../view/usuarios.php?">Volver</a>';
}

?>
