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

if(isset($_SESSION["ComPago"])){
	
	$tipoPago = 'Banco';
	$ComPago = $_SESSION["ComPago"];
	
} else {
	
	$tipoPago = 'PayPal';
	$ComPago = 'ID';

}
	
	



//SACAMOS ETIQUETA DE GIRO COMERCIAL
$giro = "SELECT * FROM `solicitudes` WHERE `Folio`= '$Folio'";
$result = mysqli_query($conexion, $giro);
if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		$tipoTramite = $row['tipoTramite'];
		$GiroComercial = $row['GiroComercial'];
		$Nombre = $row['Nombre'];
		$ApellidoPat = $row['ApellidoPat'];
		$ApellidoMat = $row['ApellidoMat'];
		
		$Rfc = $row['Rfc'];
		$TelNego = $row['TelNego'];
		$Email = $row['Email'];
		$Calle = $row['Calle'];
		$NumInt = $row['NumInt'];
		$NumExt = $row['NumExt'];
		$CodPostal = $row['CodPostal'];
		$Colonia = $row['Colonia'];
		$EntreCalles = $row['EntreCalles'];
		$YCalle = $row['YCalle'];
		$domfis = $row['domfis'];
		$repleg = $row['repleg'];
		$RazSocE = $row['RazSocE'];
		$NomComE = $row['NomComE'];
		$CalleFis = $row['CalleFis'];
		$NumExtFis = $row['NumExtFis'];
		$NumIntFis = $row['NumIntFis'];
		$CodPostalFis = $row['CodPostalFis'];
		$ColoniaFis = $row['ColoniaFis'];
		$NombreFis = $row['NombreFis'];
		$ApellidoPatFis = $row['ApellidoPatFis'];
		$ApellidoMatFis = $row['ApellidoMatFis'];
		$SupMts = $row['SupMts'];
		$CajEsta = $row['CajEsta'];
		$CveCat = $row['CveCat'];
		$anuncio = $row['anuncio'];
		$tipoAnuncio = $row['tipoAnuncio'];
		$leyenda = $row['leyenda'];
		$dimAnuncio = $row['dimAnuncio'];
		
		$Titular = $Nombre.' '.$ApellidoPat.' '.$ApellidoMat;
		
		if ($repleg == 1){
			
			$apoderado = $Titular;
		} else {
			$apoderado =  $NombreFis.' '.$ApellidoPatFis.' '.$ApellidoMatFis;
			
		}
		
		
		if ($tipoTramite == 1){
			
				$movimientoReal = 'ALTA';
			
			}
		
		if($anuncio == 1){
			
			$anuncios = 'SI';
			$tipoAnuncio = $row['tipoAnuncio'];
			$leyenda = $row['leyenda'];
			$dimAnuncio = $row['dimAnuncio'];
		} else {
			$anuncios = 'NO';
			$tipoAnuncio = '';
			$leyenda = '';
			$dimAnuncio = '';
			
			}
		
		
		
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

function vigencia_date ()  
	{  

		$FechaNew = date ( 'Y-m-j' , $hastaVigencia );
		
		$week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");  
		$months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");  
		$year_now = date ("Y", strtotime($FechaNew));  
		$month_now = date ("n", strtotime($FechaNew));  
		$day_now = date ("j", strtotime($FechaNew));  
		$week_day_now = date ("w", strtotime($FechaNew));  
		$date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;   
		return $date;    
	} 



		$Sumahasta = date('Y-m-j');
		$FechaHasta  = strtotime ( '+365 day' , strtotime ( $Sumahasta )) ;
		$FechaHasta = date ( 'Y/m/j H:i:s' , $FechaHasta );
		
		$code = '';
		  for($x = 0; $x<1; $x++) {
			  $code .= '-'.substr(strtoupper(sha1(rand(0,999999999999999))),2,100);
		  }
		  $code = substr($code,1);
		
		$cadenaOriginal = '||2.0|'.$desde.'|'.$Folio.'|'.$hastaVigencia.'|'.$code.'||';
		$qrCode = $desde.'|'.$Folio.'|'.$hastaVigencia;

$sql3 = "INSERT INTO `licencias`( `usuarioid`, `igGiro`, `tipoLicencia`, `estatusLicencia`, `folio`, `tipoPago`, `comPago`, `vigenciaDesde`, `vigenciaHasta`, `cadena_seguridad`) VALUES ('$idUsuario', '$GiroComercial', '1', '1', '$Folio', '$tipoPago', '$ComPago', '$desde', '$hastaVigencia', '$cadenaOriginal');";

mysqli_query($conexion, $sql3);

