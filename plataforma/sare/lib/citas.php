<?php
include("../../../lib/config.php");
include("../../../lib/functions.php");
 

$link = mysqli_connect($server,$user,$password,$database);
$link->set_charset('utf8');


if ($result = mysqli_query($link, "SELECT * FROM `citas_programadas` ORDER BY HoraCita DESC")) {

		 
	while($row = mysqli_fetch_assoc($result)) {
		$folio  = $row['idCita'];
		$Nombre = $row['Nombre'];
		$Email = $row['Email'];
		$Telefono = $row['Telefono'];
		$FechaCita = $row['FechaCita'];
		$HoraCita = $row['HoraCita'];
		
		$FechaF = date("d-m-Y", strtotime($FechaCita));
		

		
		
		
	     echo '<tr>';
		 echo '<td>'.$folio.'</td>';
		 echo '<td>'.$FechaF.'</td>';
		 echo '<td>'.$HoraCita.'</td>';
		 echo '<td>'.$Nombre.'</td>';
		 echo '<td>'.$Email.'</td>';
		 echo '<td>'.$Telefono.'</td>';
		 echo '<tr>';
	

	} 
		

}

/* cerrar la conexión */
mysqli_close($link);


	





?>