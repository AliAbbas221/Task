<?php
namespace App\controller;

require_once __DIR__ . '/../models/users.php';
require_once 'BaseController.php';
use App\controller\basecontroller;

require_once __DIR__ . '/../models/family.php';
//require __DIR__ . "/../../config/database.php";
require_once 'BaseController.php';
use APP\controller;
;
use App\Models\User as UR;
use App\Models\Family as fm;

class UserController extends basecontroller
{
    public function index()
    {
        if (isset($_SESSION['email'])) {
        
            $famiy = fm::getall($this->conn);
            require 'views/families/indexr.php';
            //$this->render('users/index',compact('courses'));

        } else {
            header('Location:/Task/login');

        }

    }


    public function signup()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = new UR();
            if ($this->testName($_POST['name'])) {
                $this->test($_POST['name']);

                $user->setname($_POST['name']);

                $user->setEmail($_POST['email']);
                $user->setpassword($_POST['password']);
                $user->save($this->conn);
                header('Location:/Task/login');

                exit;
            } else {
                require __DIR__ . '/../../views/users/signup.php';
            }
        } else {
            require __DIR__ . '/../../views/users/signup.php';
            //$this->render('/users/Signup');
        }
    }




    public function LoginController()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new UR();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            if ($user->testuser($this->conn)) {
               $_SESSION['email']=$user->getEmail(); 
               header('Location:/Task/');
            } else {
                echo "Invalid email or password";
                include 'views/users/login.php';
            }
        } else {
            require __DIR__ . '/../../views/users/login.php';
        }
    }
}
//PUT FOR INDEX ACTION


?>