<?php
  $menu = '1';
  $submenu = '1';
?>
<?php include("header.php");?>

        <!-- ============================================
        =================== Breadcrumbs =================
        ============================================= -->
        <section id="breadcrumbs" class="breadcrumbs-sm">

            <div class="container clearfix">
                <h1>Registro en el Sistema</h1>
            </div>

        </section><!-- #breadcrumbs end -->
        
           <!-- ============================================
        =================== Content =====================
        ============================================= -->

        <section id="content">


            <div class="content-wrap">

                <!-- ============ Sección de registro ============ -->
                <div class="container clearfix">

                    <div class="row">

                   

                        <div class="col-md-9">
                        
                        	<div class="heading-block mb-40">
                                <h2 class="text-uppercase"><span class="text-theme">Registro de</span> usuario</h2>
                                <h4 class="panel-title">Su registro en el sistema le servirá para realizar el trámite de apertura de su negocio</h4>
                            </div>
							
                            <div id="contenedorForma">
                           <form id="formaRegistro">
                           		<div class="heading-block mb-10">
                           		<h2 class="panel-title text-theme">DATOS</h2>
                           		</div>
                               
                                
                               
                                
                          		
                            
                             
                                 
                                 <div class="row">
                                 	<div class="form-group col-sm-4">
                                        <label for="pais">Pais <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="pais" id="pais" value="México" disabled/>
                                        <input type="hidden" name="idPais" value="1" id="idPais"/>
									</div>
                                    <div class="form-group col-sm-4">
                                        <label for="idEstado">Estado <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idEstado" id="idEstado" class="form-control" required>
                                            
                                           
                                             <?php include("lib/estados1.php") ?>
										</select>

                                    </div>
                                    
                                    <div class="form-group col-sm-4" id="ContMunicipio">
                                        <label for="idMunicipio">Municipio <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idMunicipio" id="idMunicipio" class="form-control" required>
                                            <option value="0"> ----- Seleccionar ----- </option>
                                                <option value="1"></option>
                                                
										</select>
									</div>
                                    
                                 </div>
                                 
                             
                                 
                               
          						
                             
                                
                             
			
                                
                              


                <button type="submit" id="btnsend" class="myBtn myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10">Registrarme</button>
                                
                                



                            </form>
                            </div>
                            

                            
                            
                           


                        </div>

                    </div>

                </div>
                <!-- ============ /Contact section ============ -->

            </div>

        </section><!-- #content end -->
        
        <?php include("footer.php");?>
        
        
        <script type="text/javascript">
			
			
			function habilitar()
{ 

    var correoz =dodument.getElementById("emailU1");
    var correoz2 =dodument.getElementById("confirmaCorreoElectronicoU1");


    if(correoz.value =='')
    {
        correoz2.disabled = false;

    }



}



		
        </script>

</body>
</html>
