
<?php include("header.php");?>

        <section id="breadcrumbs" class="breadcrumbs-sm">

           

        </section>

        <!-- ============================================
        =================== Breadcrumbs =================
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
                             <li ><a href="http://189.194.250.30:8085/empleo/">INICIO</a></li>
                               <li><a href="http://189.194.250.30:8085/empleo/listae.php">EMPRESAS</a></li>
                             </ul>
                            

                        </div>

                        <div class="col-md-9">
                        
                        	<div class="heading-block mb-40">
                                <h2 class="text-uppercase"><span class="text-theme">Registro del Solicitante</span> </h2>
                                
                            </div>
							
                            <div id="contenedorForma">
                           <form id="formaRegistro1">
                           		
                               
                                
                                <div class="row">
                                
                                
                          			 <div class="heading-block mb-10">

                                        
                                        <h2 class="panel-title"><span class="text-theme">DATOS  GENERALES</span> </h2>
                                    </div>
                           		
                                    
                                	
                            </div>
                                           
                                

  <div class="row">
                                    
                                    <div class="form-group col-sm-4" >
                                        <label for="nombreU">Nombre(s)<span class="text-lightred" style="font-size: 15px">*</span> </label>
                                        <input name="nombreU" type="text" class="form-control myInput" id="nombreU" required onkeypress= "return sololetras(event)" onpaste="return false">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="apellido1U">Apellido Paterno<span class="text-lightred" style="font-size: 15px">*</span> </label>
                                        <input name="apellido1U" type="text" class="form-control myInput" id="apellido1U"required onkeypress= "return sololetras(event)" onpaste="return false">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="apellido2U">Apellido Materno<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="apellido2U" type="text" class="form-control myInput" id="apellido2U"required onkeypress= "return sololetras(event)" onpaste="return false">
                                    </div>
                                    
                                </div>


                            <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="sexoU">Sexo<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="sexoU" id="vehiculopropioU" class="form-control"required >
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">HOMBRE</option>
                                            <option value="2">MUJER</option>
                                        </select>

                                

                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fechanacimientoU">Fecha de Nacimiento 
                                        </label>
                                        <input type="date" class="form-control" name="fechanacimientoU" id="fechanacimientoU" placeholder="DD/MM/AAAA" required />
                  </div>
                                     <div class="form-group col-sm-4">
                                        <label for="civilU">Estado Civil<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="civilU" id="civilU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">SOLTERO</option>
                                            <option value="2">CASADO</option>
                                                      <option value="3">VIUDO</option>
                                            <option value="4">DIVORCIADO</option>
                                  
                                        </select>

                                

                                    </div>
                    </div> 
                           <div class="row">
                                    

                                        <div class="form-group col-sm-4" >
                                        <label for="edadU">EDAD<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="edadU" id="edadU" required onchange="return validanumero(this)" onpaste="return false"/>
                                   
                            </div>
                                   <div class="form-group col-sm-4">
                                        <label for="codigopostalU">Código Postal<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="codigopostalU" id="codigopostalU" required onchange="return validanumeropostal(this)" onpaste="return false"/>
                                        

                                    </div>

                                     <div class="form-group col-sm-4" id="contColonia">
                                        <label for="coloniaU">Colonia<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="coloniaU" id="coloniaU"required  />
                                       
                                    </div>
                                
                                    
                         </div>


  <div class="row">
                                    <div class="form-group col-sm-12">
                                     <p class="text-theme"><strong>IMPORTANTE: </strong>Si no cuenta con algún teléfono, marque con una X  </p>
                                     </div>
                                </div>
  
                   <div class="row">
                          
                                   
                           
                                    <div class="form-group col-sm-4">
                                        <label for="telefonocU">Teléfono Celular<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="telefonocU" id="telefonocU" required onchange="return validanumero(this)" onpaste="return false" placeholder="Ej: (01)(722)1234567"/>
                                    </div>

                                     <div class="form-group col-sm-4" >
                                        <label for="telefonotU">Teléfono Trabajo</label>
                                        <input type='text' class="form-control" name="telefonotU" id="telefonotU" required onchange="return validanumero(this)" onpaste="return false" placeholder="Ej: (01)(722)1234567"/>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="telefonopU">Teléfono Particular</label>
                                        <input type='text' class="form-control" name="telefonopU" id="telefonopU" required onchange="return validanumero(this)" onpaste="return false"placeholder="Ej:(01)(722)1234567"/>
                                    </div>
                                 </div> 
                               



