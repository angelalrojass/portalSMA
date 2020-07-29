<?php
include("consmaempleo.php");
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

if ($result = mysqli_query($link, "SELECT * FROM postalt WHERE codigopostalr='$CodPostal'")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);
    if( $row_cnt)
    {

        if ($result = mysqli_query($link, "SELECT * FROM `postalt` postalt JOIN `coloniat` coloniat on postalt.idtip = coloniat.idtip WHERE codigopostalr='$CodPostal'")) {

        /* determinar el número de filas del resultado */

        $row_cnt = mysqli_num_rows($result);
        
            
            

            echo '<label for="coloniaU"id="sms">Colonia</label>';
            echo '<select name="coloniaU" id="coloniaU" class="form-control" required>';
            echo '<option value=""> ----- Seleccionar ----- </option>';
        
            while($row = mysqli_fetch_assoc($result)) {
            
            $asentamiento  = $row['coloniab'];
            $asentamiento1  = $row['id_colonia'];
            
        
            
            echo '<option value="'.$asentamiento1.' ">'.$asentamiento.' </option>';
            



        } 
           
            echo '</select>';

           
 
        mysqli_free_result($result);

   

            
        
               
    } 


    }
    else
    {
    echo '<label for="coloniaU"><span class="text-lightred" style="font-size: 15px">no podras resgistrarte</span></label>';
    echo '<input type="text" class="form-control" name="coloniaU" id="coloniaU" value="no perteneces a la sona" disabled/>';

    
    
    }


 
     
    

    

}




    



?>