<?php
session_start();
if (isset($_SESSION['uid'])){
	
		$idUsuario = $_SESSION['uid'];
		$email = $_SESSION['email'];
		$nombre = $_SESSION['nombre'];
		$apellidoPat =	utf8_encode( $_SESSION['apellidopat']);
		$apellidoMat = 	utf8_encode($_SESSION['apellidomat']);
		$nivelUsuario = utf8_encode($_SESSION['userlevel']);

	
		
	} else {
		
		header("Location: ../acceso.php");
		exit;
	
	}

?>