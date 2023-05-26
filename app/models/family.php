<?php
declare (strict_types=1);
namespace App\Models;
use PDO;
//include ('database.php');
// require 'databsae.php';
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
    protected $lname ,$phone ,$location,$status,$familycount;
    public function  getfname(){
        return $this->fname;
    }
    public function getnumber(){
 return $this->familycount;
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
    public function setfname( $f){
        $this->fname=$f;
    }
//     public function setfamilycount($n){
//   $this->familycount=$n;
//     }
    public function setmname( String $m){
        $this->mname=$m;
    }

  
   
   

    public function setphone($x)
    {
        $this->phone=$x; 
    }
    public function getphone(){
        return $this->phone; 
    }
    public function setstatus( $x)
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
     public function setfamilycount( $x){
        $this->familycount=$x;
     }
     public function getfamilycount()
     {
        return $this->familycount; 
     }
     public static function getall($db)
    {
        $result="SELECT * FROM family";
        $s=$db->prepare($result);
        $s->execute();
    $families =array();
    while($results = $s->fetchAll(PDO::FETCH_ASSOC)){
      foreach ($results as $row) {
    $user4 = new Family();
    $user4->setId($row['id']);
    $user4->setfname($row['fname']);
    $user4->setmname($row['mname']);
    $user4->setlname($row['lname']);
    $user4->setphone($row['phone']); 
    $user4->setstatus($row['status']); 
    $user4->setfamilycount($row['familycount']);
    $user4->location=$row['location'];
    $families[]=$user4;
      }
    // set other properties of $user4 here
}
    
        return $families;
        ///sheeeet
} 


public  function DeleteFamily($db){
    $statement="DELETE FROM family WHERE id='$this->id'";
    $exec=$db->prepare($statement);
   if( $exec->execute()){
    return true;
   }
   else{
    return false;
   }


}

public function FamilySearch($db,$location){

        
    $sql = "SELECT * FROM family WHERE location='$location'";
    $a=$db->prepare($sql);
    $a->execute();
    $result=$a->fetch(PDO::FETCH_ASSOC);
    return $result;

}
public function SaveFamily($db)
{
    if($this->id){
        $q2="UPDATE family SET fname='$this->fname',mname='$this->mname',lname='$this->lname' , familycount='$this->familycount', phone='$this->phone' , status='$this->status', location='$this->location' WHERE id='$this->id'";
        $s=$db->prepare($q2);
        $s->execute();
    }
    else{
        $q22="INSERT INTO family (fname,mname,lname,familycount,phone,status,location) VALUES('$this->fname','$this->mname','$this->lname','$this->familycount','$this->phone','$this->status','$this->location')";
        $s=$db->prepare($q22);
        $s->execute();
        $this->id=$db->lastInsertId();
        
    }
   
}

public static function getfamilybyid($db,$id){
        $query="SELECT * FROM family WHERE id='$id'";
        $s=$db->prepare($query);
        $s->execute();
        $result=$s->fetch(PDO::FETCH_ASSOC);
        $Family1 =new Family();
        $Family1->fname=$result['fname'];
        $Family1->mname=$result['mname'];
        $Family1->lname=$result['lname'];
        $Family1->phone=$result['phone'];
        $Family1->status=$result['status'];
        $Family1->location=$result['location'];
        $Family1->familycount=$result['familycount'];
        return $Family1;
        

} 

//$searchterm;


}
?>