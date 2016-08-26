<?php

session_start();
echo 'Bienvenido a la página '.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/reportecolector.php';
require_once '../Colector/reporte.php';

// Logica
$alm = new reporte();
$model = new reportecolector();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejemplo grupo de la muerte</title>       
	</head>
    <body style="padding:15px;">
<form action="GuardarDemo.php" method="post" name="insertform">
        <div class="pure-g">

<p>
  <input type="submit" name="send" value="Nuevo" id="inputid"  />
</p>
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">Becario por Programa</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listarreporte() as $r): ?>
                        <tr>
                            <td><?php echo 'NOMBRE'. $r->getnombrebecario() .' Programa'.  $r->getnombreprograma() .'Pais'.  $r->getpaisprograma() ; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
      
        </div>

    </body>
</html>
