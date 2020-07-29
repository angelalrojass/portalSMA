<?php
  /**
   * Init
   * @author Fernando Quintero
   * @copyright 2017
   */
  if (!defined("_VALID_PHP"))
      die('No esta autorizado el acceso a este archivo.');
?>
<?php 
  
  
  error_reporting(E_ALL);
  
  $BASEPATH = str_replace("init.php", "", realpath(__FILE__));
  
  define("BASEPATH", $BASEPATH);
  
  $configFile = BASEPATH . "lib/config.ini.php";

  
  //Funciones Generales
  require_once(BASEPATH . "lib/functions.php");
  
	
   
?>