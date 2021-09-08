<?php


$controller = "pages";
$action = "home";
/**
 * si los controladores contienen pedido y un requisito valido, ejecuta el get, de caso contrario envia al home
 */
if (isset($_GET['controller']) && isset($_GET['action'])) {
  if ($_GET['controller'] != "" && $_GET['action'] != "") {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
  };
};
require_once('views/template.php');
