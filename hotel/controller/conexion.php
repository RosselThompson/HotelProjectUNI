<?php
function conexion(){
global  $DB_HOST;
global  $DB_USER;
global  $DB_PASS;
global  $DB_NAME;

$DB_HOST='localhost';
$DB_USER= 'root';
$DB_PASS= '';
$DB_NAME= 'hotel';
$mysqli= @new mysqli($DB_HOST,$DB_USER, $DB_PASS, $DB_NAME);
if(mysqli_connect_errno()){
  printf(error_db_connect());
  exit();
}
return $mysqli;
}
 ?>
