<?php
include("config.php");
include("functions.php");
 
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
	
		 echo '<label for="colonia">Colonia <span class="text-lightred" style="font-size: 15px">*</span></label>';
         echo '<select name="colonia" id="colonia" class="form-control" required>';
		 echo '<option value=""> ----- Seleccionar ----- </option>';
	
		while($row = mysqli_fetch_assoc($result)) {
		$asentamiento  = $row['Asentamiento'];
		$colonia  = $row['Colonia'];
		$municipio  = $row['municipio'];
		$estado  = $row['estado'];
		
		echo '<option value="'.$asentamiento.' '.$colonia.'">'.$asentamiento.' '.$colonia.'</option>';

	} 
		echo '</select>';

	

    //printf("El resultado tiene %d filas.\n", $row_cnt);

    /* cerrar el resulset */
    mysqli_free_result($result);
} else {
	
	echo '<label for="colonia">Colonia <span class="text-lightred" style="font-size: 15px">*</span></label>';
    echo '<input type="text" class="form-control" name="colonia" id="colonia" required/>';
}

/* cerrar la conexión */
mysqli_close($link);


	





?>