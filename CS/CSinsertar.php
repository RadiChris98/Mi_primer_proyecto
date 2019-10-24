<?php include("CSheader.php") ?>


<?php 
include('../config.php');
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $grado = $_POST['grado'];
    $estudiante = $_POST['estudiante'];
     $asistentes = $_POST['asistente'];
     $motivo = $_POST['motivo'];
     $descripcion = $_POST['descripcion'];
    $comp_docente = $_POST['comp_docente'];
    $comp_padres = $_POST['comp_padres'];
     $conclusiones = $_POST['conclusiones'];

$consulta= "SELECT * FROM cp WHERE estudiante='$estudiante' limit 1"; 
        $datos = mysqli_query($conn, $consulta);

         
if($datos->num_rows==0){
    include("../Alarmas/confirmar.php");
 
    $conn->query("INSERT INTO cp VALUES ('0','$fecha', '$edad', '$grado', '$estudiante', '$asistentes', '$motivo', '$descripcion', '$comp_docente', '$comp_padres', '$conclusiones')");

    
}else{
    
        include("../Alarmas/Error01.php");

}
        ?>


<?php include("CSfooter.php") ?>