<?php
require_once __DIR__.'/app/controllers/BaseController.php';
require_once __DIR__.'/app/controllers/familyController.php';
use APP\controller\basecontroller;
use App\controller\familuController;
require 'config/database.php';
define('BATH_BASE','/darrebni6/');
$action=$_SERVER['REQUEST_URI'];
switch($action){

    case BATH_BASE:
        $Ccontroller=new FamillyController($db);
        $Ccontroller->index();
       break;
    case BATH_BASE.'addfamily':
        $Ccontroller1=new FamillyController($db);
        $Ccontroller1->addfamily();
        break;
    case (strpos($_SERVER['REQUEST_URI'], BATH_BASE.'editfamily/') === 0):
            $id = substr($_SERVER['REQUEST_URI'], strlen(BATH_BASE . 'editfamily/'));
            $Ccontroller2=new FamillyController($db);
            $Ccontroller2->editfamily($id);
            break;
    case (strpos($_SERVER['REQUEST_URI'], BATH_BASE.'deletefamily/') === 0):
                $id = substr($_SERVER['REQUEST_URI'], strlen(BATH_BASE . 'deletefamily/'));
                $Ccontroller3=new FamillyController($db);
                $Ccontroller3->DeleteFamily($id);
                break;
    case BATH_BASE.'searchfamily';
        $Ccontroller5=new FamillyController($db);
        $Ccontroller5->searchfamily();     
        break;
    default:
    $Ccontroller7=new FamillyController($db);
    $Ccontroller7->index();
   break;
}


?>