<div class="row">
	                               <div class="form-group col-sm-4">
                                        <label for="vehiculopropioU">Dispones de vehículo propio</label>
                                        <select name="vehiculopropioU" id="vehiculopropioU" class="form-control" required >
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>

                                    </div>
                                   <div class="form-group col-sm-4">
                                        <label for="licenciadecU">Licencia de conducir</label>
                                        <select name="licenciadecU" id="licenciadecU" class="form-control" required  >
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">C</option>
                                            <option value="4">D</option>
                                            <option value="5">NO TENGO</option>
                                        </select>

                                    </div>


                                  
                                    <div class="form-group col-sm-4" >
                                        <label ">Email<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="emailU" type="emailU" class="form-control myInput" id="emailU"placeholder="Ej: usuario@gmail.com"  required >
                                    
                                    </div>
                                  
                                   
                                 </div>



  <div class="row">
                                    <div class="form-group col-sm-12">
                                     <p class="text-theme"><strong>IMPORTANTE: </strong>Asegúrese de proporcionar CORRECTAMENTE su cuenta de correo electrónico<span class="text-lightred" style="font-size: 15px"> GMAIL o HOTMAIL</span>  PERSONAL, ya que será un medio de comunicación oficial con usted para el tramite de ALTA</p>
                                     </div>
                                </div>
<hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">PROFECIÓN</span></h2>
                                    </div>
   <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="titulocurriculoU">Título de mi currículo<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="titulocurriculoU" id="titulocurriculoU"required onkeypress= "return caracteresespeciales(event)" onpaste="return false" required onkeypress= "return caracteresespeciales(event)" onpaste="return false" placeholder="Ej: Cajero con 3 años de experiencia, Organizado y responsable, Asistente de dirección. Organizada y proactiva. Excel avanzado"/>
                                    </div>
                                </div>


  <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="objetivopU">Objetivo profesional<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="objetivopU" id="objetivopU" required onkeypress= "return caracteresespeciales(event)" onpaste="return false" placeholder="Ej: Mi principal objetivo es formar parte de un equipo profesional, en el que los logros y éxitos de cada uno sean reconocidos en un ambiente de trabajo óptimo y agradable." />
                                    </div>
                                </div>    

                                 <div class="form-group col-sm-12">
                                     <p class="text-theme"><span class="text-lightred" style="font-size: 15px">ÁREA DE INTERÉS</span></p>
                                     </div>
                            
                                
                                 <div class="row">
                        
                                    <div class="form-group col-sm-6">
                                        <label for="idEstado">ESPECIALIDAD<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idEstado" id="idEstado" class="form-control"required >
                                            
                                           
                                             <?php include("especialidad1.php") ?>
                    </select>

                                    </div>
                                    
                                    <div class="form-group col-sm-6" id="ContMunicipio">
                                        <label for="idMunicipio">SUBÁREA DE ESPECIALIDAD <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idMunicipio" id="idMunicipio" class="form-control" required>
                                            <option value="0"> ----- Seleccionar ----- </option>
                                                <option value="1"></option>
                                                
                    </select>
                  </div>
                                    
                                 </div>



  <div class="row">
                                    <div class="form-group col-sm-12">
                                     <p class="text-theme"><strong>IMPORTANTE: </strong>Asegúrese de proporcionar CORRECTAMENTE su AREA DE ESPECIALIDAD y SUBAREA DE ESPECIALIDAD ya que a través de estos podrán ver sus datos de acuerdo a su registro</p>
                                     </div>
                                </div>
  <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="habilidadesU">Mis habilidades<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="habilidadesU" id="habilidadesU" required onkeypress= "return caracteresespeciales(event)" onpaste="return false" placeholder="Ej: Capacidad de tomar decisiones, facilidad para trabajar en equipo, persistencia y constancia para obtener los resultados deseados, etc."/>
                                    </div>
                                </div>
                                  <hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">EDUCACIÓN Y OTROS CONOCIMIENTOS</span> </h2>
                                    </div>
                                <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="escuelaU">Escuela dónde estudio su último Grado<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="escuelaU" id="escuelaU" required onkeypress= "return caracteresespeciales(event)" onpaste="return false"/>
                                    </div>
                                </div>
                                  <div class="row">
                                     <div class="form-group col-sm-4">
                                        <label for="gradoacademicoU">Grado académico<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="gradoacademicoU" id="gradoacademicoU" class="form-control"required >
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">Secundaria</option>
                                            <option value="2">Bachillerato</option>
                                            <option value="3">Estudios universitarios sin terminar</option>
                                            <option value="4">Tecnico titulado</option>
                                            <option value="5">Estudios universitarios - no titulado</option>
                                            <option value="6">Estudios universitarios - titulado</option>
                                            <option value="7 ">Diplomado </option>
                                            <option value="8">Maestría</option>
                                            <option value="9">Doctorado</option>
                                        </select>

                                    </div>

                                    <div class="form-group col-sm-8">
                                        <label for="titulogradoU">Mi título logrado es<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="titulogradoU" id="titulogradoU"required onkeypress= "return caracteresespeciales(event)" onpaste="return false" placeholder="Ej: Ingeniero en Telecomunicaciones" />
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-sm-4">
                                        <label for="fechainicioesU">Fecha de Inicio<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="fechainicioesU" type="date" class="form-control myInput" id="fechainicioesU" required >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fechaterminoesU">Fecha de Término<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="fechaterminoesU" type="date" class="form-control myInput" id="fechaterminoesU" required  >
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="auncursoU">Aún cursas?<span class="text-lightred" style="font-size: 15px">*</span> </label>
                                        <select name="auncursoU" id="auncursoU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="SI">Si</option>
                                            <option value="NO">No</option>
                                        </select>

                                    </div>
                                </div>

                                                    <div class="row">

                                    <div class="form-group col-sm-4">
                                        <label for="nivelinglesU">Nivel de inglés<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="nivelinglesU" id="nivelinglesU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">No hablo</option>
                                            <option value="2">Básico</option>
                                            <option value="3">Intermedio</option>
                                            <option value="4">Avanzado</option>
                                            <option value="5">Lengua Nativa</option>
                                        </select>

                                    </div>


                                     <div class="form-group col-sm-6">
                                        <label for="ccomputoU">Conocimientos en Computación<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="ccomputoU" id="ccomputoU" placeholder="Especificar" required onkeypress= "return caracteresespeciales(event)" onpaste="return false"/>
                                    </div>

                                   

                                    </div>

                             

                               

                               <hr>

                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">Experiencia laboral (Ultimo trabajo o trabajo actual)</span></h2>
                                    </div>

 <div class="row">
                                    <div class="form-group col-sm-4" >
                                        <label for="trabajaactualmenteU">MOTIVO POR EL QUE ESTAS BUSCANDO TRABAJO<span class="text-lightred" style="font-size: 15px">*</span></label>
                                         <select name="trabajaactualmenteU" id="trabajaactualmenteU" class="form-control" required >
                                            <option value="0"> ----- Seleccionar ----- </option>
                                            <option value="1">Nunca a Trabajado</option>
                                            <option value="2">Para Canbiarce de Trabajo</option>
                                            <option value="3">Para Tener mas de un Empleo</option>
                                            <option value="4">Ajuste de Personal</option>
                                            <option value="5">Cerro y quebro su fuente de trabajo</option>
                                            <option value="6">Fue despedido si causa</option>
                                            <option value="7">Se termino su contrato</option>
                                            <option value="8">Otra</option>
                                           
                                        </select>
                                    </div>
                                  </div>

                                     <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="ultimopuestoU">Mi último puesto<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="ultimopuestoU" id="ultimopuestoU" required onkeypress= "return caracteresespeciales(event)" onpaste="return false"/>
                                    </div>
                                    
                                   
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="empresaU">Empresa<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="empresaU" id="empresaU" required onkeypress= "return caracteresespeciales(event)" onpaste="return false" />
                                    </div>
                                    
                                   
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="giroU">Giro<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="giroU" id="giroU" required onkeypress= "return caracteresespeciales(event)" onpaste="return false" placeholder="Ej: Construcción, turismo, telecomunicaciones, cobranzas, etc."/>
                                    </div>
                                    
                                   
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="funcionesactividadesU">Funciones y Actividades Realizadas<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="funcionesactividadesU" id="funcionesactividadesU" required  onkeypress= "return caracteresespeciales(event)" onpaste="return false"/>
                                    </div>
                                    
                                   
                                 </div>

                                 

                                <div class="row">

                                    <div class="form-group col-sm-4">
                                        <label for="fechainicioultimotU">Fecha de Inicio<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="fechainicioultimotU" type="date" class="form-control myInput" id="fechainicioultimotU" required >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="fechaterminoultimotU">Fecha de Término<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="fechaterminoultimotU" type="date" class="form-control myInput"  requiredid="fechaterminoultimotU" >
                                    </div>

                                  
                                </div>












                             



