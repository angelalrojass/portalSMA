<?php
include("../../lib/config.php");
include("../../lib/functions.php");
 

$link = mysqli_connect($server,$user,$password,$database);
$link->set_charset('utf8');


if ($result = mysqli_query($link, "SELECT * FROM `solicitudes` ORDER BY `FechaSolicitud` DESC ")) {

		 
	while($row = mysqli_fetch_assoc($result)) {
		$estatus  = $row['estatusId'];
		$FolioSol = $row['Folio'];
		$FechaSol = $row['FechaSolicitud'];
		$FechaHasta = date("d-m-Y", strtotime($FechaSol));
		
		$DocIne = $row['DocIne'];
		$DocCompDom = $row['DocCompDom'];
		$DocFoto1F = $row['DocFoto1F'];
		$DocFoto1Int = $row['DocFoto1Int'];
		$DocActaCons = $row['DocActaCons'];
		
		
		if ($DocActaCons == Null){
			
			$DocActaCons = '';
		} else {
			
			$DocActaCons = '<a href="../'.$folder_docs.'/'.$row['Folio'].'/'.$DocActaCons.'"  data-toggle="tooltip" title="Acta Constitutiva" target="_blank"><i class="fa fa-file-pdf-o"></i></a>&nbsp;';
		}
		
		if ($estatus == 1){
			$estatusTram = '<span class="label bg-warning">Pendiente Pago</span>';
			$demasDocs = '';
			$FormatoPago = '<a href="#" class="idDelFolio" data-toggle="modal" data-id="'.$FolioSol.'" data-target="#splashForma" data-options="splash-ef-3"><i class="fa fa-cloud-upload"></i></a>';
			$estatusDic = '<span class="label bg-warning">N/A</span>';
			$DictamenDoc ='';
			
		} else {
			$estatusTram = '<span class="label bg-greensea">Licencia Pagada</span>';
			$demasDocs =  '<a href="../'.$folder_docs.'/'.$FolioSol.'/'.$FolioSol.'-CZDU.pdf"  data-toggle="tooltip" title="Cédula de Zonificación" target="_blank"><i class="fa fa-file-o"></i></a>&nbsp;
					<a href="../'.$folder_docs.'/'.$FolioSol.'/'.$FolioSol.'-CCPC.pdf"  data-toggle="tooltip" title="Carta Compromiso PC" target="_blank"><i class="fa fa-file-o"></i></a>&nbsp;
					<a href="../'.$folder_docs.'/'.$FolioSol.'/Licencia-'.$FolioSol.'.pdf"  data-toggle="tooltip" title="Licenicia de Funcionamiento" target="_blank"><i class="fa fa-file"></i></a>';
			$FormatoPago = '';
			
			
			$protC = mysqli_query($link, "SELECT  `estatusLicencia`, `dictamen` FROM `proteccion_civil` WHERE `folio`= '$FolioSol'");
			while($row2 = mysqli_fetch_assoc($protC)) {
					$estatusPC  = $row2['estatusLicencia'];
					$DictamenPC = $row2['dictamen'];
					
					if ($estatusPC == 1){
						$estatusDic = '<span class="label bg-warning">Pendiente Inspección</span>';
						$DictamenDoc = '';
						
					} else {
						$estatusDic = '<span class="label bg-greensea">Inspección Aprobada</span>';
						$DictamenDoc = '<a href="'.$urlmail.'/plataforma/'.$folder_docs.'/dictamen/'.$DictamenPC.'"  data-toggle="tooltip" title="Dictamen Protección Civil" target="_blank"><i class="fa fa-file"></i></a>';
						
					}
			}
		}
		
		
		
		
	     echo '<tr>';
		 echo '<td>'.$FechaHasta.'</td>';
		 echo '<td>'.$FolioSol.'</td>';
		 echo '<td>'.$row['Nombre'].' '.$row['ApellidoPat'].'</td>';
		 echo '<td>'.$estatusTram.' | '.$estatusDic.'</td>';
		 echo '<td><a href="../'.$folder_docs.'/'.$row['Folio'].'/'.$row['Folio'].'-FUA.pdf"  data-toggle="tooltip" title="Solicitud de Licencia" target="_blank"><i class="fa fa-file-text-o"></i></a>&nbsp;'.$demasDocs.'&nbsp; '.$DictamenDoc.'</td>';
		 echo '<td>
		 <a href="../'.$folder_docs.'/'.$row['Folio'].'/'.$DocIne.'"  data-toggle="tooltip" title="Identificación Oficial" target="_blank"><i class="fa fa-file-pdf-o"></i></a>&nbsp;
		 <a href="../'.$folder_docs.'/'.$row['Folio'].'/'.$DocCompDom.'"  data-toggle="tooltip" title="Comprobante de Domicilio" target="_blank"><i class="fa fa-file-pdf-o"></i></a>&nbsp;
		 <a href="../'.$folder_docs.'/'.$row['Folio'].'/'.$DocFoto1F.'"  data-toggle="tooltip" title="Foto Fachada" target="_blank"><i class="fa fa-file-pdf-o"></i></a>&nbsp;
		 <a href="../'.$folder_docs.'/'.$row['Folio'].'/'.$DocFoto1Int.'"  data-toggle="tooltip" title="Foto Interior" target="_blank"><i class="fa fa-file-pdf-o"></i></a>&nbsp;'.$DocActaCons.'&nbsp';
		 echo '<td>'.$FormatoPago.'</td>';
		 echo '<tr>';
	

	} 
		

}

/* cerrar la conexión */
mysqli_close($link);


	





?>