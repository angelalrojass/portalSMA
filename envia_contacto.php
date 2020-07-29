<?php

include('lib/class.phpmailer.php');

/* Previene acceso directo a esta página */
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if(!$isAjax) {
  $user_error = 'Acceso denegado - direct call is not allowed...';
  trigger_error($user_error, E_USER_ERROR);
}
ini_set('display_errors',1);

// Funcion para limpiar caracteres
function sanitize($string, $trim = false, $int = false, $str = false)
  {
      $string = filter_var($string, FILTER_SANITIZE_STRING);
      $string = trim($string);
      $string = stripslashes($string);
      $string = strip_tags($string);
      $string = str_replace(array('‘', '’', '“', '”'), array("'", "'", '"', '"'), $string);
      
	  if ($trim)
          $string = substr($string, 0, $trim);
      if ($int)
		  $string = preg_replace("/[^0-9\s]/", "", $string);
      if ($str)
		  $string = preg_replace("/[^a-zA-Z\s]/", "", $string);
		  
      return $string;
  }

// Obtenemos datos del negocio 
$name= sanitize($_POST['name']);
$email = sanitize($_POST['email']);
$events = sanitize($_POST['subject']);
$message = sanitize($_POST['message']);


//Enviamos correo
$from = $email;
$from_name = utf8_decode('Sitio Licencias de Funcionamiento');
$to = 'fernando@distritomkt.com';
$bccer = 'fernando@distritomkt.com';

$toname = $user_Nombre;
$subject = utf8_decode('Contacto');

$mail = new PHPMailer();


$mail->SetFrom($from, $from_name);
$mail->AddReplyTo($from, $from_name);
$mail->AddAddress($to, $nombre_sol);
$mail->AddBCC($bccer);
$mail->IsHTML(true);
$mail->Timeout=60;
$mail->IsHTML(true);
$mail->Subject = $subject;
$msg =  utf8_decode('Datos Solicitante: '.$name.'<br>Asunto: '.$events.'<br /> Mensaje:'.$message);
$mail->MsgHTML($msg);
$mail->AltBody="";

$mail->Send();

if(!$mail->Send()) {
	$output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'. $mail->ErrorInfo));
		die($output);
 
} else {
  $output = json_encode('success');
		die($output);
}

?>
