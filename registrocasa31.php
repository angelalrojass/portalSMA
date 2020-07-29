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
                              <li class="<?php if ($submenu== '1'){ echo 'active'; } else {}    ?>"><a href="registro.php">Registro</a></li>
                              <li class="<?php if ($submenu== '3'){ echo 'active'; } else {}    ?>"><a href="busca-giros.php">Buscador de Giros</a></li>
                              <li class="<?php if ($submenu== '2'){ echo 'active'; } else {}    ?>"><a href="acceso.php">Acceso a mi cuenta</a></li>
                              <li class="<?php if ($submenu== '4'){ echo 'active'; } else {}    ?>"><a href="#">Manual del Usuario</a></li>
                            </ul>
                            

                        </div>

                        <div class="col-md-9">
                        
                        	<div class="heading-block mb-40">
                                <h2 class="text-uppercase"><span class="text-theme">Registro de</span> usuario</h2>
                                <h4 class="panel-title">Su registro en el sistema le servirá para realizar el trámite de apertura de su negocio</h4>
                            </div>
							
                            <div id="contenedorForma">
                           <form id="formaRegistro">
                           		
                               
                                
                                <div class="row">
                                
                                
                          			 <div class="heading-block mb-10">

                                        
                                        <h2 class="panel-title"><span class="text-theme">DATOS</span> GENERALES </h2>
                                    </div>
                           		
                                    
                                	
                                  <div class="row">
                                    
                                    <div class="form-group col-sm-4" >
                                        <label for="nombreU">Nombre(s) <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="nombreU" type="text" class="form-control myInput" id="nombreU" data-msg-required="Ingresa Nombre" >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="apellido1U">Apellido Paterno <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="apellido1U" type="text" class="form-control myInput" id="apellido1U" data-msg-required="Ingresa Primer Apellido" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="apellido2U">Apellido Materno<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="apellido2U" type="text" class="form-control myInput" id="apellido2U" data-msg-required="Ingresa Segundo Apellido" required>
                                    </div>
                                    
                                </div>
                            </div>
                               <div class="row">
                                	  <div class="form-group col-sm-4">
                                        <label for="sexoU">Sexo<span class="text-lightred" style="font-size: 15px"></span></label>
                                        <select name="sexoU" id="vehiculopropioU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="hombre">HOMBRE</option>
                                            <option value="mujer">MUJER</option>
                                        </select>

                                

                                    </div><div class="form-group col-sm-4">
                                        <label for="fechanacimientoU">Fecha de Nacimiento 
                                        </label>
                                        <input type='text' class="form-control" name="fechanacimientoU" id="fechanacimientoU" placeholder="DD/MM/AAAA" required/>
									</div>
                                    <div class="form-group col-sm-4">
                                        <label >Entidad de Nacimiento </label>
                                        <select name="entidadnacimientosU" class="form-control" required>
                                            <option value="0"> ----- Seleccionar ----- </option>
                                            <option value="Aguascalientes">Aguascalientes</option>
                                            <option value="Baja California">Baja California</option>
                                            <option value="Baja California Sur">Baja California Sur</option>
                                            <option value="Campeche">Campeche</option>
                                            <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                            <option value="Colima">Colima</option>
                                            <option value="Chiapas">Chiapas</option>
                                            <option value="Chihuahua">Chihuahua</option>
                                            <option value="Distrito Federal">Distrito Federal</option>
                                            <option value="Durango">Durango</option>
                                            <option value="Guanajuato">Guanajuato</option>
                                            <option value="Guerrero">Guerrero</option>
                                            <option value="Hidalgo">Hidalgo</option>
                                            <option value="Jalisco">Jalisco</option>
                                            <option value="Estado de México">Estado de México</option>
                                            <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                                            <option value="Morelos">Morelos</option>
                                            <option value="Nayarit">Nayarit</option>
                                            <option value="Nuevo León">Nuevo León</option>
                                            <option value="Oaxaca">Oaxaca</option>
                                            <option value="Puebla">Puebla</option>
                                            <option value="Querétaro">Querétaro</option>
                                            <option value="Quintana Roo">Quintana Roo</option>
                                            <option value="San Luis Potosí">San Luis Potosí</option>
                                            <option value="Sinaloa">Sinaloa</option>
                                            <option value="Sonora">Sonora</option>
                                            <option value="Tabasco">Tabasco</option>
                                            <option value="Tamaulipas">Tamaulipas</option>
                                            <option value="Tlaxcala">Tlaxcala</option>
                                            <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                                            <option value="Yucatán">Yucatán</option>
                                            <option value="Zacatecas">Zacatecas</option>
                                            <option value="Otro País">Otro País</option>

                                         
										</select>

                                    </div>
                                
                                </div>


 <div class="row">
                                    
                                  <div class="form-group col-sm-4">
                                        <label for="estadoU">Estado <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="estadoU" id="estadoU" value="Estado de Mexico" disabled/>
                                   
                                    </div>
                                    <div class="form-group col-sm-4" >
                                        <label for="codigopostalU">Código Postal <span class="text-lightred" style="font-size: 15px" >*</span></label>
                                        <input type='text' class="form-control" name="codigopostalU" id="codigopostalU" required/>
                                    </div>
                                    
                                    <div class="form-group col-sm-4" id="contColonia">
                                        <label for="coloniaU">Colonia<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="coloniaU" id="coloniaU" required/>
                                    </div>
                                 
                                 </div>
                                 
                                    <div class="row">
                                    <div class="form-group col-sm-4" >
                                        <label for="telefonopU">Teléfono Particular</label>
                                        <input type='text' class="form-control" name="telefonopU" id="telefonopU"  />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="telefonotU">Teléfono Trabajo</label>
                                        <input type='text' class="form-control" name="telefonotU" id="telefonotU" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="telefonocU">Teléfono Celular</label>
                                        <input type='text' class="form-control" name="telefonocU" id="telefonocU" />
                                    </div>
                                 </div>


 <div class="row">
                                   <div class="form-group col-sm-4">
                                        <label for="licenciadecU">Licencia de conducir<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="licenciadecU" id="licenciadecU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="NO TENGO">NO TENGO</option>
                                        </select>

                                    </div>
                                     <div class="form-group col-sm-4">
                                        <label for="vehiculopropioU">Dispones de vehículo propio<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="vehiculopropioU" id="vehiculopropioU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fotoU">Inserta tu foto</label>
                                        <input type="file" name="fotoU" id="fotoU" />
                                    </div>
                                 </div>






                                  <div class="row">
                                    
                                    <div class="form-group col-sm-6" >
                                        <label ">Email <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="emailU" type="emailU" class="form-control myInput" id="emailU" >
                                    
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label">Confirma Email <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="confirmaCorreoElectronicoU" type="email"  class="form-control myInput" id="confirmaCorreoElectronicoU" disable >
                                    
                                    </div>
                                 
                                 
                                 </div>
                                  <div class="row">
                                    <div class="form-group col-sm-12">
                                     <p class="text-theme"><strong>IMPORTANTE: </strong>Asegúrate de proporcionar CORRECTAMENTE tu cuenta de correo electrónico PERSONAL, ya que será un medio de comunicación oficial contigo para el tema de Trámites y Servicios.</p>
                                     </div>
                                </div>




                                
									<hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">PROFECIÓN</span></h2>
                                    </div>




                                <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="titulocurriculoU">Título de mi currículo</label>
                                        <input type='text' class="form-control" name="titulocurriculoU" id="titulocurriculoU" />
                                    </div>
                                </div>

                                <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="objetivopU">Objetivo profesional</label>
                                        <input type='text' class="form-control" name="objetivopU" id="objetivopU" />
                                    </div>
                                </div>
                                 <div class="row">
                                    
                                    <div class="form-group col-sm-6">
                                        <label for="idEstado">Mi area de Especialidad <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idEstado" id="idEstado" class="form-control">

                                              <?php include("lib/estados.php") ?>
                                            
                                        </select>

                                    </div>
                                    
                                    <div class="form-group col-sm-5" id="ContMunicipio">
                                        <label for="idMunicipio">Subarea de Especialidad<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idMunicipio" id="idMunicipio" class="form-control" >
                                            <option value="0"> ----- Seleccionar ----- </option>
                                                <option value="1"></option>
                                                
                                        </select>
                                    </div>
                                    
                                 </div>
                                   <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="habilidadesU">Mis habilidades</label>
                                        <input type='text' class="form-control" name="habilidadesU" id="habilidadesU" />
                                    </div>
                                </div>



                                    <hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">EDUCACION</span> Y OTROS CONOCIMIENTOS</h2>
                                    </div>

                                <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="escuelaU">Escuela dónde estudiaste</label>
                                        <input type='text' class="form-control" name="escuelaU" id="escuelaU" />
                                    </div>
                                </div>


                                <div class="row">
                                     <div class="form-group col-sm-4">
                                        <label for="gradoacademicoU">Grado académico<span class="text-lightred" style="font-size: 15px"></span></label>
                                        <select name="gradoacademicoU" id="gradoacademicoU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="Secundaria">Secundaria</option>
                                            <option value="Bachillerato">Bachillerato</option>
                                            <option value="Estudios universitarios sin terminar">Estudios universitarios sin terminar</option>
                                            <option value="Tecnico titulado">Tecnico titulado</option>
                                            <option value="Estudios universitarios - no titulado">Estudios universitarios - no titulado</option>
                                            <option value="Estudios universitarios - titulado">Estudios universitarios - titulado</option>
                                            <option value="Diplomado ">Diplomado </option>
                                            <option value="Maestría">Maestría</option>
                                            <option value="Doctorado">Doctorado</option>
                                        </select>

                                    </div>

                                    <div class="form-group col-sm-8">
                                        <label for="titulogradoU">Mi título logrado es</label>
                                        <input type='text' class="form-control" name="titulogradoU" id="titulogradoU" />
                                    </div>
                                </div>

                               
                                    

                                <div class="row">

                                    <div class="form-group col-sm-4">
                                        <label for="fechainicioesU">Fecha de Inicio<span class="text-lightred" style="font-size: 15px"></span></label>
                                        <input name="fechainicioesU" type="date" class="form-control myInput" id="fechainicioesU" data-msg-required="Ingresa Nombre" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fechaterminoesU">Fecha de Término<span class="text-lightred" style="font-size: 15px"></span></label>
                                        <input name="fechaterminoesU" type="date" class="form-control myInput" id="fechaterminoesU" data-msg-required="Ingresa Nombre" required>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="auncursoU">Aún cursado <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="auncursoU" id="auncursoU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group col-sm-4">
                                        <label for="nivelinglesU">Nivel de ingles<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="nivelinglesU" id="nivelinglesU" class="form-control" required>
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
                                        <h2 class="panel-title"><span class="text-theme">SITUACION</span> LABORAL </h2>
                                    </div>
                                    
                                <div class="row">
                                    
                                    <div class="form-group col-sm-4" >
                                        <label for="trabajaactualmenteU">Trabajas Actualmente<span class="text-lightred" style="font-size: 15px">*</span></label>
                                         <select name="trabajaactualmenteU" id="trabajaactualmenteU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>
                                    
                                
                                    <div class="form-group col-sm-8">
                                    <label for="motivoU">Motivo<span class="text-lightred" style="font-size: 15px">*</span></label>
                                         <div class="checkbox-custom checkbox-danger">
                                                <input type="checkbox" name="motivoU" value="Nunca a Trabajado" id="motivoU"/>
                                                <label for="motivoU" style="margin-right:5px">Nunca a Trabajado</label>
                                                
                                                <input type="checkbox" name="motivoU" value="Para Canbiarce de Trabajo" id="motivoU"/>
                                                <label for="motivoU" style="margin-right:5px">Para Canbiarce de Trabajo</label>
                                                
                                                <input type="checkbox" name="motivoU" value="Para Tener mas de un Empleo" id="motivoU"/>
                                                <label for="motivoU" style="margin-right:5px">Para Tener mas de un Empleo</label>
                                                
                                                <input type="checkbox" name="motivoU" value="Ajuste de Personal" id="motivoU"/>
                                                <label for="motivoU" style="margin-right:5px">Ajuste de Personal</label>
                                                
                                                <input type="checkbox" name="motivoU" value="Cerro y quebro su fuente de trabajo" id="motivoU"/>
                                                <label for="motivoU" style="margin-right:5px">Cerro y quebro su fuente de trabajo</label>

                                                  <input type="checkbox" name="motivoU" value="Fue despedido si causa" id="motivoU"/>
                                                <label for="motivoU" style="margin-right:5px">Fue despedido si causa</label>

                                                  <input type="checkbox" name="motivoU" value="Se termino su contrato" id="motivoU"/>
                                                <label for="motivoU" style="margin-right:5px">Se termino su contrato</label>
                                              
                                              
                                           </div>
                                          
                                         
                                    </div>


                                    
                                    
                                </div>
			                    <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="otraU">OTRA</label>
                                        <input type='text' class="form-control" name="otraU" id="otraU" />
                                    </div>
                                    
                                   
                                 </div>




   <div class="row">
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="fechaabuscarU">Fecha que comenzo a buscar trabajo: <span class="text-lightred" style="font-size: 15px"></span></label>
                                        <input name="fechaabuscarU" type="date" class="form-control myInput" id="fechaabuscarU" data-msg-required="Ingresa Nombre" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="">Disponibilidad para comenzar a trabajar: <span class="text-lightred" style="font-size: 15px"></span></label>
                                        
                                    </div>
                                    <div class="form-group col-sm-4" >
                                        <label >Disponibilidad<span class="text-lightred" style="font-size: 15px"></span></label>
                                         <select name="disponibilidadU"  class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>
                                    </div>
                                    
