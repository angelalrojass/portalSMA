<?php
require_once("consmaempleo.php");


$idEstadoUB = $_POST["corrreopas"];
$tipodeempresaUB = $_POST["contrapas"];


$conexion = new MySQLi($server,$user,$password,$database);

if ($result = mysqli_query($conexion, "SELECT * FROM `empresa` WHERE `correob`='$idEstadoUB' and `contrasena`='$tipodeempresaUB'")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);

  
  
  if($row_cnt == 0)
  {
     // SI NO EXISTE HAS

 // header("Location: http://localhost:8080/saresma/sarepara/sare/lib/noexiste.php");
     
        // </script>';


 echo"<script type=\"text/javascript\">alert('DATOS INCORRECTOS'); window.location='http://localhost:8080/saresma/sarepara/sare/registrocasaempresa1.php';</script>";           


    }else{

  header("Location: http://localhost:8080/saresma/sarepara/sare/listavlogin.php");



     

    }

    //printf("El resultado tiene %d filas.\n", $row_cnt);cod

    /* cerrar el resulset */
    mysqli_free_result($result);
}


/* cerrar la conexión */





 ?>
