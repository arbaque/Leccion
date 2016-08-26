<?php

require_once("../Colector/colector.php");
class reportecolector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listarreporte()
	{
		try
		{
		    $result= $this->modelo->ListarReporte("reporte", "");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

 
}
 ?>
