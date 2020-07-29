
<?php include("header.php");?>

      

       


           
                        
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
                                	<div class="form-group col-sm-6">
                                        <label for="pjuridica">Pesonalidad Juridica <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="Sujeto" type="text" class="form-control myInput" id="Sujeto" value="Ciudadana(o)" disabled>
                                         <input type="hidden" name="idSujeto" value="1" id="idSujeto"/>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="curp">CURP <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="curp" type="text" class="form-control myInput" id="curp" required>
                                    </div>
                                	
                                </div>
                                
                                <div class="row">
                                
                                	<div class="form-group col-sm-12">
                                    <label for="perfiles">Perfiles<span class="text-lightred" style="font-size: 15px">*</span></label>
                                         <div class="checkbox-custom checkbox-danger">
                                                <input type="checkbox" name="listaPersonaPerfiles" value="2" id="listaPersonaPerfiles-1"/>
                                                <label for="listaPersonaPerfiles-1" style="margin-right:5px">Indígenas</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="8" id="listaPersonaPerfiles-2"/>
                                                <label for="listaPersonaPerfiles-2" style="margin-right:5px">Personas con Discapacidad</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="6" id="listaPersonaPerfiles-3"/>
                                                <label for="listaPersonaPerfiles-3" style="margin-right:5px">Niñas(os)</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="3" id="listaPersonaPerfiles-4"/>
                                                <label for="listaPersonaPerfiles-4" style="margin-right:5px">Jóvenes</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="1" id="listaPersonaPerfiles-5"/>
                                                <label for="listaPersonaPerfiles-5" style="margin-right:5px">Adultas(os) Mayores</label>
                                           </div>
                                           <div class="checkbox-custom checkbox-danger"> 
                                                <input type="checkbox" name="listaPersonaPerfiles" value="7" id="listaPersonaPerfiles-6"/>
                                                <label for="listaPersonaPerfiles-6" style="margin-right:5px">Madres / Padres de Familia</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="5" id="listaPersonaPerfiles-7"/>
                                                <label for="listaPersonaPerfiles-7" style="margin-right:5px">Mujeres</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="15" id="listaPersonaPerfiles-8"/>
                                                <label for="listaPersonaPerfiles-8" style="margin-right:5px">Hombres</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="18" id="listaPersonaPerfiles-9"/>
                                                <label for="listaPersonaPerfiles-9" style="margin-right:5px">Estudiantes</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="4" id="listaPersonaPerfiles-10"/>
                                                <label for="listaPersonaPerfiles-10" style="margin-right:5px">Migrantes</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="16" id="listaPersonaPerfiles-11"/>
                                                <label for="listaPersonaPerfiles-11" style="margin-right:5px">Productoras(es)</label>
                                                
                                           </div>
                                           <div class="checkbox-custom checkbox-danger">
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="17" id="listaPersonaPerfiles-12"/>
                                                <label for="listaPersonaPerfiles-12" style="margin-right:5px">Empresarias(os) y Emprendedoras(es)</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="9" id="listaPersonaPerfiles-13"/>
                                                <label for="listaPersonaPerfiles-13" style="margin-right:5px">Servidoras(es) Públicas(os) Estatales</label>
                                                
                                                <input type="checkbox" name="listaPersonaPerfiles" value="10" id="listaPersonaPerfiles-14"/>
                                                <label for="listaPersonaPerfiles-14" style="margin-right:5px">Servidoras(es) Públicas(os) Municipales</label>
                                       		</div>
                                            <p class="text-theme">Seleccione los que considere necesarios</p>
                                	
                               		</div>
                                </div>
                                
                          			 <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">DATOS</span> GENERALES </h2>
                                    </div>
                           		<div class="row">
                                    
                                	<div class="form-group col-sm-4">
                                        <label for="nombreU">Nombre(s) <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="nombreU" type="text" class="form-control myInput" id="nombreU" data-msg-required="Ingresa Nombre" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="apellidoPU">Apellido Paterno <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="apellidoPU" type="text" class="form-control myInput" id="apellidoPU" data-msg-required="Ingresa Primer Apellido" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="apellidoMU">Apellido Materno<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="apellidoMU" type="text" class="form-control myInput" id="apellidoMU" data-msg-required="Ingresa Segundo Apellido" required>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                	<div class="form-group col-sm-4">
                                        <label for="sexo">Sexo <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="sexo" id="sexo" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">Femenino</option>
                                            <option value="2">Masculino</option>
										</select>

                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fechaNacimiento">Fecha de Nacimiento <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="fechaNacimiento" id="fechaNacimiento" placeholder="DD/MM/AAAA" required/>
									</div>
                                    <div class="form-group col-sm-4">
                                        <label for="idEntidadFederativa">Entidad de Nacimiento <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idEntidadFederativa" id="idEntidadFederativa" class="form-control" required>
                                            <option value="0"> ----- Seleccionar ----- </option>
                                            <option value="1">Aguascalientes</option>
                                            <option value="2">Baja California</option>
                                            <option value="3">Baja California Sur</option>
                                            <option value="4">Campeche</option>
                                            <option value="5">Coahuila de Zaragoza </option>
                                            <option value="6">Colima</option>
                                            <option value="7">Chiapas</option>
                                            <option value="8">Chihuahua</option>
                                            <option value="9">Distrito Federal</option>
                                            <option value="10">Durango</option>
                                            <option value="11">Guanajuato</option>
                                            <option value="12">Guerrero </option>
                                            <option value="13">Hidalgo</option>
                                            <option value="14">Jalisco</option>
                                            <option value="15">Estado de México</option>
                                            <option value="16">Michoacán de Ocampo</option>
                                            <option value="17">Morelos</option>
                                            <option value="18">Nayarit</option>
                                            <option value="19">Nuevo León </option>
                                            <option value="20">Oaxaca</option>
                                            <option value="21">Puebla</option>
                                            <option value="22">Querétaro</option>
                                            <option value="23">Quintana Roo</option>
                                            <option value="24">San Luis Potosí</option>
                                            <option value="25">Sinaloa</option>
                                            <option value="26">Sonora</option>
                                            <option value="27">Tabasco</option>
                                            <option value="28">Tamaulipas</option>
                                            <option value="29">Tlaxcala</option>
                                            <option value="30">Veracruz de Ignacio de la Llave</option>
                                            <option value="31">Yucatán</option>
                                            <option value="32">Zacatecas</option>
                                            <option value="33">Otro País</option>
										</select>

                                    </div>
                                
                                </div>
									<hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">DATOS</span> PERSONALES </h2>
                                    </div>
                                 <div class="row">
                                 	<div class="form-group col-sm-6">
                                        <label for="requiereNotificacion">¿Requiere Recibir Notificaciones? <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="requiereNotificacion" id="requiereNotificacion" class="form-control" required>
                                            <option value="1">NO</option>
   											<option value="2">SI</option>
										</select>

                                    </div>
                                    <div class="form-group col-sm-6">
                                    </div>
                                 </div>
								 <div class="row">
                                 	<div class="form-group col-sm-4">
                                        <label for="idEstadoCivil">Estado Civil <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idEstadoCivil" id="idEstadoCivil" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">Soltero(a)</option>
                                            <option value="2">Casado(a)</option>
                                            <option value="3">Viudo(a)</option>
                                            <option value="4">Divorciado(a)</option>
                                            <option value="5">Union Libre</option>
										</select>

                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="calle">Calle <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="calle" id="calle" required/>
									</div>
                                    <div class="form-group col-sm-4">
                                        <label for="numero">Número <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="numero" id="numero" required/>
									</div>
                                 	
                                 
                                 </div>
                                 
                                 <div class="row">
                                 	
                                    <div class="form-group col-sm-4">
                                        <label for="localidad">Localidad <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="localidad" id="localidad" required/>
									</div>
                                    <div class="form-group col-sm-4">
                                        <label for="codigoPostal">Código Postal <span class="text-lightred" style="font-size: 15px" >*</span></label>
                                        <input type='text' class="form-control" name="codigoPostal" id="codigoPostal" required/>
									</div>
                                    
                                    <div class="form-group col-sm-4" id="contColonia">
                                        <label for="colonia">Colonia <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="colonia" id="colonia" required/>
									</div>
                                 
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
                                            
                                             <?php include("lib/estados.php") ?>
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
                                 
                                 <div class="row">
                                 	
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="email" type="email" class="form-control myInput" id="email" required email><div id="resvalemail"></div>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="confirmaCorreoElectronico">Confirma Email <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="confirmaCorreoElectronico" type="email" class="form-control myInput" id="confirmaCorreoElectronico"  required email><div id="resvalemail"></div>

                                    </div>
                                 
                                 
                                 </div>
          						
                                <div class="row">
                                	<div class="form-group col-sm-12">
                                	 <p class="text-theme"><strong>IMPORTANTE: </strong>Asegúrate de proporcionar CORRECTAMENTE tu cuenta de correo electrónico PERSONAL, ya que será un medio de comunicación oficial contigo para el tema de Trámites y Servicios.</p>
                                     </div>
                                </div>
                                
                                <hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">DATOS</span> DE ACCESO </h2>
                                    </div>
                                    
                                 <div class="row">
                                	<div class="form-group col-sm-12">
                                	 <p class="text-theme">La contraseña debe ser de<strong> al menos 8  caracteres</strong> y combine letras <strong>MAYÚSCULAS</strong>, letras <strong>MINÚSCULAS</strong> y <strong>NÚMEROS</strong></p></p>
                                     </div>
                                </div>
			
                                <div class="row">

                                   <div class="form-group col-sm-6">
                                        <label for="password">Contraseña <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="pswd" type="password" class="form-control myInput" id="pswd" data-msg-required="Ingresa Contraseña" required>
                                        <div id="pswd_info" style="display:none">
                                           <h5>La contraseña debería cumplir con los siguientes requerimientos:</h5>
                                           <ul>
                                              <li id="letter">Al menos debería tener <strong>una letra</strong></li>
                                              <li id="capital">Al menos debería tener <strong>una letra en mayúsculas</strong></li>
                                              <li id="number">Al menos debería tener <strong>un número</strong></li>
                                              <li id="length">Debería tener <strong>8 carácteres</strong> como mínimo</li>
                                           </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                        <label for="conPswd">Confirmar Contraseña <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="conPswd" type="password" class="form-control myInput" id="conPswd" required>
                                        
                                    </div>

                                </div>
                                
                                <div class="row">
                                	<div class="form-group col-sm-6">
                                        <label for="idPreguntas">Pregunta Secreta <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idPreguntas" id="idPreguntas" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">¿Nombre de tu Mamá?</option>
                                            <option value="2">¿Nombre de tu primer mascota?</option>
                                            <option value="3">¿Nombre de tu artista favorito?</option>
                                            <option value="4">¿Nombre de tu maestro de Kinder?</option>
                                            <option value="5">Otra</option>
                                        </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                        <label for="respuestaSecreta">Respuesta Secreta <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="respuestaSecreta" id="respuestaSecreta" required/>
									</div>

                                	
                                </div>


                                <div class="row">

                                    <div class="form-group col-sm-12">
                                    	
                                       <div class="checkbox-custom checkbox-danger">
                                      	 <input type="checkbox" value="1" id="confirma" required>
                                         <label for="confirma">Manifiesto bajo protesta de decir verdad, que los datos aquí asentados, son ciertos y pueden ser verificados de ser necesario para acreditar la titularidad de los mismos, así como que cuento con las facultades de otorgarlos para el fin de poder hacer los trámites correspondientes.   </label>
                                          <input type="checkbox" value="1" id="acepto"  required>
                                          <label for="acepto">He leído y acepto el Aviso de Privacidad &nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-sm push-top push-bottom" data-toggle="modal" data-target="#myModal">
                                                Ver Aviso
                                            </button>
                                          	
                                          </label>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                    
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
                <!-- ============ /Contact section ============ -->

            </div>

        </section><!-- #content end -->
        
       
      
</body>
</html>
