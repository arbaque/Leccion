<?php
class programa {  
   private $id;  
   private $nombre;
   private $pais;  
  
  
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

   public function getpais() {  
     return $this->pais;  
   }  
   public function setpais($pais) {  
     $this->pais = $pais;  
   }  
 

 }
 ?>
