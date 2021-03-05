<?php

include_once("class.php");

$new = new Producto();
$data= 'i';
foreach($new->busquedaProducto($data) as $consulta){
 print_r($consulta);
}

?>