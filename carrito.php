<?php 



include_once("class/class.php");
?>
<div class="container  table-responsive-sm my-5 ">
<table class="table table-bordered   "  >
    <thead class=" bg-primary">
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="tablaCarrito" >
    </tbody>
</table>
<a class="btn btn-danger" href="productos.php" role="button">Ir a Productos</a>
 <a class="btn btn-primary float-right" href="index.php?modulo=pedido" role="button">Realizar Pedido</a>
</div>
 