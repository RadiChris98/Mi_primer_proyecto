<?php include("CSheader.php") ?>


<h3  align="center" class="panel-primary" >Notificación de caso en Psicología</h3><br>

    <form  align="center" name="formulario" method="POST" action="CSinsertar.php">

    <table  align="center" border="1" style=" width:100px; height:400px "  class="table table-striped table-bordered table condensed table-hover  "  >
    <div style=" width:400px; height:0px ">
    
</div>
        <tr ><td >Fecha</td> <td><input  type="date" name="fecha" required></td><td>Edad</td><td><input type="number" name="edad" required></td><td>grado</td><td><input type="number" name="grado" required></td></tr>
        <tr><td  colspan="2" >Estudiante</td> <td colspan="4"> <select id="estudiante" name ="estudiante" required>

    <?php
    include('../config.php');
    $query = $conn -> query("SELECT ID, NOMBRE FROM perfil_pedagogico");

    while($fila= mysqli_fetch_array($query)){  
       echo '<option value="'.$fila['NOMBRE'].'">'.$fila['NOMBRE'].'</option>';
    }?>  
</select> 
</td></tr>
        <tr ><td colspan="2" >Asistentes</td> <td colspan="4" ><textarea name="asistente" placeholder="Escriba aquí..." cols="70"></textarea></td></tr>
        <tr><td   colspan="2">Motivo</td> <td colspan="4"><textarea name="motivo" placeholder="Escriba aquí..." cols="70"></textarea></td></tr>
       
       
        <tr  align="center" class="table-active" ><td colspan="6">DESCRIPCIÓN DEL ESTUDIANTE</td></tr>
    
        <td colspan="6"><textarea placeholder="Escriba aquí..." style=" height: 60px; width: 100%;" cols="80" name="descripcion" ></textarea></td></tr>
        <tr><td  colspan="2" >compromiso del docente</td> <td colspan="4"><textarea placeholder="Escriba aquí..." cols="70" name="comp_docente" ></textarea></td></tr>
        <tr ><td colspan="2" >Compromiso de los padres</td> <td colspan="4" ><textarea placeholder="Escriba aquí..." cols="70" name="comp_padres" ></textarea></td></tr>

        <tr  align="center" class="table-active" ><td colspan="6">CONCLUSIONES</td></tr>
    
    <tr><td colspan="6" ><textarea placeholder="Escriba aquí..." style=" height: 60px; width: 100%;" cols="80" name="conclusiones"></textarea></td></tr>


    
    </table>

  <input  type="submit" class="btn btn-dark" value="Enviar" name="enviar">
  <input type="reset" class="btn btn-dark" value="Limpiar" onClick="location.href='#tema1';"/>



    </form>
    <script src="lib/sweet-alert.min.js"></script>    
</body>



<!--end-main-container-part-->

<?php include("CSfooter.php") ?>