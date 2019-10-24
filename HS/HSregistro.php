<?php include("HSheader.php") ?>

<h3  align="center" class="panel-primary" >Historial socioemocional</h3>

    <form  align="center" name="formulario" method="POST" action="HSinsertarperfil.php">
    <table  align="center" border="2" style=" width:700px; height:400px "  class="table table-striped table-bordered table condensed table-hover  "  >
    
    <tr ><td>ESTUDIANTE </td><td colspan="2">  <select id="estudiante" name ="estudiante" required>

<?php
include('../config.php');
$query = $conn -> query("SELECT ID, NOMBRE FROM perfil_pedagogico");

while($fila= mysqli_fetch_array($query)){  
   echo '<option value="'.$fila['NOMBRE'].'">'.$fila['NOMBRE'].'</option>';
}?>  
</select> </td></tr>
    <tr ><td>TIEMPO LIBRE </td><td colspan="2"> <input type="text" name="tiempo" maxlength="30" required class ="form-control"></td></tr>
        <tr><td >RELACIONES INTERPERSONALES</td><td colspan="2"><input type="text" name="relaciones" class ="form-control"></td></tr>
        <tr><td colspan="2">COMPORTAMIENTO Y ESTADO DE ANIMO</td>
        <td colspan="2"><input type="text" name="comportamiento" class ="form-control"></td></tr>
        <tr><td colspan="2">EVENTOS TRAUMATICOS</td>
        <td colspan="2"><input type="text" name="eventos" class ="form-control"></td></tr>
        <tr><td colspan="2">PROYECTO DE VIDA</td>
        <td colspan="2"><input type="text" name="proyecto" class ="form-control"></td></tr>
        <tr><td colspan="2">ANTECEDENTE DE SALUD</td>
        <td colspan="2"><input type="text" name="salud" class ="form-control"></td></tr>
        <tr><td colspan="2">ANTECEDENTE DE ATENCION POR PSICOLOGIA</td>
        <td colspan="2"><input type="text" name="psicologia" class ="form-control"></td></tr>
        
          
    </table>

  <input  type="submit" class="btn btn-dark" value="Enviar" name="enviar">
  <input type="reset" class="btn btn-dark" value="Limpiar" onClick="location.href='#tema1';"/>

    </form>
    <script src="lib/sweet-alert.min.js"></script>    
</body>



<!--end-main-container-part-->


<?php include("HSfooter.php") ?>