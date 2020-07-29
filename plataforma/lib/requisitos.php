<?php

include("../../lib/config.php");

/* Previene acceso directo a esta página */
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if(!$isAjax) {
  $user_error = 'Acceso denegado - direct call is not allowed...';
  trigger_error($user_error, E_USER_ERROR);
}
ini_set('display_errors',1);
 
/* if the 'term' variable is not sent with the request, exit */
$idr = $_REQUEST['idr'];
$pagina = $_REQUEST['pag'];

 
$mysqli = new MySQLi($server,$user,$password,$database);
 
/* Connect to database and set charset to UTF-8 */
if($mysqli->connect_error) {
  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $mysqli->set_charset('utf8');
}


$query = "SELECT * FROM giros_comerciales WHERE idGiro='$idr'";

$result = mysqli_query($mysqli, $query);

if($result) {
	while($row = mysqli_fetch_assoc($result)) {
		$riesgo = $row['riesgo'];
		$giro = $row['categoria'];
		$clave= $row['calveScian'];
		$salud= $row['salud'];
	}
} 

//Metemos a session id de Giro Comercial
session_start();
$_SESSION['idGiro'] = $idr;


if($salud == 1){
	$salud = '<li>Aviso de Salubridad</li>';
} else {
	$salud = '';
}

if ($riesgo == 1 ){
	
	switch ($pagina) {
    case '1':
	
?>
    <section class="tile">

    <!-- tile header -->
    <div class="tile-header dvd dvd-btm">
        <h1 class="custom-font text-center">El Giro que seleccionaste es:</h1>
    </div>
    <!-- /tile header -->
    <!-- tile body -->
    <div class="tile-body">
    	
        <h3 class="custom-font text-greensea"><?php echo $giro ?></h3>
    
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title custom-font">Requisitos personas físicas</h3>
        </div>
        <div class="panel-body">
            <ul class="list-type check">
                <?php
			 	$query = "SELECT * FROM requisitos WHERE fm='1'";
				
				$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
				
				if($result) {
					while($row = mysqli_fetch_assoc($result)) {
					
					echo '<li>'.$req = $row['descripcion'].'</li>';
		
					}
					echo $salud;
				} 
				
				?>
            </ul>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title custom-font">Requisitos personas Morales</h3>
        </div>
        <div class="panel-body">
            <ul class="list-type check">
                <?php
			 	$query = "SELECT * FROM requisitos WHERE fm='2'";
				
				$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
				
				if($result) {
					while($row = mysqli_fetch_assoc($result)) {
					
					echo '<li>'.$req = $row['descripcion'].'</li>';

					}
					echo $salud;
				} 
				
				?>
            </ul>
        </div>
    </div>
    
    <p>No olvides tener a la mano tus documentos previamente digitalizados para poder completar el trámite de tu licencia de funcionamiento</p>
    <a href="fua.php" class="btn btn-primary btn-ef btn-ef-7 btn-ef-7b mb-10"><i class="fa fa-sign-in"></i> Llenar Solicitud</a>
 
</section>
<?php
    break;  
	case '2':
	
?>
	<section class="tile">

    <!-- tile header -->
    <div class="tile-header dvd dvd-btm">
        <h4 class="custom-font text-center">El Giro que seleccionaste es:</h4>
    </div>
    <!-- /tile header -->
    <!-- tile body -->
    <div class="tile-body">
    	
        <h4 class="custom-font text-greensea"><?php echo $giro ?></h4>
    
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title custom-font">Bajo Riesgo</h2>
        </div>
        <div class="panel-body">
        <h4 class="custom-font">Requisitos personas físicas</h4>
            <ul class="list-type check">
                <?php
			 	$query = "SELECT * FROM requisitos WHERE fm='1'";
				
				$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
				
				if($result) {
					while($row = mysqli_fetch_assoc($result)) {
					
					echo '<li>'.$req = $row['descripcion'].'</li>';

					}
					echo $salud;
				} 
				
				?>
            </ul>
        	 <h4 class="custom-font">Requisitos personas Morales</h4>
            <ul class="list-type check">
                <?php
			 	$query = "SELECT * FROM requisitos WHERE fm='2'";
				
				$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
				
				if($result) {
					while($row = mysqli_fetch_assoc($result)) {
					
					echo '<li>'.$req = $row['descripcion'].'</li>';

					}
					echo $salud;
				} 
				
				?>
            </ul>
        </div>
    </div>
    
    <p>Registrate ahora para que tramítes tu Liencia de Funcionamiento</p>
    <a href="registro.php" class="btn btn-primary btn-ef btn-ef-7 btn-ef-7b mb-10"><i class="fa fa-sign-in"></i> Registrarme</a>
 
</section>
<?php
	break;
	}
} else {
?>	
	<section class="tile">

    <!-- tile header -->
    <div class="tile-header dvd dvd-btm">
        <h4 class="custom-font text-center">El Giro que seleccionaste es:</h4>
    </div>
    <!-- /tile header -->
    <!-- tile body -->
    <div class="tile-body">
    	
        <h3 class="custom-font text-greensea"><?php echo $giro ?></h3>
    
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title custom-font">Giro Mediano / Alto Riesgo</h3>
        </div>
        <div class="panel-body">
            <p>El giro comercial que seleccionaste es de mediano o alto riesgo, este tipo de trámites no se puede realizar en línea.</p>
            <p>Agenda tu cita y acude a ventanilla única para tramitar tu licencia no olvides llevar la siguiente documentación;</p>
            <p>Si eres persona física:</p>
            <ul>
            	<?php
			 	$query = "SELECT * FROM requisitos WHERE fm='1'";
				
				$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
				
				if($result) {
					while($row = mysqli_fetch_assoc($result)) {
					
					echo '<li>'.$req = $row['descripcion'].'</li>';

					}
					echo $salud;
				} 
				
				?>
            </ul>
            <p>Si eres persona moral:</p>
            <ul>
            <?php
			 	$query = "SELECT * FROM requisitos WHERE fm='2'";
				
				$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);
				
				if($result) {
					while($row = mysqli_fetch_assoc($result)) {
					
					echo '<li>'.$req = $row['descripcion'].'</li>';

					}
					echo $salud;
				} 				
				?>
             </ul> 
        </div>
    </div>
    
    <a href="agendar.php" class="btn btn-primary btn-ef btn-ef-7 btn-ef-7b mb-10"><i class="fa fa-sign-in"></i> Agendar Cita</a>
 
</section>

<?php
}

	
$mysqli->close();
?>