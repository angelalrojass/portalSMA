<?php
session_start();
if (isset($_SESSION['uid'])){
	
		header("Location: plataforma/");
		exit;	
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
                              
                              <li class="<?php if ($submenu== '1'){ echo 'active'; } else {}	?>"><a href="registro.php">Registro</a></li>
                              <li class="<?php if ($submenu== '3'){ echo 'active'; } else {}	?>"><a href="busca-giros.php">Buscador de Giros</a></li>
                              <li class="<?php if ($submenu== '2'){ echo 'active'; } else {}	?>"><a href="acceso.php">Acceso a mi cuenta</a></li>
                              <li class="<?php if ($submenu== '4'){ echo 'active'; } else {}	?>"><a href="#">Manual del Usuario</a></li>
                            </ul>
                            

                        </div>
                              
        
						<div class="col-md-9">
                        	
                        	<div class="heading-block mb-60">
                                <h2 class="text-uppercase"><span class="text-theme">Acceso al</span> sistema</h2>
                                <h4 class="panel-title">Ingresa tu email y contraseña para acceder al sistema</h4>
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
                        

                    </div>

                </div>
                <!-- ============ /Contact section ============ -->

            </div>

        </section><!-- #content end -->
        
        <?php include("footer.php");?>
</body>
</html>
