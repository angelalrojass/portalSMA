<?php include("sesiones.php"); 
include("../lib/functions.php");
include("../lib/config.php");

if ($nivelUsuario == 2 || $nivelUsuario == 9){
	redirect_to('./sare/');
} elseif ($nivelUsuario == 3 || $nivelUsuario == 9) {
	redirect_to('./pcivil/');
} elseif ($nivelUsuario == 4 || $nivelUsuario == 9) {
	redirect_to('./tesoreria/');
}		


	
$menu = 0;


?>

<?php include("header.php"); ?>
        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <!--/ modernizr -->




    </head>





    <body id="sanmateo" class="appWrapper">

<!--[if lt IE 8]>
    <p class="browserupgrade">Estas usando un navegador web <strong>obsoleto</strong>. Necesitas actualizarlo para poder navegar este sitio <a href="http://browsehappy.com/">actualizar mi navegador</a> .</p>
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

                <div class="page page-dashboard">

                    <div class="pageheader">

                        <h2>Sistema de apertura rápida de empresas</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="./"><i class="fa fa-home"></i> Inicio:</a>
                                </li>
                                <li>
                                    <a href="./"> Escritorio</a>
                                </li>
                            </ul>

                        </div>

                    </div>

                    <!-- cards row -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-md-8">


                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Bienvenido</strong> <?php echo $nombre; ?> <?php echo $apellidoPat; ?> <?php echo $apellidoMat; ?> </h1>
                                    
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <h4 class="custom-font text-strong">Estimado usuario:</h4>
                                    <p>Para completar el trámite de su Licencia de Funcionamiento es necesario que seleccione el giro de su empresa, para proceder a la captura de su solicitud.</p>

                                     <div class="panel panel-slategray">
                                        <div class="panel-heading">
                                            <h3 class="panel-title custom-font">Buscador de Giros</h3>
                                        </div>
                                        <div class="panel-body">
                                            <!-- tile body -->
                                            <div class="tile-body">

                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Buscador</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="giro" name="giro" placeholder="Palabra clave">

                                                            <p class="help-block mb-0 ">Para seleccionar su giro comience por escribir en el buscador la plabar clave que mejor describa su negocio y el sistema le irá mostrando las opciones disponibles para su giro ejemplo: si su negocio es una "papelería" escriba en el buscador <strong>"papel"</strong> y en automatico le apareceran las opciones disponibles</p>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                </form>

                                            </div>
                                            <!-- /tile body -->
                                            <div id="requisitos"></div>
                                        </div>
                                    </div>

  

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->
                        </div>

                            <!-- col -->
                        <div class="col-md-4">

                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Descargas</strong> Disponibles</h1>
                                    
                                </div>
                                <!-- /tile header -->
						
                                 <!-- tile body -->
                                <div class="tile-body">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title custom-font">Ayuda</h3>
                                        </div>
                                        <div class="panel-body">
                                            <a href="#" target="_blank" class="btn btn-default btn-ef btn-ef-3 btn-ef-3a mb-10 btn-block"><i class="fa fa-download"></i> Manual de Usuario </a>
                                        </div>
                                    </div>


                                   

                                
                                </div>
                                <!-- /tile body -->
                            </section>

                        </div>


                    </div>
                    <!-- /row -->


                </div>

            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->




<!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        

        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="assets/js/vendor/d3/d3.min.js"></script>
        <script src="assets/js/vendor/d3/d3.layout.min.js"></script>

 

        <script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>

   



        <script src="assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="assets/js/vendor/summernote/summernote.min.js"></script>

        <script src="assets/js/vendor/coolclock/coolclock.js"></script>
        <script src="assets/js/vendor/coolclock/excanvas.js"></script>
        
        <script src="assets/js/vendor/form-wizard/jquery.bootstrap.wizard.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->  

    <!-- ===============================================
    ============== Page Specific Scripts ===============
    ================================================ -->
   
    
    <script>

        $(window).load(function(){
			
				   
					$( "#giro" ).autocomplete({
					  	source:'lib/giros_comerciales.php', 
						minLength:3,
						select: function(event,ui){	var code = ui.item.id;
							if(code !== '') {
								//location.href = '/index.php?id_categoria=' + code;
								 $("#requisitos").load('lib/requisitos.php?idr='+code+'&pag=1');
							}
						},
								// optional
						html: true, 
						// optional (if other layers overlap the autocomplete list)
						open: function(event, ui) {
							$(".ui-autocomplete").css("z-index", 1000);
						}
					});
            
                //Initialize mini calendar datepicker
                $('#mini-calendar').datetimepicker({
                    inline: true
                });
                //*Initialize mini calendar datepicker
                

            //initialize datatable
            $('#project-progress').DataTable({
                "aoColumnDefs": [
                  { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                ],
            });
            //*initialize datatable

           
        });
        
        
    </script>
    <!--/ Page Specific Scripts -->


    </body>
</html>
