<?php
session_start();
include 'holasolo.php';

if(isset($_SESSION['user'])){

  echo"";
}else{


//echo'<script> windows.location="listae.php"; </script>;';

}



?> 


<?php
 $connect = mysqli_connect("localhost", "root", "", "smaempleo");  
 //$query = "SELECT * FROM `vacanteb` WHERE fecha BETWEEN '19-01-2019' AND '19-01-2019'";
 $query = "SELECT id_empresa, mensajeb, carrerat.carrerab,especialidadt.especialidadb, edad, sexot.sexob, coloniat.municipiob FROM empresa INNER JOIN carrerat on empresa.id_carrera= carrerat.id_carrera INNER JOIN sexot on empresa.id_sexo= sexot.id_sexo INNER JOIN coloniat on empresa.id_colonia= coloniat.id_colonia INNER JOIN especialidadt on carrerat.id_especialidadb= especialidadt.id_especialidadb";  
 $result = mysqli_query($connect, $query);  
 ?> 
<?php include("header.php");?>

        <!-- ============================================
        =================== Breadcrumbs =================
        ============================================= -->
        <section id="breadcrumbs" class="breadcrumbs-sm">

          
        </section><!-- #breadcrumbs end -->
        
           <!-- ============================================
        =================== Content =====================
        ============================================= -->

        <section id="content">


            <div class="content-wrap">

                <!-- ============ Sección de registro ============ -->
                <div class="container clearfix">

                    <div class="row">

                      <div class="col-md-3">

                            <div class="heading-block mb-60">
                                <h4 class="text-uppercase">Opciones</h4>
                            </div>

                             <ul class="nav nav-list primary push-bottom">
                             <li ><a href="index.html">INICIO</a></li>
                               <li><a href="registrocasaempresa1.php">REGISTRARTE</a></li>
                             </ul>
                            
                            

                        </div>

                        <div class="col-md-9">
                        
                          <div class="heading-block mb-40">
                                <h2 class="text-uppercase"><span class="text-theme">LISTA DE EMPRESAS</span> </h2>
                                <h4 class="panel-title"></h4>
                            </div>
              
                            <div id="contenedorForma">
                           <form id="formaRegistro">
                              
                               
                                
                                <div class="row">
                                
                                
                              
                              
                                    
                                  
                            </div>
                                           
                                

  <div class="row">
                                    
                                   



<table class="table table-bordered" border="10" >  
                               <tr>  
                                    <th width="70%"><center>DATOS DE EMPRESA</center></th>  
                                    <th width="15%">VER</th>  
                               </tr> 
                                <tr>  
                                    <th width="70%"><center>VACANTE / ESCOLARIDAD / EDAD / SEXO / MUNICIPIO
                                     </center> </th>  
                               </tr> 
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                
                                     <td><center><?php echo $row["mensajeb"]?>/<?php echo $row["carrerab"]?>-<?php echo $row["especialidadb"]?>/<?php echo $row["edad"]?>/<?php echo $row["sexob"]?>/<?php echo $row["municipiob"]?></center>
                                                            
                                    </td>   
                                   <td>
                                      <a href='tabla2.php?no=<?php echo $row["id_empresa"]; ?>'><button type="button" class="btn-success">VER</button>

                                    </td>
                                

</tr>  
                               <?php  
                               }  
                               ?>  
                          </table> 

                                   
                                    
                                </div>
 
                          



                            </form>
                            </div>
                            
                            <div id="gracias"></div>
                            

</div>
      </div>

</div>
</div>
</section>

                   
        <?php include("footer.php");?>
        
        

</body>
</html>
