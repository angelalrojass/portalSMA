<?php include("../sesiones.php"); 
include("../../lib/config.php");


if (!$nivelUsuario == 2 || !$nivelUsuario == 9){
	redirect_to('../salir.php');
} 

$menu = 0;


/////Contamos la data
$mysqli = new MySQLi($server,$user,$password,$database);
$mysqli->set_charset('utf8');

$data1 = "SELECT `usuarioid` FROM `usuarios` WHERE `tipousuario` = '1'";
$result1 = mysqli_query($mysqli, $data1);
$CuantoUSers = mysqli_num_rows($result1);

$data2 = "SELECT `idSolicitud` FROM `solicitudes`";
$result2 = mysqli_query($mysqli, $data2);
$CuantasSols = mysqli_num_rows($result2);

$data3 = "SELECT `idLicencia` FROM `licencias`";
$result3 = mysqli_query($mysqli, $data3);
$CuantasLics = mysqli_num_rows($result3);

$data4= "SELECT SUM(`monto`) AS TOTAL FROM `tesoreria`";
$result4 = mysqli_query($mysqli, $data4);
if($result4) {
	while($row = mysqli_fetch_assoc($result4)) {
		$TotalRecDB = $row["TOTAL"];

	}
}


$data5 = "SELECT `capturo` FROM `solicitudes` WHERE `capturo` = '2'";
$result5 = mysqli_query($mysqli, $data5);
$CuantasVentanilla = mysqli_num_rows($result5);

$mysqli->close();




?>

