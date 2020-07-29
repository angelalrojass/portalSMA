
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
                               <li><a href="listav.php">VACANTES</a></li>
                             </ul>
                            
                            

                        </div>

                        <div class="col-md-9">
                        
                        	<div class="heading-block mb-40">
                                <h2 class="text-uppercase"><span class="text-theme">Registro de empresa</span> </h2>
                                
                            </div>
							
                            <div id="contenedorForma">
                     <!--      <form id="formaRegistro" onsubmit="return validars();">-->




 <form id="formaRegistro2" action="login.php" name="formaRegistro2" method="post" >


    <div class="row">
                                    <div class="form-group col-sm-12">
                                     <p class="text-theme"><strong>IMPORTANTE: </strong>Si ya se registro puede ver los datos completos de las vacantes con solo ingresar tu correo registrado y una contraseña que se le mando por correo al momento de aceptar la solicitud de registro, caso contrario primero debe de registrarse</p>
                                     </div>
                                </div>
                          
                     	 <div class="row">
                                    <div class="form-group col-sm-4">
                                        
                                    </div>
                                  
                                    <div class="form-group col-sm-4">
                                        <label for="corrreopas">Correo Electrónico<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="corrreopas" type="text" class="form-control myInput" id="corrreopas" onpaste="return false" required placeholder="Ej: usuario@gmail.com">
                                    </div>
                                   <div class="form-group col-sm-4">
                                       
                                    </div>
                                    
                                </div>

                                 <div class="row">
                                    <div class="form-group col-sm-4">
                                        
                                    </div>
                                  
                                    <div class="form-group col-sm-4">
                                        <label for="contrapas">Contraseña<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="contrapas" type="text" class="form-control myInput" id="contrapas" onkeypress= "return solonumeros(event)" onpaste="return false"required placeholder="Ej: 0123456789">
                                    </div>
                                   <div class="form-group col-sm-4">
                                       
                                    </div>
                                    
                                </div>
                                   <div class="row">
                                    <div class="form-group col-sm-4">
                                        
                                    </div>
                                  
                                    <div class="form-group col-sm-4">
                                        <button type="submit" name="Enviar"  id="Enviar" value="Enviar" class="myBtn myBtn-rounded myBtn-lg myBtn-3d m-0 mt-10">INGRESAR</button>
                                    </div>
                                   <div class="form-group col-sm-4">
                                       
                                    </div>
                                    
                                </div>

