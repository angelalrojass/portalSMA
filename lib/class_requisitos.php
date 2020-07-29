<?php

include("config.php");

/* Previene acceso directo a esta página */
/*$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if(!$isAjax) {
  $user_error = 'Acceso denegado - direct call is not allowed...';
  trigger_error($user_error, E_USER_ERROR);
}
ini_set('display_errors',1);
 
/* if the 'term' variable is not sent with the request, exit */
$idr = $_REQUEST['idr'];

 
$mysqli = new MySQLi($server,$user,$password,$database);
 
/* Connect to database and set charset to UTF-8 */
if($mysqli->connect_error) {
  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $mysqli->set_charset('utf8');
}
 
/* retrieve the search term that autocomplete sends */
//$idr = trim(strip_tags($idr)); 
/* replace multiple spaces with one */
//$idr = preg_replace('/\s+/', ' ', $idr);
 

/* ***************************************************************************** */
 
/*if ($data = $mysqli->query("SELECT descripcion FROM categorias_licencias WHERE id ='$idr'")) {
	while($row = mysqli_fetch_array($data)) {
		$giro = htmlentities(stripslashes($row['descripcion']));
	}
}*/

$query = "SELECT * FROM categorias_licencias WHERE id='$idr'";

$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		$giro = $row['descripcion'];
		$riesgo= $row['riesgo'];
	}
} 

setcookie("giro_sol", $idr,time()+3600);


?>

