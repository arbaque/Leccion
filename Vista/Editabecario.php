<?php    
session_start();
echo 'Bienvenido a la página '.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/becarioColector.php';
require_once '../Colector/becario.php';


// Logica
$alm = new becario();
$model = new becarioColector();

if(isset($_POST['updatebecario'])){ 
$id = $_POST['id'];
 $nombre = $_POST['nombre'];
 $fkprograma = $_POST['fkprograma'];  

    $alm->setid($id);
    $alm->setnombre($nombre);
    $alm->setfkprograma($fkprograma);

    $model->updatebecario($alm);
    echo '<a href="Vistabecario.php">Regresar</a>';

}
  
?>

<?php
require_once '../ClassColector/becarioColector.php';
require_once '../Colector/becario.php';

// Logica
$alm = new becario();
$model = new becarioColector();
$alm  = $model->Listarbecarioespecifico($_GET['id']);
//var_dump( $alm );
$nombre =$alm[0]->getnombre();
$fkprograma =$alm[0]->getfkprograma();



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
  <input type="text" name="nombre" required placeholder="Enter your name" id="inputid" value=<?php echo $nombre;?> />
</p>

<p>
  <label for="name" id="preinput"> Programa : </label>
  <input type="text" name="fkprograma" required placeholder="Enter your programa" id="inputid" value=<?php echo $fkprograma;?> />
</p>

<p>
  <input type="submit" name="updatebecario" value="Actualizar" id="inputid"  />
</p>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

</form>
</div>

</body>
</html>
