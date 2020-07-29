<?php
require('extras/Uploader.php');



// Directory where we're storing uploaded images
// Remember to set correct permissions or it won't work
//$upload_dir = 's_files/';
$valid_extensions = array('gif', 'png', 'jpeg', 'jpg', 'pdf');

session_start();
$tipodir = $_SESSION['folio'];

$upload_dir = '../du2017/'.$tipodir;


if(!is_dir($upload_dir)){
	@mkdir($upload_dir, 0755);
}


//$tipodoc = sanitize($_POST['Doc']);


//Vamos a renombrar el archivo aleatorio para evitar conflictos con nombre de archivos
$code = '';
  for($x = 0; $x<2; $x++) {
	  $code .= '_'.substr(strtolower(sha1(rand(0,999999999999999))),2,4);
  }
  $code = substr($code,1);

$Upload = new FileUpload('uploadfile');
$ext = $Upload->getExtension(); // Get the extension of the uploaded file
$Upload->newFileName = $code.'.'.$ext;
$result = $Upload->handleUpload($upload_dir, $valid_extensions);

$cook =  $Upload->newFileName;

$lologro =  '<p class="text-success">¡Archivo cargado con éxito</p>';

$nosevale = '<p><code>¡Error: '.$Upload->getErrorMsg().'</code></p>';

$_SESSION['DocFoto2F'] = $cook;




// Handle the upload
$result = $Upload->handleUpload($upload_dir);

if (!$result) {
  exit(json_encode(array('success' => false, 'msg' => $nosevale)));  
}

echo json_encode(array('msg' => $lologro));
