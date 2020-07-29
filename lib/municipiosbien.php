<?php
include("config1sma.php");
include("functions.php");
 
/* Previene acceso directo a esta página*/ 


ini_set('display_errors',1);


// Recibimos el email
$idEstado = "1";


$link = mysqli_connect($server,$user,$password,$database);
$link->set_charset('utf8');

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM especialidad WHERE id_especialidad='$idEstado'")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);
	
		 echo '<label for="idMunicipio">Municipios <span class="text-lightred" style="font-size: 15px">*</span></label>';
         echo '<select name="idMunicipio" id="idMunicipio" class="form-control" required>';
		 echo '<option value=""> ----- Seleccionar ----- </option>';
	
		while($row = mysqli_fetch_assoc($result)) {
		$idMunicipio  = $row['id_especialidad'];
		$Municipio  = $row['especialidadb'];

		
		echo '<option value="'.$idMunicipio.'">'.$Municipio.'</option>';

	} 
		echo '</select>';

	

    //printf("El resultado tiene %d filas.\n", $row_cnt);

    /* cerrar el resulset */
    mysqli_free_result($result);
	
} else {
	
		 echo '<label for="idMunicipio">Municipios <span class="text-lightred" style="font-size: 15px">*</span></label>';
         echo '<select name="idMunicipio" id="idMunicipio" class="form-control" required>';
		 echo '<option value=""> ----- Seleccionar ----- </option>';
		 echo '</select>';
}




/* cerrar la conexión */
mysqli_close($link);


	





?>