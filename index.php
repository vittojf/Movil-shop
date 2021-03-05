<?php

include "template/cabezera.php";
include_once( "class/class.php");
?>


<!--Carrusel-->
<?php



$modulo=$_REQUEST['modulo']??'';
	
if($modulo=="detalleproducto"){
include_once "detalles.php";
}else if($modulo=="carrito"){
    include_once "carrito.php";
}else if($modulo=="pedido"){
    include_once "pedido.php";
}else if($modulo=="pasarela"){
    include_once "pasarela.php";
}else if($modulo=="factura"){
include_once "factura.php";

}else if($modulo=="nosotros"){

    include_once "sobre_nosotros.php";

}else{
    include_once "inicio.php";
}







?>


<?php

include "template/pie.php";

?>