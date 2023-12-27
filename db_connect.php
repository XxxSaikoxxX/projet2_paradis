<?php
class Database {
    private $host = "localhost";
    private $dbname = "ecom2_project";
    private $user = "root";
    private $password = "";
    public $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
