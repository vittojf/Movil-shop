<?php
if(isset($_REQUEST['guardar'])){
include_once("class/class.php");
$idClient = $_REQUEST['idClient'];
  $nombre = $_REQUEST['nombre']??'';
  $email = $_REQUEST['correo']??'';
  $telefono = $_REQUEST['telefono']??'';
  $direccion = $_REQUEST['direccion']??'';

$new = new Producto();
$new->setId($idClient);
$new->setNombre($nombre);
$new->setEmail($email);
$new->setTelefono($telefono);
$new->setDireccion($direccion);
$result = $new->datosCliente();




if($result){
   echo '<meta http-equiv="refresh" content="0; url=index.php?modulo=pasarela" />';
}else{

?>

<div class="alert alert-danger" role="alert">
    Error
</div>
<?php
}

}
?>

<div class="container">
    <div class="container rounded bg-primary text-light px-5 pb-5 pt-4 mt-5">
        <div class="text-center">
            <h2>Ingresa tus Datos</h2>
        </div>
        <form method="post">
        <input type="hidden" name="idClient" value="">

            <div class="form-group">
                <label for="formGroupExampleInput">Nombre y Apellido</label>
                <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" name="correo" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" reqiore>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" require>
            </div>
            <div class="form-group">
                <label for="validationCustom03">Dirección</label>
                <textarea class="form-control" name="direccion" id="exampleFormControlTextarea1" rows="3"
                    require></textarea>

            </div>

            <button type="submit" class="btn mt-4 btn-danger w-100" name="guardar" value="guardar">Generar
                Pedido</button>
        </form>
    </div>
</div>