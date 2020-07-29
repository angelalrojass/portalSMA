<?php
require_once("config.php");
require_once("functions.php");


/* Previene acceso directo a esta página*/ 
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if(!$isAjax) {
  $user_error = 'Acceso denegado - direct call is not allowed...';
  trigger_error($user_error, E_USER_ERROR);
}

ini_set('display_errors',1);


// Recibimos los datos
$email = sanitize($_POST['username']);
$pswd = md5(sanitize($_POST['password']));
$activo = 1;


// Create connection
$conn = new mysqli($server,$user,$password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$pswd' AND activo='$activo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    $row = $result->fetch_assoc();
	
	session_start();
	
	//Si el usuario existe y esta activo establecemos la sesion
	
	$_SESSION['uid'] = $row["usuarioid"];
	$_SESSION['email'] = $row["email"];
	$_SESSION['nombrec'] = $row["nombreu"] . ' ' . $row["apellidopu"];
	$_SESSION['nombre'] =  $row["nombreu"];
	$_SESSION['apellidopat'] = $row["apellidopu"];
	$_SESSION['apellidomat'] = $row["apellidomu"];
	$_SESSION['userlevel'] = $row["tipousuario"];
	
	
	
    echo "1";
	

} else {
    echo "0";
}
$conn->close();


?>