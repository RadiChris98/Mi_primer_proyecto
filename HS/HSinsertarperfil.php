<?php include("HSheader.php") ?>


<?php 
include('../config.php');
$estudiante = $_POST['estudiante'];
    $tiempo = $_POST['tiempo'];
    $relaciones = $_POST['relaciones'];
    $comportamiento = $_POST['comportamiento'];
     $eventos = $_POST['eventos'];
     $proyecto = $_POST['proyecto'];
     $salud = $_POST['salud'];
    $psicologia = $_POST['psicologia'];


$consulta= "SELECT * FROM hs WHERE estudiante='$estudiante' limit 1"; 
        $datos = mysqli_query($conn, $consulta);

         
if($datos->num_rows==0){
    include("../Alarmas/confirmar.php");
 
    $conn->query("INSERT INTO hs VALUES ('0','$estudiante', '$tiempo', '$relaciones', '$comportamiento', '$eventos', '$proyecto', '$salud', '$psicologia')");

    
}else{
    
        include("../Alarmas/Error01.php");

}
        ?>


<?php include("HSfooter.php") ?>