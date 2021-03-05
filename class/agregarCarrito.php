<?php

$productos= unserialize( $_COOKIE['productos']??'');

if(is_array($productos)== false)$productos=array();

$productovalid=false;
foreach($productos as $key => $value){

    if($value['id']==$_REQUEST['id']){
        $productos[$key]['cantidad']=$productos[$key]['cantidad']+$_REQUEST['cantidad'];
        $productovalid=true;
    } 

}
if($productovalid==false){
    $nuevo=array(
        "id"=>$_REQUEST['id'],
        "nombrep"=>$_POST['nombrep'],
        "img"=>$_POST['img'],
        "cantidad"=>$_POST['cantidad'],
        "precio"=>$_POST['precio']
    );
    array_push($productos,$nuevo);
}
setcookie("productos",serialize($productos));
echo json_encode($productos);


?>
