<?php

include_once("class.php");




if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
 //   print_r($_FILES);

 $check = @getimagesize($_FILES['img']['tmp_name']);
 if($check !== false){
     $carpeta_destino ='../productoimages/';
     $subir = $carpeta_destino.$_FILES['img']['name'];
     move_uploaded_file($_FILES['img']['tmp_name'],$subir);
     
    }


$id = $_POST['id'];
$nombrep = $_POST['nombrep'];
$marca = $_POST['marca'];
$descrip = $_POST['descrip'];
$precio = $_POST['precio'];


$img = $_FILES['img']['name'];
$tipo = $_POST['tipo'];

$producto = new Producto();


$producto->setId($id);
$producto->setNombrep($nombrep);
$producto->setMarca($marca);
$producto->setDescrip($descrip);
$producto->setPrecio($precio);
$producto->setImg($img);
$producto->setTipo($tipo);
$result = $producto->insertarProducto();

if($result){
    echo "los datos se registraron";
}else{
    echo "error, Arregla la mierda esa mmgvo";
}



}


?>