</form>


                           
                           <form id="formaRegistro1"">
                           		
                               
                                
                                <div class="row">
                                
                                
                          			 <div class="heading-block mb-10">

                                        
                                        <h2 class="panel-title"><span class="text-theme">DATOS GENERALES</span>  </h2>
                                    </div>
                           		
                                    
                                	
                            </div>
                                           
                                


                              












  
                                  <div class="row">
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="tipodeempresaU">Tipo de Empresa<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="tipodeempresaU" required="" id="tipodeempresaU" class="form-control" >
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">Pública</option>
                                            <option value="2">Privada</option>
                                            <option value="3">Organismo no Gubernamental</option>
                                            <option value="4">Agencia y Outsourcing</option>
                                          </select>

                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="rfcU">RFC</label>
                                        <input name="rfcU" type="text" class="form-control myInput" id="rfcU" onkeypress= "return letrasynumeros(event)" onpaste="return false"required placeholder="Ej: MELM8305281H0">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="razonsocialU">Razón Social<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="razonsocialU" type="text" class="form-control myInput" id="razonsocialU"  onpaste="return false" onkeypress= "return letrasynumeros(event)" require placeholder="Eje: McDonald’s / Arcos Dorados, C.A.">
                                    </div>
                                     
                                </div>
                                
                                
                                 
 <div class="row">

                                <div class="heading-block mb-10">

                                        
                                    <h2 class="panel-title"><span class="text-theme">DOMICILIO DEL EMPLEADOR</span>  </h2>
                                    </div>
                                    
                                    <div class="form-group col-sm-4">
                                        <label for="codigopostalU">Código Postal<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="codigopostalU" id="codigopostalU" onchange="return validanumeropostal(this)" onpaste="return false" required/>
                                    </div>
                                    
                                    <div class="form-group col-sm-4" id="contColonia">
                                        <label for="coloniaU">Colonia <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="coloniaU" id="coloniaU"required />
                                    </div>
                                    

                    </div> 



                                   <div class="row">

                                     <div class="heading-block mb-10">

                                        
                                        <h2 class="panel-title"><span class="text-theme"></span> AMPLIAR DOMICILIO </h2>
                                    </div>
                          
                                    <div class="form-group col-sm-4" >
                                        <label for="calleU">Calle<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="calleU" id="calleU" onkeypress= "return sololetras(event)" onpaste="return false" required />
                                    </div>
                           
                                    <div class="form-group col-sm-4">
                                        <label for="numeroexteriorU">Número Exterior<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="numeroexteriorU" id="numeroexteriorU" onchange="return validanumero(this)"required placeholder="Eje: 1511"/>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="numerointeriorU">Número Interior</label>
                                        <input type='text' class="form-control" name="numerointeriorU" id="numerointeriorU" onchange="return validanumero(this)" required placeholder="Eje: 1512" />
                                    </div>
                                 </div>

                                  <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="entrecallesU">Entre qué calles (tipo y nombre)<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="entrecallesU" id="entrecallesU"  onkeypress= "return letrasynumeros(event)" required />
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="form-group col-sm-12">
                                     <p class="text-theme"><strong>IMPORTANTE: </strong>Asegúrese de proporcionar CORRECTAMENTE tus DATOS, ya que por medio de estos la vacante podra ponerse en contacto con usted; si en los campos solicitados hay alguno que no pueda proporcinar solo márquela con una X</p>
                                     </div>
                                </div>




                                
                  <hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">CLASIFICACIÓN</h2>
                                    </div>

                                      <div class="form-group col-sm-12">
                                     <p class="text-theme"><span class="text-lightred" style="font-size: 15px">ÁREA DE INTERÉS</span></p>
                                     </div>

                                 <div class="row">
                         
                                    <div class="form-group col-sm-6">
                                        <label for="idEstado">ESPECIALIDAD <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="idEstado" id="idEstado" class="form-control" required>
                                            
                                           
                                             <?php include("especialidad1.php") ?>
                    </select>

                                    </div>
                                    
                                    <div class="form-group col-sm-6" id="ContMunicipio">
                                        <label for="idMunicipio">SUBÁREA DE ESPECIALIDAD <span class="text-lightred" style="font-size: 15px">*</span> </label>
                                        <select name="idMunicipio" id="idMunicipio" class="form-control" required >
                                            <option value=""> ----- Seleccionar ----- </option>
                                                <option value="1"></option>
                                                
                    </select>
                  </div>
                                    
                                 </div>

                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                     <p class="text-theme"><strong>IMPORTANTE: </strong>: Asegúrese de proporcionar CORRECTAMENTE tu AREA DE ESPECIALIDAD y SUBÁREA DE ESPECIALIDAD ya que a través de estos sera el medio que lo podrán BUSCAR</p>
                                     </div>
                                </div>



                                 

                                 <hr>
                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">DESCRIPCIÓN Y RECLUTAMIENTO </span> </h2>
                                    </div>

                                <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="descripcionempresaU">Descripción de la empresa:<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="descripcionempresaU" id="descripcionempresaU"  onkeypress= "return caracteresespeciales(event)" onpaste="return false"required placeholder="Eje: ZTE Corporation es líder mundial en telecomunicaciones y tecnología de la información. Fundada en 1985, cotiza en las Bolsas de Valores de Hong Kong y Shenzhen."/>
                                    </div>
                                </div>
                                 <div class="row">
                                      <div class="form-group col-sm-12">
                                        <label for="mensajeempresaU">Mensaje breve a los candidatos, a sus ofertas de empleo; ¿Por qué formar parte de su equipo?:<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="mensajeempresaU" id="mensajeempresaU" onkeypress= "return caracteresespeciales(event)" onpaste="return false"required/>
                                    </div>
                                </div>

                            <div class="row">

                                    <div class="form-group col-sm-6" >
                                        <label for="edadU">RANGO DE EDAD:<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="edadU" id="edadU" onchange="return validaedad(this)" onpaste="return false" placeholder="Ej: 18-25"required/>
                                    </div>
                           

                                    <div class="form-group col-sm-6">
                                        <label for="sexoU">SEXO:<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select required="Seleccionar" name="sexoU" id="sexoU" class="form-control" >
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">MUJER</option>
                                            <option value="2">HOMBRE</option>
                                            <option value="3">INDISTINTO</option>
                                            
                                        </select>

                                    </div>
                                 </div>


                              <div class="row">

                                    <div class="form-group col-sm-6" >
                                        <label for="paginawebU">Página web de la empresa:</label>
                                        <input type='text' placeholder="Ej: www.pagina.com,gob, etc." required="" class="form-control" name="paginawebU" id="paginawebU" />
                                    </div>
                           

                                
                                 </div> 

                                 
                
                
                                <hr>
                                <div class="row">

                                    <div class="heading-block mb-10">
                                        <h2 class="panel-title"><span class="text-theme">DATOS DE PERSONA DE CONTACTO </h2>
                                    </div>
                                  <div class="form-group col-sm-4">
                                        <label for="nombreU">Nombre:<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="nombreU" type="text" class="form-control myInput" id="nombreU" onkeypress= "return sololetras(event)" onpaste="return false" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="apellidosU">Apellidos:<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input name="apellidosU" type="text" class="form-control myInput" id="apellidosU"onkeypress= "return sololetras(event)" onpaste="return false"required >
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="cargoU">Cargo<span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <select name="cargoU" id="cargoU" class="form-control" required>
                                            <option value=""> ----- Seleccionar ----- </option>
                                            <option value="1">Director</option>
                                            <option value="2">Gerente</option>
                                            <option value="3">Jefe</option>
                                            <option value="4">Coordinador</option>
                                            <option value="5">Analista</option>
                                          </select>

                                    </div>

                                    



                                
                        




    <hr>
                                  
                             
                                 
                                 
                                

                                

                               
                                    
