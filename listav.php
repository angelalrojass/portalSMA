<?php
 $connect = mysqli_connect("localhost", "root", "", "smaempleo");  
 //$query = "SELECT * FROM `vacanteb` WHERE fecha BETWEEN '19-01-2019' AND '19-01-2019'";
 $query = "SELECT id_vacante, tcurriculo, titulogradob, edadb,sexot.sexob, civilt.civilb, coloniat.coloniab, coloniat.municipiob FROM vacanteb INNER JOIN carrerat on vacanteb.id_carrera= carrerat.id_carrera INNER JOIN civilt on vacanteb.id_civil= civilt.id_civil INNER JOIN sexot on vacanteb.id_sexo= sexot.id_sexo INNER JOIN coloniat on vacanteb.id_colonia= coloniat.id_colonia INNER JOIN especialidadt on carrerat.id_especialidadb= especialidadt.id_especialidadb";  
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
                               <li><a href="registrocasa3122.php">REGISTRARTE</a></li>
                             </ul>
                            

                        </div>

                        <div class="col-md-9">
                        
                          <div class="heading-block mb-40">
                                <h2 class="text-uppercase"><span class="text-theme">LISTA DE VACANTES </span> </h2>
                                <h4 class="panel-title"></h4>
                            </div>
              
                            <div id="contenedorForma">
                           <form id="formaRegistro">
                              
                               
                                
                                <div class="row">
                                
                                
                              
                              
                                    
                                  
                            </div>
                                           
                                

  <div class="row">
                                    
                                   



<table class="table table-bordered" border="10" >  
                              <tr>  
                                    <th width="70%"><center>DATOS DE VACANTE</center></th> 
                                    <th width="15%"><center>VER</center></th>  
                               </tr>
                               <tr>  
                                    <th width="70%">TITULO CURRICULUM / TITULO DE GRADO / EDAD / SEXO / ESTADO CIVIL / MUNICIPIO 
                                      </th>  
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                
                                     <td><center><?php echo $row["tcurriculo"]?>/<?php echo $row["titulogradob"]?>/<?php echo $row["edadb"]?>/<?php echo $row["sexob"]?>/<?php echo $row["civilb"]?>/<?php echo $row["municipiob"]?></center>
                                                            
                                    </td> 

                                    
                                    <td>
                                      <a href='tablavbasica.php?no=<?php echo $row["id_vacante"]; ?>'><button type="button" class="btn-success">
                                        <center>VER</center></button>

                                        


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