<?php include ("header.php") ?>
 </head>

    <body id="minovate" class="appWrapper">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">

            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="index.html">
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->

                </header>

            </section>
            <!--/ HEADER Content  -->

            <div id="controls">

                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Menu principal <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
										<?php include ("navegacion.php") ?>

                                    </div>
                                </div>
                            </div>
                            <div class="panel charts panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarCharts">
                                            En esta semana <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarCharts" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="summary">

                                            <div class="media">
                                                <a class="pull-right" role="button" tabindex="0">
                                                    <span class="sparklineChart"
                                                          values="5, 8, 3, 4, 6, 2, 1, 9, 7"
                                                          sparkType="bar"
                                                          sparkBarColor="#92424e"
                                                          sparkBarWidth="6px"
                                                          sparkHeight="36px">
                                                    Cargando...</span>
                                                </a>
                                                <div class="media-body">
                                                    Registros en Ventanilla
                                                    <h4 class="media-heading"><?php echo $CuantasVentanilla; ?></h4>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>


                </aside>
                <!--/ SIDEBAR Content -->


            </div>
            <!--/ CONTROLS Content -->

            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-dashboard">

                    <div class="pageheader">

                        <h2>Sistema de Licencias de Funcionamiento <span></span></h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="./"><i class="fa fa-home"></i> Módulo de Ventanilla única</a>
                                </li>
                                <li>
                                    <a href="./">Escritorio</a>
                                </li>
                            </ul>

                            

                        </div>

                    </div>

                    <!-- cards row -->
                    <div class="row">

						<div class="card-container col-lg-3 col-sm-6 col-sm-12">
                            <div class="card">
                                <div class="front bg-greensea">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-users fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0"><?php echo $CuantoUSers; ?></p>
                                            <span>Usuarios Registrados</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <div class="back bg-greensea">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                           
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                            </div>
                        </div>
                        <!-- col -->
                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                            <div class="card">
                                <div class="front bg-lightred">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-file-text-o fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0"><?php echo $CuantasSols; ?></p>
                                            <span>Solicitudes Ingresadas</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <div class="back bg-lightred">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                           
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                            </div>
                        </div>                     
                          <!-- col -->
                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                            <div class="card">
                                <div class="front bg-blue">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-file-text fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0"><?php echo $CuantasLics; ?></p>
                                            <span>Licencias Expedidas</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <div class="back bg-blue">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                           
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                          
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                           
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                            </div>
                        </div>
                         
                        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                            <div class="card">
                                <div class="front bg-slategray">

                                    <!-- row -->
                                    <div class="row">
                                        
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-12">
                                            <p class="text-elg text-strong mb-0">$ <?php echo $TotalRecDB; ?></p>
                                            <span>Monto Recaudado</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                <div class="back bg-slategray">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                           
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                            </div>
                        </div>
                         
                         
                     

                    </div>
                    <!-- /row -->




                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">
                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font">Trámites <strong>Registrados </strong></h1>
                                    
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body table-custom">

                                    <div class="table-responsive">
                                        <table class="table table-custom" id="project-progress">
                                            <thead>
                                            <tr>
                                                <th>Fecha Trámite</th>
                                                <th>Folio</th>
                                                <th>Nombre</th>
                                                <th>Estatus</th>
                                                <th></th>
                                                <th>Expediente</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php include("lib/listado_tramites.php") ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->
                        </div>
                        <!-- /col -->


                    </div>
                    <!-- /row -->

                </div>

                
            </section>
            <!--/ CONTENT -->

            <!-- Splash Modal -->
            <div class="modal splash fade" id="splashForma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title custom-font">Carga de Comprobante de Pago</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row" id="contenedorForma">
        
        										<div class="col-md-11">
                                                	<form name="comprobantePago" id="comprobantePago" class="form-horizontal" role="form" enctype="multipart/form-data">
                                                   		<div class="form-group">
                                                        	<label for="folio" class="col-sm-5 control-label"> Folio <span class="text-danger">*</span></label>
                                                        
                                                       		<div class="col-md-6"> 
                                                            
                                                            <input type="text" class="form-control" name="folio" id="folio" readonly>
                                                            </div>
                                                        </div>
                                                        
                                                    	<div class="form-group">
                                                            <label for="CompPag" class="col-sm-5 control-label"> Cargar comprobante Pago <span class="text-danger">*</span></label>
                                                            
                                                            <div class="col-sm-4">
                                                             <button id="CompPag" class="btn btn-primary btn-block btn-ef btn-ef-7 btn-ef-7a"><i class="fa fa-upload" aria-hidden="true"></i> Subir Archivo</button>
                                                            </div>
                                                            
                                                            <div class="col-sm-3">
                                                                  <div id="progressOuter" class="progress progress-striped active" style="display:none;">
                                                                    <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                  </div>
                                                                  <div id="msgBox"></div>
                                                             </div>
                                                                              
                                                          </div>
                                                        <div class="form-group">
                                                            <label for="banco" class="col-sm-5 control-label">¿Dónde realizó su pago?: <span class="text-danger">*</span></label>
                                                            
                                                            <div class="col-sm-7">
                                                            <select class="form-control mb-10" id="banco" name="banco" tabindex="3" required>
                                                            <option value="">Seleccione...</option>
                                                            <?php include("../lib/bancos.php") ?>
                                                            </select>
                                                            

                                                            </div>
                                                            
                                                       	  </div>
                                                        
                                                        
                                                        <div class="form-group">
                                                            <label class="col-sm-5 control-label">Fecha en que realizó el pago</label>
                                                              <div class="col-sm-7">
                                                                  <div class='input-group datepicker mt-10' data-format="L">
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
                                                
                                                                            
                                          </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default btn-border" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

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


        </div>
        <!--/ Application Content -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="../assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="../assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="../assets/js/vendor/d3/d3.min.js"></script>
        <script src="../assets/js/vendor/d3/d3.layout.min.js"></script>

 

        <script src="../assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="../assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="../assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="../assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="../assets/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="../assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="../assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="../assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="../assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>

   



        <script src="../assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="../assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="../assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="../assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="../assets/js/vendor/summernote/summernote.min.js"></script>

        <script src="../assets/js/vendor/coolclock/coolclock.js"></script>
        <script src="../assets/js/vendor/coolclock/excanvas.js"></script>
        <script src="../assets/js/SimpleAjaxUploader.js"></script>
        <!--/ vendor javascripts -->
        
        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="../assets/js/main.js"></script>
        <!--/ custom javascripts -->


        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
       <script>
			
		
            $(window).load(function(){
				
				$('a.idDelFolio').click(function() {
					var folioId = $(this).data('id');
					$('#folio').val(folioId);
				}); 
				
				
				///Enviamos Comprobante de Pago
				$("#comprobantePago").submit(function(e){
						e.preventDefault();
						
						
						var data = $('#comprobantePago').serialize();
						var mFol = $('#folio').val();
						$('#splashForma').modal('toggle');
						
						$.ajax({
							  url: '../lib/guarda_pago.php',
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
										  $("#procesa01").load("../lib/cedula_notificacion.php",{folio:mFol}, 
										  function(response, status, xhr) {
												  if (status == "error") {
													var msg = "Error!, algo ha sucedido creando la licencia: ";
													$(".generate_txt").text(msg + xhr.status + " " + xhr.statusText);
												  }
										  });
										  
										  $('.generate_txt').text('Generando Carta Compromiso...');
										  //Ejecuta cedula
										  $("#procesa02").load("../lib/carta_compromiso.php",{folio:mFol}, 
										  function(response, status, xhr) {
												  if (status == "error") {
													var msg = "Error!, algo ha sucedido creando la licencia: ";
													$(".generate_txt").text(msg + xhr.status + " " + xhr.statusText);
												  }
										  });
										  
										  $('.generate_txt').text('Generando Licencia...');
										  //Ejecuta Licencia
										  $("#procesa03").load("../lib/licencia.php",{folio:mFol}, 
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
										    location.reload();
											
															
											
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
						url: '../lib/file_uploadCP.php',
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