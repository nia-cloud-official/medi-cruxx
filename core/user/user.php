<?php 

namespace Account\UserAccess;

class User { 
    private $username;
    private $phoneNumber;

    public function __construct($username){ 
       $this->setCredentials($username); 
       header("Location: ./../index.php");
    }

    public function setCredentials($username){ 
        $_SESSION['name'] = $username;
        $this->username = $username; 
        header("Location: ./../index.php");
    }
}