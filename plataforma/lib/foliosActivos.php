<?php
include("sesiones.php");
include("../lib/config.php");
$mysqli = new MySQLi($server,$user,$password,$database);
$mysqli->set_charset('utf8');
$query = "SELECT `usuarioid`, `Folio` FROM `solicitudes` WHERE `usuarioid`='$idUsuario'";
$result = mysqli_query($mysqli, $query);
if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		$id  = $row['Folio'];

		
		echo '<option value="'.$id.'">'.$id.'</option>';


	}
} 
		
$mysqli->close();
?>