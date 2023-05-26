<?php
require_once 'BaseController.php';
use App\controller\basecontroller;
require_once __DIR__.'/../models/family.php';
use App\Models\Family;

class Familly extends basecontroller{

}
class FamillyController extends basecontroller{
    public function index()
    {
            
           $results=Family::getall($this->conn);
          // print_r($results);
           require 'views/users/index.php';
    }
    public function addfamily(){
        $f1=new Family();
        $f1->SaveFamily($this->conn);
        header('Location:'.BATH_BASE);
        

    }
    public function editfamily($id){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $f2=Family::getfamilybyid($this->conn,$id);
            
            $f2->setfname($_POST['fname']);
            $f2->setlname($_POST['lname']);
            $f2->setmname($_POST['mname']);
            $f2->setfamilycount($_POST['numberfamily']);
            $f2->setphone($_POST['phone']);
            $f2->settatus($_POST['status']);
            $f2->SaveFamily($this->conn);
            header('Location:'.BATH_BASE);
    
        }
       

        else{
            $re=Family::getfamilybyid($this->conn,$id);
            require __DIR__.'/../../view/users/editfamily.php';

        }
    }
    public function DeleteFamily($id){
    $rr=Family::getfamilybyid($this->conn,$id);
    $rr->DeleteFamily($this->conn);
    header('Location:'.BATH_BASE);

   }
   public function searchfamily(){
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $f5=new Family();
        $results=$f5->FamilySearch($this->conn,$_POST['choice']);
        require 'views/users/familufound.php';
   
     
   }
   else{
    require __DIR__.'/../../views/users/searchinplace.php';
   }
}}

?>
