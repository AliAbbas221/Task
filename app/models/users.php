<?php
namespace App\Models;

session_start(); 

class User extends Model {
    private $name;
    private $email, $password;

    public function getName() {
        return $this->name;
    }

    public function setName( string $name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($password) {
        $this->password = $password;
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
        while ($row = $s->fetchAll(PDO::FETCH_ASSOC)) {
            $user = new User();
            $user->id = $row['id'];
            $user->setName($row['name']);
            $user->setEmail($row['email']);
            $user->setpassword($row['password']); 
            $users[] = $user;
        }
        return $users;
    }

    public static function getUserById($db, $id) {
        $query = "SELECT * FROM users WHERE id = $id";
        $s=$db->prepare($query);
        $s->execute();;
        $row = $s->fetchAll(PDO::FETCH_ASSOC);
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
         
            $sesult ="SELECT * FROM users WHERE id ='$this->id' ";
            $s=$db->prepare($sesult);
        $s->execute(); 
        } else {
            $query = "INSERT INTO users (name, email , password) VALUES ('$this->name','$this->email','$this->password')";
            $stmt = mysqli_query($db, $query);
            
            $this->id = mysqli_insert_id($db);
        }
    }

    public function delete($conn) {
        $query = "DELETE FROM users WHERE id = '$this->id' ";
        $stmt = mysqli_query($conn, $query);
       
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
    
    
}