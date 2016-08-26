<?php

require_once("../Colector/colector.php");
class becarioColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listarbecario()
	{
		try
		{
		    $result= $this->modelo->Listar("becario", "");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
public function Listarbecarioespecifico ($codigo)
{
	try
		{
		     $result= $this->modelo->Listar("becario", " where id =".$codigo);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
}
 
 public function Insertbecario($Obbecario)
 {
 try
		{
		     $result= $this->modelo->operacion("INSERT INTO becario (nombre, fkprograma) values (:nombre, :fkprograma)",array(":nombre"=>$Obbecario-> getnombre(),":fkprograma" => $Obbecario-> getfkprograma()));                     
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function updatebecario($Obdemo)
 {
 try
{

$result= $this->modelo->operacion("update becario set nombre =:nombre , fkprograma =:fkprograma where id = :id ",array(":nombre"=>$Obdemo-> getnombre(),":fkprograma" => $Obdemo-> getfkprograma()
,":id" => $Obdemo-> getid()));
		 
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function deletebecario($Obdemo)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from becario where id =:id",array(":id" => $Obdemo-> getid()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
