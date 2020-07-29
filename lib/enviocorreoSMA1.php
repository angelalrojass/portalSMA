<?php
require_once("config.php");
require_once("functions.php");
require 'PHPMailerAutoload.php';



$idEstadoUB = $_POST['idEstado'];
$tipodeempresaUB = $_POST['tipodeempresaU'];
$rfcUB = $_POST['rfcU'];
$razonsocialUB = $_POST['razonsocialU'];
$codigopostalUB = $_POST['coloniaU'];
$calleUB = $_POST['calleU'];
$numeroexteriorUB = $_POST['numeroexteriorU'];
$numerointeriorUB = $_POST['numerointeriorU'];
$entrecallesUB = $_POST['entrecallesU'];
$idMunicipioUB = $_POST['idMunicipio'];
$descripcionempresaUB = $_POST['descripcionempresaU'];
$mensajeempresaUB = $_POST['mensajeempresaU'];
$edadUB = $_POST['edadU'];
$sexoUB = $_POST['sexoU'];
$paginawebUB = $_POST['paginawebU'];
$nombreUB = $_POST['nombreU'];
$apellidosUB = $_POST['apellidosU'];
$cargoUB = $_POST['cargoU'];
$telefonotUB = $_POST['telefonotU'];
$telefonocUB = $_POST['telefonocU'];
$telefonopUB = $_POST['telefonopU'];
$fechaUB=date("d-m-Y");
$randomNum = substr(str_shuffle("0123456789"), 0, 10);








$institucion = "H. Ayuntamiento de San Mateo Atenco";
$urlmail ='http://localhost:8080/saresma/sarepara/sare1';

$destinatario = $telefonocUB;


// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = " smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "sanmateoatenco.bolsa@gmail.com";  // Mi cuenta de correo
$smtpClave = "STISaNmAtEo1234";  // Mi contraseña

$nombre = "H. Ayuntamiento San Mateo Atenco"; 





  



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
                <strong>FECHA DE REGISTRO:'     .$fechaUB.'</strong><br />
         </td>
            </tr>




              
            <tr>
              <td class="MsoNormal txt-center" style="color:#666666; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:14px; font-weight:400; line-height:24px;" data-color="Content" data-size="Content" data-min="12" data-max="33" align="left">
                <strong>EMPRESA:  '     .$descripcionempresaUB.'</strong><br />
                Por medio del presente le informamos que para que su registrado sea tomado en cuenta al sistema de Portal de Empleo devera validar el formato el cual se encuentra un BOTON el la parte inferior de Documento.</td>
            </tr>

<tr>
        <td height="10" align="left" style="text-align:justify;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size: 8px;">
          <tr>
      </tr>

<tr>
              <td class="MsoNormal txt-center" style="color:#666666; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:14px; font-weight:400; line-height:24px;" data-color="Content" data-size="Content" data-min="12" data-max="33" align="left">
                <strong>SU CORREO ES:     '    .$telefonocUB.'</strong><br />
         </td>
            </tr>
<tr>
              <td class="MsoNormal txt-center" style="color:#666666; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-size:14px; font-weight:400; line-height:24px;" data-color="Content" data-size="Content" data-min="12" data-max="33" align="left">
                <strong>SU CONTRASEÑA ES:    '    .$randomNum.'</strong><br />
         </td>
            </tr>






      <tr>
        <td height="10" align="left" style="text-align:justify;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;"><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size: 8px;">
          <tr>
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
              <td class="button-width" align="center">
                <table class="display-button" style="border-radius:5px;" data-bgcolor="Button-BG" cellspacing="0" cellpadding="0" border="0" bgcolor="#0d8b1c" align="center">
                  <tr>
                    <td class="MsoNormal" style="color:#ffffff; font-family:Segoe UI, Arial, Verdana, Trebuchet MS, sans-serif; font-weight:bold; padding:7px 15px; text-transform:uppercase; font-size:13px; letter-spacing:1px;" valign="middle" align="center">
                       <a href="'.$urlmail.'/validaempresa.php?codigo='.$tipodeempresaUB.'&tipodeempresaU='.$tipodeempresaUB.'&rfcU='.$rfcUB.'&razonsocialU='.$razonsocialUB.'&codigopostalU='.$codigopostalUB.'&calleU='.$calleUB.'&numeroexteriorU='.$numeroexteriorUB.'&numerointeriorU='.$numerointeriorUB.'&entrecallesU='.$entrecallesUB.'&idMunicipio='.$idMunicipioUB.'&idEstado='.$idEstadoUB.'&descripcionempresaU='.$descripcionempresaUB.'&mensajeempresaU='.$mensajeempresaUB.'&edadU='.$edadUB.'&sexoU='.$sexoUB.'&paginawebU='.$paginawebUB.'&nombreU='.$nombreUB.'&apellidosU='.$apellidosUB.'&cargoU='.$cargoUB.'&telefonotU='.$telefonotUB.'&telefonocU='.$telefonocUB.'&telefonopU='.$telefonopUB.'&fechaU='.$fechaUB.'&contrapas='.$randomNum.'" style="text-decoration:none; color:#ffffff;" data-color="Button-Text" data-size="Button-Text" data-min="12" data-max="33">VALIDAR REGISTRO</a>
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

  
      echo"<script type=\"text/javascript\">alert('A hora solo verifica tu correo GRACIAS!!'); window.location='index.php';</script>";


} else {
    echo "Ocurrió un error inesperado.";
}
































?>
