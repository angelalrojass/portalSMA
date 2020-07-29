<?php
//============================================================+
// File name   : fua_pdf.php
// Begin       : 2017-05-21
// Last Update : 
//
// Description : Generación de Formato único de apertura TCPDF
//               Usando la libreria  TCPDF class
//
// Author: Fernando Quintero
//
//
//============================================================+

require_once("../../lib/functions.php");
require '../../lib/PHPMailerAutoload.php';
require_once('pdf/tcpdf_config_alt.php');
require_once('pdf/tcpdf.php');



/* Previene acceso directo a esta página*/ 



if($usolic == 1){
		$usolicCom = 'X';
		$usolicSer = '';
	} else {
		$usolicSer = 'X';
		$usolicCom = '';
	}

$pfm = sanitize($_POST['pfm']);

if($pfm == 1){
		$pfisica = 'X';
		$pmoral = '';
	} else {
		$pmoral = 'X';
		$pfisica = '';
	}

$folio = sanitize($_POST['folio']);
$Nombre = sanitize($_POST['Nombre']);
$ApellidoPat = sanitize($_POST['ApellidoPat']);
$ApellidoMat = sanitize($_POST['ApellidoMat']);
$rfc = sanitize($_POST['rfc']);
$TelParticular = sanitize($_POST['TelParticular']);
$TelMovil = sanitize($_POST['TelMovil']);
$TelNego = sanitize($_POST['TelNego']);
$EmailF = sanitize($_POST['email']);
$Calle = sanitize($_POST['Calle']);
$NumInt = sanitize($_POST['NumInt']);
$NumExt = sanitize($_POST['NumExt']);
$CodPostal = sanitize($_POST['CodPostal']);
$Colonia = sanitize($_POST['Colonia']);
$EntreCalles = sanitize($_POST['EntreCalles']);
$YCalle = sanitize($_POST['YCalle']);
$RazSocE = sanitize($_POST['RazSocE']);
$NomComE = sanitize($_POST['NomComE']);

if (empty (sanitize($_POST['repleg']))){
		$repleg = 1;
	} else {
		
	$repleg = sanitize($_POST['repleg']);	
	}
$domfis = sanitize($_POST['domfis']);

if ($domfis == 1)
{
	$CalleFis = $Calle;
	$NumExtFis = $NumExt;
	$NumIntFis = $NumInt;
	$CodPostalFis = $CodPostal;
	$ColoniaFis = $Colonia;
	
} else {
	
	$CalleFis = sanitize($_POST['CalleFis']);
	$NumExtFis = sanitize($_POST['NumExtFis']);
	$NumIntFis = sanitize($_POST['NumIntFis']);
	$CodPostalFis = sanitize($_POST['CodPostalFis']);
	$ColoniaFis = sanitize($_POST['ColoniaFis']);
	
}

if ($repleg == 1)
{
	$NombreFis = $Nombre;
	$ApellidoPatFis = $ApellidoPat;
	$ApellidoMatFis = $ApellidoMat;
	
} else {
	
	$NombreFis = sanitize($_POST['NombreFis']);
	$ApellidoPatFis = sanitize($_POST['ApellidoPatFis']);
	$ApellidoMatFis =sanitize($_POST['ApellidoMatFis']);
	
}






$SupMts = sanitize($_POST['SupMts']);
$NumLevels = sanitize($_POST['NumLevels']);
$CajEsta = sanitize($_POST['CajEsta']);
$CveCat = sanitize($_POST['CveCat']);

$proren = sanitize($_POST['proren']);
if($proren  == "1"){
	$proren  = 'PROPIO';
	} else {
	$proren  = 'RENTADO';
	}
	


$InvEst = sanitize($_POST['InvEst']);
$NumEmp = sanitize($_POST['NumEmp']);
$EmpDis = sanitize($_POST['EmpDis']);

if($EmpDis == "1"){
	$EmpDisPDF = 'SI';
	} else {
	$EmpDisPDF = 'NO';
	}
	
$EmpDisNo = sanitize($_POST['EmpDisNum']);


$DocIne = sanitize($_SESSION["DocIne"]);
$DocCompDom = sanitize($_SESSION["DocCompDom"]);
$DocFoto1F = sanitize($_SESSION["DocFoto1F"]);
$DocFoto2F = sanitize($_SESSION["DocFoto2F"]);
$DocFoto1Int = sanitize($_SESSION["DocFoto1Int"]);
$DocFoto2Int = sanitize($_SESSION["DocFoto2Int"]);
$DocActaCons = sanitize($_SESSION["DocActaCons"]);



