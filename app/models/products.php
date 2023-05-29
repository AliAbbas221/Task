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
class products  extends Model
{
    private $familyid , $quantity, $yearRevenue , $Farmtype; 
      public function  setfamilyid($familyid)
      { 
            $this->familyid=$familyid; 
      }
       public function getfamilyid()
       {
        return $this->familyid ;  
       }
       public function setquantity($quantity)
       {
            $this->quantity=$quantity; 
       }
       public function getquantity()
       {
        return $this->quantity;
       } 
       public function setyearRevenue($yearRevenue)
       {
        $this->yearRevenue= $yearRevenue; 
       }
       public function getyearRevenue()
       {
        return $this->yearRevenue; 
       }
       public function setFarmtype($Farmtype)
       {
        $this->Farmtype=$Farmtype; 
       } 
       public function getFarmtype()
       {
        return $this->Farmtype ;  
       }
        
        
}
?>