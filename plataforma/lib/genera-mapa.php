<?php


    $src = 'https://maps.googleapis.com/maps/api/staticmap?center=José+Vicente+Villada+1507,Barrio+San+Lucas,Estado+de+México&zoom=18&size=600x400';
    $time = time();
    $desFolder = 'images/';
    $imageName = 'google-map_'.$time.'.PNG';
    $imagePath = $desFolder.$imageName;
    file_put_contents($imagePath,file_get_contents($src));
?>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
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
    <td height="400" align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; "><img src="<?php echo $imagePath; ?>"/></td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; ">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; "><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
      <tr>
        <td width="80" height="10" valign="bottom" style="color: #565656; font-size: 8px;"s>ENTRE CALLE: </td>
        <td width="265" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $pfisica ?></td>
        <td width="10" height="10" valign="bottom">&nbsp;</td>
        <td width="80" height="10" valign="bottom" style="color: #565656; font-size: 8px;">Y CALLE: </td>
        <td width="265" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $pmoral ?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; ">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; "><table width="700" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:10px;">
      <tr>
        <td width="145" height="10" valign="bottom" style="color: #565656; font-size: 8px;"s>&nbsp;</td>
        <td width="100" height="10" valign="bottom">&nbsp;</td>
        <td width="145" height="10" valign="bottom" style="color: #565656; font-size: 8px;">CLAVE CATASTRAL (OPCIONAL)</td>
        <td width="300" height="10" align="center" valign="bottom" style="text-align:center; border-top:1px solid #a5a5a5; border-bottom:1px solid #a5a5a5; border-left:1px solid #a5a5a5; border-right:1px solid #a5a5a5; font-size:10px; font-weight:700;"><?php echo $pmoral ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; ">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300;">La información que se almacena en este sitio, pública o privada, se inscribe dentro de las disposiciones que en la materia establece la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental, La Ley de Protección de Datos Personales y el Instituto Federal de Acceso a la informaciín y Protección de Datos.</td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; ">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:8px; font-weight:300; ">
    <ul>
    	<li>EL CIUDADANO PRESENTA ESTA SOLICITUD VOLUNTARIAMENTE, BAJO PROTESTA DE DECIR VERDAD Y MANIFIESTA QUE LOS DATOS CONTENIDOS SON VERIDICOS Y COMPROBABLES EN CUALQUIER MOMENTO.</li>
        <li>EL CIUDADANO DECLARA QUE LOS DOCUMENTOS QUE LO ACOMPAÑAN SON FIELMENTE REPRODUCIDOS DE SU ORIGINAL.</li>
        <li>EL CIUDADANO SEÑALA COMO DOMICILIO CONVENCIONAL PARA TODO LO REFERENTE AL PRESENTE FORMATO, EL REGISTRADO EN ESTA SOLUCITUD.</li>
        <li>EL CIUDADANO DECLARA SER EL RESPONSABLE DEL ESTABLECIMIENTO, NO OBSTANTE LLEVAR A CABO LA OPERACIÓN DEL MISMO A TRAVÉS DE TERCERAS PERSONAS.</li>
        <li>EL CIUDADANO MANIFIESTA QUE EL ESTABLECIMIENTO ESTÁ HABILITADO PARA CUMPLIR CON LAS FUNCIONES QUE SE ASIENTAN EN EL PRESENTE.</li>
        <li>EL CIUDADANO PRESENTARA EL AVISO DE FUNCIONAMIENTO DE SALUBRIDAD EN LOS CASOS QUE CORRESPONDA.</li>
    </ul>
    </td>
  </tr>
</table>
