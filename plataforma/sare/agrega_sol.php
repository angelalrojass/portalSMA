<?php include("../sesiones.php"); 
include("../../lib/functions.php");

if (!$nivelUsuario == 2 || !$nivelUsuario == 9){
	redirect_to('../salir.php');
} 
$menu = 1;



?>

<?php include ("header.php") ?>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                                                    <h4 class="media-heading">0</h4>
                                                </div>
                                            </div>

                                            <div class="media">
                                                <a class="pull-right" role="button" tabindex="0">
                                                    <span class="sparklineChart"
                                                          values="2, 4, 5, 3, 8, 9, 7, 3, 5"
                                                          sparkType="bar"
                                                          sparkBarColor="#397193"
                                                          sparkBarWidth="6px"
                                                          sparkHeight="36px">
                                                    Cargando...</span>
                                                </a>
                                                <div class="media-body">
                                                    Licencias en Ventanilla
                                                    <h4 class="media-heading">0</h4>
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
                                    <a href="agrega_sol.php">Capturar Solicitud</a>
                                </li>
                                <li>
                                    Selecciona Giro
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
                                    <h1 class="custom-font"><strong>Selección </strong>Giro Comercial</h1>
                                    
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body table-custom">

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
                        <!-- /col -->


                    </div>
                    <!-- /row -->

                </div>

                
            </section>
            <!--/ CONTENT -->

        </div>
        <!--/ Application Content -->
        
		<?php include("footer.php") ?>

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
               
			   $( "#giro" ).autocomplete({
					  	source:'../lib/giros_comerciales.php', 
						minLength:3,
						select: function(event,ui){	var code = ui.item.id;
							if(code !== '') {
								//location.href = '/index.php?id_categoria=' + code;
								 $("#requisitos").load('../lib/requisitos.php?idr='+code+'&pag=1');
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
                

            

     
               
            });
        </script>
        <!--/ Page Specific Scripts -->






       

    </body>
</html>