<div class="col-md-12">
	<div class="featured-box featured-box-secundary">
		<div class="box-content">
			<h4>Requisitos para licencia de funcionamiento</h4>
			<p>El Giro que consultó es: <br /><strong><?php echo $giro ?></strong><br />
               <? 
			   if($riesgo == 1) {
				  $riesgo = 'BAJO RIESGO';
				  $leyenda = 1;
				} else if ($riesgo == 2){
					  $riesgo = 'MEDIO-ALTO RIESGO';
					} else {
						$riesgo = 'NO SE CONSIDERA';
				}
			   
			   echo $riesgo ?></p>
               
			<hr />
             <h5>Requisitos si eres Persona Física</h3>
             <?
			 	$query = "SELECT * FROM req_per_fis WHERE id_cat='$idr'";
				
				$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
				
				if($result) {
					while($row = mysqli_fetch_assoc($result)) {
						$req01 = $row['rfp_01'];
						$req02 = $row['rfp_02'];
						$req03 = $row['rfp_03'];
						$req04 = $row['rfp_04'];
						$req05 = $row['rfp_05'];
						$req06 = $row['rfp_06'];
						$req07 = $row['rfp_07'];
						$req08 = $row['rfp_08'];
						$req09 = $row['rfp_09'];
						$req10 = $row['rfp_10'];
						$req11 = $row['rfp_11'];
						$req12 = $row['rfp_12'];
						$req13 = $row['rfp_13'];
						$req14 = $row['rfp_14'];
						$req15 = $row['rfp_15'];
						$req16 = $row['rfp_16'];
						$req17 = $row['rfp_17'];
						$req18 = $row['rfp_18'];
						$req19 = $row['rfp_19'];	
					}
				} 
				echo '<ul class="list icons list-unstyled">';
				if($req01 == 1){
					$req01 = 'Identificación Oficial Vigente del Solicitante y/o Apoderado Legal';
					echo '    <li><i class="fa fa-check"></i>'.$req01.'</li>';
				} 
				if($req02 == 1){
					$req02 = 'Comprobante de Domicilio';
					echo '    <li><i class="fa fa-check"></i>'.$req02.'</li>';
				} 
				if($req03 == 1){
					$req03 = 'Carta compromiso de Protección Civil';
					echo '    <li><i class="fa fa-check"></i>'.$req03.'</li>';
				}
				if($req04 == 1){
					$req04 = 'Visto bueno de la dirección de Obras Públicas y Desarrollo Urbano';
					echo '    <li><i class="fa fa-check"></i>'.$req04.'</li>';
				}
				if($req05 == 1){
					$req05 = 'Visto buena de la Dirección de Medio Ambiente';
					echo '    <li><i class="fa fa-check"></i>'.$req05.'</li>';
				}
				if($req06 == 1){
					$req06 = 'Licencia de Uso de Suelo';
					echo '    <li><i class="fa fa-check"></i>'.$req06.'</li>';
				}
				if($req07 == 1){
					$req07 = 'Autorización de Impacto Ambiental';
					echo '    <li><i class="fa fa-check"></i>'.$req07.'</li>';
				}
				if($req08 == 1){
					$req08 = 'Redistro de Aguas Residuales';
					echo '    <li><i class="fa fa-check"></i>'.$req08.'</li>';
				}
				if($req09 == 1){
					$req09 = 'Registro de Emisiones a la Atmósfera';
					echo '    <li><i class="fa fa-check"></i>'.$req09.'</li>';
				}
				if($req10 == 1){
					$req10 = 'Comprobante de Residuos Industriales no peligrsos';
					echo '    <li><i class="fa fa-check"></i>'.$req10.'</li>';
				}
				if($req11 == 1){
					$req11 = 'Comprobante del correcto manejo y disposición final de los residuos no peligrosos';
					echo '    <li><i class="fa fa-check"></i>'.$req11.'</li>';
				}
				if($req12 == 1){
					$req12 = 'Dicatmen de Impacto Regional';
					echo '    <li><i class="fa fa-check"></i>'.$req12.'</li>';
				}
				if($req13 == 1){
					$req13 = 'Fotografías de la fachada y del interior del inmueble';
					echo '    <li><i class="fa fa-check"></i>'.$req13.'</li>';
				}
				if($req14 == 1){
					$req14 = 'Opinion emitida por la autoridad auxiliar correspondiente';
					echo '    <li><i class="fa fa-check"></i>'.$req14.'</li>';
				}
				if($req15 == 1){
					$req15 = 'Acreditación del establecimiento con el cumplimiento de las condiciones de Higiene y Seguridad';
					echo '    <li><i class="fa fa-check"></i>'.$req15.'</li>';
				}
				if($req16 == 1){
					$req16 = 'Acreditación de la instalación de aislantes de sonido';
					echo '    <li><i class="fa fa-check"></i>'.$req16.'</li>';
				}
				if($req17 == 1){
					$req18 = 'Acreditación de la instalación de sistemas visibles';
					echo '    <li><i class="fa fa-check"></i>'.$req18.'</li>';
				}
				if($req19 == 1){
					$req19 = 'Evidencia documental y fotográfica de las medidas anti tabaco';
					echo '    <li><i class="fa fa-check"></i>'.$req19.'</li>';
				}
				
				echo '</ul>';
			?>
            <hr />
            <h5>Requisitos si eres Persona Moral</h3>
				 <?
			 	$query = "SELECT * FROM req_per_mor WHERE id_cat='$idr'";
				
				$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
				
				if($result) {
					while($row = mysqli_fetch_assoc($result)) {
						$req01 = $row['rpm_01'];
						$req02 = $row['rpm_02'];
						$req03 = $row['rpm_03'];
						$req04 = $row['rpm_04'];
						$req05 = $row['rpm_05'];
						$req06 = $row['rpm_06'];
						$req07 = $row['rpm_07'];
						$req08 = $row['rpm_08'];
						$req09 = $row['rpm_09'];
						$req10 = $row['rpm_10'];
						$req11 = $row['rpm_11'];
						$req12 = $row['rpm_12'];
						$req13 = $row['rpm_13'];
						$req14 = $row['rpm_14'];
						$req15 = $row['rpm_15'];
						$req16 = $row['rpm_16'];
						$req17 = $row['rpm_17'];
						$req18 = $row['rpm_18'];
						$req19 = $row['rpm_19'];
						
					}
				} 
				echo '<ul class="list icons list-unstyled">';
				if($req01 == 1){
					$req01 = 'Identificación Oficial Vigente del Solicitante y/o Apoderado Legal';
					echo '    <li><i class="fa fa-check"></i>'.$req01.'</li>';
				} 
				if($req02 == 1){
					$req02 = 'Comprobante de Domicilio';
					echo '    <li><i class="fa fa-check"></i>'.$req02.'</li>';
				} 
				if($req03 == 1){
					$req03 = 'Carta compromiso de Protección Civil';
					echo '    <li><i class="fa fa-check"></i>'.$req03.'</li>';
				}
				if($req04 == 1){
					$req04 = 'Visto Bueno de la Dirección de Obras Públicas y Desarrollo Urbano';
					echo '    <li><i class="fa fa-check"></i>'.$req04.'</li>';
				}
				if($req05 == 1){
					$req05 = 'Visto Bueno de la Dirección de Medio Ambiente';
					echo '    <li><i class="fa fa-check"></i>'.$req05.'</li>';
				}
				if($req06 == 1){
					$req06 = 'Copia de Acta Constitutiva';
					echo '    <li><i class="fa fa-check"></i>'.$req06.'</li>';
				}
				if($req07 == 1){
					$req07 = 'Identifiación Oficial del Representante Legal';
					echo '    <li><i class="fa fa-check"></i>'.$req07.'</li>';
				}
				if($req08 == 1){
					$req08 = 'Licencia de Uso de Suelo';
					echo '    <li><i class="fa fa-check"></i>'.$req08.'</li>';
				}
				if($req09 == 1){
					$req09 = 'Autorización de Impacto Ambiental';
					echo '    <li><i class="fa fa-check"></i>'.$req09.'</li>';
				}
				if($req10 == 1){
					$req10 = 'Registro de Aguas Residuales';
					echo '    <li><i class="fa fa-check"></i>'.$req10.'</li>';
				}
				if($req11 == 1){
					$req11 = 'Registro de Emisiones a la Atmósfera';
					echo '    <li><i class="fa fa-check"></i>'.$req11.'</li>';
				}
				if($req12 == 1){
					$req12 = 'Comprobante de Residuos Industriales no Peligrosos';
					echo '    <li><i class="fa fa-check"></i>'.$req12.'</li>';
				}
				if($req13 == 1){
					$req13 = 'Dictamen de Impacto Regional';
					echo '    <li><i class="fa fa-check"></i>'.$req13.'</li>';
				}
				if($req14 == 1){
					$req14 = 'Fotografías de la fachada y del interior del inmueble';
					echo '    <li><i class="fa fa-check"></i>'.$req14.'</li>';
				}
				if($req15 == 1){
					$req15 = 'Opinion emitida por la autoridad auxiliar correspondiente';
					echo '    <li><i class="fa fa-check"></i>'.$req15.'</li>';
				}
				if($req16 == 1){
					$req16 = 'Acreditación del establecimiento con el cimplimiento de las condiciones de higiene y seguridad';
					echo '    <li><i class="fa fa-check"></i>'.$req16.'</li>';
				}
				if($req17 == 1){
					$req18 = 'Acreditación de la instalación de aislantes de sonido';
					echo '    <li><i class="fa fa-check"></i>'.$req18.'</li>';
				}
				if($req19 == 1){
					$req19 = 'Acreditación de la instalación de sistemas visibles';
					echo '    <li><i class="fa fa-check"></i>'.$req19.'</li>';
				}
				if($req20 == 1){
					$req20 = 'Evidencia ducumental y fotográfica de las medidas anti tabaco';
					echo '    <li><i class="fa fa-check"></i>'.$req20.'</li>';
				}
				
				echo '</ul>';
			?>  
            <hr />
            <?
			if($leyenda == 1) {
				 echo '<p>En caso de cumplir con todos los requisitos, el tiempo máximo para recibir la licencia es de 3 días hábiles, por ser un negocio de bajo riesgo.<br><br><img src="session/lib/img/sare.png" width="98" height="46" /></p>';
				}
			?>
           
<p>Inicia tu registro Ahora!</p>

<p> <a href="registro.php" class="btn btn-lg btn-primary push-top">Registrarme</a></p>
		</div>
	</div>
</div>

<?
$mysqli->close();
?>