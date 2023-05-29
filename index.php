<?php
require_once __DIR__ . '/app/controllers/BaseController.php';
require_once __DIR__ . '/app/controllers/familyController.php';
require_once __DIR__ . '/app/controllers/usercontroller.php';
//require_once __DIR__.'/config/database.php';
require_once __DIR__ . '/config/database.php';
use APP\controller\basecontroller;
use config\db\getconnection as db;
use App\database\Connection;
use App\controller\familuController;
use App\controller\UserController;

//require 'config/database.php';
define('BATH_BASE', '/Task/');
$action = $_SERVER['REQUEST_URI'];
$connectionss = new Connection();
$db = $connectionss->getconnection();

switch ($action) {

    case BATH_BASE:
        $Ccontroller = new FamillyController($db);
        $Ccontroller->index();
        break;
    case BATH_BASE . 'addfamily':
        $Ccontroller1 = new FamillyController($db);
        $Ccontroller1->addfamily();
        break;
    case (strpos($_SERVER['REQUEST_URI'], BATH_BASE . 'editfamily/') === 0):
        $id = substr($_SERVER['REQUEST_URI'], strlen(BATH_BASE . 'editfamily/'));
        $Ccontroller2 = new FamillyController($db);
        $Ccontroller2->editfamily($id);
        break;
    case (strpos($_SERVER['REQUEST_URI'], BATH_BASE . 'deletefamily/') === 0):
        $id = substr($_SERVER['REQUEST_URI'], strlen(BATH_BASE . 'deletefamily/'));
        $Ccontroller3 = new FamillyController($db);
        $Ccontroller3->DeleteFamily($id);
        break;
    case BATH_BASE . 'searchfamily';
        $Ccontroller5 = new FamillyController($db);
        $Ccontroller5->searchfamily();
        break;
    case BATH_BASE . 'signup';
        $contrller9 = new UserController($db);
        $contrller9->signup();
        break;
    case BATH_BASE . 'login';
        $contrller10 = new UserController($db);
        $contrller10->LoginController();
        break;
    //
    default:
        $Ccontroller7 = new FamillyController($db);
        $Ccontroller7->index();
        break;
}


?>