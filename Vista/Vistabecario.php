<?php

session_start();
echo 'Bienvenido a la página '.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/becarioColector.php';
require_once '../Colector/becario.php';

// Logica
$alm = new becario();
$model = new becarioColector();

echo '<br /><a href="Admin.php">Menu Principal</a>';

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Becario</title>       
	</head>
    <body style="padding:15px;">
<form action="Guardarbecario.php" method="post" name="insertform">
        <div class="pure-g">

<p>
  <input type="submit" name="send" value="Nuevo" id="inputid"  />
</p>
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">id</th>
                            <th style="text-align:left;">Nombre</th>
                           <th style="text-align:left;">Programa</th>
                           <th style="text-align:left;">Opciones</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listarbecario() as $r): ?>
                        <tr>
                            <td><?php echo $r->getid(); ?></td>
                            <td><?php echo $r->getnombre(); ?></td>
                            <td><?php echo $r->getfkprograma(); ?></td>          
                            <td><a href="Editabecario.php?id=<?php echo $r->getid();?>">Edit</a> | <a href="Eliminarbecario.php?id=<?php echo $r->getid();?>" onClick="return confirm('Esta seguro de eliminar?'">Delete</a></td>
                       
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
      
        </div>

    </body>
</html>
