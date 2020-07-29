<?php
//============================================================+
// File name   : fua_pdf.php
// Begin       : 2017-05-21
// Last Update : 
//
// Description : Guarda Comprobante de Pago
//               
//
// Author: Fernando Quintero
//
//
//============================================================+

include("../sesiones.php");
require_once("../../lib/config.php");
require_once("../../lib/functions.php");


/* Previene acceso directo a esta página*/ 
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if(!$isAjax) {
  $user_error = 'Acceso denegado - direct call is not allowed...';
  trigger_error($user_error, E_USER_ERROR);
}

ini_set('display_errors',1);

$conexion = new MySQLi($server,$user,$password,$database);
$conexion->set_charset('utf8');

$folioSol  = sanitize($_POST['folio']);
$FechaPago = sanitize($_POST["FechaPago"]);
$banco = sanitize($_POST["banco"]);
$idUsuario = $_SESSION['uid'];
$ComPago = sanitize($_SESSION["ComPago"]);

$date=date_create($FechaPago);
$formatDate = date_format($date,"Y/m/d H:i:s");


//Insertamos datos del usuario
$guarda = "INSERT INTO `tesoreria`(`folio`, `monto`, `cveRecauda`, `tipoPago`, `banco`, `comPago`, `fechaPago`, `requiereFactura`) VALUES ('$folioSol','$importe_cedula','$claveDu','2','$banco','$ComPago', '$formatDate','1')";

$actualiza = "UPDATE `solicitudes` SET `estatusId`='2' WHERE `Folio` ='$folioSol'";

$guardaPC = "INSERT INTO `proteccion_civil` (`folio`, `estatusLicencia`) VALUES ('$folioSol','1')";
$resPC = $conexion -> query($guardaPC);

$resultado = $conexion -> query($guarda);

if (!$resultado)
{

	echo 'BAD '.("Error description: " . mysqli_error($conexion));

} else {
	
	$res = $conexion -> query($actualiza);
	echo 'OK';	
		  
}



//Cerramos Base de Datos
$conexion->close();




//============================================================+
// END OF FILE
//============================================================+

?>