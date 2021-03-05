<?php
include_once("class/class.php");
include "template/cabezera.php";
$new = new Conexion();
$con = $new->conect();

$art_x_pag= 6;
?>
<div class="container mt-4">

<?php

if(!$_GET){
    echo '<meta http-equiv="refresh" content="0; url=accesorio.php?pagina=1" />';
}
$ini = ($_GET['pagina']-1)*$art_x_pag;


$sql_art =  "SELECT * FROM productos  WHERE tipo= 'accesorio' LIMIT :ini ,:nart ";
$sentencia_art = $con->prepare($sql_art);
$sentencia_art->bindParam(':ini',$ini,PDO::PARAM_INT);
$sentencia_art->bindParam(':nart',$art_x_pag,PDO::PARAM_INT);
$sentencia_art->execute();
$result_art = $sentencia_art->fetchAll();

?>

    <div class="row row-cols-1 row-cols-md-3  ">
        <?php      
                                        
                                           foreach($result_art as $p){
                                               ?>
        <div class="col  mb-4 ">
            <div class="card   h-100  shadow">
                <img src="productoimages/<?php echo $p["img"]?>" class="w-50 m-auto pt-3" alt="">
                <div class="card-body ">
                    <h5 class="card-title"><?php echo $p["nombrep"]?></h5>
                    <div class="d-flex justify-content-between ">
                        <h3>Precio $<?php echo $p['precio']?></h3>
                        <input type="hidden" class=" form-control w-100 border-dark cantidad" name="" value="1" min="1">
                        <a href="index.php?modulo=detalleproducto&id=<?php echo $p["id"]?>"
                            class="btn btn-outline-dark">Detalles</a>
                        <input type="hidden" class=" form-control w-100 border-dark cantidad" name="" value="1" min="1">
                        <button type="button" data-id="<?php echo $p["id"]?>" data-nombrep="<?php echo $p['nombrep']?>"
                            data-img="<?php echo $p['img']?>" data-precio="<?php echo $p['precio']?>"
                            class="btn btn-outline-primary addcart "><svg width="2em" height="1.5em" viewBox="0 0 16 16"
                                class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg></button>
                    </div>
                </div>
            </div>

        </div>



        <?php } 
 

 $query= $con->prepare("SELECT * FROM productos WHERE tipo = 'accesorio'");
 $query->execute();
 $cant_art = $query->fetchAll(PDO::FETCH_ASSOC);
 $art_pag = 3;  
 $cant_art = $query->rowCount();

   $paginas = $cant_art/6;
   $paginas = ceil($paginas);

        ?>


    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item   <?php echo $_GET['pagina']<=1? 'disabled': ''?>">
                
                <a class="page-link" 
                href="accesorio.php?pagina=<?php echo $_GET['pagina']-1 ?>"  >Previous</a>
            </li>
         
         <?php for($i=0;$i<$paginas;$i++){           
?>
            <li class="page-item 
            <?php echo $_GET['pagina']==$i+1 ? 'active' : ''   ?>"><a class="page-link" href="accesorio.php?pagina=<?php echo $i+1 ?>">
                <?php echo $i+1 ?></a></li>
         <?php } ?>
            <li class="page-item
            
            <?php echo $_GET['pagina']>=$paginas? 'disabled': ''?>
            ">
                <a class="page-link" href=" href="accesorio.php?pagina=<?php echo $_GET['pagina']+1 ?>"">Next</a>
            </li>
        </ul>
    </nav>
</div>

<?php

include "template/pie.php";

?>