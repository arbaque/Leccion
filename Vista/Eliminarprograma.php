<?php    
session_start();
echo 'Bienvenido a la página '.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/programaColector.php';
require_once '../Colector/programa.php';

// Logica
$alm = new programa();
$alm->setid($_GET['id']);
$model = new programaColector();
$model->deleteprograma($alm);
echo '<br /><a href="Vistaprograma.php">Volver</a>';
//header("Location:Vistademo.php");

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

<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

</form>
</div>

</body>
</html>
