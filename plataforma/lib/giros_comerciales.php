<?php

include("../../lib/config.php");
include("../../lib/functions.php");


/* Previene acceso directo a esta página */
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if(!$isAjax) {
  $user_error = 'Acceso denegado - direct call is not allowed...';
  trigger_error($user_error, E_USER_ERROR);
}
ini_set('display_errors',1);
 
/* if the 'term' variable is not sent with the request, exit */
if ( !isset($_REQUEST['term']) ) {
	exit;
}
 

 
$mysqli = new MySQLi($server,$user,$password,$database);
 
/* Connect to database and set charset to UTF-8 */
if($mysqli->connect_error) {
  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $mysqli->set_charset('utf8');
}
 
/* retrieve the search term that autocomplete sends */
$term = trim(strip_tags($_GET['term'])); 
/* replace multiple spaces with one */
$term = preg_replace('/\s+/', ' ', $term);
 
$a_json = array();
$a_json_row = array();
 
$a_json_invalid = array(array("id" => "#", "value" => $term, "label" => "Sólo caracteres son permitidos..."));
$json_invalid = json_encode($a_json_invalid);
 
/* SECURITY HOLE *************************************************************** */
/* allow space, any unicode letter and digit, underscore and dash                */
if(preg_match("/[^\040\pL\pN_-]/u", $term)) {
  print $json_invalid;
  exit;
}
/* ***************************************************************************** */
 

 
if ($data = $mysqli->query("SELECT * FROM giros_comerciales WHERE categoria LIKE '%$term%' ORDER BY categoria ASC")) {

while($row = mysqli_fetch_array($data)) {
		$giro = (stripslashes($row['categoria']));
		$id_categoria= htmlentities(stripslashes($row['idGiro']));
		$a_json_row["id"] = $id_categoria;
		$a_json_row["value"] = $giro;
		$a_json_row["label"] = $giro;
		array_push($a_json, $a_json_row);
	}
}
 
/* jQuery wants JSON data */
echo json_encode($a_json);
flush();
 
$mysqli->close();
?>