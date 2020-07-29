<?php
require_once("config.php");
require_once("functions.php");
require 'PHPMailerAutoload.php';





// Recibimos datos del usuario
$nombreU = sanitize($_POST['nombreU']);
$apellidoPU = sanitize($_POST['apellidoPU']);
$apellidoMU = sanitize($_POST['apellidoMU']);
$email = sanitize($_POST['email']);
$pswd = sanitize($_POST['pswd']);
$idSujeto = sanitize($_POST['idSujeto']);
$curp = sanitize($_POST['curp']);
$listaPersonaPerfiles = sanitize($_POST['listaPersonaPerfiles']);
$sexo = sanitize($_POST['sexo']);
$fechaNacimiento = sanitize($_POST['fechaNacimiento']);
$idEntidadFederativa = sanitize($_POST['idEntidadFederativa']);
$requiereNotificacion = sanitize($_POST['requiereNotificacion']);
$idEstadoCivil = sanitize($_POST['idEstadoCivil']);
$calle = sanitize($_POST['calle']);
$localidad = sanitize($_POST['localidad']);
$colonia = sanitize($_POST['colonia']);
$codigoPostal = sanitize($_POST['codigoPostal']);
$idPais = sanitize($_POST['idPais']);
$idEstado = sanitize($_POST['idEstado']);
$idMunicipio = sanitize($_POST['idMunicipio']);
$telefonoParticular = sanitize($_POST['telefonoParticular']);
$telefonoTrabajo = sanitize($_POST['telefonoTrabajo']);
$celular = sanitize($_POST['celular']);
$idPreguntas = sanitize($_POST['idPreguntas']);
$respuestaSecreta = sanitize($_POST['respuestaSecreta']);



//Código para validar email
$codver = '';
for($x = 0; $x<1; $x++) {
  $codver .= '-'.substr(strtoupper(sha1(rand(0,999999999999999))),2,60);
}

$codver = substr($codver,1);
  


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
  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $conexion->set_charset('utf8');
}



//Insertamos datos del usuario
$consulta = "INSERT INTO usuarios (nombreu, apellidopu, apellidomu, email, password, `idSujeto`, `curp`, `listaPersonaPerfiles`, `sexo`, `fechaNacimiento`, `idEntidadFederativa`, `requiereNotificacion`, `idEstadoCivil`, `calle`, `localidad`, `colonia`, `codigoPostal`, `idPais`, `idEstado`, `idMunicipio`, `telefonoParticular`, `telefonoTrabajo`, `celular`, `idPreguntas`, `respuestaSecreta`, ip, activo, codver, tipousuario) VALUES ('$nombreU', '$apellidoPU', '$apellidoMU', '$email', md5('$pswd'), '$idSujeto', '$curp', '$listaPersonaPerfiles', '$sexo', '$fechaNacimiento', '$idEntidadFederativa', '$requiereNotificacion', '$idEstadoCivil', '$calle', '$localidad', '$colonia', '$codigoPostal', '$idPais', '$idEstado', '$idMunicipio', '$telefonoParticular', '$telefonoTrabajo', '$celular', '$idPreguntas', '$respuestaSecreta', '$ipaddress', '0', '$codver', '1');";


$resultado = $conexion -> query($consulta)|| die("Ha ocurrido un error al guardar los datos");


//Cerramos Base de Datos
$conexion->close();

//Armamos el correo
$from = $emailAdmin;
$from_name = utf8_decode($institucion);
$to = $email;

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
$mail->AddAddress($to, $nombreU);	
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
							<td class="Heading" style="color:#333333; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-weight:600; font-size:18px; line-height:38px; letter-spacing:1px;" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">Confirmación de Registro</td>
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
											<img src="'.$urlmail.'/assets/images/front-end/71x13.png"  style="margin:0; border:0; padding:0; width:100%; height:auto;" width="71" />
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
								<strong>Estimado(a) '.$nombreU.'&nbsp;'.$apellidoPU.'</strong><br />
							  Por medio del presente le informamos que ya estas registrado en el sistema de Licencias de Funcionamiento en línea.</td>
						</tr>
						<tr>
							<td height="20">
							</td>
						</tr>
						<tr>
							<td class="MsoNormal txt-center" style="color:#666666; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:14px; font-weight:400; line-height:24px;" data-color="Content" data-size="Content" data-min="12" data-max="33" align="left">
								Para continuar con el proceso del trámite de tu licencia de funcionamiento es necesario que valides tu cuenta de <strong>Email </strong>haciedo click en el botón de abajo.</td>
						</tr>
						<tr>
							<td height="20">
							</td>
						</tr>
						<tr>
							<td>
								<div class="panel-body">
									<p>No olvides tener a la mano la siguiente documentación digitalizada (formato válido PDF,jpg,png):</p>
									<p>Si eres persona física:</p>
									<ul>
										<li>Formato de Solicitud en línea</li>
										<li>Identificación Oficial</li>
										<li>Comprobante de Domicilio</li>
										<li>1 Fotografía de la Fachada</li>
										<li>1 Fotografía de interior del negocio</li>
									</ul>
									<p>Si eres persona moral:</p>
									<ul>
										<li>Formato de Solicitud en línea</li>
										<li>Identificación Oficial del Representante Legal</li>
										<li>Comprobante de Domicilio del negocio</li>
										<li>1 Fotografía de la fachada del negocio</li>
										<li>1 Fotografía de interior del negocio</li>
										<li>Acta Constitutiva Negocio</li>            
									 </ul> 
								</div>
							
							</td>
						</tr>						
						<tr>
							<td class="button-width" align="center">
								<table class="display-button" style="border-radius:5px;" data-bgcolor="Button-BG" cellspacing="0" cellpadding="0" border="0" bgcolor="#0d8b1c" align="center">
									<tr>
										<td class="MsoNormal" style="color:#ffffff; font-family:Segoe UI, Arial, Verdana, Trebuchet MS, sans-serif; font-weight:bold; padding:7px 15px; text-transform:uppercase; font-size:13px; letter-spacing:1px;" valign="middle" align="center">
											 <a href="'.$urlmail.'/valida_usuario.php?cvf='.$codver.'" style="text-decoration:none; color:#ffffff;" data-color="Button-Text" data-size="Button-Text" data-min="12" data-max="33">VALIDAR EMAIL</a>
										</td>
									</tr>
								</table>
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
														 <a href="https://www.facebook.com/AyuntamientoDeSanMateoAtenco/" style="color:#666666;text-decoration:none; line-height:0;" data-color="Footer-Content"><img src="'.$urlmail.'/assets/images/front-end/24x24x7.png"  style="margin:0; border:0; padding:0; display:block;" width="24" height="24" /></a>
													</td>
													<td width="20">&nbsp;
														
													</td>
													<td align="center">
														 <a href="https://twitter.com/HSanMateoAtenco" style="color:#666666;text-decoration:none; line-height:0;" data-color="Footer-Content"><img src="'.$urlmail.'/assets/images/front-end/24x24x8.png" style="margin:0; border:0; padding:0; display:block;" width="24" height="24" /></a>
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


if(!$mail->Send()) {
	//echo 'Could not send mail! Please check your PHP mail configuration.'. $mail->ErrorInfo;
	$output = json_encode(array('type'=>'error', 'text' => 'algo paso con el correo.'));
	die($output);
 
} else {
	
	$output = json_encode(array('type'=>'message', 'text' => 'OK'));
	die($output);	
	
}


?>
