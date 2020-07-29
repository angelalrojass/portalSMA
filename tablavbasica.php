<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plantilla Bienvenida</title>
<?php  

$hola=$_GET["no"];
//$hola="11";


 $connect = mysqli_connect("localhost", "root", "", "smaempleo");  
 //$query = "SELECT * FROM vacanteb where id_vacante = '$hola' ";
 $query = "SELECT * FROM vacanteb INNER JOIN sexot on vacanteb.id_sexo= sexot.id_sexo INNER JOIN civilt on vacanteb.id_civil= civilt.id_civil INNER JOIN coloniat on vacanteb.id_colonia= coloniat.id_colonia INNER JOIN carrerat on vacanteb.id_carrera= carrerat.id_carrera INNER JOIN especialidadt on carrerat.id_especialidadb= especialidadt.id_especialidadb INNER JOIN postalt on coloniat.idtip= postalt.idtip INNER JOIN licenciat on vacanteb.id_licencia= licenciat.id_licencia INNER JOIN gradot on vacanteb.id_grado= gradot.id_grado INNER JOIN inglest on vacanteb.id_ingles= inglest.id_ingles INNER JOIN motivo on vacanteb.id_motivo= motivo.id_motivo WHERE vacanteb.id_vacante='$hola'";  
 $result = mysqli_query($connect, $query);  
 ?> 
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
                  <td class="Heading" style="color:#333333; font-family:Segoe UI, Helvetica Neue, Arial, Verdana, Trebuchet MS, sans-serif; font-weight:600; font-size:18px; line-height:38px; letter-spacing:1px;" data-color="Title" data-size="Title" data-min="12" data-max="60" align="center">VACANTE</td>
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
                          <img src="http://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2017/02/26/dsRWv0kDOjlLHIbnf1E2V6pM/mad/images/71x13.png" alt="71x13" style="margin:0; border:0; padding:0; width:100%; height:auto;" width="71" />
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              

                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  




                                <tr>
        <td height="60" align="center" valign="middle"  style="font-size:12px; text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5;"><br /><br /><strong><?php echo $row["nombreb"]?>   <?php echo $row["apellido2b"]?></strong><br />
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
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["apellido1b"]?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">SEGUNDO APELLIDO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["apellido2b"]?></td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">NOMBRE(S): </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["nombreb"]?></td>
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
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["sexob"]?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom" style="color: #565656; font-size: 8px;">TELEFONO CELULAR: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["telefonocb"]?></td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">CORREO: </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["correob"]?></td>
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
        <td width="700" height="35" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:10px; font-weight:300; background-color:#e6e6e6;"><br /><br><strong>PROFECIÓN</strong></td>
      </tr>
      <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" style="text-align:justify;;"><table width="700" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="120" height="10" style="color: #565656; font-size: 8px;">TITULO DE MI CURRICULO:</td>
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["tcurriculo"]?></td>
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
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["objetivob"]?></td>
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
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["especialidadb"]?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="70" height="10" valign="bottom" style="color: #565656; font-size: 8px;">SUBAREA DE ESPECIALIDAD: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $row["carrerab"]?></td>
          </tr>
        </table></td>
      </tr>

  <tr>
        <td height="10" align="left" style="text-align:justify;;">&nbsp;</td>
      </tr>
      
     
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>













   </tr>             
                
                               <?php  
                              }
                               ?> 
              
                <tr>
                  <td height="20">
                  </td>
                </tr>
                <tr>
                  <td class="button-width" align="center">
                    <table class="display-button" style="border-radius:5px;" data-bgcolor="Button-BG" cellspacing="0" cellpadding="0" border="0" bgcolor="#0d8b1c" align="center">
                      <tr>
                     
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
                          &copy; Copyright 2017 H. Ayuntamiento Constitucional de San Mateo Atenco
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

