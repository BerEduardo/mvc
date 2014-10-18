<?php
$usuario2= new Usuario();
?>
<html>
	<head></head>
	<body>
		<h1><?php echo $titulo ?></h1>
		<p><?php echo $contenido ?></p>
		<p><?php echo $nombre ?></p>
		<p><?php
				$usuario2->setUsuario();
				$usuario2->getUsuario();
				$usuario2->reporteUsuario();
		 	?></p>
	</body>
</html>