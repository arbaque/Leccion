
<?php
// crear las cookies
session_start();
if (isset($_SESSION['usuario'])){
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
}
else{



}

$nombre = $_SESSION['usuario'];
$clave = "";
//echo 'Bienvenido a la página '.$nombre;
 echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

//$_SESSION['usuario']  = $nombre;

echo 'Bienvenido a la página '.$_SESSION['usuario'];
 echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

// Funciona si la cookie de sesión fue aceptada
echo '<br /><a href="login.php">Volver</a>';


?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Administracion</title>       
	</head>
    <body style="padding:15px;">
<form action="" method="post" name="insertform">
        <div class="pure-g">
<p>
  <input type="submit" name="send" value="Nuevo" id="inputid"  />
</p>
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;"> </th>
                            <th style="text-align:left;"> </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                        <tr>
                            <td> <a href="Vistabecario.php">Becario</a></td>
                            <td> <a href="Vistaprograma.php">Programa</a></td>
                        </tr>
                                                <tr>
                            <td> <a href="Vistareporte.php">Reporte</a></td>
                        </tr>


                </table>     
         <input type="hidden" name="loginusuario" value=<?php echo $nombre; ?>>
		<input type="hidden" name="loginpassword" value=<?php echo $clave; ?>>
            </div>
        </div>

    </body>
</html>


