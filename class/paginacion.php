<?php
include_once "class/class";
$cant_art= "";
$new = new Conexion();
$con = $new->conect();
$query= $con->prepare("SELECT * FROM productos WHERE tipo = 'accesorio'");
$sentencia = $query->execute();
  $cant_art = count($sentencia);
  $paginas = $cant_art/3;
  $paginas = ceil($paginas);

?>