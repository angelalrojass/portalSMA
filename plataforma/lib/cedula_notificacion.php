<?php
//============================================================+
// File name   : licencia.php
// Begin       : 2017-06-08
// Last Update : 
//
// Description : Generación de Licencia de Funcionamiento TCPDF
//               Usando la libreria  TCPDF class
//
// Author: Fernando Quintero
//
//
//============================================================+

include("../sesiones.php");
require_once("../../lib/config.php");
require_once("../../lib/functions.php");
require '../../lib/PHPMailerAutoload.php';
require_once('pdf/tcpdf_config_alt.php');
require_once('pdf/tcpdf.php');


$conexion = new MySQLi($server,$user,$password,$database);
$conexion->set_charset('utf8');

$idUsuario = $_SESSION['uid'];
//$Folio = $_SESSION['folio'];

$Folio = sanitize($_POST['folio']);

$recibo = "SELECT * FROM folios_cedula ORDER BY idFolioCed DESC LIMIT 1";
$resulta = mysqli_query($conexion, $recibo);

if($resulta) {
	while($row = mysqli_fetch_assoc($resulta)) {
		$idFol  = $row['idFolioCed'];

	}
} 
		

//Folio Autonumérico
$folio_siguiente = (int)$idFol + 1;
$folio_formateado = str_pad($folio_siguiente, 5, "0", STR_PAD_LEFT);
$reciboCZ = $entidad.'-'.$folio_formateado;


$sql3 = "INSERT INTO `folios_cedula`(`FoliosAsignados`) VALUES ('$reciboCZ')";
mysqli_query($conexion, $sql3);

//SACAMOS ETIQUETA DE GIRO COMERCIAL
$giro = "SELECT * FROM `solicitudes` WHERE `Folio`= '$Folio'";
$result = mysqli_query($conexion, $giro);
if($result) {
	while($row = mysqli_fetch_assoc($result)) {

		$GiroComercial = $row['GiroComercial'];
		$Nombre = $row['Nombre'];
		$ApellidoPat = $row['ApellidoPat'];
		$ApellidoMat = $row['ApellidoMat'];
		$emailCli = $row['Email'];

		$Calle = $row['Calle'];
		$NumInt = $row['NumInt'];
		$NumExt = $row['NumExt'];
		$CodPostal = $row['CodPostal'];
		$Colonia = $row['Colonia'];
		
		$croquis = $row['croquis_loc'];

		
		$Titular = $Nombre.' '.$ApellidoPat.' '.$ApellidoMat;
		

		
		
		
		//SACAMOS ETIQUETA DE GIRO COMERCIAL
		$giro = "SELECT `calveScian`, `categoria` FROM `giros_comerciales` WHERE `idGiro`='$GiroComercial'";
		$resultG = mysqli_query($conexion, $giro);
		if($resultG) {
			while($row = mysqli_fetch_assoc($resultG)) {
				$Scian = $row['calveScian'];
				$DescGiroCom = $row['categoria'];
		
			}
			
		} 
		
		

	}
	
} 

function actual_date ()  
	{  
		$week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");  
		$months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");  
		$year_now = date ("Y");  
		$month_now = date ("n");  
		$day_now = date ("j");  
		$week_day_now = date ("w");  
		$date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;   
		return $date;    
	} 
	
$desde = date('Y/m/j H:i:s');

$code = '';
		  for($x = 0; $x<1; $x++) {
			  $code .= '-'.substr(strtoupper(sha1(rand(0,999999999999999))),2,100);
		  }
		  $code = substr($code,1);
		
		$cadenaOriginal = '||2.0|'.$desde.'|'.$Folio.'|'.$hastaVigencia.'|'.$code.'||';


//Cerramos Base de Datos
$conexion->close();

