<!DOCTYPE html>
<html lang="else">
<head>
  <title>Registro</title>
  <link rel="shortcut icon" href="paginas/registropng.ico">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="index.html">Registro</a></h1>
  

  <?php session_start();

require 'admin/config.php';
require 'functions.php';

// comprobar session
if (!isset($_SESSION['usuario'])) {
  header('Location: '.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$admin = iniciarSession('usuarios', $conexion);

  // traer el nombre del usuario
  $user = iniciarSession('usuarios', $conexion);

  

 ?>

</div>
<!--close-Header-part--> 

<!--sidebar-menu-->

<!--sidebar-menu-->


<div id="content">
    <br>
    <br>
    <div id="content-header">
        <div id="breadcrumb"> <a href="index2.php" title="Ir al inicio" class="tip-bottom"><i class="fas fa-home"></i> Inicio</a></div>
      </div>

      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <div class="loader-page"></div>