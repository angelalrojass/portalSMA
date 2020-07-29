<?php include("../sesiones.php"); 
include("../../lib/config.php");


if (!$nivelUsuario == 2 || !$nivelUsuario == 9){
	redirect_to('../salir.php');
} 

$menu = 1;

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

                               <section class="tile">

                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font text-success">Módulo de Comprobante de Pago</h1>
                                            
                                        </div>
                                        <!-- /tile header -->
        
                                        <!-- tile body -->
                                        <div class="tile-body">
                                        
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

                            </section>
                            <!-- /tile -->
                        </div>
                        <!-- /col -->


                    </div>
                    <!-- /row -->

                </div>

                
            </section>
            <!--/ CONTENT -->


			



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
               

     
               
            });
        </script>
        <!--/ Page Specific Scripts -->






       

    </body>
</html>