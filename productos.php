<?php
include_once("class/class.php");
include "template/cabezera.php";

?>

<?php

$modulo=$_REQUEST['modulo']??'';

if($modulo=="accesorios"){
include_once "accesorio.php";
}else if($modulo=="telefonos"){
    include_once "telefono.php";
}
?>

<?php

include "template/pie.php";

?>