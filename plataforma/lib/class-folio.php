<?php
include("../lib/config.php");
include("../lib/functions.php");
 
$mysqli = new MySQLi($server,$user,$password,$database);
 
/* Connect to database and set charset to UTF-8 */
if($mysqli->connect_error) {
  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $mysqli->set_charset('utf8');
}

$folio_num = 0;

$query = "SELECT * FROM folios_disponibles ORDER BY id DESC LIMIT 1 ";

$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		$folio_num  = $row['id'];

	}
} 
		
$mysqli->close();

//Fabricamos el Folio


//Fecha del Folio
$year_now = date ("y");  
$month_now = date ("m");  

//Folio Autonumérico
$folio_siguiente = $folio_num + 1;
$folio_formateado = str_pad($folio_siguiente, 4, "0", STR_PAD_LEFT);

//Código de Seguridad Random

$code = '';
  for($x = 0; $x<1; $x++) {
	  $code .= '-'.substr(strtoupper(sha1(rand(0,999999999999999))),2,4);
  }
  $code = substr($code,1);


$folio_solicitud = $entidad.'-'.$folio_formateado.'-'.$month_now.$year_now.'-'.$code;



?>