</div>
    <hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">Experiencia laboral</span>(Ultimo trabajo o trabajo actual)</h2>
                                    </div>
                               <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="ultimopuestoU">Mi último puesto</label>
                                        <input type='text' class="form-control" name="ultimopuestoU" id="ultimopuestoU" />
                                    </div>
                                    
                                   
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="empresaU">Empresa</label>
                                        <input type='text' class="form-control" name="empresaU" id="empresaU" />
                                    </div>
                                    
                                   
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="giroU">Giro</label>
                                        <input type='text' class="form-control" name="giroU" id="giroU" />
                                    </div>
                                    
                                   
                                 </div>
                                  <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="funcionesactividadesU">Funciones y Actividades Realizadas</label>
                                        <input type='text' class="form-control" name="funcionesactividadesU" id="funcionesactividadesU" />
                                    </div>
                                    
                                   
                                 </div>

                                

                                <div class="row">

                                    <div class="form-group col-sm-4">
                                        <label for="fechainicioultimotU">Fecha de Inicio<span class="text-lightred" style="font-size: 15px"></span></label>
                                        <input name="fechainicioultimotU" type="date" class="form-control myInput" id="fechainicioultimotU" data-msg-required="Ingresa Nombre" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fechaterminoultimotU">Fecha de Término<span class="text-lightred" style="font-size: 15px"></span></label>
                                        <input name="fechaterminoultimotU" type="date" class="form-control myInput" id="fechaterminoultimotU" data-msg-required="Ingresa Nombre" required>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="empleoactualU">Empleo actual<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="empleoactualU" id="empleoactualU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="SI">Si</option>
                                            <option value="SI">No</option>
                                        </select>

                                    </div>
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
             url: "lib/enviocorreocopia.php",
             // url: "insertarBIEN.php",

              data: datos,
              dataType: "html",
              
           error: function(){
                alert("error petición ajax");
              },
              success: function(data){ 

             //   alert("Ya solo confirma en tu correo  GRACIAS!");

     
                  $("formaRegistro").html(data);
                  alert("A hora revisa tu correo Gracias!");
                  header("Location: http://localhost/paginasSMA/gob/sare/sare/registrocasa31.php");
                  

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
                          url: "lib/municipios1bien.php",
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
                          url: "lib/codigos-postalesbien1.php",
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
