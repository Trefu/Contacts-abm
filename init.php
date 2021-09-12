<?php
//Autoloader


function autoload($class_name)
{
    require_once 'models/' . $class_name . '.php';
};

spl_autoload_register('autoload');
