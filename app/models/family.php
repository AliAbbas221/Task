<?php
declare (strict_types=1);
namespace App\Models;
use PDO;
//include ('database.php');
require 'config/database.php';
use mysqli;
session_start();
abstract class Model{
    public $db;
    protected $id;
   public function getId(){
    return $this->id;
   }
   public function setid($d){
    $this->id=$d;
   }
 
  
//    abstract static function getuserbyid($con,$id);
//    abstract function save($con);
}
class Family extends Model{

    protected $fname;
    protected $mname;
    protected $lname ,$phone , $status,$location;
    public function  getfname(){
        return $this->fname;
    }
    public function getmname(){
        return $this->mname;
    }
    public function  setlname($l){
        $this->lname=$l;
    }
    public function getlname(){
        return $this->lname;
    }
    public function setfname(String $f){
        $this->fname=$f;
    }
    public function setmname( String $m){
$this->mname=$m;
    }
    public function setphone( string $x)
    {
        $this->phone=$x; 
    }
    public function getphone(){
        return $this->phone; 
    }
    public function setstatus(  string $x)
    {
        $this->status=$x; 
    }
    public function getstatus(){

        return $this->status;
    }
    public function setlocation( string $x)
    {
        $this->location=$x; 
    }
    public function getlocation(){
        return $this->location; 
     }
     public function getall($db)
    {
        $result="SELECT * FROM family ";
        $s=$this->db->prepare($result);
         $res= $s->execute();
         $result=$s->fetchAll(PDO::FETCH_ASSOC);
        $user =new Family();
        $user->id=$result['id'];
        $user->fname=$result['fname'];
        $user->mname=$result['mname'];
        $user->lname=$result['lname'];
        $user-> phone=$result['phone']; 
        $user->status=$result['status']; 
        $user->location=$result['location'];
        return $user;
        ///sheeeet
} 
     

}
?>