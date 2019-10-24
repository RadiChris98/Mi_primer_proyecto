<?php include("HSheader.php") ?>

 <!-- OPERACIÓN ACTUALIZAR Y ELIMINAR -->
 <?php



// Si se recibe la solicitud del botón update, realizar la actualización.

if (isset($_REQUEST['update'])) {
include("../Alarmas/CONFact.php");
// Guardar los cambios realizados en variables.

include('../config.php');
$estudiante = $_POST['estudiante'];
    $tiempo = $_POST['tiempo'];
    $relaciones = $_POST['relaciones'];
    $comportamiento = $_POST['comportamiento'];
     $eventos = $_POST['eventos'];
     $proyecto = $_POST['proyecto'];
     $salud = $_POST['salud'];
    $psicologia = $_POST['psicologia'];

//Update actualizar todos los campos.

$query = "UPDATE hs set  tiempo ='$tiempo',
relaciones ='$relaciones', comportamiento='$comportamiento', eventos='$eventos',
proyecto='$proyecto', salud='$salud', psicologia='$psicologia' WHERE estudiante='$estudiante'";
mysqli_query($conn, $query);  

//Si recibe la solicitud del botón eliminar, borra el registro.

}else if(isset($_REQUEST['eliminar'])){
    include("../Alarmas/CONFeli.php");
    include('../config.php');
    $estudiante= $_REQUEST['estudiante'];
    $query = "DELETE FROM hs WHERE estudiante='$estudiante'";
    mysqli_query($conn, $query);
    }
    
    
    ?>
    
    <!-- FIN OPERACIÓN ACTUALIZAR Y ELIMINAR -->
    
    <!--end-main-container-part-->
    
    
    
    
    <?php include("HSfooter.php"); ?>