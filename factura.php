<?php 
        include_once("class/class.php");
        $new = new Conexion();
        $conex = new Producto();
        $pre  = $conex->mostraridventa();
        $idVenta = $pre['idVenta'];
$id="";
$insertaDetalle="";
$cant = count($_REQUEST['id']);
 for($i=0;$i<$cant;$i++){
            $subTotal= $_REQUEST['precio'][$i] * $_REQUEST['cantidad'][$i];
            $insertaDetalle=$insertaDetalle."('".$_REQUEST['id'][$i]."','$id','".$_REQUEST['cantidad'][$i]."','".$_REQUEST['precio'][$i]."','$subTotal'),";
        }
        $insertaDetalle=rtrim($insertaDetalle,",");
        $queryDetalle="INSERT INTO detalleventa
        (idProd, idVenta, cantidad, precio, subTotal) values 
        $insertaDetalle;";

        $con = $new->conect();
        $query= $con->prepare($queryDetalle);
        $resultadoDetalle = $query->execute();
   
        
        if($resultadoDetalle){

?>
<div class="container row bg-light mt-5 mx-auto" >

    <div class="col-12">
        <?php muestraDetalle($idVenta); 
         borrarCarrito();
        ?>
    </div>
</div>
<?php
       
        }
        function borrarCarrito(){
            ?>
<script>
$.ajax({
    type: "post",
    url: "class/borrarCarrito.php",
    dataType: "json",
    success: function(response) {
        $("#badgeProducto").text("");
        $("#listaCarrito").text("");
    }
});
</script>
<?php
        }


function muestraDetalle($idVenta){

    ?>
<table class="table">
    <thead>
        <tr>
            <th colspan="3" class="text-center">Detalle de venta</th>
        </tr>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>SubTotal</th>
        </tr>
    </thead>
    <tbody>
        <?php

 $new = new Conexion();
 $conex = new Producto();
 

 $con = $new->conect();
                    $queryDetalle="SELECT p.nombrep,
                    dv.cantidad,
                    dv.precio,
                    dv.subTotal
                    FROM
                    detalleventa as dv
                    INNER JOIN productos AS p ON p.id = dv.idProd
                    WHERE
                    dv.idVenta = '$idVenta'";
             
                    $query= $con->prepare($queryDetalle);
                    $query->execute();
                    $total=0;
                    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach($resultado as $row){
                        
                        $total=$total+$row['subTotal'];
                    
         
              
                ?>

        <tr>
            <td><?php echo $row['nombrep'] ?></td>
            <td><?php echo $row['cantidad'] ?></td>
            <td><?php echo $row['precio'] ?></td>
            <td><?php echo $row['subTotal'] ?></td>
        </tr>
        <?php
                    }
                ?>

<tr>
                    <td colspan="3" class="text-right">Total:</td>
                    <td><?php echo $total; ?></td>
                </tr>

            </tbody>
        </table>
        <a class="btn btn-secondary float-right" target="_blank" href="imprimirFactura.php?idVenta=<?php echo $idVenta ?>" role="button">Imprimir factura <i class="fas fa-file-pdf"></i> </a>
        <?php
        }
    
?>