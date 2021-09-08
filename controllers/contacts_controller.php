<?php

class ContactsController
{
    public function alta()
    {
        include_once('./views/contacts/alta.php');
    }
    public function baja()
    {
        include_once('./views/contacts/baja.php');
    }
    public function modificacion()
    {
        include_once('./views/contacts/modificacion.php');
    }
    public function buscar()
    {
        include_once('./views/contacts/buscar.php');
    }
};
