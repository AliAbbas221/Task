<?php
declare (strict_types=1);
namespace App\Models;
//require __DIR__ . "/../../config/connection.php";
require_once __DIR__ . '/../../config/database.php'; 
use App\database\Connection;

session_start();

$connections=new Connection();
  $db=$connections->getconnection();
class User extends Model {
    private $name;
    private $email, $password;
    

    public function getName() {
        return $this->name;
    }

    public function setName(String $name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function getpassword() {
        return $this->password;
    }

    public function setpassword($password) {
        $this->password = $password;
    }

    public static function getAllUsers($db) {
        $query = "SELECT * FROM users";
        $s=$db->prepare($query);
        $s->execute();
        $users = array();
        while ($row = $s->fetchObject()) {
            $user = new User();
            $user->id = $row['id'];
            $user->setName($row['name']);
            $user->setEmail($row['email']);
            $user->setpassword($row['password']); 
            $users[] = $user;
        }
        return $users;
    }
    public  function testuser($db){
        // echo $this->email . "<br>" . $this->password ; 
        $er="SELECT * FROM users WHERE email='$this->email' AND password='$this->password'";
        //$s=mysqli_query($con,$er);
       $s= $db->prepare($er);
       $s->execute();
        
          
       if ($s->rowCount() > 0) {
          $row = $s->fetchObject();
          return $row;
      }
        else{
         $s=0;
        }
       
      
      }   

    public static function getUserById($db, $id) {
        $query = "SELECT * FROM users WHERE id = $id";
        $s=$db->prepare($query);
        $s->execute();;
        $row = $s->fetchObject();
        $user = new User();
        $user->id = $row['id'];
        $user->setName($row['name']);
        $user->setEmail($row['email']);
        $user->setpassword($row['password']); 
        return $user;
    }

    public function save($db) 
    {
        if ($this->id) {
         
            $sesult ="SELECT * FROM users WHERE id =$this->id ";
            $s=$db->prepare($sesult);
        $s->execute(); 
        } 
        else {
            $query = "INSERT INTO users (name, email , password) VALUES ('$this->name','$this->email','$this->password')";
            $st=$db->prepare($query);
            $st->execute();
            
            $this->id = $db->lastInsertId();
        }
    }

    public function delete($conn) {
        $query = "DELETE FROM users WHERE id = '$this->id' ";
        $stmt = $conn->prepare( $query);
        $stmt->execute();
       
    }


public function login($db){
    $query="SELECT * FROM users WHERE email='$this->email' AND password='$this->password'";
    $exec=$db->prepare($query);
if( $exec->execute()){
return true;
}
else{
return false;
}
    
    
}}