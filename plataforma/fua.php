<?php include("sesiones.php"); 
/*include("../lib/functions.php");*/

if ($nivelUsuario == 2 || $nivelUsuario == 9){
	redirect_to('./sare/');
} elseif ($nivelUsuario == 3 || $nivelUsuario == 9) {
	redirect_to('./pcivil/');
} elseif ($nivelUsuario == 4 || $nivelUsuario == 9) {
	redirect_to('./tesoreria/');
}
include("../lib/config.php");
include("lib/class-folio.php");

//Si existe la sesion asignamos el folio a la sesion
$_SESSION['folio'] = $folio_solicitud;

$menu = 1;
$fecha = date("d/M/Y");

if (isset($_SESSION['uid'])){
	
	$idgiro = $_SESSION['idGiro'];
	
	
	$mysqli = new MySQLi($server,$user,$password,$database);
	$mysqli->set_charset('utf8');
	
	$query = "SELECT * FROM giros_comerciales WHERE idGiro='$idgiro'";
	
	$result = mysqli_query($mysqli, $query);
	
	if($result) {
		while($row = mysqli_fetch_assoc($result)) {
			$riesgo = $row['riesgo'];
			$giro = strtoupper($row['categoria']);
			$clave= $row['calveScian'];
		}
	} 
	
	
	$users = "SELECT * FROM `usuarios` WHERE `usuarioid`='$idUsuario'";
	$datos = mysqli_query($mysqli, $users);
	if($datos) {
		while($row = mysqli_fetch_assoc($datos)) {
			$Tsexo = $row['sexo'];
			$Tcalle = $row['calle'];
			$Tcolonia = $row['colonia'];
			$Tnumero = $row['numero'];
			$TcodigoPostal = $row['codigoPostal'];
			$TtelefonoParticular = $row['telefonoParticular'];
			$TtelefonoTrabajo = $row['telefonoTrabajo'];
			$Tcelular = $row['celular'];
		}
	} 
	
}
$mysqli->close();
?>

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
                                <!-- tile body -->
                                <div id="gracias" style="display:none">
    
    								<section class="tile">

                                        <!-- tile header -->
                                        <div class="tile-header dvd dvd-btm">
                                            <h1 class="custom-font">¡Excelente! tu solicitud se completo</h1>
                                            
                                        </div>
                                        <!-- /tile header -->
        
                                        <!-- tile body -->
                                        <div class="tile-body">
        
                                                <p>Para concluir el tramite de tu licencia, se debe de cubrir el importe de $<?php echo $importe_cedula ?>.00 pesos para la expedición de la <span class="text-primary">Cédula Informativa de Zonificación</span>, misma que te llegara al correo electrónico que proporcionaste una vez que se realice el pago correspondiente.</p>
                                                <p>El Pago lo puedes hacer ahora mismo mediante PayPal o bien descargar el formato único de pago para el Banco y/o Tesorería</p>
        
                                            <hr />
        
                                            <!-- row -->
                                            <div class="row">
                                                <!-- col -->
                                                <div class="col-md-6">
                                                     <div class="well"><button class="btn btn-default btn-ef btn-ef-3 btn-ef-3a mb-10 btn-block"><i class="fa fa-cc-paypal"></i> Pagar Pay Pal</button></div>
            
                                                </div>
                                                <!-- /col -->
                                                <div class="col-md-6">
                                                    <div class="well"><button class="btn btn-default btn-ef btn-ef-3 btn-ef-3a mb-10 btn-block"><i class="fa fa-download"></i> Descargar Formato Pago </button></div>
                                                </div>
                                            </div>
                                            <!-- /row -->
        
                                        </div>
                                        <!-- /tile body -->

                                    </section>
                                    <!-- /tile -->
                             

                                </div>
                                
                                <div class="tile-body" id="contenedorForma">
                                <p class="text-blue"> Todos los campos son obligatorios </p>
                                
                       				 <div id="rootwizard" class="tab-container tab-wizard">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li><a href="#tab1" data-toggle="tab">Datos del Solicitante <span class="badge badge-default pull-right wizard-step">1</span></a></li>
                                            <li><a href="#tab2" data-toggle="tab">Datos del Establecimiento<span class="badge badge-default pull-right wizard-step">2</span></a></li>
                                            <li><a href="#tab3" data-toggle="tab">Datos Económicos<span class="badge badge-default pull-right wizard-step">3</span></a></li>
                                            <li><a href="#tab4" data-toggle="tab">Documentación<span class="badge badge-default pull-right wizard-step">4</span></a></li>
                                            <li><a href="#tab5" data-toggle="tab">Finalizar<span class="badge badge-default pull-right wizard-step">5</span></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab1">
            
                                                <form name="step1" id="Paso1" class="form-horizontal" role="form">
                                                	
                                                    <div class="row">
                                                    
                                                    	<div class="col-md-12">
                                                        
                                                      		<div class="form-group">
                                                                <label for="girosol" class="col-sm-2 control-label">Giro Comercial Seleccionado</label>
                                                                <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="girosol" value="<?php echo $giro; ?>" disabled>
                                                                <p class="help-block mb-0">Si este no es el Giro Comercial de su empresa o negocio vuelva al inicio y busque de nuevo</p>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>

                                                    </div>
            
                                                    <div class="row">
                                                    
                                                   		<div class="col-md-4">
                                                    
                                                            <div class="form-group">
                                                                <label for="fecsol" class="col-sm-3 control-label">Fecha Expedición</label>
                                                                <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="fecsol" name="fecsol" value="<?php echo $fecha; ?>" disabled>
                                                                </div>
                                                            </div>
                                                            
                                                         </div>
                                                         
                                                         <div class="col-md-4">
            
                                                            <div class="form-group">
                                                                <label for="folio" class="col-sm-3 control-label">Folio</label>
                                                                <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="folio" name="folio" value="<?php echo $folio_solicitud ?>" disabled>
                                                                </div>
                                                            </div>
                                                            
            											 </div>
            											 
                                                         <div class="col-md-2">
                                                        	
                                                            <label class="col-sm-6 control-label">Uso</label>
                                            				<div class="col-sm-6">
                                                        
                                                                <div class="form-group">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="usolic" id="usolic1" tabindex="1" value="1" required>
                                                                            Comercial
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="usolic" id="usolic2" tabindex="2" value="2" required>
                                                                            Servicios
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                          </div>
                                                            
                										</div>
                                                        
                                                        <div class="col-md-2">
                                                        	
                                                            <label class="col-sm-6 control-label">Persona</label>
                                            				<div class="col-sm-6">
                                                        
                                                                <div class="form-group">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="pfm" id="pfm1" tabindex="3" value="1" required>
                                                                            Física
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="pfm" id="pfm2" tabindex="4" value="2" required>
                                                                            Moral
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                          </div>
                                                            
                										</div>
                                                      
                                                    </div><!-- EndRow -->
                                                    
            
                                                    <div class="row" id="PersonaFisica">
                                                         <!-- col -->
                                                        <div class="col-md-12">
            
                                                            <!-- tile -->
                                                            <section class="tile">
            
                                                                <!-- tile header -->
                                                                <div class="tile-header dvd dvd-btm">
                                                                    <h1 class="custom-font">Datos del Contratante</h1>
                                                                </div>
                                                                <!-- /tile header -->                                                            

                                                                <!-- tile body -->
                                                                <div class="tile-body">
                                                                
                                                                	<p class="help-block mb-0 text-danger">Los datos marcados con * son obligatorios</p>
                                                                
                                                                	<div class="col-md-6">

                                                                        <div class="form-group">
                                                                            <label for="Nombre" class="col-sm-4 control-label">Nombre(s) <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $nombre; ?>" tabindex="5" required>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="ApellidoPat" class="col-sm-4 control-label">Primer Apellido <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="ApellidoPat" name="ApellidoPat" value="<?php echo $apellidoPat; ?>" tabindex="6" required>
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="ApellidoMat" class="col-sm-4 control-label">Segundo Apellido <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="ApellidoMat" name="ApellidoMat" value="<?php echo $apellidoMat; ?>" tabindex="7" required>
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group" id="razsoc" style="display:none">
                                                                            <label for="RazSocE" class="col-sm-4 control-label">Razon Social <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="RazSocE" name="RazSocE" placeholder="Razón Social" tabindex="8">
                                                                            
                                                                            <p class="help-block mb-0">El nombre con el que registro su empresa/negocio en hacienda</p>
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                       <div class="form-group" id="nomcom">
                                                                            <label for="NomComE" class="col-sm-4 control-label">Nombre Comercial <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="NomComE" name="NomComE" placeholder="Nombre Comercial" tabindex="9" required>
                                                                            <p class="help-block mb-0">Por el que sus cliente conoceran su negocio Ejemplo: "Papeleria Lobito"</p>
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="rfc" class="col-sm-4 control-label">RFC (Opcional)</label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" tabindex="9">
                                                                            <p class="help-block mb-0">En caso de requerir factura el RFC deberá llevar homoclave</p>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 control-label">¿Requiere Factura?</label>
                                                                            <div class="col-sm-8">
                                
                                                                                
                                
                                                                                <div class="radio">
                                                                                    <label>
                                                                                        <input type="radio" name="qf" id="qf1" value="1" >
                                                                                        Sí
                                                                                    </label>
                                                                                </div>
                                                                                <div class="radio">
                                                                                    <label>
                                                                                        <input type="radio" name="qf" id="qf" value="2" checked="">
                                                                                        No
                                                                                    </label>
                                                                                </div>
                                                                                <p class="help-block mb-0">La factura se emite por los derechos de la Cédula de Zonificación</p>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="TelParticular" class="col-sm-4 control-label">Teléfono Particular</label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" value="<?php echo $TtelefonoParticular ?>" class="form-control" id="TelParticular" name="TelParticular" tabindex="10">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="TelMovil" class="col-sm-4 control-label">Teléfono Móvil</label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" value="<?php echo $Tcelular ?>" class="form-control" id="TelMovil" name="TelMovil" tabindex="11">
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="TelNego" class="col-sm-4 control-label">Teléfono Negocio</label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" value="<?php echo $TtelefonoTrabajo ?>" class="form-control" id="TelNego" name="TelNego" tabindex="12">
                
                                                                            </div>
                                                                        </div> 
                
                                                                        
                                                                    
                
            														</div>
                                                                    
                                                                    <div class="col-md-6">
                                                                    	
                                                                        
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="email" class="col-sm-4 control-label">Email <span class="text-danger">*</span></label>
                                                                                <div class="col-sm-8">
                                                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" tabindex="13">
                
                                                                                </div>
                                                                         </div>
            
                                                                        <div class="form-group">
                                                                            <label for="Calle" class="col-sm-4 control-label">Calle <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" value="<?php echo $Tcalle ?>" class="form-control" id="Calle" name="Calle" placeholder="Calle" tabindex="14" required>
                                                                            </div>
                                                                        </div>
                
                                                                        <div class="form-group">
                                                                            <label for="NumExt" class="col-sm-4 control-label">No. Exterior <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                             <input type="text" value="<?php echo $Tnumero ?>" class="form-control" id="NumExt" name="NumExt" tabindex="15" required>
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="NumInt" class="col-sm-4 control-label">No. Interior</label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="NumInt" name="NumInt" placeholder="No. Interior" tabindex="16">
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="CodPostal" class="col-sm-4 control-label">Código Postal <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" value="<?php echo $TcodigoPostal ?>" class="form-control" id="CodPostal" name="CodPostal" tabindex="17" required>
                                                                            </div>
                                                                        </div>
                
                                                                        <div id="volPF">
                                                                            <div class="form-group">
                                                                                <label for="Colonia" class="col-sm-4 control-label">Colonia <span class="text-danger">*</span></label>
                                                                                <div class="col-sm-8">
                                                                                <input type="text" value="<?php echo $Tcolonia ?>" class="form-control" id="Colonia" name="Colonia"  tabindex="18" required>
                                                                            	</div>
                                                                        
                                                                        	</div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="EntreCalles" class="col-sm-4 control-label">Entre la Calle<span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="EntreCalles" name="EntreCalles" placeholder="Entre que calles se encuentra el establecimiento" tabindex="19" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="EntreCalles" class="col-sm-4 control-label">Y la Calle<span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="YCalle" name="YCalle" placeholder="Entre que calles se encuentra el establecimiento" tabindex="19" required>
                                                                            </div>
                                                                        </div>
                
            														</div>
                                                                    
            
                                                                </div>
                                                                <!-- /tile body -->
                                                            </section>
            
                                                        </div>
            
                                                     </div>   
            
            										
                                                       
            
                                                </form>
            
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                            
                                            	<div class="row">
                                                         <!-- col -->
                                                        <div class="col-md-12">
                                                        
            												<form name="step2" id="Paso2" class="form-horizontal" role="form">
                                                            <!-- tile -->
                                                            <section class="tile">
            
                                                                <!-- tile header -->
                                                                <div class="tile-header dvd dvd-btm">
                                                                    <h1 class="custom-font">Datos del Inmueble</h1>
                                                                </div>
                                                                <!-- /tile header -->                                                            

                                                                <!-- tile body -->
                                                                <div class="tile-body">
                                                                
                                                                    	
                                                                    <div class="row">
                                                    
                                                                         
                                                                         <div class="col-md-6">
                                                                            
                                                                            <label class="col-sm-8 control-label">¿El domicilio fiscal es el mismo del contratante? <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-4">
                                                                        
                                                                                <div class="form-group">
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="domfis" id="domfis1" tabindex="1" value="1" required checked="">
                                                                                            Sí
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="domfis" id="domfis2" tabindex="2" value="2" required>
                                                                                            Nó
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                          </div>
                                                                            
                                                                        </div>
                                                                        
                                                                        <div class="col-md-6">
                                                                            
                                                                            <label class="col-sm-8 control-label" id="labeRepLegal">¿El representante legal es el mismo que el contratante? <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-4">
                                                                        
                                                                                <div class="form-group" id="BtnRepLegal">
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="repleg" id="repleg1" tabindex="3" value="1" checked="">
                                                                                            Sí
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="repleg" id="repleg2" tabindex="4" value="2" >
                                                                                            No
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                          </div>
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                      
                                                                    </div><!-- EndRow -->    
                                                                    
                                                                    <hr>
                                                                
                                                                	<div class="col-md-6">
                                                                    
                                                                    	<div class="form-group" id="OpCalleFis" style="display:none">
                                                                            <label for="CalleFis" class="col-sm-4 control-label">Calle <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="CalleFis" name="CalleFis" placeholder="Calle" tabindex="5">
                                                                            </div>
                                                                        </div>
                
                                                                        <div class="form-group" id="OpNunExtFis" style="display:none">
                                                                            <label for="NunExtFis" class="col-sm-4 control-label">No. Exterior <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                             <input type="text" class="form-control" id="NumExtFis" name="NumExtFis" placeholder="No. Exterior" tabindex="6">
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group" id="OpNumIntFis" style="display:none">
                                                                            <label for="NumIntFis" class="col-sm-4 control-label">No. Interior</label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="NumIntFis" name="NumIntFis" placeholder="No. Interior" tabindex="7">
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group" id="OpCodPostalFis" style="display:none">
                                                                            <label for="CodPostalFis" class="col-sm-4 control-label">Código Postal <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="CodPostalFis" name="CodPostalFis" placeholder="Código Postal" tabindex="8">
                                                                            </div>
                                                                        </div>
                
                                                                        <div id="volPFFis" style="display:none">
                                                                        
                                                                        </div>
                                                                        <hr>
                                                                        
                                                                         <div class="form-group" id="OpNombreFis" style="display:none">
                                                                            <label for="NombreFis" class="col-sm-4 control-label">Nombre(s) <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="NombreFis" name="NombreFis" value="<?php echo $nombre; ?>" tabindex="9">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group" id="OpApellidoPatFis" style="display:none">
                                                                            <label for="ApellidoPatFis" class="col-sm-4 control-label">Primer Apellido <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="ApellidoPatFis" name="ApellidoPatFis" value="<?php echo $apellidoPat; ?>" tabindex="10">
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group" id="OpApellidoMatFis" style="display:none">
                                                                            <label for="ApellidoMatFis" class="col-sm-4 control-label">Segundo Apellido <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="ApellidoMatFis" name="ApellidoMatFis" value="<?php echo $apellidoMat; ?>" tabindex="11">
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                    
                                                                    	<div class="form-group">
                                                                            <label for="SupMts" class="col-sm-6 control-label">Superficie ocupada por el establecimiento <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="SupMts" name="SupMts" placeholder="Metres Cuadrados" tabindex="12" required>
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="NumLevels" class="col-sm-6 control-label">Número de Niveles <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="NumLevels" name="NumLevels" placeholder="Número de Niveles" tabindex="13" required>
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="CajEsta" class="col-sm-6 control-label">Número de cajones de estacionamiento <span class="text-danger">*</span> </label>
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="CajEsta" name="CajEsta" placeholder="Número de cajones de estacionamiento" tabindex="14" required>
                                                                            
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="CveCat" class="col-sm-6 control-label">Clave catastral (Opcional)  </label>
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="CveCat" name="CveCat" placeholder="Clave catastral" tabindex="15">
                
                                                                            </div>
                                                                        </div>
            
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                                
                                                            </section>
                                                         </form>
                                                         
                                                         </div>
                                                         
                                                    </div>
            
                                            </div>
                                            
                                            <div class="tab-pane" id="tab3">
            
                                                <form name="step3" id="Paso3"  class="form-horizontal" role="form">
            
                                                    <div class="row">
                                                         <!-- col -->
                                                        <div class="col-md-12">
                                                        
            												
                                                            <!-- tile -->
                                                            <section class="tile">
            
                                                                <!-- tile header -->
                                                                <div class="tile-header dvd dvd-btm">
                                                                    <h1 class="custom-font">Datos Económicos</h1>
                                                                </div>
                                                                <!-- /tile header -->                                                            

                                                                <!-- tile body -->
                                                                <div class="tile-body">
                                                                
                                                                	<p class="help-block mb-0 text-danger">Los datos marcados con * son obligatorios</p>
                                                                
                                                                	<div class="col-md-6">
                                                                    	<div class="form-group">
                                                                            <label for="InvEst" class="col-sm-6 control-label">¿Cuenta con anuncio?: <span class="text-danger">*</span></label>
                                                                            
                                                                            <div class="col-sm-6">
                                                                            <select class="form-control mb-10" id="anuncio" name="anuncio" tabindex="1" required>
                                                                            <option value="">Seleccione...</option>
                                                                            <option value="1">Sí</option>
                                                                            <option value="2">No</option>
                                                                            </select>

                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="tipoAnuncio" class="col-sm-6 control-label">Tipo de Anuncio <span class="text-danger">*</span></label>
                                                                            
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="tipoAnuncio" name="tipoAnuncio" placeholder="Luminoso/Lona/Metal" tabindex="2">
                                                                            <p class="help-block mb-0">Ingresa que tipo de anuncio tienes Luminoso/Lona/Metal</p>
                
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="leyenda" class="col-sm-6 control-label">Dimensiones del anuncio<span class="text-danger">*</span></label>
                                                                            
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="leyenda" name="leyenda" placeholder="Leyenda del Anuncio" tabindex="3">
                                                                            <p class="help-block mb-0">Dimensiones en metros Ejemplo: 3x5</p>
                
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="dimAnuncio" class="col-sm-6 control-label">Leyenda del Anuncio <span class="text-danger">*</span></label>
                                                                            
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="dimAnuncio" name="dimAnuncio" placeholder="Dimensiones" tabindex="4">
                                                                            
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                    	
                                                                        <div class="form-group">
                                                                            <label for="InvEst" class="col-sm-6 control-label">El Establecimiento es: <span class="text-danger">*</span></label>
                                                                            
                                                                            <div class="col-sm-6">
                                                                            <select class="form-control mb-10" id="propio" name="proren" tabindex="5" required>
                                                                            <option value="">Seleccione...</option>
                                                                            <option value="1">Propio</option>
                                                                            <option value="2">Rentado</option>
                                                                            </select>
                                                                            
                                                                            <p class="help-block mb-0">Cantidad en miles de pesos</p>
                
                                                                            </div>
                                                                        </div>
                                                                    
                                                                    	<div class="form-group">
                                                                            <label for="InvEst" class="col-sm-6 control-label">Inversión Estimada <span class="text-danger">*</span></label>
                                                                            
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="InvEst" name="InvEst" placeholder="Inversión Estimada" tabindex="6" required>
                                                                            <p class="help-block mb-0">Cantidad en miles de pesos</p>
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="NumEmp" class="col-sm-6 control-label">Número de Empleados <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="NumEmp" name="NumEmp" placeholder="Número de Empleados" tabindex="7" required>
                
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                             <label class="col-sm-7 control-label">Emplea usted personas con discapacidad</label>
                                                                            <div class="col-sm-5">
                                                                        
                                                                                <div class="form-group">
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="EmpDis" id="EmpDis1" tabindex="8" value="1" checked="">
                                                                                            Sí
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="radio">
                                                                                        <label>
                                                                                            <input type="radio" name="EmpDis" id="EmpDis2" tabindex="9" value="2">
                                                                                            No
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                          </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="CveCat" class="col-sm-6 control-label">¿Cuantos?  </label>
                                                                            <div class="col-sm-6">
                                                                            <input type="text" class="form-control" id="EmpDisNum" name="EmpDisNum" placeholder="Clave catastral" tabindex="10">
                
                                                                            </div>
                                                                        </div>
            
                                                                    </div>
                                                                    
                                                                    <div class="col-md-2">
                                                                    
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </section>
                                                     
                                                         
                                                         </div>
                                                         
                                                    </div>
            
                                                </form>
            
                                            </div>
                                            <div class="tab-pane" id="tab4">
            
                                                <form name="step4" id="Paso4" role="form" class="form-horizontal" enctype="multipart/form-data">
            
                                                     <div class="row">
                                                         <!-- col -->
                                                        <div class="col-md-12">
                                                        
            												
                                                            <!-- tile -->
                                                            <section class="tile">
            
                                                                <!-- tile header -->
                                                                <div class="tile-header dvd dvd-btm">
                                                                    <h1 class="custom-font">Comprobantes Digitales</h1>
                                                                </div>
                                                                <!-- /tile header -->                                                            

                                                                <!-- tile body -->
                                                                <div class="tile-body">
                                                                
                                                                	<p class="help-block mb-0 text-danger">Los datos marcados con * son obligatorios</p>
                                                                    <p class="help-block mb-0 text-primary">Si eres persona física deja en blanco Acta Constutiva</p>
                                                                
                                                                	<div class="col-md-1">
                                                                    </div>
                                                                    
                                                                    <div class="col-md-10">
                                                                    
                                                                    	<div class="form-group">
                                                                            <label for="Ine" class="col-sm-4 control-label"> Identificación Oficial <span class="text-danger">*</span></label>
                                                                            
                                                                            <div class="col-sm-4">
                                                                             <button id="IneBtn" class="btn btn-large btn-primary">Subir Archivo</button>
                                                                        	</div>
                                                                            
                                                                            <div class="col-sm-4">
                                                                                  <div id="progressOuter_cero" class="progress progress-striped active" style="display:none;">
                                                                                    <div id="progressBar_cero" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                                  </div>
                                                                                  <div id="msgBox_cero"></div>
                                                                             </div>
                                                                              
                
                                                                        </div>
                                                                        
                                                                       
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="CompDom" class="col-sm-4 control-label">Comprobante de domicilio <span class="text-danger">*</span></label>
                                                                            
                                                                            <div class="col-sm-4">
                                                                             <button id="CompDomBtn" class="btn btn-large btn-primary">Subir Archivo</button>
                                                                        	</div>
                                                                            
                                                                            <div class="col-sm-4">
                                                                                  <div id="progressOuter_uno" class="progress progress-striped active" style="display:none;">
                                                                                    <div id="progressBar_uno" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                                  </div>
                                                                                  <div id="msgBox_uno"></div>
                
                                                                        	</div>
                                                                            
                                                                         </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="Foto1F" class="col-sm-4 control-label">Foto Fachada <span class="text-danger">*</span></label>
                                                                            <div class="col-sm-4">
                                                                             <button id="Foto1FBtn" class="btn btn-large btn-primary">Subir Archivo</button>
                                                                        	</div>
                                                                            
                                                                            <div class="col-sm-4">
                                                                                  <div id="progressOuter_dos" class="progress progress-striped active" style="display:none;">
                                                                                    <div id="progressBar_dos" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                                  </div>
                                                                                  <div id="msgBox_dos"></div>
                
                                                                        	</div>
                
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="Foto1Int" class="col-sm-4 control-label">Foto Interior <span class="text-danger">*</span></label>
                                                                            
                                                                            <div class="col-sm-4">
                                                                             <button id="Foto1IntBtn" class="btn btn-large btn-primary">Subir Archivo</button>
                                                                        	</div>
                                                                            
                                                                            <div class="col-sm-4">
                                                                                  <div id="progressOuter_cuatro" class="progress progress-striped active" style="display:none;">
                                                                                    <div id="progressBar_cuatro" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                                  </div>
                                                                                  <div id="msgBox_cuatro"></div>
                
                                                                        	</div>
                
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="ActaCons" class="col-sm-4 control-label">Acta Constitutiva</label>
                                                                            
                                                                            <div class="col-sm-4">
                                                                             <button id="ActaConsBtn" class="btn btn-large btn-primary">Subir Archivo</button>
                                                                        	</div>
                                                                            
                                                                            <div class="col-sm-4">
                                                                                  <div id="progressOuter_seis" class="progress progress-striped active" style="display:none;">
                                                                                    <div id="progressBar_seis" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                                                  </div>
                                                                                  <div id="msgBox_seis"></div>
                
                                                                        	</div>
                
                                                                        </div>
                                                                        
                                                                        
            
                                                                    </div>
                                                                    
                                                                    <div class="col-md-1">
                                                                    
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </section>
                                                     
                                                         
                                                         </div>
                                                         
                                                    </div>
                                                    <input type="hidden" id="folio" name="folio" value="<?php echo $folio_solicitud ?>">
                                                      <input type="hidden" id="id_user" name="id_user" value="<?php echo $idUsuario;?>">
                                                      <input type="hidden" id="giro" name="giro" value="<?php echo $idgiro;?>">
                                                </form>
            
                                            </div>
                                            <div class="tab-pane" id="tab5">
                                            
            
                                                <p class="well">La información que se almacena en este sitio, pública o privada, se inscribe dentro de las disposiciones que en la materia establece la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental, La Ley de Protección de Datos Personales y el Instituto Federal de Acceso a la informaciín y Protección de Datos.</p>
            
                                                <form name="step5" id="Paso5" role="form" >
                                                
                                                	<div class="row">
                                                         <!-- col -->
                                                        <div class="col-md-12">
                                                        
            												
                                                            <!-- tile -->
                                                            <section class="tile">
            
                                                                <!-- tile header -->
                                                                <div class="tile-header dvd dvd-btm">
                                                                    <h1 class="custom-font">Declaraciones del contratante</h1>
                                                                </div>
                                                                <!-- /tile header -->                                                            

                                                                <!-- tile body -->
                                                                <div class="tile-body">
                                                                
                                                                	<p class="help-block mb-0 text-danger">se tiene que aceptar todas las declaraciones</p>
                                                                    	 <div class="col-md-2">
                                                                         </div>
                                                                         
                                                                          <div class="col-md-10">
                                                                			<div class="checkbox">
                                                                            <label class="checkbox checkbox-custom-alt">
                                                                                <input type="checkbox" name="Dec1" id="Dec1"
                                                                                       required><i></i>EL CIUDADANO PRESENTA ESTA SOLICITUD VOLUNTARIAMENTE, BAJO PROTESTA DE DECIR VERDAD Y MANIFIESTA QUE LOS DATOS CONTENIDOS SON VERIDICOS Y COMPROBABLES EN CUALQUIER MOMENTO.
                                                                            </label>
                                                                        </div>
                                                                       	 
                                                                       		<div class="checkbox">
                                                                            <label class="checkbox checkbox-custom-alt">
                                                                                <input type="checkbox" name="Dec2" id="Dec2"
                                                                                       required><i></i>EL CIUDADANO DECLARA QUE LOS DOCUMENTOS QUE LO ACOMPAÑAN SON FIELMENTE REPRODUCIDOS DE SU ORIGINAL.
                                                                            </label>
                                                                        </div>
                                                                        
                                                                        	<div class="checkbox">
                                                                            <label class="checkbox checkbox-custom-alt">
                                                                                <input type="checkbox" name="Dec3" id="Dec3"
                                                                                       required><i></i>EL CIUDADANO SEÑALA COMO DOMICILIO CONVENCIONAL PARA TODO LO REFERENTE AL PRESENTE FORMATO, EL REGISTRADO EN ESTA SOLUCITUD.
                                                                            </label>
                                                                        </div>
                                                                        
                                                                        	<div class="checkbox">
                                                                            <label class="checkbox checkbox-custom-alt">
                                                                                <input type="checkbox" name="Dec4" id="Dec4"
                                                                                       required><i></i>EL CIUDADANO DECLARA SER EL RESPONSABLE DEL ESTABLECIMIENTO, NO OBSTANTE LLEVAR A CABO LA OPERACIÓN DEL MISMO A TRAVÉS DE TERCERAS PERSONAS.
                                                                            </label>
                                                                        </div>
                                                                        
                                                                        	<div class="checkbox">
                                                                            <label class="checkbox checkbox-custom-alt">
                                                                                <input type="checkbox" name="Dec5" id="Dec5"
                                                                                       required><i></i>EL CIUDADANO MANIFIESTA QUE EL ESTABLECIMIENTO ESTÁ HABILITADO PARA CUMPLIR CON LAS FUNCIONES QUE SE ASIENTAN EN EL PRESENTE
                                                                            </label>
                                                                        </div>
                                                                        
                                                                        	<div class="checkbox">
                                                                            <label class="checkbox checkbox-custom-alt">
                                                                                <input type="checkbox" name="Dec6" id="Dec6"
                                                                                       required><i></i>EL CIUDADANO PRESENTARA EL AVISO DE FUNCIONAMIENTO DE SALUBRIDAD EN LOS CASOS QUE CORRESPONDA.
                                                                            </label>
                                                                        </div>
                                                                        </div>
                                                                   
                                                                    
                                                                </div>
                                                                
                                                            </section>
                                                     
                                                         
                                                         </div>
                                                         
                                                    </div>
            										
                                                </form>
            
                                            </div>
                                            <ul class="pager wizard">
                                                <li class="previous"><button class="btn btn-primary">Anterior</button></li>
                                                <li class="next"><button class="btn btn-primary">Siguiente</button></li>
                                                <li class="next finish" style="display:none;"><button  class="btn btn-success" id="EnviaFin">Finalizar</button></li>
                                            </ul>
                                        </div>
                                    </div>             
                        		
                                </div>
							</section>
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
				
						
				
				///Enviamos FUA
				$("#EnviaFin").click(function(e){
						e.preventDefault();
						
						var data = $('#Paso1, #Paso2, #Paso3, #Paso4, #Paso5').serialize();
						
						$.ajax({
							  url: 'lib/fua_pdf.php',
							  type: "POST",
							  data:data,
							  dataType: "html",
							  beforeSend: function() {
								loadModal(true);
							  },
							  success: function(data){
								  $('.generate_txt').text('Procesando espere...');
								  if(data === "OK"){
									  setTimeout(function(){
										  $('.generate_txt').text('Finalizando...');
										  setTimeout(function(){
											$('#splash').fadeOut();
											$('#modal_box').fadeOut();
											location.replace("fua_pago.php");
											
											
										  },1500);
									},2000);
									
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

				//Activamos Representante Legal
				$("#repleg2").on( "click", function() {
					$('#OpNombreFis').show("slow");
					$('#OpApellidoPatFis').show("slow");
					$('#OpApellidoMatFis').show("slow");
					
					//
							
					function poner() {
						$('#NombreFis').attr("required", true);
						$('#ApellidoPatFis').attr("required", true);
						$('#ApellidoMatFis').attr("required", true);
					}

				 });
				 
				 //Activamos Representante Legal
				$("#repleg1").on( "click", function() {
					$('#OpNombreFis').hide("slow");
					$('#OpApellidoPatFis').hide("slow");
					$('#OpApellidoMatFis').hide("slow");
					
					//
							
					function poner() {
						$('#NombreFis').removeAttr("required");
						$('#ApellidoPatFis').removeAttr("required");
						$('#ApellidoMatFis').removeAttr("required");
					}

				 });
				
				
				////Activamos Domicilio Fiscal
				$("#domfis1").on( "click", function() {
					$('#OpCalleFis').hide("slow");
					$('#OpNunExtFis').hide("slow");
					$('#OpNumIntFis').hide("slow");
					$('#OpCodPostalFis').hide("slow");
					$('#volPFFis').hide("slow");
					
					//
							
					function quitar() {
						$('#CalleFis').removeAttr("required");
						$('#NunExtFis').removeAttr("required");
						$('#NumIntFis').removeAttr("required");
						$('#CodPostalFis').removeAttr("required");

					}

				 });
				 
				 $("#domfis2").on( "click", function() {
					$('#OpCalleFis').show("slow");
					$('#OpNunExtFis').show("slow");
					$('#OpNumIntFis').show("slow");
					$('#OpCodPostalFis').show("slow");
					$('#volPFFis').show("slow");
					
					//
							
					function poner() {
						$('#CalleFis').attr("required", true);
						$('#NunExtFis').attr("required", true);
						$('#NumIntFis').attr("required", true);
						$('#CodPostalFis').attr("required", true);
					}

				 });
				 
				
				
				
				////Persona Física o Moral
				$("#pfm1").on( "click", function() {
					$('#razsoc').hide("slow");
	
					//
						
					function quitar() {
						$('#RazSocE').removeAttr("required");

						$('#NombreFis').removeAttr("required");
						$('#ApellidoPatFis').removeAttr("required");
						$('#ApellidoMatFis').removeAttr("required");
						

					}

				 });
				 
				$("#pfm2").on( "click", function() {
					$('#razsoc').show("slow");

					$('#BtnRepLegal').show("slow");
					$('#labeRepLegal').show("slow");
					//
					function poner() {

						$('#RazSocE').attr("required", true);

					}
					
					
				});
				
				
				
				$('#CodPostalFis').focusout(function(n) {
				
				var consulta;
													 
				 	//obtenemos el texto introducido en el campo
				 	consulta = $("#CodPostalFis").val();
										  
				 	//hace la búsqueda
											   
					$.ajax({
						  type: "POST",
						  url: "lib/codigos-postales-fis.php",
						  data: "CodPostal="+consulta,
						  dataType: "html",
						  
						  error: function(){
								alert("error petición ajax");
						  },
						  success: function(data){   
						  
						  		$('#volPFFis').html(data);

						  }
					  });
				});
				
				
				$('#CodPostal').focusout(function(n) {
				
				var consulta;
													 
				 	//obtenemos el texto introducido en el campo
				 	consulta = $("#CodPostal").val();
										  
				 	//hace la búsqueda
											   
					$.ajax({
						  type: "POST",
						  url: "lib/codigos-postales.php",
						  data: "CodPostal="+consulta,
						  dataType: "html",
						  
						  error: function(){
								alert("error petición ajax");
						  },
						  success: function(data){   
						  
						  		$('#volPF').html(data);

						  }
					  });
				});
									
						var btn_seis = document.getElementById('ActaConsBtn'),
	  				    progressBar_seis = document.getElementById('progressBar_seis'),
						progressOuter_seis = document.getElementById('progressOuter_seis'),
					    msgBox_seis = document.getElementById('msgBox_seis');
						
						
		  
					var uploader_seis = new ss.SimpleUpload({
						button: btn_seis,
						url: 'lib/file_upload06.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_seis.style.display = 'block'; 
							this.setProgressBar( progressBar_seis );
						},
						onSubmit: function() {
							msgBox_seis.innerHTML = ''; 
							btn_seis.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_seis.style.display = 'block';
							btn_seis.innerHTML = 'Cargar de nuevo'; 
							progressOuter_seis.style.display = 'none';
				
							if ( !response ) {
								msgBox_seis.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_seis.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_seis.innerHTML = response.msg;
				
								} else {
									msgBox_seis.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_seis.style.display = 'none';
							msgBox_seis.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
				
					
				
					//Carga los documentos
					var btn_cuatro = document.getElementById('Foto1IntBtn'),
	  				    progressBar_cuatro = document.getElementById('progressBar_cuatro'),
						progressOuter_cuatro = document.getElementById('progressOuter_cuatro'),
					    msgBox_cuatro = document.getElementById('msgBox_cuatro');
						
						
		  
					var uploader_cuatro = new ss.SimpleUpload({
						button: btn_cuatro,
						url: 'lib/file_upload04.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_cuatro.style.display = 'block'; 
							this.setProgressBar( progressBar_cuatro );
						},
						onSubmit: function() {
							msgBox_cuatro.innerHTML = ''; 
							btn_cuatro.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_cuatro.style.display = 'block';
							btn_cuatro.innerHTML = 'Cargar de nuevo'; 
							progressOuter_cuatro.style.display = 'none';
				
							if ( !response ) {
								msgBox_cuatro.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_cuatro.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_cuatro.innerHTML = response.msg;
				
								} else {
									msgBox_cuatro.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_cuatro.style.display = 'none';
							msgBox_cuatro.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
				
					
				
				
					//Carga los documentos
					var btn_dos = document.getElementById('Foto1FBtn'),
	  				    progressBar_dos = document.getElementById('progressBar_dos'),
						progressOuter_dos = document.getElementById('progressOuter_dos'),
					    msgBox_dos = document.getElementById('msgBox_dos');
						
						
		  
					var uploader_dos = new ss.SimpleUpload({
						button: btn_dos,
						url: 'lib/file_upload02.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_dos.style.display = 'block'; 
							this.setProgressBar( progressBar_dos );
						},
						onSubmit: function() {
							msgBox_dos.innerHTML = ''; 
							btn_dos.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_dos.style.display = 'block';
							btn_dos.innerHTML = 'Cargar de nuevo'; 
							progressOuter_dos.style.display = 'none';
				
							if ( !response ) {
								msgBox_dos.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_dos.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_dos.innerHTML = response.msg;
				
								} else {
									msgBox_dos.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_dos.style.display = 'none';
							msgBox_dos.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
				
				
				
				//Carga los documentos
					var btn_uno = document.getElementById('CompDomBtn'),
	  				    progressBar_uno = document.getElementById('progressBar_uno'),
						progressOuter_uno = document.getElementById('progressOuter_uno'),
					    msgBox_uno = document.getElementById('msgBox_uno');
						
						
		  
					var uploader_uno = new ss.SimpleUpload({
						button: btn_uno,
						url: 'lib/file_upload01.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_uno.style.display = 'block'; 
							this.setProgressBar( progressBar_uno );
						},
						onSubmit: function() {
							msgBox_uno.innerHTML = ''; 
							btn_uno.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_uno.style.display = 'block';
							btn_uno.innerHTML = 'Cargar de nuevo'; 
							progressOuter_uno.style.display = 'none';
				
							if ( !response ) {
								msgBox_uno.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_uno.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_uno.innerHTML = response.msg;
				
								} else {
									msgBox_uno.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_uno.style.display = 'none';
							msgBox_uno.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});
						
				
				//Carga los documentos
					var btn_cero = document.getElementById('IneBtn'),
	  				    progressBar_cero = document.getElementById('progressBar_cero'),
						progressOuter_cero = document.getElementById('progressOuter_cero'),
					    msgBox_cero = document.getElementById('msgBox_cero');
						
						
		  
					var uploader_cero = new ss.SimpleUpload({
						button: btn_cero,
						url: 'lib/file_upload00.php',
						name: 'uploadfile',
						hoverClass: 'hover',
						focusClass: 'focus',
						responseType: 'json',
						
						startXHR: function() {
							progressOuter_cero.style.display = 'block'; 
							this.setProgressBar( progressBar_cero );
						},
						onSubmit: function() {
							msgBox_cero.innerHTML = ''; 
							btn_cero.innerHTML = 'Cargando...'; 
						  },
						onComplete: function( filename, response ) {
					   
							btn_cero.style.display = 'block';
							btn_cero.innerHTML = 'Cargar de nuevo'; 
							progressOuter_cero.style.display = 'none';
				
							if ( !response ) {
								msgBox_cero.innerHTML = 'Lo sentimos, el archivo no se pudo subir trate de nuevo';
								return;
							}
				
							if ( response.success === true ) {
			
								msgBox_cero.innerHTML =  response.msg;
								
								
				
							} else {
								if ( response.msg )  {
									msgBox_cero.innerHTML = response.msg;
				
								} else {
									msgBox_cero.innerHTML = 'Ocurrio un error al tratar de subir su archivo, trate de nuevo.';
								}
							}
						  },
						onError: function() {
							progressOuter_cero.style.display = 'none';
							msgBox_cero.innerHTML = 'No se pueden subir archivos en este momento';
						  }
					});				   

								

                $('#rootwizard').bootstrapWizard({
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index+1;

                        // If it's the last tab then hide the last button and show the finish instead
                        if($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }

                    },

                    onNext: function(tab, navigation, index) {

                        var form = $('form[name="step'+ index +'"]');
						

                        form.parsley().validate();

                        if (!form.parsley().isValid()) {
                            return false;
                        }

                    },

                    onTabClick: function(tab, navigation, index) {

                        var form = $('form[name="step'+ (index+1) +'"]');
                        form.parsley().validate();

                        if (!form.parsley().isValid()) {
                            return false;
                        }

                    }

                });

            });
        </script>
        <!--/ Page Specific Scripts -->






    </body>
</html>
