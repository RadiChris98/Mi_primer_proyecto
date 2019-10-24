<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  
  
  <title>Iniciar sesión</title>
  <link rel="shortcut icon" href="paginas/registropng.ico">
</head>
      
<body background="https://images7.alphacoders.com/348/thumb-1920-348455.jpg">
  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <center><img src="img/logo2.png"></center> <br> <br>
      <div class="input-group">
      <i class="fas fa-user icons"></i>
        <input type="text" name="usuario" placeholder="Usuario" class="form-control">
      </div>

      <div class="input-group">
        <i class="fa fa-lock icons" aria-hidden="false"></i>
        <input type="password" name="password" placeholder="Contraseña" class="form-control">
      </div>

      <ul>
        <?php if (!empty($errores)): ?>
          <?php echo $errores ?>
        <?php endif; ?>
      </ul>

      <button type="submit" class="btn btn-success" name="submit">Ingresar</button>
      <br>
    <br>
      <button type="button" class="btn btn-warning" >
    <a href="<?php echo RUTA.'registro.php' ?>" class="login-link">¿No tienes cuenta?</a>
    </button>
    </form>

  <div align ="center">
    
    </div>
  </div>
</body>
</html>
