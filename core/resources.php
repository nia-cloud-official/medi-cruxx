<?php 


namespace System\Resources;

use DBConnections\SQLDatabase\Database;

require './database/dbController.php';

class Resource {
     public function __construct() { 

     }

     public function generateDeveloperReport(){
        $db = new Database(); 
        $info = phpversion();
        $SQL_ERRORS = mysqli_error_list($db->conn);
        $SQL_ = mysqli_stat($db->conn);
        $L_ERROR = error_get_last();
        $log_data = $info . $SQL_ERRORS . $SQL_ . $L_ERROR;
        $file = file_put_contents("dev.log", $log_data);
     }
     public function __destruct(){ 

     }
}

$res = new Resource();
$res->generateDeveloperReport();