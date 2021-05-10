<?php
class db{
    public $serverName = "localhost";
    public $userName = "root";
    public $password = "";
    public $dbName = "ajax_province";
    public $connection;

    public function __construct()
    {
        if (!$this->connection) {
            $this->connect();
        }
    }

    public function __destruct()
    {
        if ($this->connection) {
            $this->disconnect();
        }
    }

    public function connect() {

        try {

            $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->dbName", $this->userName, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
            die;

        }
    }

    public function disconnect() {
        $this->connection = null;
    }

}