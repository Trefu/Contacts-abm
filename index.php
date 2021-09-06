<?php
//error_reporting(0);
//OP es la operación enviada a traves del url 
$op = $_GET['op'];
switch ($op) {
  case 'baja':

    $contenido = 'baja-contacto.php';
    $titulo = 'Eliminar contacto';
    break;

  case 'modificacion':

    $contenido = 'modificacion-contacto.php';
    $titulo = 'Editar contacto';
    break;

  case 'alta':

    $contenido = 'alta-contacto.php';
    $titulo = 'Agregar contacto';
    break;

  case 'buscar':

    $contenido = 'buscar-contacto.php';
    $titulo = 'Ver contacto';
    break;

  default:
    $contenido = "home.php";
    $titulo = "Contactos";
    break;
}
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title><?php $titulo ?></title>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <a class="nav-item nav-link" href='?op=home'>Inicio</a>
        <a class="nav-item nav-link" href="?op=alta">Agregar</a>
        <a class="nav-item nav-link" href="?op=baja">Eliminar</a>
        <a class="nav-item nav-link" href="?op=modificacion">Editar</a>
        <a class="nav-item nav-link" href="?op=buscar">Buscar</a>
      </ul>
    </div>
  </nav>





  <?php include $contenido ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>