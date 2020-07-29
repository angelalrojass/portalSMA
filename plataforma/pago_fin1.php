

<?php include("header.php"); ?>

		<!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
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
                    	
                         <!-- tile -->
                            <section class="tile">
					        <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font">FORMATO ÚNICO DE CAPTURA</h1>
                                    
                                </div>
                                <!-- /tile header -->
							</section>
                                <!-- tile body -->
    
    								<section class="tile">

                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font text-success">¡Gracias por su pago!</h1>
                                            
                                            
                                        </div>
                                        <!-- /tile header -->
        
                                        <!-- tile body -->
                                        <div class="tile-body">
                                        
                                          <div class="row" id="contenedorForma">
        
        										<div class="col-md-6">
                                                    <p>Para concluir el trámite haz click en Terminar</p>
                                                    <form name="comprobantePago" id="comprobantePago" class="form-horizontal" role="form" >

													<input type="hidden" name="folio" id="folio" value="<?php echo $PagaFolio;?>">
													
                                                    <input type="hidden" name="FechaPago" value="<?php echo $FechaPago;?>">
                                                    <input type="hidden" name="banco" value="<?php echo $Banco?>">
                                                    <input type="hidden" name="usuario" value="<?php echo $idUsuario;?>">
												   <button type="submit" id="EnviaPago" class="btn btn-success btn-ef btn-ef-7 btn-ef-7a"><i class="fa fa-share" aria-hidden="true"></i > Terminar</button>
                                                            
                                                    </form>
                                                    
                                                
                                                
                                                
       											</div>
                                            <!-- row -->
                                              <div class="col-md-6">
                                              
                                                    <!-- col -->
                                              </div>
                                          
                                                
                                            </div>
                                            <div class="row" id="listo" style="display:none">
                                                <div class="col-md-8">
                                                    <h2 class="custom-font text-success">¡Excelente proceso finalizado!</h2>
                                                    <p>Te confirmamos que el proceso del trámite de <strong>Licencia de Funcionamiento SARE</strong>, lo has concluido satisfactoriamente, tu licencia, cédula de zonificación y carta compromiso fueron enviados a tu correo electrónico, o bien puedes seleccionar en el menú izquierdo la opción de documentos para descargarlos.</p>
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                           </div>
                                            <!-- /row -->
        
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
		
				
				

            });
        </script>
        <!--/ Page Specific Scripts -->






    </body>
</html>
