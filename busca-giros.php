<?php
  $menu = '1';
  $submenu = '3';

  define("_VALID_PHP", true);

?>
<?php include("header.php");?>

<!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>-->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- ============================================
        =================== Breadcrumbs =================
        ============================================= -->
        <section id="breadcrumbs" class="breadcrumbs-sm">

            <div class="container clearfix">
                <h1>Buscador de Giros</h1>
            </div>

        </section><!-- #breadcrumbs end -->
        
        <!-- ============================================
        =================== Content =====================
        ============================================= -->

        <section id="content">

            <div class="content-wrap">

              <!-- ============ login ============ -->
                <div class="container clearfix w-8xl">
                
                  <div class="row">
                    <div class="col-md-3">
                      <aside class="sidebar">
                        <h4>Opciones</h4>
                        <ul class="nav nav-list primary push-bottom">
                      	  
                          <li class="<?php if ($submenu== '1'){ echo 'active'; } else {}	?>"><a href="registro.php">Registro</a></li>
                          <li class="<?php if ($submenu== '3'){ echo 'active'; } else {}	?>"><a href="busca-giros.php">Buscador de Giros</a></li>
                          <li class="<?php if ($submenu== '2'){ echo 'active'; } else {}	?>"><a href="acceso.php">Acceso a mi cuenta</a></li>
                          <li class="<?php if ($submenu== '4'){ echo 'active'; } else {}	?>"><a href="#">Manual del Usuario</a></li>
                        </ul>
                      </aside>
                    </div>
                    <div class="col-md-9">
                    
                      <div class="row">
                        
                        <div class="col-xs-12">
                        
                          <section class="panel">
                            <header class="panel-heading">
                              <h2 class="panel-title">Antes de registrar verifíca que el giro de tu negocio existe.</h2>
                              <p>Ingresa la(s) palabra(s) relacionada(s) con tu actividad, de las opciones que te aparecen selecciona la que aplica</p>
                            </header>	
                            <div class="panel-body">
                                <div class="form-group">
                                <form action="" method="post">
                                    <label class="col-md-3 control-label" for="giro">Encontrar Mi Giro</label>
                                  <div class="col-md-9">
                                    <input type="text" name="buscaGiros" class="form-control" id="buscaGiros">
                                  </div>
                                 </form>
                                </div>
                             </div>
                          </section>
                          <div id="requisitos"></div>
                          
                        </div>
                        
                      </div>
                      
                    </div>
                  </div>
            	</div>
            </div>
        </section>

  <?php include("footer.php");?>
</body>
</html>
