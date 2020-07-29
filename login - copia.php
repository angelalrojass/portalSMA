<?php

session_start();
include "holasolo.php";
if(isset($_SESSION['user'])){
echo'<script> windows.location="listae.php"; </script>;';
}


 ?>
<?php
require_once("consmaempleo.php");




$idEstadoUB = $_POST["corrreopas"];
$tipodeempresaUB = $_POST["contrapas"];


$conexion = new MySQLi($server,$user,$password,$database);

if ($result = mysqli_query($conexion, "SELECT * FROM `vacanteb` WHERE `id_vacante`='$idEstadoUB' and `edadb`='$tipodeempresaUB'")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);

  
  
  if($row_cnt == 0)
  {
     // SI NO EXISTE HAS

 // header("Location: http://localhost:8080/saresma/sarepara/sare/lib/noexiste.php");
     
        // </script>';


 echo"<script type=\"text/javascript\">alert('DATOS INCORRECTOS'); window.location='http://localhost:8080/saresma/sarepara/sare/registrocasaempresa1.php';</script>";           


    }else{
// SI EXISTE 
      $_SESSION["id_vacante"]= $row_cnt["id_vacante"];
      echo'iniciar secion'.$_SESSION["id_vacante"].'<p>';
      echo'<script> windows.location="listae.php"; </script>';


//   header("Location: http://localhost:8080/saresma/sarepara/sare/lib/siexiste.php");



     

    }

    //printf("El resultado tiene %d filas.\n", $row_cnt);cod

    /* cerrar el resulset */
    mysqli_free_result($result);
}


/* cerrar la conexión */





 ?>
