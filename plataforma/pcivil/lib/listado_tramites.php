<?php
include("../../lib/config.php");
include("../../lib/functions.php");
 

$link = mysqli_connect($server,$user,$password,$database);
$link->set_charset('utf8');


if ($result = mysqli_query($link, "SELECT * FROM `proteccion_civil`  ORDER BY `fecha_solicitud` DESC ")) {

		 
	while($row = mysqli_fetch_assoc($result)) {
		$estatus  = $row['estatusLicencia'];
		$FolioSol = $row['folio'];
		
		if ($estatus == 1){
			$estatusTram = '<span class="label bg-warning">Pendiente Dictamen</span>';
			$demasDocs = '';
			$FormatoPago = '<a href="#" class="idDelFolio" data-toggle="modal" data-id="'.$FolioSol.'" data-target="#splashForma" data-options="splash-ef-3"><i class="fa fa-cloud-upload"></i> Subir Dictamen</a>';
			
		} else {
			$estatusTram = '<span class="label bg-greensea">Dictamen Elaborado</span>';
			
			$FormatoPago = '';
		}
		
		$protC = mysqli_query($link, "SELECT `Nombre`, `ApellidoPat`, `ApellidoMat` FROM `solicitudes` WHERE `Folio` = '$FolioSol'");
		while($row2 = mysqli_fetch_assoc($protC)) {
				$Nombre  = $row2['Nombre'];
				$ApellidoPat  = $row2['ApellidoPat'];
				$ApellidoMat  = $row2['ApellidoMat'];
				
				
		}
		
		
	     echo '<tr>';
		 echo '<td>'.$row['fecha_solicitud'].'</td>';
		 echo '<td>'.$FolioSol.'</td>';
		 echo '<td>'.$Nombre.' '.$ApellidoPat.' '.$ApellidoMat.'</td>';
		 echo '<td>'.$estatusTram.'</td>';
		 echo '<td><a href="../'.$folder_docs.'/'.$FolioSol.'/'.$FolioSol.'-FUA.pdf"  data-toggle="tooltip" title="Solicitud de Licencia" target="_blank"><i class="fa fa-file-text-o"></i></a>&nbsp;&nbsp;<a href="../'.$folder_docs.'/'.$FolioSol.'/'.$FolioSol.'-CZDU.pdf"  data-toggle="tooltip" title="Cédula de Zonificación" target="_blank"><i class="fa fa-file-o"></i></a>&nbsp;&nbsp;
					<a href="../'.$folder_docs.'/'.$FolioSol.'/'.$FolioSol.'-CCPC.pdf"  data-toggle="tooltip" title="Carta Compromiso PC" target="_blank"><i class="fa fa-file-o"></i></a>&nbsp;&nbsp;
					<a href="../'.$folder_docs.'/'.$FolioSol.'/Licencia-'.$FolioSol.'.pdf"  data-toggle="tooltip" title="Licenicia de Funcionamiento" target="_blank"><i class="fa fa-file"></i></a>';
		 echo '</td>';
		 echo '<td>'.$FormatoPago.'</td>';
		 echo '<tr>';
	

	} 
		

}

/* cerrar la conexión */
mysqli_close($link);


	





?>