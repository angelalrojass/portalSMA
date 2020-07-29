<?php
require_once("consmaempleo.php");


$idEstadoUB = $_GET['idEstado'];

$nombreUB = $_GET['nombreU'];
$apellido1UB = $_GET['apellido1U'];
$apellido2UB = $_GET['apellido2U'];
$sexoUB = $_GET['sexoU'];
$fechanacimientoUB = $_GET['fechanacimientoU'];
$civilUB = $_GET['civilU'];
$edadUB= $_GET['edadU'];
$codigopostalUB = $_GET['codigopostalU'];
$telefonopUB = $_GET['telefonopU'];
$telefonotUB = $_GET['telefonotU'];
$telefonocUB = $_GET['telefonocU'];
$licenciadecUB = $_GET['licenciadecU'];
$vehiculopropioUB = $_GET['vehiculopropioU'];
$emailUB = $_GET['emailU'];
$titulocurriculoUB = $_GET['titulocurriculoU'];
$objetivopUB = $_GET['objetivopU'];
$idMunicipioUB = $_GET['idMunicipio'];
$habilidadesUB = $_GET['habilidadesU'];
$escuelaUB = $_GET['escuelaU'];
$gradoacademicoUB = $_GET['gradoacademicoU'];
$titulogradoUB = $_GET['titulogradoU'];
$fechainicioesUB = $_GET['fechainicioesU'];
$fechaterminoesUB = $_GET['fechaterminoesU'];
$auncursoUB = $_GET['auncursoU'];
$nivelinglesUB = $_GET['nivelinglesU'];
$ccomputoUB = $_GET['ccomputoU'];
$trabajaactualmenteUB = $_GET['trabajaactualmenteU'];




$fechaabuscarUB = $_GET['fechaabuscarU'];
$disponibilidadUB = $_GET['disponibilidadU'];
$ultimopuestoUB = $_GET['ultimopuestoU'];
$empresaUB = $_GET['empresaU'];
$giroUB = $_GET['giroU'];
$funcionesactividadesUB = $_GET['funcionesactividadesU'];
$fechainicioultimotUB = $_GET['fechainicioultimotU'];
$fechaterminoultimotUB = $_GET['fechaterminoultimotU'];
$fechaUB=date("d-m-Y");
$d=rand(1,10000);

$conexion = new MySQLi($server,$user,$password,$database);

if($conexion->connect_error) {
  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $conexion->set_charset('utf8');
}
//Insertamos datos del usuario
$consulta = "INSERT INTO `vacanteb` (`id_vacante`, `nombreb`, `apellido1b`, `apellido2b`, `id_sexo`, `fechanacimientob`, `id_civil`, `edadb`, `id_colonia`, `telefonotb`, `telefonocb`, `telefonopb`, `id_licencia`, `vehiculob`, `correob`, `tcurriculo`, `objetivob`, `id_carrera`, `habilidadesb`, `escuelab`, `id_grado`, `titulogradob`, `fechaib`, `fechatb`, `auncursob`, `id_ingles`, `computacionb`, `trabajoactualb`, `id_motivo`, `fechaabuscarb`, `disponivilidadb`, `ultimopuestob`, `empresab`, `girob`, `funcionesb`, `fechainiciofb`, `fechateeminofb`) VALUES ('$d', '$nombreUB', '$apellido1UB', '$apellido2UB', '$sexoUB', '$fechanacimientoUB', '$civilUB', '$edadUB', '$codigopostalUB', '$telefonopUB', '$telefonotUB', '$telefonocUB', '$licenciadecUB', '$vehiculopropioUB', '$emailUB', '$titulocurriculoUB', '$objetivopUB', '$idMunicipioUB', '$habilidadesUB', '$escuelaUB', '$gradoacademicoUB', '$titulogradoUB', '$fechainicioesUB', '$fechaterminoesUB', '$auncursoUB', '$nivelinglesUB', '$ccomputoUB', '$trabajaactualmenteUB', '$trabajaactualmenteUB', '$trabajaactualmenteUB', '$trabajaactualmenteUB', '$ultimopuestoUB', '$empresaUB', '$giroUB', '$funcionesactividadesUB', '$fechainicioultimotUB', '$fechaterminoultimotUB');";


$resultado = $conexion -> query($consulta)|| die("Ha ocurrido un error al guardar los datos");


if ($result = mysqli_query($conexion, "SELECT * FROM `empresa` WHERE `id_carrera`='$idMunicipioUB'")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);

 	
	
	if($row_cnt == 0)
	{
     // SI NO EXISTE HAS

  header("Location: http://189.194.250.30:8085/sare1/lib/enviocorreosoloboton1.php?codigo=$idEstadoUB&codigo2=$idMunicipioUB&correop=$emailUB");
     
      
             

    }else{
// SI EXISTE 

   header("Location: http://189.194.250.30:8085/sare1/lib/enviocorreosoloboton.php?codigo=$idEstadoUB&codigo2=$idMunicipioUB&correop=$emailUB");



     

    }

    //printf("El resultado tiene %d filas.\n", $row_cnt);cod

    /* cerrar el resulset */
    mysqli_free_result($result);
}






/* cerrar la conexión */






 ?>
