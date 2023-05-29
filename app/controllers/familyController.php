<?php
require_once 'BaseController.php';
use App\controller\basecontroller;
require_once __DIR__.'/../models/family.php';
//require_once "database.php";
use App\Models\Family;
class FamillyController extends basecontroller{
    
    public function index()
    {
        if (isset($_SESSION['email'])) {
           $results=Family::getall($this->conn);
           extract(['results' => $results]);
           require 'views/families/indexr.php';
        }
        else {
            header('Location:/Task/login');

        }
    }
    public function addfamily(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
        $family=new Family();
        $family->setfname($_POST['fname']);
            $family->setmname($_POST['mname']);
            $family->setlname($_POST['lname']);
            $family->setfamilycount($_POST['familycount']);
            $family->setphone($_POST['phone']);
            $family->setstatus($_POST['status']);
            $family->setlocation($_POST['location']);
        $family->SaveFamily($this->conn);
        header('Location:'.BATH_BASE);
        }
        else{
            echo "rong"; 
            require 'views/families/addfa.php';
        }

    }
    public function editfamily($id){
        if($_SERVER['REQUEST_METHOD']==='POST'&&isset($_POST['fname'])){
            $family=Family::getfamilybyid($this->conn,$id);
            $family->setid($id);
            $family->setfname($_POST['fname']);
            $family->setmname($_POST['mname']);
            $family->setlname($_POST['lname']);
            $family->setfamilycount($_POST['familycount']);
            $family->setphone($_POST['phone']);
            $family->setstatus($_POST['status']);
            $family->setlocation($_POST['location']);
            $family->SaveFamily($this->conn);
            header('Location:'.BATH_BASE);
    
        }
       

        else{
            $re=Family::getfamilybyid($this->conn,$id);
            require __DIR__.'/../../views/families/editfamily.php';

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
        $results=$f5->FamilySearch($this->conn,$_POST['location']);
        extract(['results' => $results]);
        require 'views/families/familyfound.php';
   }
   else{
    require 'views/families/searchinplace.php';
   }
}}

?>