$idUsuario = $_SESSION['uid'];
$GiroComercial =  $_SESSION['idGiro'];
$Folio = $_SESSION['folio'];
$Declaraciones = '1,1,1,1,1,1';


//SACAMOS ETIQUETA DE GIRO COMERCIAL
$giro = "SELECT `categoria` FROM `giros_comerciales` WHERE `idGiro`='$GiroComercial'";
$result = mysqli_query($conexion, $giro);
if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		$DescGiroCom = $row['categoria'];

	}
	
} 


$fecha_solicitud = date('Y-m-d'); 
$d_1_d = $fecha_solicitud[8];
$d_2_d = $fecha_solicitud[9];
$m_1_d = $fecha_solicitud[5];
$m_2_d = $fecha_solicitud[6];
$a_1_d = $fecha_solicitud[0];
$a_2_d = $fecha_solicitud[1];
$a_3_d = $fecha_solicitud[2];
$a_4_d = $fecha_solicitud[3];





///Obtenemos la IP del usuario
 function obtener_la_ip()
    {
 
        if (isset($_SERVER["HTTP_CLIENT_IP"]))
        {
            return $_SERVER["HTTP_CLIENT_IP"];
        }
        elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
        {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
        {
            return $_SERVER["HTTP_X_FORWARDED"];
        }
        elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
        {
            return $_SERVER["HTTP_FORWARDED_FOR"];
        }
        elseif (isset($_SERVER["HTTP_FORWARDED"]))
        {
            return $_SERVER["HTTP_FORWARDED"];
        }
        else
        {
            return $_SERVER["REMOTE_ADDR"];
        }
 
    }
    

$ipdir = obtener_la_ip();



$CalleGoogle= str_replace(' ','+',$Calle); 
$ColoniaGoogle = str_replace(' ','+',$Colonia);


	
//Generamos Croquis de Ubicacion
$src = 'https://maps.googleapis.com/maps/api/staticmap?center='.$CalleGoogle.'+'.$NumExt.','.$ColoniaGoogle.',Estado+de+México&zoom=18&size=600x400';
$time = time();
$desFolder = '../du2017/'.$Folio.'/';
$imageName = 'croquis_'.$time.'.png';
$imagePath = $desFolder.$imageName;
file_put_contents($imagePath,file_get_contents($src));




//Insertamos datos del usuario
$guarda = "INSERT INTO `solicitudes`(`usuarioid`, `GiroComercial`, `Pfm`, `TipoUsoLic`, `Folio`, `Nombre`, `ApellidoPat`, `ApellidoMat`, `Rfc`, `TelParticular`, `TelMovil`, `TelNego`, `Email`, `Calle`, `NumInt`, `NumExt`, `CodPostal`, `Colonia`, `EntreCalles`, `YCalle`, `RazSocE`, `NomComE`, `CalleFis`, `NumExtFis`, `NumIntFis`, `CodPostalFis`, `ColoniaFis`, `NombreFis`, `ApellidoPatFis`, `ApellidoMatFis`, `SupMts`, `NumLevels`, `CajEsta`, `CveCat`, `ProRen`, `InvEst`, `NumEmp`, `EmpDis`, `EmpDisNo`, `DocIne`, `DocCompDom`, `DocFoto1F`, `DocFoto2F`, `DocFoto1Int`, `DocFoto2Int`, `DocActaCons`, `croquis_loc`, `Declaraciones`, `IpUser`) VALUES ('$idUsuario', '$GiroComercial', '$pfm', '$usolic', '$Folio','$Nombre', '$ApellidoPat', '$ApellidoMat', '$rfc', '$TelParticular', '$TelMovil', '$TelNego', '$EmailF', '$Calle', '$NumInt', '$NumExt', '$CodPostal', '$Colonia', '$EntreCalles', '$YCalle', '$RazSocE', '$NomComE', '$CalleFis', '$NumExtFis', '$NumIntFis', '$CodPostalFis', '$ColoniaFis', '$NombreFis', '$ApellidoPatFis', '$ApellidoMatFis', '$SupMts', '$NumLevels', '$CajEsta', '$CveCat', '$proren', '$InvEst', '$NumEmp', '$EmpDis', '$EmpDisNo', '$DocIne', '$DocCompDom', '$DocFoto1F', '$DocFoto2F', '$DocFoto1Int', '$DocFoto2Int', '$DocActaCons', '$imageName', '$Declaraciones', '$ipdir')";


$resultado = $conexion -> query($guarda);

if (!$resultado)
  {
  echo("Error description: " . mysqli_error($conexion));
  } else {
	  
	   //Insertamos Folio para que nos de el siguiente
		$sql2 = "INSERT INTO `folios_disponibles`(`id`, `folio_asignado`) VALUES (NULL, '$Folio');";
		mysqli_query($conexion, $sql2);  
		
		$sql3 = "INSERT INTO `licencias`( `usuarioid`, `igGiro`, `tipoLicencia`, `estatusLicencia`, `folio`) VALUES ('$idUsuario', '$GiroComercial', '1', '1', '$Folio');";
		mysqli_query($conexion, $sql3);  
}


  


//Cerramos Base de Datos
$conexion->close();







// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logos
		
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
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'N', 8);
		// Page number
		$this->Cell(0, 10, 'Página '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('San Mateo Atenco');
$pdf->SetTitle('Formato único de solicitud para aperturar de negocios y empresas');
$pdf->SetSubject('FUA');
$pdf->SetKeywords('FUA');

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



$html = '<table width="700" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;">
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
            <td width="160" height="10" valign="bottom" style="color:#565656;">FECHA DE INGRESO DEL TRAMITE:</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; ">'.$d_1_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5;border-right:1px solid #a5a5a5;">'.$d_2_d.'</td>
            <td width="5" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; ">'.$m_1_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5;">'.$m_2_d.'</td>
            <td width="5" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; ">'.$a_1_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5;">'.$a_2_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5;">'.$a_3_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-right:1px solid #a5a5a5;">'.$a_4_d.'</td>
            <td width="120" height="10" valign="bottom">&nbsp;</td>
            <td width="40" height="10" valign="bottom" style="color:#565656;">FOLIO:</td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5;"><span style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$folio.'</span></td>
          </tr>
          <tr>
            <td width="160" height="10" valign="bottom">&nbsp;</td>
            <td width="15" height="8" align="center" valign="bottom">D</td>
            <td width="15" height="10" align="center" valign="bottom">D</td>
            <td width="5" height="10" valign="bottom">&nbsp;</td>
            <td width="15" height="10" align="center" valign="bottom">M</td>
            <td width="15" height="10" align="center" valign="bottom">M</td>
            <td width="5" height="10" valign="bottom">&nbsp;</td>
            <td width="15" height="10" align="center" valign="bottom">A</td>
            <td width="15" height="10" align="center" valign="bottom">A</td>
            <td width="15" height="10" align="center" valign="bottom">A</td>
            <td width="15" height="10" align="center" valign="bottom">A</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="140" height="10" valign="bottom">&nbsp;</td>
            <td height="10" align="center" valign="bottom">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="20" align="left" style="text-align:justify;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size: 8px;">
          <tr>
            <td width="35" rowspan="2" valign="middle" style="color:#565656;">USO:</td>
            <td width="360" rowspan="2" align="center" valign="middle" style="text-align:center;"><table width="360" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="55" height="10" valign="bottom"  style="color: #565656; font-size: 8px;">COMERCIAL: </td>
                <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$usolicCom.'</td>
                <td width="10" height="10" valign="bottom">&nbsp;</td>
                <td width="55" height="10" valign="bottom"  style="color: #565656; font-size: 8px;">SERVICIOS: </td>
                <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$usolicSer.'</td>
                <td width="260" align="center" valign="bottom" >&nbsp;</td>
              </tr>
            </table>
            </td>
            <td width="140" height="10" valign="bottom" style="color:#565656;">FECHA DE EXPEDICIÓN</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; ">'.$d_1_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5;border-right:1px solid #a5a5a5;">'.$d_2_d.'</td>
            <td width="5" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; ">'.$m_1_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5;">'.$m_2_d.'</td>
            <td width="5" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; ">'.$a_1_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5;">'.$a_2_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5;">'.$a_3_d.'</td>
            <td width="15" height="10" align="center" valign="bottom" style="text-align:center; border-bottom:1px solid #a5a5a5; border-right:1px solid #a5a5a5;">'.$a_4_d.'</td>
          </tr>
          <tr>
            <td width="140" height="10" valign="bottom">&nbsp;</td>
            <td width="15" height="10" align="center" valign="bottom">D</td>
            <td width="15" height="10" align="center" valign="bottom">D</td>
            <td width="5" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="15" height="10" align="center" valign="bottom">M</td>
            <td width="15" height="10" align="center" valign="bottom">M</td>
            <td width="5" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="15" height="10" align="center" valign="bottom">A</td>
            <td width="15" height="10" align="center" valign="bottom">A</td>
            <td width="15" height="10" align="center" valign="bottom">A</td>
            <td width="15" height="10" align="center" valign="bottom">A</td>
          </tr>
        </table></td>
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
        <td width="580" align="right"><table width="700" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td width="350" height="10" valign="bottom"  style="color: #565656; font-size: 8px;"><table width="350" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
              <tr>
                <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;"s>PERSONA FÍSICA: </td>
                <td width="10" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$pfisica.'</td>
                <td width="10" height="10" valign="bottom">&nbsp;</td>
                <td width="80" height="10" valign="bottom" style="color: #565656; font-size: 8px;">PERSONA MORAL: </td>
                <td width="10" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$pmoral.'</td>
                <td width="120" align="center" valign="bottom" >&nbsp;</td>
              </tr>
            </table></td>
            <td width="150" align="right" ><span style="color: #565656; font-size: 8px;">RFC (Opcional): &nbsp;&nbsp;</span></td>
            <td width="200" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$rfc.'</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NOMBRE: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$Nombre.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">PRIMER APELLIDO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$ApellidoPat.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">SEGUNDO APELLIDO: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$ApellidoMat.'</td>
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
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.mb_strtoupper($RazSocE).'</td>
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
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$TelMovil.'</td>
            <td width="9" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$TelParticular.'</td>
            <td width="9" height="10" valign="bottom">&nbsp;</td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$TelNego.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom"  style="color: #565656; font-size: 8px;">CORREO ELECTRÓNICO:</td>
            <td width="130" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$EmailF.'</td>
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
            <td width="165" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$Calle.'</td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="60" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$NumExt.'</td>
            <td width="5" height="10">&nbsp;</td>
            <td width="60" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$NumInt.'</td>
            <td width="5" height="10" >&nbsp;</td>
            <td width="215" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$Colonia.'</td>
            <td width="5">&nbsp;</td>
            <td width="60" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$CodPostal.'</td>
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
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NOMBRE(S): </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$NombreFis.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom"style="color: #565656; font-size: 8px;">PRIMER APELLIDO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$ApellidoPatFis.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">SEGUNDO APELLIDO: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$ApellidoMatFis.'</td>
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
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$DescGiroCom.'</td>
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
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.mb_strtoupper($NomComE).'</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">DOMICILIO FISCAL: </td>
            <td width="165" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$CalleFis.'</td>
            <td width="5" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="60" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$NumExtFis.'</td>
            <td width="5" height="10" valign="bottom">&nbsp;</td>
            <td width="60" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$NumIntFis.'</td>
            <td width="5" height="10" valign="bottom" >&nbsp;</td>
            <td width="215" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$ColoniaFis.'</td>
            <td width="5" height="10" valign="bottom">&nbsp;</td>
            <td width="60" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$CodPostal.'</td>
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
                <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$SupMts.'</td>
                <td width="10" height="10" valign="bottom">&nbsp;</td>
                <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO DE NIVELES</td>
                <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$NumLevels.'</td>
                <td width="10" height="10" valign="bottom">&nbsp;</td>
                <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO DE CAJONES DE ESTACIONAMIENTO</td>
                <td width="105" height="10" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$CajEsta.'</td>
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
            <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$CveCat.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">EL LOCAL ES:</td>
            <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$proren.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO DE EMPLEADOS</td>
            <td width="105" height="10" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$NumEmp.'</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
  </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="top" style="color: #565656; font-size: 8px;">EMPLEA PERSONAS CON DISCAPACIDAD</td>
            <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$EmpDisPDF.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" valign="bottom" style="color: #565656; font-size: 8px;">¿CUANTAS?</td>
            <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$EmpDisNo.'</td>
            <td width="10" align="center" valign="bottom">&nbsp;</td>
            <td width="120" align="left" valign="bottom" style="color: #565656; font-size: 8px;">INVERSIÓN ESTIMADA EN PESOS: $ </td>
            <td width="105" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$InvEst.'</td>
          </tr>
        </table></td>
      </tr>
	  <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td width="700" height="40" align="left" valign="middle" style="font-size:10px; text-align:left; border-left:1px solid #a5a5a5; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-right:1px solid #a5a5a5;"><br><br><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Esta solicitud no es licencia de funcionamiento y el  trámite no autoriza la apertura del establecimiento. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Este formato es el único  válido para trámites referentes a la licencia de funcionamiento.</strong></td>
      </tr>
      </table>
';
$pdf->writeHTML($html, true, false, true, false, '');

// add a page
$pdf->AddPage();
$pdf->SetY(45);


	
	
$html2 = '<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:500; "><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="720" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:300;  padding:5px; background-color:#e6e6e6;"><strong>CROQUIS DE LOCALIZACIÓN DEL ESTABLECIMIENTO</strong></td>
  </tr>
  <tr>
    <td width="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; ">&nbsp;</td>
  </tr>
  <tr>
    <td height="400" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; "><img src="'.$pdf->Image($imagePath, 12, 58, 198, 106, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false).'"/></td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; ">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; "><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
      <tr>
        <td width="80" height="10" valign="bottom" style="color: #565656; font-size: 8px;"s>ENTRE CALLE: </td>
        <td width="265" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$EntreCalles.'</td>
        <td width="10" height="10" valign="bottom">&nbsp;</td>
        <td width="80" height="10" valign="bottom" style="color: #565656; font-size: 8px;">Y CALLE: </td>
        <td width="265" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$YCalle.'</td>
        </tr>
    </table></td>
  </tr>
   <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="top" style="color: #565656; font-size: 8px;">EMPLEA PERSONAS CON DISCAPACIDAD</td>
            <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $Mts ?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" valign="bottom" style="color: #565656; font-size: 8px;">¿CUANTAS?</td>
            <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $arrenda ?></td>
            <td width="10" align="center" valign="bottom">&nbsp;</td>
            <td width="120" align="left" valign="bottom" style="color: #565656; font-size: 8px;">INVERSIÓN ESTIMADA EN PESOS: $ </td>
            <td width="105" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $inversion ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
          <tr>
            <td width="20" height="10" valign="bottom" style="color: #565656; font-size: 8px;">&nbsp;</td>
            <td width="10" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">X</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="660" rowspan="2" valign="bottom" style="color: #565656; font-size: 8px;">EL CIUDADANO PRESENTA ESTA SOLICITUD VOLUNTARIAMENTE, BAJO PROTESTA DE DECIR VERDAD Y MANIFIESTA QUE LOS DATOS CONTENIDOS SON VERIDICOS Y COMPROBABLES EN CUALQUIER MOMENTO.</td>
          </tr>
          <tr>
            <td width="20" height="10" valign="bottom" style="color: #565656; font-size: 8px;">&nbsp;</td>
            <td width="10" height="10" align="center" valign="bottom" >&nbsp;</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
	   <tr>
        <td height="35" align="center" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300;  background-color:#e6e6e6;"><br><br>
          <strong>DECLARACIONES DEL SOLICITANTE</strong></td>
       </tr>
	  <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
          <tr>
            <td width="20" height="10" valign="bottom" style="color: #565656; font-size: 8px;">&nbsp;</td>
            <td width="10" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">X</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="660" height="10" valign="bottom" style="color: #565656; font-size: 8px;">EL CIUDADANO DECLARA QUE LOS DOCUMENTOS QUE LO ACOMPAÑAN SON FIELMENTE REPRODUCIDOS DE SU ORIGINAL.</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
          <tr>
            <td width="20" height="10" valign="bottom" style="color: #565656; font-size: 8px;">&nbsp;</td>
            <td width="10" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">X</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="660" height="10" valign="bottom" style="color: #565656; font-size: 8px;">EL CIUDADANO SEÑALA COMO DOMICILIO CONVENCIONAL PARA TODO LO REFERENTE AL PRESENTE FORMATO, EL REGISTRADO EN ESTA SOLUCITUD.</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
          <tr>
            <td width="20" height="5" valign="bottom" style="color: #565656; font-size: 8px;">&nbsp;</td>
            <td width="10" height="5" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">X</td>
            <td width="10" height="5" valign="bottom">&nbsp;</td>
            <td width="660" rowspan="2" valign="bottom" style="color: #565656; font-size: 8px;">EL CIUDADANO DECLARA SER EL RESPONSABLE DEL ESTABLECIMIENTO, NO OBSTANTE LLEVAR A CABO LA OPERACIÓN DEL MISMO A TRAVÉS DE TERCERAS PERSONAS.</td>
          </tr>
          <tr>
            <td width="20" height="5" valign="bottom" style="color: #565656; font-size: 8px;">&nbsp;</td>
            <td width="10" height="5" align="center" valign="bottom">&nbsp;</td>
            <td width="10" height="5" valign="bottom">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
          <tr>
            <td width="20" height="10" valign="bottom" style="color: #565656; font-size: 8px;">&nbsp;</td>
            <td width="10" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">X</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="660" height="10" valign="bottom" style="color: #565656; font-size: 8px;">EL CIUDADANO MANIFIESTA QUE EL ESTABLECIMIENTO ESTÁ HABILITADO PARA CUMPLIR CON LAS FUNCIONES QUE SE ASIENTAN EN EL PRESENTE</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
          <tr>
            <td width="20" height="10" valign="bottom" style="color: #565656; font-size: 8px;">&nbsp;</td>
            <td width="10" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">X</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="660" height="10" valign="bottom" style="color: #565656; font-size: 8px;">EL CIUDADANO PRESENTARA EL AVISO DE FUNCIONAMIENTO DE SALUBRIDAD EN LOS CASOS QUE CORRESPONDA.</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
  
  
</table>';




// output the HTML content
$pdf->writeHTML($html2, true, false, true, false, '');

$pdf->lastPage();

$pdf_name = $Folio.'-FUA';
$pat = $_SERVER['DOCUMENT_ROOT'].'/'.$folder_docs.'/';
$repositorio = $pat.'/'.$folder_docs.'/'.$Folio;

// ---------------------------------------------------------

$pdf->Output($repositorio.'/'.$pdf_name.'.pdf', 'F');



//Armamos el correo
$from = $emailAdmin;
$from_name = utf8_decode($institucion);
$to = $EmailF;

$subject = utf8_decode('Registro Sistema de Licencias de Funcionamiento para Negocios y Empresas');

$mail = new PHPMailer;


$mail->SetFrom($from, $from_name);
$mail->AddReplyTo($from, $from_name);
$mail->AddAddress($to, $Nombre);	
$mail->IsHTML(true);
$mail->Timeout=60;
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
										<td valign="middle" align="center"><img src="'.$urlmail.'/images/front-end/logo-dark.png" width="313" height="110" alt="'.$institucion.'"/></td>
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
							<td class="Heading" style="color:#333333; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-weight:600; font-size:18px; line-height:38px; letter-spacing:1px;" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">Confirmación de Solicitud en Línea</td>
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
											<img src="'.$urlmail.'/images/front-end/71x13.png" alt="71x13" style="margin:0; border:0; padding:0; width:100%; height:auto;" width="71" />
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
							  <p>Por medio del presente le informamos que su registro de licencian de funcionamiento se completo exitosamente.</p>
							  <p>Adjunto a este correo encontrá su Formato Único del Sistema de Aperutura Rápida de Empresas SARE, el cual es un documento oficial mediante la firma electronica el pié del mismo</p>
							  </td>
						</tr>
						<tr>
							<td height="20">
							</td>
						</tr>
						<tr>
							<td class="MsoNormal txt-center" style="color:#666666; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:14px; font-weight:400; line-height:24px;" data-color="Content" data-size="Content" data-min="12" data-max="33" align="left">
								Para concluir el proceso es necesario que pague los derechos de la cédula de notificación, este pago lo puede hacer dentro de <a href="'.$urlmail.'">nuestro sistema en línea</a> con una cuenta de PayPal, si no cuenta con una la puede generar al momento de hacer el pago y si no puede hacer el pago en línea en <a href="'.$urlmail.'">nuestro sistema en línea</a> puede imprimir el formato para realizar el pago en el banco.</td>
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
														 <a href="https://www.facebook.com/AyuntamientoDeSanMateoAtenco/" style="color:#666666;text-decoration:none; line-height:0;" data-color="Footer-Content"><img src="../assets/images/front-end/24x24x7.png" alt="24x24x7" style="margin:0; border:0; padding:0; display:block;" width="24" height="24" /></a>
													</td>
													<td width="20">&nbsp;
														
													</td>
													<td align="center">
														 <a href="https://twitter.com/HSanMateoAtenco" style="color:#666666;text-decoration:none; line-height:0;" data-color="Footer-Content"><img src="../assets/images/front-end/24x24x8.png" alt="24x24x8" style="margin:0; border:0; padding:0; display:block;" width="24" height="24" />></a>
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

$mail->Body = $msg;
$mail->AltBody="";
$mail­>AddAttachment($repositorio, $pdf_name.'.pdf');


if(!$mail->Send()) {
	
	echo 'Nel';
 
} else {
	
	echo 'OK';
	
}


//============================================================+
// END OF FILE
//============================================================+
