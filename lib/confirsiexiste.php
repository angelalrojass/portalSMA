<?php
require_once("holasolosiexiste.php");
require_once("functions.php");


//$nombre = sanitize($_GET['no']);

$link = mysqli_connect($server,$user,$password,$database);

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT * FROM cliente WHERE id_lo='$nombre'")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);

 	
	
	if($row_cnt == 0)
	{
     // echo'        <label for="email">Email <span class="text-lightred" style="font-size: 15px">*</span></label>';


header("Location: http://localhost:8080/sare/contacto3.php");
        
       
             

    }else{
      

header("Location: http://localhost:8080/sare/contacto2.php");
        

    }

    //printf("El resultado tiene %d filas.\n", $row_cnt);

    /* cerrar el resulset */
    mysqli_free_result($result);
}

/* cerrar la conexión */
mysqli_close($link);


?>




