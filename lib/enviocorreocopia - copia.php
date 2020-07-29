<?php
require_once("config.php");
require_once("functions.php");
require 'PHPMailerAutoload.php';

$nombreUB = $_POST['nombreU'];
$apellido1UB = $_POST['apellido1U'];
$apellido2UB = $_POST['apellido2U'];
$sexoUB = $_POST['sexoU'];
$fechanacimientoUB = $_POST['fechanacimientoU'];
$entidadnacimientoUB = $_POST['entidadnacimientoU'];
$estadoUB = $_POST['estadoU'];
$codigopostalUB = $_POST['codigopostalU'];
$coloniaUB = $_POST['coloniaU'];
$telefonopUB = $_POST['telefonopU'];
$telefonotUB = $_POST['telefonotU'];
$telefonocUB = $_POST['telefonocU'];
$licenciadecUB = $_POST['licenciadecU'];
$vehiculopropioUB = $_POST['vehiculopropioU'];
$emailUB = $_POST['emailU'];
$confirmaCorreoElectrnicoUB = $_POST['confirmaCorreoElectrnicoU'];
$titulocurriculoUB = $_POST['titulocurriculoU'];
$objetivopUB = $_POST['objetivopU'];
$idEstadoUB = $_POST['idEstado'];
$idMunicipioUB = $_POST['idMunicipio'];
$habilidadesUB = $_POST['habilidadesU'];
$escuelaUB = $_POST['escuelaU'];
$gradoacademicoUB = $_POST['gradoacademicoU'];
$titulogradoUB = $_POST['titulogradoU'];
$fechainicioesUB = $_POST['fechainicioesU'];
$fechaterminoesUB = $_POST['fechaterminoesU'];
$auncursoUB = $_POST['auncursoU'];
$nivelinglesUB = $_POST['nivelinglesU'];
$trabajaactualmenteUB = $_POST['trabajaactualmenteU'];
$motivoUB = $_POST['motivoU'];
$otraUB = $_POST['otraU'];
$fechaabuscarUB = $_POST['fechaabuscarU'];
$disponibilidadUB = $_POST['disponibilidadU'];
$ultimopuestoUB = $_POST['ultimopuestoU'];
$empresaUB = $_POST['empresaU'];
$giroUB = $_POST['giroU'];
$funcionesactividadesUB = $_POST['funcionesactividadesU'];
$fechainicioultimotUB = $_POST['fechainicioultimotU'];
$fechaterminoultimotUB = $_POST['fechaterminoultimotU'];
$empleoactualUB = $_POST['empleoactualU'];










$institucion = "H. Ayuntamiento Constitucional de San Mateo Atenco 2016 - 2018";
$urlmail ='http://189.194.250.30:8085/paginasSMA/gob/sare/sare';
$nombreU1 ="Angel";
$apellidoPU ="Alrojas";

$destinatario = "angelrojas12al@gmail.com";


// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = " smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "angelrojas12al@gmail.com";  // Mi cuenta de correo
$smtpClave = "STISaNmAtEo";  // Mi contraseña

$nombre = "STISaNmAtEo"; 



