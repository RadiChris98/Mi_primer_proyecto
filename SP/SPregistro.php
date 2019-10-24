<?php include("SPheader.php") ?>


<!--main-container-part-->

<h3  align="center" class="panel-primary" >Seguimiento psicológico</h3>

    <form  align="center" name="formulario" method="POST" action="SPinsertarperfil.php">
  </table>
    <h2>IDENTIFICACION DEL ALUMNO</h2>
    <table align="center" border="1" style="width: 800px; height:100px"  class="table table-bordered table-dark">
  <tbody>
  <td>FECHA </td><td><input type="date" name="fecha" class ="form-control"></td></tr>

    <tr><td>Nombre del estudiante: <select id="estudiante" name ="estudiante" required>

<?php
include('../config.php');
$query = $conn -> query("SELECT ID, NOMBRE FROM perfil_pedagogico");

while($fila= mysqli_fetch_array($query)){  
   echo '<option value="'.$fila['NOMBRE'].'">'.$fila['NOMBRE'].'</option>';
}?>  
</select></td>

    <td></td><td>Identificacion:<input type="text" name="identificacion"class ="form-control" disabled></td></tr>
    <tr><td>Fecha de nacimiento: <input type="text" name="" class ="form-control" disabled></td>
    <td>Ciudad de origen: <input type="text" name="ciudad_origen" class ="form-control"></td>
    <td>Edad actual:<input type="text" name="edad_actual" class ="form-control" disabled></td></tr>
    <tr><td>Curso actual:<input type="text" name="curso_actual" class ="form-control"></td>
    <td>Repitencia de curso:<input type="text" name="repitencia" class ="form-control"></td>
    
    </tbody>
</table>
     <h2>ANTECESDENTES FAMILIARES</h2>
     <table align="center" border="1" style="width: 800px; height:100px"  class="table table-bordered table-dark">
     <tbody>
    <tr><td>Con quien vive el estudiante: (otro)</td>
    <td></td></tr>
    <tr><td>Nombre:<input type="text" name="o_nombre"class ="form-control"></td>
    <td>Edad: <input type="text" name="o_edad"class ="form-control"></td>
    <td>Escolarizacion: <input type="text" name="o_escolarizacion" class ="form-control"></td></tr>
    <tr><td>Ocupacion:<input type="text" name="o_ocupacion" class ="form-control"></td>
    <td>Direccion:<input type="text" name="o_direccion"class ="form-control"></td>
    <td>Telefono:<input type="text" name="o_tel" class ="form-control"></td>
    <tr><td>Antecedente del padre:</td>
    <td></td></tr>
    <tr><td>Nombre:<input type="text" name="p_nombre"class ="form-control"></td>
    <td>Edad: <input type="text" name="p_edad"class ="form-control"></td>
    <td>Escolarizacion: <input type="text" name="p_escolarizacion" class ="form-control"></td></tr>
    <tr><td>Ocupacion:<input type="text" name="p_ocupacion" class ="form-control"></td>
    <td>Direccion:<input type="text" name="p_direccion" class ="form-control"></td>
    <td>Telefono:<input type="text" name="p_tel" class ="form-control"></td>
    <tr><td>Atecedente de la madre:</td>
    <td></td></tr>
    <tr><td>Nombre:<input type="text" name="m_nombre"class ="form-control"></td>
    <td>Edad: <input type="text" name="m_edad"class ="form-control"></td>
    <td>Escolarizacion: <input type="text" name="m_escolarizacion" class ="form-control"></td></tr>
    <tr><td>Ocupacion:<input type="text" name="m_ocupacion" class ="form-control"></td>
    <td>Direccion:<input type="text" name="m_direccion" class ="form-control"></td>
    <td>Telefono:<input type="text" name="m_tel"class ="form-control"></td>
    
    
    </tbody>
          
    </table>

  <input  type="submit" class="btn btn-dark" value="Enviar" name="enviar">
  <input type="reset" class="btn btn-dark" value="Limpiar" onClick="location.href='#tema1';"/>

    </form>
    <script src="lib/sweet-alert.min.js"></script>    
</body>



<!--end-main-container-part-->




<?php include("SPfooter.php") ?>