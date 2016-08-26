<?php    
session_start();
echo 'Bienvenido a la página usuario'.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/programaColector.php';
require_once '../Colector/programa.php';
error_reporting( ~E_NOTICE ); // avoid notice

// Logica
$alm = new programa();
$model = new programaColector();

if(isset($_POST['sendprograma'])){ 
    $nombre = $_POST['nombre']; 
    $fkprograma = $_POST['pais']; 
    $alm->setnombre($nombre);    
    $alm->setpais($pais);

    $model->Insertprograma($alm);
    echo '<a href="Vistaprograma.php">Regresar</a>';
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
  <label for="name" id="preinput"> pais : </label>
  <input type="text" name="pais" required placeholder="Enter your pais" id="inputid"/>
</p>

<input type="submit" name="sendprograma" value="Guardar" id="inputid"  />
</p>
</form>
</div>

</body>
</html>
