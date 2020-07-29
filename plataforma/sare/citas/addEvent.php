<?php

// Conexion a la base de datos
require_once('bdd.php');

if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];

	$sql = "INSERT INTO `events`(`title`, `Email`, `Telefono`, `start`, `end`, `estatus`) VALUES ('$title', '$email', '$telefono', '$start', '$end', '1')";
	
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	} 

}
header('Location: '.$_SERVER['HTTP_REFERER']);
	
?>