</div>
  <div class="row">
                                    <div class="form-group col-sm-12">
                                     <p class="text-theme"><strong>IMPORTANTE: </strong>: Asegúrese de proporcionar una cuenta <span class="text-lightred" style="font-size: 15px">GMAIL o HOTMAIL</span></p>
                                     </div>
                                </div>

  <div class="row">
                          
                                    <div class="form-group col-sm-4" >
                                        <label for="telefonotU">Teléfono <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="telefonotU" id="telefonotU" onchange="return validanumero(this)" onpaste="return false" placeholder="Ej:(01)(722)1234567" required/>
                                    </div>
                           
                                    <div class="form-group col-sm-4">
                                        <label for="telefonocU">Correo <span class="text-lightred" style="font-size: 15px">*</span></label>
                                        <input type='text' class="form-control" name="telefonocU" id="telefonocU" placeholder="Ej: usuario@gmail.com" required>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="telefonopU">Días y Hora de Entrevista </label>
                                        <input type='text' class="form-control" name="telefonopU" id="telefonopU" onkeypress= "return caracteresespeciales(event)" onpaste="return false" required />
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

                            
                           <!-- <div id="gracias"></div>-->
                            

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




             function rango(e){

            key=e.keyCode || e.Which;
            teclado=String.fromCharCode(key).toLowerCase();
            letras="1234567890-";
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

             function caracteresespeciales (e){

            key=e.keyCode || e.Which;
            teclado=String.fromCharCode(key).toLowerCase();
            letras=" abcdefghijklmnñopqrstuvwzxy1234567890,.()*+-:;/";
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
            letras=" abcdefghijklmnñopqrstuvwxyz1234567890,.()*+-:;/";
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
            letras=" abcdefghijklmnñopqrstuvwzxz";
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
            letras=" 1234567890";
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

        var tipodeempresaUa= document.getElementById("tipodeempresaU").value;
        var rfcUa = document.getElementById("rfcU").value;
        var razonsocialUa= document.getElementById("razonsocialU").value;
        var codigopostalUa= document.getElementById("codigopostalU").value;
        var coloniaUa = document.getElementById("coloniaU").value;
        var calleUa = document.getElementById("calleU").value;
        var numeroexteriorUa = document.getElementById("numeroexteriorU").value;
        var numerointeriorUa = document.getElementById("numerointeriorU").value;
        var entrecallesUa = document.getElementById("entrecallesU").value;
        var idEstadoa= document.getElementById("idEstado").value;
        var idMunicipioa=document.getElementById("idMunicipio").value;
        var descripcionempresaUa=document.getElementById("descripcionempresaU").value;
        var mensajeempresaUa=document.getElementById("mensajeempresaU").value;
        var edadUa=document.getElementById("edadU").value;
        var sexoUa=document.getElementById("sexoU").value;
        var paginawebUa=document.getElementById("paginawebU").value;
        var nombreUa=document.getElementById("nombreU").value;
        var apellidosUa=document.getElementById("apellidosU").value;
        var cargoUa=document.getElementById("cargoU").value;
        var telefonotUa=document.getElementById("telefonotU").value;
        var telefonocUa=document.getElementById("telefonocU").value;
        var telefonopUa=document.getElementById("telefonopU").value;
        var exprecion=/\w+@\w+\.+[a-z]/;
  //if($('#rfcU').val() == "")  
           if(tipodeempresaUa==""||  rfcUa=="" || razonsocialUa =="" ||codigopostalUa=="" || coloniaUa==""|| calleUa==""||numeroexteriorUa==""|| entrecallesUa==""|| idEstadoa=="" || idMunicipioa==""|| descripcionempresaUa==""|| mensajeempresaUa==""|| edadUa==""||sexoUa=="0" ||paginawebUa==""|| nombreUa==""||apellidosUa==""|| cargoUa==""||telefonotUa==""|| telefonocUa==""||telefonopUa=="")  
           
           {  
                bsAlert("INGRESA TODOS LOS CAMPOS OBLIGATORIOS, MARCADOS CON UN ASTERISCO ROJO");  
           
           }

           else if(idEstadoa==""){
            alert("selecciona");
            return false;
           }

            else if(rfcUa.length>=14 ){
            bsAlert("INGRESA UN RFC CORRECTO");
            return false;
           }
           else if(entrecallesUa.length>250){
            bsAlert("DESCRIPCION DE CALLES ES MUY LARGA NO OCUPAR MAS DE 250 CARACTERES");
            return false;
           }
            else if(descripcionempresaUa.length>500){
            bsAlert("DESCRIPCION DE EMPRESA ES MUY LARGA NO OCUPAR MAS DE 500 CARACTERES");
            return false;
           }
           else if(mensajeempresaUa.length>500){
            bsAlert("MENSAJE A LOS CANDIDATOS ES MUY LARGA NO OCUPAR MAS DE 500 CARACTERES");
            return false;
           }
           else if(telefonotUa.length>14){
           bsAlert("TELEFONO INCORRECTO");
            return false;
           }
            else if(!exprecion.test(telefonocUa)){
            bsAlert("NO ES UN CORREO VALIDO");
            return false;
           }

           else if(telefonopUa.length>150){
           bsAlert("LA DESCRIPCION DE DIAS Y HORA DE ENTREVISTA ES MUY LARGA NO OCUPAR MAS DE 500 CARACTERES");
            return false;
           }
           
           else  
           {  
                $.ajax({  
                     url:"lib/enviocorreoSMA1.php",  
                     method:"POST",  
                     data:$('#formaRegistro1').serialize(),  
                     beforeSend:function(){  
                         $('#result').html('<img src="images/pacman3.gif" height="140" width="140" >');
                      
                     },  
                     success:function(data){ 
                     $('#exampleModal').modal('show');

                    //bsAlert("A hora verfica tu correo");
                    // window.location='https://getbootstrap.com/docs/4.3/components/modal';
             

             
                            
                      
                              

                     }  
                });  
           }  
    

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
  if (!/^([0-9]|[x-y-X-Y])*$/.test(elemento.value)){
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
