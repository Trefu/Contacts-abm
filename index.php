<?php
//error_reporting(0);
//OP es la operación enviada a traves del url (una especie de controler?)
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

    $contenido = 'baja-contacto.php';
    $titulo = 'Agregar contacto';
    break;

  case 'consultas':

    $contenido = 'baja-contacto.php';
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/main.css" />
  <title><?php $titulo ?></title>
</head>

<body>
  <section id="header">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <!-- Logo -->
          <h1><a href="index.html" id="logo"><?= $titulo ?></a></h1>

          <!-- Nav -->
          <nav id="nav">
            <a href='?op=home'>Inicio</a>
            <a href="?op=alta">Agregar contacto</a>
            <a href="?op=baja">Eliminar contacto</a>
            <a href="?op=modificacion">Editar contacto</a>
            <a href="?op=consultas">Buscar contacto</a>
          </nav>

        </div>
      </div>
    </div>

  </section>

  <?php include $contenido ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/browser.min.js"></script>
  <script src="assets/js/breakpoints.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>




</body>

</html>