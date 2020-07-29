<?php
	  if (!defined("_VALID_PHP"))
	  die('El acceso directo a este archivo no esta permitido.');

?>
    <div class="navbar-collapse nav-main-collapse collapse">
      <div class="container">
        <nav class="nav-main mega-menu">
          <ul class="nav nav-pills nav-main" id="mainMenu">
            <li class="<?php if ($menu== '0'){ echo 'active'; } else {}	?>"> <a href="index.php">Inicio</a> </li>
            <li class="<?php if ($menu== '1'){ echo 'active'; } else {}	?>"> <a href="registro.php">Registro</a> </li>
            <li class="<?php if ($menu== '2'){ echo 'active'; } else {}	?>"> <a href="acceso.php">Acceso a mi cuenta</a> </li>
            <li class="<?php if ($menu== '3'){ echo 'active'; } else {}	?>"> <a href="pregruntas-frecuentes.php">Preguntas Frecuentes</a> </li>
            <li class="<?php if ($menu== '4'){ echo 'active'; } else {}	?>"> <a href="contacto.php">Contáctanos</a> </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
