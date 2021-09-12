<?php

require_once('Model.php');

class Contacts
{
    private $db;
    public $contact_id;
    public $contact;

    function __construct()
    {
        $this->db = new Database;
    }
    public function getAllContacts()
    {
        $this->db->query(
            "SELECT * FROM contactos"
        );
        $results = $this->db->resultSet();
        return $results;
    }
}
