<?php


$civilUB = $_GET['codigo'];
//$civilUB = "21";
 $connect = mysqli_connect("localhost", "root", "", "smaempleo");  
 //$query = "SELECT * FROM `empresab` WHERE `idMunicipio`='$civilUB'";

 $query = "SELECT id_empresa, mensajeb, carrerat.carrerab,especialidadt.especialidadb, edad, sexot.sexob, coloniat.municipiob FROM empresa INNER JOIN carrerat on empresa.id_carrera= carrerat.id_carrera INNER JOIN sexot on empresa.id_sexo= sexot.id_sexo INNER JOIN coloniat on empresa.id_colonia= coloniat.id_colonia INNER JOIN especialidadt on carrerat.id_especialidadb= especialidadt.id_especialidadb WHERE carrerat.id_carrera='$civilUB'
";  
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
                                <h2 class="text-uppercase"><span class="text-theme">Lista de empresa de acuedo a la carrera</span> </h2>
                            </div>

                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="70%">DATOS DE EMPRESA</th>  
                                    <th width="15%">VER</th>  
                               </tr> 
                                <tr>  
                                    <th width="70%">VACANTE / ESCOLARIDAD / EDAD / SEXO / MUNICIPIO
                                      </th>  
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                              {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["mensajeb"]?>/<?php echo $row["carrerab"]?>-<?php echo $row["especialidadb"]?>/<?php echo $row["edad"]?>/<?php echo $row["sexob"]?>/<?php echo $row["municipiob"]?>
                                                            
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

                        <div class="col-md-4">

                            <div>

                                <address>
                                    <strong class="text-theme">Avenida Juárez No. 302<BR>Barrio de San Miguel<BR>CP. 52100<BR>San Mateo Atenco, Estado de México</strong>
                                    

                                    <strong class="block mt-20">Teléfono:</strong>
                                            <br> Tel (722) 69 0 40 60
                                                           <br>69 0 40 61

                                    

                                
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
