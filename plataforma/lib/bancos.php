<?php
include("../lib/config.php");
$mysqli = new MySQLi($server,$user,$password,$database);
$mysqli->set_charset('utf8');
$query = "SELECT `idBanco`, `descripcion` FROM `bancos`";
$result = mysqli_query($mysqli, $query);
if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		$id  = $row['idBanco'];
		$banco  = $row['descripcion'];

		
		echo '<option value="'.$id.'">'.$banco.'</option>';


	}
} 
		
$mysqli->close();
?>