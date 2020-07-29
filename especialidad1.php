<?php
include("consmaempleo.php");
include("functions.php");
 


$link = mysqli_connect($server,$user,$password,$database);
$link->set_charset('utf8');

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM especialidadt")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);

		echo '<option value="0"> ----- Seleccionar ----- </option>';
		
		while($row = mysqli_fetch_assoc($result)) {
		$idEstado  = $row['id_especialidadb'];
		$Estado  = $row['especialidadb'];

		
		echo '<option value="'.$idEstado.'">'.$Estado.'</option>';

	} 
		echo '</select>';

	

    //printf("El resultado tiene %d filas.\n", $row_cnt);

    /* cerrar el resulset */
    mysqli_free_result($result);
	
} else {
	
		 echo '<option value=""> ----- Seleccionar ----- </option>';

}

/* cerrar la conexión */
mysqli_close($link);


	





?>