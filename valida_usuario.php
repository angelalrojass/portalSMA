<?php
require_once("lib/config.php");
require_once("lib/functions.php");


$activar = 0;

//Verificamos si el codigo de verificación
// del usuario no viene vacío
if (!$_GET['cvf']){
	
	// Si viene vacío asignamos valor para mostrar error
	$codver = 0;
	
	} else {
	
	// Si no viene vacio lo limpiamos y consultamos si es válido en la base
	$codver = sanitize($_GET['cvf']);
	
	//$link = mysqli_connect($server,$user,$password,$database);
	
	$conexion = new MySQLi($server,$user,$password,$database);


	if($conexion->connect_error) {
	  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
	  exit;
	} else {
	  $conexion->set_charset('utf8');
	}
	
	$consulta = "SELECT * FROM usuarios WHERE codver='$codver'";

	if ($resultado = $conexion -> query($consulta)) {
	
		/* determinar el número de filas del resultado */
		$row_cnt = mysqli_num_rows($resultado);
		
		if($row_cnt == 0)
		{
			$activar = 0;
		}else{
			
			$activar = 1;
		}

		/* cerrar el resulset */
		mysqli_free_result($resultado);		
		
	}
	
	//Actualizamos con el valor del código de vericación
	$act_user = "UPDATE usuarios SET activo = '$activar' WHERE codver='$codver'";
	$conexion->query($act_user);

/* cerrar la conexión */
$conexion->close();
}






//Seteamos el Menu
$menu = '2';
$submenu = '2';
  
  
  
  
?>
<?php include("header.php");?>

        <!-- ============================================
        =================== Breadcrumbs =================
        ============================================= -->
        <section id="breadcrumbs" class="breadcrumbs-sm">

            <div class="container clearfix">
                <h1>Registro en el Sistema</h1>
            </div>

        </section><!-- #breadcrumbs end -->
        
           <!-- ============================================
        =================== Content =====================
        ============================================= -->

        <section id="content">


            <div class="content-wrap">

                <!-- ============ Sección de acces ============ -->
                <div class="container clearfix">

                    <div class="row">

                        <div class="col-md-3">

                            <div class="heading-block mb-60">
                                <h4 class="text-uppercase">Opciones</h4>
                            </div>

							<ul class="nav nav-list primary push-bottom">
                              <li class="<?php if ($submenu== '3'){ echo 'active'; } else {}	?>"><a href="busca-giros.php">Buscador de Giros</a></li>
                              <li class="<?php if ($submenu== '1'){ echo 'active'; } else {}	?>"><a href="registro.php">Registro</a></li>
                              <li class="<?php if ($submenu== '2'){ echo 'active'; } else {}	?>"><a href="acceso.php">Acceso a mi cuenta</a></li>
                              <li class="<?php if ($submenu== '4'){ echo 'active'; } else {}	?>"><a href="#">Manual del Usuario</a></li>
                            </ul>
                            

                        </div>
                        
                        <?php 
						//Mostramos la pantalla de acuerdo al código de verificación
						if($activar == 1){
						?>	
	
						<div class="col-md-9">
                        	
                        	<div class="heading-block mb-60">
                                <h2 class="text-uppercase"><span class="text-theme">Validación</span> exitosa</h2>
                                <h4 class="panel-title">Su cuenta se validó exitosamente, acceda ahora para realizar el tramite de su licencia</h4>
                            </div>
							
                            <div id="contenedorLogin"></div>
                            
                           		<form method="post" id="formaLogin" name="formaLogin">
                                    <div class="row">
            
                                        <div class="form-group col-md-12">
                                            <label for="username">Usuario</label>
                                            <input name="username" type="text" class="form-control myInput" placeholder="Email" id="username" required>
                                        </div>
            
                                        <div class="form-group col-md-12">
                                            <label for="password">Contraseña</label>
                                            <input name="password" type="password" class="form-control myInput" id="password" required>
                                        </div>
            
                                        <div class="col-md-12">
                                            <button type="submit" class="myBtn myBtn-rounded myBtn-dark m-0 mt-10" id="acceder">Acceder</button>
                                            <a href="#" class="pull-right">Olvidé mi contraseña</a>
                                        </div>
            
                                    </div>
                                </form>
                            

                        </div>	

                        <?php
						
							} else {
						?>	
						<div class="col-md-9">
                        	
                        	<div class="heading-block mb-60">
                                <h2 class="text-uppercase"><span class="text-theme">Lo </span> sentimos</h2>
                                <h4 class="panel-title">No es posible validar su cuenta</h4>
                            </div>
							
                            <div id="contenedorForma">
                           		
                            </div>
                            

                        </div>
                        <?php
						}
						?>

                        

                    </div>

                </div>
                <!-- ============ /Contact section ============ -->

            </div>

        </section><!-- #content end -->
        
        <?php include("footer.php");?>
</body>
</html>