$desFolder = '../'.$folder_docs.'/'.$Folio.'/';
$imageName = $croquis;
$imagePath = $desFolder.$imageName;


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {


	//Page header
	public function Header() {
		// get the current page break margin
		$this->ImageSVG($file='svg/LogoMunicipio.svg', $x=0, $y=5, $w='50', $h='35', $link='', $align='', $palign='', $border=0, $fitonpage=false);
		
		$this->ImageSVG($file='svg/LogoSanMateoVertical.svg', $x=159, $y=5, $w='47', $h='34', $link='', $align='', $palign='', $border=0, $fitonpage=false);
	    
		//$this->ImageSVG($file='svg/LogotipoSare.svg', $x=80, $y=4, $w='50', $h='35', $link='', $align='', $palign='', $border=0, $fitonpage=false);
		// Set font
		$this->SetFont('helvetica', 'N', 13);
		
		$this->SetFillColor(255, 255, 255);
		$this->SetLineStyle(array('width' => 0, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));
		

	}
	
	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-10);
		// Set font
		$this->SetFont('helvetica', 'N', 8);
		// Page number
		$this->Cell(0, 10, '', 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('San Mateo Atenco');
$pdf->SetTitle('Licencia Municipal de Funcionamiento');
$pdf->SetSubject('Licencia Municipal de Funcionamiento');
$pdf->SetKeywords('Licencia Municipal de Funcionamiento');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'pdf/lang/spa.php')) {
	require_once(dirname(__FILE__).'pdf/lang/spa.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------


// set font
$pdf->SetFont('helvetica', 'N', 8);
// add a page
$pdf->AddPage();
$pdf->SetY(45);


$html = '<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:8px">
            <tr> 
                <td width="700" align="center" valign="middle">
                    <table width="700" border="0" align="left" cellpadding="0" cellspacing="0">
                       <tr> 
                           <td width="700" colspan="2" align="center" style="text-align:center; font-size:8px;"><table width="700" border="0" cellspacing="3" cellpadding="5">
                             <tbody>
                               <tr>
                                 <td colspan="2" align="left" style="text-align:left; font-size:10px;"><strong>'.strtoupper($Titular).'</strong></td>
                                 <td width="136" align="right" style="text-align:right; font-size:10px;">FECHA</td>
                                 <td width="179" align="center" style="text-align:center; font-size:10px;"><strong>'.actual_date().'</strong></td>
                               </tr>
                               <tr>
                                 <td colspan="4" align="justify" style="text-align:justify; font-size:10px; padding:5px;"><span style="font-size:11px;"><strong>PRESENTE (S)</strong></span><br>En relación a su solicitud de <strong>Cédula Informativa de zonificación</strong> del predio ubicado en <span style="padding:2px;"><u><strong>'.strtoupper($Calle).' '.$NumExt.' '.$NumInt.'</strong></u></span>, Colonia o localidad  <span style="padding:2px;"><u><strong>'.strtoupper($Colonia).'</strong></u></span> municipio de <u><strong>'.$municipio.'</strong></u> De conformidad con el plan: <span style="padding:2px;"><u><strong>'.$plan.'</strong></u></span> Del municipio <span style="padding:2px;"><u><strong>'.$municipio.' '.$estado.'</strong></u></span> en el predio de referencia de acuerdo con el croquis anexo se establecen las siguientes normas:</td>
                               </tr>
                               <tr>
                                 <td colspan="4" align="justify" style="text-align:justify; padding:5px; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222; font-size:10px;">Zona: <span style="padding:2px;"><u><strong>'.$zonaDu.'</strong></u></span> Clave: <span style="padding:2px;"> <u><strong>'.$claveDu.'</strong></u> </span> Uso(s): <span style="padding:2px;"> <u><strong>'.$usoDu.'</strong></u></span> Superficie mínima libre de construcción: <span style="padding:2px;"> <u><strong>'.$superficieDu.'</strong></u> </span> %. Altura máxima de <span style="padding:2px;"> <u><strong>'.$alturaDu.'</strong></u> </span> de construcción  Niveles: <span style="padding:2px;"> <u><strong>'.$nivelesDu.'</strong></u> </span> Metros sobre el nivel de: <span style="padding:2px;"> <u><strong>'.$metosDu.'</strong></u> </span>, Lote mínimo <span style="padding:2px;"> <u><strong>'.$loteDu.'</strong></u> </span> M2, con un frente mínimo: <span style="padding:2px;"> <u><strong>'.$frente.'</strong></u> </span> Metros,  Intensidad máxima de aprovechamiento del predio <span style="padding:2px;"> <u><strong>'.$intensidadDu.'</strong></u> </span> Veces la superficie del predio.  Estacionamiento: <span style="padding:2px;"> <u><strong>'.$estaDu.'</strong></u> </span><br> <span style="border:1px solid #727272; background:#E8E8E8; padding:2px; display:block; text-align:center"> <u><strong>'.$nota1.'</strong></u> </span>
 
</td>
                               </tr>
                               <tr>
                                 <td colspan="4" align="left" style="text-align:left; font-size:10px;">&nbsp;</td>
                               </tr>
                               <tr>
                                 <td colspan="4" align="left" style="text-align:left; font-size:10px;">Con los siguientes usos generales y específicos:</td>
                               </tr>
                               <tr>
                                 <td colspan="4" align="left" style="text-align:justify; padding:5px; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><u><strong> '.strtoupper($DescGiroCom).' </strong></u><br>
                                 <br>ESTABLECIMIENTOS PARA LA VENTA DE ABARROTES, VINOS,REPARACIÓN DE CALZADO Y ARTICULOS DE PIEL; EXPENDIOS DE ALIMENTOS SIN PREPARAR Y DE COMIDA; PANADERIAS, DULCERIAS, FRUTERIAS, RECAUDERIAS, CARNICERIAS, PESCADERIAS, ROSTICERIAS, SALCHICHONERIAS, FARMACIAS, PAPELERIAS, PERIODICOS, REVISTAS, LIBRERIAS, TABAQUERIAS, VIDRIERIAS, TLAPALERIAS, FERRETERIAS, PELETERIAS, TALABARTERIAS, CARBONERIAS, MERCERIAS, SALONES DE BELLEZA, PELUQUERIAS, LAVANDERIAS, TINTORERIAS, CREMERIAS, MISCELANEAS, LONJAS MERCANTILES Y MINISUPER.<br>
                                 <br>
                                 <br>
                                 <span style="text-align:center;"><strong><u>-HASTA 250  M2 POR USO NO REQUIERE DICTAMEN UNICO DE  FACTIBILIDAD (UIR)EL USO SI SE CONTEMPLA DENTRO DE LA ZONA</u></strong></span>
                                
                                   <span style="text-align:center;"><br><br>-MAS DE 250 M2 POR USO  NO  SE  CONTEMPLA DENTRO DE LA ZONA<br>
                                   <br>
                                   </span>
                                   <span style="text-align:center; font-size:8px;">-PARA EL APROVECHAMIENTO  DEL PREDIO DEBERA CONTAR CON TODAS LAS LICENCIAS Y PERMISOS CORRESPONDIENTES.</span>
                                   <br>
<span style="text-align:center; font-size:10px;"><strong>-EL PRESENTE DOCUMENTO  ES DE CARÁCTER INFORMATIVO, NO CONSTITUYE LICENCIA, NI AUTORIZACIÓN ALGUNA POR  LO QUE NO CONFIERE DERECHO ALGUNO AL SOLICITANTE</strong><br>
                                   <br>
                                   </span>
                                   <span style="text-align:center; font-size:8px;">-DEBERA RESPETAR LAS RESTRICCIONES QUE MARQUE EL  ALINEAMIENTO MUNICIPAL Y DEMAS APLICABLES </span><br>

                                   <span style="font-size:8px; text-align:justify;"><strong><br>
                                   LA PRESENTE CEDULA INFORMATIVA DE  ZONIFICACIÓN TIENE CARÁCTER  INFORMATIVO  Y  EL USO SEÑALADO PARA EL  PREDIO, CUYA LOCALIZACIÓN  CORRESPONDE AL CROQUIS ANEXO, PERMANECERÁ  VIGENTE EN TANTO NO SE MODIFIQUE EL PLAN   MUNICIPAL DE DESARROLLO URBANO  DE  SAN MATEO ATENCO. PARA EL APROVECHAMIENTO DEL PREDIO DEBERÁ OBTENER LA LICENCIA  DE USO DEL SUELO CORRESPONDIENTE.</strong></span>
                                   
                                   </td>
                               </tr>
                               <tr>
                                 <td colspan="4" style="text-align:center; font-size:8px;">&nbsp;</td>
                               </tr>
                               <tr>
                                 <td colspan="4" style="text-align:center; font-size:8px;">&nbsp;</td>
                               </tr>
                               <tr>
                                 <td colspan="4" style="text-align:center; font-size:8px;">&nbsp;</td>
                               </tr>
                               <tr>
                                 <td colspan="2" style="text-align:center; font-size:10px"><p>AUTORIZÓ<br>
                                  <br>
                                  <br>
								  <br>
                                  <strong><span style="font-size:12px">C. JESÚS SALVADOR GONZÁLEZ DÁVILA</span></strong><br>
                                  <span style="font-size:8px">DIRECTOR DE DESARROLLO URBANO METROPOLITANO Y MEDIO AMBIENTE</span>
                                 </p></td>
                                 <td colspan="2" style="text-align:center; font-size:10px; border-top:1px solid #222222; border-bottom:1px solid #222222;"><table width="300" border="0" cellspacing="2" cellpadding="1">
                                   <tbody>
                                     <tr>
                                       <td width="128" align="right" style="text-align:right; font-size:10px">Importe de derechos</td>
                                       <td width="172" height="15" style="text-align:right; font-size:10px"><strong>'.$importe_cedula.'</strong></td>
                                     </tr>
                                     <tr>
                                       <td width="128" align="right" style="text-align:right; font-size:10px">Recibo No.</td>
                                       <td width="172" height="15" style="text-align:right; font-size:10px"><strong>'.$reciboCZ.'</strong></td>
                                     </tr>
                                     <tr>
                                       <td width="128" align="right" style="text-align:right; font-size:10px">No. Registro</td>
                                       <td width="172" height="15" style="text-align:right; font-size:10px"><strong>'.$registoCZ.'</strong></td>
                                     </tr>
									 <tr>
                                       <td width="300" colspan="2" align="right" style="text-align:right; font-size:10px"><strong>CADENA ORIGINAL: '.$cadenaOriginal.'</strong></td>
                                       
                                     </tr>
                                   </tbody>
                                 </table></td>
                               </tr>
                             </tbody>
                           </table></td>
                        </tr>
                    </table>
                </td>
            </tr>
</table>';




// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// add a page
$pdf->AddPage();
$pdf->SetY(45);


	
	
$html2 = '<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="700" height="10" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:500; "><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="700" align="center" style="font-size:10px;"><strong>CROQUIS DE LOCALIZACIÓN</strong></td>
  </tr>
  <tr>
    <td width="700" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; ">&nbsp;</td>
  </tr>
  <tr>
    <td height="400" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; "><img src="'.$pdf->Image($imagePath, 12, 58, 194, 106, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false).'"/></td>
  </tr>
  <tr>
    <td width="700" height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; ">&nbsp;</td>
  </tr>
  <tr>
    <td width="700" height="20" align="center" style="text-align:center; font-size:10px"><strong>FUNDAMENTO LEGAL</strong></td>
    </tr>
      <tr>
        <td width="700" style="border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5;"><table width="680" border="0" align="center" cellpadding="5" cellspacing="5" style="text-align:justify; font-size:8px; font-weight:700;">
    <tr>
      <td align="justify">•	ARTÍCULO 143 DE LA CONSTITUCIÓN POLÍTICA DEL ESTADO LIBRE Y SOBERANO DE MÉXICO.<br>
•	ARTÍCULOS 3, 15, 19 FRACCIÓN VII Y 31 FRACCIÓN II DE LA LEY ORGÁNICA DE LA ADMINISTRACIÓN PÚBLICA DEL ESTADO DE MÉXICO.<br>
•	EN LA REFORMA DEL LIBRO QUINTO, TITULO TERCERO, CAPITULO SEGUNDO, SECCION SEGUNDA, ARTICULOS 5.55 Y 5.56 DEL CODIGO ADMINISTRATIVO DEL ESTADO DE MEXICO.<br>
•	ARTÍCULOS 5.1, 5.2, 5.3, 5.10 FRACCIÓN XII Y 5.62 DEL LIBRO QUINTO DEL CÓDIGO ADMINISTRATIVO DEL ESTADO DE MÉXICO.<br>
•	ARTÍCULOS 2, 4, 5, 6, 134, 137 Y TERCERO TRANSITORIO DEL REGLAMENTO DEL CÓDIGO ADMINISTRATIVO DEL ESTADO DE MÉXICO.<br>
•	ARTÍCULOS 1, 2, 3 FRACCIÓN III, 10, 13,18,19,21 Y 22 FRACCIÓN XVI DEL REGLAMENTO INTERIOR DE LA SECRETARÍA DE DESARROLLO <br>
•	URBANO Y VIVIENDA DEL ESTADO DE MÉXICO, PUBLICADO EN GACETA DE GOBIERNO EL DÍA PRIMERO DE JULIO DEL AÑO DOS MIL CINCO<br>
•	PLAN MUNICIPAL DE DESARROLLO URBANO DE SAN MATEO ATENCO PUBLICADO EN LA GACETA DE GOBIERNO DE FECHA LUNES 27 DE OCTUBRE DEL AÑO 2013.<br>
•	ARTÍCULO 144 FRACCIÓN XII DEL CÓDIGO FINANCIERO DEL ESTADO DE MÉXICO Y MUNICIPIOS.</td>
    </tr>
</table>

</td>
      </tr>
      <tr>
        <td height="20" align="center" style="text-align:center; font-size:10px">&nbsp;</td>
      </tr>
      <tr>
        <td width="700" height="20" align="center" style="text-align:center; font-size:10px"><strong>NORMAS APLICABLES A ESTA AUTORIZACION</strong></td>
      </tr>
      <tr>
        <td width="700" align="center" style="border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5;">
        	<table width="680" border="0" cellspacing="5" cellpadding="5" style="font-size:9px; text-align:justify; font-weight:700;">
                <tr>
                  <td><strong>- EL PRESENTE DOCUMENTO NO AUTORIZA LA CONSTRUCCION, REGULARIZACIÓN O MODIFICACIÓN ALGUNA DEL PREDIO O INMUEBLE.<br>- EL PRESENTE DOCUMENTO UNICAMENTE ES DE CARÁCTER INFORMATIVO.</strong></td>
                </tr>
            </table>

		</td>
      </tr>

</table>
';




// output the HTML content
$pdf->writeHTML($html2, true, false, true, false, '');

$pdf->lastPage();


$pdf_name = $Folio.'-CZDU.pdf';

$pat = $_SERVER['DOCUMENT_ROOT'].'plataforma/'.$folder_docs;

// ---------------------------------------------------------

$pdf->Output($pat.'/'.$Folio.'/'.$pdf_name, 'F');



//Armamos el correo
//Recibir todos los parámetros del formulario
$to = $emailCli;
$subject = utf8_decode('Cédula de Zonificación');
$from = $emailAdmin;
$from_name = $institucion;
$encoding = 'base64';
$type = 'application/pdf';

 
//Este bloque es importante
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = $Host;
$mail->Port = $Port;
$mail->Username = $UsernameM;
$mail->Password = $PasswordM;

//Agregar destinatario
$mail->SetFrom($from, $from_name);
$mail->AddReplyTo($from, $from_name);
$mail->AddAddress($to, $Nombre);	
$mail->IsHTML(true);
$mail->Timeout=90;
$mail->Subject = $subject;
$msg =  utf8_decode('<table data-module="View In Browser" data-bgcolor="Main BG" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#333333" align="center">
<tr>
	<td align="center">
		<table class="display-width" width="800" cellspacing="0" cellpadding="0" border="0" align="center">
			<tr>
				<td class="res-padding" align="center">
					<table class="display-width-inner" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
						<tr>
							<td height="10">
							</td>
						</tr>
						<tr>
							<td align="center">
								<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
									<tr>
										<td class="MsoNormal" style="color:#ffffff; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:13px; line-height:20px; letter-spacing:1px;" valign="middle" align="right">&nbsp;</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height="10">
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
<table data-module="Menu" data-bgcolor="Main BG" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#333333" align="center">
<tr>
	<td align="center">
		<table class="display-width" data-bgcolor="Menu BG" width="800" cellspacing="0" cellpadding="0" border="0" bgcolor="#f5f5f5" align="center">
			<tr>
				<td class="res-padding" align="center">
					<table class="display-width-inner" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
						<tr>
							<td height="20">
							</td>
						</tr>
						<tr>
						  <td>
								<table class="display-width-child" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="25%" cellspacing="0" cellpadding="0" border="0" align="left">
									<tr>
										<td valign="middle" align="center"><img src="'.$urlmail.'/assets/images/front-end/logo-dark.png" width="313" height="110" alt="'.$institucion.'"/></td>
									</tr>
								</table>
							<table class="display-width-child" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" width="1" cellspacing="0" cellpadding="0" border="0" align="left">
									<tr>
										<td style="line-height:10px;" width="1" height="10">
										</td>
									</tr>
							</table></td>
						</tr>
						<tr>
							<td height="20">
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
<table data-module="What We" data-bgcolor="Main BG" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#333333" align="center">
<tr>
	<td align="center">
		<table class="display-width" data-bgcolor="Section-BG-2" width="800" cellspacing="0" cellpadding="0" border="0" bgcolor="#f5f5f5" align="center">
			<tr>
				<td class="res-padding" align="center">
					<table class="display-width-inner" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
						<tr>
							<td height="60">
							</td>
						</tr>
						<tr>
							<td class="Heading" style="color:#333333; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-weight:600; font-size:18px; line-height:38px; letter-spacing:1px;" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">Cédula de Zonificación</td>
						</tr>
						<tr>
							<td height="5">
							</td>
						</tr>
						<tr>
							<td align="center">
								<table style="width:auto !important;" cellspacing="0" cellpadding="0" border="0" align="center">
									<tr>
										<td style="line-height:0px;" width="71" align="center">
											<img src="'.$urlmail.'/assets/images/front-end/71x13.png" style="margin:0; border:0; padding:0; width:100%; height:auto;" width="71" />
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height="30">
							</td>
						</tr>
						<tr>
							<td class="MsoNormal txt-center" style="color:#666666; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:14px; font-weight:400; line-height:24px;" data-color="Content" data-size="Content" data-min="12" data-max="33" align="left">
								<strong>Estimado(a) '.$Nombre.'&nbsp;'.$ApellidoPat.'&nbsp;'.$ApellidoMat.'</strong><br />
							  <p>Por medio del presente le enviamos la <strong>Cédula de Zonificación</strong> de su establecimiento para el trámite de su licenciencia de funcionamiento.</p>
							  <p>Adjunto a este correo encontrá un archivo PDF con su Cédula.</p>
							  </td>
						</tr>
						<tr>
							<td height="20">
							</td>
						</tr>
						<tr>
							<td height="20">
							</td>
						</tr>
											
						
						<tr>
							<td height="60">
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
<table data-module="Foolter" data-bgcolor="Main BG" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#333333" align="center">
<tr>
	<td align="center">
		<table class="display-width" data-bgcolor="Footer-BG" width="800" cellspacing="0" cellpadding="0" border="0" bgcolor="#000000" align="center">
			<tr>
				<td class="res-padding" align="center">
					<table class="display-width-inner" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
						<tr>
							<td height="10">
							</td>
						</tr>
						<tr>
							<td>
								<table class="display-width" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
									<tr>
										<td align="left">
											<table width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
												<tr>
													<td data-border-bottom-color="Footer-Border" style="border-bottom:1px solid #ffffff;" width="100" align="left">&nbsp;
														
													</td>
												</tr>
												<tr>
													<td style="line-height:16px;" height="16">
													</td>
												</tr>
											</table>
										</td>
										<td width="150" align="center">
											<table style="width:auto !important;" width="66%" cellspacing="0" cellpadding="0" border="0" align="center">
												<tr>
													<td align="center">
														 <a href="https://www.facebook.com/AyuntamientoDeSanMateoAtenco/" style="color:#666666;text-decoration:none; line-height:0;" data-color="Footer-Content"><img src="'.$urlmail.'/assets/images/front-end/24x24x7.png" alt="24x24x7" style="margin:0; border:0; padding:0; display:block;" width="24" height="24" /></a>
													</td>
													<td width="20">&nbsp;
														
													</td>
													<td align="center">
														 <a href="https://twitter.com/HSanMateoAtenco" style="color:#666666;text-decoration:none; line-height:0;" data-color="Footer-Content"><img src="'.$urlmail.'/assets/images/front-end/24x24x8.png" alt="24x24x8" style="margin:0; border:0; padding:0; display:block;" width="24" height="24" /></a>
													</td>
													<td width="20">&nbsp;
													  
													</td>
												</tr>
											</table>
										</td>
										<td valign="middle" align="right">
											<table width="100%" cellspacing="0" cellpadding="0" border="0" align="right">
												<tr>
													<td data-border-bottom-color="Footer-Border" style="border-bottom:1px solid #ffffff;" width="100" valign="middle" align="right">&nbsp;
														
													</td>
												</tr>
												<tr>
													<td style="line-height:16px;" height="16">
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height="15">
							</td>
						</tr>
						<tr>
							<td>
								<!-- TABLE LEFT -->

								<table class="display-width-child" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:auto;" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
									<tr>
										<td class="MsoNormal" style="color:#ffffff; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:12px; letter-spacing:1px; line-height:20px;" data-color="Copyright" data-size="Copyright" data-min="12" data-max="33" align="center">
											 '.$institucion.' 
									  </td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height="10">
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
<table data-module="View In Browser" data-bgcolor="Main BG" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#333333" align="center">
<tr>
	<td align="center">
		<table class="display-width" width="800" cellspacing="0" cellpadding="0" border="0" align="center">
			<tr>
				<td class="res-padding" align="center">
					<table class="display-width-inner" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
						<tr>
							<td height="10">
							</td>
						</tr>
						<tr>
							<td align="center">
								<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
									<tr>
										<td class="MsoNormal" style="color:#ffffff; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:13px; line-height:20px; letter-spacing:1px;" valign="middle" align="right">&nbsp;</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height="10">
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>');
//Para adjuntar archivo
$url = $urlmail.'/plataforma/'.$folder_docs.'/'.$Folio.'/'.$pdf_name;
$fichero = file_get_contents($url);
$mail->addStringAttachment($fichero, $pdf_name, $encoding, $type);
//Para adjuntar archivo

$mail->MsgHTML($msg);

if(!$mail->Send()) {
	
	echo 'BAD';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
	
 
} else {
	
	echo 'OK';
	
}







//============================================================+
// END OF FILE
//============================================================+
