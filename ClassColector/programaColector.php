<?php

require_once("../Colector/colector.php");
class programaColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listarprograma()
	{
		try
		{
		    $result= $this->modelo->Listar("programa", "");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
public function Listarprogramaespecifico ($codigo)
{
	try
		{
		     $result= $this->modelo->Listar("programa", " where id =".$codigo);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
}
 
 public function Insertprograma($Obdemo)
 {
 try
		{
		     $result= $this->modelo->operacion("INSERT INTO programa (nombre, pais) values (:nombre, :pais)",array(":nombre"=>$Obdemo-> getnombre(),":pais" => $Obdemo-> getpais()));                     
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function updateprograma($Obdemo)
 {
 try
{

$result= $this->modelo->operacion("update programa set nombre =:nombre , pais =:pais where id = :id",array(":nombre"=>$Obdemo-> getnombre(),":pais" => $Obdemo-> getpais()
,":id" => $Obdemo-> getid()));
		 
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function deleteprograma($Obdemo)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from programa where id =:id",array(":id" => $Obdemo-> getid()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
