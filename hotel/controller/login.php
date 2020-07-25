<?php
  include('conexion.php');
  $usuario= $_POST['user'];
  $pass= $_POST['pass'];
  $localidad= 'Managua';
  $con = conexion();
  $result = $con->query("SELECT username , pass ,statu, idPermiso FROM users");
   while($row = $result->fetch_array(MYSQLI_ASSOC))
     if ($pass == $row['pass'] and $usuario == $row['username'] and $row['statu']== 'activo') {
         session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $usuario;
        $_SESSION['privilegio']= $row['idPermiso'];
        $_SESSION['localidad'] = $localidad;
        header("Location: ../view/home.php");
        exit();
        }

       header("Location: ../view/error/errorLogin.php");

   mysqli_close($con);
 ?>
