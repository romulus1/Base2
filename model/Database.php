<?php
class Database { //you store information
    private $connection;
    private $host;
    private $username;
    private $passwords;
    private $database;
    
    public function __construct($host, $username, $password, $database) { //stores the information that passes
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    
    public function openConnection() { //eliminates repetition
        
    }
    
    public function closeConnection() { //eliminates repetition
        
    }
    
    public function query($string) { //eliminates repetition
        
    }
}