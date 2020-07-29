<?php
//============================================================+
// File name   : fua_pdf.php
// Begin       : 2017-05-21
// Last Update : 
//
// Description : Guarda Dictamen
//               
//
// Author: Fernando Quintero
//
//
//============================================================+




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
$FechaPago = sanitize($_POST["FechaDictamen"]);
$estatusDPC = sanitize($_POST["estatusDPC"]);
$observaciones = sanitize($_POST["observaciones"]);
$DocDPC = sanitize($_SESSION["DicPC"]);

$date=date_create($FechaPago);
$formatDate = date_format($date,"Y/m/d H:i:s");


//Insertamos datos del usuario
$guarda = "UPDATE `proteccion_civil` SET `fecha_dictamen`='$formatDate',`estatusLicencia`='$estatusDPC',`dictamen`='$DocDPC',`observaciones`='$observaciones' WHERE `folio` = '$folioSol'";


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