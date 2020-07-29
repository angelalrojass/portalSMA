<?php
require('extras/Uploader.php');
$valid_extensions = array('gif', 'png', 'jpeg', 'jpg', 'pdf');

session_start();
//$tipodir = $_SESSION['folio'];

$upload_dir = '../du2017/pagos/';


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

$lologro =  '<span class="text-success">¡Listo!</<span>';

$nosevale = '<p><code>¡Error: '.$Upload->getErrorMsg().'</code></p>';

$_SESSION['ComPago'] = $cook;




// Handle the upload
$result = $Upload->handleUpload($upload_dir);

if (!$result) {
  exit(json_encode(array('success' => false, 'msg' => $nosevale)));  
}

echo json_encode(array('msg' => $lologro));
