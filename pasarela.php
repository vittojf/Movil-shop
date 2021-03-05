<?php

?>

<div class="container  table-responsive-sm my-5 ">
<div class="row">
<div class="col-sm-8">
<form action="index.php?modulo=factura" method="post">

<table class="table table-bordered"  >
    <thead class=" bg-primary">
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
      
        </tr>
    </thead>
    <tbody id="tablaPasarela" >
    </tbody>
    
</table>
</div>

<div class="col-sm-4">
    <div class="bg-light rounded w-100 container p-4" style="">
     <h4 >Terminos y Condiciones</h4    >
      <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum porro temporibus 
      suscipit impedit et sapiente quis, ex consequuntur ad obcaecati modi omnis. Aperiam 
      corrupti consectetur tempora sunt quod repudiandae illum!  Rerum, nulla veniam sapiente
       tempora exercitationem commodi quos consectetur aspernatur excepturi perspiciatis ad ipsa 
       ex quibusdam laborum. Error maiores necessitatibus labore provident vitae, quod rerum at, cumque 
       perferendis perspiciatis iusto!  Nam tempore labore nulla voluptatem non, officia recusandae delectus 
       eos fuga, autem, nemo pariatur saepe aut temporibus? Et, magni fugit explicabo tenetur saepe labore 
       </p>
    </div>
</div>
    
</div>


<div class="mt-5">
<a class="btn btn-danger" href="index.php?modulo=carrito" role="button">Regresar a Carrito</a>
 <button class="btn btn-primary float-right" type="submit" >Finalizar Pedido</button>
</div>
</form>    

</div>
 