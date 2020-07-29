
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
                              <li class="<?php if ($submenu== '1'){ echo 'active'; } else {}	?>"><a href="registro.php">Registro</a></li>
                              <li class="<?php if ($submenu== '3'){ echo 'active'; } else {}	?>"><a href="busca-giros.php">Buscador de Giros</a></li>
                              <li class="<?php if ($submenu== '2'){ echo 'active'; } else {}	?>"><a href="acceso.php">Acceso a mi cuenta</a></li>
                              <li class="<?php if ($submenu== '4'){ echo 'active'; } else {}	?>"><a href="#">Manual del Usuario</a></li>
                            </ul>
                            

                        </div>


                        
                        
						
                           <form id="formaRegistro">
                           
                                
                                
                               
                                
                          		
                                
                               
								
                                 
                              
                                 
                                 <div class="row">
                                 	<div class="form-group col-sm-4">
                                        <label for="telefonoParticular">Teléfono Particular</label>
                                        <input type='text' class="form-control" name="telefonoParticular" id="telefonoParticular" />
									</div>
                                    <div class="form-group col-sm-4">
                                        <label for="telefonoTrabajo">Teléfono Trabajo</label>
                                        <input type='text' class="form-control" name="telefonoTrabajo" id="telefonoTrabajo" />
									</div>
                                    <div class="form-group col-sm-4">
                                        <label for="celular">Teléfono Celular</label>
                                        <input type='text' class="form-control" name="celular" id="celular" />
									</div>
                                 
                                 </div>
                                 
                              
                             
                                <hr>
                                    
                                    
                               
                               
                           


                                


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
                <!-- ============ /Contact section ============ -->

            </div>

        </section><!-- #content end -->
        
        <?php include("footer.php");?>
        
        
        <script type="text/javascript">
			
	
				
			
         $('#formaRegistro').on("submit", function(event){  
           event.preventDefault();  

        var consulta;
                           
          //obtenemos el texto introducido en el campo
          consulta = $("#telefonoParticular").val();




           if(consulta.lenght<2)  
           {  
                alert("Es muy corto");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#designation').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                         $('#add_data_Modal').modal('hide');  
  $('#employee_detail').html(data);
                   
           location.reload(); 
                              
                      

                     }  
                });  
           }  
      });


	

        </script>
</body>
</html>
