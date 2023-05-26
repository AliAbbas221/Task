<?php
require_once 'BaseController.php';
use App\controller\basecontroller;
require_once __DIR__.'/../models/family.php';
use App\Models\Family;
class FamillyController extends basecontroller{
    public function index()
    {
            
           $results=Family::getall($this->conn);
           extract(['results' => $results]);
           require 'views/users/indexr.php';
    }
    public function addfamily(){
        if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['fname'])){
        $f1=new Family();
        $f1->setfname($_POST['fname']);
        $f1->setmname($_POST['mname']);
        $f1->setlname($_POST['lname']);
        $f1->setstatus($_POST['status']);
        $f1->setfamilycount($_POST['phone']);
        $f1->setphone($_POST['number']);
        $f1->setlocation($_POST['location']);
        $f1->SaveFamily($this->conn);
        
        header('Location:'.BATH_BASE);
        }
        else{
            require 'views/users/addfa.php';
        }

    }
    public function editfamily($id){
        if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_POST['fname'])){
            $f2=Family::getfamilybyid($this->conn,$id);
            $f2->setid($id);
            $f2->setfname($_POST['fname']);
            $f2->setlname($_POST['lname']);
            $f2->setmname($_POST['mname']);
            $f2->setfamilycount($_POST['numberfamily']);
            $f2->setphone($_POST['phone']);
            $f2->setstatus($_POST['status']);
            $f2->setlocation($_POST['location']);
            $f2->SaveFamily($this->conn);
            header('Location:'.BATH_BASE);
    
        }
       

        else{
            $re=Family::getfamilybyid($this->conn,$id);
            require __DIR__.'/../../views/users/editfamily.php';

        }
    }
    public function DeleteFamily($id){
       // echo $id;
   // $rr=Family::getfamilybyid($this->conn,$id);
   $r1=new Family();
   $r1->setid($id);
    $rt=$r1->DeleteFamily($this->conn);
 if($rt)
    {
    header('Location:'.BATH_BASE);
    }else{
        echo 'erro';
    }
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
