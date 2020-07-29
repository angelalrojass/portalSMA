<?php
require_once("config11.php");


$nombreUB = $_POST['nombreU'];
$apellido1UB = $_POST['apellido1U'];
$apellido2UB = $_POST['apellido2U'];
$sexoUB = $_POST['sexoU'];
$fechanacimientoUB = $_POST['fechanacimientoU'];
$entidadnacimientoUB = $_POST['entidadnacimientosU'];
$estadoUB = "Estado de Mexico";
$codigopostalUB = $_POST['codigopostalU'];
$coloniaUB = $_POST['coloniaU'];
$telefonopUB = $_POST['telefonopU'];
$telefonotUB = $_POST['telefonotU'];
$telefonocUB = $_POST['telefonocU'];
$licenciadecUB = $_POST['licenciadecU'];
$vehiculopropioUB = $_POST['vehiculopropioU'];
$emailUB = $_POST['emailU'];
$confirmaCorreoElectrnicoUB = $_POST['confirmaCorreoElectronicoU'];
$titulocurriculoUB = $_POST['titulocurriculoU'];
$objetivopUB = $_POST['objetivopU'];
$idEstadoUB = $_POST['idEstado'];
$idMunicipioUB = $_POST['idMunicipio'];
$habilidadesUB = $_POST['habilidadesU'];
$escuelaUB = $_POST['escuelaU'];
$gradoacademicoUB = $_POST['gradoacademicoU'];
$titulogradoUB = $_POST['titulogradoU'];
$fechainicioesUB = $_POST['fechainicioesU'];
$fechaterminoesUB = $_POST['fechaterminoesU'];
$auncursoUB = $_POST['auncursoU'];
$nivelinglesUB = $_POST['nivelinglesU'];
$trabajaactualmenteUB = $_POST['trabajaactualmenteU'];
$motivoUB = $_POST['motivoU'];
$otraUB = $_POST['otraU'];
$fechaabuscarUB = $_POST['fechaabuscarU'];
$disponibilidadUB = $_POST['disponibilidadU'];
$ultimopuestoUB = $_POST['ultimopuestoU'];
$empresaUB = $_POST['empresaU'];
$giroUB = $_POST['giroU'];
$funcionesactividadesUB = $_POST['funcionesactividadesU'];
$fechainicioultimotUB = $_POST['fechainicioultimotU'];
$fechaterminoultimotUB = $_POST['fechaterminoultimotU'];
$empleoactualUB = $_POST['empleoactualU'];



//$_POST['correo'] == '' or $_POST['contrasena1'] == '' or $_POST['contrasena2'] == ''

if($nombreUB=="" or $apellido1UB=="" or $sexoUB=="" or $fechanacimientoUB=="" or $estadoUB=="" or $codigopostalUB=="" or $coloniaUB=="" or $telefonopUB=="" or $telefonotUB=="" or $telefonocUB=="" or $licenciadecUB=="" or $vehiculopropioUB=="" or $emailUB=="" or $confirmaCorreoElectrnicoUB== "" or $titulocurriculoUB== "" or $objetivopUB== "" or $idEstadoUB== "" or $idMunicipioUB== "" or $habilidadesUB== "" or $escuelaUB== "" or $gradoacademicoUB== "" or $titulogradoUB== "" or $fechainicioesUB=="" or $fechaterminoesUB== "" or $auncursoUB== "" or $nivelinglesUB== "" or $trabajaactualmenteUB=="" or $motivoUB=="" or $otraUB=="" or $fechaabuscarUB =="" or $disponibilidadUB=="" or $ultimopuestoUB== "" or $empresaUB== "" or $giroUB== "" or $funcionesactividadesUB=="" or $fechainicioultimotUB=="" or $fechaterminoultimotUB=="" or $empleoactualUB=="" or $apellido2UB=="")
{


}
else
{




$conexion = new MySQLi($server,$user,$password,$database);


if($conexion->connect_error) {
  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $conexion->set_charset('utf8');
}



//Insertamos datos del usuario
$consulta = "INSERT INTO `vacanteb` (`id_vacante`, `nombreb`, `apellido1b`, `sexob`, `fechanacimientob`, `entidadnacimientob`, `estadob`, `codigopostalb`, `coloniab`, `telefonopb`, `telefonotb`, `telefonocb`, `licenciadecb`, `vehiculopropiob`, `emailb`, `confirmacorreoelectronicob`, `titulocurriculob`, `objetivopb`, `idEstado`, `IdMunicipio`, `habilidadesb`, `escuelab`, `gradoacademicob`, `titulogradob`, `fechainicioesb`, `fechaterminoesb`, `auncursob`, `nivelinglesb`, `trabajaactualmenteb`, `motivob`, `otrab`, `fechaabuscarb`, `disponibilidadb`, `ultimopuestob`, `empresab`, `girob`, `funcionesactividadesb`, `fechainicioultimotb`, `fechaterminoultimotb`, `empleoactualb`, `apellido12b`) VALUES ('44', '$nombreUB', '$apellido1UB', '$sexoUB', '$fechanacimientoUB', '$entidadnacimientoUB', '$estadoUB', '$codigopostalUB', '$coloniaUB', '$telefonopUB', '$telefonotUB', '$telefonocUB', '$licenciadecUB', '$vehiculopropioUB', '$emailUB', '$confirmaCorreoElectrnicoUB', '$titulocurriculoUB', '$objetivopUB', '$idEstadoUB', '$idMunicipioUB', '$habilidadesUB', '$escuelaUB', '$gradoacademicoUB', '$titulogradoUB', '$fechainicioesUB', '$fechaterminoesUB', '$auncursoUB', '$nivelinglesUB', '$trabajaactualmenteUB', '$motivoUB', '$otraUB', '$fechaabuscarUB', '$disponibilidadUB', '$ultimopuestoUB', '$empresaUB', '$giroUB', '$funcionesactividadesUB', '$fechainicioultimotUB', '$fechaterminoultimotUB', '$empleoactualUB', '$apellido2UB');";


$resultado = $conexion -> query($consulta)|| die("Ha ocurrido un error al guardar los datos");


//Cerramos Base de Datos
$conexion->close();
}


?>