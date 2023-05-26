<?php
require_once 'BaceController.php';
require_once 'familyController.php';
use APP\controller\basecontroller;
require 'config/database.php';
use App\controller\familuController;
define('BATH_BASE','/darrebni6/');
$new=$_SERVER['REQUEST_URI'];
switch($new){

    case BATH_BASE:
        $Ccontroller=new FamillyController($db);
        $Ccontroller->index();
       
    case (strpos($_SERVER['REQUEST_URI'], BATH_BASE.'addfamily/') === 0):
        $id = substr($_SERVER['REQUEST_URI'], strlen(BATH_BASE . 'addfamily/'));
        $Ccontroller1=new FamillyController($db);
        $Ccontroller1->Savefamily($id);
    case (strpos($_SERVER['REQUEST_URI'], BATH_BASE.'editfamily/') === 0):
            $id = substr($_SERVER['REQUEST_URI'], strlen(BATH_BASE . 'editfamily/'));
            $Ccontroller2=new FamillyController($db);
            $Ccontroller2->Savefamily($id);
    case (strpos($_SERVER['REQUEST_URI'], BATH_BASE.'deletefamily/') === 0):
                $id = substr($_SERVER['REQUEST_URI'], strlen(BATH_BASE . 'deletefamily/'));
                $Ccontroller3=new FamillyController($db);
                $Ccontroller3->DeleteFamily($id);
}


?>