<div class="col-md-3 col-md-offset-3" id="result"></div>
    <hr>
    <br>

    <hr>
          




                                
                                


                                
                              
<div class="modal fade" id="exampleModal"  role="dialog"  data-backdrop="static" data-keyboard="false" tabindex="-1">
  
<div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Alerta</h4>
        </div>
        <div class="modal-body">
          <p>A hora revisa tu correo Gracias!!</p>
        </div>
        <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrar()">Ok</button>
        </div>
      </div>
    </div>
  </div>

                                  <button type="submit" id="insert1" name="insert1" class="myBtn myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10 ">Registrarme</button>


                            </form>
                            </div>
                            
                            
                            

</div>
      </div>

</div>
</div>
</section>

                    
        
        <?php include("footer.php");?>
        
        
       <script type="text/javascript">

        var bsAlert = function(message) {
   if ($("#bs-alert").length == 0) {
      $('body').append('<div class="modal fade" id="bs-alert" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1">'+
      '<div class="modal-dialog modal-sm">'+
        '<div class="modal-content">'+
          '<div class="modal-header">'+
            '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
            '<h4 class="modal-title">Alerta</h4>'+
          '</div>'+
          '<div class="modal-body">'+
              message+
          '</div>'+
          '<div class="modal-footer">'+
            '<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>'+
          '</div>'+
        '</div>'+
      '</div>'+
    '</div>')
    } else {
        $("#bs-alert .modal-body").text(message);
    }    
    $("#bs-alert").modal();
}




                   function caracteresespeciales (e){

            key=e.keyCode || e.Which;
            teclado=String.fromCharCode(key).toLowerCase();
            letras=" abcdefghijklmnñopqrstuvwzxz1234567890,.()*+-";
            especiales="8-37-38-46-164";
            teclado_especial=false;
            for(var i in especiales)
            {
                if(key==especiales[i]){
                    teclado_especial=true;break;
                }
            }
            if(letras.indexOf(teclado)==-1 && !teclado_especial){
                return false;
            }
 }

            function letrasynumeros (e){

            key=e.keyCode || e.Which;
            teclado=String.fromCharCode(key).toLowerCase();
            letras=" abcdefghijklmnñopqrstuvwzxz1234567890";
            especiales="8-37-38-46-164";
            teclado_especial=false;
            for(var i in especiales)
            {
                if(key==especiales[i]){
                    teclado_especial=true;break;
                }
            }
            if(letras.indexOf(teclado)==-1 && !teclado_especial){
                return false;
            }
 }

      function sololetras (e){

            key=e.keyCode || e.Which;
            teclado=String.fromCharCode(key).toLowerCase();
            letras=" abcdefghijklmnñopqrstuvwyxz";
            especiales="8-37-38-46-164";
            teclado_especial=false;
            for(var i in especiales)
            {
                if(key==especiales[i]){
                    teclado_especial=true;break;
                }
            }
            if(letras.indexOf(teclado)==-1 && !teclado_especial){
                return false;
            }
 }
   function solonumeros (e){

            key=e.keyCode || e.Which;
            teclado=String.fromCharCode(key);
            letras=" 1234567890xX";
            especiales="8-37-38-46";
            teclado_especial=false;
            for(var i in especiales)
            {
                if(key==especiales[i]){
                    teclado_especial=true;
                }
            }
            if(letras.indexOf(teclado)==-1 && !teclado_especial){
                return false;
            }
 }
      
      
        
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



          $('#formaRegistro1').on("submit", function(event){  
           event.preventDefault(); 

        var idEstadoa=document.getElementById("idEstado").value;
        var idMunicipioa=document.getElementById("idMunicipio").value;

        var emailUa=document.getElementById("emailU").value;
        var funcionesactividadesUa=document.getElementById("funcionesactividadesU").value;
         var codigopostalUa = document.getElementById("codigopostalU").value;
        var coloniaUa = document.getElementById("coloniaU").value;
        
        var titulocurriculoUa = document.getElementById("titulocurriculoU").value;
         var objetivopUa = document.getElementById("objetivopU").value;

         var habilidadesUa = document.getElementById("habilidadesU").value;
        var ccomputoUa = document.getElementById("ccomputoU").value;
        var ultimopuestoUa = document.getElementById("ultimopuestoU").value;




        
        var exprecion=/\w+@\w+\.+[a-z]/;
  //if($('#rfcU').val() == "")  
           if(emailUa=="" || funcionesactividadesUa=="" ||codigopostalUa==""||coloniaUa=="0" || idEstadoa==""||idMunicipioa=="") 
           
           {  
                bsAlert("INGRESA TODOS LOS CAMPOS OBLIGATORIOS, MARCADOS CON UN ASTERISCO ROJO");  
           
           }

            else if(!exprecion.test(emailUa)){
            bsAlert("el correo no es valido");
            return false;
           }
           else if(titulocurriculoUa.length>300){
            bsAlert("DESCRIPCION DE: (TITULO DE MI CURRICULO) ES MUY LARGA NO OCUPAR MAS DE 300 CARACTERES");
            return false;
           }
            else if(objetivopUa.length>400){
            bsAlert("DESCRIPCION DE: (OBJETIVO PROFECIONAL) ES MUY LARGA NO OCUPAR MAS DE 400 CARACTERES");
            return false;
           }
            else if(habilidadesUa.length>300){
            bsAlert("DESCRIPCION DE: (MIS HABILIDADES) ES MUY LARGA NO OCUPAR MAS DE 300 CARACTERES");
            return false;
           }
            else if(ccomputoUa.length>300){
            bsAlert("DESCRIPCION DE: (CONOCIMIENTOS EN COMPUTACION) ES MUY LARGA NO OCUPAR MAS DE 300 CARACTERES");
            return false;
           }
           else if(ultimopuestoUa.length>400){
            bsAlert("DESCRIPCION DE: (MI ULTIMO PUESTO) ES MUY LARGA NO OCUPAR MAS DE 400 CARACTERES");
            return false;
           }
            else if(funcionesactividadesUa.length>400){
            bsAlert("DESCRIPCION DE: (FUNCIONES Y ACTIVIDADES REALIZADAS) ES MUY LARGA NO OCUPAR MAS DE 400 CARACTERES");
            return false;
           }
           
            else  
           {  
                $.ajax({  
                     url:"lib/enviocorreocopia.php",  
                     method:"POST",  
                     data:$('#formaRegistro1').serialize(),  
                     beforeSend:function(){  
                          $('#result').html('<img src="images/pacman3.gif" height="140" width="140" >');
                     },  
                     success:function(data){  
                      $('#exampleModal').modal('show');   

                            
                      
                        
                     }  
                });  
           }  
});


           $('#codigopostalU').focusout(function(n) {
                var consulta;
                    consulta = $("#codigopostalU").val();
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

           
           function cerrar() { 
        //$("body").html('<div alignt="center"><h1>Enviado Exitosamente!!!</h1></div>'); //Marca nuevo contenido con un mensaje que se envio exitosamente

 window.location='http://189.194.250.30:8085/empleo/index.html';
       
        setTimeout(function(){
            window.close();
        },3000); //Dejara un tiempo de 3 seg para que el usuario vea que se envio el formulario correctamente


    }
      function validaedad(elemento){
  if (!/^([0-9]+[0-9]\-+[0-9]+[0-9])*$/.test(elemento.value)){
      bsAlert("INGRESA DATOS COMO EN EL EJEMPLO MOSTRADO");
      elemento.value = '';
  }
}

function validatexto(elemento){
  if (!/^([a-zA-Zá-ú])*$/.test(elemento.value)){
      bsAlert("Ingrese los datos correspon");
      elemento.value = '';
  }
}
  function validanumero(elemento){
  if (!/^([0-9]|[x-y-X-Y]|[(-)])*$/.test(elemento.value)){
      bsAlert("INGRESA SOLO NUMEROS O UNA (X) EN CASO DE QUE NO TENGAS UN DATO ESPESIFICO");
      elemento.value = '';
  }
}
  function validanumeropostal(elemento){
  if (!/^([0-9])*$/.test(elemento.value)){
      bsAlert("INGRESA SOLO NUMEROS Y UN CODIGO POSTAL VALIDO");
      elemento.value = '';
  }
}


  

        </script>

</body>
</html>