$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $smtpUsuario; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Formulario desde el Sitio Web"; // Este es el titulo del email.
$msg =  utf8_decode('

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
                <strong>Estimado(a) '.$nombreUB.'&nbsp;'.$apellido1UB.'</strong><br />
                Por medio del presente le informamos que ya estas registrado en el sistema de Licencias de Funcionamiento en línea.</td>
            </tr>

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
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">     '.$apellido1UB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">SEGUNDO APELLIDO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$apellido2UB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">NOMBRE(S): </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$nombreUB.'</td>
          </tr>
        </table>
      </td>
      </tr>
    <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>

<tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">SEXO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$sexoUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">FECHA DE NACIMIENTO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$fechanacimientoUB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">ENTIDAD DE NACIMIENTO: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$entidadnacimientoUB.'</td>
          </tr>
        </table>
      </td>
      </tr>

         <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>

<tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">ESTADO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$estadoUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">CODIGO POSTAL: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$codigopostalUB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">COLONIA: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$coloniaUB.'</td>
          </tr>
        </table>
      </td>
      </tr>



      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
    
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="120" height="10" valign="bottom"  style="color: #565656; font-size: 8px;">TELÉFONO: </td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$telefonocUB.'</td>
            <td width="9" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$telefonopUB.'</td>
            <td width="9" height="10" valign="bottom">&nbsp;</td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$telefonotUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom"  style="color: #565656; font-size: 8px;">CORREO ELECTRÓNICO:</td>
            <td width="130" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$emailUB.'</td>
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
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
        
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">LICENCIA DE CONDUCIR: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$licenciadecUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom"style="color: #565656; font-size: 8px;">VEHICULO PROPIO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$vehiculopropioUB.'</td>
           
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td width="700" height="35" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300; background-color:#e6e6e6;"><br /><br><strong>PROFECIÓN</strong></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" style="color: #565656; font-size: 8px;">TITULO DE MI CURRICULO:</td>
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$titulocurriculoUB.'</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;"> OBJETIVO PROFECIONAL:<strong></strong></td>
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$objetivopUB.'</td>
          </tr>
        </table></td>
      </tr>
     
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">MI AREA DE ESPECIALIDAD: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$idEstadoBU.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="70" height="10" valign="bottom" style="color: #565656; font-size: 8px;">SUBAREA DE ESPECIALIDAD: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$idMunicipioBU.'</td>
          </tr>
        </table></td>
      </tr>

  <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      
         <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">MIS HABILIDADES:<strong></strong></td>
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$habilidadesUB.'</td>
          </tr>
        </table></td>
      </tr>
     
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="35" align="center" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300;  background-color:#e6e6e6;"><br><br>
          <strong>EDUCACION Y OTROS CONOCIMIENTOS</strong></td>
        </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>

   <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">ESCUELA DÓNDE ESTUDIASTE:<strong></strong></td>
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$escuelaUB.'</td>
          </tr>
        </table></td>
      </tr>
 <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>

     <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
        
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">GRADO ACADEMICO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$gradoacademicoUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom"style="color: #565656; font-size: 8px;">MI TITULO LOGRADO ES: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$titulogradoUB.'</td>
           
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="top" style="color: #565656; font-size: 8px;">FECHA DE INICIO</td>
            <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$fechainicioesUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">FECHA DE TÉRMINO</td>
            <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$fechaterminoesUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">AÚN CURSADO</td>
            <td width="105" height="10" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$auncursoUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NIVEL DE INGLES</td>
            <td width="105" height="10" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$nivelinglesUB.'</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
  </tr>

   <tr>
        <td height="35" align="center" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300;  background-color:#e6e6e6;"><br><br>
          <strong>SITUACION LABORAL</strong></td>
        </tr>
              <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
  </tr>
   <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="top" style="color: #565656; font-size: 8px;">TRABAJAS ACTUALMENTE</td>
            <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$trabajaactualmenteUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">MOTIVO</td>
            <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$motivoUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">OTRA</td>
            <td width="105" height="10" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$otraUB.'</td>
           
          </tr>
        </table></td>
      </tr>
        <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
  </tr>
       <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="top" style="color: #565656; font-size: 8px;">FECHA QUE COMENZO A BUSCAR TRABAJO</td>
            <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$fechaabuscarUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">DISPONIBILIDAD PARA COMENZAR A TRABAJAR</td>
            <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$disponibilidadUB.'</td>
           
           
          </tr>
        </table></td>
      </tr>



         <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td width="700" height="35" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300; background-color:#e6e6e6;"><br /><br><strong>Experiencia laboral(Ultimo trabajo o trabajo actual)</strong></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" style="color: #565656; font-size: 8px;">MI ÚLTIMO PUESTO:</td>
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$ultimopuestoUB.'</td>
          </tr>
        </table></td>
      </tr>

         <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
       <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" style="color: #565656; font-size: 8px;">EMPRESA:</td>
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$empresaUB.'</td>
          </tr>
        </table></td>
      </tr>


         <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
       <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" style="color: #565656; font-size: 8px;">FUNCIONES Y ACTIVIDADES REALIZADAS:</td>
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$funcionesactividadesUB.'</td>
          </tr>
        </table></td>
      </tr>
      
         <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
        <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" style="color: #565656; font-size: 8px;">GIRO:</td>
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$giroUB.'</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
        <tr>
        <td height="10" align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">FECHA DE INICIO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$fechainicioultimotUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">FECHA DE TÉRMINO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$fechaterminoultimotUB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">EMPLEO ACTUAL: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$empleoactualUB.'</td>
          </tr>
        </table>
      </td>
      </tr>
      
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
     
      <tr>
        <td width="700" height="50" align="left" valign="middle" style="font-size:10px; text-align:left; border-left:1px solid #a5a5a5; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-right:1px solid #a5a5a5;"><br><br><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Esta solicitud no es licencia de funcionamiento y el  trámite no autoriza la apertura del establecimiento. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Este formato es el único  válido para trámites referentes a la licencia de funcionamiento.</strong></td>
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
              <td class="button-width" align="center">
                <table class="display-button" style="border-radius:5px;" data-bgcolor="Button-BG" cellspacing="0" cellpadding="0" border="0" bgcolor="#0d8b1c" align="center">
                  <tr>
                    <td class="MsoNormal" style="color:#ffffff; font-family:Segoe UI, Arial, Verdana, Trebuchet MS, sans-serif; font-weight:bold; padding:7px 15px; text-transform:uppercase; font-size:13px; letter-spacing:1px;" valign="middle" align="center">
                       <a href="'.$urlmail.'/validauso.php?codigo='.$institucion.$institucion.'" style="text-decoration:none; color:#ffffff;" data-color="Button-Text" data-size="Button-Text" data-min="12" data-max="33">VALIDAR EMAIL</a>
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
</table>






  ');

$mail->Body = $msg;
$mail->AltBody="";

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurrió un error inesperado.";
}











if($nombreUB =="1")
{

  

$institucion = "H. Ayuntamiento Constitucional de San Mateo Atenco 2016 - 2018";
$urlmail ='http://189.194.250.30:8085/paginasSMA/gob/sare/sare';
$nombreU1 ="Angel";
$apellidoPU ="Alrojas";

$destinatario = "angelrojas12al@gmail.com";


// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = " smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "angelrojas12al@gmail.com";  // Mi cuenta de correo
$smtpClave = "STISaNmAtEo";  // Mi contraseña

$nombre = "STISaNmAtEo"; 



$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $smtpUsuario; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Formulario desde el Sitio Web"; // Este es el titulo del email.
$msg =  utf8_decode('


  <table border="1" align="center">
<tr>
  
  <td align="center">CORREO</td>
  <td align="center">NOMBRE DEL ESTABLECIMIENTO</td>
  <td align="center">GIRO</td>

  
  
  
  
  
  
  </tr>
  

<?php
include_once "holasolo.php"; 
$sql1=mysql_query("select * from tipoproducto");
while($res=mysql_fetch_array($sql1))
{
  ?>
  <tr>





<td>'.<?php echo $res["idtip"]?>.'</td>
<td>'.<?php echo $res["descrip"]?>.'</td>

  </tr>
  



<?php
}
?>

</table>

 ');

$mail->Body = $msg;
$mail->AltBody="";

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurrió un error inesperado.";
}







}

  




















?>
