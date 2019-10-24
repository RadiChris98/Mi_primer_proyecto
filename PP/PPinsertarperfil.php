<?php include("PPheader.php"); ?>

<?php 
include('../config.php');
$cedula = $_REQUEST['cedula'];
$nombre = $_POST['nombre'];
     $edad = $_POST['edad'];
     $fecha = $_POST['fecha'];
     $socioafectiva = $_POST['socioafectiva'];
     $cognitiva = $_POST['cognitiva'];
     $comunicacion = $_POST['comunicacion'];
     $moral = $_POST['moral'];
     $fortalezas = $_POST['fortalezas'];
     $debilidades = $_POST['debilidades'];
     $barreras = $_POST['barreras'];
     $estrategias = $_POST['estrategias'];
$consulta= "SELECT * FROM perfil_pedagogico WHERE cedula='$cedula' limit 1"; 
        $datos = mysqli_query($conn, $consulta);

         
if($datos->num_rows==0){
    include("../Alarmas/confirmar.php");
 
    $conn->query("INSERT INTO perfil_pedagogico(id, cedula, nombre, edad, fecha, socioafectiva, cognitiva, comunicacion, moral, fortalezas, debilidades, barreras, estrategias) VALUES ('0','$cedula', '$nombre', '$edad', '$fecha', '$socioafectiva', '$cognitiva', '$comunicacion', '$moral', '$fortalezas', '$debilidades', '$barreras', '$estrategias')");

    
}else{
    
        include("../Alarmas/Error01.php");

}
        ?>


<!--end-main-container-part-->






<?php include("PPfooter.php") ?>