<?php include("PPheader.php"); ?>


<?php

include('../config.php');
$cedula = $_POST['cedula'];
$consulta= "SELECT * FROM perfil_pedagogico WHERE cedula='$cedula' limit 1"; 
        $datos = mysqli_query($conn, $consulta);

        if($datos->num_rows==0){
          include('../Alarmas/CONFnoexiste.php');
        }else{

          
?>
<?php while($fila= mysqli_fetch_assoc($datos)){  
  
  echo "<script>
  function alerta(){
      swal('Proceso exitoso', 'Registro encontrado: ".$fila['NOMBRE']."', 'success');
  } 
  alerta();
  </script>";


  ?>
<div id="muestra">
    <h3  align="center" class="panel-primary" >Perfil Pedagógico</h3>
    <div align="right" border="1" style=" width:850px; height:30px" >
<a href="javascript:imprSelec('muestra')">Imprimir registro</a>
</div>

    <form id="formulario2" method="GET" action="../index2.php?">
    <table  align="center" border="1" style=" width:700px; height:400px "  class="table table-striped table-bordered table condensed table-hover  "  >
  
    
    <tr ><td>NOMBRE</td><td>EDAD</td><td>FECHA DE NACIMIENTO</td></tr>
  <tr><td><?php echo $fila['NOMBRE']; ?></td><td><?php echo $fila['EDAD']; ?></td><td><?php echo $fila['FECHA']; ?></td></tr>
  <tr  class="table-active" ><td colspan="3"><strong>DESCRIPCIÓN DEL ESTUDIANTE *</strong></td></tr>
 <tr ><td colspan="3">DOCUMENTO DE IDENTIDAD</td></tr>
  <tr><td colspan="3"><?php echo $fila['cedula']; ?></td></tr>
  <tr ><td colspan="3">SOCIOAFECTIVA</td></tr>
  <tr><td colspan="3"><?php echo $fila['SOCIOAFECTIVA']; ?></td></tr>
  <tr><td colspan="3">COGNITIVA</td></tr>
  <tr><td colspan="3"><?php echo $fila['COGNITIVA']; ?></td></tr>
  <tr><td colspan="3">COMUNICACIÓN</td></tr>
  <tr><td colspan="3"><?php echo $fila['COMUNICACION']; ?></td></tr>
  <tr><td colspan="3">MORAL Y ESPIRITUAL</td></tr>
  <tr><td colspan="3"><?php echo $fila['MORAL']; ?></td></tr>
  <tr><td>FORTALEZAS</td><td>DEBILIDADES</td><td></td></tr>
  <tr><td><?php echo $fila['FORTALEZAS']; ?></td><td><?php echo $fila['DEBILIDADES']; ?></td><td></td></tr>     
  <tr><td colspan="3">BARRERAS EN EL APRENDIZAJE</td></tr>
  <tr><td colspan="3"><?php echo $fila['BARRERAS']; ?></td></tr>
  <tr><td colspan="3">ESTRATEGIAS UTILIZADAS EN EL AULA</td></tr>
  <tr><td colspan="3"><?php echo $fila['ESTRATEGIAS']; ?></td></tr>  
</table>

</div>
<script type="text/javascript">
function imprSelec(muestra)
{var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
</script>




</form>
<?php } }?>

<!--end-main-container-part-->


<?php include("PPfooter.php") ?>