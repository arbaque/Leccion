<?php
class becario {  
   private $id;  
   private $nombre;  
   private $fkprograma; 
  
   function __construct() {  
    

   }  
 
   public function getid() {  
     return $this->id;  
   }  
   public function setid($id) {  
     $this->id = $id;  
   }  
   public function getnombre() {  
     return $this->nombre;  
   }  
   public function setnombre($nombre) {  
     $this->nombre = $nombre;  
   }  
   
      public function getfkprograma() {  
     return $this->fkprograma;  
   }  
   public function setfkprograma($fkprograma) {  
     $this->fkprograma = $fkprograma;  
   } 

 }
 ?>
