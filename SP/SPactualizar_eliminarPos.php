<?php include("SPheader.php") ?>



<?php

include('../config.php');
$cedula = $_POST['cedula'];
$consulta= "SELECT * FROM sp WHERE estudiante in 
(select nombre from perfil_pedagogico where cedula='$cedula') limit 1"; 
        $datos = mysqli_query($conn, $consulta);

        if($datos->num_rows==0){
          include('../Alarmas/CONFnoexiste.php');
        }else{
        
            
          
?>
<?php while($fila= mysqli_fetch_assoc($datos)){  
  $cedula = $_POST['cedula'];
  $consulta2= "SELECT * from perfil_pedagogico where cedula='$cedula'"; 
  $datos2 = mysqli_query($conn, $consulta2);
     while($fila1= mysqli_fetch_assoc($datos2)){
  
  echo "<script>
  function alerta(){
      swal('Proceso exitoso', 'Registro encontrado: ".$fila['ESTUDIANTE']."', 'success');
  } 
  alerta();
  </script>";


  ?>

<h3  align="center" class="panel-primary" >Seguimiento psicológico</h3>

    <form  align="center" name="formulario" method="POST" action="SPOPact_el.php">
  </table>
    <h2>IDENTIFICACION DEL ALUMNO</h2>
    <table align="center" border="1" style="width: 800px; height:100px"  class="table table-bordered table-dark">
  <tbody>
  <td>FECHA </td><td><input type="date" name="fecha" class ="form-control" value ="<?php echo $fila['FECHA'] ?>"></td></tr>

    <tr><td>Nombre del estudiante: <select id="estudiante" name ="estudiante" required>

<?php
   echo '<option value="'.$fila['ESTUDIANTE'].'">'.$fila['ESTUDIANTE'].'</option>';
?>  
</select></td>

    <td></td><td>Identificacion:<input type="text" name="identificacion"class ="form-control" value ="<?php echo $cedula ?>" disabled></td></tr>
    <tr><td>Fecha de nacimiento: <input type="text" name="" class ="form-control" value="<?php echo $fila1['FECHA']?>" disabled></td>
    <td>Ciudad de origen: <input type="text" name="ciudad_origen" class ="form-control" value ="<?php echo $fila['CIUDAD_ORIGEN'] ?>" ></td>
    <td>Edad actual:<input type="text" name="edad_actual" class ="form-control" value ="<?php echo $fila1['EDAD'] ?>" disabled ></td></tr>
    <tr><td>Curso actual:<input type="text" name="curso_actual" class ="form-control" value ="<?php echo $fila['CURSO'] ?>" ></td>
    <td>Repitencia de curso:<input type="text" name="repitencia" class ="form-control" value ="<?php echo $fila['REPITENCIA'] ?>" ></td>
    
    </tbody>
</table>
     <h2>ANTECESDENTES FAMILIARES</h2>
     <table align="center" border="1" style="width: 800px; height:100px"  class="table table-bordered table-dark">
     <tbody>
    <tr><td>Con quien vive el estudiante: (otro)</td>
    <td></td></tr>
    <tr><td>Nombre:<input type="text" name="o_nombre"class ="form-control" value ="<?php echo $fila['O_NOMBRE'] ?>" ></td>
    <td>Edad: <input type="text" name="o_edad"class ="form-control" value ="<?php echo $fila['O_EDAD'] ?>" ></td>
    <td>Escolarizacion: <input type="text" name="o_escolarizacion" class ="form-control" value ="<?php echo $fila['O_ESCOLARIZACION'] ?>" ></td></tr>
    <tr><td>Ocupacion:<input type="text" name="o_ocupacion" class ="form-control" value ="<?php echo $fila['O_OCUPACION'] ?>" ></td>
    <td>Direccion:<input type="text" name="o_direccion"class ="form-control" value ="<?php echo $fila['O_DIRECCION'] ?>" ></td>
    <td>Telefono:<input type="text" name="o_tel" class ="form-control" value ="<?php echo $fila['O_TEL'] ?>"></td>
    <tr><td>Antecedente del padre:</td>
    <td></td></tr>
    <tr><td>Nombre:<input type="text" name="p_nombre"class ="form-control" value ="<?php echo $fila['P_NOMBRE'] ?>" ></td>
    <td>Edad: <input type="text" name="p_edad"class ="form-control" value ="<?php echo $fila['P_EDAD'] ?>" ></td>
    <td>Escolarizacion: <input type="text" name="p_escolarizacion" class ="form-control" value ="<?php echo $fila['P_ESCOLARIZACION'] ?>" ></td></tr>
    <tr><td>Ocupacion:<input type="text" name="p_ocupacion" class ="form-control" value ="<?php echo $fila['P_OCUPACION'] ?>"  ></td>
    <td>Direccion:<input type="text" name="p_direccion" class ="form-control" value ="<?php echo $fila['P_DIRECCION'] ?>" ></td>
    <td>Telefono:<input type="text" name="p_tel" class ="form-control" value ="<?php echo $fila['P_TEL'] ?>" ></td>
    <tr><td>Atecedente de la madre:</td>
    <td></td></tr>
    <tr><td>Nombre:<input type="text" name="m_nombre"class ="form-control" value ="<?php echo $fila['M_NOMBRE'] ?>" ></td>
    <td>Edad: <input type="text" name="m_edad"class ="form-control" value ="<?php echo $fila['M_EDAD'] ?>" ></td>
    <td>Escolarizacion: <input type="text" name="m_escolarizacion" class ="form-control" value ="<?php echo $fila['M_ESCOLARIZACION'] ?>" ></td></tr>
    <tr><td>Ocupacion:<input type="text" name="m_ocupacion" class ="form-control" value ="<?php echo $fila['M_OCUPACION'] ?>" ></td>
    <td>Direccion:<input type="text" name="m_direccion" class ="form-control" value ="<?php echo $fila['M_DIRECCION'] ?>" ></td>
    <td>Telefono:<input type="text" name="m_tel"class ="form-control" value ="<?php echo $fila['M_TEL'] ?>" ></td>
    
    
    </tbody>
          
    </table>

    <input  type="submit" class="btn btn-dark" value="Actualizar" name="update">

<input  type="submit" class="btn btn-dark" value="Eliminar" name="eliminar">

    </form>
    <script src="lib/sweet-alert.min.js"></script>    
</body>


<?php } } }?> 


<?php include("SPfooter.php") ?>