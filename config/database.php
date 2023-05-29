<?php
namespace app\database;

use PDO;
use PDOException;
class Connection{
  public $host = "localhost";
  public $dbname = "darrebni";
  public $username = "root";
  public $password = "";
  public function getconnection(){
try {
    $db = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
    // set the PDO error mode to exception
    
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
 return $db;

}
}