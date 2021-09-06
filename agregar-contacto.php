<?php
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$nombreCompleto = $_POST['nombre'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$email = $_POST['email'];
$imagen = $_POST['imagen.txt'];

$miQuery = mysqli_query($conexion, "SELECT * FROM php_contactos WHERE email='$email'");
