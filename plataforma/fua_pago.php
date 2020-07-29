<?php include("sesiones.php"); 
include("../lib/functions.php");
include("../lib/config.php");
$menu = 1;
$PagaFolio = $_SESSION['folio'];

?>

<?php include("header.php"); ?>

		<!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
        <!--/ modernizr -->
        
        <!-- ==========================================
        ================= PayPal Btn ===================
        =========================================== -->
        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
		 <!--/ paypal  -->

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
                                            <h1 class="custom-font text-success">¡Excelente! tu solicitud se completo</h1>
                                            
                                        </div>
                                        <!-- /tile header -->
        
                                        <!-- tile body -->
                                        <div class="tile-body">
                                        
                                          <div class="row">
        
        										<div class="col-md-6">
                                                    <p>Para concluir el tramite de tu licencia, se debe de cubrir el importe de $<?php echo $importe_cedula ?>.00 pesos para la expedición de la <span class="text-primary">Cédula Informativa de Zonificación</span>, misma que te llegara al correo electrónico que proporcionaste una vez que se realice el pago correspondiente.</p>
                                                    
                                                    <p>El Pago lo puedes hacer ahora mismo mediante PayPal o bien descargar el formato único de pago para el Banco y/o Tesorería</p>
                                                    <p>Si realizas el pago mediante PayPal recibiras en <strong>menos de 15 minutos </strong>por correo electrónico tu <span class="text-blue"> Licencia de funcionamiento </span>.</p>
                                                    
                                                    <p> Si pagas en el banco, escanea o fotografía tu comprobante y súbelo en esta seccíon para que te enviemos por correo electrónico tu <span class="text-blue"> Licencia de funcionamiento </span>.</p>
                                                
                                                <div class="row">
                                              		
                                                    <div class="col-md-6 text-center">
                                                        <h4 class="custom-font text-blue">Pagar ahora con PayPal</h4> 
                                                         <div id="paypal-button-container"></div>
                                                    </div>
                                                        <!-- /col -->
                                                    <div class="col-md-6 text-center">
                                                        <h4 class="custom-font text-blue">Pagar en banco</h4>
                                                       <a href="lib/formato_pago.php" target="_blank" class="btn btn-default btn-ef btn-ef-3 btn-ef-3a mb-10 btn-block"><i class="fa fa-download"></i> Descargar Formato Pago </a>
                                                   </div>
                                                           
                                            	</div>
                                                
       											</div>
                                            <!-- row -->
                                              <div class="col-md-6">
                                                    <!-- col -->
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
				
				//PayPal Render Btn
			 paypal.Button.render({

				env: 'sandbox', // sandbox | production
	
				// PayPal Client IDs - replace with your own
				// Create a PayPal app: https://developer.paypal.com/developer/applications/create
				client: {
					sandbox:    'Af3Hd5aXHL1qhkJQsFnmgA_ofRn55xr8Eabt07ZsADebnt-CYG4kmOKwTi1y4DlbUdTgFQ4rYrVB497Q',
					production: 'sanmateoatencopp@gmail.com'
				},
	
				// Show the buyer a 'Pay Now' button in the checkout flow
				commit: true,
	
				// payment() is called when the button is clicked
				payment: function(data, actions) {
				return actions.payment.create({
						transactions: [
							{
								amount: { total: '214.00', currency: 'MXN' }
							}
						]
		
						}, {
							input_fields: {
								no_shipping: 1
								
						}
					
					});
				},
	
				// onAuthorize() is called when the buyer approves the payment
				onAuthorize: function(data, actions) {
	
					// Make a call to the REST api to execute the payment
					return actions.payment.execute().then(function() {
						
						window.alert('Pago Completado!');
						
						location.replace("pago_fin.php");
						
						
					});
				}
	
			}, '#paypal-button-container');
						
				
				

            });
        </script>
        <!--/ Page Specific Scripts -->






    </body>
</html>
