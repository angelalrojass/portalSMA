<?php include("sesiones.php"); 
include("../lib/functions.php");
include("../lib/config.php");
$menu = 2;

$mysqli = new MySQLi($server,$user,$password,$database);
$mysqli->set_charset('utf8');

$SiHay  = 0;
$query = "SELECT `usuarioid` FROM `solicitudes` WHERE `usuarioid`='$idUsuario' ";

$result = mysqli_query($mysqli, $query);
if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		$SiHay  = $row['usuarioid'];

	}
} else {
	
}

$mysqli->close();
?>

<?php include("header.php"); ?>

		<!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <link rel="stylesheet" href="assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
        <!--/ modernizr -->
    </head>


    <body id="sanmateo" class="appWrapper">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



		<!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">

            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="./">
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->

                </header>

            </section>
            <!--/ HEADER Content  -->

            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">

                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <?php include("menu.php"); ?>
                <!--/ SIDEBAR Content -->

            </div>
            <!--/ CONTROLS Content -->

            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-forms-wizard">

                    <div class="pageheader">

                        <h2>Sistema de apertura rápida de empresas </h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="./"><i class="fa fa-home"></i> Escritorio</a>
                                </li>
                                <li>
                                    <a href="#">Solicitud en línea</a>
                                </li>
                                
                            </ul>
                            
                        </div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">
                    	
                           <!-- tile body -->
    
    								<section class="tile">

                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font text-success">Módulo de Comprobante de Pago</h1>
                                            
                                        </div>
                                        <!-- /tile header -->
        
                                        <!-- tile body -->
                                        <div class="tile-body">
                                           
                                           <?php if($SiHay >= 1){ ?>
                                           
                                          <div class="row" id="contenedorForma">
        
        										<div class="col-md-6">
                                                	<form name="comprobantePago" id="comprobantePago" class="form-horizontal" role="form" enctype="multipart/form-data">
                                                   
                                                    	<div class="form-group">
                                                            <label for="CompPag" class="col-sm-6 control-label"> Cargar comprobante Pago <span class="text-danger">*</span></label>
                                                            
                                                            <div class="col-sm-4">
                                                             <button id="CompPag" class="btn btn-primary btn-block btn-ef btn-ef-7 btn-ef-7a"><i class="fa fa-upload" aria-hidden="true"></i> Subir Archivo</button>
                                                            </div>
                                                            
                                                            <div class="col-sm-2">
                                                                  <div id="progressOuter" class="progress progress-striped active" style="display:none;">
                                                                    <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                  </div>
                                                                  <div id="msgBox"></div>
                                                             </div>
                                                                              
                                                          </div>
                                                        <div class="form-group">
                                                            <label for="banco" class="col-sm-6 control-label">¿Dónde realizó su pago?: <span class="text-danger">*</span></label>
                                                            
                                                            <div class="col-sm-6">
                                                            <select class="form-control mb-10" id="banco" name="banco" tabindex="3" required>
                                                            <option value="">Seleccione...</option>
                                                            <?php include("lib/bancos.php") ?>
                                                            </select>
                                                            

                                                            </div>
                                                            
                                                       	  </div>
                                                        <div class="form-group">
                                                            <label for="folio" class="col-sm-6 control-label">Seleccion el Folio de su solicitud: <span class="text-danger">*</span></label>
                                                            
                                                            <div class="col-sm-6">
                                                            <select class="form-control mb-10" id="folio" name="folio" tabindex="3" required>
                                                          
                                                            <?php 
																$mysqli = new MySQLi($server,$user,$password,$database);
																$mysqli->set_charset('utf8');
																$query = "SELECT `usuarioid`, `Folio` FROM `solicitudes` WHERE `usuarioid`='$idUsuario' AND `estatusId` = '1'";
																$result = mysqli_query($mysqli, $query);
																if($result) {
																	while($row = mysqli_fetch_assoc($result)) {
																		$id  = $row['Folio'];
																
																		
																		echo '<option value="'.$id.'">'.$id.'</option>';
																
																
																	}
																} 
																		
																$mysqli->close();
															
															?>
                                                            </select>
                                                            

                                                            </div>
                                                            
                                                       	  </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-6 control-label">Fecha en que realizó el pago</label>
                                                              <div class="col-sm-5">
                                                                  <div class='input-group datepicker w-360 mt-10' data-format="L">
                                                                        <input type='text' class="form-control" name="FechaPago" value="FechaPago" />
                                                                        <span class="input-group-addon">
                                                                            <span class="fa fa-calendar"></span>
                                                                        </span>
                                                                  </div>
                                                              </div>
                                       					 </div>
                                                        <div class="form-group">
                                                        	<div class="col-md-6">
                                                            </div>
                                                        
                                                       		<div class="col-md-6"> <button type="submit" id="EnviaPago" class="btn btn-success btn-block btn-ef btn-ef-7 btn-ef-7a"><i class="fa fa-share" aria-hidden="true"></i > Enviar Pago</button>
                                                            </div>
                                                        </div>
                                                    
                                                    </form>
                                                
       											</div>
                                                <div class="col-md-6">
                                                </div>
                                                                                        
                                          </div>
                                          
                                          <?php } else { ?>
                                          <div class="row">
                                                <div class="col-md-8">
                                                    <h2 class="custom-font text-success">¡Aún no tienes solicitudes registradas!</h2>
                                                    <p>Para usar esta opción es necesario que tengas al menos una solicitud capturada</p>
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                           </div>
                                           <?php } ?>
                                          <!-- /row -->
                                          <!-- row -->  
                                          <div class="row" id="listo" style="display:none">
                                                <div class="col-md-8">
                                                    <h2 class="custom-font text-success">¡Excelente proceso finalizado!</h2>
                                                    <p>Te confirmamos que el proceso del trámite de <strong>Licencia de Funcionamiento SARE</strong>, lo has concluido satisfactoriamente, tu licencia, cédula de zonificación y carta compromiso fueron enviados a tu correo electrónico, o bien puedes seleccionar en el menú izquierdo la opción de documentos para descargarlos.</p>
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                           </div>

        
                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->

                    </div>
                    <!-- /page content -->

                </div>
                
            </section>

        </div>
        <!--/ Application Content -->

		        
        <div id="modal_box">
            <span class="generate_txt" style="font-size:16px; color:#FFFFFF;">Almacenando información...</span>
            <span class="loader">
            
           		 <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                       
                    </div>
                </div>
            </span>
        </div>

        
        <div id="splash"></div>
        <div id="procesa01" style="display:none"></div>
        <div id="procesa02" style="display:none"></div>
        <div id="procesa03" style="display:none"></div>
		<!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/vendor/jRespond/jRespond.min.js"></script>
        <script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>
        <script src="assets/js/vendor/screenfull/screenfull.min.js"></script>
        <script src="assets/js/vendor/parsley/parsley.min.js"></script>       
        <script src="assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>
        <script src="assets/js/vendor/form-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <!--/ vendor javascripts -->

        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/SimpleAjaxUploader.js"></script>
        
        <!--/ custom javascripts -->
		
		
        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
			
		
            $(window).load(function(){
				
				
				///Enviamos Comprobante de Pago
				$("#comprobantePago").submit(function(e){
						e.preventDefault();
						
						
						var data = $('#comprobantePago').serialize();
						var mFol = $('#folio').val();
						
						$.ajax({
							  url: 'lib/guarda_pago.php',
							  type: "POST",
							  data:data,
							  dataType: "html",
							  beforeSend: function() {
								loadModal(true);
							  },
							  success: function(data){
								  $('.generate_txt').text('Generando documentos...');
								  if(data === "OK"){
									  setTimeout(function(){
										  $('.generate_txt').text('Generando Cédula...');
										  //Ejecuta la Cédula
										  $("#procesa01").load("lib/cedula_notificacion.php",{folio:mFol}, 
										  function(response, status, xhr) {
												  if (status == "error") {
													var msg = "Error!, algo ha sucedido creando la licencia: ";
													$(".generate_txt").text(msg + xhr.status + " " + xhr.statusText);
												  }
										  });
										  
										  $('.generate_txt').text('Generando Carta Compromiso...');
										  //Ejecuta cedula
										  $("#procesa02").load("lib/carta_compromiso.php",{folio:mFol}, 
										  function(response, status, xhr) {
												  if (status == "error") {
													var msg = "Error!, algo ha sucedido creando la licencia: ";
													$(".generate_txt").text(msg + xhr.status + " " + xhr.statusText);
												  }
										  });
										  
										  $('.generate_txt').text('Generando Licencia...');
										  //Ejecuta Licencia
										  $("#procesa03").load("lib/licencia.php",{folio:mFol}, 
										  function(response, status, xhr) {
												  if (status == "error") {
													var msg = "Error!, algo ha sucedido creando la licencia: ";
													$(".generate_txt").text(msg + xhr.status + " " + xhr.statusText);
												  }
										  });
										  
										  
										  
										  setTimeout(function(){
											  
											$('#splash').fadeOut();
											$('#modal_box').fadeOut();
											$("#contenedorForma").hide("slow");
											$("#listo").fadeIn();
											
															
											
										  },3000);
									},3000);
									
								   }else{
									  var er='<span>Error: Se perdion la conexión a internet verifíque</span>';
									  
									   setTimeout(function(){
									  $('#modal_box').html(er);
									  $('#splash').fadeOut();
									  
									   },1500);
								  }
							  }
						});
					});
				
					
					function loadModal(v){
							if(v==false && $('#splash').css('display')=='none'){
							return false;
							}
							var box = $('#modal_box');
							var box_w = 300;
							var box_h = 200;
							var winH = $(document).height();
							var winBoxH = $(window).height();
							var winW = $(window).width();
							$('#splash').css({'width':winW,'height':winH});
							box.css({'width':box_w,'height':box_h,'top':(winBoxH/2 - box_h/2),'left':(winW/2 - box_w/2)});
							$('#splash').fadeIn();
							$('#modal_box').fadeIn();
							$('#modal_box').html();
							
					}
					$(window).resize(function () {
							loadModal(false);
					});
					
					//Subimos comprobante
					
					var btn = document.getElementById('CompPag'),
	  				    progressBar = document.getElementById('progressBar'),
						progressOuter_seis = document.getElementById('progressOuter'),
					    msgBox= document.getElementById('msgBox');
						
						
		  
					var uploader = new ss.SimpleUpload({
						button: btn,
						url: 'lib/file_uploadCP.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter.style.display = 'block'; 
							this.setProgressBar( progressBar );
						},
						onSubmit: function() {
							msgBox.innerHTML = ''; 
							btn.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn.style.display = 'block';
							btn.innerHTML = '<i class=\"fa fa-history\"></i> Cargar de nuevo'; 
							progressOuter.style.display = 'none';
				
							if ( !response ) {
								msgBox.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox.innerHTML = response.msg;
				
								} else {
									msgBox.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter.style.display = 'none';
							msgBox.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
			
						
				
				

            });
        </script>
        <!--/ Page Specific Scripts -->






    </body>
</html>
