<?php
require_once 'BaseController.php';
use App\controller\basecontroller;
require_once __DIR__.'/../models/family.php';
use App\Models\Family;
class FamillyController extends basecontroller{

 public function index()
 {
        $index= new  Family ; 
        $index->getall($this->conn); 
 }
}
?>
