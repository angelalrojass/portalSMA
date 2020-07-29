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

                      <div class="col-md-3">

                            <div class="heading-block mb-60">
                                <h4 class="text-uppercase">Opciones</h4>
                            </div>

                            <ul class="nav nav-list primary push-bottom">
                              <li class="<?php if ($submenu== '1'){ echo 'active'; } else {}    ?>"><a href="hola.php">Inicio</a></li>
                              
                            </ul>
                            

                        </div>

                        <div class="col-md-9">
                        
                        	<div class="heading-block mb-40">
                                <h2 class="text-uppercase"><span class="text-theme">Registro de</span> empresa</h2>
                                <h4 class="panel-title">Su registro en el sistema le servirá para realizar el trámite de apertura de su negocio</h4>
                            </div>
							
                            <div id="contenedorForma">
                           <form id="formaRegistro">
                           		
                               
                                
                                <div class="row">
                                
                                
                          			 <div class="heading-block mb-10">

                                        
                                        <h2 class="panel-title"><span class="text-theme">DATOS</span> DE IDENTIFICACIÓN </h2>
                                    </div>
                           		
                                    
                                	
                                  <div class="row">
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="tipodeempresaU">Tipo de Empresa<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="tipodeempresaU" id="tipodeempresaU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="Pública">Pública</option>
                                            <option value="Privada">Privada</option>
                                            <option value="Organismo no Gubernamental">Organismo no Gubernamental</option>
                                            <option value="Agencia y Outsourcing">Agencia y Outsourcing</option>
                                          </select>

                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="rfcU">RFC<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="rfcU" type="text" class="form-control myInput" id="rfcU" data-msg-required="Ingresa RFC" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="razonsocialU">Razón Social<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="razonsocialU" type="text" class="form-control myInput" id="razonsocialU" data-msg-required="Ingresa Razon Social" required>
                                    </div>
                                    
                                </div>
                            </div>
                               <div class="row">

                                <div class="heading-block mb-10">

                                        
                                    <h2 class="panel-title"><span class="text-theme">DOMICILIO</span> DEL EMPLEADOR </h2>
                                    </div>
                                	  
                                    <div class="form-group col-sm-4">
                                        <label for="codigopostalU">Código Postal <span class="text-lightred" style="font-size: 15px" >*</span></label>
                                        <input type='text' class="form-control" name="codigopostalU" id="codigopostalU" required/>
                                    </div>
                                    
                                    <div class="form-group col-sm-4" id="contColonia">
                                        <label for="coloniaU">Colonia <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="coloniaU" id="coloniaU" required/>
                                    </div>
                                     <div class="form-group col-sm-4" >
                                        <label for="telefonop11U"">Municipio o Alcadía <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="telefonop11U"" id="telefonop11U" />
                                   
                                    </div>

                    </div>            
                        </div>



                        
                                
                                   <div class="row">

                                     <div class="heading-block mb-10">

                                        
                                        <h2 class="panel-title"><span class="text-theme"></span> AMPLIAR DOMICILIO </h2>
                                    </div>
                          
                                    <div class="form-group col-sm-4" >
                                        <label for="calleU">Calle</label>
                                        <input type='text' class="form-control" name="calleU" id="calleU" />
                                    </div>
                           
                                    <div class="form-group col-sm-4">
                                        <label for="numeroexteriorU">Número Exterior</label>
                                        <input type='text' class="form-control" name="numeroexteriorU" id="numeroexteriorU" />
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="numerointeriorU">Número Interior</label>
                                        <input type='text' class="form-control" name="numerointeriorU" id="numerointeriorU" />
                                    </div>
                                 </div>

                                  <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="entrecallesU">Entre qué calles (tipo y nombre)</label>
                                        <input type='text' class="form-control" name="entrecallesU" id="entrecallesU" />
                                    </div>
                                </div>









                                  <div class="row">
                                    <div class="form-group col-sm-12">
                                     <p class="text-theme"><strong>IMPORTANTE: </strong>Asegúrate de proporcionar CORRECTAMENTE tu cuenta de correo electrónico PERSONAL, ya que será un medio de comunicación oficial contigo para el tema de Trámites y Servicios.</p>
                                     </div>
                                </div>




                                
									<hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">CLASIFICACIÓN</span></h2>
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
                                            
                                           
                                             <?php include("especialidad1.php") ?>
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


                                <div class="row">
                                    
                                   
                                   
                                    <div class="form-group col-sm-4">
                                        <label for="numeroempleadosU">Numero de empleados<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="numeroempleadosU" type="text" class="form-control myInput" id="numeroempleadosU" data-msg-required="Ingresa Numer de Empleados" required>
                                    </div>
                                    
                                </div>

                                  



                                    <hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">DESCRIPCIÓN </span> Y RECLUTAMIENTO</h2>
                                    </div>

                                <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="descripcionempresaU">Descripción de la empresa:</label>
                                        <input type='text' class="form-control" name="descripcionempresaU" id="descripcionempresaU" />
                                    </div>
                                </div>
                                 <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="mensajeempresaU">Mensaje breve a los candidatos a sus ofertas de empleo ¿Por qué formar parte de su equipo?:</label>
                                        <input type='text' class="form-control" name="mensajeempresaU" id="mensajeempresaU" />
                                    </div>
                                </div>
                              <div class="row">

                                    <div class="form-group col-sm-4" >
                                        <label for="paginawebU">Página web de la empresa:</label>
                                        <input type='text' class="form-control" name="paginawebU" id="paginawebU" />
                                    </div>
                           
                                    <div class="form-group col-sm-4" >
                                        <label ">Email <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="emailU" type="emailU" class="form-control myInput" id="emailU" >
                                    
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="comoenteroU">¿Cómo se enteró del SNE?:<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="comoenteroU" id="comoenteroU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="No hablo">No hablo</option>
                                            <option value="Basico">Basico</option>
                                            <option value="Intermedio">Intermedio</option>
                                            <option value="Avanzado">Avanzado</option>
                                            <option value="Lengua Nativa">Lengua Nativa</option>
                                        </select>

                                    </div>
                                 </div> 
                               






								
                
                                <hr>
                                <div class="row">

                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">DATOS DE PERSONA</span> DE CONTACTO </h2>
                                    </div>
                                  <div class="form-group col-sm-4">
                                        <label for="nombreU">Nombre:<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="nombreU" type="text" class="form-control myInput" id="nombreU" data-msg-required="Ingresa Nombre" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="apellidosU">Apellidos:<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="apellidosU" type="text" class="form-control myInput" id="apellidosU" data-msg-required="Ingresa Apellidos" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="cargoU">Cargo<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="cargoU" id="cargoU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="A">Director</option>
                                            <option value="B">Gerente</option>
                                            <option value="C">Jefe</option>
                                            <option value="D">Coordinador</option>
                                            <option value="D">Analista</option>
                                          </select>

                                    </div>
                                    



                                
			                  




    <hr>
                                  
                             
                                 
                                 
                                

                                

                               
                                    
