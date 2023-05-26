<?php
declare (strict_types=1);
namespace App\Models;
use PDO;
//include ('database.php');
require 'C:\xampp\htdocs\Task\config\database.php';
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
 
  

}
class Family extends Model{

    protected $searchterm;

    protected $fname;
    protected $mname;
    protected $lname ,$phone , $status,$location , $familycount;
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
     public function setfamilycount( string $x){
        $this->familycount=$x;
     }
     public function getfamilycount()
     {
        return $this->familycount; 
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


public function DeleteFamily($db){
    $statement="DELETE FROM family WHERE id='$this->id'";
    $exec=$db->prepare($statement);
    $exec->execute();


}

public function FamilySearch($searchterm){

        
    $sql = "SELECT * FROM family WHERE fname LIKE '%$searchterm%'";
    $a=$this->db->prepare($sql);
    $a->execute();

}
public function SaveFamily($db)
{
    if($this->id){
        $q2="UPDATE family SET fname='$this->fname',mname='$this->mname',lname='$this->lname' , familycount='$this->familycount', phone='$this->phone' , status='$this->status', location='$this->location' WHERE id='$this->id'";
        $s=$db->prepare($q2);
        $s->execute();
    }
    else{
        $q22="INSERT INTO family (fname,mname,lname,familycount,phone,status,location) VALUES('$this->fname','$this->mname','$this->lname','$this->familycount','$this->phone',,'$this->status','$this->location')";
        $s=$db->prepare($q22);
        $s->execute();
        $this->id=$db->lastInsertId();
        
    }
}

     


}
?>