<?php
class reporte {  
   private $idbecario;  
   private $nombrebecario;
   private $idprograma;
   private $nombreprograma;
   private $paisprograma;        
  
  
   function __construct() {  
    
   }
  
   public function idbecario() {  
     return $this->idbecario;  
   }  
   public function setidbecario($idbecario) {  
     $this->idbecario = $idbecario;  
   }  
   public function getnombrebecario() {  
     return $this->nombrebecario;  
   }  
   public function setnombrebecario($nombrebecario) {  
     $this->nombrebecario = $nombrebecario;  
   }  

   public function getidprograma() {  
     return $this->idprograma;  
   }  
   public function setidprograma($idprograma) {  
     $this->idprograma = $idprograma;  
   }  
 
   public function getnombreprograma() {  
     return $this->nombreprograma;  
   }  
   public function setnombreprograma($nombreprograma) {  
     $this->nombreprograma = $nombreprograma;  
   }  


   public function getpaisprograma() {  
     return $this->paisprograma;  
   }  
   public function setpaisprograma($paisprograma) {  
     $this->paisprograma = $paisprograma;  
   }  


 }
 ?>
