
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/baner2.jpg" class="w-100" alt="...">

        </div>

        <div class="carousel-item">
            <img src="img/baner3.jpg" class="d-block w-100" alt="...">

        </div>

        <div class="carousel-item">
            <img src="img/baner1.jpg" class="d-block w-100" alt="...">
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--TELEFONOS-->
<div class="container-fluid mt-5">


    <div class="bg-primary text-light d-flex align-items-center position-relative       mx-auto"
        style="width:85%; margin-bottom:-3%; z-index-2">
        <h1 class="mx-auto ">TELEFONOS</h1>
    </div>
    <div class="container bg-light pb-3" style="">




        <div class="row row-cols-1 row-cols-xl-3 my-3 ">
            <?php      $produc = new Producto();
                                           $resultado = $produc->productosAleatoriosTelefonos();
                                           foreach($resultado as $p){
                                           ?>
            <div class="col  mb-3 p-5 ">
                <div class="card  mt-4  text-center h-100  shadow">
                    <img src="productoimages/<?php echo $p["img"]?>" class="w-75 m-auto pt-3" alt="">
                    <div class="card-body ">
                        <h5 class="card-title"><?php echo $p["nombrep"]?></h5>

                        <a href="index.php?modulo=detalleproducto&id=<?php echo $p["id"]?>" class="btn btn-outline-dark">Detalles</a>
                        <input type="hidden" class=" form-control w-100 border-dark cantidad" name="" 
                                    value="1" min="1">
                        <button type="button" data-id="<?php echo $p["id"]?>"
                                data-nombrep="<?php echo $p['nombrep']?>" 
                                data-img="<?php echo $p['img']?>"
                                data-precio="<?php echo $p['precio']?>" class="btn btn-outline-primary addcart "><svg width="2em"
                                    height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg></button>

                    </div>
                </div>

            </div>



            <?php } ?>
        </div>
        

        <a type="button" href="productos.php?modulo=telefonos" class="btn btn-outline-primary btn-lg btn-block font-weight-bold ">VER MAS</a>
    </div>
</div>
</div>



<!--ACCESORIOS-->
<div class="container-fluid">
    <div class="bg-primary text-light d-flex align-items-center position-relative    mt-5   mx-auto"
        style="width:85%; margin-bottom:-3%; z-index-2">
        <h1 class="mx-auto ">ACCESORIOS</h1>
    </div>
    <div class="container bg-light pb-3" style="">




        <div class="row row-cols-1 row-cols-xl-3 my-3 ">
            <?php      $produc = new Producto();
                                           $resultado = $produc->productosAleatoriosAccesorio();
                                           foreach($resultado as $p){
                                           ?>
            <div class="col  mb-3 p-5 ">
                <div class="card  mt-4  text-center h-100  shadow">
                    <img src="productoimages/<?php echo $p["img"]?>" class="w-100 m-auto pt-3" alt="">
                    <div class="card-body ">
                        <h5 class="card-title"><?php echo $p["nombrep"]?></h5>
                        <input type="hidden" class=" form-control w-100 border-dark cantidad" name="" 
                                    value="1" min="1">
                                    <a href="index.php?modulo=detalleproducto&id=<?php echo $p["id"]?>" class="btn btn-outline-dark">Detalles</a>
                        <input type="hidden" class=" form-control w-100 border-dark cantidad" name="" 
                                    value="1" min="1">
                        <button type="button" data-id="<?php echo $p["id"]?>"
                                data-nombrep="<?php echo $p['nombrep']?>" 
                                data-img="<?php echo $p['img']?>"
                                data-precio="<?php echo $p['precio']?>" class="btn btn-outline-primary addcart "><svg width="2em"
                                    height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg></button>
                    </div>
                </div>

            </div>



            <?php } ?>
        </div>

        <a type="button" href="accesorio.php" class="btn btn-outline-primary btn-lg btn-block font-weight-bold ">VER MAS</a>
    </div>
</div>




<div class="mt-5 ">
    <img src="img/Shop-Banner.jpg" class="img-fluid " alt="">
</div>


<div class=" container-fluid  mt-5 ">
 <div class="container">
    <h2 class="text-left font-weight-bolder u text-dark mb-5">NOTICIAS</h2>
    </div>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="img/twitter.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="img/instagram.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="img/ccs.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="img/ny.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
let animado = document.querySelectorAll(".animado");
function mostrarScroll(){
    let scrollTop = document.documentElement.scrollTop;
    for(var i=0; i<animado1.length; i++){
             let altura = animado[i].offsetTop;
             if(altura +  550 < scrollTop){
                 animado[i].style.opacity = 1;
                 animado[i].classList.add("arriba1");
             }
    }
    window.addEventListener('scroll',mostrarScroll);

</script>