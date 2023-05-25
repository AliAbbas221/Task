<?php
declare (strict_types=1);
namespace APP\controller;
class basecontroller{
    protected $conn;
    public function __construct($conn){
        $this->conn=$conn;
    }
   
   public function testName($name){
    if(empty($_POST['name'])){
      
         
      
       }
       else{
          $N=$_POST['name'];
          // $N=dai($N);
      if(!preg_match('#[a-zA-Z]+#',$N)){
         echo 'Name should be onle character';
         return 0;
      }
      else{return true;}
   }}

}
?>