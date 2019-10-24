<?php include("HSheader.php") ?>


<?php

include('../config.php');
$cedula = $_POST['cedula'];
$consulta= "SELECT * FROM hs WHERE estudiante in 
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


<h3  align="center" class="panel-primary" >Historial socioemocional</h3>

    <form  align="center" name="formulario" method="POST" action="HSOPact_el.php">
    <table  align="center" border="2" style=" width:700px; height:400px "  class="table table-striped table-bordered table condensed table-hover  "  >
    
    <tr ><td>ESTUDIANTE </td><td colspan="2">  <select id="estudiante" name ="estudiante" disable required>

<?php
 
   echo '<option value="'.$fila['ESTUDIANTE'].'">'.$fila['ESTUDIANTE'].'</option>';
?>  
</select> </td></tr>
    <tr ><td>TIEMPO LIBRE </td><td colspan="2"> <input type="text" name="tiempo" maxlength="30" required class ="form-control" value ="<?php echo $fila['TIEMPO'] ?>"></td></tr>
        <tr><td >RELACIONES INTERPERSONALES</td><td colspan="2"><input type="text" name="relaciones" class ="form-control" value ="<?php echo $fila['RELACIONES'] ?>"></td></tr>
        <tr><td colspan="2">COMPORTAMIENTO Y ESTADO DE ANIMO</td>
        <td colspan="2"><input type="text" name="comportamiento" class ="form-control" value ="<?php echo $fila['COMPORTAMIENTO'] ?>" ></td></tr>
        <tr><td colspan="2">EVENTOS TRAUMATICOS</td>
        <td colspan="2"><input type="text" name="eventos" class ="form-control" value ="<?php echo $fila['EVENTOS'] ?>" ></td></tr>
        <tr><td colspan="2">PROYECTO DE VIDA</td>
        <td colspan="2"><input type="text" name="proyecto" class ="form-control" value ="<?php echo $fila['PROYECTO'] ?>" ></td></tr>
        <tr><td colspan="2">ANTECEDENTE DE SALUD</td>
        <td colspan="2"><input type="text" name="salud" class ="form-control" value ="<?php echo $fila['SALUD'] ?>" ></td></tr>
        <tr><td colspan="2">ANTECEDENTE DE ATENCION POR PSICOLOGIA</td>
        <td colspan="2"><input type="text" name="psicologia" class ="form-control" value ="<?php echo $fila['PSICOLOGIA'] ?>" ></td></tr>
        
          
    </table>
    
    <input  type="submit" class="btn btn-dark" value="Actualizar" name="update">

<input  type="submit" class="btn btn-dark" value="Eliminar" name="eliminar">

    </form>
    <script src="lib/sweet-alert.min.js"></script>  
   
</body>

<?php } }?> 
<?php include("HSfooter.php") ?>