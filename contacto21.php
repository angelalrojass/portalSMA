<?php
 $connect = mysqli_connect("localhost", "root", "", "portal-e");  
 $query = "SELECT * FROM vacanteb";  
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
                                <h2 class="text-uppercase"><span class="text-theme">Ponte en </span> contacto</h2>
                            </div>

                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="70%">ESPECIALIDAD/ESCOLARIDAD/SEXO/MUNICIPIO</th>  
                                    <th width="15%">VER</th>  
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["idEstado"]?>-<?php echo $row["IdMunicipio"]?>/<?php echo $row["gradoacademicob"]?>-<?php echo $row["titulocurriculob"]?>/
                                         <?php echo $row["sexob"]?>/<?php echo $row["coloniab"]?>
                                                            
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
