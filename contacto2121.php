<?php include("header.php");?>
<?php
require_once("config11.php");


$civilUB = $_GET['codigo'];

$conexion = new MySQLi($server,$user,$password,$database);



if ($result = mysqli_query($conexion, "SELECT * FROM empresa INNER JOIN carrerat on empresa.id_carrera= carrerat.id_carrera INNER JOIN especialidadt on carrerat.id_especialidadb= especialidadt.id_especialidadb WHERE especialidadt.id_especialidadb='$civilUB'
")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);

  
  
  if($row_cnt == 0)
  {
     // SI NO EXITE

     header("Location: http://localhost:8080/saresma/sarepara/sare/contacto3.php");
     
      
            //SI EXISTE

    }else{


      header("Location: http://localhost:8080/saresma/sarepara/sare/contacto212.php?codigo=$civilUB");

     

    }

    //printf("El resultado tiene %d filas.\n", $row_cnt);cod

    /* cerrar el resulset */
    mysqli_free_result($result);
}




 
 ?> 
 

   <!-- ============================================
        =================== Content =====================
        ============================================= -->

        
        <?php include("footer.php");?>

