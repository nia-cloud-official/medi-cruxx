<?php 

include './../config/config.php';

class Accounts { 
    private $APP_NAME;
    private $username; 
    private $phone;
    private $accessToken;

    public function __construct(){ 
        $token = "LOLA" . strval(random_int(1, 10));
        $this->accessToken = $token;
        $this->APP_NAME = "Medi-cruxx";
        if($this->APP_NAME == "Medi-cruxx") { 
            $ussd = "*"
        }
    }
    public function checkIfTokenExist(){ 
        $conn = mysqli_connect('localhost', 'root', '', 'medx');
        $query = "SELECT * FROM `accounts` WHERE `access_token` = '$this->accessToken'";
        $result = mysqli_query($conn, $query); 
        if(!$result){ 
            $alert = "All good";
        }else { 
            $alert = "All bad, lets re-create the access token";
            $token = "LOLA" . strval(random_int(1, 10));
            $this->accessToken = $token;
        }
    }
    public function Login($phone){ 
        $conn = mysqli_connect('localhost', 'root', '', 'medx');
        $query = "SELECT * FROM accounts WHERE phone = '$phone'";
        $result = mysqli_query($conn, $query);
        if(empty($result)){ 
            $resMessage = "No Account found, Please create an account";
            $this->Register($username, $phone);
        }else { 
            $resMessage = "Welcome back!";
            session_start();
            header('Location: index.php');
        }
    }
    public function Register($username, $phone){
        $conn = mysqli_connect('localhost', 'root', '', 'medx');
        $query = "INSERT INTO `accounts` (`id`, `username`, `phone`) VALUES (NULL, '$username', '$phone')";
        $result = mysqli_query($conn, $query);
        session_start();
        header('Location: index.php');
    }
    public function renderAccount($phone){ 
        $conn = mysqli_connect("localhost","root","","medx");
        $query = "SELECT * FROM `accounts` WHERE `phone` = '$phone'";
        $data = mysqli_query($conn,$query);
        var_dump($data);
        file_put_contents('data/users.zora', $data);
        return $data;
    }
}