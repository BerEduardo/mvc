<?php
$usuario = new usuario();
$titulo="Bienvenido al Controller de usuarios";
$contenido="contenido de la variable";

$variables=array('titulo'=>$titulo,'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());

view('usercontroller',$variables);
?>