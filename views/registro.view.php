<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Registrarse</title>
  <link rel="shortcut icon" href="paginas/registropng.ico">
</head>
<body background="http://apcweb.com.ar/wp-content/uploads/2018/12/bg4.jpg">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <div class="loader-page"></div>
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <center><h1><strong><font color="white">Registro de usuario</font></strong></h1></center> <br> <br>  
    <div class="input-group">
        <i class="fas fa-user icons" aria-hidden="false"></i>
        <input type="text" name="usuario" placeholder="Usuario" class="form-control">
      </div>

      <div class="input-group">
        <i class="fa fa-lock icons" aria-hidden="false"></i>
        <input type="password" name="password" placeholder="Contraseña" class="form-control">
      </div>
      <br>
      <?php if (!empty($errores)): ?>
        <ul>
          <?php echo $errores; ?>
        </ul>
      <?php endif; ?>

      <button type="submit" name="submit" class="btn btn-success">Registrar</button>
      <br><br>
      <button type="button" class="btn btn-warning" >
    <a href="<?php echo RUTA.'login.php' ?>" class="login-link">¿Ya tienes cuenta?</a>
    </button>
    </form>
  </div>

  <script>
    $(window).on('load', function () {
    setTimeout(function () {
  $(".loader-page").css({visibility:"hidden",opacity:"0"})
}, 200);
   
});
    </script>

 
</body>
</html>
