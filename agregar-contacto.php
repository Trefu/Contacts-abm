<?php

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$pais = $_POST['pais'];
$email = $_POST['email'];
$imagen = $_POST['imagen'];
$defaultImagen = 'https://i.imgur.com/k9XEbXc.png';

echo "$email $nombre $sexo $pais $imagen";

include('conexion.php');
$queryContacto = "SELECT * FROM php_contactos WHERE email='$email'";
$miQuery = mysqli_query($conexion, $queryContacto);

mysqli_close($conexion);
