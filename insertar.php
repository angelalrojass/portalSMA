

<?php
require_once("config1.php");


$nombreU = $_POST['idEstado'];
$apellidoPU = $_POST['idMunicipio'];


$conexion = new MySQLi($server,$user,$password,$database);


if($conexion->connect_error) {
  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $conexion->set_charset('utf8');
}



//Insertamos datos del usuario
$consulta = "INSERT INTO estados1 (estado) VALUES ('$nombreU');";


$resultado = $conexion -> query($consulta)|| die("Ha ocurrido un error al guardar los datos");


//Cerramos Base de Datos
$conexion->close();


?>