<?php
class Database {
    protected $connection;
    
    public function __construct($host, $username, $password, $database) {
        $this->connection = new mysqli($host, $username, $password, $database);
        
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
    
    public function query($query) {
        return $this->connection->query($query);
    }
    
    public function __destruct() {
        $this->connection->close();
    }
}