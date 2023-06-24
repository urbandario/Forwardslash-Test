<?php
class Database {
    protected $connection;
    
    public function __construct($host, $username, $password, $database) {
        $this->connection = new mysqli($host, $username, $password, $database);
        
        if ($this->connection->connect_error) {
            throw new Exception("Connection failed: " . $this->connection->connect_error);
        }
    }
    
    public function query($query) {
        $result = $this->connection->query($query);
        
        if (!$result) {
            throw new Exception("Query execution failed: " . $this->connection->error);
        }
        
        return $result;
    }
    
    public function __destruct() {
        $this->connection->close();
    }
}
