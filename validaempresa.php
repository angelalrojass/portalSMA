
  <?php
require_once("consmaempleo.php");





$idEstadoUB = $_GET['idEstado'];
$tipodeempresaUB = $_GET['tipodeempresaU'];
$rfcUB = $_GET['rfcU'];
$razonsocialUB = $_GET['razonsocialU'];
$codigopostalUB = $_GET['codigopostalU'];
$calleUB = $_GET['calleU'];
$numeroexteriorUB = $_GET['numeroexteriorU'];
$numerointeriorUB = $_GET['numerointeriorU'];
$entrecallesUB = $_GET['entrecallesU'];
$idMunicipioUB = $_GET['idMunicipio'];
$descripcionempresaUB = $_GET['descripcionempresaU'];
$mensajeempresaUB = $_GET['mensajeempresaU'];
$edadUB = $_GET['edadU'];
$sexoUB = $_GET['sexoU'];
$paginawebUB = $_GET['paginawebU'];
$nombreUB = $_GET['nombreU'];
$apellidosUB = $_GET['apellidosU'];
$cargoUB = $_GET['cargoU'];
$telefonotUB = $_GET['telefonotU'];
$telefonocUB = $_GET['telefonocU'];
$telefonopUB = $_GET['telefonopU'];
$fechaUB = $_GET['fechaU'];
$d=rand(1,10000);
$contra = $_GET['contrapas'];
$conexion = new MySQLi($server,$user,$password,$database);

if($conexion->connect_error) {
  echo 'Falló la conección al servidor...' . 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
  exit;
} else {
  $conexion->set_charset('utf8');
}
$consulta = "INSERT INTO `empresa` (`id_empresa`, `id_tipoempresa`, `rfcb`, `razonb`, `id_colonia`, `calleb`, `numextb`, `numintb`, `entrecallesb`, `id_carrera`, `decripcionb`, `mensajeb`, `edad`, `id_sexo`, `paginawb`, `nombre`, `apellido`, `id_cargo`, `telefonob`, `correob`, `fechae`, `atencion`, `contrasena`) VALUES ('$d', '$tipodeempresaUB', '$rfcUB', '$razonsocialUB', '$codigopostalUB', '$calleUB', '$numeroexteriorUB', '$numerointeriorUB', '$entrecallesUB', '$idMunicipioUB', '$descripcionempresaUB', '$mensajeempresaUB', '$edadUB', '$sexoUB', '$paginawebUB', '$nombreUB', '$apellidosUB', '$cargoUB', '$telefonotUB', '$telefonocUB', '$fechaUB', '$telefonopUB', '$contra');";


$resultado = $conexion -> query($consulta)|| die("Ha ocurrido un error al guardar los datos");


if ($result = mysqli_query($conexion, "SELECT * FROM `vacanteb` WHERE `id_carrera`='$idMunicipioUB'")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result);

 	
	
	if($row_cnt == 0)
	{
     // SI NO EXISTE HAS

    header("Location: http://189.194.250.30:8085/sare1/lib/enviocorreosoloboton1e.php?codigo=$idEstadoUB&codigo2=$idMunicipioUB&correop=$telefonocUB");
         
       
             

    }else{

     // SI EXISTE 

      header("Location: http://189.194.250.30:8085/sare1/lib/enviocorreosolobotone.php?codigo=$idEstadoUB&codigo2=$idMunicipioUB&correop=$telefonocUB");

        

    }

    //printf("El resultado tiene %d filas.\n", $row_cnt);

    /* cerrar el resulset */
    mysqli_free_result($result);
}





/* cerrar la conexión */






 ?>
