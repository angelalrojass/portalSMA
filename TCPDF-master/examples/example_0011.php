<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 001');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

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
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
<table width="700" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;">
      <tr>
        <td height="60" align="center" valign="middle"  style="font-size:12px; text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5;"><br /><br /><strong>DIRECCIÓN DE DESARROLLO ECONÓMICO</strong><br />
          FORMATO ÚNICO DE SOLICITUD PARA APERTURA DE  NEGOCIOS Y EMPRESAS</td>
        </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size: 8px;">
          <tr>
      </tr>
      <tr>
        <td height="20" align="left" style="text-align:justify;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;">&nbsp;</td>
        </tr>
      
      <tr>
        <td height="35" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300; background-color:#e6e6e6;"><br /><br>
        <strong>DATOS DEL SOLICITANTE</strong></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
    
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">PRIMER APELLIDO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $primer_apellido_sol ?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">SEGUNDO APELLIDO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">NOMBRE(S): </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align: justify; ; font-size: 8px; color: #565656;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom"  style="color: #565656; font-size: 8px;">RAZÓN SOCIAL: </td>
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="120" height="10" valign="bottom"  style="color: #565656; font-size: 8px;">TELÉFONO: </td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="9" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="9" height="10" valign="bottom">&nbsp;</td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom"  style="color: #565656; font-size: 8px;">CORREO ELECTRÓNICO:</td>
            <td width="130" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
          </tr>
          <tr>
            <td width="120" height="10">&nbsp;</td>
            <td width="86" height="10" align="center"  style="color: #565656; font-size: 8px;">CELULAR</td>
            <td width="9" height="10" align="center">&nbsp;</td>
            <td width="100" height="10" align="center"  style="color: #565656; font-size: 8px;">PARTICULAR </td>
            <td width="9" height="10" align="center">&nbsp;</td>
            <td width="90" height="10" align="center"  style="color: #565656; font-size: 8px;">*TRABAJO </td>
            <td width="10" height="10" align="center">&nbsp;</td>
            <td width="96" height="10" align="center">&nbsp;</td>
            <td width="161" height="10" align="center">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="120" rowspan="2"  style="color: #565656; font-size: 8px;">DOMICILIO PARTICULAR:<br /> 
              O DE NOTIFICACIÓN      </td>
            <td width="165" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="60" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="5" height="10">&nbsp;</td>
            <td width="60" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="5" height="10" >&nbsp;</td>
            <td width="215" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="5">&nbsp;</td>
            <td width="60" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
          </tr>
          <tr>
            <td width="160" height="10" align="center"  style="color: #565656; font-size: 8px;">CALLE</td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="60" height="10" align="center"  style="color: #565656; font-size: 8px;">NO. ETX</td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="60" height="10" align="center"  style="color: #565656; font-size: 8px;">NO.INT</td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="220" height="10" align="center"  style="color: #565656; font-size: 8px;">LOCALIDAD O COLONIA</td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="60" height="10" align="center"  style="color: #565656; font-size: 8px;">C.P.</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="10" colspan="2"  style="color: #565656; font-size: 8px;">*REPRESENTANTE LEGAL</td>
            <td height="10">&nbsp;</td>
            <td height="10">&nbsp;</td>
            <td height="10" align="center" valign="middle" >&nbsp;</td>
            <td height="10"></td>
            <td>&nbsp;</td>
            <td align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">PRIMER APELLIDO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom"style="color: #565656; font-size: 8px;">SEGUNDO APELLIDO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">NOMBRE(S): </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td width="700" height="35" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300; background-color:#e6e6e6;"><br /><br><strong>DATOS DEL ESTABLECIMIENTO Y GIRO</strong></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" style="color: #565656; font-size: 8px;">GIRO SOLICITADO:</td>
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;"> NOMBRE COMERCIAL:<strong></strong></td>
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">DOMICILIO: </td>
            <td width="165" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><</td>
            <td width="5" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="60" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="5" height="10" valign="bottom">&nbsp;</td>
            <td width="60" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="5" height="10" valign="bottom" >&nbsp;</td>
            <td width="215" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="5" height="10" valign="bottom">&nbsp;</td>
            <td width="60" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
          </tr>
          <tr>
            <td width="120" height="10">&nbsp;</td>
            <td width="165" height="10" align="center" style="color: #565656; font-size: 8px;">CALLE</td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="60" height="10" align="center" style="color: #565656; font-size: 8px;">NO. ETX</td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="60" height="10" align="center" style="color: #565656; font-size: 8px;">NO.INT</td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="220" height="10" align="center" style="color: #565656; font-size: 8px;">LOCALIDAD O COLONIA</td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="60" height="10" align="center" style="color: #565656; font-size: 8px;">C.P.</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">ENTRE LA CALLE: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="70" height="10" valign="bottom" style="color: #565656; font-size: 8px;">Y LA CALLE: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="35" align="center" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300;  background-color:#e6e6e6;"><br><br>
          <strong>DATOS DEL INMUEBLE</strong></td>
        </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align: justify; ; font-size: 10px;"><table width="700" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="120" height="10" valign="top" style="color: #565656; font-size: 8px;">SUPREFICIE OCUPADA POR EL ESTABLECIMIENTO *</td>
                <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
                <td width="10" height="10" valign="bottom">&nbsp;</td>
                <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO DE NIVELES</td>
                <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
                <td width="10" height="10" valign="bottom">&nbsp;</td>
                <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO DE CAJONES DE ESTACIONAMIENTO</td>
                <td width="105" height="10" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
              </tr>
          </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="top" style="color: #565656; font-size: 8px;">CLAVE CATASTRAL (OPCIONAL)</td>
            <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">INVERISÓN ESTIMADA</td>
            <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO DE EMPLEADOS</td>
            <td width="105" height="10" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
  </tr>
     
      <tr>
        <td width="700" height="50" align="left" valign="middle" style="font-size:10px; text-align:left; border-left:1px solid #a5a5a5; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-right:1px solid #a5a5a5;"><br><br><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Esta solicitud no es licencia de funcionamiento y el  trámite no autoriza la apertura del establecimiento. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Este formato es el único  válido para trámites referentes a la licencia de funcionamiento.</strong></td>
      </tr>
      </table>

EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