//Cerramos Base de Datos
$conexion->close();


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {


	//Page header
	public function Header() {
		// get the current page break margin
		$bMargin = $this->getBreakMargin();
		// get current auto-page-break mode
		$auto_page_break = $this->AutoPageBreak;
		// disable auto-page-break
		$this->SetAutoPageBreak(false, 0);
		// set bacground image
		$img_file = 'svg/Licencia-de-Funcionamiento.png';
		$this->Image($img_file, 0, 0, 216, 280, '', '', '', false, 300, '', false, false, 0);
		
		
		// restore auto-page-break status
		$this->SetAutoPageBreak($auto_page_break, $bMargin);
		// set the starting point for the page content
		$this->setPageMark();
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


$params = $pdf->serializeTCPDFtagParameters(array($qrCode, 'QRCODE,H', '', '', 35, 35, array('border' => 0, 'vpadding' => 'auto', 'hpadding' => 'auto', 'fgcolor' => array(0,0,0), 'bgcolor' => false, 'module_width' => 1,  'module_height' => 1), 'N'));




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
                            <td width="250" align="center">&nbsp;</td>

                            <td width="450" style="text-align:center; border-top:1px solid #504f4f; border-bottom:1px solid #504f4f;"><table width="450" align="right" cellpadding="0" cellspacing="5">
                              <tr>
                                <td width="200" height="10" align="right">No. LICENCIA</td>
                                <td width="235" align="right" style="font-size:12px;"><strong>'.$Folio.'</strong></td>
                              </tr>
                              <tr>
                                <td width="200" height="10" align="right">FECHA DE EXPEDICIÓN</td>
                                <td width="235" align="right" style="font-size:10px;"><strong>'.actual_date ().'</strong></td>
                              </tr>
                              <tr>
                                <td width="200" height="10"  align="right">VIGENCIA</td>
                                <td width="235"  align="right" style="font-size:10px;"><strong>'.$hastaVigencia.'</strong></td>
                              </tr>
                              <tr>
                                <td width="200" height="10"  align="right">NOMBRE TITULAR</td>
                                <td width="235"  align="right" style="font-size:10px;"><strong>'.strtoupper($Titular).'</strong></td>
                              </tr>
                              <tr>
                                <td width="200" height="10"  align="right">RFC</td>
                                <td width="235"  align="right" style="font-size:10px;"><strong>'.strtoupper($Rfc).'</strong></td>
                              </tr>
                            </table></td>
                      </tr>
					  	
                        
                        <tr> 
                            <td colspan="2" align="center" style="text-align:center; font-size:8px;"><table width="700" border="0" cellspacing="3" cellpadding="5">
                              <tbody>
                                <tr>
                                  <td colspan="4" align="center" style="text-align:center; font-size:10px;">DATOS DEL ESTABLECIMIENTO</td>
                                </tr>
                                <tr>
                                  <td width="504" colspan="3" align="center" style="text-align:center; font-size:8px;">NOMBRE DEL APODERADO LEGAL (PERSONA LEGAL COLECTIVA)</td>
                                  <td width="170" align="center" style="text-align:center; font-size:8px;">INICIO DE OPERACIONES</td>
                                </tr>
                                <tr>
                                  <td width="504" colspan="3" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.strtoupper($apoderado).'</strong></td>
                                  <td width="170" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.actual_date ().'</strong></td>
                                </tr>
                                <tr>
                                  <td width="504" colspan="3" style="text-align:center; font-size:8px;">CLAVE Y NOMBRE DEL GIRO ECONÓMICO</td>
                                  <td width="170" style="text-align:center; font-size:8px;">SUPERFICIE AUTORIZADA M2</td>
                                </tr>
                                <tr>
                                  <td width="504" colspan="3" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$Scian.' | '.strtoupper($DescGiroCom).'</strong></td>
                                  <td width="170" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$SupMts.'</strong></td>
                                </tr>
                                <tr>
                               
                                
                                  <td width="336" colspan="2" style="text-align:center; font-size:8px;">CALLE</td>
                                  <td width="335" colspan="2" style="text-align:center; font-size:8px;">COLONIA</td>
                                </tr>
                                <tr>
                                  <td width="336" colspan="2" style="text-align: center; border-top: 1px solid #222222; border-bottom: 1px solid #222222; border-left: 1px solid #222222; border-right: 1px solid #222222; font-size: 10px;"><strong><strong>'.strtoupper($Calle).' '.$NumExt.' '.$NumInt.'</strong></strong></td>
                                  <td width="335" colspan="2" style="text-align: center; border-top: 1px solid #222222; border-bottom: 1px solid #222222; border-left: 1px solid #222222; border-right: 1px solid #222222; font-size: 10px;"><strong>'.strtoupper($Colonia).'</strong></td>
                                </tr>
                                <tr>
                                  <td colspan="2" style="text-align:center; font-size:8px;">ENTRE CALLE</td>
                                  <td colspan="2" style="text-align:center; font-size:8px;">Y CALLE</td>
                                </tr>
                                <tr>
                                  <td colspan="2" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.strtoupper($EntreCalles).'</strong></td>
                                  <td colspan="2" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.strtoupper($YCalle).'</strong></td>
                                </tr>
                                <tr>
                                  <td width="168" style="text-align:center; font-size:8px;">CÓDIGO POSTAL</td>
                                  <td width="168" style="text-align:center; font-size:8px;">TELÉFONO</td>
                                  <td width="336" colspan="2" style="text-align:center; font-size:8px;">CORREO ELECTRÓNICO</td>
                                </tr>
                                <tr>
                                  <td width="168" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$CodPostal.'</strong></td>
                                  <td width="168" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$TelNego.'</strong></td>
                                  <td colspan="2" width="336" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$Email.'</strong></td>
                                </tr>
                                <tr>
								<td style="text-align:center; font-size:8px;">CLAVE CATASTRAL</td>
                                  <td style="text-align:center; font-size:8px;">CAJONES ESTACIONAMIENTO</td>
                                  <td style="text-align:center; font-size:8px;">TIPO DE MOVIMIENTO</td>
                                  <td height="8" style="text-align:center; font-size:8px;">&nbsp;</td>
                                </tr>
                                <tr>
								<td width="168" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$CveCat.'</strong></td>
                                  <td style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$CajEsta.'</strong></td>
                                  <td style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$movimientoReal.'</strong></td>
                                  <td style="text-align:center; font-size:10px;">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="4" style="text-align:center;"><span style="text-align:center; font-size:10px;">ANUNCIO PUBLICITARIO</span></td>
                                </tr>
                                <tr>
                                  <td style="text-align:center; font-size:8px;">CANTIDAD</td>
                                  <td style="text-align:center; font-size:8px;">TIPO</td>
                                  <td style="text-align:center; font-size:8px;">LEYENDA</td>
                                  <td style="text-align:center; font-size:8px;">DIMENSIONES</td>
                                </tr>
                                <tr>
                                  <td style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$anuncios.'</strong></td>
                                  <td style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$tipoAnuncio.'</strong></td>
                                  <td style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$leyenda.'</strong></td>
                                  <td style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; border-left:1px solid #222222; border-right:1px solid #222222;  font-size:10px;"><strong>'.$dimAnuncio.'</strong></td>
                                </tr>
                                <tr>
                                  <td colspan="4" style="text-align:center;">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="4" style="text-align:center; font-size:10px"><p>AUTORIZÓ<br>
                                  <br>
                                  <br>
								  <br>
                                  <strong><span style="font-size:12px">LIC. IMELDA ARIZMENDI CASTAÑEDA</strong></span><br>
                                  <span style="font-size:8px">DIRECCIÓN DE DESARROLLO ECONÓMICO Y FOMENTO TURÍSTICO</span>
                                  </p></td>
                                </tr>

                                <tr>
                                  <td width="200" colspan="2" style="text-align:left; font-size:8px;"><tcpdf method="write2DBarcode" params="'.$params.'" /></td>
                                  <td width="480"  colspan="3" align="left" style="text-align:justify; font-size:8px;">1.- Cualquier contraversión al Bando Municipal vigente, implica la cancelación de la presente licencia<br>2.- Esta autoridad esta facultada para revocar la presente ya que fué otorgada por primera vez, asi como a que el establecimiento no tenga multas, recargos y faltas administrativas y en su caso no presente el aviso de salubridad correspondiente.<br>3.- Manifiesto bajo protesta de decir la verdad que los datos asentados en el presente son reales y fidedignos, sujetandomen a las sanciones previstas por la ley en caso de falsedad.<br><br><strong>CADENA ORIGINAL: '.$cadenaOriginal.'</strong></td>
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

$pdf->lastPage();

$pdf_name = 'Licencia-'.$Folio;

$pat = $_SERVER['DOCUMENT_ROOT'].'plataforma/'.$folder_docs;

// ---------------------------------------------------------

$pdf->Output($pat.'/'.$Folio.'/'.$pdf_name.'.pdf', 'F');



//Armamos el correo
//Recibir todos los parámetros del formulario
$to = $Email;
$subject = utf8_decode('Licencia de Funcionamiento para Negocios y Empresas');
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
							<td class="Heading" style="color:#333333; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-weight:600; font-size:18px; line-height:38px; letter-spacing:1px;" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">Licencia de Funcionamiento</td>
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
							  <p>Por medio del presente le informamos que su trámite de <strong>Licencia de Funcionamiento SARE</strong> se completo exitosamente.</p>
							  <p>Adjunto a este correo encontrá su Licencia Oficial, la cual le sugermios descargue e imprima para tenerla visible en su establecimiento.</p>
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
$url = $urlmail.'/plataforma/'.$folder_docs.'/'.$Folio.'/'.$pdf_name.'.pdf';
$fichero = file_get_contents($url);
$mail->addStringAttachment($fichero, $pdf_name.'.pdf', $encoding, $type);
//Para adjuntar archivo

$mail->MsgHTML($msg);

if(!$mail->Send()) {
	
	echo 'BAD';
	
 
} else {
	
	echo 'OK';
	
}







//============================================================+
// END OF FILE
//============================================================+
