<?php
//============================================================+
// File name   : formato_pago.php
// Begin       : 2017-06-08
// Last Update : 
//
// Description : Generación de Formato único de pago TCPDF
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
$Folio = $_SESSION['folio'];



//SACAMOS ETIQUETA DE GIRO COMERCIAL
$giro = "SELECT `curp`, `nombreu`, `apellidopu`, `apellidomu`  FROM `usuarios` WHERE `usuarioid` ='$idUsuario'";
$result = mysqli_query($conexion, $giro);
if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		$curp = $row['curp'];
		$nombre = $row['nombreu'];
		$aparteno = $row['apellidopu'];
		$amaterno = $row['apellidomu'];

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
	





function vigencia_date ()  
	{  
		$sumaDate = date('Y-m-j');
		$FechaNew  = strtotime ( '+15 day' , strtotime ( $sumaDate )) ;
		$FechaNew = date ( 'Y-m-j' , $FechaNew );
		
		$week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");  
		$months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");  
		$year_now = date ("Y", strtotime($FechaNew));  
		$month_now = date ("n", strtotime($FechaNew));  
		$day_now = date ("j", strtotime($FechaNew));  
		$week_day_now = date ("w", strtotime($FechaNew));  
		$date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;   
		return $date;    
	} 


//Cerramos Base de Datos
$conexion->close();


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {


	//Page header
	public function Header() {
		// Logos
		
		//$this->ImageSVG($file='svg/LogoMunicipio.svg', $x=0, $y=5, $w='50', $h='35', $link='', $align='', $palign='', $border=0, $fitonpage=false);
		$this->Image($file='svg/LogoEdo02.png', 10, 10, 60, 22, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
		
		$this->ImageSVG($file='svg/LogoSanMateoVertical.svg', $x=159, $y=8, $w='40', $h='30', $link='', $align='', $palign='', $border=0, $fitonpage=false);
	    
		//$this->ImageSVG($file='svg/LogotipoSare.svg', $x=80, $y=4, $w='50', $h='35', $link='', $align='', $palign='', $border=0, $fitonpage=false);
		// Set font
		$this->SetFont('helvetica', 'N', 13);
		
		$this->SetFillColor(255, 255, 255);
		$this->SetLineStyle(array('width' => 0, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));

		

	}
	
	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'N', 8);
		// Page number
		$this->Cell(0, 10, 'H. Ayuntamiento Constitucional de San Mateo Atenco 2016 - 2018', 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('San Mateo Atenco');
$pdf->SetTitle('Formato único de pago');
$pdf->SetSubject('Formato único de pago');
$pdf->SetKeywords('Formato único de pago');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

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



$params = $pdf->serializeTCPDFtagParameters(array($linea_captura, 'C128', '', '', 80, 20, 0.4, array('position'=>'L', 'border'=>true, 'padding'=>1, 'fgcolor'=>array(0,0,0), 'bgcolor'=>array(255,255,255), 'text'=>true, 'font'=>'helvetica', 'fontsize'=>8, 'stretchtext'=>0), 'N'));




//$pdf->Cell(50, 20, 'SECRETARÍA DE  FINANZAS', 0, 'C', 1, '', 0, 0, true, 0);


$html = '<table width="700" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr> 
                <td width="700" align="center" valign="middle">
                    <table width="700" border="0" cellpadding="0" cellspacing="0">
                       <tr>
                            <td width="350" align="left">
							LÍNEA DE CAPTURA PARA PAGO EN VENTANILLA<br><br>
							<tcpdf method="write1DBarcode" params="'.$params.'" />
                                   
                             POR FAVOR CAPTURE SIN ESPACIOS
                                
                            </td>

                            <td width="350" style="text-align:center; border-bottom:1px solid #222222;">
                                <table width="300" align="right" cellpadding="0" cellspacing="0">
									<tr>
                                        <td colspan="2" width="350" height="20" align="center" style="border-bottom:1px solid #222222;"><strong>SECRETAR&Iacute;A DE  FINANZAS</strong><br><strong>FORMATO UNIVERSAL DE PAGO</strong></td>
                                    </tr>
									<tr>
                                        <td colspan="2" width="350" height="5" align="right"></td>
                                    </tr>
                                    <tr>
                                        <td width="150" height="15" align="right">Fecha de emisi&oacute;n:</td><td width="150" align="right">'.actual_date ().'</td>
                                    </tr>
                                     <tr>
                                         <td width="150" height="15"  align="right"> Fecha limite de pago:</td><td width="150"  align="right">'.vigencia_date ().'</td>
                                    </tr>
									<tr>
                                         <td width="150" height="15"  align="right"> Tota a Pagar:</td><td width="150"  align="right"><strong> $'.$importe_cedula.'.00</strong></td>
                                    </tr>
                              </table>

                          </td>
                      </tr>
					  	<tr>
                          <td height="5" colspan="2" align="center"></td>
                        </tr>
                        <tr>
                          <td height="10" colspan="2" align="center"><strong>DATOS DEL CONTRIBUYENTE</strong></td>
                        </tr>
                        <tr>
                          <td colspan="2"  height="5" align="center" style="text-align:center; border-top:1px solid #222222;">&nbsp;</td>
                        </tr>
                        <tr> 
                            <td colspan="2" align="center"><table width="700" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td width="390" height="15" align="right">NOMBRE</td>
                                  <td width="10" height="15">&nbsp;</td>
                                  <td width="300" height="15" align="center" style="text-align:center; border-bottom:1px solid #222222; font-size:10px; font-weight:700;">'.$nombre.' '.$aparteno.' '.$amaterno.'</td>
                                </tr>
                                <tr>
                                  <td width="390" height="15" align="right">CURP</td>
                                  <td height="15">&nbsp;</td>
                                  <td width="300" height="15" align="center" style="text-align:center; border-bottom:1px solid #222222; font-size:10px; font-weight:700;">'.$curp.'</td>
                                </tr>
                                <tr>
                                  <td width="390" height="15" align="right">SOLICITUD</td>
                                  <td width="10" height="15">&nbsp;</td>
                                  <td width="300" height="15" align="center" style="text-align:center; border-bottom:1px solid #222222; font-size:10px; font-weight:700;">'.$Folio.'</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td width="300" height="20">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table></td>
                        </tr>


                      <tr> 
                            <td height="20" colspan="2" align="center"><strong>DATOS DE LA CONTRIBUCI&Oacute;N</strong></td>
                        </tr>


                        <tr> 
                            <td height="10" colspan="2"></td>
                        </tr>

                         

                        <tr valign="top"> 

                            <td colspan="2">
                                <table width="700" border="0" cellpadding="0" cellspacing="0">
                                    <tr> 
                                        <td width="80" height="20" valign="middle" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; font-size:10px; font-weight:700;">CLAVE</td>
                                        <td width="320" valign="middle" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; font-size:10px; font-weight:700;">CONCEPTO</td>
                                        <td width="100" valign="middle" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; font-size:10px; font-weight:700;">CANTIDAD</td>
                                        <td width="100" valign="middle" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; font-size:10px; font-weight:700;">TARIFA O TASA </td>
                                        <td width="100" valign="middle" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; font-size:10px; font-weight:700;">SUBTOTAL</td>
                                    </tr>
                                    <tr>
                                      <td height="10" colspan="5" align="center" valign="top" class="text">&nbsp;</td>
                                    </tr>
                                    <tr bgcolor="#F2F2F2"> 
                                        <td height="20" valign="top" align="center" class="text"> 208024</td>
                                        <td valign="top" align="left" class="text">Expedici&oacute;n de C&eacute;dula  Informativa de Zonificaci&oacute;n </td>
                                        <td valign="top" align="center" class="text">1</td>
                                        <td valign="top" align="right" class="text">'.$importe_cedula.'</td>
                                        <td valign="top" align="right" class="text">$'.$importe_cedula.'</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr> 
                            <td colspan="2" height="10"></td>
                        </tr>
                        <tr valign="top"> 
                            <td height="106" colspan="2">
                                <table width="700" border="0" cellpadding="0" cellspacing="0">
                                    
                                    <tr> 
                                        <td height="10" colspan="2" style="text-align:center; border-bottom:1px solid #222222;"></td>
                        			</tr>
                                    
                                    <tr>
                                        <td width="350">

                                        </td>
                                        
                                        <td width="350" align="right" style="text-align:right; border-top:1px solid #222222; border-bottom:1px solid #222222; font-size:12px; font-weight:700;"><br><br>
                                          <strong>TOTAL A PAGAR:   $'.$importe_cedula.'</strong><br/>
                                                PAGAR EN UNA SOLA EXHIBICI&Oacute;N
                                            <br/>  
                                        </td>
                                    </tr>

                                    <tr> 
                                        <td height="10" colspan="4" style="text-align:center; border-top:1px solid #222222; border-bottom:1px solid #222222; font-size:10px; font-weight:700;"></td>
                                    </tr>


                                    <tr > 
                                        <td height="50" colspan="4" style="text-align:center; border-left:1px solid #222222; border-bottom:1px solid #222222; border-top:1px solid #222222; border-right:1px solid #222222; font-size:10px; font-weight:700;"><br><br>ESTE DOCUMENTO NO ES COMPROBANTE DE PAGO, S&Oacute;LO ES V&Aacute;LIDO CON LA CERTIFICACI&Oacute;N O COMPROBANTE DE PAGO EMITIDO <br>POR LA INSTITUCI&Oacute;N DE CR&Eacute;DITO O ESTABLECIMIENTOS MERCANTILES AUTORIZADOS.</td>
                                    </tr>

                                  <tr>
                                      <td height="10" colspan="4">&nbsp;</td>
                                  </tr>
                                  <tr> 
                                        <td height="20" colspan="4" style="border-bottom:1px solid #222222; font-size:10px; font-weight:700;">
                                               PAGO EN VENTANILLA DE LAS SIGUIENTES INSTITUCIONES AUTORIZADAS
                                    </td>
                                    </tr>
                                    <tr valign="top">
                                      <td height="10" colspan="4" align="center">&nbsp;</td>
                                  </tr>
                                    <tr valign="top"> 
                                        <td height="100" colspan="4" align="center"><table width="700" border="0" align="center" cellpadding="0" cellspacing="2">
                                          <tr>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">AFIRME TRN0827</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">BANCO AZTECA</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">BANCO DEL BAJ&Iacute;O 453</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">BANORTE-IXE 31681</td>
                                          </tr>
                                          <tr>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">BANSEFI</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">BBVA BANCOMER CIE1336177</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">CHEDRAUI</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">CI BANCO</td>
                                          </tr>
                                          <tr>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">CITIBANAMEX PA:1840-04</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">COMERCIAL CITY FRESKO </td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">COMERCIAL MEXICANA </td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">FARM. GUADALAJARA/ INTERCAM BANCO/ SUPER KOMPRAS</td>
                                          </tr>
                                          <tr>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">FARMACIAS DEL AHORRO/ EXTRA/ CIRCULO K/ 7-ELEVEN</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">HSBC 7960</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">INBURSA</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">SANTANDER 1157</td>
                                          </tr>
                                          <tr>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">SCOTIABANK 1093</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">SORIANA</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">SUMESA</td>
                                            <td width="25%" align="left" style="font-size:8px; font-weight:700;">TELECOMM - TEL&Eacute;GRAFOS </td>
                                          </tr>
                                        </table>                                          <!-- aqui va el codigo--></td>
                                    </tr>
                                </table></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
              <td height="10" colspan="1">&nbsp;</td>
            </tr>
            <tr> 
                <td colspan="1" style="text-align:justify; font-size:10px; font-weight:700;">Por favor verifique que la l&iacute;nea de captura y el importe que aparece en el comprobante de pago que emite el Centro Autorizado de Pago (Banco o Establecimiento Mercantil) coincidan con la informaci&oacute;n impresa en este Formato Universal de Pago.</td>
            </tr>
             <tr>
               <td height="10" colspan="1">&nbsp;</td>
  			 </tr>
             <tr> 
                <td colspan="1" style="padding:10px; text-align: justify; font-size: 10px; font-weight: 700;"><strong>CON FUNDAMENTO EN LOS ART&Iacute;CULOS 107 y 176 DEL C&Oacute;DIGO FINANCIERO DEL ESTADO DE M&Eacute;XICO Y MUNICIPIOS MANIFIESTO BAJO PROTESTA DE DECIR VERDAD QUE SON CIERTOS LOS DATOS QUE SE MUESTRAN EN LA PRESENTE DECLARACI&Oacute;N</strong> </td>
            </tr>
			<tr>
                <td height="15px">&nbsp;</td>
            </tr>
           
            
        </table>';




// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

$pdf->lastPage();

$pdf_name = $Folio.'-BANCO';

$pdf->Output($pdf_name.'.pdf', 'I');






//============================================================+
// END OF FILE
//============================================================+
