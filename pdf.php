<?php


require 'fpdf181/fpdf.php';
$pdf =new  FPDF();


$pdf->"

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
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $segudo_apellido_sol ?></td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">NOMBRE(S): </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $nombre_sol ?></td>
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
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $razon_social_sol ?></td>
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
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $tel_movil ?></td>
            <td width="9" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $tel_particular ?></td>
            <td width="9" height="10" valign="bottom">&nbsp;</td>
            <td width="100" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $tel_negocio ?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom"  style="color: #565656; font-size: 8px;">CORREO ELECTRÓNICO:</td>
            <td width="130" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $email ?></td>
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
            <td width="165" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $calle_sol ?></td>
            <td width="5" height="10" align="center">&nbsp;</td>
            <td width="60" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $no_exterior_sol ?></td>
            <td width="5" height="10">&nbsp;</td>
            <td width="60" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $no_interior_sol ?></td>
            <td width="5" height="10" >&nbsp;</td>
            <td width="215" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $colonia_sol ?></td>
            <td width="5">&nbsp;</td>
            <td width="60" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $cod_post_sol ?></td>
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
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $primer_apellido_rs ?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="108" height="10" valign="bottom"style="color: #565656; font-size: 8px;">SEGUNDO APELLIDO: </td>
            <td width="115" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $segundo_apellido_rs ?></td>
            <td width="10" height="10" valign="bottom"></td>
            <td width="82" valign="bottom" style="color: #565656; font-size: 8px;">NOMBRE(S): </td>
            <td width="140" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $nombre_rs ?></td>
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
            <td width="580" height="10" align="center" valign="middle" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $nombre_comercial ?></td>
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
            <td width="580" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $giro_col ?></td>
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
            <td width="165" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $calle_negocio ?></td>
            <td width="5" height="10" align="center" valign="bottom">&nbsp;</td>
            <td width="60" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $no_exterior_negocio ?></td>
            <td width="5" height="10" valign="bottom">&nbsp;</td>
            <td width="60" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $no_interior_negocio ?></td>
            <td width="5" height="10" valign="bottom" >&nbsp;</td>
            <td width="215" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $colonia_negocio ?></td>
            <td width="5" height="10" valign="bottom">&nbsp;</td>
            <td width="60" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $cod_post_negocio ?></td>
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
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $entrecalle_negocio ?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="70" height="10" valign="bottom" style="color: #565656; font-size: 8px;">Y LA CALLE: </td>
            <td width="250" height="10" align="center" valign="bottom" style="text-align:center;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $ylacalle_negocio ?></td>
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
                <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $Mts ?></td>
                <td width="10" height="10" valign="bottom">&nbsp;</td>
                <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO DE NIVELES</td>
                <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $arrenda ?></td>
                <td width="10" height="10" valign="bottom">&nbsp;</td>
                <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO DE CAJONES DE ESTACIONAMIENTO</td>
                <td width="105" height="10" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $comodata ?></td>
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
            <td width="105" height="10" valign="top" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $Mts ?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">INVERISÓN ESTIMADA</td>
            <td width="105" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $arrenda ?></td>
            <td width="10" height="10" valign="bottom">&nbsp;</td>
            <td width="120" height="10" valign="bottom" style="color: #565656; font-size: 8px;">NÚMERO DE EMPLEADOS</td>
            <td width="105" height="10" valign="bottom" style="text-align:center; border-top:1px solid #2a2a2a;  border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $comodata ?></td>
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

";
$pdf->Output();

?>