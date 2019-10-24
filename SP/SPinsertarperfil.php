<?php include("SPheader.php") ?>


<?php 
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

     $consulta= "SELECT * FROM sp WHERE estudiante='$estudiante' limit 1"; 
     $datos = mysqli_query($conn, $consulta);

     if($datos->num_rows==0){
        include("../Alarmas/confirmar.php");
     
        $conn->query("INSERT INTO sp VALUES ('0','$fecha', '$estudiante', '$ciudad_origen',
         '$curso_actual', '$repitencia', '$o_nombre', '$o_edad', '$o_escolarizacion',
         '$o_ocupacion', '$o_direccion', '$o_tel', '$p_nombre', '$p_edad', '$p_escolarizacion',
         '$p_ocupacion', '$p_direccion', '$p_tel', '$m_nombre', '$m_edad', '$m_escolarizacion',
         '$m_ocupacion', '$m_direccion', '$m_tel' )");
    
        
    }else{
        
            include("../Alarmas/Error01.php");
    
    }
            ?>


<?php include("SPfooter.php") ?>