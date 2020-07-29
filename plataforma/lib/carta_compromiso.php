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
		

		$domicilio = strtoupper($Calle).' '.$NumExt.' '.$NumInt.', '.strtoupper($Colonia);
		
		
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
	



//Cerramos Base de Datos
$conexion->close();




// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {


	//Page header
	public function Header() {
		// get the current page break margin
		$this->ImageSVG($file='svg/LogoMunicipio.svg', $x=0, $y=5, $w='50', $h='35', $link='', $align='', $palign='', $border=0, $fitonpage=false);
		
		$this->ImageSVG($file='svg/LogoSanMateoVertical.svg', $x=159, $y=5, $w='47', $h='34', $link='', $align='', $palign='', $border=0, $fitonpage=false);
	    
		$this->ImageSVG($file='svg/LogotipoSare.svg', $x=80, $y=4, $w='50', $h='35', $link='', $align='', $palign='', $border=0, $fitonpage=false);
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
$pdf->SetTitle('Carta Compromiso Protección Civil');
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
                                 <td  colspan="4" align="center" style="text-align:center; font-size:12px;"><strong>CARTA COMPROMISO DE PROTECCIÓN CIVIL SARE</strong></td>
                               </tr>
                               <tr>
                                 <td width="340" colspan="2" align="left" style="text-align:left; font-size:10px;">&nbsp;</td>
                                 <td width="140" align="right" style="text-align:right; font-size:10px;"><span style="text-align:right; font-size:10px;">FECHA</span></td>
                                 <td width="200" align="right" style="text-align:right; font-size:10px;"><strong>'.actual_date().'</strong></td>
                               </tr>
							   <tr>
                                 <td colspan="4" align="center" style="text-align:center; font-size:12px;">&nbsp;</td>
                               </tr>
                               <tr>
                                 <td width="340" colspan="2" align="left" style="text-align:left; font-size:11px;">MOVITVO DE LA  CARTA</td>
                                 <td width="340" colspan="2" align="right" style="text-align:right; font-size:8px;">QUE EL INMUEBLE CUENTE CON LAS MEDIDAS NECESARIAS DE  SEGURIDAD DEN CASO DE ALGUNA EMERGENCIA O CONTINGENCIA</td>
                               </tr>
                               <tr>
                                 <td colspan="4" align="justify" style="text-align:justify; font-size:10px; padding:5px;"><p>&nbsp;</p>
								 <p>El que suscribe C.: <u><strong>'.strtoupper($Titular).'</strong></u>, con domicilio para oír y recibir notificaciones en: <u><strong>'.$domicilio.'</strong></u>; por este conducto, me  comprometo según lo dispuesto en el Libro Sexto, artículo 6.32 del Código  Administrativo del Estado de México, en el Listado de Generadores de Mediano y  Bajo Riesgo emitidos en el Reglamento del Libro Sexto del Código Administrativo  del Estado de México y artículo 201 del Bando Municipal de la Policía y  Gobierno 2014 de San Mateo Atenco; a implementar e instalar los equipos y  sistemas de seguridad que resulten necesarios a fin de garantizar la protección  de la vida, salud y patrimonio de mis clientes y empleados.</p>
                                   <p>En virtud de ello, en quince días hábiles a partir de la fecha, mi establecimiento con giro SARE denominado:</p>
								   <p style="text-align:center;"> <u><strong>'.strtoupper($DescGiroCom).'</strong></u> <br>
								     <br>
								     CON DOMICILIO EN:<br><br><u><strong>'.$domicilio.'</strong></u></p>
                                   <p>DEBERÁ CONTAR CON:<br><br>REQUERIMIENTOS
                                   <ul>
                                     <li>Botiquín de Primeros Auxilios completo e  instalado con señalamiento.</li>
                                     <li>Ruta de Evacuación con señalamiento.</li>
                                     <li>Salida de Emergencia con señalamiento.</li>
                                     <li>Extintor(es) mínimo de 4.5kg de capacidad  visible y con señalamiento.</li>
                                     <li>Instalación Hidráulica en buenas condiciones.</li>
                                     <li>Instalación Eléctrica en buenas condiciones.</li>
                                     <li>El Tanque estacionario con instalaciones de gas  L.P. no puede tener más de 10 años de y los cilindros deben de contar con llave  de paso y con regulador de presión.</li>
                                     <li>Instalación sanitaria en buenas condiciones y  con señalamientos.</li>
                                     <li>Directorio de emergencia a la mano y en lugar  visible.</li>
                                   </ul>
								   </p>
                                   <p><strong>Los señalamientos deben ser de acuerdo a la Norma Oficial Mexicana  NOM-003-SEGOB-2011.</strong></p>
                                   <p style="font-size:8px; font-weight:bold">NOTAS:
								   <ul>
                                     <li>En caso de incumplimiento será susceptible de aplicación de  las sanciones estipuladas en el artículo 6.36 del Código Administrativo del  Estado de México.</li>
                                     <li>La empresa y/o el propietario se compromete a reemplazar el  material de curación y recargar extintor(es) en el menor tiempo posible, en  caso de ser utilizado o cumplan con su vigencia.</li>
								    </ul>
									 </p>
                                   <p>Comprometiéndose y asumiendo la responsabilidad de dar  seguimiento oportuno a las medidas de seguridad que me indica la Dirección de  Protección Civil.                                   </p>
                                 </td>
                               </tr>
                               <tr>
                                 <td colspan="4" style="text-align:center; font-size:10px;"><p>ATENTAMENTE</p>
                                   <br>
                                 <p>C. <u><strong>'.strtoupper($Titular).'</strong></u></p></td>
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



$pdf_name = $Folio.'-CCPC.pdf';

$pat = $_SERVER['DOCUMENT_ROOT'].'plataforma/'.$folder_docs;

// ---------------------------------------------------------

$pdf->Output($pat.'/'.$Folio.'/'.$pdf_name, 'F');



//Armamos el correo
//Recibir todos los parámetros del formulario
$to = $emailCli;
$subject = utf8_decode('Carta Compromiso Protección Civil');
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
							<td class="Heading" style="color:#333333; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-weight:600; font-size:18px; line-height:38px; letter-spacing:1px;" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">Carta Compromiso Protección Civil</td>
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
											<img src="'.$urlmail.'/assets/images/front-end/71x13.png" alt="71x13" style="margin:0; border:0; padding:0; width:100%; height:auto;" width="71" />
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
							  <p>Por medio del presente le enviamos su <strong>Carta Compromiso de Protección Civil</strong> donde menciona los requisitos que debe de tener su establecimiento. Le sugerimos que la lea y tenga todo listo en menos de 15 días habiles.</p>
							  <p>Adjunto a este correo encontrá un archivo PDF con su Carta.</p>
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
