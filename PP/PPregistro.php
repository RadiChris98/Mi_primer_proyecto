<?php include("PPheader.php") ?>

<h3  align="center" class="panel-primary" >Perfil Pedagógico</h3>

    <form  align="center" name="formulario" method="POST" action="PPinsertarperfil.php">
    <table  align="center" border="2" style=" width:700px; height:400px "  class="table table-striped table-bordered table condensed table-hover  "  >
  
        <tr ><td>NOMBRE</td><td>EDAD</td><td>FECHA DE NACIMIENTO</td></tr>
        <tr><td><input type="text" class="form-control" name="nombre" required></td><td><input type="number" name="edad" max="150" required></td><td><input type="date" name="fecha" max="<?php echo date("Y-m-d"); ?>" required></td></tr>
        <tr  class="table-active" ><td colspan="3"><strong>DESCRIPCIÓN DEL ESTUDIANTE *</strong></td></tr>
       <tr ><td colspan="3">DOCUMENTO DE IDENTIDAD</td></tr>
        <tr><td colspan="3"><input type="number" name="cedula" required></td></tr>
        <tr ><td colspan="3">SOCIOAFECTIVA</td></tr>
        <tr><td colspan="3"><input type="text" name="socioafectiva" style="width:700px;height:20px" required></td></tr>
        <tr><td colspan="3">COGNITIVA</td></tr>
        <tr><td colspan="3"><input type="text" name="cognitiva" style="width:700px;height:20px" required></td></tr>
        <tr><td colspan="3">COMUNICACIÓN</td></tr>
        <tr><td colspan="3"><input type="text" name="comunicacion" style="width:700px;height:20px" required></td></tr>
        <tr><td colspan="3">MORAL Y ESPIRITUAL</td></tr>
        <tr><td colspan="3"><input type="text" name="moral" style="width:700px;height:20px" required></td></tr>
        <tr><td>FORTALEZAS</td><td>DEBILIDADES</td><td></td></tr>
        <tr><td><textarea name="fortalezas" required></textarea></td><td><textarea name="debilidades" required></textarea></td><td></td></tr>     
        <tr><td colspan="3">BARRERAS EN EL APRENDIZAJE</td></tr>
        <tr><td colspan="3"><input type="text" name="barreras" style="width:700px;height:20px" required></td></tr>
        <tr><td colspan="3">ESTRATEGIAS UTILIZADAS EN EL AULA</td></tr>
        <tr><td colspan="3"><input type="text" name="estrategias" style="width:700px;height:20px" maxlength="25" required></td></tr>  
    </table>

  <input  type="submit" class="btn btn-dark" value="Enviar" name="enviar">
  <input type="reset" class="btn btn-dark" value="Limpiar" onClick="location.href='#tema1';"/>

    </form>
    <script src="lib/sweet-alert.min.js"></script>    
</body>



<!--end-main-container-part-->
<?php include("PPfooter.php") ?>