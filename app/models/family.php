<?php
declare (strict_types=1);
namespace App\Models;
use PDO;
//include ('database.php');
require 'config/database.php';
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
   
    // }
}
?>