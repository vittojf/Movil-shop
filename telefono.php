

<div class="carru bg-primary " id="carrusel">
    <h1 class="text-center pt-4 text-light">SELECCIONA UNA MARCA</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner pt-5 pb-3">

            <div class="carousel-item active ">

                <div class="img telefono   d-flex justify-content-center">
             
                        <img src="img/apple.png" class="marca 5" alt="apple">
  
                        <img src="img/samsung.png" class="marca " alt="samsung">  
               
                        <img src="img/xiaomi.png" class="marca " alt="xiaomi">           
          
                    <img src="img/google.png" class="marca " alt="google">
             
                

            </div>


        </div>
    </div>
</div>
</div>







<!--PRODUCTOS-->
<section class="container mt-5">
    <div class="container  d-flex m-auto" style="margin-bottom:100px;">
        <input id="valuephone" type="search" class="form-control vw-100 mr-3 " placeholder="Buscar">
        <input id="searchPhone" type="button" class="btn btn-primary" value="BUSCAR">

    </div>

    <div class="mt-5 p-3 ">
        <div class="row row-cols-1 row-cols-md-3" id="jsonconsulta">

            <?php 
              $produc = new Producto;
             $consulta = $produc->productoTelefonos();
              foreach($consulta as $registro){
              ?>

            <div class="col mb-4">

                <div class="card h-100">

                    <img src="productoimages/<?php echo $registro['img']?>" class="card-img-top  m-auto "
                        style="width:150px; " alt="<?php echo $registro['marca']?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $registro['nombrep']?></h5>

                        <div class="d-flex justify-content-between ">
                            <h3>Precio $<?php echo $registro['precio']?></h3>

                            <a href="index.php?modulo=detalleproducto&id=<?php echo $registro["id"]?>"
                                class="btn btn-outline-dark">Detalles</a>
                            <input type="hidden" class=" form-control w-100 border-dark cantidad" name="" value="1"
                                min="1">
                            <button type="button" data-id="<?php echo $registro["id"]?>"
                                data-nombrep="<?php echo $registro['nombrep']?>"
                                data-img="<?php echo $registro['img']?>" data-precio="<?php echo $registro['precio']?>"
                                class="btn btn-outline-primary addcart "><svg width="2em" height="1.5em"
                                    viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg></button>
                        </div>
                    </div>


                </div>
            </div>

            <?php } ?>
            
        </div>

    </div>
    </div>
    <script src="js/telefono.js">

</script>

</section>