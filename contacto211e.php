<?php


$civilUB = $_GET['codigo'];


 $connect = mysqli_connect("localhost", "root", "", "smaempleo");  
 $query = "SELECT id_vacante, tcurriculo, titulogradob, edadb,sexot.sexob, civilt.civilb, coloniat.coloniab, coloniat.municipiob FROM vacanteb INNER JOIN carrerat on vacanteb.id_carrera= carrerat.id_carrera INNER JOIN civilt on vacanteb.id_civil= civilt.id_civil INNER JOIN sexot on vacanteb.id_sexo= sexot.id_sexo INNER JOIN coloniat on vacanteb.id_colonia= coloniat.id_colonia INNER JOIN especialidadt on carrerat.id_especialidadb= especialidadt.id_especialidadb WHERE vacanteb.id_carrera='$civilUB'";  
 $result = mysqli_query($connect, $query);  
 ?> 
 
<?php include("header.php");?>
   <!-- ============================================
        =================== Content =====================
        ============================================= -->

        <section id="content">


          


            <div class="content-wrap">

                <!-- ============ Contact section ============ -->
                <div class="container clearfix">

                    <div class="row">

                        <div class="col-md-8">

                            <div class="heading-block mb-60">
                                <h2 class="text-uppercase"><span class="text-theme">Lista de VACANTES DE A CUERDO A LA CARRERA</span></h2>
                            </div>

                          <table class="table table-bordered">  
                               <tr>  
                                   <center> <th width="70%">DATOS DE VACANTE</th></center>  
                                   <center> <th width="15%">VER</th></center>  
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
                                    <td><?php echo $row["tcurriculo"]?>/<?php echo $row["titulogradob"]?>/<?php echo $row["edadb"]?>/<?php echo $row["sexob"]?>/<?php echo $row["civilb"]?>/<?php echo $row["municipiob"]?>
                                                            
                                    </td>  
                                    <td>
                                      <a href='tabla1.php?no=<?php echo $row["id_vacante"]; ?>'><button type="button" class="btn-success">VER</button>
                                    </td>                               
</tr>  
                               <?php  
                               }  
                               ?>  
                          </table> 

                           

                            

                        </div>

                        <div class="col-md-4">

                            <div>

                                <address>
                                    <strong class="text-theme">Avenida Juárez No. 302<BR>Barrio de San Miguel<BR>CP. 52100<BR>San Mateo Atenco, Estado de México</strong>
                                    

                                    <strong class="block mt-20">Teléfono:</strong>
                                            <br> Tel (722) 69 0 40 60
                                                           <br>69 0 40 61

                                    

                                    <div class="social mt-40 mb-60">
                                        <a class="social-icon social-facebook" href="https://www.facebook.com/AyuntamientoDeSanMateoAtenco/">
                                            <div class="front">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                            <div class="back">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                        </a>

                                        <a class="social-icon social-twitter" href="https://twitter.com/HSanMateoAtenc">
                                            <div class="front">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                            <div class="back">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                        </a>

                                        
                                    </div>
                                </address>

                                
                            </div>

                        </div>

                    </div>

                </div>
                <!-- ============ /Contact section ============ -->

            </div>

        </section><!-- #content end -->
        
        <?php include("footer.php");?>
</body>
</html>
