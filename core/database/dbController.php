<?php 

namespace DBConnections\SQLDatabase; 

class Database { 
    public $conn;
    private $username; 
    private $password;
    public $host;
    private $databaseName;

    public function __construct(){ 
        $this->host = 'localhost';
        $this->databaseName = 'medx';
        $this->username = 'root';
        $this->password = '';
        $this->conn = $this->establish_connection();
    }
    public function establish_connection(){ 
        $conn = mysqli_connect("localhost", $this->username, $this->password, $this->databaseName);
        return $conn;
    }
    public function checkForErrors(){ 
        if(!mysqli_connect_error()){ 
            echo "No errors occurred ✅";
        }else { 
            echo "We ran into " . mysqli_error($this->conn); 
        }
    }

    public function cutConnections(){
        mysqli_close($this->conn);
    }
    public function __destruct(){
        mysqli_close($this->conn);
    }
}