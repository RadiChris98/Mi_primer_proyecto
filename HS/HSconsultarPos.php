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

    <form  align="center" name="formulario" method="POST" action="HSinsertarperfil.php">
    <table  align="center" border="2" style=" width:700px; height:400px "  class="table table-striped table-bordered table condensed table-hover  "  >
    
    <tr ><td>ESTUDIANTE </td><td colspan="2">  <select id="estudiante" name ="estudiante" disabled=”disabled”  required>

<?php
 
   echo '<option value="'.$fila['ESTUDIANTE'].'">'.$fila['ESTUDIANTE'].'</option>';
?>  
</select> </td></tr>
    <tr ><td>TIEMPO LIBRE </td><td colspan="2"> <input type="text" name="tiempo" maxlength="30" required class ="form-control" value ="<?php echo $fila['TIEMPO'] ?>" disabled=”disabled” ></td></tr>
        <tr><td >RELACIONES INTERPERSONALES</td><td colspan="2"><input type="text" name="relaciones" class ="form-control" disable value ="<?php echo $fila['RELACIONES'] ?>" disabled=”disabled” ></td></tr>
        <tr><td colspan="2">COMPORTAMIENTO Y ESTADO DE ANIMO</td>
        <td colspan="2"><input type="text" name="comportamiento" class ="form-control" disable value ="<?php echo $fila['COMPORTAMIENTO'] ?>" disabled=”disabled”  ></td></tr>
        <tr><td colspan="2">EVENTOS TRAUMATICOS</td>
        <td colspan="2"><input type="text" name="eventos" class ="form-control" disable value ="<?php echo $fila['EVENTOS'] ?>" disabled=”disabled” ></td></tr>
        <tr><td colspan="2">PROYECTO DE VIDA</td>
        <td colspan="2"><input type="text" name="proyecto" class ="form-control" disable value ="<?php echo $fila['PROYECTO'] ?>" disabled=”disabled”  ></td></tr>
        <tr><td colspan="2">ANTECEDENTE DE SALUD</td>
        <td colspan="2"><input type="text" name="salud" class ="form-control" disable value ="<?php echo $fila['SALUD'] ?>" disabled=”disabled”  ></td></tr>
        <tr><td colspan="2">ANTECEDENTE DE ATENCION POR PSICOLOGIA</td>
        <td colspan="2"><input type="text" name="psicologia" class ="form-control" disable value ="<?php echo $fila['PSICOLOGIA'] ?>" disabled=”disabled”  ></td></tr>
        
          
    </table>

    </form>
    <script src="lib/sweet-alert.min.js"></script>  
   
</body>



<!--end-main-container-part-->

<?php } }?> 
<?php include("HSfooter.php") ?>