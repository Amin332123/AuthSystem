<?php
namespace Oliver\AuthSystem\Core;

use PDO;
use PDOException;

class Database {
    // The single instance
    private static $instance = null;

    // PDO connection
    private $connection;

    // Database credentials
    private $host = "localhost";
    private $dbName = "AuthSystem";
    private $username = "root";
    private $password = "12341234";
     
    // Private constructor prevents direct creation
    private function __construct() {
        try {
            
            $this->connection = new PDO(
                "mysql:host={$this->host};dbname={$this->dbName}",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
    public static function getInstance() {
        if (self::$instance === null) {
            
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getConnection() {
        return $this->connection;
    }
    public function __clone() {}
    public function __wakeup() {}
}


