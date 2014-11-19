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
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    
        if ($this->connection->connect_error) { //creates an if statement and runs the code if the connection is not avialable
            die("<p>Error: " . $this->connection->connect_error . "</p>"); //kills code so nothing appears if there's no connection
        }
    }
    
    public function closeConnection() { //eliminates repetition
        if(isset ($this->connection)) { //isset determines if a variable is empty(null)
            $this->connection->close(); 
        }
    }
    
    public function query($string) { //eliminates repetition
        
    }
}