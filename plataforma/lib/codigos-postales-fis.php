<?php
include("../../lib/config.php");
include("../../lib/functions.php");
 
/* Previene acceso directo a esta página*/ 
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if(!$isAjax) {
  $user_error = 'Acceso denegado - direct call is not allowed...';
  trigger_error($user_error, E_USER_ERROR);
}

ini_set('display_errors',1);


// Recibimos el email
$CodPostal = sanitize($_POST['CodPostal']);


$link = mysqli_connect($server,$user,$password,$database);
$link->set_charset('utf8');

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM codigos_postales WHERE CodPos='$CodPostal'")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);
	
		 echo '<div class="form-group">';
		 echo '	<label for="ColoniaFis" class="col-sm-4 control-label">Colonia <span class="text-danger">*</span></label>';
		 echo '	<div class="col-sm-8">';
		 echo '<select class="form-control mb-10" id="ColoniaFis" name="ColoniaFis" tabindex="18" required>';
		 echo '<option>Seleccione...</option>';
	while($row = mysqli_fetch_assoc($result)) {
		$asentamiento  = $row['Asentamiento'];
		$colonia  = $row['Colonia'];
		$municipio  = $row['municipio'];
		$estado  = $row['estado'];
		
		echo '<option value="'.$asentamiento.' '.$colonia.'">'.$asentamiento.' '.$colonia.'</option>';

	} 
		echo '</select>';
		echo '	</div>';
		echo '</div>';
		
		echo '<div class="form-group">';
		echo '	<label for="municipio" class="col-sm-4 control-label">Municipio <span class="text-danger">*</span></label>';
		echo '	<div class="col-sm-8" id="municipio">';
		echo '		<input type="text" class="form-control" id="municipioFis" name="municipioFis" value="'.$municipio.'" disabled>';
		echo '	</div>';
		echo '</div>';
		echo '<div class="form-group">';
		echo '	<label for="estado" class="col-sm-4 control-label">Estado <span class="text-danger">*</span></label>';
		echo '	<div class="col-sm-8" id="estado">';
		echo '		<input type="text" class="form-control" id="estadoFis" name="estadoFis" value="'.$estado.'" disabled>';
		echo '	</div>';
		echo '</div>';
	

    //printf("El resultado tiene %d filas.\n", $row_cnt);

    /* cerrar el resulset */
    mysqli_free_result($result);
}

/* cerrar la conexión */
mysqli_close($link);


	





?>