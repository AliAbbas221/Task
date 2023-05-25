<?php
declare (strict_types=1);
namespace App\Models;
use PDO;
//include ('database.php');
require 'C:\xampp\htdocs\Task\config\database.php';
use mysqli;
session_start();
abstract class Model{
    protected $id;
   public function getId(){
    return $this->id;
   }
   public function setid($d){
    $this->id=$d;
   }
  

}
class Family extends Model{

    protected $searchterm;

    protected $fname;
    protected $mname;
    protected $lname;
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

    public function  setsearchterm($chat){
        $this->searchterm=$chat;
    }
    public function  getsearchterm(){
        return $this->searchterm;
    }


    public function FamilySearch($searchterm){

        
        $sql = "SELECT * FROM family WHERE fname LIKE '%$searchterm%'";
        $a=$this->$db->prepare($sql);
        $a->execute();





    }
   

}
?>