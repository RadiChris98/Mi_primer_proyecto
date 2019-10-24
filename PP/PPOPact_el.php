<?php include("PPheader.php"); ?>


 <!-- OPERACIÓN ACTUALIZAR Y ELIMINAR -->
 <?php



// Si se recibe la solicitud del botón update, realizar la actualización.

if (isset($_REQUEST['update'])) {
include("../Alarmas/CONFact.php");
// Guardar los cambios realizados en variables.

include('../config.php');
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$cedula = $_REQUEST['cedula'];
$edad = $_REQUEST['edad'];
$fecha = $_REQUEST['fecha'];
$socioafectiva = $_REQUEST['socioafectiva'];
$cognitiva = $_REQUEST['cognitiva'];
$comunicacion = $_REQUEST['comunicacion'];
$moral = $_REQUEST['moral'];
$fortalezas = $_REQUEST['fortalezas'];
$debilidades = $_REQUEST['debilidades'];
$barreras = $_REQUEST['barreras'];
$estrategias = $_REQUEST['estrategias'];

//Update actualizar todos los campos.

$query = "UPDATE perfil_pedagogico set nombre = '$nombre', cedula ='$cedula',
edad ='$edad', fecha='$fecha', socioafectiva='$socioafectiva', cognitiva='$cognitiva',
comunicacion='$comunicacion', moral='$moral', fortalezas='$fortalezas',
debilidades='$debilidades', barreras='$barreras', estrategias='$estrategias' WHERE id='$id'";
mysqli_query($conn, $query);  

//Si recibe la solicitud del botón eliminar, borra el registro.

}else if(isset($_REQUEST['eliminar'])){
include("../Alarmas/CONFeli.php");
include('../config.php');
$cedula= $_REQUEST['cedula'];
$query = "DELETE FROM perfil_pedagogcio WHERE cedula = '$cedula'";
mysqli_query($conn, $query);
}


?>

<!-- FIN OPERACIÓN ACTUALIZAR Y ELIMINAR -->

<!--end-main-container-part-->


<?php include("PPfooter.php") ?>