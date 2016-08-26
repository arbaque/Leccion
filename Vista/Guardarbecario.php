<?php    
session_start();
echo 'Bienvenido a la página usuario'.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/becarioColector.php';
require_once '../Colector/becario.php';
error_reporting( ~E_NOTICE ); // avoid notice

// Logica
$alm = new becario();
$model = new becarioColector();

if(isset($_POST['sendbecario'])){ 
    $nombre = $_POST['nombre']; 
    $fkprograma = $_POST['fkprograma']; 
    $alm->setnombre($nombre);    
    $alm->setfkprograma($fkprograma);

    $model->Insertbecario($alm);
    echo '<a href="Vistabecario.php">Regresar</a>';
}
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GuardarPersona</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<div class="display">
<form action="" method="post" name="insertform" enctype="multipart/form-data">
<p>
  <label for="name" id="preinput"> Nombres : </label>
  <input type="text" name="nombre" required placeholder="Enter your name" id="inputid"/>
</p>

<p>
  <label for="name" id="preinput"> Programa : </label>
  <input type="text" name="fkprograma" required placeholder="Enter your programa" id="inputid"/>
</p>

<input type="submit" name="sendbecario" value="Guardar" id="inputid"  />
</p>
</form>
</div>

</body>
</html>
