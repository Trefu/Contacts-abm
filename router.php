<?php
include_once 'init.php';
$controller = "pages";
$action = "home";

if (isset($_GET['controller']) && isset($_GET['action'])) {
    if ($_GET['controller'] != "" && $_GET['action'] != "") {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    };
};
/**
 * @$controller parametro recibido por GET a travez del index.php
 */
include_once("controllers/" . $controller . "_controller.php");

$objController = ucfirst($controller) . "Controller";
$controller = new $objController();
$controller->$action();
