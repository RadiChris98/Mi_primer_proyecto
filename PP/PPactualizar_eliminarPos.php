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
      swal('Registro encontrado', 'Nombre: ".$fila['NOMBRE']."', 'success');
  } 
  alerta();
  </script>";

  ?>

  <h3  align="center" class="panel-primary" >Perfil Pedagógico</h3>

    <form id="formulario2" method="GET" action="PPOPact_el.php">
    <table  align="center" border="1" style=" width:700px; height:400px "  class="table table-striped table-bordered table condensed table-hover  "  >
  
    <tr ><td>NOMBRE</td><td>EDAD</td><td>FECHA DE NACIMIENTO</td></tr>
  <tr><td><input id='nombre' type="text" name="nombre" value="<?php echo $fila['NOMBRE']; ?>" required></td><td><input id='edad' type="number" name="edad" max="150" value="<?php echo $fila['EDAD']; ?>" min="1" require></td><td><input type="date" name="fecha" value="<?php echo $fila['FECHA']; ?>" max="<?php echo date("Y-m-d"); ?>" require ></td></tr>
  <tr  class="table-active" ><td colspan="3"><strong>DESCRIPCIÓN DEL ESTUDIANTE *</strong></td></tr>
 <tr ><td colspan="3">DOCUMENTO DE IDENTIDAD</td></tr>
  <tr><td colspan="3"><input id='cedula' type="text" name="cedula" value="<?php echo $fila['cedula']; ?>" required></td></tr>
  <tr ><td colspan="3">SOCIOAFECTIVA</td></tr>
  <tr><td colspan="3"><input id='socioafectiva' type="text" name="socioafectiva" value="<?php echo $fila['SOCIOAFECTIVA']; ?>" style="width:700px;height:20px" require></td></tr>
  <tr><td colspan="3">COGNITIVA</td></tr>
  <tr><td colspan="3"><input id='cognitiva' type="text" name="cognitiva" value="<?php echo $fila['COGNITIVA']; ?>" style="width:700px;height:20px" require ></td></tr>
  <tr><td colspan="3">COMUNICACIÓN</td></tr>
  <tr><td colspan="3"><input id='comunicacion' type="text" name="comunicacion" value="<?php echo $fila['COMUNICACION']; ?>" style="width:700px;height:20px" require ></td></tr>
  <tr><td colspan="3">MORAL Y ESPIRITUAL</td></tr>
  <tr><td colspan="3"><input id='moral' type="text" name="moral" value="<?php echo $fila['MORAL']; ?>" style="width:700px;height:20px" require ></td></tr>
  <tr><td>FORTALEZAS</td><td>DEBILIDADES</td><td></td></tr>
  <tr><td><textarea name="fortalezas" required><?php echo $fila['FORTALEZAS']; ?></textarea></td><td><textarea name="debilidades" required><?php echo $fila['DEBILIDADES']; ?></textarea></td><td></td></tr>     
  <tr><td colspan="3">BARRERAS EN EL APRENDIZAJE</td></tr>
  <tr><td colspan="3"><input id='barreras' type="text" name="barreras" value="<?php echo $fila['BARRERAS']; ?>" style="width:700px;height:20px" require ></td></tr>
  <tr><td colspan="3">ESTRATEGIAS UTILIZADAS EN EL AULA</td></tr>
  <tr><td colspan="3"><input id='estrategias' type="text" name="estrategias" value="<?php echo $fila['ESTRATEGIAS']; ?>" style="width:700px;height:20px" maxlength="25" require ></td></tr>  
  <input id ="id" type="text" name="id" style="visibility:hidden" value ="<?php echo $fila['ID']; ?>">
</table>

<div align="center" border="1" style=" width:950px; height:300px " >
<input  type="submit" class="btn btn-dark" value="Actualizar" name="update">

<input  type="submit" class="btn btn-dark" value="Eliminar" name="eliminar">

</div>

</form>
<?php }} ?>



<!--end-main-container-part-->


<?php include("PPfooter.php") ?>