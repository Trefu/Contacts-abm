<?php
include_once('./config/config.php');

class Database
{
    private $servername = HOST_NAME;
    private $username = USER_DATABASE;
    private $password = PASSWORD_DATABASE;
    private  $dbname = DATABASE_NAME;

    private $charset = "utf8";
    private $dbh;
    private $error;
    private $stmt;

    public  function __construct()
    {
        $dsn = "mysql:host=$this->servername;dbname=$this->dbname;charset=$this->charset";

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->dbh = new PDO($dsn, $this->username, $this->password, $options);
        } catch (\PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchall(PDO::FETCH_OBJ);
    }

    public function single()
    {
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}


/*  */