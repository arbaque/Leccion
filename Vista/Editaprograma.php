<?php    
session_start();
echo 'Bienvenido a la página '.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/programaColector.php';
require_once '../Colector/programa.php';


// Logica
$alm = new programa();
$model = new programaColector();

if(isset($_POST['updateprograma'])){ 
$id = $_POST['id'];
 $nombre = $_POST['nombre'];
 $pais = $_POST['pais'];  

    $alm->setid($id);
    $alm->setnombre($nombre);
    $alm->setpais($pais);

    $model->updateprograma($alm);
    echo '<a href="Vistaprograma.php">Regresar</a>';

}
  
?>

<?php
require_once '../ClassColector/programaColector.php';
require_once '../Colector/programa.php';

// Logica
$alm = new programa();
$model = new programaColector();
$alm  = $model->Listarprogramaespecifico($_GET['id']);
//var_dump( $alm );
$nombre =$alm[0]->getnombre();
$pais =$alm[0]->getpais();



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
  <label for="name" id="preinput"> Pais : </label>
  <input type="text" name="pais" required placeholder="Enter your pais" id="inputid" value=<?php echo $pais;?> />
</p>

<p>
  <input type="submit" name="updateprograma" value="Actualizar" id="inputid"  />
</p>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

</form>
</div>

</body>
</html>
