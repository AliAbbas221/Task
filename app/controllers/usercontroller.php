<?php

namespace App\controller;
require_once __DIR__.'/../models/users.php';
require_once __DIR__.'/../models/family.php';
require_once 'BaseController.php';
use  APP\controller; ;
use App\Models\User as UR;
use App\Models\Family as fm;
class UserController extends basecontroller {
    public function index(){
        if(isset($_SESSION['email'])){
            $famiy= fm::getall($this->conn);
       require 'views/families/index.php';
            //$this->render('users/index',compact('courses'));
          
        }
        else{
           header('Location:'.BASE_BATH.'signUp');
          
        }
      
      }
        
    
    public function signup(){
        
        if($_SERVER['REQUEST_METHOD']==='POST'){
    $user=new UR();
    if($this->testName($_POST['name'])){
    $this->test($_POST['name']);

    $user->setname($_POST['name']);
    
    $user->setemail($_POST['email']);
    $user->setpassword($_POST['password']);
    $user->save($this->conn,);
     header('Location:'.BASE_BATH.'login');
     //require'views/user/login.php';
    //$this->render('login');
    exit;
    }else{require    __DIR__.'/../../views/users/Signup.php';}}
    else{
        require    __DIR__.'/../../views/users/Signup.php';
            //$this->render('/users/Signup');
        }
    }
   



public function LoginController() {
    if (isset($_POST['submit'])) {
        $user = new User();
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        if ($user->login()) {
            $_SESSION['user_id'] = $user->getId();
            header('Location: ');
            exit();
        } else {
            echo "Invalid email or password";
            include 'views/users/login.php';
        }
    } else {
        include 'views/users/login.php';
    }
}
//PUT FOR INDEX ACTION


?>