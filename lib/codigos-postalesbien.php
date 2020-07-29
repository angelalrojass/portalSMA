<?php
include("config1sma.php");
include("functions.php");
 


// Recibimos el email
$CodPostal = sanitize($_POST['CodPostal']);


$link = mysqli_connect($server,$user,$password,$database);
$link->set_charset('utf8');

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}
	//SELECT * FROM `codigopostal` codigopostal JOIN `colonia` colonia on codigopostal.id_colonia = colonia.id_colonia 
	if ($result = mysqli_query($link, "SELECT * FROM `codigopostal` codigopostal JOIN `colonia` colonia on codigopostal.id_colonia = colonia.id_colonia WHERE Codigopostalb='$CodPostal'")) {

	    /* determinar el número de filas del resultado */
	    $row_cnt = mysqli_num_rows($result);
		
			 echo '<label for="coloniaU">Colonia<span class="text-lightred" style="font-size: 15px">*</span></label>';
	         echo '<select name="coloniaU" id="coloniaU" class="form-control" required>';
			 echo '<option value=""> ----- Seleccionar ----- </option>';
		
			while($row = mysqli_fetch_assoc($result)) {
			
	 		$asentamiento  = $row['coloniab'];
	        $asentamiento1  = $row['municipiob'];
			
			echo '<option value="'.$asentamiento.' ">'.$asentamiento.' </option>';




		} 
			echo '</select>';
	        
	       
		

	    //printf("El resultado tiene %d filas.\n", $row_cnt);

	    /* cerrar el resulset */
	    mysqli_free_result($result);

	 
	} else {
	
	echo '<label for="coloniaU"><span class="text-lightred" style="font-size: 15px">hola</span></label>';
    echo '<input type="text" class="form-control" name="coloniaU" value="NO existe dato" disabled/>';

}

/* cerrar la conexión */
mysqli_close($link);


	





?>