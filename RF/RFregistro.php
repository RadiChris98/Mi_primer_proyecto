<?php include("RFheader.php") ?>




<h3  align="center" class="panel-primary" >Relaciones Familiares</h3>

    <form  align="center" name="formulario" method="POST" action="insertarperfil.php">
    <table  align="center" border="2" style=" width:700px; height:400px "  class="table table-striped table-bordered table condensed table-hover  "  >

    <thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col">Excelente</th>
      <th scope="col">Buena</th>
      <th scope="col">Regular</th>
      <th scope="col">Mala</th>
      <th scope="col">No aplica</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Con el padre</th>
      <td><input style="width:40px" type="radio" name="edad1" required> </td>
      <td> <input style="width:40px" type="radio" name="edad1" required> </td>
      <td> <input style="width:40px" type="radio" name="edad1" required>  </td>
      <td> <input style="width:40px" type="radio" name="edad1" required> </td>
      <td> <input style="width:40px" type="radio" name="edad1" required>   </td>
    </tr>
    <tr>
      <th scope="row">Con la madre</th>
      <td><input style="width:40px" type="radio" name="edad2" required> </td>
      <td> <input style="width:40px" type="radio" name="edad2" required> </td>
      <td> <input style="width:40px" type="radio" name="edad2" required>  </td>
      <td> <input style="width:40px" type="radio" name="edad2" required> </td>
      <td> <input style="width:40px" type="radio" name="edad2" required>   </td>
    </tr>
    <tr>
      <th scope="row">Con los hermanos</th>
      <td><input style="width:40px" type="radio" name="edad3" required> </td>
      <td> <input style="width:40px" type="radio" name="edad3" required> </td>
      <td> <input style="width:40px" type="radio" name="edad3" required>  </td>
      <td> <input style="width:40px" type="radio" name="edad3" required> </td>
      <td> <input style="width:40px" type="radio" name="edad3" required>   </td>
    </tr>
    <tr>
      <th scope="row">Con los abuelos</th>
      <td><input style="width:40px" type="radio" name="edad4" required> </td>
      <td> <input style="width:40px" type="radio" name="edad4" required> </td>
      <td> <input style="width:40px" type="radio" name="edad4" required>  </td>
      <td> <input style="width:40px" type="radio" name="edad4" required> </td>
      <td> <input style="width:40px" type="radio" name="edad4" required>   </td>
      
    </tr>
    <tr>
      <th scope="row">Con padrasto/madrasta</th>
      <td><input style="width:40px" type="radio" name="edad5" required> </td>
      <td> <input style="width:40px" type="radio" name="edad5" required> </td>
      <td> <input style="width:40px" type="radio" name="edad5" required>  </td>
      <td> <input style="width:40px" type="radio" name="edad5" required> </td>
      <td> <input style="width:40px" type="radio" name="edad5" required>   </td>
    </tr>
  </tbody>
  <tr  align="center" class="table-active" ><td colspan="6">Observaciones</td></tr>
    
    <td colspan="4"><textarea  style=" height: 60px; width: 127%;" cols="80" name="comment" form="usrform"> Enter radio here...</textarea></td></tr>
    <tr  align="center" class="table-active" ><td colspan="6">Antecedentes escolares</td></tr>
    
    <tr><td  colspan="2" >Historia Escolar</td> <td colspan="4"><textarea style="  width: 90%;"  cols="50" name="comment" form="usrform"> Enter radio here...</textarea></td></tr>
        <tr ><td colspan="2" >Diferencia academica</td> <td colspan="4" ><textarea  style="  width: 90%;" cols="50" name="comment" form="usrform"> Enter radio here...</textarea></td></tr>

          
    </table>

  <input  type="submit" class="btn btn-dark" value="Enviar" name="enviar">
  <input type="reset" class="btn btn-dark" value="Limpiar" onClick="location.href='#tema1';"/>

    </form>
    <script src="lib/sweet-alert.min.js"></script>    
</body>


<?php include("RFfooter.php") ?>