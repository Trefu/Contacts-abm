<?php


$email = $_POST['email'];
$nombreCompleto = $_POST['nombre'];
$nombreCorto = explode(" ", $nombreCompleto);
$sexo = $_POST['sexo'];
$pais = $_POST['pais'];
$email = $_POST['email'];
$imagen = $_POST['imagen'];
$defaultImagen = 'https://i.imgur.com/k9XEbXc.png';
print_r($nombreCorto);
include('conexion.php');
//Guardo la query con la que voy a consultar
$queryContacto = "SELECT * FROM php_contactos WHERE email='$email'";
//Ejecuta la consulta y la guarda
$reqContacto = $conexion->query($queryContacto);
//Numero de filas encontradas, supongo xd
$num_regs = $reqContacto->num_rows;
$emparr = array();
while ($row = mysqli_fetch_assoc($reqContacto)) {
    $emparr[] = $row;
};

if ($num_regs == 0) {
    echo "NO HAY NADIEEEE";
} else {
    echo "HAY UNOOOOOOOOOO";
}
$conexion->close();
echo json_encode($emparr);
