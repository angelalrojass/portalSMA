<?php
include("../sesiones.php");
require_once("../../lib/config.php");
require_once("../../lib/functions.php");
require '../../lib/PHPMailerAutoload.php';


/* Previene acceso directo a esta página*/ 
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if(!$isAjax) {
  $user_error = 'Acceso denegado - direct call is not allowed...';
  trigger_error($user_error, E_USER_ERROR);
}
ini_set('display_errors',1);


$usolic  = sanitize($_POST['usolic']);
$pfm = sanitize($_POST['pfm']);
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
$InvEst = sanitize($_POST['InvEst']);
$NumEmp = sanitize($_POST['NumEmp']);
$EmpDis = sanitize($_POST['EmpDis']);
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


///Generamos el FUA en PDF

include("fua_pdf.php");


///Obtenemos la IP del usuario
 function get_real_ip()
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
    
	$ipaddress = get_real_ip();



/* Conectamos a la base de datosy establecemos el charset a UTF-8 */
$conexion = new MySQLi($server,$user,$password,$database);



if($conexion->connect_error) {
  echo 'Falló la conección al servidor...' . 'Error: ' . $conexion->connect_errno . ' ' . $conexion->connect_error;
  exit;
} else {
  $conexion->set_charset('utf8');
}

//Insertamos datos del usuario
$guarda = "INSERT INTO `solicitudes`(`usuarioid`, `GiroComercial`, `Pfm`, `TipoUsoLic`, `Folio`, `Nombre`, `ApellidoPat`, `ApellidoMat`, `Rfc`, `TelParticular`, `TelMovil`, `TelNego`, `Email`, `Calle`, `NumInt`, `NumExt`, `CodPostal`, `Colonia`, `EntreCalles`, `YCalle`, `RazSocE`, `NomComE`, `CalleFis`, `NumExtFis`, `NumIntFis`, `CodPostalFis`, `ColoniaFis`, `NombreFis`, `ApellidoPatFis`, `ApellidoMatFis`, `SupMts`, `NumLevels`, `CajEsta`, `CveCat`, `ProRen`, `InvEst`, `NumEmp`, `EmpDis`, `EmpDisNo`, `DocIne`, `DocCompDom`, `DocFoto1F`, `DocFoto2F`, `DocFoto1Int`, `DocFoto2Int`, `DocActaCons`, `Declaraciones`, `IpUser`) VALUES ('$idUsuario', '$GiroComercial', '$pfm', '$usolic', '$Folio','$Nombre', '$ApellidoPat', '$ApellidoMat', '$rfc', '$TelParticular', '$TelMovil', '$TelNego', '$EmailF', '$Calle', '$NumInt', '$NumExt', '$CodPostal', '$Colonia', '$EntreCalles', '$YCalle', '$RazSocE', '$NomComE', '$CalleFis', '$NumExtFis', '$NumIntFis', '$CodPostalFis', '$ColoniaFis', '$NombreFis', '$ApellidoPatFis', '$ApellidoMatFis', '$SupMts', '$NumLevels', '$CajEsta', '$CveCat', '$proren', '$InvEst', '$NumEmp', '$EmpDis', '$EmpDisNo', '$DocIne', '$DocCompDom', '$DocFoto1F', '$DocFoto2F', '$DocFoto1Int', '$DocFoto2Int', '$DocActaCons', '$Declaraciones', '$ipaddress')";


$resultado = $conexion -> query($guarda);

if (!$resultado)
  {
  echo("Error description: " . mysqli_error($conexion));
  } else {
	  
	   //Insertamos Folio para que nos de el siguiente
		$sql2 = "INSERT INTO `folios_disponibles`(`id`, `folio_asignado`) VALUES (NULL, '$Folio');";
		mysqli_query($conexion, $sql2);  
}
  


//Cerramos Base de Datos
$conexion->close();

//Armamos el correo
$from = $emailAdmin;
$from_name = utf8_decode($institucion);
$to = $EmailF;

$subject = utf8_decode('Registro Sistema de Licencias de Funcionamiento para Negocios y Empresas');

$mail = new PHPMailer;

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = $Host;
$mail->Port = $Port;
$mail->Username = $UsernameM;
$mail->Password = $PasswordM;

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


echo 'OK';

/*if(!$mail->Send()) {
	//echo 'Could not send mail! Please check your PHP mail configuration.'. $mail->ErrorInfo;
	$output = json_encode(array('type'=>'error', 'text' => 'algo paso con el correo.'));
	die($output);
 
} else {
	
	$output = json_encode(array('type'=>'message', 'text' => 'OK'));
	die($output);	
	
}*/


?>
