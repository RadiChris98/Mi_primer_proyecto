<?php include("CSheader.php") ?>


<?php

include('../config.php');
$cedula = $_POST['cedula'];
$consulta= "SELECT * FROM cp WHERE estudiante in 
(select nombre from perfil_pedagogico where cedula='$cedula') limit 1"; 
        $datos = mysqli_query($conn, $consulta);

        if($datos->num_rows==0){
          include('../Alarmas/CONFnoexiste.php');
        }else{
        
            
          
?>
<?php while($fila= mysqli_fetch_assoc($datos)){  
  
  echo "<script>
  function alerta(){
      swal('Proceso exitoso', 'Registro encontrado: ".$fila['ESTUDIANTE']."', 'success');
  } 
  alerta();
  </script>";


  ?>

<h3  align="center" class="panel-primary" >Notificación de caso en Psicología</h3><br>

<form  align="center" name="formulario" method="POST" action="CSOPact_el.php">

<table  align="center" border="1" style=" width:100px; height:400px "  class="table table-striped table-bordered table condensed table-hover  "  >
<div style=" width:400px; height:0px ">

</div>
    <tr ><td >Fecha</td> <td><input  type="date" name="fecha" value ="<?php echo $fila['FECHA'] ?>"  required></td><td>Edad</td><td><input type="number" name="edad" value ="<?php echo $fila['EDAD'] ?>"  required></td><td>grado</td><td><input type="number" name="grado" value ="<?php echo $fila['GRADO'] ?>"  required></td></tr>
    <tr><td  colspan="2" >Estudiante</td> <td colspan="4"> <select id="estudiante" name ="estudiante" disable required>

    <?php echo '<option value="'.$fila['ESTUDIANTE'].'">'.$fila['ESTUDIANTE'].'</option>'; ?>

</select> 
</td></tr>
    <tr ><td colspan="2" >Asistentes</td> <td colspan="4" ><textarea name="asistente"  cols="70"><?php echo $fila['ASISTENTES'] ?></textarea></td></tr>
    <tr><td   colspan="2">Motivo</td> <td colspan="4"><textarea name="motivo"  cols="70"><?php echo $fila['MOTIVO'] ?></textarea></td></tr>
   
   
    <tr  align="center" class="table-active" ><td colspan="6">DESCRIPCIÓN DEL ESTUDIANTE</td></tr>

    <td colspan="6"><textarea style=" height: 60px; width: 100%;" cols="80" name="descripcion"  > <?php echo $fila['DESCRIPCION'] ?> </textarea></td></tr>
    <tr><td  colspan="2" >compromiso del docente</td> <td colspan="4"><textarea  cols="70" name="comp_docente"  ><?php echo $fila['COMP_DOCENTE'] ?></textarea></td></tr>
    <tr ><td colspan="2" >Compromiso de los padres</td> <td colspan="4" ><textarea cols="70" name="comp_padres"  ><?php echo $fila['COMP_PADRES'] ?></textarea></td></tr>

    <tr  align="center" class="table-active" ><td colspan="6">CONCLUSIONES</td></tr>

<tr><td colspan="6" ><textarea  style=" height: 60px; width: 100%;" cols="80" name="conclusiones" ><?php echo $fila['CONCLUSIONES'] ?></textarea></td></tr>



</table>

<input  type="submit" class="btn btn-dark" value="Actualizar" name="update">

<input  type="submit" class="btn btn-dark" value="Eliminar" name="eliminar">

</form>
<script src="lib/sweet-alert.min.js"></script>    
</body>

<?php } }?>

<?php include("CSfooter.php"); ?>