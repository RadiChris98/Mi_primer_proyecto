<?php include("CSheader.php") ?>


 <!-- OPERACIÓN ACTUALIZAR Y ELIMINAR -->
 <?php



// Si se recibe la solicitud del botón update, realizar la actualización.

if (isset($_REQUEST['update'])) {
include("../Alarmas/CONFact.php");
// Guardar los cambios realizados en variables.

include('../config.php');
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $grado = $_POST['grado'];
    $estudiante = $_POST['estudiante'];
     $asistente = $_POST['asistente'];
     $motivo = $_POST['motivo'];
     $descripcion = $_POST['descripcion'];
    $comp_docente = $_POST['comp_docente'];
    $comp_padres = $_POST['comp_padres'];
     $conclusiones = $_POST['conclusiones'];
//Update actualizar todos los campos.

$query = "UPDATE cp set fecha = '$fecha', edad ='$edad',
grado ='$grado', asistentes='$asistente', motivo='$motivo',
descripcion='$descripcion', comp_docente='$comp_docente', comp_padres='$comp_padres',
conclusiones='$conclusiones' WHERE estudiante='$estudiante'";
mysqli_query($conn, $query);  

//Si recibe la solicitud del botón eliminar, borra el registro.

}else if(isset($_REQUEST['eliminar'])){
include("../Alarmas/CONFeli.php");
include('../config.php');
$estudiante= $_REQUEST['estudiante'];
$query = "DELETE FROM cp WHERE estudiante='$estudiante'";
mysqli_query($conn, $query);
}


?>

<!-- FIN OPERACIÓN ACTUALIZAR Y ELIMINAR -->

<!--end-main-container-part-->




<?php include("CSfooter.php"); ?>