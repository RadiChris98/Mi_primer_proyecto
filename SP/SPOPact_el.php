<?php include("SPheader.php") ?>



 <!-- OPERACIÓN ACTUALIZAR Y ELIMINAR -->
 <?php



// Si se recibe la solicitud del botón update, realizar la actualización.

if (isset($_REQUEST['update'])) {
include("../Alarmas/CONFact.php");
// Guardar los cambios realizados en variables.

include('../config.php');
 $fecha = $_REQUEST['fecha'];
 $estudiante = $_POST['estudiante'];
     $ciudad_origen = $_POST['ciudad_origen'];
     $curso_actual = $_POST['curso_actual'];
     $repitencia = $_POST['repitencia'];
     $o_nombre = $_POST['o_nombre'];
     $o_edad = $_POST['o_edad'];
     $o_escolarizacion = $_POST['o_escolarizacion'];
     $o_ocupacion = $_POST['o_ocupacion'];
     $o_direccion = $_POST['o_direccion'];
     $o_tel = $_POST['o_tel'];
     $p_nombre = $_POST['p_nombre'];
     $p_edad = $_POST['p_edad'];
     $p_escolarizacion = $_POST['p_escolarizacion'];
     $p_ocupacion = $_POST['p_ocupacion'];
     $p_direccion = $_POST['p_direccion'];
     $p_tel = $_POST['p_tel'];
     $m_nombre = $_POST['m_nombre'];
     $m_edad = $_POST['m_edad'];
     $m_escolarizacion = $_POST['m_escolarizacion'];
     $m_ocupacion = $_POST['m_ocupacion'];
     $m_direccion = $_POST['m_direccion'];
     $m_tel = $_POST['m_tel'];


//Update actualizar todos los campos.

$query = "UPDATE sp set fecha ='$fecha', ciudad_origen ='$ciudad_origen',
curso='$curso_actual', repitencia='$repitencia', o_nombre='$o_nombre', o_edad='$o_edad', 
o_escolarizacion='$o_escolarizacion', o_ocupacion='$o_ocupacion', o_direccion='$o_direccion',
o_tel='$o_tel', p_nombre='$p_nombre', p_edad='$p_edad', 
p_escolarizacion='$p_escolarizacion', p_ocupacion='$p_ocupacion', p_direccion='$p_direccion',
p_tel='$p_tel', m_nombre='$m_nombre', m_edad='$m_edad', 
m_escolarizacion='$m_escolarizacion', m_ocupacion='$m_ocupacion', m_direccion='$m_direccion',
m_tel='$m_tel' WHERE estudiante='$estudiante'";
mysqli_query($conn, $query); 

}else if(isset($_REQUEST['eliminar'])){
    include("../Alarmas/CONFeli.php");
    include('../config.php');
    $estudiante= $_POST['estudiante'];
    $query = "DELETE FROM sp WHERE estudiante='$estudiante'";
    mysqli_query($conn, $query);
    }
    
    
    ?>

<?php include("SPfooter.php"); ?>