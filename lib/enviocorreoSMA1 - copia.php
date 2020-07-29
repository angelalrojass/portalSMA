<?php
require_once("config.php");
require_once("functions.php");
require 'PHPMailerAutoload.php';


$sexoUB = $_POST['sexoU'];
$edadUB = $_POST['edadU'];


$idEstadoUB = $_POST['idEstado'];
$idMunicipioUB = $_POST['idMunicipio'];



$tipodeempresaUB = $_POST['tipodeempresaU'];
$rfcUB = $_POST['rfcU'];
$razonsocialUB = $_POST['razonsocialU'];

$codigopostalUB = $_POST['codigopostalU'];
$telefonop1UB = $_POST['coloniaU'];
$telefonop11UB = $_POST['telefonop11U'];




$calleUB = $_POST['calleU'];
$numeroexteriorUB = $_POST['numeroexteriorU'];
$numerointeriorUB = $_POST['numerointeriorU'];
$entrecallesUB = $_POST['entrecallesU'];


$numeroempleadosUB = $_POST['numeroempleadosU'];

$descripcionempresaUB = $_POST['descripcionempresaU'];
$mensajeempresaUB = $_POST['mensajeempresaU'];
$paginawebUB = $_POST['paginawebU'];
$emailUB = $_POST['emailU'];
$comoenteroUB = $_POST['comoenteroU'];

$nombreUB = $_POST['nombreU'];
$apellidosUB = $_POST['apellidosU'];
$cargoUB = $_POST['cargoU'];

$telefonotUB = $_POST['telefonotU'];
$telefonocUB = $_POST['telefonocU'];
$telefonopUB = $_POST['telefonopU'];



$fechaUB=date("d-m-Y");





$institucion = "H. Ayuntamiento Constitucional de San Mateo Atenco 2016 - 2018";
$urlmail ='http://localhost:8080/saresma/sarepara/sare';
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
                <strong>FECHA DE REGISTRO'.$fechaUB.'</strong><br />
         </td>
            </tr>




              
            <tr>
              <td class="MsoNormal txt-center" style="color:#666666; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:14px; font-weight:400; line-height:24px;" data-color="Content" data-size="Content" data-min="12" data-max="33" align="left">
                <strong>EMPRESA  '.$descripcionempresaUB.'</strong><br />
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
        <strong>DATOS DE IDENTIFICACION</strong>
      </td>
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
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">TIPO DE EMPRESA: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">     '.$tipodeempresaUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">RFC: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$rfcUB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">RAZÓN SOCIAL: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$razonsocialUB.'</td>
          </tr>
        </table>
      </td>
      </tr>
    <tr>
   <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>

<tr>
        
      </tr>
      <td height="35" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300; background-color:#e6e6e6;"><br /><br>
        <strong>DOMICILIO DEL EMPLEADOR</strong>
      </td>
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
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">CODIGO POSTAL: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$codigopostalUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">COLONIA: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$telefonop1UB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">MUNICIPIO: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$telefonop11UB.'</td>
          </tr>
        </table>
      </td>
      </tr>

      </tr>
     
 <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
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
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">CLLE: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">     '.$calleUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO EXTERIOR: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$numeroexteriorUB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO INTERIOR: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$numerointeriorUB.'</td>
          </tr>
        </table>
      </td>
      </tr>









      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>

      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>



      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" style="color: #565656; font-size: 8px;">ENTRE QUÉ CALLES (TIPO Y NOMBRE):</td>
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$entrecallesUB.'</td>
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
        <td width="700" height="35" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300; background-color:#e6e6e6;"><br /><br><strong>CLASIFICACIÓN</strong></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">SECTOR DED ACTIVIDAD: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$idEstadoUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="70" height="10" valign="bottom" style="color: #565656; font-size: 8px;">SUBSECTOR: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$idMunicipioUB.'</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NUMERO DE EMPLEADOS: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$numeroempleadosUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="70" height="10" valign="bottom" style="color: #565656; font-size: 8px;"></td>
            
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
          <strong>DESCRIPCIÓN Y RECLUTAMIENTO</strong></td>
        </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>

   <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">DESCRIPCIÓN DE LA EMPRESA:<strong></strong></td>
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$descripcionempresaUB.'</td>
          </tr>
        </table>
      </td>
      </tr>
 <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>

     <tr>
         <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">MENSAJE BREVE A LOS CANDIDATOS A SUS OFERTAS DE EMPLEO ¿POR QUÉ FORMAR PARTE DE SU EQUIPO?:<strong></strong></td>
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$mensajeempresaUB.'</td>
          </tr>
        </table>
      </td>
      </tr>

 <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">SEXO: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$sexoUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="70" height="10" valign="bottom" style="color: #565656; font-size: 8px;">EDAD: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$edadUB.'</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      



         <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
        
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">PÁGINA WEB DE LA EMPRESA: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$paginawebUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom"style="color: #565656; font-size: 8px;">EMAIL: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$emailUB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">¿CÓMO SE ENTERÓ DEL SNE?: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$comoenteroUB.'</td>
          </tr>
        </table></td>
      </tr>
<
        
    
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
  </tr>

   <tr>
        <td height="35" align="center" valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300;  background-color:#e6e6e6;"><br><br>
          <strong>DATOS DE PERSONA DE CONTACTO</strong></td>
        </tr>
              <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
  </tr>
       <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
        
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NOMBRE: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$nombreUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom"style="color: #565656; font-size: 8px;">APELLIDOS: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$apellidosUB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">CARGO: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$cargoUB.'</td>
          </tr>
        </table></td>
      </tr>
        <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
  </tr>
          <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
        
          <tr>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">TELEFONO DE TRABAJO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$telefonotUB.'</td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom"style="color: #565656; font-size: 8px;">TELEFONO CELULAR: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$telefonocUB.'</td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">TELEFONO PARTICULAR: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;">'.$telefonopUB.'</td>
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
                       <a href="'.$urlmail.'/validaempresa.php?codigo='.$tipodeempresaUB.'&tipodeempresaU='.$tipodeempresaUB.'&rfcU='.$rfcUB.'&razonsocialU='.$razonsocialUB.'&codigopostalU='.$codigopostalUB.'&telefonop1U='.$telefonop1UB.'&telefonop11U='.$telefonop11UB.'&calleU='.$calleUB.'&numeroexteriorU='.$numeroexteriorUB.'&numerointeriorU='.$numerointeriorUB.'&entrecallesU='.$entrecallesUB.'&idEstado='.$idEstadoUB.'&idMunicipio='.$idMunicipioUB.'&numeroempleadosU='.$numeroempleadosUB.'&descripcionempresaU='.$descripcionempresaUB.'&mensajeempresaU='.$mensajeempresaUB.'&paginawebU='.$paginawebUB.'&emailU='.$emailUB.'&comoenteroU='.$comoenteroUB.'&nombreU='.$nombreUB.'&apellidosU='.$apellidosUB.'&cargoU='.$cargoUB.'&telefonotU='.$telefonotUB.'&telefonocU='.$telefonocUB.'&telefonopU='.$telefonopUB.'&fechaU='.$fechaUB.'&sexoU='.$sexoUB.'&edadU='.$edadUB.'" style="text-decoration:none; color:#ffffff;" data-color="Button-Text" data-size="Button-Text" data-min="12" data-max="33">VALIDAR EMAIL</a>
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
 $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);
//$mail->AltBody="";


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
































?>
