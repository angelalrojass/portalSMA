<?php
include("../../../lib/config.php");
include("../../../lib/functions.php");
 

$link = mysqli_connect($server,$user,$password,$database);
$link->set_charset('utf8');


if ($result = mysqli_query($link, "SELECT `idregistro`, `folio`, `monto`, `cveRecauda`, `tipoPago`, `banco`, `comPago`, `fechaPago`, `requiereFactura` FROM `tesoreria` WHERE `requiereFactura`='1'")) {

		 
	while($row = mysqli_fetch_assoc($result)) {

		$FolioSol = $row['folio'];
		$Comprobante = $row['comPago'];
		$FechaPago = $row['fechaPago'];
		$MotoA = $row['monto'];
		$pagoEn = $row['banco'];
		setlocale(LC_MONETARY, 'es_MX');
		$Monto = money_format('%i',$MotoA);
		
		
		$protC = mysqli_query($link, "SELECT `Nombre`, `ApellidoPat`, `ApellidoMat`, `Rfc` FROM `solicitudes` WHERE `Folio` = '$FolioSol'");
		while($row2 = mysqli_fetch_assoc($protC)) {
				$Nombre  = $row2['Nombre'];
				$ApellidoPat  = $row2['ApellidoPat'];
				$ApellidoMat  = $row2['ApellidoMat'];
	
		}
		
		$BancoT = mysqli_query($link, "SELECT `descripcion` FROM `bancos` WHERE `idBanco` = '$pagoEn'");
		while($row3 = mysqli_fetch_assoc($BancoTs)) {
				$ElBanco  = $row3['descripcion'];
				
	
		}
		
		
		
	     echo '<tr>';
		 echo '<td>'.$FechaPago.'</td>';
		 echo '<td>'.$FolioSol.'</td>';
		 echo '<td>'.$Nombre.' '.$ApellidoPat.' '.$ApellidoMat.'</td>';
		 echo '<td>'.$Monto.'</td>';
		 echo '<td>'.$ElBanco.'</td>';
		 echo '<td><a href="'.$urlmail.'/plataforma/'.$folder_docs.'/'.$Comprobante.'"  data-toggle="tooltip" title="Comprobante de Pago" target="_blank"><i class="fa fa-file"></i></a>';
		 echo '</td>';
		 echo '<td></td>';
		 echo '<tr>';
	

	} 
		

}

/* cerrar la conexión */
mysqli_close($link);


	





?>