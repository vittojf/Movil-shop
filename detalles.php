<?php

include_once("class/class.php");

$id= $_REQUEST["id"];
$class = new Producto();

$class->setId($id);
$method = $class->detalleProducto();





?>

<div class="container mt-5 " style="">
    <div class="card  ">
        <div class="card-body">
            <div class="row row-cols-sm-2">



                <div class="col-sm my-auto ">
                    <div class="container  m-auto ">
                        <img src="productoimages/<?php echo $method['img']?>" class="w-100 p-5" alt="">
                    </div>
                </div>

                <div class="col-mb my-auto  ">

                    <div class="container  mt-4 text-justify">
                        <h2><?php echo $method['nombrep']?></h2>
                        <h4 class="mt-4">descripción:</h4>
                        <p style=" font-size: 15pt;"><?php echo $method['descrip']?></p>
                        <div class="border border-dark p-1 rounded  my-5">
                            <h4>Precio: $<?php echo $method['precio']?></h4>
                        </div>
                        <div class="w-100 d-flex">
                            <div class="font-weight-bold mr-2">
                                Cantidad:
                                <input type="number" class=" form-control w-100 border-dark" name="" id="cantidad"
                                    value="1" min="1">
                            </div>

                            <button type="button" data-id="<?php echo $_REQUEST["id"]?>"
                                data-nombrep="<?php echo $method['nombrep']?>" 
                                data-img="<?php echo $method['img']?>"
                                data-precio="<?php echo $method['precio']?>" id="addcart" class="btn btn-outline-primary w-50 h-50 mt-4"><svg width="2em"
                                    height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>Add To Cart</button>



                        </div>



                    </div>



                </div>


            </div>
        </div>
    </div>

</div>



</div>