</div>
  <div class="row">
                          
                                    <div class="form-group col-sm-4" >
                                        <label for="telefonotU">Teléfono Trabajo</label>
                                        <input type='text' class="form-control" name="telefonotU" id="telefonotU" />
                                    </div>
                           
                                    <div class="form-group col-sm-4">
                                        <label for="telefonocU">Teléfono Celular</label>
                                        <input type='text' class="form-control" name="telefonocU" id="telefonocU" />
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="telefonopU">Teléfono Particular</label>
                                        <input type='text' class="form-control" name="telefonopU" id="telefonopU" />
                                    </div>
                                 </div>





                                
                                


                                
                                


                                <button type="submit" id="btnsend" class="myBtn myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10">Registrarme</button>


                            </form>
                            </div>
                            
                            <div id="gracias"></div>
                            
                            
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Avíso de Privacidad</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Respetable Ciudadano:</h4>
                  <p>El presente Aviso de Privacidad es ordenado por el artículo 18 de la Ley de Protección de Datos Personales del Estado de México, y el mismo tiene como propósito informar que todos los datos proporcionados al Ayuntamiento de San Mateo Atenco de la manera establecida por el artículo 8 de la misma Ley, se encuentran salvaguardados y se le informa que:</p>
                  <p>El Ayuntamiento, a través de sus dependencias con domicilio ubicado en <span class="text-danger">Avenida Juárez No. 302, Barrio de San Miguel, CP. 52100, San Mateo Atenco, Estado de México</span> es responsable en el correcto manejo de los Datos Personales y/o Datos Personales Especialmente Protegidos, que las personas físicas le proporcionen, en virtud de la realización de un trámite y/o servicio, así como para la mejora de estos. Debiendo tomar en cuenta que, la negativa a proporcionarlos, impedirá que la dependencia o entidad competente pueda realizar las gestiones solicitadas por el ciudadano.</p>
                  <p>Para los propósitos ya señalados, el <span class="text-danger">Ayuntamiento de San Mateo Atenco</span> podrá recabar uno o varios de los siguientes Datos Personales que se enlistan a continuación:</p>
                  <ol>
                    <li>Nombre</li>
                    <li>Domicilio Particular</li>
                    <li>Teléfono fijo y/o celular</li>
                    <li>Correo Electrónico</li>
                    <li>Nacionalidad</li>
                    <li>Registro Federal de Contribuyentes</li>
                    <li>Clave Única de Registro de Población</li>
                    <li>Los demás que sean necesarios por la dependencia o entidad para la realización de un trámite y/o servicio. Es responsabilidad del Titular de la Información antes enlistada, garantizar que los datos que facilite directamente al Ayuntamiento de San Mateo Atenco sean veraces y completos, así como de notificar a éste último de cualquier modificación a los mismos para dar cumplimiento a la obligación de mantener la información actualizada.</li>
                  </ol>
                  <p>Los Titulares de la información proporcionada tendrán derecho a solicitar el acceso, rectificación, cancelación u oposición, de sus Datos Personales y/o Datos Personales Especialmente Protegidos; a través de solicitud de manera personal o por escrito.</p>
                  <p>El Ayuntamiento de San Mateo Atenco tomará las medidas de seguridad necesarias para el salvaguardo de la información proporcionada en base a lo establecido por el artículo 58 de la Ley ya citada.</p>
                  <p>En el supuesto de que el Ayuntamiento de San Mateo Atenco requiera usar sus Datos Personales y/o Datos Personales Especialmente Protegidos con fines distintos a los pactados o convenidos en el presente Aviso de Privacidad, se notificará al Titular en forma escrita, telefónica, electrónica, o por cualquier medio óptico, sonoro, visual u otro que la tecnología permita ahora o en lo futuro explicando los nuevos usos que pretenda darle a dicha información a fin de obtener su autorización.</p>
                  <p>Con el presente Aviso de Privacidad, los Titulares de la información quedan debidamente entendidos de los datos que se recabaron de ellos y los fines destinados para ellos, aceptando los términos contenidos en el presente Aviso de Privacidad, mismo que se ajusta a la Ley de Protección de Datos Personales del Estado de México. El Ayuntamiento de San Mateo Atenco, se reserva el derecho a modificar el presente Aviso de Privacidad para adaptarlo a la legislación aplicable. En dichos supuesto, se anunciará en la página de internet <a href="http://www.sanmateoatenco.gob.mx/">http://www.sanmateoatenco.gob.mx/</a>, los cambios de referencia y de manera visible en las oficinas de la Administración Pública Municipal de Teoloyucan, ubicadas en los domicilios referidos.</p>
                  <p>El presente Aviso de Privacidad, así como el manejo en general de la Ley que haga el Gobierno del Estado de México, se rige por la legislación vigente y aplicable en los Estados Unidos Mexicanos. Cualquier controversia que se suscite con motivo de su aplicación deberá ventilarse ante el Instituto Mexiquense de Acceso a la Información Pública y/o en su caso ante los Órganos Jurisdiccionales competentes en el Estado de México.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                   			</div>


                        </div>

                    </div>

                </div>
             </div>   <!-- ============ /Contact section ============ -->

            </div>

        </section><!-- #content end -->
        
        <?php include("footer.php");?>
        
        
        <script type="text/javascript">

			
	
           $('#btnsend').click(function(n) {




           
          
        
        var datos=$('#formaRegistro').serialize();
       
          $.ajax({
              type: "POST",
             url: "lib/enviocorreocopiaempresa.php",
             // url: "insertarBIEN1.php",

              data: datos,
              dataType: "html",
              
           error: function(){
                alert("error petición ajax");
              },
              success: function(data){ 

             //   alert("Ya solo confirma en tu correo  GRACIAS!");

     
                  $("formaRegistro").html(data);
                  

              }
              
              
              
            
            });
        
        });


$('#idEstado').change(function(n) {
                
                var consulta;
                                                     
                    //obtenemos el texto introducido en el campo
                    consulta = $("#idEstado").val();
                                          
                    //hace la búsqueda
                                               
                    $.ajax({
                          type: "POST",
                          url: "municipios11.php",
                          data: "idEstado="+consulta,
                          dataType: "html",
                          
                          error: function(){
                                alert("error petición ajax");
                          },
                          success: function(data){   
                          
                                $('#ContMunicipio').html(data);

                          }
                      });
                });
$('#codigopostalU').focusout(function(n) {
                
                var consulta;
                                                     
                    //obtenemos el texto introducido en el campo
                    consulta = $("#codigopostalU").val();
                                          
                    //hace la búsqueda
                                               
                    $.ajax({
                          type: "POST",
                          url: "lib/codigos-postalesbien11.php",
                          data: "CodPostal="+consulta,
                          dataType: "html",
                          
                          error: function(){
                                alert("error petición ajax");
                          },
                          success: function(data){   
                          
                                $('#contColonia').html(data);

                          }
                      });
                });

	

        </script>
</body>
</html>
