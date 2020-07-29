<?php

  include("../lib/config.php");

  //Destruye las sessiones
  session_start();
  unset($_SESSION['uid']);
  unset($_SESSION['email']);
  unset($_SESSION['nombrec']);
  unset($_SESSION['userlevel']);
  session_destroy();
  header('Location: '.$urlmail.'/acceso.php');
  exit;
?>